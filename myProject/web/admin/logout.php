<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['id']);
unset($_SESSION['isLogin']);
unset($_SESSION['msg']);
header("Location: ../index.php"); /* Redirect browser */
exit();
?>