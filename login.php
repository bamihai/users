<?php
require_once "include/db.php";
session_start();
error_reporting(E_ALL);
ini_set("display_errors", true);
if (isset($_SESSION["email"])) {
  echo "You are logged in with " . $_SESSION["email"] . "<br />";
  echo "To logout click <a href='logout.php'>here</a>";
  exit();
}

if (!isset($_POST["email"]) || !isset($_POST["password"])) {
  echo "Please enter both email and password";
} else {

  $query = "SELECT email from users where email = ? and password = SHA(?)";
  $statement = $db->prepare($query);

  $statement->bind_param("ss", $_POST["email"], $_POST["password"]);
  $statement->execute();
  $result = $statement->fetchAll();

  if (count($result) == 1) {
      $row = $result[0];
      $email = $row['email'];

      $_SESSION["email"] = $email;

      // echo "You are now logged in with " . $row['email'];
      header("Location: index.php");   //CAND NE LOGAM NE VA DUCE DIRECT CATRE PAGINA INDICATA IN LOCATION
      exit();
  } else {
     echo "Incorrect user or password";
  }
}
?>




<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<h2>Login</h2>


    <form action="login.php" method="post">


        <div class="container">
            <label for="email"><b>email</b></label>
            <input type="text" placeholder="Enter email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>

        </div>
    </form>

</body>
</html>
