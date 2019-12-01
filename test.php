<?php

include('config/config.php');
$select = mysqli_query($connection, "SELECT * FROM categories");
while ($row = mysqli_fetch_assoc($select)) {
  echo "<h1>" .$row['cat_title']. "</h1>";
}

 ?>
