<?php
//header("Location: localhost/HSWD/cloudspace/cloudspace.html");
session_start();
$_SESSION["grant"]="not grant";
$num=-1;
$database=mysqli_connect('localhost','id8466181_root','root1234','id8466181_hswd')
or die("didnt work");
$q="select online from driveA where 1=1";
//$q1="select phone from userdetails where email='$e'"; //selecting password from database using provided email id
//echo " $q ";
$r=mysqli_query ($database,"$q");
//$r1=mysqli_query ($database,"$q1");
while($result=mysqli_fetch_array($r,MYSQLI_NUM))
{
	if($result[0]!=0 && $result[0]!=1)
	{   $_SESSION["grant"]="not grant";
		echo "Continue Waiting";
		break;
	}
	else
		$_SESSION["grant"]="grant";
}
	  
	  if($_SESSION["grant"]=="grant")
		  echo "DriveA";



?>