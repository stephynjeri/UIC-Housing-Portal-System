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
        <div class="admin-main">
            <br><br>
            <?php 
            if (isset($_POST['btnEdit'])) {
                $id=$_POST['id'];
                $apartment=$_POST['apartment'];
                $roomno=$_POST['roomno'];
                $type=$_POST['type'];
                $description=$_POST['description'];
                $location=$_POST['location'];
                $amount=$_POST['amount'];
            }
            
            ?>
                <form action="../handlers/edit.php" method="POST" class="add-form">
                        <div>
                            <div><h3>Edit house</h3></div>
                            <br><br>
                            <div>
                                <small>Apartment </small>
                            </div>
                            <div>
                                <input type="text" name="apartment" value="<?php echo $apartment ?>">
                            </div>
                            <div><small>House No.</small></div>
                            <div>
                                <input type="text" name="houseno" value="<?php echo $roomno ?>">
                            </div>
                            <div><small>Location.</small></div>
                            <div>
                                <input type="text" name="location" value="<?php echo $location ?>">
                            </div>
                            <div>
                                <small>Rooms</small>
                            </div>
                            <div>
                                <input type="text" name="rooms" value="<?php echo $type ?>">
                            </div>
                        
                        </div>

                        <div>
                            <br><br><br>
                            <div>
                                <small>Amount (per month)</small>
                            </div>
                            <div>
                                <input type="text" name="amount" value="<?php echo $amount  ?>">
                            </div>
                            <div><small>Description</small></div>
                            <div>
                                <textarea name="description" id="" class="textarea"> <?php echo $description ?></textarea>
                            </div>
                            
                            <div>
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button class="btnSubmit" name="btnUpdate">Update</button>
                            </div>
                           
                        </div>
                    </form>
        </div>
    </main>
</body>
</html>