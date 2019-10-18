<?php
class Logconn
{
public function log()
{session_start();
$servername ="localhost";
$username="root";
$pass="expertus1@";
$db="signup";
$conn=mysqli_connect($servername,$username,$pass,$db);
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}

$e = $_POST['email'];
$p = $_POST['pwd'];
$result=mysqli_query($conn,"SELECT email,pass FROM detail WHERE email='$e' AND pass='$p'");
$count=mysqli_num_rows($result);
$re=mysqli_query($conn,"SELECT * FROM personalinfo WHERE email='$e'");
$row = mysqli_fetch_array($re);
$_SESSION["name"] = $row['name'];
$_SESSION["email"] = $row['email'];
$_SESSION["desg"]=$row['desg'];
$_SESSION["phno"]=$row['phno'];
$_SESSION["insti"]=$row['insti'];
$_SESSION["city"]=$row['city'];
$_SESSION["expe"]=$row['expe'];
$_SESSION["quali"]=$row['quali'];
$_SESSION["ypo"]=$row['ypo'];
$_SESSION["profile"]=$row['profile'];
if($count==1){
 $_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
 header('Location:../view/profile.php');
} 
else{
header('Location:../view/loginfail.php');
}
}
}
?>

