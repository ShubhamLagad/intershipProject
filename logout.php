<?php
session_start();
unset($_SESSION['userId']);
unset($_SESSION['password']);
session_destroy();
header("location:index.html");
?>