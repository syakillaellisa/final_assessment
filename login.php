<?php
session_start();
include "db.php";

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


}
    
if($username == "" || $password == "") {
        $error = "Please fill in all fields.";
       } else {
            $sql = $conn ->prepare("SELECT * FROM users WHERE  name = '$username'");
            $sql -> execute();

            $user = $sql -> get_result() -> fetch_assoc();

            if($user && password_verify($password, $user['password'])) {
                $_SESSION["id"] = $user['id'];
                $_SESSION["username"] = $user['name'];
                header("Location: index.php");
                exit;
            } else {
                $error = "Invalid username or password.";
}
}



    ?>


<h2>STUDENT GRADING</h2>

<h3>LOGIN</h3>

<form method="post">
    <label for="">Username:</label>
    <input type="text" name="username" placeholder="Username Not Email"><br></br>
    <label for=""> Password:</label>
    <input style="width: 200px;" type="password" name="password"><br></br>
    <button type="submit" name="login">Login</button>

</form>
