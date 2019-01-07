<?php
  define('DB_SERVER', 'eec353.encs.concordia.ca');
  define('DB_USERNAME', 'eec353_2');
  define('DB_PASSWORD', '2018comp');
  define('DB_DATABASE', 'eec353_2');

  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    Echo mysqli_connect_error();
?>
