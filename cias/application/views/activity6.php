  <div class="content-wrapper">
<!-- Code for tutorial: https://www.youtube.com/watch?v=4eIRrowvLRk -->
<!-- DevHoot Publication -->
<!-- Website:  https://devhoot.ooo -->
<!-- Note: This code was produced by Imran Khan @DevHoot -->
<!-- If you find this useful consider subscribing to our YouTube channel and website -->
<!-- patreon Support:  https://www.patreon.com/devhoot -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="align-items: center;">
    <!-- Input area -->
    <div align="center">
    <label for="Speech Recognition">Sesli Kontrol Alıştırması</label>
    <div></div>
    <label for="Speech Recognition">Lütfen Aşağıdaki Cümleleri sırayla söyleyiniz(cümlelerin sonunda kontrol et butonuna basınız) : <div>
        <label id="kalem" >Kalem</label><br>
        <label  id="silgi" style=" visibility: hidden; ">Silgi</label><br>
        <label id="kitap" style="visibility: hidden; ">Kitap</label><br>
        <label  id="defter" style="visibility: hidden; ">Defter</label><br>
    </div>
    <div>
    <textarea style="width: 500px;height: 200px;" type="text" name="" id="speechToText" placeholder="Buraya Tıkladıktan Sonra Konuşunuz" onclick="record()"></textarea>
    </div>
    <button style="width: 80px; height: 30px;" type="button" onclick="myFunction()">Kontrol Et</button>
    <div></div>
    <label id="resultx"></label>
</div>
    <!-- Below is the script for voice recognition and conversion to text-->
    <script>
        function record() {
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "tr";

            recognition.onresult = function(event) {
                // console.log(event);
                document.getElementById('speechToText').value = event.results[0][0].transcript;
            }
            recognition.start();

        }
    </script>
    <!-- end of script -->
</body>
</html>
<html>
<body>


<style type="text/css">
    .mystyle {
 text-decoration: line-through;
  color: red;
}
</style>




<p id="demo"></p>

<script>
function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("speechToText").value;

  // If x is Not a Number or less than one or greater than 10
  if (x == "kalem" ) {
    document.getElementById('resultx').innerHTML 
                = 'Doğru';
                document.getElementById("silgi").style.visibility = "visible"; 
                var element = document.getElementById("kalem");
   element.classList.add("mystyle");
  document.getElementById('speechToText').value = "";

  }
   else if (x == "silgi" ) {
    document.getElementById('resultx').innerHTML 
                = 'Doğru';
                document.getElementById("kitap").style.visibility = "visible"; 
                var element = document.getElementById("silgi");
   element.classList.add("mystyle");
  document.getElementById('speechToText').value = "";

  }
   else if (x == "kitap" ) {
    document.getElementById('resultx').innerHTML 
                = 'Doğru';
                document.getElementById("defter").style.visibility = "visible"; 
                var element = document.getElementById("kitap");
   element.classList.add("mystyle");
   document.getElementById('speechToText').value = "";

  }
  else if (x == "defter" ) {
    document.getElementById('resultx').innerHTML 
                = 'Doğru';
              
                var element = document.getElementById("defter");
   element.classList.add("mystyle");
   document.getElementById('speechToText').value = "";

  }
   else {
    document.getElementById('resultx').innerHTML 
                = 'Yanlış Lütfen Tekrar Deneyiniz'; 
  }
 
}

</script>


</body>
</html> 
  

</div>