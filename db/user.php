<?php
class userthior{
    private $bd;
    function __construct($connexion){
        $this->bd = $connexion;
    }
    public function insertuser($username,$passwrd){
       try {
        $result = $this->getuserbyuser($username);
        if($result['num']>0){
            return false;

        }
        else{
            $new_password = md5($passwrd.$username);
         
           $sql= "INSERT INTO users(username,passwrd) VALUES(:username,:passwrd)";
           $stmt= $this->bd->prepare($sql);
           $stmt->bindparam(':username',$username);
           $stmt->bindparam(':passwrd',$new_password);
           $stmt->execute();
           return true;}
       } catch (PDOException $e) {

        echo $e->getMessage();
        return false;
       }

    }
    public function getuser($username,$passwrd){
        try {
          
           $sql= "select * from users where username = :username AND passwrd =:passwrd"; 
           $stmt=$this->bd->prepare($sql);
           $stmt->bindparam(':username',$username);
           $stmt->bindparam(':passwrd',$passwrd);
           $result=$stmt->execute();
           $result=$stmt->FETCH();
           return $result;

        }  catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }

    }
    public function getuserbyuser($username){
        
        try {
            $sql="select count(*) as num from users where username=:username";
        $stmt=$this->bd->prepare($sql);
        $stmt->bindparam(':username',$username);
        $result=$stmt->execute();
        $result=$stmt->FETCH();
        return $result;
           
        }  catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }


    }
}

?>