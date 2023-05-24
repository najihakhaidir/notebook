<?php

session_start();

    $error = "";
    function create_userid()
    {
        $length = rand(4,20);
        $number = "";
        for ($i=0; $i < $length; $i++) {
            # code...
            $new_rand = rand(0,9);
            $number = $number . $new_rand;
        }
        return $number;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(!$DB = new PDO("mysql:host=localhost;dbname=notebook_db","root",""))
        {
            die("Could not connect to the database");
        }
    
        //save to database
        $arr['email'] = $_POST['email'];
        // $arr['password'] = hash('sha1', $_POST['password']);
        $arr['password'] = $_POST['password'];

        $query = "select * from users where email = :email && password = :password limit 1";
        $stm = $DB->prepare($query);
        if($stm)
        {
            $check = $stm->execute($arr);

                if($check)
                {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                    if(is_array($data) && count($data) > 0)
                    {
                        $_SESSION['myid'] = $data[0]['userid'];
                        $_SESSION['myname'] = $data[0]['name'];
                        $_SESSION['myrank'] = $data[0]['rank'];
                    }else{
                        $error = "Wrong username or password";
                    }
                }

            if($error == "")
            {
                header("Location: index.php");
                die;
            }
        }
    }
?>

<?php include "header.php" ?>

<div class="page-title">
        <h1>Login</h1>
</div>
        <?php
            if($error != "")
            {
                echo "<br><span style='color:red'>$error</span><br><br>";
            }
        ?>
        <style>
            .login{
                text-align: center;
                padding: 50px;
                margin-top: 80px;
            }
            .input{
                text-align: center;
                border-radius: 15px;
                border: solid thin #aaa;
                padding: 10px;
                margin: 4px;
            }
            .button{
                border-radius: 15px;
                border: solid thin #aaa;
                padding: 10px;
                margin: 15px;
                cursor: pointer;
            }
        </style>

        <form class="login" method="post">
            <input class="input" type="email" name="email" placeholder="Email" required><br>
            <input class="input" type="password" name="password" placeholder="Password" required><br>

            <input class="button" type="submit" value="Login"><br>

<?php include "footer.php" ?> 