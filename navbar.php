<?php session_start()  ?>
<link rel="stylesheet" href="style.css">
<style>
    a{
        text-decoration:none;
        color:gray;
    }
</style>
<header>
    <nav class="navbar">
        <div>
            <a href="home.php" class="titleA"><strong>UIC Housing Portal System</strong></a>
        </div>
        <div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="myrents.php">My rent</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="adminlogin.php">Admin</a></li>
            </ul>
        </div>
        <div class="userDiv">
            <small><?php echo $_SESSION['username'] ?></small>
            <small><a href="index.php">Logout</a></small>
        </div>
    </nav>
</header>