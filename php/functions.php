<?php
function nav_list($nav){
    $i = 0;
    while($i < count($nav)) {
    echo '<li class="navitem" >';
    echo "  <a onclick='update()'>$nav[$i]</a>";
    echo "</li>";
    $i = $i + 1;
    }
}

function core($id) {
    $article_array = explode('|-|', file_get_contents('article/'.$id), 7);
    $id_edit = substr($id, 0, -4);
    $id_jpg = substr($id, 0, -4);
    array_push($article_array, $id_edit, $id, $id_jpg);
    return $article_array;
    # 0: 카테고리
    # 1: 기사 제목
    # 2: 작성자 이름
    # 3: 입력 시간 정보
    # 4: 수정 시간 정보
    # 5: 사진 정보
    # 6: 기사 내용
    # 7: 기사 id
    # 8: 기사 txt 파일명
    # 9: 사진자료 (jpg)
}

function id_list() {
    $list = scandir("article");
    $i = 0;
    $id_list = array();
    while($i < count($list)) {
        if ($list[$i] != '.') {
            if ($list[$i] != '..') {
                array_push($id_list, core($list[$i])[8]);
            }
        }
        $i = $i + 1;
    }
    return $id_list;
}


function article_title() {
    $n = 0;
    while ($n < 2){
        $i = count(id_list());
        echo "<div class='cont-child'>";
        while ($i > 0 + $n) {
            echo "  <div class='cont-item'>";
            echo "      <a href='article.php?id=".core(id_list()[($i-1-$n)])[7]."'>";
            echo "          ".core(id_list()[($i-1-$n)])[1];
            echo "      </a>";
            echo "  </div>";
            $i = $i - 2;
        }
        echo "</div>";
        $n = $n + 1;
    }
}

function date_converter($original) {
    $y = substr($original, 0, 4);
    $m = substr($original, 4, 2);
    $d = substr($original, 6, 2);
    $h = substr($original, 8, 2);
    $min = substr($original, 10, 2);

    return "$y.$m.$d $h:$min";
}
?>