<?php
include("conn.php");
include("func.php");

// if (!isset($_SESSION)) 
// { 
//    	session_start();
// }

// if (!isset($_SESSION['user'])) 
// {
// 	header('Location: admin/login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Thư Viện</title>
</head>

<body>
  <div id="main">

    <div id="header"><?php include(views . "menu.php"); ?></div><br>

    <div id="content">
      <div id="line"></div>
      <div id="noidung1">
        Sách ebook được sưu tầm từ Internet, Bản quyền sách thuộc về Tác giả & Nhà xuất bản
      </div>
    </div>

    <div id="container">

      <div id="left"><?php

                      if (isset($_GET['search'])) {
                        include(views . "timkiem.php");
                      } else {
                        include(views . "left.php");
                      }
                      ?>
      </div>

      <?php
      if (!isset($_GET['read'])) {
        echo '<div id="right">';
        include(views . "right.php");
        echo '</div>';
      }
      ?>
    </div>

  </div>
</body>

</html>