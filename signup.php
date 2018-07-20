<?php


if(!isset($_POST["email"])) {
    echo "Please set your email <br />";
} else{
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    if($email == false) {
        echo "Incorrect email <br />";
    }
    if(!isset($_POST["password"])) {
        echo"Please set your password";
    }else {
        $password = $_POST["password"];

        if(!preg_match("/^.{5,15}$/", $_POST["password"])){
            echo "Incorrect password <br />";
        } else {
            $db = mysqli_connect("127.0.0.1", "root", null, "proiect");
            $query = "INSERT INTO users VALUES (NULL, ?, sha(?))";

            $statement = $db->prepare($query);
            $statement->bind_param("ss",  $email, $password);
            $statement->execute();
            echo "Successful sign up. Go to <a href='login.php'>Login</a>.";
            exit();
        }
    }
}
?>

<html>
<header>
    <link rel="stylesheet" href="css/signup.css">
</header>
<body>
<form class="modal-content" action="signup.php" method="POST">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password-repeat" required>



        <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>



</body>
</html>
