<?php
include 'connect.php';
include "content.php"; 
access('USER');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <title>Reader</title>
    </head>
    <body>
        <div class="container mt-5">
            
            <?php foreach($query as $q){?>
                <div class="bg-white p-5 rounded-lg text-black text-center">
                    <h1><?php echo $q['title'];?></h1>

                    <!-- <div class="d-flex mt-2 justify-content-center align-items-center">
                        <a href="m_edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Edit</a>

                        <form method="POST">
                            <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                            <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</delete>
                        </form>
                    </div> -->

                </div>
                <p style="color: white;" class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
            <?php }?>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.boootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>