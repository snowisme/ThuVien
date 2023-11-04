<?php

$sql = "SELECT * FROM sach ;";
$sach = getsql($conn, $sql);


if (isset($_GET['del'])) 
{
  $del = $_GET['del'];
  $sql = "DELETE FROM sach WHERE id = $del";
  $sach = setsql($conn, $sql);
  header("Refresh:0; url=admin.php?pages=sach");
}

?>

<table cellpadding='0' cellspacing='0' border='1' style="width:100%">

  <tr>
    <th>Id</th>
    <th>Tên</th>
    <th>Tác Giả</th>
    <th>Thể Loại</th>
    <th>Giới Thiệu</th>
    <th>Nội Dung</th>
    <th>Hình Ảnh</th>
    <th>Sửa</th>
    <th>Xóa</th>
  </tr>

    <?php   
       
        foreach ($sach as $key => $value) 
        {
          echo '<tr>
                  <td>'.$value['id'].'</td>
                  <td>'.$value['ten'].'</td>
                  <td>'.$value['tacgia'].'</td>
                  <td>'.$value['tentl'].'</td>
                  <td>'.$value['gioithieu'].'</td>
                  <td>'.$value['noidung'].'</td>
                  <td>'.$value['hinhanh'].'</td>
                  <td><a href="admin.php?pages=themsach&id='.$value['id'].'">Sửa</a></td>
                  <td><a href="admin.php?pages=sach&del='.$value['id'].'">Xóa</a></td>
                </tr>' ;
        }

    ?>

</table>
