<?php 
    $var_list = ["パンフレット",
                    "パート紹介",
                    "バザー",
                    "時刻表",
                    "校内地図",
                    "催し一覧",
                    "お知らせ",
                    "ホーム"];
    $var_name_list = [[],
                        [],
                        [],
                        [],
                        [],
                        ["展示","模擬店","演劇","企画","ライブ","小劇場"],
                        [],
                        []];

    $var_link_list = ["download.php",
                        "intro_part.php",
                        "goods.php",
                        "time_table.php",
                        "map.php",
                        "ichiran.php",
                        "news_top.php",
                        "index_novideo.php"];
    $var_link_list_id = [[],
                        [],
                        [],
                        [],
                        [],
                        ["#tenzi","#mogiten","#engeki","#kikaku","#live","#smallgekizyou"],
                        [],
                        []];
    
    $var_id = ["first","second","third","fourth","fifth","sixth","sevn","eight"];
    $li_id = ["ze_fi","ze_se","ze_th","ze_fo","ze_fiv","ze_si","ze_sev","ze_eight"];
    $suf_id = ["suf1","suf2","suf3","suf4","suf5","suf6","suf7","suf8","suf9"];
?>
<span class="back_ground" id="aaaaa"></span>
<div id="kotei" class="kotei">
        <div class="humbergar" id="hum">
                <div class="hum_0" id="top_hum"></div>
                <div class="hum_1" id="middle_hum"></div>
                <div class="hum_2" id="bottom_hum"></div>
        </div>
        <a href="../index.php"><img src="/image/logo.png" alt="logo" id="logo"></a>
    <header id="header">
    <a href="../index.php" class="utage"><p><span>洛星</span><span>第七十三回</span><span>文化祭</span><span>～<b>宴</b>～</span></p></a>
        <ul class="table">
        <?php
            $var_count = count($var_link_list);
            for($i=0;$i<$var_count-1;$i++){
                $under = "";
                for($j=0;$j<=count($var_link_list_id[$i])-1;$j++){
                    $under =  $under."<a href=../".$var_link_list[$i].$var_link_list_id[$i][$j].'><li><u>'.$var_name_list[$i][$j].'</u></li></a>';
                }
                    $txtdata = <<< EOM
                        <li class="ze">
                            <div id="$var_id[$i]" class="var_id">
                                <ul>
                                    <a href="../$var_link_list[$i]"><li id="$li_id[$i]" class="fi"><u>$var_list[$i]</u></li></a>
                                    <div id="$suf_id[$i]" class="sub">
                                        $under
                                    </div>
                                </ul>
                            </div>
                        </li>
                    EOM;
                    echo $txtdata;
            }
        ?>
        <li class="ze">
            <div  id="last" class="var_id">
                <ul>
                    <a href=<?php echo end($var_link_list) ?>><li id="ze_last" class="fi last"><u><?php echo end($var_list) ?></u></li></a> 
                        <div id="suflast" class="sub">
                            <!-- <a href="../news_top.php"><li class="last">ニュース一覧</li></a> -->
                        </div>
                </ul>
            </div>
        </li>
    </ul>
        <!-- <div id="counter" class="counter">
            <span id="day3">0</span><span id="day2">0</span><span id="day1">0</span><span class="counter_str">日</span><span id="hour2">0</span><span id="hour1">0</span><span class="counter_str">時間</span><span id="min2">0</span><span id="min1">0</span><span class="counter_str">分</span><span id="sec2">0</span><span id="sec1">0</span><span class="counter_str">秒</span></div> -->
        
    </header>
    <div class="sp_nav" id="sp_nav">
        <ul class="sp_nav_ul">
            <?php 
                $c=0;
                foreach($var_list as $li){
                    echo '<a href="../'.$var_link_list[$c].'" class="sp_nav_a"><li class="sp_nav_li"><p>'.$li.'</p></li></a>';
                    $c++;
                }
            ?>
        </ul>
            <!-- <form method="get" action="../searchbox.php" required>
                    <label>
                    <p class="search_guid">ページ内検索欄</p>
                    <input type="text" name="word" placeholder="ここに入力ｩｩｩｩｩｩｩ!!" class="serchbox">
                    <input type="image" src="/image/magnifying_glass2.png" alt="rens" class="btn_img">
                    </label>
            </form> -->
    </div>
    </div>
    