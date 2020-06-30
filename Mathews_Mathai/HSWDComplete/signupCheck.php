
<?php
require 'PHPMailerAutoload.php';
if(isset($_POST['submit']))
{

$e=$_POST["regemail"];


$p=$_POST["regpass"];
$rp=$_POST["reregpass"];
$database=mysqli_connect('localhost','id8466181_root','root1234','id8466181_hswd')
or die("didnt work");
//$database1=mysqli_connect('localhost','root','','')
//or die("didnt work");
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
	?>
<script type="text/javascript">
alert("Email ID already exists. Please Login");
window.location.href = "login.html";
</script>
<?php
	//echo "<button onclick=\"location.href = 'SignUp.html';\" id=\"myButton\" class=\"float-left submit-button\" >Click Here To Log In!</button>";
	

}
else
{
if($p==$rp) 
{
	//$eh=md5($e);
	$em='mathewsmathai1@gmail.com';
$eh=md5($e);
if(mysqli_query ($database,"insert into userdetails(email, pass,hash) values('$e','$p','$eh')"))
{   
	
	$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hswdhswd@gmail.com';                 // SMTP username
$mail->Password = 'hswdhswdhswd';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('hswdhswd@gmail.com');
$mail->addAddress($em);     // Add a recipient
$mail->addReplyTo('hswdhswd@gmail');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Activate Account';
$mail->Body    = "Please click.... http://securespace.000webhostapp.com/verify.php?em=".$eh;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
			echo "Registration Successful. Please check your email inbox to activate the account";
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


