<?php 
 require_once("db\connexion.php");
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