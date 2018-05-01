<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

 ?>


<h3>Login success!...</h3>
<a href="signout.php">Logout</a>