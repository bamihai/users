<?php
/**
 * Created by PhpStorm.
 * User: phpgroup1
 * Date: 20/07/2018
 * Time: 19:50
 */

require_once "include/db.php";
session_start();

//if(!isset($_SESSION["email"])){
//    header("Location: login.php");
//    exit();
//}

echo "welcome," . $_SESSION["email"];
echo '<a href="logout.php">Log Out</a>';


$sql = "SELECT * FROM products";
$statement = $db->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();



foreach ($result as $product) {
    echo $product['name_prod'] . "<br/>";
    echo $product['price'] . "LEi" . "<br/>";
}
?>


