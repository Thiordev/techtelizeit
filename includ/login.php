<?php
 include("session.php");
 include("../db/connexion.php");
 if($_SERVER['REQUEST_METHOD']=='POST'){
     $username = strtolower(trim($_POST['username']));
     $passwrd = $_POST['passwrd'];
     $new_password = md5($passwrd.$username);
     $result = $userthior->getuser($username, $new_password);
     if(!$result){
         echo "erreur merci de verifier les information saisies";
     }else{
         $_SESSION['username']=$username;
         $_SESSION['id'] = $result['id'];
         header('location: ../etudiants.php');
     }
 }


?>
<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF'] )?>"method="post"> <br>
<table>
    <tr>
        <td><label for="mail"></label></td>
        <td><input type="texte" name="username" id="mail" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username'];?>" placeholder="EMAIL ADRESS"></td>
        <?php if(empty($username) && $_SERVER['REQUEST_METHOD']== "POST")echo $username_error;?>
    </tr>
    
    
        <td><label for="passwrd"></label></td>
        <td><input type="password" name="passwrd" id="passwrd" placeholder="PASS WORD"></td>
        <?php if(empty ($passwrd) && isset($passwrd_error))echo $passwrd_error;?>
    </tr>
    </table>
    <tr>
       
        <td><input type="submit" name=submit id="submit" value="SE CONNECTER"></td>
    </tr><br>
    <a href="">forgot password</a>


</form>
</center>