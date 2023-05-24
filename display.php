<?php 
include 'connect.php'; 
include 'admin.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
<style>
thead {color:white;}
tbody {color:white;}
table, th{border: 2px solid white;}
</style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>User List</title>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="m_cont.php" class="text-light">Add User</a></button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Rank</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql="Select userid,name,email,password,rank from users order by rank";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $userid=$row['userid'];
        $name=$row['name']; 
        $email=$row['email'];
        $password=$row['password'];
        $rank=$row['rank'];
        echo '<tr>
        <th scope="row">'.$userid.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$rank.'</td>
        <td>
        <button class="btn btn-primary"><a class="text-light" href="m_update.php? updateid='.$userid.'">Update</a></button>
        <button class="btn btn-danger"><a class="text-light" href="m_delete.php? deleteid='.$userid.'">Delete</a></button>
        </td>
        </tr>';   
    }
}
?>
    
  </tbody>
</table>
        </div>

    </body> 
</html>