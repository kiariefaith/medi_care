


<?php
include("connections.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];

$message = $_REQUEST['message'];

$sql = "insert into contact values('$name','$email','$subject','$message')";

if(mysqli_query($con,$sql)) {
  echo "<h3>Your message has been sent successfully to the Admin</h3>";
  echo nl2br("\n$name\n $email\n"."$subject\n $message");
} else {
  echo "ERROR parsing your message: Please contact your Hospital".mysqli_error($con);
}

mysqli_close($con);
?>