<?php
session_start();
require_once('./user_data.php');

$username=$_POST['username'];
$password=$_POST['password'];

if (isset($user_data[$username]) && $user_data[$username]['password']===$password){
    $user=$user_data[$username];
    unset($user['password']);

    $_SESSION['user']=$user;


    //  echo "<h1>Welcome back $user[name]</h1>";
    header('location: ./profile.php');
    exit();
} else {
    echo '<h1>Acess Denied</h1>';
}

?>



