<?php
class Job
{
public function jobb()
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
$salary=$_POST['sa'];
$designation=$_POST['desg'];
$skill=$_POST['skil'];
$result=mysqli_query($conn,"SELECT * FROM job WHERE desgnation='$designation' or salary='$salary' or skil='$skill' ");
$count=mysqli_num_rows($result);
if($count==0)
{
include "../view/jobfail.php";
}
else
{
include"../view/jobprocess.php";
}
}
}
?>

