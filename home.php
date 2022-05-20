
<?php

require_once("includ/header.php");
?>
    <title>Hello, world!</title>
   
  </head>
  <body>
  <body>
      <center>
    <form action="information.php" method="POST">
    <label for="id">Id number</label> <br>
<input required type="number" name="id" id="id"> <br>
    <label for="fname">First name</label> <br>
<input required type="text" name="fname" id="fname"> <br>

<label for="lname">laste name</label> <br>
<input required type="text" name="lname" id="lname"> <br>

<label for="mail">Email adress</label> <br>
<input required type="text" name="mail" id="mail"> <br>

<input type="submit" name="submit" value="ENVOYER">


    </form>
    <a href="etudiants.php"><p style="color: green;s">Clicker ici pour voir la liste des participants</p></a>
    </center>