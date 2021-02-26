<?php

     session_start();

     $e=$_SESSION['email'];
		$p=$_SESSION['password'];
		if($p=="")
		{
			header('location:index.php');
		}
		

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
 <title>
admin
</title>
<style>
P
{
	font-size:20px;
}
.divb{
background-color:lightblue;
}
.data input{
width:40%;
height:5%;
margin-top:1%;
padding:1%;
border:0.5px solid blue;
border-radius:10px;
}
 input[type="submit"]:hover
 {
 cursor:pointer;
background:#39dc79;
}

.navWidth
{
	background-color:teal;
}
.aw
{
	background-color:teal;
}
.b
{
	height:600px;
	width:25%;
	background-color:yellow;
}
.d
{
	height:600px;
	width:25%;
	background-color:red;
}
.c
{
	height:600px;
	width:50%;
	background-color:gray;
}
  h1
{
margin-left:40%;
margin-bottom:0.60em;
padding-top: 25px;
color:red;

}
a:hover
{
	background:green;
}

</style>
</head>
<body>

<div class="container-fluid ">
<section> 
<div class="row navWidth">
<div class="col-lg-12 col-md-12 col-sm-12">
<img src="atl.jpg" height="160px" width="16%" style="float:left;">
<h1 ><b>
Admin Pannel</h1></b>
 
</div>
</div>
</section>
<section>
<div class="row bg-dark" >
<div class="col-lg-12 col-md-12 col-sm-12">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
	
  <li class="nav-item">
      <a class="nav-link" href="home.php "> Home</a>
    </li>
 
   
	<li class="nav-item">
      <a class="nav-link" href=" generateID.php? " hidden></a>
    </li>
 
	<li class="nav-item">
      <a class="nav-link" href=" requesteddata.php? "> Updation_Data </a>
    </li>
 <li class="nav-item">
      <a class="nav-link" href=" updatedata.php? " hidden>UPDATION  </a>
    </li>
 
	<li class="nav-item">
      <a class="nav-link" href=" rqstddtafrID.php ? " >Generate_ID</a>
    </li>
 <li class="nav-item">
      <a class="nav-link" href="userlist.php "> UserList</a>
    </li>
 
     
	 <li class="nav-item">
      <a class="nav-link" href="result.php "> Voting_Result</a>
    </li>
 
	 <li class="nav-item">
	
	  
	  <?php  echo "<a onClick=\"javascript: return confirm('do you really want to logout');\"     class='nav-link'   href='logout.php' > logout</a>";
	 ?>
    </li>
 
 </ul>
</nav>

</div>
</div>
</section>

<section >
<div class="row divb" >
<div class="col-lg-12 col-md-12 col-sm-12">
<center>
<h3>Admin_Pannel</h3>
<p> This page is operated by admin.<br>
   Admin can perfom many tasks .<br>
   such as generate the id for user for voting <br>
   and update the data from sent by user for<br>
   for correction.<br>
   
   update user and show user data<br>
   and Admin may see voting result.<br>
   </p>
</center>
<div>
</div>
</section>






<section>
 
<div class="row bg-dark">
<div class="col-lg-12 col-md-12 col-sm-12">
<p style="color:white; float:right;"> candidate & pannel</P>
</div>
</div>
</section>
</div>
</body>
</html>


