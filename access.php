<?php

function access($rank)
{

    if(isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"][$rank])
    {
        header("Location: denied.php");
        die;
    }
}

$_SESSION["ACCESS"]["ADMIN"] = isset($_SESSION['myrank']) && $_SESSION['myrank'] == "admin";

$_SESSION["ACCESS"]["USER"] = isset($_SESSION['myrank']) && ($_SESSION['myrank'] == "user" || $_SESSION['myrank'] == "admin" || $_SESSION['myrank'] == "cont");

$_SESSION["ACCESS"]["CONT"] = isset($_SESSION['myrank']) && ($_SESSION['myrank'] == "cont" || $_SESSION['myrank'] == "admin");

