<!DOCTYPE html>
<html lang="ja">
<head>
  <title>練習中2</title>
  <?php include "links.html" ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
</head>
<body>
        <?php include "header-nav.php" ?>
        <!-- <div class="kotei">
        <div class="img_front">
            <div class="gray_back off" id="gray_back"></div>
            <img src="image\cherry2.png" alt="桜" class="over_img front_cherry off" id="front_cherry">
            <img src="image\flower.png" alt="モッコウバラ" class="over_img front_flower off" id="front_flower">
        </div>
        </div> -->
        <div class="wrap">
        <div id="hontai">
        <div class="main_content">
            <div class="inner_content inner_top" id="page4-1">
                <h1>モッコウバラ</h1>
                <img src="image\flower.png" alt="お花" class="base">    
            </div>
            <div class="inner_content" id="page4-2">
                <h1>桜</h1>
                <img src="image\cherry2.png" alt="お花" class="base">    
            </div>
            <div class="inner_content" id="page4-3">
                <h1>エクセル(テスト)</h1>
                <p>画像の特定のエリアをクリックすると実際の画像が表示されます。</p>
                <div class="map_demo">
                <div class="excel_imgs">
                    <img src="image\excel0.png" alt="お花" class="excel_img origin" id="origin" >
                    <img src="image\excel1.png" alt="お花" class="excel_img" id="img_a1" >
                    <img src="image\excel2.png" alt="お花" class="excel_img" id="img_d3" >
                </div>
                <div>
                <ul class="img_link">
                    <li class="a1_cell" id="a1_cell">A1のセル</li>
                    <li class="d3_cell" id="d3_cell">C5のセル</li>
                </ul> 
                    </div>
                    </div>
        </div>
        </div>
    <div class="side_content">
    <?php include "Side_bar.html" ?>
    </div>
    </div>
    <?php include "footer.html" ?>
    </div>
</body>
</html>