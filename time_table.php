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
            <div class="wrapper_timetable">
            <div class="buttons303">
                <ul class="buttons_top">
                    <a href="javascript:tt_day(1)" class="button_ts b_days" id="d1b"><li class="button_li">壱日目   .13日</li></a>
                    <a href="javascript:tt_day(2)" class="button_ts b_days" id="d2b"><li class="button_li">弐日目   .14日</li></a>
                    <a href="javascript:tt_day(3)" class="button_ts b_days" id="d3b"><li class="button_li">参日目   .15日</li></a>
                </ul>
                <ul class="buttons_buttom place_button" id="d1">
                    <a href="javascript:tt_place(1)" class="button_ts" id="d1p1b"><li class="button_li">大講堂</li></a>
                    <a href="javascript:tt_place(2)" class="button_ts" id="d1p2b"><li class="button_li">ケルブ講堂</li></a>
                    <a href="javascript:tt_place(3)" class="button_ts" id="d1p3b"><li class="button_li">大教室</li></a>
                    <a href="javascript:tt_place(4)" class="button_ts" id="d1p4b"><li class="button_li">家庭科室</li></a>
                    <a href="javascript:tt_place(5)" class="button_ts" id="d1p5b"><li class="button_li">多目的教室</li></a>
                </ul>
                <ul class="buttons_buttom place_button" id="d2">
                    <a href="javascript:tt_place(1)" class="button_ts" id="d2p1b"><li class="button_li">大講堂</li></a>
                    <a href="javascript:tt_place(2)" class="button_ts" id="d2p2b"><li class="button_li">ライブ@第一音楽室</li></a>
                    <a href="javascript:tt_place(3)" class="button_ts" id="d2p3b"><li class="button_li">大階段下</li></a>
                    <a href="javascript:tt_place(4)" class="button_ts" id="d2p4b"><li class="button_li">小講堂</li></a>
                    <a href="javascript:tt_place(5)" class="button_ts" id="d2p5b"><li class="button_li">ケベックホール</li></a>
                    <a href="javascript:tt_place(6)" class="button_ts" id="d2p6b"><li class="button_li">和室</li></a>
                    <a href="javascript:tt_place(7)" class="button_ts" id="d2p7b"><li class="button_li">小劇場@選択3.4教室</li></a>
                    <a href="javascript:tt_place(8)" class="button_ts" id="d2p8b"><li class="button_li">大教室</li></a>
                    <a href="javascript:tt_place(9)" class="button_ts" id="d2p9b"><li class="button_li">家庭科室</li></a>
                    <a href="javascript:tt_place(10)" class="button_ts" id="d2p10b"><li class="button_li">テラス.リヨンホール</li></a>
                </ul>
                <ul class="buttons_buttom place_button" id="d3">
                    <a href="javascript:tt_place(1)" class="button_ts" id="d3p1b"><li class="button_li">大講堂</li></a>
                    <a href="javascript:tt_place(2)" class="button_ts" id="d3p2b"><li class="button_li">第1音楽室</li></a>
                    <a href="javascript:tt_place(3)" class="button_ts" id="d3p3b"><li class="button_li">小講堂</li></a>
                    <a href="javascript:tt_place(4)" class="button_ts" id="d3p4b"><li class="button_li">ケベックホール</li></a>
                    <a href="javascript:tt_place(5)" class="button_ts" id="d3p5b"><li class="button_li">和室</li></a>
                    <a href="javascript:tt_place(6)" class="button_ts" id="d3p6b"><li class="button_li">小劇場@選択3.4教室</li></a>
                    <a href="javascript:tt_place(7)" class="button_ts" id="d3p7b"><li class="button_li">大教室</li></a>
                    <a href="javascript:tt_place(8)" class="button_ts" id="d3p8b"><li class="button_li">テラス.リヨンホール</li></a>
                </ul>
            </div>
            <?php
                
