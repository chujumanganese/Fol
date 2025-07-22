<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .names{
            margin-bottom: 1em;
        }
        input[type="submit"]{
            background: black;
            color: white;
            margin-top: 1em;
            padding: 0.5em;
        }
    </style>
</head>
<body>
    <form action="includes.php" method="POST">
        <div class="names">
            <label for="">Name</label>
            <input type="text" name="username" placeholder="Enter name">
        </div>
        <div class="phone">
            <label for="">Phone number</label>
            <input type="text" placeholder="Phone number" name="number">
        </div>
        <select name="fruit" id="">
            <option value="apple">Apple</option>
            <option value="pineapple">pineapple</option>
            <option value="strawberry">strawberry</option>
            <option value="Udara">Udara</option>
        </select>
        <input type="submit" value="Submit to the server">
    </form>
</body>
</html>