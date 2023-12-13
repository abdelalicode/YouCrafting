<?php
$dbconfig = parse_ini_file(".env");

$host = $dbconfig["DB_HOST"];
$user = $dbconfig["DB_USERNAME"];
$pass = $dbconfig["DB_PASSWORD"];
$db = $dbconfig["DB_DATABASE"];

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
