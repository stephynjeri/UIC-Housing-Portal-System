<?php session_start()  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housing</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body class="body-auth">
    <main class="auth-main">
        <div class="loginForm">
            <form action="" method="POST" >
                <div><center><h1>Welcome Admin account</h1></center></div>
                <br>
                <div>
                    <small>Username</small>
                </div>
                <div>
                    <input type="text" name="username">
                </div>
                <div>
                    <small>Password</small>
                </div>
                <div>
                    <input type="password" name="password">
                </div>
                <div>
                    <button name="btnLogin">Login</button>
                </div>
                <div>
                    <small>do not have an account <a href="">create account</a></small>
                </div>
            </form>
        </div>
        <?php 
        if (isset($_POST['btnLogin'])) {
            $conn=mysqli_connect("localhost","root","","housing");
            $username=$_POST['username'];
            $password=$_POST['password'];

            if ($username=="admin" && $password=="admin123") {
                header('location:admin.php');
            }else{
                echo 'wrong password';
            }
        }
        ?>
    </main>
</body>
</html>