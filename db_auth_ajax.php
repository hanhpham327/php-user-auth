<?php
session_start();
require_once('./db_connect.php');

$username=$_POST['username'];

$query="SELECT * FROM `product_adding` where product_name like '$username' ";
//SELECT * FROM `ingredients_rating` where `Ingredient`like '%username%'
//produce an array
//feed 1 by 1 through a loop to query -> a result with everything
//array your going to make is going to start with a number 
//[1,bucnh of shit]
//when inserted array[0], loop through bunch of shit
//create insert function dynamically 
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
