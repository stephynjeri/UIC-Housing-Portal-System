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
            
            <div class="container-main1">
                <div class="top-section">
                    <ul>
                        <li><button onclick="allroom()" id="btnAll" class="btnActive">All</button></li>
                        <li><button onclick="bedseater()" id="btnSeater">Bed seater</button></li>
                        <li><button onclick="onebedroom()" id="btn1">One Bed room</button></li>
                        <li><button onclick="twobedroom()" id="btn2">Two Bed room</button></li>
                        <li><button onclick="threebedroom()" id="btn3">Three Bed room</button></li>
                        <li><button onclick="fourbedroom()" id="btn4">Four Bed room</button></li>
                    </ul>
                </div>
                <?php 
                if (isset($_POST['btnPlace'])) {
                    $place=$_POST['place'];
                }
                
                ?>
                <center>
                    <div><small class="text-loc"><?php echo $place ?></small></div>
                </center>
                <br>
                <!-- ........................all............................... -->
                <div class="section-container-s-c1 show-box" id="bedbox-all">
                  <?php
                     $conn=mysqli_connect("localhost","root","","housing");
                     
                     $sql="SELECT * FROM `houses` WHERE location='$place'";
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
                           <small><?php echo $apartment ?> (<?php echo $type ?>)</small> <br>
                           <div><button name="btnRent" class="btnRent">View</button></div>
                           </center>
                        </div>
                       </form>
                    <?php }}?>
                </div>
                <!-- ........................bedseater............................... -->
                <div class="section-container-s-c1 hide-box" id="bedbox-seater">
                <?php
                     $conn=mysqli_connect("localhost","root","","housing");
                     $bedseater='bedseater';
                     $sql="SELECT * FROM `houses` WHERE location LIKE '%$place%' AND type LIKE '%seater%'";
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
                           <small><?php echo $apartment ?> (<?php echo $type ?>)</small> <br>
                           <div><button name="btnRent" class="btnRent">View</button></div>
                           </center>
                        </div>
                       </form>
                    <?php }}?>
                </div>
                <!-- ........................onebedroom............................... -->
                <div class="section-container-s-c1 hide-box" id="bedbox-one">
                <?php
                     $conn=mysqli_connect("localhost","root","","housing");
                     $onebed='onebed';
                     $sql="SELECT * FROM `houses` WHERE location LIKE '%$place%' AND type LIKE '%one%'";
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
                           <small><?php echo $apartment ?> (<?php echo $type ?>)</small> <br>
                           <div><button name="btnRent" class="btnRent">View</button></div>
                           </center>
                        </div>
                       </form>
                    <?php }}?>
                </div>
                <!-- ........................twobedroom............................... -->
                <div class="section-container-s-c1 hide-box" id="bedbox-two">
                <?php
                     $conn=mysqli_connect("localhost","root","","housing");
                     $twobed='twobed';
                     $sql="SELECT * FROM `houses` WHERE location LIKE '%$place%' AND type LIKE '%two%'";
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
                           <small><?php echo $apartment ?> (<?php echo $type ?>)</small> <br>
                           <div><button name="btnRent" class="btnRent">View</button></div>
                           </center>
                        </div>
                       </form>
                    <?php }}?>
                </div>
                <!-- ........................threebedroom............................... -->
                <div class="section-container-s-c1 hide-box" id="bedbox-three">
                <?php
                     $conn=mysqli_connect("localhost","root","","housing");
                     $threebed='threebedroom';
                     $sql="SELECT * FROM `houses` WHERE location LIKE '%$place%' AND type LIKE '%three%'";
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
                           <small><?php echo $apartment ?> (<?php echo $type ?>)</small> <br>
                           <div><button name="btnRent" class="btnRent">View</button></div>
                           </center>
                        </div>
                       </form>
                    <?php }}?>
                </div>
                <!-- ........................fourbedroom............................... -->
                <div class="section-container-s-c1 hide-box" id="bedbox-four">
                <?php
                     $conn=mysqli_connect("localhost","root","","housing");
                     $fourbed='fourbedroom';
                     $sql="SELECT * FROM `houses` WHERE location LIKE '%$place%' AND type LIKE '%four%'";
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
                           <small><?php echo $apartment ?> (<?php echo $type ?>)</small> <br>
                           <div><button name="btnRent" class="btnRent">View</button></div>
                           </center>
                        </div>
                       </form>
                    <?php }}?>
                </div>
            </div>
        </section>
    <script>
        const boxall=document.getElementById('bedbox-all');
        const boxseater=document.getElementById('bedbox-seater');
        const box1=document.getElementById('bedbox-one');
        const box2=document.getElementById('bedbox-two');
        const box3=document.getElementById('bedbox-three');
        const box4=document.getElementById('bedbox-four');
        const btnall=document.getElementById('btnAll');
        const btnseater=document.getElementById('btnSeater');
        const btn1=document.getElementById('btn1');
        const btn2=document.getElementById('btn2');
        const btn3=document.getElementById('btn3');
        const btn4=document.getElementById('btn4');
        
        function allroom() {
            boxall.classList.add('show-box');
            boxall.classList.remove('hide-box');

            boxseater.classList.add('hide-box');
            boxseater.classList.remove('show-box');

            box1.classList.add('hide-box');
            box1.classList.remove('show-box');

            box2.classList.add('hide-box');
            box2.classList.remove('show-box');

            box3.classList.add('hide-box');
            box3.classList.remove('show-box');

            box4.classList.add('hide-box');
            box4.classList.remove('show-box');

            btnall.classList.add('btnActive')
            btnSeater.classList.remove('btnActive')
            btn1.classList.remove('btnActive')
            btn2.classList.remove('btnActive')
            btn3.classList.remove('btnActive')
            btn4.classList.remove('btnActive')
        }
        function onebedroom() {
            boxall.classList.add('hide-box');
            boxall.classList.remove('show-box');

            boxseater.classList.add('hide-box');
            boxseater.classList.remove('show-box');

            box1.classList.add('show-box');
            box1.classList.remove('hide-box');

            box2.classList.add('hide-box');
            box2.classList.remove('show-box');

            box3.classList.add('hide-box');
            box3.classList.remove('show-box');

            box4.classList.add('hide-box');
            box4.classList.remove('show-box');

            btnall.classList.remove('btnActive')
            btnSeater.classList.remove('btnActive')
            btn1.classList.add('btnActive')
            btn2.classList.remove('btnActive')
            btn3.classList.remove('btnActive')
            btn4.classList.remove('btnActive')
        }
        function bedseater() {
            boxall.classList.add('hide-box');
            boxall.classList.remove('show-box');

            boxseater.classList.add('show-box');
            boxseater.classList.remove('hide-box');

            box1.classList.add('hide-box');
            box1.classList.remove('show-box');

            box2.classList.add('hide-box');
            box2.classList.remove('show-box');

            box3.classList.add('hide-box');
            box3.classList.remove('show-box');

            box4.classList.add('hide-box');
            box4.classList.remove('show-box');

            btnall.classList.remove('btnActive')
            btnSeater.classList.add('btnActive')
            btn1.classList.remove('btnActive')
            btn2.classList.remove('btnActive')
            btn3.classList.remove('btnActive')
            btn4.classList.remove('btnActive')
            
        }

        function twobedroom() {
            boxall.classList.add('hide-box');
            boxall.classList.remove('show-box');

            boxseater.classList.add('hide-box');
            boxseater.classList.remove('show-box');
            
            box1.classList.add('hide-box');
            box1.classList.remove('show-box');

            box2.classList.add('show-box');
            box2.classList.remove('hide-box');

            box3.classList.add('hide-box');
            box3.classList.remove('show-box');

            box4.classList.add('hide-box');
            box4.classList.remove('show-box');

            btnall.classList.remove('btnActive')
            btnSeater.classList.remove('btnActive')
            btn1.classList.remove('btnActive')
            btn2.classList.add('btnActive')
            btn3.classList.remove('btnActive')
            btn4.classList.remove('btnActive')
            
        }
        function threebedroom() {
            boxall.classList.add('hide-box');
            boxall.classList.remove('show-box');

            boxseater.classList.add('hide-box');
            boxseater.classList.remove('show-box');
            
            box1.classList.add('hide-box');
            box1.classList.remove('show-box');

            box2.classList.add('hide-box');
            box2.classList.remove('show-box');

            box3.classList.add('show-box');
            box3.classList.remove('hide-box');

            box4.classList.add('hide-box');
            box4.classList.remove('show-box');

            btnall.classList.remove('btnActive')
            btnSeater.classList.remove('btnActive')
            btn1.classList.remove('btnActive')
            btn2.classList.remove('btnActive')
            btn3.classList.add('btnActive')
            btn4.classList.remove('btnActive')
            
        }
        function fourbedroom() {
            boxall.classList.add('hide-box');
            boxall.classList.remove('show-box');

            boxseater.classList.add('hide-box');
            boxseater.classList.remove('show-box');
            
            box1.classList.add('hide-box');
            box1.classList.remove('show-box');

            box2.classList.add('hide-box');
            box2.classList.remove('show-box');

            box3.classList.add('hide-box');
            box3.classList.remove('show-box');

            box4.classList.add('show-box');
            box4.classList.remove('hide-box');

            btnall.classList.remove('btnActive')
            btnSeater.classList.remove('btnActive')
            btn1.classList.remove('btnActive')
            btn2.classList.remove('btnActive')
            btn3.classList.remove('btnActive')
            btn4.classList.add('btnActive')
        }
        </script>
    </main>
    <!-- write a programm that prints odd numbers between 0 and 20 -->
</body>