$event_list = [[   [["s_time"=> "8:30","f_time"=> "9:00","title"=> "開会式","txt"=> "始まりの合図"],
                    ["s_time"=> "9:30","f_time"=> "11:45","title"=> "中学合唱","txt"=> "合唱順はこちらから"],
                    ["s_time"=> "13:30","f_time"=> "15:45","title"=> "高校合唱","txt"=> "合唱順はここから"]],//d1p1

                    [["s_time"=> "9:30","f_time"=> "12:00","title"=> "高校生徒会企画","txt"=> "GOT TALENT"],
                    ["s_time"=> "13:30","f_time"=> "15:45","title"=> "中学生徒会企画","txt"=> "IPOON GRAND PRIX"]],//d1p2

                    [["s_time"=> "9:00","f_time"=> "10:45","title"=> "映像コンテスト","txt"=> "詳細未定"],
                    ["s_time"=> "11:00","f_time"=> "14:00","title"=> "昼食会場","txt"=> "生徒専用の昼食会場 <u><br>保護者立ち入り不可</br></u> "],
                    ["s_time"=> "14:00","f_time"=> "16:00","title"=> "映像コンテスト","txt"=> "映像を見よう"]],//d1p3

                    [["s_time"=> "9:15","f_time"=> "12:30","title"=> "高校チャレンジクッキング","txt"=> "洛星No.1のキャラ弁を作るのは誰なのか？！？！？"]],//d1p4

                    [["s_time"=> "9:30","f_time"=> "12:30","title"=> "プラネタリウム","txt"=> "神秘なる星の世界へ<br>※毎年人気なので事前予約制になってます。東棟2階多目的教室前で整理券を受け取ってください</br>(以降三日間同様)"]]//d1p5
                ],//d1
                [
                    [["s_time"=> "9:00","f_time"=> "9:45","title"=> "中学演劇Ⅰ","txt"=> "M1「タイトル未定」"],
                    ["s_time"=> "10:00","f_time"=> "10:45","title"=> "中学演劇Ⅱ","txt"=> "M2「タイトル未定」"],
                    ["s_time"=> "11:00","f_time"=> "11:45","title"=> "中学演劇Ⅲ","txt"=> "M3「タイトル未定」"],    
                    ["s_time"=> "13:30","f_time"=> "15:00","title"=> "室内楽","txt"=> "ヴィヴァルディ「秋」の第一楽章など<u><br>ぜひ聞きに来てください！</br></u>"]],//d2p1　
                    
                    [["s_time"=> "11:00","f_time"=> "12:30","title"=> "ライブ会場","txt"=> "ここどうしよう"],
                    ["s_time"=> "13:30","f_time"=> "15:30","title"=> "ライブ会場","txt"=> "ここどうしよう"]],//d2p2

                    [["s_time"=> "9:30","f_time"=> "10:30","title"=> "室内楽","txt"=> "大講堂で13:30~15:00でも行います"]],//d2p3
 
                    [["s_time"=> "9:00","f_time"=> "12:00","title"=> "アミューズ","txt"=> "ケルブ講堂を貸切って、大人から子供まで楽しめるアミューズパークにしました！！"],
                    ["s_time"=> "13:00","f_time"=> "13:45","title"=> "高校演校Ⅰ","txt"=> "HⅠ 「タイトル未定」"],
                    ["s_time"=> "14:00","f_time"=> "14:45","title"=> "高校演劇Ⅱ","txt"=> "HⅡ 「狂気」"],
                    ["s_time"=> "15:00","f_time"=> "15:45","title"=> "高校演校Ⅲ","txt"=> "HⅢ 「SIAMO TUTTIUN PO, PAZZI.」"]],//d2p4

                    [["s_time"=> "12:30","f_time"=> "13:00","title"=> "グリー部公演","txt"=> "男声合唱組曲 「秋の瞳」"],
                    ["s_time"=> "13:30","f_time"=> "15:30","title"=> "小劇場ライブビューイング","txt"=> "小劇場の様子をライブ中継します"]],//d2p5

                    [["s_time"=> "13:00","f_time"=> "15:45","title"=> "茶会","txt"=> "茶道部主催の茶会を行います<br><u>※参加費500円(現金のみ)</u></br>"]],//d2p6

                    [["s_time"=> "10:00","f_time"=> "11:00","title"=> "Piano man in Rakusei","txt"=> "第一部（約10分）"],
                    ["s_time"=> "11:00","f_time"=> "12:00","title"=> "ピアノ同好会","txt"=> ""],
                    ["s_time"=> "12:00","f_time"=> "13:00","title"=> "弾き語り","txt"=> "だれかやります"],
                    ["s_time"=> "13:00","f_time"=> "14:00","title"=> "お笑い","txt"=> "フリップネタや大喜利などやります"],
                    ["s_time"=> "14:00","f_time"=> "15:00","title"=> "ビートボックス","txt"=> ""],
                    ["s_time"=> "15:00","f_time"=> "16:00","title"=> "Piano man in Rakusei","txt"=> "第二部（約10分）"]],//d2p7

                    [["s_time"=> "9:00","f_time"=> "10:45","title"=> "映像コンテスト","txt"=> "映像を見よう！"],
                    ["s_time"=> "11:00","f_time"=> "14:00","title"=> "昼食会場","txt"=> "生徒専用の昼食会場 <u><br>保護者立ち入り不可</br></u>"],
                    ["s_time"=> "14:00","f_time"=> "15:45","title"=> "映像コンテスト","txt"=> "映像をみよう！"]],//d2p8

                    [["s_time"=> "13:30","f_time"=> "15:30","title"=> "中学チャレンジクッキング","txt"=> "オムライス王の称号を手にするのは誰か？！？"]],//d2p9

                    [["s_time"=> "10:00","f_time"=> "16:00","title"=> "模擬店","txt"=> "<u>基本的に会計は交通系ＩＣか⾦券のどちらかです</u><br>詳細はこちら</br>"],
                    ["s_time"=> "10:00","f_time"=> "16:00","title"=> "喫茶,食堂","txt"=> "模擬店会場からの通り抜けはできません<br>二階からのご入場のみなのでご注意ください</br>詳細はこちら"]]//d2p10
                ],//d2
                [
                    [["s_time"=> "9:30","f_time"=> "10:30","title"=> "演劇部公演","txt"=> "「ぼくらの檻」"],
                    ["s_time"=> "12:00","f_time"=> "14:00","title"=> "オーケストラ部公演","txt"=> "「セリビアの理髪師」序曲<br>ヴォカリーズ  etc...</br>※曲目間での入退場は可能です"]],//d3p1

                    [["s_time"=> "10:00","f_time"=> "14:00","title"=> "ライブ会場","txt"=> "coming soon..."]],//d3p2

                    [["s_time"=> "9:00","f_time"=> "9:30","title"=> "謡曲部公演","txt"=> ""],
                    ["s_time"=> "10:00","f_time"=> "11:30","title"=> "アミューズ","txt"=> "アミューズパーク！！"],
                    ["s_time"=> "12:15","f_time"=> "13:45","title"=> "高校生徒会企画","txt"=> "GOT TALENT Ⅱ"]],//d3p3

                    [["s_time"=> "9:00","f_time"=> "11:30","title"=> "小劇場ライブビューイング","txt"=> "小劇場の内容をライブ中継します"],
                    ["s_time"=> "12:00","f_time"=> "13:45","title"=> "映像コンテスト","txt"=> "映像を見よう 最終編"]],//d3p4

                    [["s_time"=> "9:00","f_time"=> "14:00","title"=> "茶会","txt"=> "茶道部主催の茶会を行います<br><u>※参加費500円(現金のみ)</u></br>"]],//d3p5

                    [["s_time"=> "10:00","f_time"=> "11:00","title"=> "落語","txt"=> ""],
                    ["s_time"=> "11:00","f_time"=> "12:00","title"=> "ピアノ同好会","txt"=> ""],
                    ["s_time"=> "12:00","f_time"=> "13:00","title"=> "漫才","txt"=> ""],
                    ["s_time"=> "13:00","f_time"=> "14:00","title"=> "弾き語り","txt"=> "約30~60分"]],//d3p6

                    [["s_time"=> "9:00","f_time"=> "10:45","title"=> "映像コンテスト","txt"=> "映像を見よう！"],
                    ["s_time"=> "11:00","f_time"=> "14:00","title"=> "昼食会場","txt"=> "生徒専用の昼食会場 <u><br>保護者立ち入り不可</br></u>"]],//d3p7
                    
                    [["s_time"=> "10:00","f_time"=> "14:00","title"=> "模擬店","txt"=> "<u>基本的に会計は交通系ＩＣか⾦券のどちらかです</u><br>14時を過ぎると食券が無効となってしまうのでお早めにご利用ください。</br>"],
                    ["s_time"=> "10:00","f_time"=> "14:00","title"=> "喫茶,食堂","txt"=> "模擬店会場からの通り抜けはできません<br>二階からのご入場のみなのでご注意ください</br>詳細はこちら"]]//d3p8
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