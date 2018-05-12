<?php
session_start();
require_once('./db_connect.php');

$username=$_POST['username'];

$query="SELECT * FROM `table 11` where name like '$username' ";

$result=mysqli_query($db,$query);
$output=[];
$output['success']=false;

if(mysqli_num_rows($result)){
    $user=mysqli_fetch_assoc($result);
    $_SESSION['user']=$user;
    $output['success']=true;
    $output['message']='User validated'; 
    $output['query']=$query; 
    $output['user']=$user; 

    
} else {
    
    $output['error']='Can\'t find product';
}

print(json_encode($output));

?>