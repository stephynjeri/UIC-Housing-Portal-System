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
                    <li><a href="landlods.php">Landloads</a></li>
                </ul>
            </div>
        </div>
        <div class="admin-main-content">
        <div>
                <div class="top-bar">
                    <small><strong>Landlods</strong></small>
                </div>
                <hr>
                <section class="barMain">
                    <table class="table1">
                        <thead>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Apartment</th>
                            <th>Amount</th>
                        </thead>
                        <tbody>
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
                            ?>
                            <tr>
                                <td><?php echo $landlord ?></td>
                                <td><?php echo $location ?></td>
                                <td><?php echo $apartment ?></td>
                                <td><?php echo $amount ?></td>
                            </tr>
                            <?php }}?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </main>
</body>
</html>