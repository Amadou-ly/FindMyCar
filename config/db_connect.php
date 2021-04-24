<?php

  // database connection
  $conn = mysqli_connect('localhost', 'Amadou', '0000', 'FindMyCar');

  // check connection
  if (!$conn) {
    echo 'Connection Error:' .mysqli_connect_error();
  }

?>
