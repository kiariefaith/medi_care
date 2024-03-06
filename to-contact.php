<!DOCTYPE html>
<html>
<body>
<!--Sends message to admin-->
<?php
include("connections.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];



$sql = "INSERT INTO `user_contact` (`name`, `email`, `subject`, `message`) VALUES('$name','$email','$subject','$message')";

if(mysqli_query($con,$sql)) {
	echo "<h3>Your message has been sent successfully to the Admin</h3>";
	echo nl2br("\n$name\n $email\n"."$subject\n $message");
?>
 <div class="form-group">
 	<div class="center"><a href="contact_us.php">Go Back</a></div>
  </div>
                                 

<?php
} else {
	echo "ERROR parsing your message: Please contact your Medi_care admin".mysqli_error($con);
}

mysqli_close($con);


?>


</body>
</html>
 