<?php

session_start();
include 'access.php';

session_unset();

if(isset($_SESSION['myname']))
{
    unset($_SESSION['myname']);
}

if(isset($_SESSION['myid']))
{
    unset($_SESSION['myid']);
}

header("Location: login.php");