<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                    <div>
                        <strong>Dashoard</strong>
                    </div>
                    <div>
                        <a href="addhouse.php"><button class="btnEdit">Add vacant house</button></a>
                    </div>
                </div>
                <hr>
                <section class="barMain heitScroll">
                    <ul class="hUl">
                            <div>
                            <ul class="hUl">
                            <?php 
                             $conn=mysqli_connect("localhost","root","","housing");
                             $sql="SELECT * FROM `houses` WHERE 1";
                             $exec=mysqli_query($conn,$sql);
                             $count=mysqli_num_rows($exec);

                             if ($count==0) {
                             }else{
                                while ($row=mysqli_fetch_array($exec)) {
                                    $img=$row['image'];
                                    $id=$row['id'];
                                    $apartment=$row['apartment'];
                                    $roomno=$row['roomno'];
                                    $type=$row['type'];
                                    $description=$row['description'];
                                    $location=$row['location'];
                                    $amount=$row['amount'];
                            ?>
                        <li>
                            <div class="imgCurve">
                                <img src="../handlers/uploads/<?php echo $img  ?>" alt="" class="img">
                            </div>
                            <div>
                            <div>
                                <div><strong><?php echo $apartment ?></strong></div>
                            </div>
                            <div>
                                <div><small><?php   ?></small></div>
                            </div>
                            <div>
                                <div><small><?php echo $amount ?> per month</small></div>
                            </div>
                            <div>
                                <div><small><?php echo $type ?></small></div>
                            </div>
                            <div>
                                <div><small>Location (<?php echo $location ?>)</small></div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div>
                                <form action="edithouse.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $id  ?>">
                                    <input type="hidden" name="apartment" value="<?php echo $apartment  ?>">
                                    <input type="hidden" name="roomno" value="<?php echo $roomno  ?>">
                                    <input type="hidden" name="type" value="<?php echo $type  ?>">
                                    <input type="hidden" name="location" value="<?php echo $location  ?>">
                                    <input type="hidden" name="amount" value="<?php echo $amount  ?>">
                                    <input type="hidden" name="description" value="<?php echo $description  ?>">
                                    <button class="btnEdit" name="btnEdit">Edit</button>
                                </form>
                            </div>
                            <br>
                            <div>
                                <form action="../handlers/del.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <button class="btnDelete" name="btnRemove">Remove</button>
                                </form>
                            </div>
                            </div>
                        </li>
                        <?php  }}?>
                            </div>
                        </li>
                        
                       
                    </ul>
                </section>
            </div>
        </div>
    </main>
</body>
</html>