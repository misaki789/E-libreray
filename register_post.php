<?php
include('conn.php');
if(isset($_POST['submit'])){
    $username = stripcslashes($_POST['username']);
    $password = stripcslashes($_POST['password']);
    $email = stripcslashes($_POST['email']);
    $phone = stripslashes($_POST['phone']);

    $username = htmlentities(mysli_real_escape_string($conn,$_POST['username']));
    $password = htmlentities(mysli_real_escape_string($conn,$_POST['password']));
    $md5_pass = md5($password);
    $email = htmlentities(mysli_real_escape_string($conn,$_POST['email']));
    $phone = htmlentities(mysli_real_escape_string($conn,$_POST['phone']));
    $md5_pass = md5($password);
 $check_user = "SELECT * FROM"
  if(empty($username)){
    $user_error = 'please enter username <br>';
    $err_s = 1 ; 
  }elseif(strlen($username) < 6 ){
    $user_error = 'your username needs to have a minimum of 6 letters <br>'
 }else{
    if($err_s == 0){
        $sql = "INSERT INTO users(username,password,email,phone,md5_pass)"
         VALUES ('$username','$password','email','phone','md5_pass');
         mysqli_query($conn,$sql);
         header('location:login.php');
    }else{
        include('inscription.php')
    }
} 

}






?>