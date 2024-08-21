<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
  <title>タイムテーブル</title>
  <!-- <link rel="stylesheet" href="aaa.css" type="text/css"> -->
  <?php include "links.html" ?>
  <!-- <link rel="stylesheet" href="../stylesheet/time_table.css" type="text/css"> -->
</head>
<body>
    <?php include "header-nav.php" ?>
    <div class="wrap">
    <div id="hontai">
    <div class="main_content">
        <div class="inner_content inner_top" id="time_table">
            <h1>タイムテーブル</h1>
            <div class="buttons">
                <ul class="buttons_top">
                    <a href="javascript:tt_day(1)" class="button_ts b_days" id="d1b"><li class="button_li">ここクリック1</li></a>
                    <a href="javascript:tt_day(2)" class="button_ts b_days" id="d2b"><li class="button_li">ここクリック2</li></a>
                    <a href="javascript:tt_day(3)" class="button_ts b_days" id="d3b"><li class="button_li">ここクリック3</li></a>
                </ul>
                <ul class="buttons_buttom place_button" id="d1">
                    <a href="javascript:tt_place(1)" class="button_ts" id="d1p1b"><li class="button_li">ここクリック1</li></a>
                    <a href="javascript:tt_place(2)" class="button_ts" id="d1p2b"><li class="button_li">ここクリック2</li></a>
                    <a href="javascript:tt_place(3)" class="button_ts" id="d1p3b"><li class="button_li">ここクリック3</li></a>
                    <a href="javascript:tt_place(4)" class="button_ts" id="d1p4b"><li class="button_li">ここクリック4</li></a>
                </ul>
                <ul class="buttons_buttom place_button" id="d2">
                    <a href="javascript:tt_place(1)" class="button_ts" id="d2p1b"><li class="button_li">ここクリック21</li></a>
                    <a href="javascript:tt_place(2)" class="button_ts" id="d2p2b"><li class="button_li">ここクリック22</li></a>
                    <a href="javascript:tt_place(3)" class="button_ts" id="d2p3b"><li class="button_li">ここクリック23</li></a>
                </ul>
                <ul class="buttons_buttom place_button" id="d3">
                    <a href="javascript:tt_place(1)" class="button_ts" id="d3p1b"><li class="button_li">ここクリック31</li></a>
                    <a href="javascript:tt_place(2)" class="button_ts" id="d3p2b"><li class="button_li">ここクリック32</li></a>
                    <a href="javascript:tt_place(3)" class="button_ts" id="d3p3b"><li class="button_li">ここクリック33</li></a>
                    <a href="javascript:tt_place(4)" class="button_ts" id="d3p4b"><li class="button_li">ここクリック34</li></a>
                    <a href="javascript:tt_place(5)" class="button_ts" id="d3p5b"><li class="button_li">ここクリック35</li></a>
                    <a href="javascript:tt_place(6)" class="button_ts" id="d3p6b"><li class="button_li">ここクリック36</li></a>
                </ul>
            </div>
            <?php
                
