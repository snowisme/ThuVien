<?php 

include ("../conn.php");
include ("admin_funs.php");

if (!isset($_SESSION)) 
{ 
   	session_start();
}

if (isset($_SESSION['quyen']) && $_SESSION['quyen'] < 1) 
{
	header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<title>ADMIN</title>
</head>
<body>
    
    <div class="main">
    	<div class="banner">
    		<img id="img1" src="../banner/banner.jpg" alt="">
			<img id="img2" src="../banner/bang.png" alt="">
			<img id="img3" src="../banner/co2.png" alt="">
			<img id="img4" src="../banner/co2.png" alt="">
    	</div>

    	<div class="menu">
    		<ul>
    			<li><a href="admin.php">Trang Chủ</a></li>
				<li class="down">
    				<a href="#">Thành Viên</a>
                    <ul class="child">
                    	<li><a href="admin.php?pages=thanhvien">List Thành Viên</a></li>
                    </ul>
    			</li>
    			<li class="down">
    				<a href="#">Sách</a>
                    <ul class="child">
                    	<li><a href="admin.php?pages=sach">List Sách</a></li>
                    	<li><a href="admin.php?pages=themsach">Thêm Sách</a></li>
                    </ul>
    			</li>
    			<li class="down">
    				<a href="#">Thể Loại</a>
                    <ul class="child">
                    	<li><a href="admin.php?pages=theloai">List Thể Loại</a></li>
                    	<li><a href="admin.php?pages=themtl">Thêm Thể Loại</a></li>
                    </ul>
    			</li>
				<li class="down">
    				<a href="#">Danh Ngôn</a>
                    <ul class="child">
                    	<li><a href="admin.php?pages=danhngon">List Danh Ngôn</a></li>
                    	<li><a href="admin.php?pages=themdn">Thêm Danh Ngôn</a></li>
                    </ul>
    			</li>
				<li><a href="admin.php?pages=listthue">List Thuê Sách</a></li>
    		</ul>
			<div class="content">
				<h4 class="comment">
					<?php
						if (isset($_SESSION['user'])) {
							echo "Xin Chào: ".$_SESSION['user'];
						}
					?>
				</h4>
				<a class="out" href="out.php">Thoát</a>
			</div>
    	</div>

    	<div class="container">
    		
    		<?php 

                if (isset($_GET['pages'])) 
				{
                    require(root.'admin/'.$_GET['pages'].'.php');
                } 
                
    		?>

    	</div>
    </div>
    
</body>
</html>