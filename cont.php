<?php 

session_start();
include "access.php";
access('CONT');
include "header.php";

?>
<div class="page-title">
        <h1>Contributor Page</h1>
</div>

<div class="menu-bar">
        <medium>Contribution</medium>
        <ul>
            <li class="active"><a href="m_reader.php">Manage Reader</a></li>
        </ul>
</div>

<?php include "footer.php" ?>