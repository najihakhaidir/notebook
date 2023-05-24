<?php
include 'connect.php';
include 'cont.php';

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
            <form method="POST">
                <input type="text" name="title" placeholder="Reader Title" class="form-control bg-white text-black my-3 text-center">
                <textarea name="content" class="form-control bg-white text-black my-3"></textarea>

                    <label style="color: white;" for="course">Choose a course:</label>
                    <select name="course" id="course">
                        <option value="INFO4401"> INFO 4401 </option>
                        <option value="INFO4402"> INFO 4402 </option>
                        <option value="INFO4403"> INFO 4403 </option>
                    </select>
                        <br><br>

                <button name="new_post" type="submit" class="btn btn-primary">Post Reader</button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.boootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>