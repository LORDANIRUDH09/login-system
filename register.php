<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "users";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT username FROM account WHERE username = ? LIMIT 1";
     $INSERT = "INSERT INTO account (username, password) VALUES(?, ?)";

     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      echo "You are registered successfully.";
     } else {
      echo "This username is taken.";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body{
      text-align: center;
      padding: 100px;
      font-family: "Nunito";
      font-size: 16px;
    }
    a{
      color: #111;
      margin-top: 20px;
      display: inline-block;
    }

  </style>
</head>
<body>
  <br>
  <a href="index.php">Login</a>
</body>
</html>