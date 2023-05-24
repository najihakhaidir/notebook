<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Source</title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  </head>
  <body>
    <?php include "content.php"; access('USER'); ?>

    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <input style="color: white;" type="file" name="file">
        <input style="color: white;" type="submit" name="Upload"> <br> <br>
    </form>
    <?php $files=scandir("uploads"); 
    for($a=2; $a<count($files); $a++)
    { ?>
    <p style="color: white;">
        <?php echo $files[$a]; ?> &nbsp &nbsp &nbsp
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
        Download 
        </a> &nbsp &nbsp &nbsp
        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color:red;">
        Delete
        </a>
    </p>
    <?php
    } ?>













    <script src="script.js"></script>
    
    </body>
  </html>
