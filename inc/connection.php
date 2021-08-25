<?php

$connection = mysqli_connect('localhost' , 'root' , '' , 'y2gp_alss');

if ($connection -> connect_error) {
    die("Connection failed: " . $connection -> connect_error);
  }
  else
  echo "Connected successfully";
  ?>