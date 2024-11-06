<?php
if (isset($_POST['btnSubmit']) && isset($_FILES['image'])) {
    $conn=mysqli_connect("localhost","root","","housing");
    
    $landlord=$_POST['landlord'];
    $phone=$_POST['phone'];
    $apartment=$_POST['apartment'];
    $roomno=$_POST['houseno'];
    $location=$_POST['location'];
    $rooms=$_POST['rooms'];
    $description=$_POST['description'];
    $amount=$_POST['amount'];
    
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $error=$_FILES['image']['error'];

    if ($error===0) {
        if ($img_size > 125000) {
            $em="too large file size";
        }else{
            $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
            $img_ex_lc=strtolower($img_ex);

            $allowed_ext=array("jpg","jpeg","png");

            if (in_array($img_ex_lc,$allowed_ext)) {
                $my_new_img_name=uniqid("IMG",true).'.'.$img_ex;
                $img_upload_path='uploads/'.$my_new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);

                $sql_insert="INSERT INTO `houses`(`landlordname`, `phone`,`id`, `apartment`, `roomno`, `type`, `description`, `location`, `image`, `amount`) VALUES ('$landlord','$phone',null,'$apartment','$roomno','$rooms','$description','$location','$my_new_img_name','$amount')";

                $exec=mysqli_query($conn,$sql_insert);
            
                if ($exec) {
                    header("location:../pages/addhouse.php");
                }else{
                    echo "failed";
                }
            }else{
                $em="file type not allowed";
            }
        }




}
}


?>