<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="box">
<h2>Login Form</h2>
	<form action="" method="post">

		<table border="0" cellpadding="10px">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" id="submit" value="Login"></td>
				<td><a href="join.php">Create new account?</a></td>
			</tr>
		</table>

	</form>
</div>
</body>
</html>