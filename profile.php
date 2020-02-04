<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="profile">
	<span class="welcome">Welcome : <?php echo $login_session; ?></span>
	<span class="logout"><a href="logout.php">Log Out</a><span>
</div>

</body>
</html>