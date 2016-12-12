<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 12.12.2016 г.
 * Time: 18:31
 */
session_start();
if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
header("location:index.php");
?>