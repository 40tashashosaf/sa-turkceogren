<div class="content-wrapper">
<h1>Aşağıdaki Konuşmayı Sıralayınız</h1>
    <ul id="quiz">
      <li>Buyrun kahveniz</li>
      <li>Günaydın</li>
      <li>Teşekkürler</li>
      <li>Ne alırdınız?</li>
      <li>Bir kahve alabilirmiyim?</li>
      <li>Size de günaydın</li>
      <li>Hemen hazırlıyorum</li>
      
      
    </ul>
    <button onclick="checkAnswer()">Kontrol Et</button>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

    <style type="text/css">
      body {
  font-family: sans-serif;
}
#quiz {
  margin: 0 0 15px 0;
  padding: 0;
}
#quiz li {
  display: block;
  background-color: lightsteelblue;
  padding: 10px;
  border-bottom: 1px solid #fff;
  cursor: move;
  cursor: -webkit-grabbing;
}
#quiz li.sortable-chosen {
  background-color: lightslategray;
}



#source {margin-top: 30px;}
#source a {color: lightslategray; font-size: 14px;}

    </style>
    <script type="text/javascript">
      new Sortable(quiz);

const correctAnswers = [
  "Günaydın",
  "Size de günaydın",
  "Ne alırdınız?",
  "Bir kahve alabilirmiyim?",
  "Hemen hazırlıyorum",
  "Buyrun kahveniz",
  "Teşekkürler",
];

function checkAnswer() {
  const li = document.querySelectorAll("#quiz li");
  let answers = new Array();
  li.forEach(function (text) {
    answers.push(text.innerHTML);
  });
  if (JSON.stringify(correctAnswers) === JSON.stringify(answers)) {
    alert("Tebrikler Doğru Sıraladınız :)");
  } else {
    alert("Tekrar Deneyin");
  }
}
    </script>
</div>