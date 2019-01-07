<?php
$server = 'localhost';
$username = 'root';
$password = '123456'; // Yout Database root PASSWORD for localhost!
$database = 'eec353_2';

try{
  $db = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
  die("Connection failed: " .$e->getMessage());
}