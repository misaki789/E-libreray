<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/user1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"  />

    <title>bibliothèque </title>
</head>

<body>
    
    <div class="wrapper">
			<div class="center">
			<h1>Welcome to Library</h1>
			<div class="buttons">
            <?php 
        if(isset($_SESSION['user'])){
            ?>
            
            <a href="pageprinc.php">profile</a><br><br><br>
            <?php
        }else{
            ?>
            <a href=login.php><button>Login</button></a>
            <a href="inscription.php"><button class="btn2">Register</button></a>
            <?php
        }
    ?>
		</div>
		</div>
    
</body>
</html>
