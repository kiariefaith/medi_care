<?php

include("adformheader.php");
include("../connections.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM appointments WHERE appointmentid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('appointment record deleted successfully..');</script>";
	}
}
if(isset($_GET[approveid]))
{
	$sql ="UPDATE appointments SET status='Approved' WHERE appointmentid='$_GET[approveid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Appointment record Approved successfully..');</script>";
		echo "<script>window.location='viewappointmentpending.php';</script>";
	}	
}
?>
<div class="container-fluid">
<div class="block-header">
        <h2 class="text-center">View Pending Appointments</h2>
    </div>


<div class="card">
	<section class="container">
		<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
			<thead>

				<tr>

					<th>Name</th>
					<th>Email</th>
					<th>Message</th>
					<th>Doctor</th>
					<th>Time</th>
					<th>Day</th>
					<th>Status</th>
					<th width="15%">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
	$sql ="SELECT * FROM appointments";
       $qsql = mysqli_query($con,$sql);
       while($rs = mysqli_fetch_array($qsql))
       {
        echo "<tr>
        <td>$rs[name]</td>
        <td>$rs[email]</td>
        <td>$rs[message]</td>
        <td>$rs[doctor]</td>
        <td>$rs[time]</td>
        <td>$rs[day]</td>
        <td>$rs[status]</td>
	<td><a href='viewappointmentpending.php?delid=$rs[appointmentid]' class='btn btn-sm btn-raised g-bg-blush2'>Delete</a></td>";
 
      }
   ?>  
			</tbody>
		</table>
	</section>

</div>
</div>

<?php
include("adformfooter.php");
?>