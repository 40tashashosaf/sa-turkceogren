<div    class="content-wrapper">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
  <header>
    <div class="col-md-8 col-md-offset-2">
      <h2 class="text-center">Çoktan Seçmeli Sorular</h2>
      <hr>
    </div>
  </header>
  
  <div id="main-game">
    
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="timer text-center" id="game-timer">30</div>
        <div class="jumbotron text-center" id="question-container">I am a Question???
        </div>

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="text-center" id="answers-container">
              <div class="answer" data-content="1000">I am an answer.</div>
              <div class="answer" data-content="1001">I am an answer.</div>
              <div class="answer" data-content="1002">I am an answer.</div>
              <div class="answer" data-content="1003">I am an answer.</div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row top-buffer">
      <div class="col-md-8 col-md-offset-2">
        <div class="well" id="answer-response">I am the explanation to the answer.</div>
      </div>
    </div>  

    <hr>  

    <footer>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <button class="btn btn-primary pull-left" id="previousQ">&nbsp;Previous&nbsp;</button>
          <button class="btn btn-primary pull-right" id="nextQ">&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;</button>
          <button class="btn btn-primary pull-right" id="finish">&nbsp;&nbsp;Finish&nbsp;&nbsp;</button>
        </div>
      </div>      
    </footer>
    
  </div>
  
  <div id="splash-screen" class="container top-buffer">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="jumbotron text-center">
          <h2>Süre Bitmeden Tüm Soruları Cevaplamanız Gerekmektedir</h2>
          <div class="small">(Bu Sınav İçin Süreniz 5 Dakikadır)</div>
        </div>
      </div>
    </div>
    <div class="row">    
      <div class="col-md-offset-2 col-md-8 text-center">
        <button id="start" class="btn btn-primary btn-lg">Sınava Başla</button>
      </div>
    </div>
  </div>
  
  <div id="results-display" class="container top-buffer">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 text-center">
        <h4>Cevaplarınız</h4>
        <div class="well" id="answerHistory">
          <table class="table">
            <thead>
              <tr>
                <th>Soru</th>
                <th>Cevabınız</th>
                <th>Doğru Cevap</th>
                <th>Sonuç</th>
              </tr>
            </thead>
            <tbody id="result-rows">
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">    
      <div class="col-md-offset-2 col-md-8 text-center">
        <button id="restart" class="btn btn-lg btn-primary">Restart</button>
      </div>
    </div>
  </div>
  
</div>

<style type="text/css">
  body {
  background-color: #333;
}

.timer {
  color: #f49242;
  font-weight: bold;
  font-size: 1.6em;
  padding: 6px;
  margin: 0px auto 10px;
  border: 1px solid #c6c6c2;
  border-radius: 5px;
  width: 80px;
}

