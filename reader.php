<?php
include 'connect.php';
include 'content.php';
include 'get_chapters.php';
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

            <div class="row">
                <?php foreach($chapters as $chapter){?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-black bg-white mt-3">
                        <div class="card-body" style="width:18rem;">
                            <h5 class="card-title"><?php echo $chapter['title'];?></h5>
                            <a href="view.php?id=<?php echo $chapter['id'];?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.boootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>