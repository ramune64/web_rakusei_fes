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
                <div class="slick-img"><img src="image/slide_img.png" alt=""></div>
                <div class="slick-img"><img src="image/flower.png" alt=""></div>
                <div class="slick-img"><img src="image/slide_img.png" alt=""></div>
                <div class="slick-img"><img src="image/slide_img.png" alt=""></div>
                <div class="slick-img"><img src="image/slide_img.png" alt=""></div>
            </div>
            </div>
            </div>
            <div class="inner_content band" id="page1-3">
                <h1>会場:第一音楽室</h1>
                <section>
                  <h3>バンド名</h3>
                  <p class="live_time">時間：<b>n日目　09:00~15:00</b></p>
                  <p>Vo.メンバー名</p>
                  <p>Gt.メンバー名</p>
                  <p>Ba.メンバー名</p>
                  <p>Dr.メンバー名</p>
                  <p>Key.メンバー名</p>
                </section>
                <section>
                  <h3>バンド名</h3>
                  <p class="live_time">時間：<b>n日目　09:00~15:00</b></p>
                  <p>Vo.メンバー名</p>
                  <p>Gt.メンバー名</p>
                  <p>Ba.メンバー名</p>
                  <p>Dr.メンバー名</p>
                  <p>Key.メンバー名</p>
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