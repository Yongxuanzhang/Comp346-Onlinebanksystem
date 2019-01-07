<?php
$server = 'eec353.encs.concordia.ca';
$username = 'eec353_2';
$password = '2018comp'; // Yout Database root PASSWORD for localhost!
$database = 'eec353_2';

try{
  $db = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
  die("Connection failed: " .$e->getMessage());
}
