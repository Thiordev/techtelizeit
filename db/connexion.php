<?php 
$host='localhost';
$dbname= 'listeetu';
$user='root';
$pass='';
$charset='utf8mb4';

$dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
try{
$pdo= new PDO($dsn,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<br>";
} catch(PDOException $e) {
    throw new PDOException($e->getMessage());
}

require_once("crud.php");
$crud = new crud($pdo);
?>