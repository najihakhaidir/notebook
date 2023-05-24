<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $userid=$_GET['deleteid'];

    $sql="delete from users where userid=$userid";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
