<?php
  $host = "remotemysql.com";
  $dbUsername = "fwlMeZ9mfD";
  $dbPassword = "JGQSOqLVpW";
  $dbname = "fwlMeZ9mfD";


  //Creating connection
  $conn = new mysqli($host, $dbUsername , $dbPassword, $dbname);

  if (mysqli_connect_error()) {
    die('Connect!! Error('. mysqli_connect_error().')'. mysqli_connect_error());
  }

  ?>
