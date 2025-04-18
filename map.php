<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
    <title>第73回洛星文化祭～宴～</title>
    <!-- <link rel="stylesheet" href="aaa.css" type="text/css"> -->
    <?php 
        $path = dirname(__FILE__);$path = str_replace("\\news","",$path);
        include($path."/links.html");
    ?>
    <!-- <link rel="stylesheet" href="../stylesheet/map.css" type="text/css"> -->
    <link rel="stylesheet" href="../stylesheet/map.css" type="text/css">
    <link rel="stylesheet" href="../stylesheet/mapb1.css" type="text/css">
    <link rel="stylesheet" href="../stylesheet/map1st.css" type="text/css">
    <link rel="stylesheet" href="../stylesheet/map2nd.css" type="text/css">
    <link rel="stylesheet" href="../stylesheet/map3rd.css" type="text/css">
    <link rel="stylesheet" href="../stylesheet/map4th.css" type="text/css">
    <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-T5TBPZR5');</script>
 <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5TBPZR5"
 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <!-- End Google Tag Manager (noscript) -->
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
    <div class="over_view_box" id="ovb1" style="display: none;">
        <h3 style="font-size: 30pt;" id="ovb_room"></h3>
        <a href="javascript:del_ovb()" class="batsu_hanteiyou"></a>
        <p style="font-size: 25pt;" id="ovb_group0"></p>
        <a href="#" style="font-size: 15pt;" id="ovb_link1">この団体の展示紹介を一覧で見る</a>
        <p style="font-size: 25pt;" id="ovb_group1"></p>
        <a href="#" style="font-size: 15pt;" id="ovb_link2"></a>
    </div>
    <?php
        include($path."/header-nav.php");
    ?>
    <div class="wrap">
    <div id="hontai">
    <div class="main_content">
        <div class="inner_content inner_top" id="map_0">
        <h1>地図</h1>
        <div class="Map_parent" style="padding-top: 30px;">
            <div id="Choices" class="">
                <div class="Flex Flex_wrap Width_fitcontent Align_center">
                    <a href='javascript:map_chenge("B1")' class="Map_choices">地下1階</a>
                    <a href='javascript:map_chenge("F1")' class="Map_choices">1階</a>
                    <a href='javascript:map_chenge("F2")' class="Map_choices">2階</a>
                    <a href='javascript:map_chenge("F3")' class="Map_choices">3階</a>
                    <a href='javascript:map_chenge("F4")' class="Map_choices">4階</a>
                    
                </div>
            </div>
            <div id="F4">
                <?php
                    include "map_4th.html";
                ?>
            </div>
            <div id="F3">
                <?php
                    include "map_3rd.html";
                ?>
            </div>
            <div id="F2">
                <?php
                    include "map_2nd.html";
                ?>
            </div>   
            <div id="F1">
                <?php
                    include "map_1st.html";
                ?>
            </div>
            <div id="B1">
                <?php
                    include "map_b1.html";
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