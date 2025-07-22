<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered</title>
    <style>
        @font-face {
            font-family: 'poppins';
            src: url('../poppins/Poppins-Light.ttf') format('truetype');
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{font-family: "poppins", cursive;}
        .ghr{
            height: 100dvh;
            width: 100dvw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ghr .center-of-it{
            border: 1px solid black;
            min-height: 300px;
            min-width: 300px;
            display: grid;
            row-gap: 1em;
            padding: 1em;
            grid-template-rows: 20% 80%;
            border-radius: 10px;
        }
        .center-of-it .f{
            height: 50px;
            width: 50px;
            margin: .2em auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .center-of-it .allofit{
            display: grid;
            grid-template-rows: repeat(5, 1fr);
        }
        .allofit .block{
            display: grid;
            grid-template-columns: 30% 60%;
            gap: 1em;
            white-space: nowrap;
            align-items: center;
        }
        .allofit .block:not(:last-child){
            border-bottom: 1px solid black;
        }
    </style>
</head>
<?php 
    //some variables are to be decleared to enter these spaces
    $your_name = "admin";
    $your_user_name = "score";
    $your_email = "example@gmail.com";
    $your_tel = 123;
    $your_country = "USA";
?>
<body>
    <div class="ghr">
        <div class="center-of-it">
            <div class="f">
                <p>registered</p>
                <p>Successfully!</p>
            </div>
            <div class="allofit">
                <div class="block">
                    <div class="key">NAME :</div>
                    <div class="value"><?php echo "<small>". $your_name . "</small>" ?></div>
                </div>
                <div class="block">
                    <div class="key">USERNAME :</div>
                    <div class="value"><?php echo "<small>". $your_user_name ."</small>" ?></div>
                </div>
                <div class="block">
                    <div class="key">EMAIL :</div>
                    <div class="value"><?php echo "<small>". $your_email . "</small>" ?></div>
                </div>
                <div class="block">
                    <div class="key">TEL :</div>
                    <div class="value"><?php echo "<small>". $your_tel . "</small>" ?></div>
                </div>
                <div class="block">
                    <div class="key">COUNTRY :</div>
                    <div class="value"><?php echo "<small>". $your_country ."</small>" ?></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>