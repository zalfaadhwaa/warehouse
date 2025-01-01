<?php
//session_start();

if(!isset($_SESSION['loggedIn'])) {
    return header("location:../projek/register.php");
}
?>
