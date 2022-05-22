
<?php
include("includ/header.php");
 include("db\connexion.php");


if(!isset($_GET['id'])){
    echo "erreur";
$result=$crud->getliste();

 
}
else{
    $id= $_GET['id'];
    $etudiant=$crud->getliste($id);

?>
    <title>Edit information</title>
  </head>
  <body>
  <form action="editinfo.php" method="post">

<label for="id">Id number</label> <br>
<input type= "number" value= ""id="id" name="id"> <br>

<label for="fname">First name</label> <br>
<input type="text" name="fname"  id="fname"> <br>

<label for="lname">laste name</label> <br>
<input type="text" name="lname" id="lname" > <br>

<label for="mail">Email adress</label> <br>
<input type="text" name="mail" id="mail" > <br>

<input type="submit" name="submit" value="METTRE A JOUR" classe= "btn btn-primary">

<?php } ?> 
</form>

  <body>
   