.answer{
  width: 100%;
border:1px solid #a8c1d5; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #CEDCE7; background-image: -webkit-gradient(linear, left top, left bottom, from(#CEDCE7), to(#596a72));
 background-image: -webkit-linear-gradient(top, #CEDCE7, #596a72);
 background-image: -moz-linear-gradient(top, #CEDCE7, #596a72);
 background-image: -ms-linear-gradient(top, #CEDCE7, #596a72);
 background-image: -o-linear-gradient(top, #CEDCE7, #596a72);
 background-image: linear-gradient(to bottom, #CEDCE7, #596a72);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#CEDCE7, endColorstr=#596a72);
}

.answer:hover{
 border:1px solid #8aabc5;
 background-color: #acc4d6; background-image: -webkit-gradient(linear, left top, left bottom, from(#acc4d6), to(#434f55));
 background-image: -webkit-linear-gradient(top, #acc4d6, #434f55);
 background-image: -moz-linear-gradient(top, #acc4d6, #434f55);
 background-image: -ms-linear-gradient(top, #acc4d6, #434f55);
 background-image: -o-linear-gradient(top, #acc4d6, #434f55);
 background-image: linear-gradient(to bottom, #acc4d6, #434f55);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#acc4d6, endColorstr=#434f55);
}

.top-buffer {
  margin-top: 20px;
}
</style>
<script type="text/javascript">
  var quesIndex;
var gameTimer;
var timeAllotted = 60; //seconds

var questionBank = [
 {
   question:"Ülkeyi Kim Yönetir?",
   answers:[
     {ansID: 1000, answer:"Cumhurbaşkanı"},
     {ansID: 1001, answer:"Başbakan"},
     {ansID: 1002, answer:"Kaymakam"},
     {ansID: 1003, answer:"Vali"},
   ],
   correct: 1000,
   selected: null,
   reason: "Ülkeyi Cumhurbaşkanı Yönetir"
 },
 {
   question:"Aşağıdakilerden hangisi Fazla kelimesinin benzeridir?",
   answers:[
     {ansID: 1003, answer:"Az"},
     {ansID: 1004, answer:"Çok"},
     {ansID: 1005, answer:"Geniş"},
     {ansID: 1006, answer:"Varlık"},
   ],
   correct: 1004,
   selected: null,
   reason: "Fazla kelimesinin benzeri Çoktur"
 },
 {
   question:"İmkansız kelimesinin karşıtıdır?",
   answers:[
     {ansID: 1007, answer:"Sonuç"},
     {ansID: 1008, answer:"Hayır"},
     {ansID: 1009, answer:"Olası"},
     {ansID: 1010, answer:"Güzel"},
   ],
   correct: 1009,
   selected: null,
   reason: "İmkansız kelimesinin karşıtı Olasıdır"
 },     
 
 
 {
   question: "Türkiyenin Başkenti Neresidir?",
   answers:[
     {ansID: 1011, answer:"Ankara"},
     {ansID: 1012, answer:"Antalya"},
     {ansID: 1013, answer:"Konya"},
     {ansID: 1014, answer:"İstanbul"},
   ],
   correct: 1011,
   selected: null,
   reason: "Türkiyenin Başkenti Ankaradır" 
 },     
];

function populateQuestionDetails() {
  $("#answer-response").hide();
  
  $("#question-container").empty();
  $("#answers-container").empty();
  $("#answer-response").empty();
  
  $("#question-container").html(questionBank[quesIndex].question);
  
  var quesAnswers = questionBank[quesIndex].answers;
  
  for (var i=0; i < quesAnswers.length; i++) {
    $("#answers-container").append('<div class="answer" data-content="' + quesAnswers[i].ansID + '">' + quesAnswers[i].answer + '</div>');
  }
  
  renderQuesControls();
}

function renderQuesControls() {
  if (quesIndex === 0) {
    $("#previousQ").hide();
    $("#nextQ").show();
  } else if (quesIndex === questionBank.length-1) {
    $("#previousQ").show();
    $("#nextQ").hide();     
    $("#finish").show();
  } else {
    $("#previousQ").show();
    $("#nextQ").show();    
  }
  // console.log("quesIndex: " + quesIndex + " length: " + questionBank.length);
}

function getPreviousQuestion() {
  quesIndex--;
  populateQuestionDetails();
}

function getNextQuestion() {
  quesIndex++;
  populateQuestionDetails();
}

function processAnswer() {
  var selectedAnsID = parseInt($(this).attr("data-content"));
  var correctAnsID = questionBank[quesIndex].correct;
  
  if (selectedAnsID === correctAnsID) {
      $("#answer-response").html("<h4>Doğru Cevap!</h4>");
  } else {
      $("#answer-response").html("<h4>Üzgünüm Yanlış Cevap.</h4>");
  }
  
  $("#answer-response").append(questionBank[quesIndex].reason);
  $("#answer-response").show();
  
  //save the answer the user selected in the questionBank
  questionBank[quesIndex].selected = selectedAnsID;
  
  console.log(questionBank[quesIndex].selected);
}

$(document).ready(function () {
  //pre init routine
  $("#main-game").hide();
  $("#results-display").hide();
  $("#previousQ").hide();
  $("#nextQ").hide();
  $("#finish").hide();
});

function updateClock() {
  timeAllotted--;
  $("#game-timer").html(timeAllotted);
  if (timeAllotted === 0) {
    clearInterval(gameTimer);
    endGame();
  }
}

$("#start").on("click", function () {
  $("#splash-screen").hide();
  $("#main-game").show();

  gameTimer = setInterval(updateClock, 1000);
  
  quesIndex = 0;
  populateQuestionDetails(quesIndex);
});

/*
Here's a neat trick: for elements that are dynamically created existing handlers pointed to that type of element (via class or id, whichever) will not be automatically bound. Instead of $("[.|#]identifier").on("click", function) bind it to the document for it's id/class as shown below.
*/
$(document).on("click", ".answer", processAnswer);

$("#previousQ").on("click", getPreviousQuestion);

$("#nextQ").on("click", getNextQuestion);

$("#finish").on("click", endGame);

function endGame() {
  $("#main-game").hide();
  processResults();
  $("#results-display").show();
}

$("#restart").on("click", function () {
  console.log("reload the game.");
  window.location.reload()
});

function processResults() {
  var status;
  var correct = 0;
  var incorrect = 0;
  var score = 0;
  
  for (var i=0; i < questionBank.length; i++) {
    if (questionBank[i].correct === questionBank[i].selected) {
      correct++;
      status = "Doğru";
    } else {
      incorrect++;
      status = "Yanlış";
    }
    
    //sorry the below is verbose. I know :( I could only see so far ahead. If I had more time I'd refactor it to end cleaner.
    
    if (questionBank[i].selected !== null) {
      //get selected text
      var selectedText = "NA";
      for (var j=0; j < questionBank[i].answers.length; j++) {
        if (questionBank[i].answers[j].ansID === questionBank[i].selected) {
          selectedText = questionBank[i].answers[j].answer;
          break;
        }
      }
    } else {
      selectedText = "--";
    }         
    //get correct ans text
    var correctText = "NA";
    for (var k=0; k < questionBank[i].answers.length; k++) {
      if (questionBank[i].answers[k].ansID === questionBank[i].correct) {
        correctText = questionBank[i].answers[k].answer;
        break;
      }
    }
    
    $("#result-rows").append("<tr><td>" + questionBank[i].question + "</td><td>" + selectedText + "</td><td>" + correctText + "</td><td>" + status + "</td></tr>");
  }
  
  
}
</script>



</div>