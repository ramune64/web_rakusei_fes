<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
  <title>練習中3</title>
  <!-- <link rel="stylesheet" href="aaa.css" type="text/css">
  <link rel="icon" href="image\favicon.ico"> -->
  <?php include "links.html" ?>
</head>
<body>
    <?php include "header-nav.php" ?>
    <div class="wrap">
    <div id="hontai">
    <div class="main_content">
    <div class="inner_content" id="page3-1">
        <h1>トピック(更新順)</h1>
        <?php
            /* session_cache_limiter("private_no_expire"); */
            mb_internal_encoding("UTF-8");
            $news_files = glob("news/*news.php");
            $index = 0;
            foreach($news_files as $news){
                $newsnum_str = str_replace("news/","",$news);
                $newsnum_str = str_replace("news.php","",$newsnum_str);
                $news_files[$index]=(int)$newsnum_str;
                $index++;
            }
            rsort($news_files);
            $filess = [];
            $ids = [];
            $h1s = [];
            $Contents = [];
            $content = "dumy";
            $count = 0;
            $index = 0;
            foreach($news_files as $news){
                $news = "news/".$news."news.php";
                $news_files[$index]=$news;
                $index++;
            }
            foreach($news_files as $news){
                $count = 0;
                $content = "dumy";
                /* echo $news."<br />"; */
                $file = fopen($news,"r");
                while($data = fgets($file)){
                    $a = mb_strpos($data,"inner_content");
                    if(!is_bool($a)){
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
                            $h1 = mb_strpos($data,"<h1>");//見出しの有無
                            if(!is_bool($h1)){//見出しがある時
                                $h1 = strip_tags($data);
                                array_push($h1s,$h1);
                                array_push($filess,$news);
                                /* echo"<".$h1."><br />"; */
                            }else{//見出しがない時
                                $title = mb_strpos($data,"title");
                                if(is_bool($title)){//titleタグじゃなかったら
                                    /* echo "/".$content."/<br />"; */
                                    $content = $content.strip_tags($data);
                                }
                            }
                        }
                    }
                }
                array_push($Contents,$content);
                    /* foreach($h1s as $wa){
                        echo $wa."<br />";
                    } */
            }
            $index = 0;
            foreach($h1s as $h1){
                $p = str_replace([" ","","\r\n", "\r", "\n", "\t"],"",$Contents[$index]);
                $p = mb_substr($p,0,100);

                $txtdata = <<< EOM
                    <div class="news_topics">
                        <a href="$filess[$index]#$ids[$index]">
                            <h3>$h1s[$index]</h3>
                            <p>
                                $p
                            </p>
                        </a>
                    </div>
                    EOM;
                    echo $txtdata;
                    $index++;
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