<?php
if(isset($_POST['submit'])) //similar to signup script
{
$e=$_POST["email"];
$p=$_POST["pass"];
//echo "$e";
//echo $p;

$database=mysqli_connect('localhost','id8466181_root','root1234','id8466181_hswd')
or die("didnt work");
$q="select pass from userdetails where email='$e'";

$r=mysqli_query ($database,"$q");
//$r1=mysqli_query ($database,"$q1");
$result=mysqli_fetch_array($r,MYSQLI_NUM);
//echo $result[0];	
//echo $result[1];
if($p==$result[0]) //if selected email id matches with user entered email id, log in successful
{ 
header("Location: /HSWD/cloudspace/cloudspace.html");
}

else
{
	echo "invalid id";
	//echo "<button onclick=\"location.href = 'login.html';\" id=\"myButton\" class=\"float-left submit-button\" >Try Again</button>";
//header function can be used to take back to the login page. Changes can be made.
} //else invalid

mysqli_close($database);
	

}

?>