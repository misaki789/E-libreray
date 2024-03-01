<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/cssinscription.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
      $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
      $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
      $phone=filter_var($_POST['phone'],FILTER_SANITIZE_PHONE);
   
      $errors=[];
      if(empty($name)){
          $errors[]="you should write your name";
      }elseif(strlen($name)>100){
          $errors[]="muximum 100";
      }
   
      if(empty($email)){
       $errors[]="you should write your email";
      }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
       $errors[]="is not correct";
      }
   
      $stm="SELECT email FROM users WHERE email ='$email'";
      $q=$conn->prepare($stm);
      $q->execute();
      $data=$q->fetch();
   
      if($data){
        $errors[]="excist";
      }
   
   
      // validate password
      if(empty($password)){
           $errors[]="you should write password";
      }elseif(strlen($password)<6){
       $errors[]="muximum 6 ";
   }
   
   
   
      if(empty($errors)){
         $password=password_hash($password,PASSWORD_DEFAULT);
         $stm="INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
         $conn->prepare($stm)->execute();
         $_POST['name']='';
         $_POST['email']='';
   
         $_SESSION['user']=[
           "name"=>$name,
           "email"=>$email,
         ];
         header('location:pageprinc.php');
      }
   }
   ?>
    <div class="wrapper">
        <div class="title">
          Register
        </div>
        
        <form action="conn.php" method="POST">
         <?php
             if(isset($errors)){
               if(!empty($errors)){
                  foreach($errors as $msg){
                     echo $msg . "<br>";
                  }
               }
             }
         
        ?>
        <div class="form">
           <div class="inputfield">
              <label>Username</label>
              <input type="text" placeholder="enter your username" class="input">
           </div>
           <div class="inputfield">
              <label>Password</label>
              <input type="password" placeholder="enter your password" class="input">
           </div>  
          <div class="inputfield">
              <label>Confirm password </label>
              <input type="password" placeholder="confirm your password" class="input">
           </div> 
            <div class="inputfield">
              <label>Email</label>
              <input type="text"  placeholder="enter your email" class="input">
           </div> 
           <div class="inputfield">
              <label>confirm Email</label>
              <input type="text"  placeholder="confirm your email" class="input">
           </div> 
          <div class="inputfield">
              <label>Phone Number</label>
              <input type="text" placeholder="enter your phone number" class="input">
           </div>
           </form> 
          <div class="inputfield">
            <input type="submit" value="register" class="btn">
          </div>
        </div>
    </div>

</body>
</html>