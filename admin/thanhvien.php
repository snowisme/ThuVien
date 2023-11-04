<?php

$sql = "SELECT * FROM taikhoan ;";
$thanhvien = getsql($conn, $sql);


if (isset($_GET['del'])) 
{
  $del = $_GET['del'];

  $sql1 = "DELETE FROM taikhoan WHERE tentk LIKE  '%".$del."%'; ";
  $thanhvien1 = setsql($conn, $sql1);

  header("Refresh:0; url=admin.php?pages=thanhvien");
}


?>

<table cellpadding='0' cellspacing='0'>

  <tr>
    <th>Thứ Tự</th>
    <th>Tên</th>
    <th>Pass</th>
    <th>Quyền</th>
    <th>Xóa</th>
  </tr>
  
    <?php   
       
        foreach ($thanhvien as $key => $value) 
        {
          echo '<tr>
                  <td>'.$key.'</td>
                  <td>'.$value['tentk'].'</td>
                  <td>'.$value['pass'].'</td>
                  <td>'.$value['quyen'].'</td>
                  <td><a href="admin.php?pages=thanhvien&del='.$value['tentk'].'">Xóa</a></td>
                </tr>' ;
        }

    ?>

</<table>





