<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>بنگاه</title>
  <link rel="stylesheet" href="/calculatorAssets/normalize.min.css">
  <link rel="stylesheet" href="/calculatorAssets/style.css">
  <script src="/calculatorAssets/prefixfree.min.js"></script>

</head>
<body>
<br></br>
<br></br>
<div id="app">

  <div class="calculator">
    <center>
      <img src="\img\logo\logo.png" height="60px" alt="" /><br></br>
      <p style="color: white">سامانه یکپارچه مدیریت اطلاعات بنگاه</p>
    </center>
    <button @click="changeModeEvent" class="toggle-button">
      <p v-if="changeMode">ماشین حساب پیشرفته &nbsp; &nbsp; &#9864;</p>
      <p v-else>ماشین حساب ساده &nbsp; &nbsp; &#9862;</p>
    </button>
    <div class="results">
      <input class="input" v-model="current" />
    </div>
    <div class="mode" v-if="changeMode">
      <button class="button" @click="press">7</button>
      <button class="button" @click="press">8</button>
      <button class="button" @click="press">9</button>
      <button class="button" @click="press">*</button>
      <button class="button" @click="press">&#60;=</button>
      <button class="button" @click="press">C</button>
      <button class="button" @click="press">4</button>
      <button class="button" @click="press($event)">5</button>
      <button class="button" @click="press">6</button>
      <button class="button" @click="press">/</button>
      <button class="button" @click="press">(</button>
      <button class="button" @click="press">)</button>
      <button class="button" @click="press">1</button>
      <button class="button" @click="press">2</button>
      <button class="button" @click="press">3</button>
      <button class="button" @click="press">-</button>
      <button class="button" @click="press">x ²</button>
      <button class="button" @click="press">±</button>
      <button class="button" @click="press">0</button>
      <button class="button" @click="press">.</button>
      <button class="button" @click="press">%</button>
      <button class="button" @click="press">+</button>
      <button class="button equal-sign" @click="press">=</button>
    </div>
    <div class="mode" v-else>
      <button class="button" @click="press">sin</button>
      <button class="button" @click="press">cos</button>
      <button class="button" @click="press">tan</button>
      <button class="button" @click="press">x^</button>
      <button class="button" @click="press">&#60;=</button>
      <button class="button" @click="press">C</button>
      <button class="button" @click="press">log</button>
      <button class="button" @click="press">ln</button>
      <button class="button" @click="press">e</button>
      <button class="button" @click="press">∘</button>
      <button class="button" @click="press">rad</button>
      <button class="button" @click="press">√</button>
      <button class="button" @click="press">7</button>
      <button class="button" @click="press">8   </button>
      <button class="button" @click="press">9</button>
      <button class="button" @click="press">/</button>
      <button class="button" @click="press">x ²</button>
      <button class="button" @click="press">x !</button>
      <button class="button" @click="press">4</button>
      <button class="button" @click="press">5</button>
      <button class="button" @click="press">6</button>
      <button class="button" @click="press">*</button>
      <button class="button" @click="press">(</button>
      <button class="button" @click="press">)</button>
      <button class="button" @click="press">1</button>
      <button class="button" @click="press">2</button>
      <button class="button" @click="press">3</button>
      <button class="button" @click="press">-</button>
      <button class="button" @click="press">%</button>
      <button class="button" @click="press">±</button>
      <button class="button" @click="press">0</button>
      <button class="button" @click="press">.</button>
      <button class="button" @click="press">&#x003C0;</button>
      <button class="button" @click="press">+</button>
      <button class="button equal-sign" @click="press">=</button>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='/calculatorAssets/vue.min.js'></script>
  <script  src="/calculatorAssets/script.js"></script>

</body>
</html>
