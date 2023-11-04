<?php
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
		<p>Login</p>
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

	$sqli = "SELECT * 
			 FROM taikhoan t
			 WHERE t.tentk = '".$user."' AND t.pass = '".$pass."';";
	
	$re = getsql($conn, $sqli);
	
	foreach ($re as $key => $value) 
	{
		$level = $value['quyen'];
		$idtk = $value['idtk'];
	}

	if (!empty($re)) 
	{
		$_SESSION['user'] = $user;
		$_SESSION['quyen'] = $level;
		$_SESSION['idtk'] = $idtk;


		header('Location: admin.php');
	}
    else {
		echo "<script>
				alert('Sai mật khẩu hoặc tên tài khoản!!!');
			</script>";
    }
}

?>