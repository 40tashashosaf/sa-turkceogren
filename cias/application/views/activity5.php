<div class="content-wrapper">
<!DOCTYPE html>
<html>
  <body>
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div style="position: relative;left: 530px; top: 10px;" id="player"></div>
<!DOCTYPE html>
<html>
  
  <body>
    <div style="position: relative;top: 20px;  visibility: hidden "  id='container'>
      <div id='title'>
        <h1>Videolu İnteraktif Quiz</h1>
      </div>
        <br/>
        <div id='quiz'></div>
        <div class='button' style="width: 80px;" id='next'><a href='#'>Sonraki</a></div>
      </div>

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type="text/javascript" src='questions.json'></script>
    <script type='text/javascript' src='jsquiz.js'></script>
  </body>
</html>

<style type="text/css">
  body {
    font-family: Open Sans;
}

h1 {
    text-align: center;
}

#title {
    text-decoration: underline;
}

#quiz {
    text-indent: 10px;
    display:none;
}

.button {
    border:4px solid;
    border-radius:5px;
    width: 40px;
    padding-left:5px;
    padding-right: 5px;
    position: relative;
    float:right;
    background-color: #DCDCDC;
    color: black;
    margin: 0 2px 0 2px;
}

.button.active {
    background-color: #F8F8FF;
    color: #525252;
}

button {
    position: relative;
    float:right;
}

.button a {
    text-decoration: none;
    color: black;
}

#container {
    width:50%;
    margin:auto;
    padding: 0 25px 40px 10px;
    background-color: #1E90FF;
    border:4px solid #B0E0E6;
    border-radius:5px;
    color: #FFFFFF;
    font-weight: bold;
    box-shadow: 5px 5px 5px #888;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

#prev {
    display:none;
}

#start {
    display:none;
    width: 90px;
}
</style>
    <script>

      (function() {
  var questions = [{
    question: "Ülkeyi Kim Yönetir?",
    choices: ["Cumhurbaşkanı", "Başbakan", "Kaymakam", "Vali", "Savcı"],
    correctAnswer: 0
  }, {
    question: "What is 3*6?",
    choices: [3, 6, 9, 12, 18],
    correctAnswer: 4
  }, {
    question: "What is 8*9?",
    choices: [72, 99, 108, 134, 156],
    correctAnswer: 0
  }, {
    question: "What is 1*7?",
    choices: [4, 5, 6, 7, 8],
    correctAnswer: 3
  }, {
    question: "What is 8*8?",
    choices: [20, 30, 40, 50, 64],
    correctAnswer: 4
  }];
  
  var questionCounter = 0; //Tracks question number
  var selections = []; //Array containing user choices
  var quiz = $('#quiz'); //Quiz div object
  
  // Display initial question
  displayNext();
  
  // Click handler for the 'next' button
  $('#next').on('click', function (e) {
    document.getElementById("container").style.visibility = "hidden";
     player.playVideo();
    e.preventDefault();
    
    // Suspend click listener during fade animation
    if(quiz.is(':animated')) {        
      return false;
    }
    choose();
    
    // If no user selection, progress is stopped
    if (isNaN(selections[questionCounter])) {
      alert('Please make a selection!');
    } else {
      questionCounter++;
      displayNext();
    }
  });
  
  // Click handler for the 'prev' button
  $('#prev').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
    choose();
    questionCounter--;
    displayNext();
  });
  
  // Click handler for the 'Start Over' button
  $('#start').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
    questionCounter = 0;
    selections = [];
    displayNext();
    $('#start').hide();
  });
  
  // Animates buttons on hover
  $('.button').on('mouseenter', function () {
    $(this).addClass('active');
  });
  $('.button').on('mouseleave', function () {
    $(this).removeClass('active');
  });
  
  // Creates and returns the div that contains the questions and 
  // the answer selections
  function createQuestionElement(index) {
    var qElement = $('<div>', {
      id: 'question'
    });
    
    var header = $('<h2>Question ' + (index + 1) + ':</h2>');
    qElement.append(header);
    
    var question = $('<p>').append(questions[index].question);
    qElement.append(question);
    
    var radioButtons = createRadios(index);
    qElement.append(radioButtons);
    
    return qElement;
  }
  
  // Creates a list of the answer choices as radio inputs
  function createRadios(index) {
    var radioList = $('<ul>');
    var item;
    var input = '';
    for (var i = 0; i < questions[index].choices.length; i++) {
      item = $('<li>');
      input = '<input type="radio" name="answer" value=' + i + ' />';
      input += questions[index].choices[i];
      item.append(input);
      radioList.append(item);
    }
    return radioList;
  }
  
  // Reads the user selection and pushes the value to an array
  function choose() {
    selections[questionCounter] = +$('input[name="answer"]:checked').val();
  }
  
  // Displays next requested element
  function displayNext() {
    quiz.fadeOut(function() {
      $('#question').remove();
      
      if(questionCounter < questions.length){
        var nextQuestion = createQuestionElement(questionCounter);
        quiz.append(nextQuestion).fadeIn();
        if (!(isNaN(selections[questionCounter]))) {
          $('input[value='+selections[questionCounter]+']').prop('checked', true);
        }
        
        // Controls display of 'prev' button
        if(questionCounter === 1){
          $('#prev').show();
        } else if(questionCounter === 0){
          
          $('#prev').hide();
          $('#next').show();
        }
      }else {
        var scoreElem = displayScore();
        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
      }
    });
  }
  
  // Computes score and returns a paragraph element to be displayed
  function displayScore() {
    var score = $('<p>',{id: 'question'});
    
    var numCorrect = 0;
    for (var i = 0; i < selections.length; i++) {
      if (selections[i] === questions[i].correctAnswer) {
        numCorrect++;
      }
    }
    
    score.append('You got ' + numCorrect + ' questions out of ' +
                 questions.length + ' right!!!');
    return score;
  }
})();
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();

      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 2500); 
          setTimeout(stopVideo, 25000);
             

          done = true;
        }
      }
      function stopVideo() {
        player.pauseVideo();
        document.getElementById("container").style.visibility = "visible"; 
      }
    </script>
  </body>
</html>
</div>