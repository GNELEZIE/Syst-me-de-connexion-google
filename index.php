<?php
session_start();
$bdd =new PDO('mysql:host=localhost;dbname=exos2','root','');

  

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    
    
    
<title>EXOS2</title>
</head>
<body>
<center>   
<form id="form">
    <div class="form">
   <h1>CONNEXION</h1>
    <div class="error" style="color:red"></div>
       
<label for="email">Email:</label>    
<input type="email" id="email" name="email" class="form-control"><br>
        
<label for="password"></label>    
<input style="display:none" type="password" class="password" id="password" name="password"   placeholder="password" class="form-control"><br><br>
        
 <input  class="btn btn-success"type="submit" value="S'INSCRIRE" id="sub">
        <div class="ien"></div>
    <div id="loader" style="display:none"><img  src="ajax-loader.gif"> </div>
    </div>
</form>

    
</center> 
    <script type="text/javascript">
  $(function(){
      $("#form").submit(function(){
          $("#loader").show();
           $(".password").hide();
//        
         
         
         email=$(this).find('input[name=email]').val();
         Password=$(this).find('input[name=Password]').val();
          $.post("recu.php",{email: email},function(data){
                $("#password").show();
              $("#loader").hide();
              
              
//              alert(data);
              if(data!="connectez"){
                  
                  $(".error").empty().append(data);
                 
              }else{
            
           $("#password").empty().append(data);
            
                  
              }
              
              
              
          })
         return false;
          
      });
  }); 
 
</script> 
    
    <style>
    
        .form{
            background-color:chocolate;
            padding-top: 10px;
             height: 500px;
                width:500px;
            
            margin-left:200px;
            margin-top: 32px;
            border-radius: 15px;
            
        }
        
        label{
            color:#fff;
            font-size: 25px;
        }
        
        .form-control{
            width: 50%;
        }
        
        
    
    </style>
    

</body>
</html>