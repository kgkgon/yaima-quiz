@include('layouts.head')
<title>八重山クイズTOP</title>
</head>

<body>
  <!-- header -->
  <header class="fixed">
    <h1><a href="/">八重山クイズ</a></h1>
    <div class="sp-menu js-toggle-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="top-nav">
      <ul>
        <li><a href="/quiz">クイズへ</a></li>
        <li><a href="#about-yaeyama">八重山とは</a></li>
        <li><a href="#can">できること</a></li>
        <li><a href="#news">お知らせ</a></li>
        <li><a href="#">登録</a></li>
        <li><a href="#">ログイン</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="l-section l-section-top js-slider">
      <div class="top-copy">
        <div class="top-message">
          訪れるだけではわからない魅力をクイズから。
        </div>
        <div class="top-link">
          <a href="/quiz">クイズに挑戦！</a>
        </div>
      </div>
    </section>
    <section id="about-yaeyama" class="container l-section l-default">
      <h2 class="section-title title-center title-border">八重山ってなぁに？</h2>
      <div class="row mt-3">
        <div class="col-md-6 col-sm-12 border-right">
          <article class="section-message">
            <p>「八重山（やえやま）」こと八重山諸島は沖縄の南西に位置する離島のことを指します。<br>
              八重山は中心となる石垣島をはじめ、竹富島、小浜島、黒島、新城島（上地島、下地島）、西表島、由布島、鳩間島、波照間島、与那国島の合計12の島から成り立っています。<br>
              同じ沖縄である沖縄本島とはまた違った独特な文化や、豊かな自然がこの八重山にはあります。<br>
              この「八重山クイズ」を通して楽しみながら八重山についての魅力や、新しい発見が生まれることでしょう。</p>
          </article>
        </div>
        <div class="col-md-6 col-sm-12">
          <img class="img-map" src="images/yaeyama_map.gif" alt="八重山諸島の地図">
        </div>
      </div>
    </section>
    <section id="can" class="l-section l-default">
      <h2 class="section-title title-center title-border">できること</h2>
      <div class="can">
        <div class="can-head">
          <h3>01</h3>
          <p>クイズに挑戦！</p>
        </div>
        <img class="can-body" src="images/can01.png" alt="できること01">
        <div class="can-text">
          <p>八重山クイズを色々なジャンルから楽しむ事ができます。あなたは何問正解できるかな？<br>
            一度訪れた事がある方も八重山について知らないことがまだまだたくさんあるはず！</p>
        </div>
      </div>
      <div class="can">
        <div class="can-head">
          <h3>02</h3>
          <p>クイズを作成<span class="notice">現在開発中</span></p>
        </div>
        <img class="can-body" src="images/can02.png" alt="できること02">
        <div class="can-text">
          <p>地元の人、地元以外の人、誰でも八重山に関するクイズを作成することができます。<br>
            あなたが作成したクイズをみんなに解いてもらおう！</p>
        </div>
      </div>
      <div class="can">
        <div class="can-head">
          <h3>03</h3>
          <p>クイズを管理<span class="notice">現在開発中</span></p>
        </div>
        <img class="can-body" src="images/can03.png" alt="できること03">
        <div class="can-text">
          <p>あなたが作成したクイズをマイページから管理することができます。<br>
            より良いクイズを作成したり今までのクイズを振り返ることができるよ！</p>
        </div>
      </div>

    </section>
    <section id="news" class="l-default l-section">
      <h2 class="section-title title-center title-border">お知らせ</h2>
      <ul class="news-list">
        <li class="news-item"><time>2019.05.07</time>八重山クイズver1リリースしました。</li>
      </ul>
    </section>
  </main>
  <!-- footer -->
  <footer id="footer">
    Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer>
  <script src=" {{ mix('js/app.js') }} "></script>
  <script src="js/bgswitcher.js"></script>
  <script src="js/toppage.js"></script>
</body>

</html>