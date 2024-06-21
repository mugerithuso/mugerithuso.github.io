<?php

$dsn = "mysql:host=localhost; dbname=myfirstdb";
$dbusername = "mugeri";
$dbpassword = "mugeri250";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
    echo "Connection fail: " . $e->getMessage();
}