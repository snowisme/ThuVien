<?php

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

	if (isset($_POST['add'])) 
    {
		$tentl = $_POST['name'];

		$sql = "UPDATE theloai SET tentl='".$tentl."' WHERE tentl LIKE  '%".$id."%';";
		$theloai = setsql($conn, $sql);
    }

	$sql = "SELECT * FROM theloai WHERE tentl LIKE  '%".$id."%';";
    $suatheloai = getsql($conn, $sql);

	foreach ($suatheloai as $key => $value) 
    {

		echo '<form class="nhom" action="" method="POST">
		        <p>Sửa Thông Tin Thể Loại</p>
				<div class="content">
					<div class="name">
						<label>Tên Thể Loại:</label><br>
						<input type="text" name="name" value="'.$value['tentl'].'">
					</div><br>
				</div><br>
				<input type="submit" name="add" value="Sửa">
			</form>';
	}
} 
else 
{
	if (isset($_POST['add'])) 
    {
		$tentl = $_POST['name'];

		$sql = "INSERT INTO theloai(tentl) VALUES ('".$tentl."')";
		$theloai = setsql($conn, $sql);
    }

	echo '<form class="nhom" action="" method="POST">
		        <p>Thêm Thể Loại</p>
				<div class="content">
					<div class="name">
						<label>Tên Thể Loại:</label><br>
						<input type="text" name="name" value="">
					</div><br>
				</div><br>
				<input type="submit" name="add" value="Thêm">
			</form>';

}

?>
