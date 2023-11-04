<?php

foreach ($ctsach as $key => $value) {
  $ten = $value['ten'];
}

if (isset($_POST['rent'])) {
  $username = $_POST['username'];
  $bookName = $_POST['bookName'];
  $tenthue = $_POST['name'];
  $birthday = $_POST['birthday'];
  $phone = $_POST['phone'];
  $startDay = $_POST['startDay'];
  $endDay = $_POST['endDay'];

  echo ($username . '_'. $bookName . '_'. $birthday . '_'. $phone . '_'. $startDay . '_'. $endDay);
  $sql = "INSERT INTO thuesach(username, bookname, ten, birthday, phone, startday, endday) 
		VALUES ('".$username."', '".$bookName."', '".$tenthue."',  '".$birthday."', '".$phone."', '".$startDay."', '".$endDay."');";
  
  $thuesach = mysqli_query($conn, $sql);

  if (!$thuesach) {
    // echo '<script>alert("Đã xảy ra lỗi!");</script>';
    die("Query failed: " . mysqli_error($conn));
  } else {
    echo '<script>alert("Thuê sách thành công! Vui lòng đợi duyệt");</script>';
  }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  a {
    text-decoration: none;
  }
</style>
<form class="m-4" action="" method="POST">
  <h4 class="text-center">Thuê sách</h4>
  <input type="hidden" value="<?php echo ($_SESSION['user']) ?>" name="username">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sách thuê:</label>
    <input type="text" name="bookName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo ($ten) ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên người thuê:</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày sinh:</label>
    <input name="birthday" type="date" class="form-control" id="exampleInputPassword1" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Số điện thoại:</label>
    <input name="phone" type="number" class="form-control" id="exampleInputPassword1" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày thuê:</label>
    <input name="startDay" type="date" class="form-control" id="exampleInputPassword1" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày trả:</label>
    <input name="endDay" type="date" class="form-control" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-primary" name="rent">Thuê sách</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>