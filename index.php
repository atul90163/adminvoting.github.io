<?php
$error="";
session_start();
include "connection.php";
if(isset($_POST['login']))

{
	$admneml=$_POST['email'];
	$admnpswrd=$_POST['password'];
	//echo $admneml;
	$slct="select * from admin where email='$admneml' AND password='$admnpswrd'";
	$slctqry=mysqli_query($con,$slct);
	$slctrow=mysqli_num_rows($slctqry);
	if($slctrow==1)
	{
		$slctdta=mysqli_fetch_assoc($slctqry);
		$_SESSION['email']=$slctdta['email'];
		$_SESSION['password']=$slctdta['password'];
	//echo "<script> open('home.php' , '_self')</script>";
		header('location:home.php');
		//echo "success";
	}
	else
	{
		$error= "<center><h5> invalid email and password</h5></center>";
	}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
   
    <title> online voting project </title>
	
<style>
p{
	font-size:20px;
	font-style:italic;
	
}

h5
{
color:red;	
}

h1
{
	margin:0;
	padding:0 0 20px;
	text-align:center;
	font-size:22px;
	
	
}
.active {
  background-color: #717171;
}

.navWidth
{
	background-color:teal;
	min-height:295px;
}
  
 .ab
  {
	  width:100%;
	  height:300px !important;
  }
.heading
{
margin-left:45%;
margin-bottom:0.60em;
padding-top: 30px;
color:red;

}
a:hover
{
	background:green;
}
h4
{
	color:white;
}
.martop
{
	margin-top:150px;
	background-color:aqua;
	max-width:800px;
	min-height:295px;
}
</style>
</head>
<body>

<div class="container-fluid martop">
<h1>Admin Page</h1>
<?php
 echo $error;
?>

  <div class="container navWidth">
 <center> <h4> Login Here</h4></center>
 
  <form action="" method="post"  name=" form1" id="form1"onsubmit="return validate()">
   

 <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email" required>
    </div>
   
 <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password"  placeholder="Enter Password" required>
    </div>




   <center><button type="submit" class="btn btn-info btn-block" name="login">Login</button></center>

</form>


 
<div class="row bg-dark">
<div class="col-lg-12 col-md-12 col-sm-12">
<p style="color:white; float:right;"> copyright to ONLINE.PVT.LTD</P>
</div>

</div>

</section>
</div>
</body>
</html>