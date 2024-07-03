<!DOCTYPE html>
<html lang="ja">
<head>
  <title>練習中2</title>
  <!-- <link rel="stylesheet" href="aaa.css" type="text/css">
  <link rel="icon" href="image\favicon.ico"> -->
  <!-- 幅1100px以下でタブレット用デザイン -->
  <?php include "links.html" ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
</head>
<body>
        <div class="opening" id="index_op">
          <video autoplay muted playsinline id="index_video">
            <source src="video/宴アニメーション.mp4" type="video/mp4">
          </video>
          <div id="skip" class="skip"><span></span></div>
        </div>
        <div id="other_op">
          <?php include "front_content.php" ?>
        </div>
</body>
</html>