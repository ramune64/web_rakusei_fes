<!DOCTYPE html>
<html lang="ja">
<head>
  <title>第73回洛星文化祭～宴～</title>
  <!-- css -->
  <link rel="stylesheet" href="stylesheet/slick.css">
  <link rel="stylesheet" href="stylesheet/slick-theme.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <?php include "links.html" ?>
  <link rel="stylesheet" href="../stylesheet/live.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
</head>
<body>
        <?php include "header-nav.php" ?>
        <div class="wrap">
        <div id="hontai">
        <div class="main_content">
            <div class="inner_content inner_top slider_content" id="page1-2">
                <h1>ライブ</h1>
                <div class="container">
            <div class="slider">
                <div class="slick-img"><img src="image/zero.png" alt=""></div>
                <div class="slick-img"><img src="image/５バックス - tatsuki hagino.jpg" alt=""></div>
                <div class="slick-img"><img src="image/Band Boys ロゴ - kazuya ota.png" alt=""></div>
                <div class="slick-img"><img src="image/now loading.png" alt=""></div>
                <div class="slick-img"><img src="image/EDM- yoshihiro dan.jpg" alt=""></div>
                <div class="slick-img"><img src="image/桂.png" alt=""></div>
                <div class="slick-img"><img src="image/AZ.png" alt=""></div>
                <div class="slick-img"><img src="image/子安.png" alt=""></div>
            </div>
            </div>
            </div>
            <div class="inner_content band" id="page1-3">
                <h1>会場:第一音楽室</h1>
                <section>
                  <h3>√ZERO</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　11:50~12:30</b></p>
                  <p>全員サッカー部で結成された６人組バンドです！</p>
                </section>
                <section>
                  <h3>5BUCKS</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　13:00~13:30</b></p>
                  <p>Gu & Vo. 上水捻士</p>
                  <p>Gu. 萩野樹</p>
                  <p>Ba. 森下颯斗</p>
                  <p>Dr. 中ノ内恒朝</p>
                  <p>Key. 前野理玖</p>
                </section>
                <section>
                  <h3>Band Boys</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　13:55~14:35</b></p>
                  <p>僕たちは高２生バンドです。Band Boysです。ここまで色々ありつつもなんとかやってきたんです。なので見てほしいんです。Band Boysです。</p>
                </section>
                <section>
                  <h3>Now Loading</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　14:40~15:30</b></p>
                  <p>Vo.三代 素輝</p>
                  <p>Gt.福光 航</p>
                  <p>Gt.大野 充稀</p>
                  <p>Ba.照屋 皓太</p>
                  <p>Dr.山中 孝之介</p>
                  <p>Key.小山 賛</p>
                </section>

                <section>
                  <h3>3DSEREASE</h3>
                  <p class="live_time">時間：<b>3日目(.15日)　10:00~10:40</b></p>
                  <p>多種多様な種類のEDM、初めて聞く神曲やリミックスされた邦楽・洋楽、ゲームサウンド等のショートミックスをDJします。叫びたい方、真のEDMを楽しみたい方是非！</p>
                </section>
                <section>
                  <h3>桂は市外</h3>
                  <p class="live_time">時間：<b>3日目(.15日)　11:00~11:40</b></p>
                  <p>Vo./Gt. 真舟</p>
                  <p>Gt./Vo. A.Haruki</p>
                  <p>Ba. KONA</p>
                  <p>Dr. hide</p>
                  <p>Key. 好玄</p>
                </section>
                <section>
                  <h3>第五線上の"AZ" </h3>
                  <p class="live_time">時間：<b>3日目(.15日)　12:00~12:40</b></p>
                  <p>Gt.&Vo. @frennn._23</p>
                  <p>Gt. @tom.o_0727</p>
                  <p>Ba. @negaaaaaa_00</p>
                  <p>Dr. @ttk_u.6</p>
                  <p>Key. @jt_0803</p>
                </section>
                <section>
                  <h3>20代目 おかあちゃんごめんね</h3>
                  <p class="live_time">時間：<b>3日目(.15日)　13:00~13:40</b></p>
                  <p>子安先生と高３のみんなたち</p>
                </section>
            </div>
        </div>
    </div>
    </div>
    <?php include "footer.html" ?>
        </div>
        <!-- js -->
        <script src="js/slick.min.js"></script>
        <script>
            
            $(function() {
  $('.slider').slick({
    speed: 500,
    autoplay: true, // 自動再生ON
    dots: true, // ドットインジケーターON
    centerMode: true, // 両サイドに前後のスライド表示
    centerPadding: '0px', // 左右のスライドのpadding
    slidesToShow: 3, // 一度に表示するスライド数
    
  });
});
            
        </script>
</body>
</html>