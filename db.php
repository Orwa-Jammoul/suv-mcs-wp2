<?php


function connDB(){

  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'fillyfashion';

  // $hostname = 'sql307.epizy.com';
  // $username = 'epiz_29201953';
  // $password = '6exeHc25lXXV';
  // $database = 'epiz_29201953_filly_fashion_DB';





  try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
  } catch (PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
  }
}