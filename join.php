<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="box">
<h2>Register Form</h2>

	<form action="register.php" method="post">

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
				<td><input type="submit" name="submit" value="Register"></td>
				<td><a href="index.php">Already have an account?</a></td>
			</tr>
		</table>

	</form>
</div>
</body>
</html>