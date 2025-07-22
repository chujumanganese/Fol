<?php 

// to verify the password 

$password_one = "";
$password_two = "";
$answer = "deactivate";

if($password_one === $password_two){
    $answer = "activate";
}else{
    $answer = "deactivate";
}