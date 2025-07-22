
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Ferox</title>
    <link rel="stylesheet" href="../cs_file/reg.css">
    <style>
       .error-messages{
            height: 20px;
            width: 100%;
            /* border: 1px solid black; */
            padding-inline: 0 1em;
            color: red;
       }
       select option{
            height: auto;
       }
    </style>
</head>
<?php $answer = "deactivate"; ?>
<body>
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li>Menu</li>
            <li>Investment</li>
        </ul>
    </nav>
    <div class="container-class">
        <div class="inner-container">
            <h1 class="only-me">FEROK</h1>
            <div class="centered">
                <h1>Create Account</h1>
                <p>Register an account to gain access</p>
            </div>

            <form action="../includes.dat/process.registration.page.php" method="POST">
                <div class="names-op">
                    <label for="nsam">Name:</label>
                    <input type="text" placeholder="Enter name" name="normalname" id="nsam">
                    <div class="error-messages" id="i_name"></div>
                </div>
                <div class="names-op">
                    <label for="">Username:</label>
                    <input type="text" placeholder="Enter username" name="usernames">
                    <div class="error-messages" id="user-name"></div>
                </div>
                <div class="names-op">
                    <label for="">Email:</label>
                    <input type="email" placeholder="example@gmail.com" name="emailsd">
                    <div class="error-messages" id="email_name"></div>
                </div>
                <div class="names-op">
                    <label for="">Phone:</label>
                    <input type="munber" placeholder="Phone number" name="numberss">
                    <div class="error-messages" id="phone_name"></div>
                </div>
                <div class="names-op">
                    <label for="">Country</label>
                    <select name="" onclick="q()" id="selectfromme">
                        <option value="" selected disabled>Select a country</option>
                    </select>
                    <div class="error-messages" id="phone_name"></div>
                </div>
                <div class="names-op">
                    <label for="">Ref (Optional):</label>
                    <input type="text" placeholder="Enter your referral link (Optional)" name="referals">
                </div>
                <div class="names-op">
                    <label for="">Password:</label>
                    <input type="password" placeholder="Enter your password">
                    <div class="error-messages" id="passwd"></div>
                </div>
                <div class="names-op">
                    <label for="">Confirm Password:</label>
                    <input type="text" placeholder="Confirm Password" name="pastword">
                    <div class="error-messages" id="c_passwd"></div>
                </div>
                <div class="names-op checker">
                    <input type="checkbox">
                    <span>I accept the terms and conditions.</label>
                </div>
                <div class="error-messages" id="check"></div>
                <div class="names-op">
                    <?php if($answer == "activate"){ ?>
                        <input type="submit">
                    <?php } ?>
                    <input type="submit">
                </div>
                <div class="gat">
                    <span>Already have an account?</span>
                    <span>Login Here</span>
                </div>
            </form>
        </div>
    </div>
    <script src="../java/ajax.js"></script>
</body>
</html>
