<?php
echo '<div class="home-button">
        <a href="https://people.eecs.ku.edu/~t819h638/Lab5/AdminHome.html">Back to Admin Home</a>
      </div>';

$mysqli = new mysqli("mysql.eecs.ku.edu", "t819h638", "di7toh3K", "t819h638");

$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query))
{
  while ($row = $result->fetch_assoc())
  {
    echo $row['user_id']."<br>";
  }
  $result->free();
}
$mysqli->close();
 ?>
