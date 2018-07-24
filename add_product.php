<?php
/**
 * Created by PhpStorm.
 * User: phpgroup1
 * Date: 24/07/2018
 * Time: 19:26
 */

require_once 'include/db.php';

if(isset($_POST['nume_produs']) && isset($_POST['pret_produs'])) {
    $sql = "INSERT INTO `products` VALUES
  (NULL, :nume_prod, '', '', :pret_prod, '', '39')";
    $statement = $db->prepare($sql);
    $statement->bindParam(":nume_prod", $_POST['nume_produs'] , PDO::PARAM_STR);
    $statement->bindParam(":pret_prod", $_POST['pret_produs'] , PDO::PARAM_STR);
    $statement->execute();
    echo "Produsul a fost creat. <a href='add_product.php'>Creatati un nou produs.</a>";
    exit();
}

?>

<form action="add_product.php" method="post">
    <input type="text" name="nume_produs" placeholder="Nume Produs"> <br> <br>
    <input type="text" name="pret_produs" placeholder="Pret"> <br> <br>
    <input type="submit" name="add" value="Add">
</form>
