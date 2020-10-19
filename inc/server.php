<?php
session_start();

    $username = "";
    $email = "";
    $errors = array();
//connect to db 
$db = mysqli_connect('localhost', 'root', '', 'itpdm') or die($db);

//if the registation btn  clicked
if (isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $c_password = mysqli_real_escape_string($db, $_POST['c_password']);

    //validation

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Username is required");
    }
    if ($password != $c_password) {
        array_push($errors, "Password Not match");
    }

//if there are no error
    if (count($errors) == 0) {
        $password  = md5($password); //encypt
        $sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";

        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: ./check.php');
    }

}

//login
if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //validation

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: mbti.php');
        }else{
            array_push($errors, "User name/password incorrect");
            header('location: ./check.php');
        }
    }
}    
//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:check.php');
}

?>