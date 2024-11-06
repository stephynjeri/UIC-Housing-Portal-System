<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housing portal</title>
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
        <div class="top-bar">
            <div>
                <div>
                    <small><strong>My Rents</strong></small><br>
                </div>
                <br>
                <hr>
                <br>
                <div class="flexDivd">
                    
            <table class="rentsTable">
                <thead>
                    <th>Location</th>
                    <th>Apartment</th>
                    <th>Room</th>
                    <th>Amount (Per Month)</th>
                    <th>Remove</th>
                </thead>
                <tbody>
                        <?php
                            $conn=mysqli_connect("localhost","root","","housing");
                            $user=$_SESSION['username'];
                            $sql="SELECT * FROM `reports` WHERE username='$user'";
                            $exec=mysqli_query($conn,$sql);
                            $count=mysqli_num_rows($exec);
                            if ($count==0) {
                            }else{
                                while ($row=mysqli_fetch_array($exec)) {
                                    $name=$row['username'];
                                    $phone=$row['phone'];
                                    $location=$row['location'];
                                    $apartment=$row['apartment'];
                                    $type=$row['type'];
                                    $amount=$row['amount'];
                                    $id=$row['id'];
                        ?>
                    <tr>
                        <td><?php echo $location ?></td>
                        <td><?php echo $apartment ?></td>
                        <td><?php echo $type  ?></td>
                        <td><?php echo $amount ?> per month</td>
                        <td>
                            <form action="../handlers/del.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button name="btnX">X</button>
                            </form>
                        </td>
                    </tr>
                    <?php }}?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
    </main>
</body>
</html>