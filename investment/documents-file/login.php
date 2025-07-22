<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../cs_file/css-reset.css">
    <link rel="stylesheet" href="../cs_file/log.css">
    <style>
        .container a{
            position: absolute;
            left: 30px;
            top: 20px;
            font-size: 2rem;
            text-decoration: none;
            border: 1px solid black;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container" id="see">
        <a href="../index.html">👈🏽</a>
        <h2><span>L</span>o<span>g</span>i<span>n</span></h2>
        <div id="message"></div>

        <form action="<?php $_SERVER["PHP_SELF"] ?></form>" method="POST">
            <div class="inputs">
                <fieldset>
                    <legend>Email</legend>
                    <input type="Email" placeholder="example@gmail.com" id="q" title="Enter email" name="emails_f">
                </fieldset>
                <fieldset>
                    <legend>Password</legend>
                    <input type="text" id="q" title="Enter password" name="password_f">
                </fieldset>
            </div>  
            <button onclick="popup()" type="submit">Login</button>
        </form>
    </div>
    <?php
        $emails_f = "example@gmail.com";
        $password_f = "example@gmail.com";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $emails_f = $_POST["emails_f"];
            $password_f = $_POST["password_f"];
        
            require_once "connect.notpdo.php";
        
        //    $opt = ["cost"];
        //    $password = password_hash($password_f, PASSWORD_BCRYPT, $opt);

           $query = "SELECT (email, passwd) WHERE email=$emails_f and passwd=$password_f";
        
           // the email and password are meant to be unique enforce this law
           $result = $conn->query($query);

            if ($result->num_rows > 0) {
                echo "Logged into system";
            } else {
                echo "not a user";
            }
            $conn->close();
        }
    ?>
    <script>
        
        let message = document.getElementById("message");
        const printer = "Register to attend the event  ";

            let i = 0 ;
            function red(){
                setTimeout(()=> {
                message.innerHTML += printer[i] ; 
                i++;
                    if( i != printer.length){
                        red();
                    }else {
                        dor();
                        i = 0 ;
                        red();
                    }
            }
            , 100)
            }
            
            red();

        function dor(){
            if(message.value != " "){
            message.innerHTML = " ";
            }
         }

         // to get the data elements 
        
         const datas = document.getElementById("q");
        function popup(){
            console.log(...datas.value[0]);
        }

    </script>
</body>
</html>