<?php

$username = "";

if(isset($_POST["username"])) {
  $username = $_POST["username"];
  if(!preg_match("/^[a-zA-Z_.]{3, 15}$/", $_POST["username"])){
  echo "Incorrect username <br />";
  }
  if(isset($_POST["password"])) {
    $password = $_POST["password"];
    if(!preg_match("/^.{5, 15}$/", $_POST["password"])){
    echo "Incorrect password <br />";
  } else {
      $db = mysqli_connect("127.0.0.1", "root", null, "proiect");
      $query = "INSERT INTO users VALUES (?, ?, sha(?))";

      $statement = $db->prepare($query);
      $email = "";
      $statement->bind_param("sss", $username, $email, $password);
      $statement->execute();
      echo "Successful sign up. Go to <a href='login.php'>Login</a>.";
      exit();
    }
  }
}

?>

<form action="signup.php" method="POST">
  <label for="username">Username:</label>
  <input name="username" type="text" value="<?php echo $username; ?>"/>
  <br/>
  <label for="password">Password:</label>
  <input name="password" type="password"/>
  <br/>
  <label for="confirm">Confirm password:</label>
  <input name="confirm" type="password"/>
  <br/>
  <input type="submit" value="Sign Up"/>
</form>
