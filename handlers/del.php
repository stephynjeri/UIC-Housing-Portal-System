<?php
    if (isset($_POST['btnX'])) {
    $conn=mysqli_connect("localhost","root","","housing");
    $id=$_POST['id'];
    $sql="DELETE FROM `reports` WHERE id='$id'";
    $exec=mysqli_query($conn,$sql);

    if ($exec) {
        header('location:../pages/myrents.php');     
    }else{
        echo 'sql error';
    }
}
    if (isset($_POST['btnRemove'])) {
    $conn=mysqli_connect("localhost","root","","housing");
    $id=$_POST['id'];
    $sql="DELETE FROM `houses` WHERE id='$id'";
    $exec=mysqli_query($conn,$sql);

    if ($exec) {
        header('location:../pages/admin.php');     
    }else{
        echo 'sql error';
    }
}
    if (isset($_POST['btnRemUser'])) {
    $conn=mysqli_connect("localhost","root","","housing");
    $id=$_POST['id'];
    $sql="DELETE FROM `users` WHERE id='$id'";
    $exec=mysqli_query($conn,$sql);

    if ($exec) {
        header('location:../pages/users.php');     
    }else{
        echo 'sql error';
    }
}
?>