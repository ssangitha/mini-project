<?php
class Conne
{
public function signinsert()
{
$servername ="localhost";
$username="root";
$pass="expertus1@";
$db="signup";
$conn=mysqli_connect($servername,$username,$pass,$db);
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}

$a=$_POST['email'];
$b=$_POST['pwd'];
mysqli_query($conn,"INSERT INTO detail(email,pass) VALUES('$a','$b')");
include"..//view/process.php";
}
public function detail()
{
$servername ="localhost";
$username="root";
$pass="expertus1@";
$db="signup";
$conn=mysqli_connect($servername,$username,$pass,$db);
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}

$ab=$_POST['name'];
$bc=$_POST['phn'];
$em=$_POST['email'];
$de=$_POST['desg'];
$c=$_POST['city'];
$d=$_POST['skill'];
$e=$_POST['exp'];
$f=$_POST['qp'];
$g=$_POST['yp'];
$h=$_POST['cgpa'];
$cl=$_POST['clg'];
$up=$_POST['upload']; 
$pro=$_POST['profile'];
$r=mysqli_query($conn,"SELECT uid FROM detail WHERE email='$em'");
$row = mysqli_fetch_array($r);
$u=$row['uid'];
mysqli_query($conn,"INSERT INTO personalinfo(uid,name,phno,city,skills,desg,expe,quali,ypo,cgpa,insti,resume,email,profile) VALUES('$u','$ab','$bc','$c','$d','$de','$e','$f','$g','$h','$cl','$up','$em','$pro')");
include "..//view/detailfinish.php";
}
}
?>
