<?php 

session_start();
include "access.php";
access('USER');
include "header.php";

?>
<div class="page-title">
        <h1>INFO 4993</h1>
</div>

<div class="menu-bar">
        <medium>Final Year Project 1</medium>
        <ul>
            <li class="active"><a href="reader.php">Reader</a></li>
            <li class="active"><a href="notes.php">Notes</a></li>
            <li class="active"><a href="todolist.php">To Do List</a></li>
            <li class="active"><a href="source.php">Source</a></li>
        </ul>
</div>

<?php include "footer.php" ?>