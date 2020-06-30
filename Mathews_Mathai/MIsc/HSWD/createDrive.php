
<?php
//echo "check";
if(isset($_POST['submit']))
{

$dn=$_POST["dname"];

if(isset($_POST['check']))
$sl=$_POST["check"];

else
$sl="no";


//$rp=$_POST["reregpass"];
$database=mysqli_connect('localhost','id8466181_root','root1234','id8466181_hswd')
or die("didnt work");
if(mysqli_query ($database,"insert into drive_details(DriveN, SL) values('$dn','$sl')"))
{    mkdir("../../DRIVES/".$dn);
    echo "Drive Created";
}

mysqli_close($database);

//header("Location:target.html");

}



?>


