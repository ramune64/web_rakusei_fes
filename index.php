<!DOCTYPE html>
<html lang="ja">
<head>
  <title>練習中2</title>
  <!-- <link rel="stylesheet" href="aaa.css" type="text/css">
  <link rel="icon" href="image\favicon.ico"> -->
  <?php include "links.html" ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
</head>
<body>
        <div class="opening" id="index_op">
          <video src="video/宴アニメーション.mp4" autoplay muted playsinline id="index_video"></video>
          <div id="skip" class="skip"><p>スキップ→</p></div>
        </div>
        <div id="other_op">
        <?php include "header-nav.php" ?>
        <div class="wrap">
        <div id="hontai">
          	<div class="main_content">
            	<div class="inner_content front_content" id="front">
					<h1 class="front">宴へようこそ(仮)(てきとう)</h1>
					<img src="image/ウェブサイト用画像.png" alt="なんかの画像">
           

				</div>
			</div>
        <div class="side_content">
    <?php include "Side_bar.html" ?>
    </div>
    </div>
    <?php include "footer.html" ?>
        </div>
        </div>
        
    
</body>
</html>