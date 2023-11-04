<?php

function theloai($connect){
	$sql = "SELECT * FROM theloai";
	$resul = mysqli_query($connect, $sql); // thực hiện câu truy vấn
	if (!$resul) {
		echo "Loi truy van";
	}
	$data = array();
	while ($row = mysqli_fetch_assoc($resul)) {
		$data[] = $row;
	}
	return $data;
}

function chitiettl($connect, $id){
	$sql = "SELECT *
			FROM sach s
			WHERE s.tentl LIKE '%".$id."%';";
	$resul = mysqli_query($connect, $sql);
	if (!$resul) {
		echo "Loi truy van";
	}
	$data = array();
	while ($row = mysqli_fetch_assoc($resul)) {
		$data[] = $row;
	}
	return $data;
}

function sachdathue($connect, $username){
	$sql = "SELECT *
			FROM thuesach s
			WHERE s.username LIKE '%".$username."%' ORDER BY id DESC;" ;
	$resul = mysqli_query($connect, $sql);
	if (!$resul) {
		echo "Loi truy van";
	}
	$data = array();
	while ($row = mysqli_fetch_assoc($resul)) {
		$data[] = $row;
	}
	return $data;
}

function danhngon($connect){
	$sql = "SELECT * FROM danhngon";
	$resul = mysqli_query($connect, $sql);
	if (!$resul) {
		echo "Loi truy van";
	}
	$data = array();
	while ($row = mysqli_fetch_assoc($resul)) {
		$data[] = $row;
	}
	return $data;
}

function sach($connect){
	$sql = "SELECT * FROM sach;";
	$resul = mysqli_query($connect, $sql);
	if (!$resul) {
		echo "Loi truy van";
	}
	$data = array();
	while ($row = mysqli_fetch_array($resul)) {
		$data[] = $row;
	}
	return $data;
}

function chitietsach($connect, $id){
	$sql = "SELECT * FROM sach s WHERE s.id = ".$id.";";
	$resul = mysqli_query($connect, $sql);
	if (!$resul) {
		echo "Loi truy van";
	}
	$data = array();
	while ($row = mysqli_fetch_assoc($resul)) {
		$data[] = $row;
	}
	return $data;
}

?>