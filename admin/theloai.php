<?php

$sql = "SELECT * FROM theloai ;";
$theloai = getsql($conn, $sql);


if (isset($_GET['del'])) 
{
  $del = $_GET['del'];

  $sql1 = "UPDATE sach SET tentl = NULL WHERE tentl LIKE  '%".$del."%'; ";
  $theloai1 = setsql($conn, $sql1);

  $sql2 = "DELETE FROM theloai WHERE tentl LIKE  '%".$del."%'; ";
  $theloai2 = setsql($conn, $sql2);

  header("Refresh:0; url=admin.php?pages=theloai");
}


?>

<table cellpadding='0' cellspacing='0'>

  <tr>
    <th>Thứ Tự</th>
    <th>Tên</th>
    <th>Sửa</th>
    <th>Xóa</th>
  </tr>
  
    <?php   
       
        foreach ($theloai as $key => $value) 
        {
          echo '<tr>
                  <td>'.$key.'</td>
                  <td>'.$value['tentl'].'</td>
                  <td><a href="admin.php?pages=themtl&id='.$value['tentl'].'">Sửa</a></td>
                  <td><a href="admin.php?pages=theloai&del='.$value['tentl'].'">Xóa</a></td>
                </tr>' ;
        }

    ?>

</<table>





