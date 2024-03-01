<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/ajouter.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"  />

    <title>ajouter livre </title>
</head>
<body>
<?php
session_start();
include 'conn.php';

?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $date = $_POST['date'];
        $upload = $_FILES['upload']['title'];
        $imageTmp = $_FILES['upload']['tmp_name'];

        // Book file
        $bookName = $_FILES['book']['name'];
        $bookTmp = $_FILES['book']['tmp_name'];

        if (empty($title) || empty($author) || empty($date) || empty($upload)) {
            $error = "<div class='alert alert-danger'>" . "please enter information" . "</div>";
        } elseif (empty($imageName)) {
            $error = "<div class='alert alert-danger'>" . "please enter information" . "</div>";
        } elseif (empty($bookName)) {
            $error = "<div class='alert alert-danger'>" . "please enter information" . "</div>";
        } else {
            // Book cover
            $upload = rand(0, 1000) . "_" . $imageName;
            move_uploaded_file($imageTmp, "../uploads/bookCovers/" . $upload);
            // Book cover
            $book = rand(0, 1000) . "_" . $bookName;
            move_uploaded_file($bookTmp, "../uploads/books/" . $book);
            $query = "INSERT INTO books(bookTitle,bookAuthor,bookCat,bookCover,book,bookContent)
            VALUES('$title','$author','$date','$upload','$book',)";
            $res = mysqli_query($con, $query);
            if (isset($res)) {
                $success = "<div class='alert alert-success'>"  . "</div>";
            }
        }
    }
    ?>




<div class="login-form">
<?php
            if (isset($error)) {
                echo $error;
            } elseif (isset($success)) {
                echo $success;
            }

            ?>
        <form action="conn.php" method="POST" enctype="multipart/form-data">
            <h3>add a book</h3>
            <span>Title</span>
            <?php
            if (isset($title)){
                echo $title;
            }
            ?>
            <input type="tel" name="" class="box" placeholder="add the title of the book" id="">
            <span>author</span>
            <input type="tel" name="" class="box" placeholder="add the aythor of the book" id="">
            <span>publication date</span>
            <input type="tel" name="" class="box" placeholder="add publication date of the book" id="">
            <span>upload</span>
            <input type="file" name="" class="box"  id="">
            <input type="button" value="add new book " class="btn"  id="message-alert">
        </form>
    </div> 
    <script src="jsbib/restortPassword.js"></script> 

</body>




</html>