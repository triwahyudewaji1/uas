<?php
session_start();
unset($_SESSEION['islogin']);
session_destroy();
header("location: artikel.php");
?>