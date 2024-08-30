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
                <h1>小劇場</h1>
                <div class="container">
            <div class="slider">
                <div class="slick-img"><img src="image/s1.jpg" alt=""></div>
                <div class="slick-img"><img src="image/s2.jpg" alt=""></div>
                <div class="slick-img"><img src="image/s3.jpg" alt=""></div>
                <div class="slick-img"><img src="image/s4.jpg" alt=""></div>
                <div class="slick-img"><img src="image/s5.jpg" alt=""></div>
                <div class="slick-img"><img src="image/s6.jpg" alt=""></div>
            </div>
            </div>
            </div>
            <div class="inner_content 演目" id="page1-3">
                <h1>会場:選択3・4</h1>
                <section>
                  <h3>Piano man in Rakusei 第一部</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　10:00~11:00</b></p>
                  <p>メンバー：不明</p>
                  <p>約10分程度</p>
                </section>
                <section>
                  <h3>ピアノ同好会</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　11:00~12:00</b></p>
                  <p>ピアノ同好会による公演をします</p>
                </section>
                <section>
                  <h3>弾き語り</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　12:00~13:00</b></p>
                  <p>メンバー：根来</p>
                  <p></p>
                </section>
                <section>
                  <h3>お笑い</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　13:00~14:00</b></p>
                  <p>大喜利やフリップネタを通じて、みんなを笑わせます</p>
                </section>
                <section>
                  <h3>ビートボックス</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　14:00~15:00</b></p>
                  <p>約40分程度で行います</p>
                </section>
                <section>
                  <h3>Piano man in Rakusei 第二部</h3>
                  <p class="live_time">時間：<b>2日目(.14日)　15:00~16:00</b></p>
                  <p>同日朝10時からした内容の第二部として行いますぜひ来てください!</p>
                </section>
                <section>
                  <h3>落語</h3>
                  <p class="live_time">時間：<b>3日目(.15日)　10:00~11:00</b></p>
                  <p>メンバー：上野</p>
                  <p>落語をします</p>
                </section>
                <section>
                  <h3>ピアノ同好会</h3>
                  <p class="live_time">時間：<b>3日目(.15日)　11:00~12:00</b></p>
                  <p>二日目同様ピアノ同好会による公演をします</p>
                </section>
                <section>
                  <h3>漫才</h3>
                  <p class="live_time">時間：<b>3日目(.15日)　12:00~13:00</b></p>
                  <p>メンバー：後藤</p>
                  <p>漫才をします</p>
                </section>
                <section>
                  <h3>弾き語り</h3>
                  <p class="live_time">時間：<b>3日目(.15日)　13:00~14:00</b></p>
                  <p>メンバー：徳見</p>
                  <p>30~60分程度弾き語りします</p>
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