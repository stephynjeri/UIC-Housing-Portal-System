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
                        <li>
                            <form action="places.php" method="post">
                                <input type="hidden" name="place" value="Nairobi">
                                <button name="btnPlace">Nairobi</button>
                            </form>
                        </li>
                        <li><form action="places.php" method="post">
                                <input type="hidden" name="place" value="Kiambu">
                                <button name="btnPlace">Kiambu</button>
                            </form></li>
                        <li><form action="places.php" method="post">
                                <input type="hidden" name="place" value="Mombassa">
                                <button name="btnPlace">Mombassa</button>
                            </form></li>
                        <li><form action="places.php" method="post">
                                <input type="hidden" name="place" value="Machakos">
                                <button name="btnPlace">Machakos</button>
                            </form></li>
                        <li><form action="places.php" method="post">
                                <input type="hidden" name="place" value="Nakuru">
                                <button name="btnPlace">Nakuru</button>
                            </form></li>
                        <li><form action="places.php" method="post">
                                <input type="hidden" name="place" value="Eldoret">
                                <button name="btnPlace">Eldoret</button>
                            </form></li>
                        <li><form action="places.php" method="post">
                                <input type="hidden" name="place" value="Ruiru">
                                <button name="btnPlace">Ruiru</button>
                            </form></li>
                    </ul>
                </div>
            </div>
            <div class="container-main1">
                <div class="top-section">
                    <ul>
                        <li><button>All</button></li>
                        <li><button>Bed seater</button></li>
                        <li><button>One Bed room</button></li>
                        <li><button>Two Bed room</button></li>
                        <li><button>Three Bed room</button></li>
                        <li><button>Four Bed room</button></li>
                    </ul>
                </div>
                
                <center>
                    <div><small class="text-loc"><?php echo $place ?></small></div>
                </center>
                <br>
                <div class="section-container-s-c1" >
                    <div class="card-item">
                        <div class="imgDiv">
                            <img src="../images/img1.jpeg" class="img" alt="">
                        </div>
                        <div class="descDiv">
                           <center>
                           <small>House description</small> <br>
                           <button class="btnRent">Rent</button>
                           </center>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="imgDiv">
                            <img src="../images/img1.jpeg" class="img" alt="">
                        </div>
                        <div class="descDiv">
                           <center>
                           <small>House description</small> <br>
                           <button class="btnRent">Rent</button>
                           </center>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="imgDiv">
                            <img src="../images/img1.jpeg" class="img" alt="">
                        </div>
                        <div class="descDiv">
                           <center>
                           <small>House description</small> <br>
                           <a href="rent.php"><button class="btnRent">Rent</button></a>
                           </center>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="imgDiv">
                            <img src="../images/img1.jpeg" class="img" alt="">
                        </div>
                        <div class="descDiv">
                           <center>
                           <small>House description</small> <br>
                           <a href="rent.php"><button class="btnRent">Rent</button></a>
                           </center>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
    </main>
    <!-- write a programm that prints odd numbers between 0 and 20 -->
</body>
