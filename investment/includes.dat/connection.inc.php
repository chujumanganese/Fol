<?php

// database connections using pdo 
$dns = "mysql:host=localhost; dbname=website";
$databaseuser = "root";
$passwd = "767990";

try {
    $pdo = new PDO($dns, $databaseuser, $passwd);
    echo "<h1> connection good</h1>";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}
