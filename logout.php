<?php

ob_start();
if (!isset($_SESSION))
    session_start();
unset($_SESSION['user_id']);
session_destroy();
header("location:library/user.php");