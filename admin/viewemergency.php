<?php
include("adformheader.php");
include("../connections.php");

if(isset($_GET[delid]))
{
	$sql ="DELETE FROM user_contact WHERE contact_id='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('The record has been deleted successfully..');</script>";
	}
}
?>

<div class="container-fluid">
	<div class="block-header">
		<h2 class="text-center">View User Messages</h2>

	</div>

	<div class="card">

	<section class="container">
		<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
			<thead>
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Subject</td>
					<td>Message</td>
					<th width="15%">Action</th>
				</tr>
			</thead>
			<tbody>
				
<?php
	$sql ="SELECT * FROM user_contact";
       $qsql = mysqli_query($con,$sql);
       while($rs = mysqli_fetch_array($qsql))
       {
        echo "<tr>
        <td>$rs[name]</td>
        <td>$rs[email]</td>
        <td>$rs[subject]</td>
        <td>$rs[message]</td>
        <td><a href='viewemergency.php?delid=$rs[contact_id]' class='btn btn-sm btn-raised g-bg-blush2'>Delete</a></td>";
 
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