<?php

  // connect to Mysql Database
  $conn = mysqli_connect('localhost', 'carlos', 'toor', 'ninja_pizza');

  // check connection
  if(!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
  }



 ?>
