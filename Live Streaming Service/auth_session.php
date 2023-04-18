<?php
    session_start();
    if(!isset($_SESSION["user_Name"])) {
        header("Location: account.php");
        exit();
    }
?>