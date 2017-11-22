<?php
$server="localhost";
$username="ankit";
$password="ankit@123";
$dbname="hotel";
$conn=mysqli_connect($server,$username,$password,$dbname);
$error="";
?>
<?php include 'header.php';?>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">


       <div class="row">
       	
       	<div class="col-sm-12">
       	<div id="map">
       	<img src="images/12.jpg" alt="">
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" method="post">
			<div class="form-group">	
			<input type="text" class="form-control" id="name" placeholder="Name" name="name" >
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" id="phone" placeholder="Phone" name="pno" >
			</div>
			<div class="form-group">
			<textarea type="email" class="form-control"  placeholder="Message" rows="4" name="message" ></textarea>
			</div>
					
			<button type="submit" class="btn btn-default" name="submit" >Send</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->
</div>
</body>
</html>

<?php include 'footer.php';?>

<?php

if(isset($_POST['submit']))
{


	echo  $name=mysqli_real_escape_string($conn,strip_tags($_POST['name']));
    echo  $email=mysqli_real_escape_string($conn,strip_tags($_POST['email']));
    echo  $phone=mysqli_real_escape_string($conn,strip_tags($_POST['pno']));
    echo  $message=mysqli_real_escape_string($conn,strip_tags($_POST['message']));
   
    $ins_sql="insert into contact (name,email,phone,message) values('$name','$email','$phone','$message')";
    if(mysqli_query($conn,$ins_sql)){
		?>
		<script>window.location="contact.php"</script>
		
		<?php
	}
}

?>
