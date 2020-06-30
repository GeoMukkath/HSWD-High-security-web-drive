
<?php

if(isset($_POST['submit']))
{

$e=$_POST["regemail"];


$p=$_POST["regpass"];
$rp=$_POST["reregpass"];
$database=mysqli_connect('localhost','root','','HSWD')
or die("didnt work");
$database1=mysqli_connect('localhost','root','','')
or die("didnt work");
//echo "select * from userdetails where email='$e'";
echo "<br>";
$res=mysqli_query($database,"select * from userdetails where email='$e'");
//$res1=mysqli_query($database,"select * from userdetails where phone='$ph'");
$result=mysqli_fetch_array($res,MYSQLI_NUM);
//$result1=mysqli_fetch_array($res1,MYSQLI_NUM);
//echo "Create Database user".$ph;
echo "<br>";
if($result[0]!="")
{
	echo "<h2>Email id Already Exists. Please Log In. </h2> <br>" ;
	//echo "<button onclick=\"location.href = 'SignUp.html';\" id=\"myButton\" class=\"float-left submit-button\" >Click Here To Log In!</button>";
	

}
else
{
if($p==$rp) 
{

if(mysqli_query ($database,"insert into userdetails(email, pass) values('$e','$p')"))
{
	
			echo "Registration Successful";
		}
		
			
	}
	
else
echo "Passwords Don't Match"; 

}
//entering all te details into database


mysqli_close($database);

//header("Location:target.html");

}



?>


