<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
  <title>タイムテーブル</title>
  <!-- <link rel="stylesheet" href="aaa.css" type="text/css"> -->
  <?php include "links.html" ?>
</head>
<body>
    <?php include "header-nav.php" ?>
    <div class="wrap">
    <div id="hontai">
    <div class="main_content">
        <div class="inner_content" id="time_table">
            <h1>タイムテーブル</h1>
            <ul class="time_table_ul">
                <li>
                    <span class="time_st">11:11</span>
                    <div class="sch_box">
                    <p class="sch_title">日ハム</p>
                    <p class="sch_txt">新庄田宮万波マルティネス郡司中島</p>
                    </div>
                </li>
                <li>
                <span class="time_st">22:22</span>
                    <div class="sch_box">
                    <p class="sch_title">横浜</p>
                    <p class="sch_txt">三浦桑原牧佐野宮崎関根筒香蝦名山崎</p>
                    </div>
                </li>
            </ul>
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