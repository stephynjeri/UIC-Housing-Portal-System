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
            <form action="index.php" method="POST" >
                <div><center><h1>Welcome</h1></center></div>
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
                    <small>do not have an account <a href="register.php">create account</a></small>
                </div>
            </form>
        </div>
        <?php 
        if (isset($_POST['btnLogin'])) {
            $conn=mysqli_connect("localhost","root","","housing");
            $username=$_POST['username'];
            $password=$_POST['password'];

            $sql="SELECT * FROM `users` WHERE username='$username' and password='$password'";
            $exec=mysqli_query($conn,$sql);

            $count=mysqli_num_rows($exec);

            if ($count==0) {
                echo 'wrong password';
            }else{
                $_SESSION['username']=$username;
                header('location:home.php');
            }
        }
        ?>
    </main>
</body>
</html>