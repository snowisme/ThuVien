
<?php

    foreach ($ctsach as $key => $value) {
        $id = $value['id'];
        $hinhanh = $value['hinhanh'];
        $ten = $value['ten'];
        $tacgia = $value['tacgia'];
        $namxb = $value['namxb'];
        $theloai = $value['tentl'];
        $gioithieu = $value['gioithieu'];
    }
?> 

<div id="page">
    <div id="anhsach">
        <img src="<?php echo $path_img.$hinhanh; ?>" alt="anh">
    </div>
    <div id="thongtin">
            <h1><?php echo $ten; ?></h1><br>
            <p>Tác Giả: <?php echo $tacgia; ?></p><br>
            <p>Năm xuất bản: <?php echo $namxb; ?></p><br>
            <p>Thể Loại: <a href="index.php?page=theloai&id=<?php echo $theloai; ?>"><?php echo $theloai; ?></a></p>

        <div style="display:flex">
        <div id="button">
            <a href="index.php?page=sach&id=<?php echo $id; ?>&read">Chi tiết</a>
        </div>
        <?php if(!isset($_SESSION['user'])){ 
            echo('<p style="margin-top:40px; line-height:2 ">Vui lòng <a style="color:red" href="admin/login.php">đăng nhập</a> để thuê sách</p>');
        }else{
            echo(' <div id="button-rent">
            <a href="index.php?page=thuesach&id='.$id.'">Thuê sách</a>
        </div>');
        }    
    ?>


    </div>
       
    </div>
</div>

<div id="gioithieu">
    <h1><?php echo $ten; ?></h1><br>
    <p><?php echo $gioithieu; ?></p>
</div>
        