$event_list = [[   [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム","txt"=> "新庄田宮万波マルティネス郡司中島"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日","txt"=> "立浪細川中田カリステ大島石川岡林木下"]],//d1p1

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム2","txt"=> "新庄田宮万波マルティネス郡司中島"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜2","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中2","txt"=> "立浪細川中田カリステ大島石川岡林木下"]],//d1p2

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム3","txt"=> "新庄田宮万波マルティネス郡司中島"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜3","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日3","txt"=> "立浪細川中田カリステ大島石川岡林木下"]],//d1p3

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム4","txt"=> "新庄田宮万波マルティネス郡司中島"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜4","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日4","txt"=> "立浪細川中田カリステ大島石川岡林木下"]]//d1p4
                ],//d1
                [
                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム","txt"=> "新庄田宮万波マルティネス郡司中島1"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎1"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日","txt"=> "立浪細川中田カリステ大島石川岡林木下1"]],//d2p1

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム2","txt"=> "新庄田宮万波マルティネス郡司中島2"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜2","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎2"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中2","txt"=> "立浪細川中田カリステ大島石川岡林木下2"]],//d2p2

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム3","txt"=> "新庄田宮万波マルティネス郡司中島3"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜3","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎3"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日3","txt"=> "立浪細川中田カリステ大島石川岡林木下3"]]//d2p3
                ],//d2
                [
                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム","txt"=> "新庄田宮万波マルティネス郡司中島11"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎13"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日","txt"=> "立浪細川中田カリステ大島石川岡林木下11"]],//d3p1

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム2","txt"=> "新庄田宮万波マルティネス郡司中島22"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜2","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎22"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中2","txt"=> "立浪細川中田カリステ大島石川岡林木下22"]],//d3p2

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム3","txt"=> "新庄田宮万波マルティネス郡司中島33"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜3","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎33"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日3","txt"=> "立浪細川中田カリステ大島石川岡林木下33"]],//d3p3

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム4","txt"=> "新庄田宮万波マルティネス郡司中島44"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜4","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎44"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日4","txt"=> "立浪細川中田カリステ大島石川岡林木下44"]],//d3p4

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム5","txt"=> "新庄田宮万波マルティネス郡司中島55"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜5","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎55"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日5","txt"=> "立浪細川中田カリステ大島石川岡林木下55"]],//d3p5

                    [["s_time"=> "11:11","f_time"=> "22:02","title"=> "日ハム4","txt"=> "新庄田宮万波マルティネス郡司中島66"],
                    ["s_time"=> "22:22","f_time"=> "33:13","title"=> "横浜4","txt"=> "三浦桑原牧佐野宮崎関根筒香蝦名山崎66"],
                    ["s_time"=> "33:33","f_time"=> "44:24","title"=> "中日4","txt"=> "立浪細川中田カリステ大島石川岡林木下66"]]//d3p6
                ]//d3
                ];
                $day = 1;
                foreach($event_list as $day_event){
                    $place = 1;
                    /* print($place); */
                    foreach($day_event as $place_event){
                        $ids = "d".$day."p".$place;
                        /* print($ids); */
                        $output_txt = '<ul class="time_table_ul" id="'.$ids.'">';
                        echo $output_txt;
                        $output_txt = "";
                        foreach($place_event as $time_event){
                            $s_time = $time_event["s_time"];
                            $f_time = $time_event["f_time"];
                            $title = $time_event["title"];
                            $txt = $time_event["txt"];
                            /* print($title); */
                            $output_txt  = <<< EOM
                                <li>
                                    <span class="time_st">$s_time</span>
                                    <div class="sch_box">
                                    <p class="sch_title">$title</p>
                                    <p class="sch_txt">$txt</p>
                                    <span class="time_fi">$f_time</span>
                                    </div>
                                </li>

                        EOM;
                        /* var_dump($output_txt); */
                        echo $output_txt;
                        $output_txt = "";
                        }
                        $output_txt = <<< EOM
                        </ul>
                    EOM;
                    echo $output_txt;
                        $place ++;
                    }
                    
                    $output_txt = "";
                    $day ++;
                }

            ?>
            <!-- <ul class="time_table_ul" id="d1p1">
                <li>
                    <span class="time_st">11:11</span>
                    <div class="sch_box">
                    <p class="sch_title">日ハム</p>
                    <p class="sch_txt">新庄田宮万波マルティネス郡司中島</p>
                    <span class="time_fi">22:02</span>
                    </div>
                    
                </li>
                <li>
                <span class="time_st">22:22</span>
                    <div class="sch_box">
                    <p class="sch_title">横浜</p>
                    <p class="sch_txt">三浦桑原牧佐野宮崎関根筒香蝦名山崎</p>
                    <span class="time_fi">33:13</span>
                    </div>
                </li>
                <li>
                <span class="time_st">33:33</span>
                    <div class="sch_box">
                    <p class="sch_title">中日</p>
                    <p class="sch_txt">立浪細川中田カリステ大島石川岡林木下</p>
                    <span class="time_fi">44:24</span>
                    </div>
                </li>
            </ul>
            <ul class="time_table_ul" id="d1p2">
                <li>
                    <span class="time_st">50:50</span>
                    <div class="sch_box">
                    <p class="sch_title">日ハム</p>
                    <p class="sch_txt">新庄田宮万波マルティネス郡司中島</p>
                    <span class="time_fi">22:02</span>
                    </div>
                    
                </li>
                <li>
                <span class="time_st">44:44</span>
                    <div class="sch_box">
                    <p class="sch_title">横浜</p>
                    <p class="sch_txt">三浦桑原牧佐野宮崎関根筒香蝦名山崎</p>
                    <span class="time_fi">33:13</span>
                    </div>
                </li>
                <li>
                <span class="time_st">33:33</span>
                    <div class="sch_box">
                    <p class="sch_title">中日</p>
                    <p class="sch_txt">立浪細川中田カリステ大島石川岡林木下</p>
                    <span class="time_fi">44:24</span>
                    </div>
                </li>
                <li>
                <span class="time_st">33:33</span>
                    <div class="sch_box">
                    <p class="sch_title">中日</p>
                    <p class="sch_txt">立浪細川中田カリステ大島石川岡林木下</p>
                    <span class="time_fi">44:24</span>
                    </div>
                </li>
            </ul> -->
        </div>
    </div>
    <div class="side_content">
    <?php include "Side_bar.html" ?>
    </div>
    </div>
    <script src="../js/time_table.js"></script>
    <?php include "footer.html" ?>
    </div>
</body>
</html>