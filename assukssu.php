<?php
require_once('php/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('php/head.php');
    ?>
    <link href="style.css", rel="stylesheet">
    <link href="common.css", rel="stylesheet">
    <title>ASSUKSSU - 부고 최초 학급 언론사</title>
</head>
<body>
    <?php
    require_once('php/header.php');
    ?>
    <div id="main">
        <div class="main-left">
            <div class="category-wrap">
                <div class="category">
                    <h2 class="category-title">메인</h2>
                </div>
                <div class="content">
                    <?php
                    article_title();
                    ?>
                </div>
            </div>
        </div>
        <div class="main-right">
            <h2 class="update">업데이트 예정입니다.</h2>
        </div>
    </div>
    <?php
    require_once('php/footer.php');
    ?>
    <script>
        function update() {
            alert('업데이트 예정입니다.')
        }
    </script>
</body>
</html>