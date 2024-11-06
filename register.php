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
            <form action="register.php" method="POST">
                <div><center><h1>Welcome</h1></center></div>
                <br><hr>
                <br>
                <div class="flexReg">
                    <div>
                        <div>
                            <small>Full Names</small>
                        </div>
                        <div>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <small>Phone</small>
                        </div>
                        <div>
                            <input type="text" name="phone">
                        </div>
                        <div>
                            <small>Email</small>
                        </div>
                        <div >
                            <input type="text" name="email">
                        </div>
                        <div class="flexcheck">
                            <input type="checkbox" value="" name="tenantCheck" id="tenantCheck"> <small>Are you landlord</small>
                        </div>
                        <script>
                            const check=document.getElementById('tenantCheck')
                            if (check.checked) {
                                check.value="yes";
                                console.log(check.value);
                                
                            }else{
                                check.value="no";
                                console.log(check.value);
                            }
                        </script>
                    </div>
                    <div>
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
                            <button name="btnCreate">Create account</button>
                        </div>
                        <center><small>or</small></center>
                        <br>
                        <div>
                            <small>you have an account <a href="index.php">Login</a></small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
            if (isset($_POST['btnCreate'])) {
                $conn=mysqli_connect("localhost","root","","housing");
                $name=$_POST['name'];
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $sql="INSERT INTO `users`(`id`, `name`, `phone`, `username`, `password`) VALUES (null,'$name','$phone','$username','$password')";
                $exec=mysqli_query($conn,$sql);

                if ($exec) {
                    header('loaction:index.php');
                }else{
                    echo 'sql error';
                }
            }
        ?>
    </main>
</body>
</html>