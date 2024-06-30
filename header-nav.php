<?php 
    $var_list = ["団体一覧","goods","お花","パート紹介","map","time_table","news"];
    $var_name_list = [["展示","模擬店","演劇"],["page0-1","page0-2","page0-3","page0-4"],["モッコウバラ","桜","エクセル"],[],[],[],[]];

    $var_link_list = ["/test.php","/ichiran.php","img_test.php","intro_part.php","map_demo.php","time_table.php","/news_top.php"];
    $var_link_list_id = [["#page1-1","#page1-2","#page1-3"],["#page0-1","#page0-2","#page0-3","#page0-4"],["#page4-1","#page4-2","#page4-3"],[],[],[],[]];
    
    $var_id = ["first","second","third","fourth","fifth","sixth","sevn","eight"];
    $li_id = ["ze_fi","ze_se","ze_th","ze_fo","ze_fiv","ze_si","ze_sev","ze_eight"];
    $suf_id = ["suf1","suf2","suf3","suf4","suf5","suf6","suf7","suf8"];
?>
<span class="back_ground" id="aaaaa"></span>
<div class="kotei">
        <div class="img_front">
            <div class="gray_back off" id="gray_back"></div>
            <img src="image\cherry2.png" alt="桜" class="over_img front_cherry off" id="front_cherry">
            <img src="image\flower.png" alt="モッコウバラ" class="over_img front_flower off" id="front_flower">
        </div>
        <div class="humbergar" id="hum">
                <div class="hum_0" id="top_hum"></div>
                <div class="hum_1" id="middle_hum"></div>
                <div class="hum_2" id="bottom_hum"></div>
        </div>
        <a href="../index.php"><img src="/image/logo.png" alt="logo" id="logo"></a>
    <header id="header">
    <a href="../index.php" class="utage"><p><span>洛星</span><span>高校・中学</span><span>第73回</span><span>文化祭</span><span>～<b>宴</b>～</span></p></a>
        <ul class="table">
        <?php
            $var_count = count($var_link_list);
            for($i=0;$i<$var_count-1;$i++){
                $under = "";
                for($j=0;$j<=count($var_link_list_id[$i])-1;$j++){
                    $under =  $under."<a href=../".$var_link_list[$i].$var_link_list_id[$i][$j].'><li>'.$var_name_list[$i][$j].'</li></a>';
                }
                    $txtdata = <<< EOM
                        <li class="ze">
                            <div id="$var_id[$i]" class="var_id">
                                <ul>
                                    <a href="../$var_link_list[$i]"><li id="$li_id[$i]" class="fi">$var_list[$i]</li></a>
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
                    <a href="../news_top.php"><li id="ze_last" class="fi last"><?php echo end($var_list) ?></li></a> 
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
    <nav id="line1">
    <div id="serch" class="serch">
            <form method="get" action="../searchbox.php" required>
                
                    <label>
                      <!-- ページ内検索欄 -->
                      <input type="text" name="word" placeholder="ここに入力ｩｩｩｩｩｩｩ!!" class="serchbox">
                      <input type="image" src="/image/magnifying_glass2.png" alt="rens" class="rens">
                    </label>
                 
            </form>
        </div>
    <!-- <ul class="table">
        <?php
            /* $var_count = count($var_link_list);
            for($i=0;$i<$var_count-1;$i++){
                $under = "";
                for($j=0;$j<=count($var_link_list_id[$i])-1;$j++){
                    $under =  $under."<a href=../".$var_link_list[$i].$var_link_list_id[$i][$j].'><li>'.$var_name_list[$i][$j].'</li></a>';
                }
                    $txtdata = <<< EOM
                        <li class="ze">
                            <div id="$var_id[$i]" class="var_id">
                                <ul>
                                    <a href="../$var_link_list[$i]"><li id="$li_id[$i]" class="fi">$var_list[$i]</li></a>
                                    <div id="$suf_id[$i]" class="sub">
                                        $under
                                    </div>
                                </ul>
                            </div>
                        </li>
                    EOM;
                    echo $txtdata;
            } */
        ?>
        <li class="ze">
            <div  id="last" class="var_id">
                <ul>
                    <a href="../news_top.php"><li id="ze_last" class="fi last"><?php echo end($var_list) ?></li></a> 
                        
                </ul>
            </div>
        </li>
    </ul> -->
    </nav>
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
            <form method="get" action="../searchbox.php" required>
                    <label>
                      <p class="search_guid">ページ内検索欄</p>
                      <input type="text" name="word" placeholder="ここに入力ｩｩｩｩｩｩｩ!!" class="serchbox">
                      <input type="image" src="/image/magnifying_glass2.png" alt="rens" class="btn_img">
                      <!-- <button type="submit" class="rens"><img src="/image/magnifying_glass2.png" alt="rens"></button> -->
                    </label>
            </form>
    </div>
    </div>
    