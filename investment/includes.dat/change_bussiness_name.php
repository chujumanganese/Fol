<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 1px solid black;
            max-width: 300px;
            margin-inline:auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form .block{
            display: grid;
            grid-template-columns: 1fr;
            margin-block: 1em 0.5em;
            gap: .5em;
        }
        input:active, input:focus{
            border: 0;
            outline: none;
            border-bottom: 1px solid green;
        }
        .ahis, .block{
            width: 80%; 
        }
        .ahis{
             margin-block: 1em 1.5em;
        }
    </style>
</head>
<body>
    <form action="../includes.dat/change_bussiness_name.php" method="POST">
        <div class="block">
            <label for="">New name</label>
            <input type="text" placeholder="New bussiness name" name="sitesname" id="qed456">
        </div>
        <div class="block">
            <label for="">Confirm</label>
            <input type="text" placeholder="Confirm bussiness name" name="sitesname2" id="q45ed456">
        </div>
        <button class="ahis" type="submit">Update name</button>
    </form>
</body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "767990";
    $dbname = "website";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
<?php
    if(isset($_POST["sitesname"]) && $_POST["sitesname"] != ""){
        if($_POST["sitesname"] === $_POST["sitesname2"]){
            $e = htmlspecialchars($_POST["sitesname2"]);
            $query = "INSERT INTO admins (site_name) VALUES ('$e')";

            $result = mysqli_query($conn, $query);
            if($result){
                header("Location: ../documents-file/admin.page.php?s=successful");
            }else{
                echo "query not inserted";
            }
        }else{
            echo "invalid names";
        } 
    } 
?>
</html>