<html>

<body>
<?php
//script for log in
//form data in log in form will be submitted to this script
if(isset($_POST['submitLog'])) //similar to signup script
{
$e=$_POST["email"];
$p=$_POST["password"];
//echo "$e";
//echo $p;

$database=mysqli_connect('localhost','root','','HSWD')
or die("didnt work");
$q="select pass from userdetails where email='$e'";
//$q1="select phone from userdetails where email='$e'"; //selecting password from database using provided email id
//echo " $q ";
$r=mysqli_query ($database,"$q");
//$r1=mysqli_query ($database,"$q1");
$result=mysqli_fetch_array($r,MYSQLI_NUM);
//echo $result[0];	
//echo $result[1];
if($p==$result[0]) //if selected email id matches with user entered email id, log in successful
{echo "SUCCESSFULL";
 session_start();
 $_SESSION["email"]=$e;
 //$_SESSION["phone"]=$result[1];
 //$_SESSION["db"]="user".$_SESSION['phone'];
 //echo $_SESSION["db"]."<br>";
 //echo "<button onclick=\"location.href = 'build_form.php';\" id=\"myButton\" class=\"float-left submit-button\" >Build Form</button>";
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
</body>
</html>

