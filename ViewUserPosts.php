<?php
echo '<div class="home-button">
        <a href="https://people.eecs.ku.edu/~t819h638/Lab5/ViewUserPosts.html">Back to User Select</a>
      </div>';

$u_id = $_POST["option"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "t819h638", "di7toh3K", "t819h638");

$query = "SELECT content FROM Posts WHERE author_id = '$u_id'";

echo '<div class="container" style="text-align:center">';
if ($result = $mysqli->query($query))
{
  while ($row = $result->fetch_assoc())
  {
    echo $row['content']."<br>";
  }
  $result->free();
}

if (mysqli_num_rows($mysqli->query($query)) === 0)
{
  echo 'User has no posts.';
}
echo '</div>';
$mysqli->close();
?>
