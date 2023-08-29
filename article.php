<?php
require_once('php/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('php/head.php');
    ?>
    <link href="style2.css", rel="stylesheet">
    <link href="common.css", rel="stylesheet">
    <title>ASSUKSSU - 부고 최초 학급 언론사</title>
</head>
<body>
    <?php
   require_once('php/header.php');
   ?>
    <div id="main">
        <div class="main-left">
            <div class="article-type">
                <i class="fi fi-sr-circle-star"></i>
                <h6 class="article-type-font">ASSUKSSU</h6>
                <h6 class="article-type-font"> > </h6>
                <h6 class="article-type-font">
                    <?php
                    echo core($_GET['id'].".txt")[0];
                    ?>
                </h6>
            </div>
            <div class="headline">
                <h1 class="headline-title">
                    <?php
                    echo core($_GET['id'].".txt")[1];
                    ?>
                </h1>
            </div>
            <div class="article-info">
                <?php
                $name = core($_GET['id'].".txt")[2];
                $input = date_converter(core($_GET['id'].".txt")[3]);
                $edit = date_converter(core($_GET['id'].".txt")[4]);
                echo "$name 기자 | 입력: $input | 수정: $edit"
                ?>
            </div>
            <div class="article-content-wrap">
                <?php
                $i = 1;
                $content = explode("||", core($_GET['id'].".txt")[6]);
                echo '<p id="first-article-content" class="article-content">';
                echo "  $content[0]";
                echo '</p>';
                while ($i < count($content)) {
                    echo '<p class="article-content">';
                    echo "  $content[$i]";
                    echo '</p>';
                    $i = $i + 1;
                }
                ?>
            </div>
            <?php
            if (core($_GET['id'].".txt")[5] != 'none') {
                require_once('php/article-img.php');
            }
            ?>
        </div>
        <div class="main-right">
            <h2 class="update">업데이트 예정입니다.</h2>
        </div>
    </div>
    <?php
    require_once('php/footer.php')
    ?>
    <script>
        function update() {
            alert('업데이트 예정입니다.')
        }
    </script>
</body>
</html>