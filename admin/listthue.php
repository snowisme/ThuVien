<?php

$sql = "SELECT * FROM thuesach ;";
$listthue = getsql($conn, $sql);


if (isset($_GET['del'])) {
  $del = $_GET['del'];
  $sql = "DELETE FROM thuesach WHERE id = $del";
  $listthue = setsql($conn, $sql);
  header("Refresh:0; url=admin.php?pages=listthue");
}

if (isset($_POST['changeStatus'])) {
  $trangthai = $_POST['changeOption'];
  $id_tt = $_POST['changeOptionId'];
  $sql1 = "UPDATE thuesach SET trangthai = $trangthai WHERE id = $id_tt";
  $result = setsql($conn, $sql1);
  header("Refresh:0; url=admin.php?pages=listthue");
}

?>

<table cellpadding='0' cellspacing='0' border='1' style="width:100%">

  <tr>
    <th>ID</th>
    <th>Tên người thuê</th>
    <th>Ngày sinh</th>
    <th>Số điện thoại</th>
    <th>Tên sách</th>
    <th>Ngày thuê</th>
    <th>Ngày trả</th>
    <th>Trạng Thái</th>
    <th>Chuyển trạng thái</th>
    <th>Xóa</th>
  </tr>

  <?php

  foreach ($listthue as $key => $value) { ?>
    <tr>
      <?php
      echo '<td>' . $value['id'] . '</td>
                  <td>' . $value['ten'] . '</td>
                  <td>' . $value['birthday'] . '</td>
                  <td>' . $value['phone'] . '</td>
                  <td>' . $value['bookname'] . '</td>
                  <td>' . $value['startday'] . '</td>
                  <td>' . $value['endday'] . '</td>';
      ?>


      <td>
        <?php
        if ($value['trangthai'] == 0) {
          echo 'Chờ xác nhận';
        } elseif ($value['trangthai'] == 1) {
          echo 'Chưa trả';
        } elseif ($value['trangthai'] == 2) {
          echo 'Đã trả';
        } else {
          echo 'Quá hạn';
        }
        ?>

      </td>

      <td>
        <form action="" method="post">
          <input name="changeOptionId" type="hidden" value="<?php echo($value['id']); ?>">
        <select name="changeOption" id="">
          <option value="0">Chờ xác nhận</option>
          <option value="1">Chưa trả</option>
          <option value="2">Đã trả</option>
          <option value="3">Quá hạn</option>
        </select>
        <button name="changeStatus" style="padding: 0 10px;">OK</button>
        </form>
      
      </td>

      <?php

      echo '
                  <td><a href="admin.php?pages=listthue&del=' . $value['id'] . '">Xóa</a></td>
                  ';

      ?>

    </tr>
  <?php    }

  ?>

</table>