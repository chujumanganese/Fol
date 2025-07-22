<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name_now = htmlspecialchars($_POST["normalname"]);
    $username = htmlspecialchars($_POST["usernames"]);
    $email = htmlspecialchars($_POST["emailsd"]);
    $country = htmlspecialchars($_POST["countris"]);
    $phone = filter_input(INPUT_POST, $_POST["numberss"]);
    $password = htmlspecialchars($_POST["pastword"]);
    $referal = htmlspecialchars($_POST["referals"]);
    $country = "LOOOOO";

   // form submitting properly.
   // import database.
   try {
        require_once "connection.inc.php";
   } catch (PDOException $t) {
        die("Query failed: ". $t->getMessage());
   }

   $password = "eggggg";
   // hash the password
   $opt = ["cost"];
   $password = password_hash($password, PASSWORD_BCRYPT, $opt);
   // hash is good.

   $query = "INSERT INTO user_info (name_now, username, email, phone, country, ref_link, passwd) values ('$name_now', '$username', '$email', '$country', '$phone', '$password', '$referal')";

   $query_check = "SELECT (email, passwd) WHERE email=$email and passd=$password";
   // we are going to check whether the password and the email are the same in the database. 

//    if(true){
//         $pdo->exec($query);
//         if($pdo){
//             header("Location: ../documents-file/register.php?done=23445actu666vacd66");
//        }
//    }

}else{
    header(Location: "");
}