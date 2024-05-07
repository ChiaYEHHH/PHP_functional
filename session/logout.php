<?php
session_start();
unset($_SESSION['id_login'],$_SESSION['error']);

header("location:login_session.php");

?>