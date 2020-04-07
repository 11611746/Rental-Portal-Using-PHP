<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <style>
        p{
            text-align: center;
            margin-bottom: 5%;
            padding: 2px;
            font-family: 'poppins', sans-serif;
            color: red; 
        }
        </style>
</head>
<body>
    <img class="wave" src="img/background.png">
    <div class="container">
        <div class="img">
            <img src="img/undraw_sharing_articles_t5aa.svg">
        </div>
        <div class="login-container">
            <form action="login_process.php" method="POST">
                <img class="avatar" src="img/undraw_male_avatar_323b.png">
                <h2>Admin</h2>
                <?php
        if(isset($_REQUEST["err"])){
            $msg="Invalid username or password";
        }
        ?>
        <p>
        <?php if(isset($msg))
        {
            echo $msg;
        }
        ?>
        </p>
                <div class="input-div one focus">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="name">
                    </div>
                </div>
                <div class="input-div tow focus">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" name="pass">
                    </div>
                </div>
                <a href="home.php">Switch to user!</a>
        <input class="btn" type="submit" name="sub" value="Login">
    </form>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>