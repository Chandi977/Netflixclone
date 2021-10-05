<head>
<style>
  #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #e1e5ee;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
<script>
  function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  return;
}
</script>
</head>
<?php
session_start();
if(isset($_POST["register"]))
{
$conn=mysqli_connect("localhost","root","","chandi"); 
$id=$_POST["email"];
$pass=$_POST["password"];
$uname=$_POST["uname"];
$sql="insert into `check`(uid,upass,uname) values('$id','$pass','$uname')";
if(mysqli_query($conn,$sql))
{
    $sql_fetch="select * from `check` where uid = '$id' and upass = '$pass'";
    $result=mysqli_query($conn,$sql_fetch);
    echo mysqli_error($conn);
    $row=mysqli_fetch_row($result);
    $_SESSION["uid"]=$row[1];
    $_SESSION["uname"]=$row[3];
    echo '<script>myFunction();</script>';
	header("Location:../pages/home/browse.php");
}
else
{
	echo "Something went Wrong"."<br>";
	echo mysqli_error($conn);
}
}
?>
<body>
<div id="snackbar">Some text some message..</div>
</body>