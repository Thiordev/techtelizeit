<?php
include("includ\header.php");
include 'includ/limite.php';
include 'sendmail.php';
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $mail=$_POST["mail"];
    $good = $crud->insert($id,$fname,$lname,$mail);
}
if($good){
sendEmail::sendmail($email, 'Hello Welcome to Techtelize 2022','you have successfully registred in Techlize community');
   

}
else{
    echo "<br>.there is something wrong.<br>";
}
echo "PRENON: ". $_POST["fname"]."<br>";
echo "NON: ". $_POST["lname"]."<br>";
echo "Adresse Mail: ". $_POST["mail"]."<br>";
?>
<a href="etudiants.php">VOIR LA LISTES DES PARTICIPANTS</a>