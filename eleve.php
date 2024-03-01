
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace bibliotheque </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/elevecss.css" type="text/css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:espaceetudiant.php');
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
    <div id="background">

            <div id="menu">
                <div id="logo">Student <b style="color:#7e087c ;">ZONE</b>
                </div>
                <div id="menu1">
                    <ul>
                        <a href="pageprinc.html"><li class="fa fa-home">Home</li></a>        

    
                    </ul>
                </div>   
            </div>
            <div id="slider">
                <div id="x">WELCOME TO STUDENT<b style="color: black">ZONE</b>
                </div> 
                <div id="y">
                    <div id="l">
                        <h1 style=" text-align: center; color: #8c44bd;">STUDENT</h1>
                        <div id="student">
                                USERNAME <br><input type="text" class="t"/><br>
                                PASSWORD <br><input type="text"class="t"/><br>
                                <a href="espaceetudiant.php"><input type="submit" value="login" style="border: none;width: 103%; height: 30px; background-color: #2c7ad6;"></a>
                        </div>
                    </div>
                </div> 
                <div id="z">
                    <div id="r">
                        <h1 style=" text-align: center; color: white;">register</h1>
                        <div id="Teacher">
                            Fullname <br><input type="text"class="t"/><br>
                            school email<br><input type="text"class="t"/><br>
                            PASSWORD<br><input type="text"class="t"/><br>
                            EMAIL <br><input type="text"class="t"/><br>
                        <a href=""><input type="submit" value="register" style="border: none;width: 103%; height: 30px; background-color: white;"></a>

                        </div>
                    </div>
                </div> 
            </div>

            <?php
session_start();
if(isset($_SESSION['user'])){
    header('location:espaceetudiant.php');
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
    </body>
    </html>
    