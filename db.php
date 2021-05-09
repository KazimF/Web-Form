<?php
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "1234";
  $dbname = "Demo";


  //Creating connection
  $conn = new mysqli($host, $dbUsername , $dbPassword, $dbname);

  if (mysqli_connect_error()) {
    die('Connect!! Error('. mysqli_connect_error().')'. mysqli_connect_error());
  }

  ?>
