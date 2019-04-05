<?php
$u_id = $_POST["userID"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "t819h638", "di7toh3K", "t819h638");

if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT user_id FROM Users WHERE user_id = $u_id";

if ($result = $mysqli->query($query))
{
  echo "<script> alert('A user named $u_id already exists, please enter a different user name!');";
}

else
{
  $query = "INSERT INTO Users (user_id) VALUES ('$u_id')";
}

 ?>
