<?php

$sql = "SELECT * FROM danhngon ;";
$danhngon = getsql($conn, $sql);


if (isset($_GET['del'])) 
{
  $del = $_GET['del'];

  $sql = "DELETE FROM danhngon WHERE iddn = $del ;";
  $danhngon = setsql($conn, $sql); 

  header("Refresh:0; url=admin.php?pages=danhngon");
}


?>

<table cellpadding='0' cellspacing='0'>

  <tr>
    <th>id</th>
    <th>Nội Dung</th>
    <th>Sửa</th>
    <th>Xóa</th>
  </tr>
  
    <?php   
       
        foreach ($danhngon as $key => $value) 
        {
          echo '<tr>
                  <td>'.$value['iddn'].'</td>
                  <td>'.$value['noidung'].'</td>
                  <td><a href="admin.php?pages=themdn&id='.$value['iddn'].'">Sửa</a></td>
                  <td><a href="admin.php?pages=danhngon&del='.$value['iddn'].'">Xóa</a></td>
                </tr>' ;
        }

    ?>

</<table>





