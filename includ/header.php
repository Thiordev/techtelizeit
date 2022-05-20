<?php 
include("includ/session.php");
include("db/connexion.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">






 <center> <?php echo "<h1>TECHTELIZE</h1>" ?><br>
<?php

 if(!isset($_SESSION['username'])){?> <br>
 <a href="includ/login.php"><b> SE CONNECTER</b></a>
 <?php }
 else{ ?>
<span > Hello <?php echo $_SESSION['username'] ?>  welcome to Techtelize</span><br>
<a href="includ/logout.php">SE DECONNECTER</a>
<?php } ?>

</center>