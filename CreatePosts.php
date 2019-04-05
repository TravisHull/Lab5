<?php
echo '<div class="home-button">
        <a href="https://people.eecs.ku.edu/~t819h638/Lab5/CreatePosts.html">Back</a>
      </div>';
$u_id = $_POST["userID"];
$u_post = $_POST["userPost"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "t819h638", "di7toh3K", "t819h638");

if ($mysqli->connect_errno)
{
  printf('Connect failed: %s\n', $mysqli->connect_error);
  exit();
}

$query = "SELECT user_id FROM Users WHERE user_id = '$u_id'";

if (mysqli_num_rows($mysqli->query($query)) === 0)
{
  echo "<script> alert('You must enter a valid user name to create a post!');</script>";
}

else if ($u_id === "")
{
  echo "<script> alert('Please enter a user name!');</script>";
}
else if ($u_post === "")
{
  echo "<script> alert('You cannot upload an empty post.');</script>";
}
else
{
$query = "INSERT INTO Posts (content, author_id) VALUES ('$u_post', '$u_id')";
$mysqli->query($query);
}

$mysqli->close();
 ?>
