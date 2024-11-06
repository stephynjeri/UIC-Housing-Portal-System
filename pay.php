<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Management</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            color:gray;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'navbar.php' ?>
    </header>
    <main>
        <section>
            <div class="rent-box">
                <br><br>
                <?php
                    if (isset($_POST['btnRentNow'])) {
                        $image=$_POST['image'];
                        $id=$_POST['id'];
                        $apartment=$_POST['apartment'];
                        $roomno=$_POST['roomno'];
                        $type=$_POST['type'];
                        $description=$_POST['description'];
                        $location=$_POST['location'];
                        $amount=$_POST['amount'];
                        $landlord=$_POST['landlord'];
                        $phone=$_POST['phone'];
                    }
                ?>
                <form method="POST" action="pay.php">
                    <div>
                        <h4>Confirm payment !</h4>
                    </div> <br>
                    <div>
                        <small><strong>Description</strong></small><br>
                        <div><small>Confirm the number below to transact money from mpesa (terms and conditions apply)</small></div>
                    </div>
                    <br>
                    
                    <br>
                    <div>
                        <small><strong>Phone</strong></small><br>
                        <div><small><?php echo $phone ?></small></div>
                    </div>
                    <br>
                    <div>
                        <small><strong>Amount</strong></small><br>
                        <div>
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
                        </div>
                        <div><input type="text" placeholder="Enter Amount" class="inputPay" value="<?php echo $amount ?>"></div>
                    </div>
                    <br>
                    <div>
                        <button class="btnRentNow" name="btnPayNow">Pay now</button>
                    </div>
                    
                </form>
                <?php
                    if (isset($_POST['btnPayNow'])) {
                        $conn=mysqli_connect("localhost","root","","housing");
                        $image=$_POST['image'];
                        $id=$_POST['id'];
                        $apartment=$_POST['apartment'];
                        $roomno=$_POST['roomno'];
                        $type=$_POST['type'];
                        $description=$_POST['description'];
                        $location=$_POST['location'];
                        $amount=$_POST['amount'];
                        $landlord=$_POST['landlord'];
                        $phone=$_POST['phone'];
                        $user=$_SESSION['username'];

                        $sql="INSERT INTO `reports`(`id`, `landloard`, `phone`, `apartment`, `roomno`, `type`, `description`, `location`, `username`, `amount`) VALUES (null,'$landlord','$phone','$apartment','$roomno','$type','$description','$location','$user','$amount')";
                        $exec=mysqli_query($conn,$sql);

                        if ($exec) {
                            echo '
                            <div class="pop-black">
                                <div class="pop-up">
                                    <center>
                                        <div><strong>Complete !</strong></div>
                                        <div><small>Payment complete</small></div>
                                        <br>
                                        <div><a href="myrents.php"><button>Done</button></a> <button>Receipt</button></div>
                                    </center>
                                </div>
                            </div>
                            ';
                        }else{
                            echo "sql error";
                        }
                    }

                ?>
            </div>
        </section>
    </main>
</body>
</html>