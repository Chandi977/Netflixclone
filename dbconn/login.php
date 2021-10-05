<?php
session_start();
if(isset($_POST["sub"]))
{
$conn=mysqli_connect("localhost","root","","chandi");
$id=$_POST["email"];
$pass=$_POST["password"];
$sql="select * from `check` where uid = '$id' and upass = '$pass'";
$result=mysqli_query($conn,$sql);
echo mysqli_error($conn);
$row=mysqli_fetch_row($result);
if($row>0)
{
	$_SESSION["uname"]=$row[3];
	$_SESSION["uid"]=$row[1];
	header("Location:../pages/home/browse.php");
}
else
{
	echo "Wrong UserName Or Password";
}
}
?>

