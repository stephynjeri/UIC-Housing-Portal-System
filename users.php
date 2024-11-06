<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div>
                <strong>Admin panel</strong>
            </div>
            <div>
            <small><a href="index.php">Logout</a></small>
            </div>
        </nav>
    </header>
    <main class="admin-main">
        <div class="side-nav">
            <div>
                <ul class="sideUL">
                    <li><a href="admin.php">Dashboard</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="landlods.php">Landlord</a></li>
                </ul>
            </div>
        </div>
        <div class="admin-main-content">
        <div>
                <div class="top-bar">
                    <small><strong>Users</strong></small>
                </div>
                <hr>
                <section class="barMain">
                   <section class="sec-center">
                        <div class="widdd">
                        <?php 
                         $conn=mysqli_connect("localhost","root","","housing");
                         $sql="SELECT * FROM `users` WHERE 1";
                         $exec=mysqli_query($conn,$sql);
                         $count=mysqli_num_rows($exec);

                         if ($count==0) {
                         }else{
                            while ($row=mysqli_fetch_array($exec)) {
                                $name=$row['name'];
                                $usename=$row['username'];
                                $phone=$row['phone'];
                                $id=$row['id'];
                        ?>
                        
                        <div class="card-user">
                            <div>
                                <div><small><strong><?php echo $name ?></strong></small></div>
                                <div><small><?php echo $usename ?></small></div>
                                <div><small><?php echo $phone ?></small></div>
                            </div>
                            <div>
                                <form action="../handlers/del.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <button name="btnRemUser">Remove User</button>
                                </form>
                            </div>
                        </div>
                        <?php }}?>
                        </div>
                   </section>
                </section>
            </div>
        </div>
    </main>
</body>
</html>