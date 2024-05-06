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
        <div class="inner_content news" id="news11">
            <h1>洛星6</h1>
            <p>堕ちた6</p>
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