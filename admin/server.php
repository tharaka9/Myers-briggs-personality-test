<?php
session_start();

    $username = "";
    $email = "";
    $errors = array();
//connect to db 
$db = mysqli_connect('localhost', 'root', '', 'itpdm') or die($db);



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
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        }else{
            array_push($errors, "User name/password incorrect");
            header('location: index.php');
        }
    }
}    
//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}

?>