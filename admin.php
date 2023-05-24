<?php 

session_start();
include "access.php";
access('ADMIN');
include "header.php";

?>
<div class="page-title">
        <h1>Admin Page</h1>
</div>

<div class="menu-bar">
        <medium>Welcome, Admin!</medium>
        <ul>
            <li class="active"><a href="display.php">Manage Users</a></li>
            <li class="active"><a href="#">Manage Bulletin</a></li>
        </ul>
</div>

<?php include "footer.php" ?>