<?php
session_start();
if (!isset($_SESSION['islogin']) || $_SESSION['islogin'] === false) {
	header("location: login.php");
	exit();
}
?>