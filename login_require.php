<?php
include "config.php";
if ((isset($_SESSION['name']) == false)) {
    header("location:login.php");
}
?>