<?php
/**
 * Created by PhpStorm.
 * User: phpgroup1
 * Date: 20/07/2018
 * Time: 19:50
 */

session_start();

if(!isset($_SESSION["email"])){
    header("Location: login.php");
    exit();
}

echo "welcome," . $_SESSION["email"];
echo '<a href="logout.php">Log Out</a>';

