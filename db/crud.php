<?php
class crud{
    private $bd;
    function __construct($connexion){
        $this->bd = $connexion;
    }
    public function insert($id,$fname,$lname,$mail){
        try {
            $sql= "INSERT INTO etudiant VALUES(:id,:Nom,:prenom,:email)";
            $stmt=$this->bd->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':Nom',$fname);
            $stmt->bindparam(':prenom',$lname);
            $stmt->bindparam(':email',$mail);
            $stmt->execute();
            return true;

        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    }
   public function getliste(){
       $sql= "SELECT * FROM `etudiant`";
       $result = $this->bd->query($sql);
       return $result;
   }    
   public function getselfinformation($id){
       $sql = "select * from etudiant where id = :id";
       $stmt = $this->bd->prepare($sql);
       $stmt->bindparam(':id',$id);
       $result = $stmt->execute();
       $result = $stmt->fetch();
       return $result;
      
   } 

   public function edited($id,$fname,$lname,$mail){
       
try{
    $sql="UPDATE etudiant SET id=:id, Nom=:fname, prenom= :lname,email= :mail";
$stmt=$this->bd->prepare($sql);
$stmt->bindparam(':id',$id);
$stmt->bindparam(':Nom',$fname);
$stmt->bindparam(':prenom',$lname);
$stmt->bindparam(':mail',$mail);
$stmt->execute();
return true;
   }
   catch (PDOException $e){
       echo $e->getMessage();
       return false;
   }

}
public function delete($id){
   try{
    $sql="delete from etudiant where id= :id";
    $stmt=$this->bd->prepare($sql);
    $stmt->bindparam(':id',$id);
    $stmt->execute();
    return true;
   }
   catch (PDOException $e){
    echo $e->getMessage();
    return false;
}
}
}
?>