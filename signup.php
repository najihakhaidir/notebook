<?php

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

        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";*/

        $arr['userid'] = create_userid();
        $condition = true;
        while($condition)
        {
            $query = "select id from users where userid = :userid limit 1";
            $stm = $DB->prepare($query);
            if($stm)
            {
                $check = $stm->execute($arr);
                if($check)
                {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                    if(is_array($data) && count($data) > 0)
                    {
                        $arr['userid'] = create_userid();
                        continue;
                    }
                }
            }
            $condition = false;
        }
    
        //save to database
        $arr['name'] = $_POST['name'];
        $arr['email'] = $_POST['email'];
        $arr['password'] = hash('sha1', $_POST['password']);
        $arr['rank'] = "user";

        $query = "insert into users (userid,name,email,password,rank) values (:userid,:name,:email,:password,:rank)";
        $stm = $DB->prepare($query);
        if($stm)
        {
            $check = $stm->execute($arr);
            if(!$check)
            {
                $error = "Could not save into database";
            }

            if($error == "")
            {
                header("Location: login.php");
                die;
            }
        }
    }
?>

<?php include "header.php" ?>

<div class="page-title">
        <h1>Signup</h1>
</div>
        <?php
            if($error != "")
            {
                echo "<br><span style='color:red'>$error</span><br><br>";
            }
        ?>
        <style>
            .signup{
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

        <form class="signup" method="post">
            <input class="input" type="text" name="name" placeholder="Name" required><br>
            <input class="input" type="email" name="email" placeholder="Email" required><br>
            <input class="input" type="password" name="password" placeholder="Password" required><br>

            <input class="button" type="submit" value="Signup"><br>
<?php include "footer.php" ?>