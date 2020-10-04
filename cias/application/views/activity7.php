<div class="content-wrapper">
	<div style="position: relative;left: 500px;top: 75px;">
<img src="https://images.all-free-download.com/images/graphiclarge/bar_drawing_bartender_guest_icons_colored_cartoon_6834897.jpg">
   </div>
  
  
<div class="talk-bubble tri-right border round btm-left-in">
  <div class="talktext">
    <p id="waiter">Hoşgeldiniz ne Alırdınız?</p>
  </div>
</div>
<div style="position: relative;bottom: 80px;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="align-items: center;">
    <!-- Input area -->
    <div align="center">
    
    <div></div>
    <label for="Speech Recognition">Seçenekler: <label style="color: red;">Çay-Kola-Meyve Suyu</label><div><label style="color: red;">Seçtiğiniz İçeceği Sonunda Lütfen Olacak Şekilde Söyleyiniz</label></div></label>
    <div>
    <textarea style="width: 500px;height: 200px;" type="text" name="" id="speechToText" placeholder="Buraya Tıkladıktan Sonra Konuşunuz" onclick="record()"></textarea>
    </div>
    <button style="width: 90px; height: 30px;" type="button" onclick="myFunction()">Cevapla</button>
    <div></div>
    <label id="resultx"></label>
</div>


    <!-- Below is the script for voice recognition and conversion to text-->
    <script>
    		function yourFunction(){
     
};
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
</div>

<style type="text/css">
	/* General CSS Setup */
body{
  background-color: lightblue;
  font-family: "Ubuntu-Italic", "Lucida Sans", helvetica, sans;
}

/* container */
.container {
  padding: 5% 5%;
}

/* CSS talk bubble */
.talk-bubble {
	margin: 40px;
  
  position: relative;
  left: 920px;
  bottom: 450px;
	width: 200px;
	height: auto;
	background-color: white;
}
.border{
  border: 8px solid #666;
}
.round{
  border-radius: 30px;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;

}

/* Right triangle placed top left flush. */
.tri-right.border.left-top:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -40px;
	right: auto;
  top: -8px;
	bottom: auto;
	border: 32px solid;
	border-color: #666 transparent transparent transparent;
}
.tri-right.left-top:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -20px;
	right: auto;
  top: 0px;
	bottom: auto;
	border: 22px solid;
	border-color: lightyellow transparent transparent transparent;
}

/* Right triangle, left side slightly down */
.tri-right.border.left-in:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -40px;
	right: auto;
  top: 30px;
	bottom: auto;
	border: 20px solid;
	border-color: #666 #666 transparent transparent;
}
.tri-right.left-in:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -20px;
	right: auto;
  top: 38px;
	bottom: auto;
	border: 12px solid;
	border-color: lightyellow lightyellow transparent transparent;
}

/*Right triangle, placed bottom left side slightly in*/
.tri-right.border.btm-left:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	left: -8px;
  right: auto;
  top: auto;
	bottom: -40px;
	border: 32px solid;
	border-color: transparent transparent transparent #666;
}
.tri-right.btm-left:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	left: 0px;
  right: auto;
  top: auto;
	bottom: -20px;
	border: 22px solid;
	border-color: transparent transparent transparent lightyellow;
}

/*Right triangle, placed bottom left side slightly in*/
.tri-right.border.btm-left-in:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	left: 30px;
  right: auto;
  top: auto;
	bottom: -40px;
	border: 20px solid;
	border-color: #666 transparent transparent #666;
}
.tri-right.btm-left-in:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	left: 38px;
  right: auto;
  top: auto;
	bottom: -20px;
	border: 12px solid;
	border-color: lightyellow transparent transparent lightyellow;
}

/*Right triangle, placed bottom right side slightly in*/
.tri-right.border.btm-right-in:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: 30px;
	bottom: -40px;
	border: 20px solid;
	border-color: #666 #666 transparent transparent;
}
.tri-right.btm-right-in:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: 38px;
	bottom: -20px;
	border: 12px solid;
	border-color: lightyellow lightyellow transparent transparent;
}
/*
	left: -8px;
  right: auto;
  top: auto;
	bottom: -40px;
	border: 32px solid;
	border-color: transparent transparent transparent #666;
	left: 0px;
  right: auto;
  top: auto;
	bottom: -20px;
	border: 22px solid;
	border-color: transparent transparent transparent lightyellow;

/*Right triangle, placed bottom right side slightly in*/
.tri-right.border.btm-right:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -8px;
	bottom: -40px;
	border: 20px solid;
	border-color: #666 #666 transparent transparent;
}
.tri-right.btm-right:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: 0px;
	bottom: -20px;
	border: 12px solid;
	border-color: lightyellow lightyellow transparent transparent;
}

/* Right triangle, right side slightly down*/
.tri-right.border.right-in:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -40px;
  top: 30px;
	bottom: auto;
	border: 20px solid;
	border-color: #666 transparent transparent #666;
}
.tri-right.right-in:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -20px;
  top: 38px;
	bottom: auto;
	border: 12px solid;
	border-color: lightyellow transparent transparent lightyellow;
}

/* Right triangle placed top right flush. */
.tri-right.border.right-top:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -40px;
  top: -8px;
	bottom: auto;
	border: 32px solid;
	border-color: #666 transparent transparent transparent;
}
.tri-right.right-top:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -20px;
  top: 0px;
	bottom: auto;
	border: 20px solid;
	border-color: lightyellow transparent transparent transparent;
}

/* talk bubble contents */
.talktext{
  padding: 1em;
	text-align: left;
  line-height: 1.5em;
}
.talktext p{
  /* remove webkit p margins */
  -webkit-margin-before: 0em;
  -webkit-margin-after: 0em;
}
</style>
<script type="text/javascript">
	function record() {
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "tr";

            recognition.onresult = function(event) {
                // console.log(event);
                document.getElementById('speechToText').value = event.results[0][0].transcript;
            }
            recognition.start();

        }
        function clear() {
            
   document.getElementById("speechToText").innerHTML='';


        }

</script>

<script type="text/javascript">
	function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("speechToText").value;

  // If x is Not a Number or less than one or greater than 10
  if (x == "Çay lütfen" ) {
    document.getElementById('waiter').innerHTML 
                = 'Peki Çayınız Geliyor'; 
                document.getElementById('speechToText').value = "";
  }
  else if (x == "kola lütfen" )
  {
  	document.getElementById('waiter').innerHTML 
                = 'Peki Kolanız Geliyor';
                document.getElementById('speechToText').value = "";
  }
  else if (x == "meyve suyu lütfen" )
  {
  	document.getElementById('waiter').innerHTML 
                = 'Peki Meyve Suyunuz Geliyor';
                document.getElementById('speechToText').value = "";
  }
   else {
    document.getElementById('waiter').innerHTML 
                = 'Böyle Bir Seçeneğimiz Yok Üzgünüm'; 
                document.getElementById('speechToText').value = "";
  }
 
}


</script>
</div>