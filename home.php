<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<header>
        <?php include 'navbar.php' ?>
    </header>
    <main>
        <section class="main-section">
            <div>
                <div class="sideView">
                    <div>PLaces</div>
                    <br>
                    <ul>
                    <?php
                        $conn=mysqli_connect("localhost","root","","housing");
                        
                        $sql="SELECT DISTINCT location FROM `houses` WHERE 1";
                        $exec=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($exec);

                        if ($count==0) {
                        }else{
                            while ($row=mysqli_fetch_array($exec)) {
                                $location=$row['location'];
                        ?>
                        <li>
                            <form action="places.php" method="post">
                                <input type="hidden" name="place" value="<?php echo $location ?>">
                                <button name="btnPlace"><?php echo $location ?></button>
                            </form>
                        </li>
                        <?php }}?>
                    </ul>
                </div>
            </div>
            <div class="container-main">
               
                <div class="section-container">
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
                           $landlord=$row['landlordname'];
                           $phone=$row['phone'];

                   ?>
                    <form class="card-item" method="POST" action="rent.php">
                        <div class="imgDiv">
                            <img src="../handlers/uploads/<?php echo $img  ?>" class="img" alt="">
                        </div>
                        <div class="descDiv">
                           <center>
                            <input type="hidden" value="<?php echo $id  ?>" name="id">
                            <input type="hidden" value="<?php echo $apartment  ?>" name="apartment">
                            <input type="hidden" value="<?php echo $roomno  ?>" name="roomno">
                            <input type="hidden" value="<?php echo $type  ?>" name="type">
                            <input type="hidden" value="<?php echo $description  ?>" name="description">
                            <input type="hidden" value="<?php echo $location  ?>" name="location">
                            <input type="hidden" value="<?php echo $amount  ?>" name="amount">
                            <input type="hidden" value="<?php echo $phone  ?>" name="phone">
                            <input type="hidden" value="<?php echo $landlord  ?>" name="landlord">
                            <input type="hidden" value="<?php echo $img  ?>" name="image">
                           <small><?php echo $apartment ?> (<?php echo $type ?>) <?php echo $location  ?></small> <br>
                           <div><button name="btnRent" class="btnRent">View</button></div>
                           </center>
                        </div>
                       </form>
                   <?php }} ?>
                   
                </div>
            </div>
        </section>
    </main>
    <!-- write a programm that prints odd numbers between 0 and 20 -->
</body>
