

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
   
    <title>Update ID Request </title>
</head>
<body>

<div class="container">

<div class="col-sm-6">
<?php
$state="";
$postfix="";
$prefix="";
$id_generated="";
include "connection.php";
$a=$_GET['id'];
$selectdata=mysqli_query($con , "select * from update_tbl where id= $a");
$num_row=mysqli_num_rows($selectdata);
if($num_row>0)
{
	while($row=mysqli_fetch_assoc($selectdata))
	        {
		//echo $row['email'];
		        $name=$row['name'];
		        $email=$row['email'];
			      $state=$row['state'];
				  $age=$row['age'];
				  $password=$row['password'];
				  $voterid=$row['voterid'];
	        }

		  ?>
		 
		       <form method="POST">
		              <div class="form-group">
                      <label for="email">User_Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="enter name"  value="<?php echo $name ?>" required  readonly>
                      </div>
                     
		              <div class="form-group">
                      <label for="email">User_Email:</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="enter email"  value="<?php echo $email?>" required  readonly>
                      </div>
					  <div class="form-group">
                      <label for="email">User_Password:</label>
                      <input type="text" class="form-control" id="password" name="password" placeholder="enter email"  value="<?php echo $password?>" required  readonly>
                      </div>
                     
                     <div class="form-group">
                     <label for="state">User_State:</label>
                    <input type="text" class="form-control" id="state" name="state"  placeholder="enter state" value="<?php echo $state?>"  required  readonly>
					 <div class="form-group">
					 <div class="form-group">
                      <label for="email">User_Age:</label>
                      <input type="text" class="form-control" id="age" name="age" placeholder="enter email"  value="<?php echo $age?>" required  readonly>
                      </div>
                     
					 <div class="form-group">
                      <label for="email">User_Voterid:</label>
                      <input type="text" class="form-control" id="vtrid" name="vtrid" placeholder="enter email"  value="<?php echo $voterid?>" required  readonly>
                      </div>
                     
                    <center><button type="submit" class="btn btn-success btn-block" name="update"><b>Update correct data</b></button></center>
		</form>
		
	<?php
	
		
}
else
{
	echo "Record Not Found";
}
?>


 </div>
<div class="col-sm-6">cxvxcgfdgfdffgfgfd
</div>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	$uname=$_POST['name'];
	$uemail=$_POST['email'];
	$upass=$_POST['password'];
	$ustate=$_POST['state'];
	$uage=$_POST['age'];
	$uid= $_POST['vtrid'];
	echo $uid;
	//echo $uemail;
	//echo $uid;
	$updatedata=mysqli_query($con,"update user set name='$uname', password='$upass',state='$ustate', age='$uage' where email='$uemail' AND user_id_generated='$uid'");
	if($updatedata)
	{
		//echo "<script> alert('successfully update')</script>";
		$deletedata=mysqli_query($con, "delete from update_tbl where voterid='$uid' AND email='$uemail'");
		if($deletedata)
		{
			echo "<script> alert('Update successfull and Deleted')</script>";
			 echo "<script>window.open('requesteddata.php','_self')</script>";
		}
	}
	else{
		echo "<script>alert('something is wrong')</script>";
	}
}


?>