<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="menu-bar">
        <ul>
            <li class="active"><a href="index.php">Home</a></li> 
            <li><a href="admin.php">Admin</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="display.php">Manage Users</a></li>
                    <li><a href="#">Manage Bulletin</a></li>
                </ul>
            </div>
            </li>
            <li><a href="m_reader.php">Contributor</a>
            </li>
            <li><a href="course.php">Courses</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li> 
            <li><a href="logout.php">Logout</a></li> 
        </ul>
        </div>
        <span style="color: white;"><?php 
            if(isset($_SESSION['myname']))
            {
                echo "Hi, " . $_SESSION['myname'];
            }
        ?></span>