<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
    <title>map</title>
    <!-- <link rel="stylesheet" href="aaa.css" type="text/css"> -->
    <?php 
        $path = dirname(__FILE__);$path = str_replace("\\news","",$path);
        include($path."/links.html");
    ?>
    <!-- <link rel="stylesheet" href="../stylesheet/map.css" type="text/css"> -->
    <link rel="stylesheet" href="../stylesheet/map.css" type="text/css">
    <link rel="stylesheet" href="../stylesheet/map3rd.css" type="text/css">
    <link rel="stylesheet" href="../stylesheet/map4th.css" type="text/css">
</head>
<body>
  <!-- <div class="gray_back_map" id="gray_back_map"></div>
  <div class="over_view_box" id="ovh1a">
    <h1 class="over_view_map">Aクラス</h1>
    <h2 class="over_view_map">模型同好会　B29は如何に化け物か</h2>
    <p class="over_view_map">大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国失敗した失敗した失敗した失敗した失敗した私は失敗した失敗した、失敗した大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国大日本帝国</p>
    <p class="over_view_map"><a href='javascript:jump("mokei")'>展示紹介を一覧で見る</a></p>
    <img src="../image/flower.png" alt="モッコウバラ" class="over_view_map">
    <img src="../image/cherry2.png" alt="桜" class="over_view_map">
  </div>
  <div class="gray_back_map" id="gray_back_map"></div>
  <div class="over_view_box" id="ovh1b">
    <h1 class="over_view_map">Bクラス</h1>
    <h2 class="over_view_map">テニス部　明日は我が身</h2>
    <p class="over_view_map">ネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れネタ切れ</p>
    <p class="over_view_map"><a href='javascript:jump("tennis")'>展示紹介を一覧で見る</a></p> -->
    <!-- <img src="../image/flower.png" alt="モッコウバラ" class="over_view_map">
    <img src="../image/cherry2.png" alt="桜" class="over_view_map"> -->
  <!-- </div> -->

    <?php
        include($path."/header-nav.php");
    ?>
    <div class="wrap">
    <div id="hontai">
    <div class="main_content">
        <div class="inner_content inner_top" id="map_0">
        <h1>地図</h1>
        <div class="Map_parent">
            <h3>肆階</h3>
            <div id="F4">
                <?php
                    include "map_3rd.html";
                ?>
            </div>          
        </div>
        </div>



        </div>
    </div>
    <div class="side_content">
    <?php include($path."/Side_bar.html") ?>
    </div>
    <?php include($path."/footer.html") ?>
    </div>
    <script src="../js/map.js"></script>
    
    </div>
</body>
</html>