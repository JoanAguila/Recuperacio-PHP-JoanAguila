<?php 

    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: http://localhost/portafoli-personal-php/auth/login.php");
    }
?>