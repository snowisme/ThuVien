<?php
$menu = theloai($conn);
// print_r($menu);

if (!isset($_SESSION)) 
{ 
    session_start();
}
?>

<div id="hleft">
    <a href="index.php"><img src="images/sachx.png" alt="name"></a>
</div>
        
<div id="menu">
    <ul>
        <li><a href="index.php">Trang Chủ</a></li>

        <li id="down">
            <a href="index.php?page=sach">Thể Loại</a>

            <ul id="drop">
                <?php 
                    foreach ($menu as $key => $value) {
                        echo '<li><a href="index.php?page=theloai&id='.$value['tentl'].'">'.$value['tentl'].'</a></li>';
                    }
                ?>
            </ul>
            
        </li>

        <?php
           if (isset($_SESSION['user'])) {
            echo '<li id="login"><a href="index.php?page=sachdathue">Sách Đã Thuê</a></li>';
              echo '<li><a href="admin/out.php">Đăng Xuất</a></li>';
           } else {
              echo '<li id="login"><a href="admin/login.php">Đăng Nhập</a></li>';
            //   echo '<li><a href="admin/dangky.php">Đăng Ký</a></li>';
           }          
        ?>

        
    </ul>
    <ul style="justify-content: right ;">
        <form action="" method="GET">
            <input name="search" style="padding: 2px 10px ;" type="text" placeholder="Tìm kiếm sách...">
            <button id="btn-search" type="submit">Tìm kiếm</button>
        </form>
    </ul>
</div>

