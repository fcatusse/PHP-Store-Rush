<?php
include_once "connect_db.php";
include_once "login_function.php";
include_once "config.php";
include_once "login.php";
session_start();
if($_SESSION["name"])
{
    echo "Hello " .$_SESSION["name"]. "<br>";
}
else
{
    Header("Location: login.php");
}

if($_SESSION["is_admin"] == 1 || $_COOKIE["is_admin"] == 1)

?>
<!DOCTYPE html>
<html>
<a href="admin.php"> Admin dashboard </a>
</html>
