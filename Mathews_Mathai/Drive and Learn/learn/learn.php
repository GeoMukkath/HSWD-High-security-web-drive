<?php
//echo "Hey";
session_start();
if(isset($_SESSION["email"]))
{
$database=mysqli_connect('localhost','id8466181_root','root1234','id8466181_hswd')
or die("didnt work");
$e=$_SESSION["email"];
$res=mysqli_query($database,"select email, online from onlineusers where email='$e'");
$res1=mysqli_query($database,"select * from onlineusers");
$result=mysqli_fetch_array($res, MYSQLI_NUM);
$e=$result[0];
$num=0;
date_default_timezone_set("Asia/Kolkata");
$time = strtotime($result[1]);
//echo "This worked for sure $e";
echo $result[0]." is online! <br>";
//ob_clean();
echo "Logged In Time: ".$result[1]."<br>";
echo "Count Logged In Time: ".$time."<br>";
echo "Current Time: ".date("h:i:sa")."<br>";
//ob_clean();
echo "Current Time: ".time()."<br>";
while(mysqli_fetch_array($res1, MYSQLI_NUM))
	$num++;

echo "Online Users: ".$num;
}

else
	echo "You are not signed in";

?>