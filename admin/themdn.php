<?php

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

	if (isset($_POST['add'])) 
    {
		$noidung = $_POST['noidung'];

		$sql = "UPDATE danhngon SET noidung ='".$noidung."' WHERE iddn = $id;";
		$danhngon = setsql($conn, $sql);
    }

	$sql = "SELECT noidung FROM danhngon where iddn = $id;";
    $suadn = getsql($conn, $sql);

	foreach ($suadn as $key => $value) 
    {

		echo '<form class="nhom" action="" method="POST">
		        <p>Sửa Nội Dung Danh Ngôn</p>
				<div class="content">
					<div class="name">
						<label>Nội Dung:</label><br>
						<input type="text" name="noidung" value="'.$value['noidung'].'">
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
		$noidung = $_POST['noidung'];

		$sql = "INSERT INTO danhngon(noidung) VALUES ('".$noidung."')";
		$danhngon = setsql($conn, $sql);
    }

	echo '<form class="nhom" action="" method="POST">
		        <p>Thêm Danh Ngôn</p>
				<div class="content">
					<div class="name">
						<label>Nội Dung:</label><br>
						<input type="text" name="noidung" value="">
					</div><br>
				</div><br>
				<input type="submit" name="add" value="Thêm">
			</form>';
}

?>
