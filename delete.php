<?php 
include("includ/deader.php");
 include("db\connexion.php");
 include 'includ/limite.php';
if(!$_GET['id']){
    echo "error";
}
else{
    $id=$_GET['id'];
    $result=$crud->delete($id);
   if($result) {
       header("location: etudiants.php");
   }
}


?>