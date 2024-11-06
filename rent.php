<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <?php  
                if (isset($_POST['btnRent'])) {
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
                }
                
                
                ?>
                <div class="rent-imgDiv">
                    <img src="../handlers/uploads/<?php echo $image  ?>" class="img" alt="">
                </div>
                <form action="pay.php" method="POST">
                    <div>
                        <h4><?php echo $type ?> ( Ksh. <?php echo $amount ?>)</h4>
                    </div> <br>
                    <div>
                        <small><strong>Description</strong></small><br>
                        <div><small><?php echo $description ?></small></div>
                    </div>
                    <br>
                    <div>
                        <small><strong>Location</strong></small><br>
                        <div><small><?php echo $location ?></small></div>
                    </div>
                    <br>
                    <div>
                        <small><strong>Landlod</strong></small><br>
                        <div><small><?php echo $landlord ?></small></div>
                    </div>
                    <br>
                    <div>
                        <small><strong>PHone</strong></small><br>
                        <div><small><?php echo $phone ?></small></div>
                    </div>
                    <br>
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
                    <div>
                        <a href="pay.php"><button class="btnRentNow" name="btnRentNow">Rent now</button></a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>