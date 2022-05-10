<?php
 
require_once("connexion.php");




if(isset($_GET['id'])){
$id=$_GET['id'];
$result=$crud->getselfinformation($id);
}
else {
    echo 'please try';
}
?>

<?php echo "PRENON: ". $result["prenom"]."<br>"; ?>
<?php echo "NON: ". $result["Nom"]."<br>"; ?>
<?php echo "Adresse mail: ". $result["email"]."<br>"; ?>
<a href="essaie.php">essaie</a>