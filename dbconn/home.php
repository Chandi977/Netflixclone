<?php
session_start();
if($_SESSION["uname"])
{
	header("Location:../pages/home/browse.php");
// echo "Welcome ".$_SESSION["uname"]. " to Home Page";
}
else
{
	header("Location:login.php");
}

?>

<a href="logout.php">LOGOUT</a>