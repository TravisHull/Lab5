<?php
echo '<div class="home-button">
        <a href="https://people.eecs.ku.edu/~t819h638/Lab5/CreateUser.html">Back</a>
      </div>';
$u_id = $_POST["userID"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "t819h638", "di7toh3K", "t819h638");

if ($mysqli->connect_errno)
{
  printf('Connect failed: %s\n', $mysqli->connect_error);;
  exit();
}

$query = "SELECT user_id FROM Users WHERE user_id = '$u_id'";

if (mysqli_num_rows($mysqli->query($query)) === 1)
{
  echo "<script> alert('A user named $u_id already exists, please enter a different user name!');</script>";
  exit();
}

else if ($u_id === "")
{
  echo "<script> alert('Please enter a user name!');</script>";

}
else
{
$query = "INSERT INTO Users (user_id) VALUES ('$u_id')";
$mysqli->query($query);
echo "<script> alert('entered else case');</script>";
}

$mysqli->close();
 ?>
