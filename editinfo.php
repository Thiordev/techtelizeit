<?php 
include('includ/header.php');
include("db\connexion.php");
include 'includ/limite.php';
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $mail=$_POST["mail"];
$result=$crud->edited($id,$fname,$lname,$mail);
if($result){
header('location:home.php');
}
else {
    echo 'erreur1';
}
}
else echo 'erreur';
?>