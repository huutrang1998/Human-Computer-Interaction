<?php
include 'config.php';
    unset($_SESSION['name']);
    header("location:login.php");
?>