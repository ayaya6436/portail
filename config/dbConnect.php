<?php
session_start();
$host = 'localhost';
$dbname = 'portail';
$user = 'root';
$password = 'Root@12345';

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo "Connexion echoue: " . $e->getMessage();
}
?>