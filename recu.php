<?php
session_start();
$bdd =new PDO('mysql:host=localhost;dbname=exos2','root','');


extract($_POST);



if( isset($email) && !empty($email)){
    

        $reqemail = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $reqemail->execute(array($email));
         $emailexist = $reqemail->rowCount();
        if($emailexist == 1){
            $emailinfo = $reqemail->fetch();
            $_SESSION['id'] =$emailinfo['id'];
            $_SESSION['email'] = $emailinfo['email'];
           echo"connectez!!!"; 
            

                }else{
                echo"<div class='alert alert-danger'>Ce mail pas inscit</div>";
                }
}else{
                echo"<div class='alert alert-danger'>Le champs mail obligatoire</div>";
                }



 

?>