<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
  <title>第73回洛星文化祭～宴～</title>
  <!-- <link rel="stylesheet" href="aaa.css" type="text/css"> -->
  <?php include "links.html" ?>
</head>
<body>
    <?php 
      if(!isset($_GET['word'])){
      
        header("Location:http://localhost:3000/index.php");
        exit();
      }
      include "header-nav.php";
      $word = $_GET['word'];
     ?>
    <div class="wrap">
    <div id="hontai">
    <div class="main_content">
    <div class="inner_content" id="page-4-1">
    <h1><?php
    

    $h4 = "";
    //session_cache_limiter("private_no_expire");
    mb_internal_encoding("UTF-8");
        $all_textdata = [];
        $filess = [];
        $ids = [];
        $h1s = [];
        $words_list = [];
        $alll_none = [];
        $Contents = [];
        $content = "dumy";
        $word = str_replace("　"," ",$word);
        $words_list_f = explode(" ",$word);
        foreach($words_list_f as $wwwww){
          if($wwwww!=""){
          array_push($words_list,$wwwww);
        }}
        echo "「".$word."」"; echo"の検索結果：";
        $count = 0;//class.innercontentの有無
        $aaaa = glob("*php");
        $aaaa = array_merge($aaaa,glob("news/*php"));
        $key = array_search("searchbox.php",$aaaa);
        if(!is_bool($key)){
          unset($aaaa[$key]);
        }
        $key = array_search("news_top.php",$aaaa);
        if(!is_bool($key)){
          unset($aaaa[$key]);
        }
        $key = array_search("header-nav.php",$aaaa);
        if(!is_bool($key)){
          unset($aaaa[$key]);
        }
        $key = array_search("map_demo.php",$aaaa);
        if(!is_bool($key)){
          unset($aaaa[$key]);
        }
        $key = array_search("index.php",$aaaa);
        if(!is_bool($key)){
          unset($aaaa[$key]);
        }
        $key = array_search("index_novideo.php",$aaaa);
        if(!is_bool($key)){
          unset($aaaa[$key]);
        }
        $key = array_search("pamphlet.php",$aaaa);
        if(!is_bool($key)){
          unset($aaaa[$key]);
        }
        /* var_dump($aaaa); */
        foreach($aaaa as $files){//ファイルを開く
          $file = fopen($files,"r");
          while($data = fgets($file)){//行を読み込む
            $a = mb_strpos($data,"inner_content");
            if(!is_bool($a)){//"inner_contentがあったら"
              if($content != "dumy"){
                array_push($Contents,$content);
              }
              $content = "";
              $count = 1;
              $id = mb_strstr($data,"id=");
              $id = str_replace(["id=",">",'"'],"",$id);
              array_push($ids,$id);
            }else{
              if($count == 1){//class.innercontent配下である
                $h1 = mb_strpos($data,"<h1");//見出しの有無
                if($h1 != false){//見出しがある時
                  $h1 = strip_tags($data);
                  array_push($h1s,$h1);
                  array_push($filess,$files);
                  /* echo"<".$h1.">"; */
                }else{//見出しがない時
                  $title = mb_strpos($data,"title");
                  
                  if(is_bool($title)){//titleタグじゃなかったら
                  $content = $content.strip_tags($data);//$content  """+"""  strip_tags($data)!!!!!
                  
                  }else{
                    $count = 0;
                  }
                }}}}}

        array_push($Contents,$content);
        /* 内容の配列化完了 */
        /* var_dump(count($Contents));
        
        var_dump(count($h1s)); */
        /* ここから検索開始 */
        
        $counter = 0;
        $all_results = [];
        foreach($words_list as $word){

        $result = [];
        $index = 0;
        foreach($h1s as $h1){
          $inh1 = mb_strpos($h1,$word);
          if(!is_bool($inh1)){
            array_push($result,$index);
          }
          $index++;
        }
        $index = 0;
        foreach($Contents as $content){
          $incontent = mb_strpos($content,$word);
          if(!is_bool($incontent)){
            $indexes = array_search($index,$result);
            if(is_bool($indexes)){
            array_push($result,$index);
            }
          }
          $index++;
        }
        $none = 1;
        $word = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$word);
        if($word==""){
          $counter;  
        }else{
        $counter += count($result);
        
        if(count($result)==0){
        }}array_push($all_results,$result);
      }
      if($counter==0){
        $none = 0;
      }
      array_push($alll_none,$none);
      $index = 0;
      $asci_word = array();
      foreach($all_results as $result){
        foreach($result as $n){
          $n = (string)$n;
          /*$asci_word == -1; */
          if (empty($asci_word[$n])){
            /* $asci_word[$n] == $index; */
            $asci_word += array($n=>array($index));
          }else{
            array_push($asci_word[$n],$index);
          }
          
          /* echo "<br>";
          print_r($asci_word + array($n=>$index)); */

        /* echo $n; */
        }
        $index++;
      }
      echo count($asci_word)."件";
      /* print_r($asci_word); */
      /* print_r($all_results);
      echo "<br>"; */
      $all_result_b = array_reduce($all_results, 'array_merge', []);
      sort($all_result_b);
      /* $all_result_b = array_unique($all_result_b); */
      /* print_r($all_result_b); */

      #################################################################################
      #asci_word ==>> key=$h1sとかのインデックス番号 value=$words_listのインデックス番号#
      #################################################################################
    
    ?>
    </h1>
    <?php
    if($none){
    /* $all_index = 0; */#ボツ
    /* $p_list = []; */#ボツ
    /* print_r($asci_word);echo "<br >"; */
    foreach($asci_word as $index => $result){
      $h4 = "";
      $h1="";
      $h1d="";
      $p="";
      $pd="";
      $hpos_list=[];
      $hpos_len=[];
      $ppos_list=[];
      $ppos_len=[];
      $h1or=0;
      $por=0;
      $waaa = 0;
      $wbbb = 0;
    foreach($result as $word_index){
      $word = $words_list[$word_index];
      $strs = $Contents[$index];
      $hs = $h1s[$index];
      $strs = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$strs);
      $word = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$word);
      $hs = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$hs);
      $hpos = mb_strpos($hs,$word,0,"UTF-8");
      $ppos = mb_strpos($strs,$word,0,"UTF-8");
      $len = mb_strlen($word);
      /* $h1 = $hs; */
      
      if(!is_bool($hpos)){
        if($waaa == 0){
          $h1 = $hs;
        }
        $h1or=1;

        /* $h1 = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$h1); */
        $hpos = mb_strpos($h1,$word,0,"UTF-8");
        if(!is_bool($hpos)){
          #print $hpos;
          $pos = 0;
          $pos2 = max($pos-50,0);
          $h10 = mb_substr($h1,0,$hpos);
          $h11 = mb_substr($h1,$hpos,$len);
          $h12 = mb_substr($h1,$hpos+$len);
          $h1 = $h10.'<span class="back_yellow">'.$h11."</span>".$h12;
          #echo htmlspecialchars($h1);/* echo $h1; */
          #print_r("<br>");

          array_push($hpos_list,$hpos);
          array_push($hpos_len,$len);
          $waaa+=1;
        }
      }else{
        if($wbbb == 0){
          $p = $strs;
        }
        $por=1;

        $pos = mb_strpos($p,$word,0,"UTF-8");
        if(!is_bool($pos)){
        /* $pos2 = max($pos-50,0); */
        $p0 = mb_substr($p,0,$pos);
        $p1 = mb_substr($p,$pos,$len);
        $p2 = mb_substr($p,$pos+$len/* ,100-($pos+$len) */);
        /* if($pos2 != 0){
          $p0 = "...".$p0;
        } */
        /* if(mb_strlen($strs)>100){
            $p2 = $p2."...";
        } */
        $p = $p0.'<span class="back_yellow">'.$p1.'</span>'.$p2;
        /* echo htmlspecialchars($p); */
        $h1 = $h1s[$index];


        array_push($ppos_list,$ppos);
        array_push($ppos_len,$len);
        $wbbb+=1;
      }
      }
    }
    $lenlist = [];
    foreach($words_list as $waard){
    array_push($lenlist,mb_strlen($waard));
    }
    if($por == 1){
      $p_f = mb_strpos($p,'<span class="back_yellow">');
      $p_l = mb_strrpos($p,'</span>');
      $span1 = mb_strlen('<span class="back_yellow">');
      $span2 = mb_strlen('</span>');
      $p_count = $p_l - $p_f - $span1*$wbbb - $span2*($wbbb-1);
      #print $p_count."は？";
      #print "<br>".$p_f."<br>".$p_l."<br>";
      if(mb_strlen($strs) >= 100){
      if($p_count<=100){
        $pos = max(round($p_f+($p_count-100)/2),0);
        $p = mb_substr($strs,$pos,100);

        $pfor = mb_strpos($strs,$p,0,"UTF-8");
        $plen = mb_strlen($p);
        foreach($result as $word_index){
          $word = $words_list[$word_index];
          $word = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$word);
          //echo $word;
          $len = mb_strlen($word);
          $pos = mb_strpos($p,$word,0,"UTF-8");
          #print $pos."pos"."<br>";
          if(!is_bool($pos)){
            $p0 = mb_substr($p,0,$pos);
            $p1 = mb_substr($p,$pos,$len);
            $p2 = mb_substr($p,$pos+$len);
            $p = $p0.'<span class="back_yellow">'.$p1.'</span>'.$p2;
        }
      }
        #print $pfor+$plen."   ".mb_strlen($strs);
        if($pfor==0){
          $p = $p."...";  
        }elseif($pfor+$plen==mb_strlen($strs)){
          $p = "...".$p;
        }elseif($pfor+$plen==mb_strlen($strs) && $pfor==0){
          $p = $p;
        }else{
        $p = "...".$p."...";
        }
      }else if($p_count>100 && $wbbb < 4){#$p_count>100
        $long = 0;
        $sum_long = 0;
        $c = 0;
        $front_pos = 0;
        $last_word = 0;
        $front_pos_list = [];
        $front_kw_num = 0;
        $middle_p = "";
        for($i = 1; $i <= $wbbb ;$i++){#$long <= 100/($wbbb)
          #$c++;
        #print $i."iiiiiiiiiiiiii<br>";
          $leg_long = $long;
          $front_pos = mb_strpos($p,'<span class="back_yellow">',$front_pos,"UTF-8");
          array_push($front_pos_list,$front_pos);
          /* $next_pos  = mb_strpos($p,'<span class="back_yellow">',$front_pos+$span1,"UTF-8"); */
          if($i != 1){
          $long += $front_pos - $front_pos_list[$i-2] - $span1*($i-1) - $span2*($i-1);
          print $long."long<br>";
          }
          $front_pos = $front_pos+$span1;
          /* print round(100/($wbbb - $i +1))."this"; */
          if($long > (100*($i))/$wbbb){
            /* print $i."iiiiiiiiiiiiii"; */
            $p_p = mb_substr($strs,max($front_pos_list[$front_kw_num]- $span1*($i-1) - $span2*($i-1),0),round(100*($i-1)/$wbbb)+max($lenlist));
            /* print "<br>".$p_p."  p_p  "."<br>"; */
            $sum_long += round(100*($i)/$wbbb)+max($lenlist);
            $p_pp = $p_p;
            /* print $p_p; */
            foreach($result as $word_index){
              $word = $words_list[$word_index];
              $word = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$word);
              #echo $word;
              $len = mb_strlen($word);
              $pos = mb_strpos($p_p,$word,0,"UTF-8");
              /* print $pos."pos"."<br>"; */
              if(!is_bool($pos)){
                $pos2 = max((round($len + $front_pos_list[$last_word] * 2-round(100/($wbbb - $i +1))) / 2),0);
                $p0 = mb_substr($p_p,$pos2,$pos);
                $p1 = mb_substr($p_p,$pos,$len);
                $p2 = mb_substr($p_p,$pos+$len);
                $p_p = $p0.'<span class="back_yellow">'.$p1.'</span>'.$p2;
                print htmlspecialchars($p_p);
                /* print $p_p."<br>"; */
              }
              #print htmlspecialchars($p);
              #print $p."<br>"."ｺﾚﾀﾞﾖ";
            #$pos2 = max($front_pos_list[$last_word]-round(100/($wbbb - $i +1)),0);
            #$pp = mb_substr($strs,$front_pos_list[$last_word]);
          }
          $qqqq = mb_strpos($strs,$p_pp);
          if($qqqq == 0){
            $p_p = $p_p."...";
          }
          $middle_p = $middle_p.$p_p;
          $last_word = $i - 1;
          $long = 0;
          $front_kw_num = $i-1;
        }
        if($i == $wbbb){
          /* print_r($front_pos_list);
          print $front_kw_num."<br>";
          print $i."lastlastlast"; */
          $rest = 100*($wbbb-$front_kw_num)/$wbbb;
          $pospos = $front_pos_list[$front_kw_num]-$span1*($i-1)-$span2*($i-1);
          $p_p = mb_substr($strs,max($pospos,0)-round($rest/2),round($rest+max($lenlist)));
          /* print "<br>".$p_p."  p_p  "."<br>"; */
          $sum_long += round(100*($i)/$wbbb)+max($lenlist);
          $p_pp = $p_p;

          foreach($result as $word_index){
            $word = $words_list[$word_index];
            $word = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$word);
            #echo $word;
            $len = mb_strlen($word);
            $pos = mb_strpos($p_p,$word,0,"UTF-8");
            /* print $pos."pos"."<br>"; */
            if(!is_bool($pos)){
              /* $pos2 = max((round($len + $front_pos_list[$last_word] * 2-round(100/($wbbb - $i +1))) / 2),0); */
              $p0 = mb_substr($p_p,0,$pos);
              $p1 = mb_substr($p_p,$pos,$len);
              $p2 = mb_substr($p_p,$pos+$len);
              $p_p = "...".$p0.'<span class="back_yellow">'.$p1.'</span>'.$p2;
              /* print htmlspecialchars($p_p);
              print "...".$p_p."<br>"; */
            }
        }
        $qqqq = mb_strpos($strs,$p_pp);
        if($qqqq + mb_strlen($p_pp) != mb_strlen($strs)){
          $p_p = $p_p."...";
        }
        $middle_p = $middle_p.$p_p;
        }
      }
        #print $sum_long."long<br>";
        $p = $middle_p;
        $h4 = '<h4 class="over">'."計".$wbbb."件</h4>";
      }else if($wbbb>=4){
        $p = "";
        $pppp = mb_substr($strs,0,100);
        foreach($result as $word_index){
          $word = $words_list[$word_index];
          $word = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$word);
          #echo $word;
          $len = mb_strlen($word);
          $pos = mb_strpos($pppp,$word,0,"UTF-8");
          #print $pos."pos"."<br>";
          if(!is_bool($pos)){
            $p0 = mb_substr($pppp,0,$pos);
            $p1 = mb_substr($pppp,$pos,$len);
            $p2 = mb_substr($pppp,$pos+$len);
            $pppp = $p0.'<span class="back_yellow">'.$p1.'</span>'.$p2;
            $p = $pppp;
        }
      } 
        $len = mb_strlen($pppp);
        if($len>100){
          $p = $p."...";
        }
        $h4 = '<h4 class="over">'."計".$wbbb."件</h4>";
      }
      
      }
    }else{
      $p = mb_substr($strs,$pos2,100);
    }
    /* echo htmlspecialchars($p); */
    $txtdata = <<< EOM
        <div class="news_topics">
              <a href="$filess[$index]#$ids[$index]">
                  <h3>$h1$h4</h3>
                  <p>
                      $p
                  </p>
              </a>
          </div>
        EOM;
        array_push($all_textdata,$txtdata);

      if($h1or==1){
        $h1 = $hs;
        /* echo count($hpos_len);
        print_r($hpos_len); */
      foreach($hpos_list as $h_index => $h_pos){
        /* $h1 = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$h1);
        $h_pos = mb_strpos($h1,$word,0,"UTF-8");
        $pos = 0;
        $pos2 = max($pos-50,0);
        $h10 = mb_substr($h1,0,$h_pos);
        $h11 = mb_substr($h1,$h_pos,$hpos_len[$h_index]);
        $h12 = mb_substr($h1,$h_pos+$hpos_len[$h_index]);
        $h1 = $h10.'<span class="back_yellow">'.$h11."</span>".$h12;
        echo htmlspecialchars($h1); */
        /* print_r("<br>"); */
        }
      }else{
        $h1 = $hs;
      }
      /* if($por==1){
        $p = $strs;
        foreach($ppos_len as $p_index => $p_pos){
          $pos = $p_pos; */
          /* $pos2 = max($pos-50,0); */
          /* $p0 = mb_substr($strs,0,$p_pos-1);
          $p1 = mb_substr($strs,$p_pos-1,$ppos_len[$p_index]);
          $p2 = mb_substr($strs,$p_pos+$ppos_len[$p_index]-1 *//* ,100-($pos+$len[$p_index]-$pos2) *//* ); */
          /* if($pos2 != 0){
            $p0 = "...".$p0;
          } */
          /* if(mb_strlen($strs)>100){
              $p2 = $p2."...";
          }
          $p = $p0.'<span class="back_yellow">'.$p1.'</span>'.$p2;
        }
      }else{
        $p = mb_substr($strs,$pos2,100);
        if(mb_strlen($strs)>100){
          $p = $p."...";
      }
      } */
      


      if($h1or==1){
        $pos = 0;
        $pos2 = max($pos-50,0);
        $p = mb_substr($strs,$pos2,100);
        $h10 = mb_substr($hs,0,$hpos);
        $h11 = mb_substr($hs,$hpos,$len);
        $h12 = mb_substr($hs,$hpos+$len);
        $h1 = $h10.'<span class="back_yellow">'.$h11."</span>".$h12;
        ###########################
        #候補に重複があるときの処理#
        ###########################

        $dup_word = mb_strpos($h1d,$word,0,"UTF-8");
        /* if(!is_bool($dup_word)){
          $h20 = mb_substr();
        } */




        ###########################
        #候補に重複があるときの処理#
        ###########################
        $h1d = $h10.$h11.$h12;
        $pd = $p;
        /* if(mb_strlen($strs)>100){
          $p = $p."...";
      } */
        /* $txtdata = <<< EOM
        <div class="news_topics">
              <a href="$filess[$index]#$ids[$index]">
                  <h3>$h1</h3>
                  <p>
                      $p
                  </p>
              </a>
          </div>
        EOM;
        array_push($all_textdata,$txtdata); */
        /* echo $txtdata; */
      }else{
        $pos = mb_strpos($strs,$word,0,"UTF-8");
        $pos2 = max($pos-50,0);
        $p0 = mb_substr($strs,$pos2,$pos-$pos2);
        $p1 = mb_substr($strs,$pos,$len);
        $p2 = mb_substr($strs,$pos+$len,100-($pos+$len-$pos2));
        $p00 = $p0;
        $p02 = $p2;
        /* if($pos2 != 0){
          $p0 = "...".$p0;
        }
        if(mb_strlen($strs)>100){
            $p2 = $p2."...";
        } */
        $p = $p0.'<span class="back_yellow">'.$p1.'</span>'.$p2;
        $h1 = $h1s[$index];
        ######################################
        #候補に重複があるときの処理をここに書く#
        ######################################
        $pd = $p00.$p1.$p02;
        $h1d = $h1s[$index];
        /* $txtdata = <<< EOM
        <div class="news_topics">
              <a href="$filess[$index]#$ids[$index]">
                  <h3>$h1</h3>
                  <p>
                      $p
                  </p>
              </a>
          </div>
        EOM;
        array_push($all_textdata,$txtdata); */
        /* echo $txtdata; */
      }
      /* $txtdata = <<< EOM
        <div class="news_topics">
              <a href="$filess[$index]#$ids[$index]">
                  <h3>$h1</h3>
                  <p>
                      $p
                  </p>
              </a>
          </div>
        EOM;
        array_push($all_textdata,$txtdata); */
    }
    /* $all_index++; */
  }else{
    $txtdata = <<< EOM
                <h2>ヒットしませんでした。</h2>
      EOM;
      echo $txtdata;
  }
  foreach($all_textdata as $txtdata){
    echo $txtdata;
  }
  
     ?>
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