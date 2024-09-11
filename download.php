<!DOCTYPE html>
<html lang="ja">
<head>
    <title>第73回洛星文化祭～宴～</title>

    <?php include "links.html" ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <meta charset="UTF-8">
</head>
<body>
   
        <?php include "header-nav.php" ?>
        <div class="wrap">
        <div id="hontai">
        <div class="main_content Download">
            <div class="inner_content inner_top" id="download">
                <h1>パンフレット・部誌・会誌など</h1>
                <section class="Download_Section">
                    <h2>パンフレット</h2>
                    <div class="Pamphlet">
                        <div class="Cover item">
                            <img src="image/表紙.png" alt="">
                            <img src="image/裏表紙.png" alt="">
                        </div>
                        <div class="Download_intro item">
                            <h3>説明</h3>
                            <p>第73回洛星文化祭～宴～<br>のパンフレットです！<br>プログラムパートが一生懸命作った集大成なので、文化祭に来る前や来校された際などにお使いください！！<br><!-- <br>試し読みは<a href="pamphlet.php">こちら</a> --></p>
                            <a href="pdfs/パンフレット.pdf" class="Download_button" download><img src="image/download_red.png" alt="ダウンロードアイコン"><p>ダウンロード(PDF)</p></a>
                        </div>
                    </div>
                </section>
                <section>
                    <h2>部誌・会誌など</h2>
                    <div class="Else_pamphlet">
                        <div class="Row Left">
                            <div class="Each_Club" id="club1">
                                <div class="Up_content">
                                    <a href='javascript:magazine("club1")'><img src="image/logo.png" alt="logo" class="Club_logo"><h3>合唱順</h3><img src="image/up_arrow.png" alt="" id="arrow" class="Arrow"></a>
                                </div>
                                <div>
                                <section>
                                    <h4>中学合唱</h4>
                                    <a href="image/中学合唱.png" class="Download_button Button_sonota" download><img src="image/download_red.png" alt="ダウンロードアイコン"><p>ダウンロード(PDF)</p></a>
                                </section>
                                <section>
                                    <h4>高校合唱</h4>
                                    <a href="image/高校合唱.png" class="Download_button Button_sonota" download><img src="image/download_red.png" alt="ダウンロードアイコン"><p>ダウンロード(PDF)</p></a>
                                </section>
                                </div>
                            </div>
                        </div>
                        <span class="Middle_line"></span>
                        <div class="Row Right">
                            <div class="Each_Club" id="club2">
                                <div class="Up_content">
                                    <a href='javascript:magazine("club2")'><img src="image/logo.png" alt="logo" class="Club_logo"><h3>準備中</h3><img src="image/up_arrow.png" alt="" id="arrow" class="Arrow"></a>
                                </div>
                                <section>
                                    <h4>準備中</h4>
                                    <a href="pdfs/" class="Download_button Button_sonota"download ><img src="image/download_red.png" alt="ダウンロードアイコン"><p>ダウンロード(PDF)</p></a>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
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