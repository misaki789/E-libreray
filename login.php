<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csssignin.css">
    <title>Document</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:pageprinc.php');
    exit();
}
if(isset($_POST['submit'])){
 include 'conn.php';
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

   $errors=[];
   

   // validate email
   if(empty($email)){
    $errors[]="enter your code";
   }


   // validate password
   if(empty($password)){
        $errors[]="enter your code  ";
   }



   
   if(empty($errors)){
   
      // echo "check db";

    $stm="SELECT * FROM users WHERE email ='$email'";
    $q=$conn->prepare($stm);
    $q->execute();
    $data=$q->fetch();
    if(!$data){
       $errors[] = "   ";
    }else{
        
         $password_hash=$data['password']; 
         
         if(!password_verify($password,$password_hash)){
            $errors[] = "  ";
         }else{
            $_SESSION['user']=[
                "name"=>$data['name'],
                "email"=>$email,
              ];
            header('location:pageprinc.php');

         }
    }
     
    
   }
}

?>
    <div class="login-form-contairer">
        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="login.php" method="POST">
            <h3>Login</h3>
            <span>Username</span>
            <input type="email" name="" class="box" placeholder="enter your email" id="">
            <span>Password</span>
            <input type="password" name="" class="box" placeholder="enter your password" id="">
            <input type="submit" value="Login" class="btn"  id="message-alert">
            <p>don't havean account?<a href="inscription.php">create one</a></p>
        </form>
    </div>
    <script src="javascript/jsfiche.js"></script>
</body>
</html>



