<?php
$theloai = theloai($conn);
// print_r($newtt);

$danhngon = danhngon($conn);
// print_r(count($danhngon));
$random = rand(0,count($danhngon)-1);

?>


<div id="danhngon">
    <div class="name1">Danh Ngôn Hay</div>
    <div id="noidung2">
        <?php
        echo $danhngon[$random]['noidung'];
        ?>
    </div>
</div>

<div id="theloai">
    <div class="name">Thể Loại Sách</div>
    <?php
        foreach ($theloai as $key => $value) {
            echo '<div class="title">
                    <a href="index.php?page=theloai&id='.$value['tentl'].'">'.$value['tentl'].'</a>
                </div>';
        }
    ?>
    

</div>