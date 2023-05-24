<?php
include 'connect.php';
include 'cont.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <title>Create reader</title>
    </head>
    <body>
        <div class="container mt-5">
            <?php foreach($query as $q){?>
                <form method="POST">
                    <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                    <input type="text" name="title" placeholder="Reader Title" class="form-control bg-white text-black my-3 text-center"
                    value="<?php echo $q["title"];?>">
                    <textarea name="content" class="form-control bg-white text-black my-3"><?php echo $q["content"];?></textarea>
                    <button name="update" class="btn btn-primary">Update Reader</button>
                </form>
            <?php }?>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.boootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>