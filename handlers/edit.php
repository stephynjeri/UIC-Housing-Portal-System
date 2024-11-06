<?php
    if (isset($_POST['btnUpdate'])) {
     $conn=mysqli_connect("localhost","root","","housing");
     $id=$_POST['id'];
    $apartment=$_POST['apartment'];
    $roomno=$_POST['roomno'];
    $type=$_POST['type'];
    $description=$_POST['description'];
    $location=$_POST['location'];
    $amount=$_POST['amount'];

     $sql="UPDATE `houses` SET `apartment`='$apartment',`roomno`='$roomno',`type`='$type',`description`='$description',`location`='$location',`amount`='$amount' WHERE id='$id'";
     $exc=mysqli_query($conn,$sql);
 
     if ($exc) {
          header('location:../pages/admin.php');
        }else{
          echo 'sql error';
      }
     }
 ?>