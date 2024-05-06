<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
  <title>練習中4</title>
  <!-- <link rel="stylesheet" href="aaa.css" type="text/css"> -->
  <?php 
    $path = dirname(__FILE__);$path = str_replace("\\news","",$path);
    include $path."/links.html" ?>
</head>
<body>
    <?php include $path."/header-nav.php" ?>
    <div class="wrap">
    <div id="hontai">
    <div class="main_content">
        <div class="inner_content news" id="news3">
            <h1>school</h1>
        <div id="news3-1">
            <h2>洛南</h2>
            <p>洛星よりすごい説ある
            </p>
        </div>
        <div id="news3-2">
            <h2>灘</h2>
            <p>めっちゃすごい<br>化け物の集団
            </p>
        </div>
        <div id="news3-3">
            <h2>ネタ切れ</h2>
            <p>ユユユユユユユ
            </p>
        </div>
        </div>
    </div>
    <div class="side_content">
    <?php include $path."/Side_bar.html" ?>
    </div>
    </div>
    <?php include $path."/footer.html" ?>
    </div>
</body>
</html>