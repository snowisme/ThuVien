<?php
use LDAP\Result;
   if (!isset($_SESSION)) 
   { 
   	 session_start();
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>Dang Nhap</title>
</head>
<body>
    
    <div class="login">
		<p>Register</p>
		<form action="" method="POST">
				<div class="fis">
					<label>Username:  </label>
					<input type="text" name="user"/>
				</div><br>
				<div class="lat">
					<label>Password:  </label>
					<input type="password" name="pass"/>
				</div><br>
				<div class="sub">
					<input type="submit" name="login" value="Go"/>
				</div>
		</form>
		
	</div>

</body>
</html>

<?php

include ("../conn.php");
include ("admin_funs.php");

if (isset($_POST['login'])) 
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sqli1 = "SELECT * 
			 FROM taikhoan t
			 WHERE t.tentk = '".$user."';";

    $req1 = getsql($conn, $sqli1);
	$count = mysqli_num_rows($req1);

	if ($count) {

		$sqli2 = "INSERT INTO taikhoan (tentk, pass, quyen)
				VALUES ('".$user."','".$pass."','');";

		$req2 = getsql($conn, $sqli2);
		header('Location: login.php');

	} 
    
}

?>

