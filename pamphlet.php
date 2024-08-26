<!DOCTYPE html>
<html lang="ja">
<head>
  <title>第73回洛星文化祭～宴～</title>
  <?php include "links.html" ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.5.141/pdf.min.js"></script>
</head>
<body>
        <?php include "header-nav.php" ?>
        <div class="wrap">
        <div id="hontai">
        <div class="main_content inner_content pamph inner_top">
            <div class="pdf_page">
                <span id="next_pdf"></span>
                <canvas id="pdf"></canvas>
                <span id="prev_pdf"></span>
            </div>
        </div>
        <div class="side_content">
    <?php include "Side_bar.html" ?>
    </div>
    </div>
    <script src="./js/pamphlet.js"></script>
    <?php include "footer.html" ?>
        </div>
    
</body>
</html>