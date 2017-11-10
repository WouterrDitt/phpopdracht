<?php
$server = "localhost";
$user= "root";
$pass = "root";
$getUserInfo = NULL;

try {
    $conn = new PDO("mysql:host=$server;dbname=login", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
      echo "Connection failed" . $e->getMessage();
    }

  $getUserInfo = $conn->query("SELECT * FROM users")

?>
