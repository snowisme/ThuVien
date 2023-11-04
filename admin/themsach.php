<?php

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

	if (isset($_POST['add'])) 
	{
		$ten = $_POST['name'];
		$tacgia = $_POST['tacgia'];
		$namxb = $_POST['namxb'];
		$theloai = $_POST['theloai'];
		$gioithieu = $_POST['gioithieu'];
		$noidung = $_POST['noidung'];
		$hinhanh = $_POST['hinhanh'];
		
		$sql = "UPDATE sach SET ten = '$ten', hinhanh = '$hinhanh', noidung = '$noidung', tentl = '$theloai', tacgia = '$tacgia', namxb = '$namxb',gioithieu = '$gioithieu' WHERE id = $id;";
		$sach = setsql($conn, $sql);
		
	}

	$sql = "SELECT * FROM sach where id = $id;";
    $suasach = getsql($conn, $sql);

	foreach ($suasach as $key1 => $value) 
	{

		echo '<form class="sp" action="" method="POST">
			<p>Sửa Thông Tin Sách</p>
			<div class="content">
				<div>
					<label>Tên Sách:</label>
					<input type="text" name="name" value="'.$value['ten'].'">
				</div>
				<div>
					<label>Tác Giả:</label>
					<input type="text" name="tacgia" value="'.$value['tacgia'].'">
				</div>
				<div>
					<label>Năm xuất bản:</label>
					<input type="text" name="namxb" value="'.$value['namxb'].'">
				</div>
				<div>
					<label>Thể Loại:</label>
					<input type="text" name="theloai" value="'.$value['tentl'].'">
				</div>
				<div>
					<label>Giới Thiệu:</label><br>
					<textarea id="freeform" name="gioithieu" rows="4" cols="50">'.$value['gioithieu'].'</textarea>
				</div>
				<div>
					<label>Nội Dung:</label><br>
					<textarea id="freeform" name="noidung" rows="4" cols="50">'.$value['noidung'].'</textarea>
				</div>
				<div>
					<label>Hình Ảnh:</label>
					<input type="text" name="hinhanh" value="'.$value['hinhanh'].'">
				</div>
			</div><br>
			<input type="submit" name="add" value="Sửa">
		</form>';

	}

} 
else 
{
	if (isset($_POST['add'])) 
	{
		$ten = $_POST['name'];
		$tacgia = $_POST['tacgia'];
		$namxb = $_POST['namxb'];
		$theloai = $_POST['theloai'];
		$gioithieu = $_POST['gioithieu'];
		$noidung = $_POST['noidung'];
		$hinhanh = $_POST['hinhanh'];

		$sql = "INSERT INTO sach(ten, hinhanh, noidung, tentl, tacgia, namxb, gioithieu) VALUES ('$ten', '$hinhanh', '$noidung', '$theloai', '$tacgia', '$namxb', '$gioithieu');";
		$sach = setsql($conn, $sql);
		
	}

	echo '<form class="sp" action="" method="POST">
			<p>Thêm Thông Tin Sách</p>
			<div class="content">
				<div>
					<label>Tên Sách:</label>
					<input type="text" name="name" value="">
				</div>
				<div>
					<label>Tác Giả:</label>
					<input type="text" name="tacgia" value="">
				</div>
				<div>
					<label>Năm xuất bản:</label>
					<input type="text" name="namxb" value="">
				</div>
				<div>
					<label>Thể Loại:</label>
					<input type="text" name="theloai" value="">
				</div>
				<div>
					<label>Giới Thiệu:</label><br>
					<textarea id="freeform" name="gioithieu" rows="4" cols="50"></textarea>
				</div>
				<div>
					<label>Nội Dung:</label><br>
					<textarea id="freeform" name="noidung" rows="4" cols="50"></textarea>
				</div>
				<div>
					<label>Hình Ảnh:</label>
					<input type="text" name="hinhanh" value="">
				</div>
			</div><br>
			<input type="submit" name="add" value="Thêm">
		</form>';

}





?>