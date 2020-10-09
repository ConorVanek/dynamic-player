<?php
// Initialize the session
session_start();
 
// If logged in, redirect to welcome page, otherwise redirect to login page.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} else {
	header("location: welcome.php");
    exit;
}
?>