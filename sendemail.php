<?php
require 'vendor/autoload.php';
class sendEmail{
    public static function sendmail($to,$subject,$content){
        $key= "";
        $email = new \sendGrid\Mail\Mail();
        $email->setfrom('cheikhouidy@gmail.com, El hadji sekou thior');
        $email->setsubject($subject);
        $email->addto($to);
        $email->addcontent("texte\html",$content);
         $sendgrid= new \sendgrid($key);

         try{
             $response = $sendgrid->send($email);
             $response = true;

         }catch(Exception $e){
             echo 'the problem est: '. $e->getMessage()."\n";
             return false;

         }

        }
}
?>