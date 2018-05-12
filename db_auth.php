<?php
session_start();
require_once('./db_connect.php');
echo '<h1>If you see me good</h1>';

$username=$_POST['username'];

$query="SELECT * FROM `table 11` where name like '%Super Stay Full Coverage Foundation%' ";

$result=mysqli_query($db,$query);
print_r($query)
// if(mysqli_num_rows($result)){
//     $user=mysqli_fetch_assoc($result);
//     $_SESSION['user']=$user;
//     header('location: ./profile.php');
//     exit();
    
// } else {
//     header('location: ./?auth_error=true');
// }

?>