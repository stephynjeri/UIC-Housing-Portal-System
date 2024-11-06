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
                <small>Logout</small>
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
                    <!-- <li><a href="houses.php">Houses</a></li> -->
                </ul>
            </div>
        </div>
        <div class="admin-main-content">
        <div>
                <div class="top-bar">
                    <small><strong>Add new vacant</strong></small>
                </div>
                <hr>
                <section class="barMain">
                    <div class="flexDiv">
                    <form action="../handlers/Haddhouse.php" method="POST" class="add-form" enctype="multipart/form-data">
                        <div>
                            <div><h1>Add new house</h1></div>
                            <div>
                                <small>Landlord Name</small>
                            </div>
                            <div>
                                <input type="text" name="landlord">
                            </div>
                            <div>
                                <small>Phone </small>
                            </div>
                            <div>
                                <input type="text" name="phone">
                            </div>
                            <div>
                                <small>Apartment </small>
                            </div>
                            <div>
                                <input type="text" name="apartment">
                            </div>
                            <div><small>House No.</small></div>
                            <div>
                                <input type="text" name="houseno">
                            </div>
                            <div><small>Location.</small></div>
                            <div>
                                <input type="text" name="location">
                            </div>
                            <div>
                                <small>Rooms</small>
                            </div>
                            <div>
                                <input type="text" name="rooms">
                            </div>
                        
                        </div>

                        <div>
                            <br><br><br>
                            <div>
                                <small>Amount (per month)</small>
                            </div>
                            <div>
                                <input type="text" name="amount">
                            </div>
                            <div><small>Description</small></div>
                            <div>
                                <textarea name="description" id="" class="textarea"></textarea>
                            </div>
                            <div><small>select image</small></div>
                            <div>
                                <input type="file" name="image">
                            </div>
                            <div>
                                <button name="btnSubmit">Submit</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>
</html>