<?php

$conn = mysqli_connect("localhost", "root", "", "users");
session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT username FROM account WHERE username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>