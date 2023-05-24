<?php 
include 'connect.php';
$userid=$_GET['updateid'];
$sql="Select userid,name,email,password,rank from users where userid=$userid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$userid=$row['userid'];
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$rank=$row['rank'];



if(isset($_POST['submit'])){
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $rank=$_POST['rank'];

    $sql="update users set userid=$userid,name='$name',email='$email',password='$password',rank='$rank'
    where userid=$userid";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Manage Contributor</title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include "admin.php"; access('ADMIN'); ?>

    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label style="color: white;">User ID</label>
                <input type="text" class="form-control" placeholder="Enter your matric no." name="userid" autocomplete="off"
                value=<?php echo $userid;?>>
            </div>
            <div class="form-group">
                <label style="color: white;">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"
                value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label style="color: white;">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"
                value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label style="color: white;">Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off"
                value=<?php echo $password;?>>
            </div>
            <div class="form-group">
                <label style="color: white;">Rank</label>
                <input type="text" class="form-control" placeholder="Eg: Admin/Cont/User" name="rank" autocomplete="off"
                value=<?php echo $rank;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        
    </div>

  </body>
</html>