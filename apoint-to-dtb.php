<!DOCTYPE html>
<html>
<body>
<!--Sends message to admin-->
<?php
include("connections.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$doctor = $_REQUEST['doctor'];
$time= $_REQUEST['time'];
$day=$_REQUEST['day'];


$sql = "INSERT INTO `appointments` (`name`, `email`, `message`, `doctor`, `time`, `day`,`status`) VALUES('$name','$email','$message','$doctor','$time','$day','Pending')";

if(mysqli_query($con,$sql)) {
	echo "<h3>Your message has been sent successfully to the Admin</h3>";
	echo nl2br("\n$name\n $email\n"."$message\n $doctor\n$time\n$day");
?>
 <div class="form-group">
 	<div class="center"><a href="index.php">Go Back</a></div>
  </div>
                                 

<?php
} else {
	echo "ERROR parsing your message: Please contact your Hospital".mysqli_error($con);
}

mysqli_close($con);


?>


</body>
</html>
 