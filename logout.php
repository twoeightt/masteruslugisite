<?php
session_start();
unset($_SESSION['user']);
session_unset();
if (session_status() == $PHP_SESSION_ACTIVE) { session_destroy(); }
header("Location: glav.php");
?>