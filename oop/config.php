<?php
$host = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=crud", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>