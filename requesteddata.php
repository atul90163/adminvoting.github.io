


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
   
    <title> online voting project </title>
</head>
<body>
<div class="container">
<div class="col-sm-6">
<h2> All Requested Data For Correction</h2>
<table class="table table-responsive table-hover" >
<tr>
<td width= 100>#</td>
<td  width= 100>Email</td>
<td  width= 100>Voterid</td>

<td  width= 100>Action</td>
</tr>
<?php
include "connection.php";
$ttl=0;
$selectdata=mysqli_query($con , "select * from update_tbl");
$num_row=mysqli_num_rows($selectdata);
if($num_row>0)
{
	while($row=mysqli_fetch_assoc($selectdata))
		
	{
		$ttl=$ttl+1;
		$id=$row['id'];
		?>
		<tr>
		<td> <?php echo $ttl ;?>
		<td><?php echo $row['email'];?> </td>
		<td><?php echo $row['voterid'];?> </td>
		<td><a href="updatedata.php? id=<?php echo $id ;?>"> Update</a></td></tr>
		<?php
	}
}
else
{
	?>
	<tr>
	
	<td colspan="4"> Record Not Found</td>
	
	</tr>
	
	
	
	<?php
	
	
}

?>
<tr>
<td colspan="4">
<center> <a href="logout.php" > <b> LogOut</b></a></center></td>
</tr>

</table>
</div>

<div class="col-sm-6">


my name is atul upadhaya
</div>
</div>
</body>
</html>
 