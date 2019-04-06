<?php
echo '<div class="home-button">
        <a href="https://people.eecs.ku.edu/~t819h638/Lab5/AdminHome.html">Back to Admin Home</a>
      </div>';

$info = $_GET['check'];
echo $info;
$mysqli = new mysqli("mysql.eecs.ku.edu", "t819h638", "di7toh3K", "t819h638");

$query = "SELECT post_id FROM Posts";

foreach($info as $value)
{
  $del = "DELETE FROM Posts WHERE post_id= ('$value')";
  $mysqli->query($del);
}

$mysqli->close();
 ?>
