<?php
$server = 'localhost';
$username = 'root';
$password = '123456'; // Yout Database root PASSWORD for localhost!
$database = 'login';

try{
  $db = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
  die("Connection failed: " .$e->getMessage());
}