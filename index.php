<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="s.css">
</head>
<style>
	
</style>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="./image/a.jpeg" class="pic" width="50%" height="50%">
			</div>
			<div class="col-sm-4">
				<p class="slogan" align="center"><i class="fa fa-mobile-phone" aria-hidden="true"></i> Your Vision, Our Future<i class="fa fa-mobile-phone" aria-hidden="true"></i></p>
			</div>
			<br><br>
			<div class="a">
				<p align="right">   Email:mo_phone@gmail.com</p>
		 <p align="right">Telephone: 9921832954</p>
		</div>
		    


	<!--img src="images/m2.jpg" height="400px;" width="1299px" -->
<div class="slide">
	<div class="w3-content w3-section">
  <img class="mySlides" src="./image/s1.jpg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/p1.jpg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/s3.jpg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/s4.jpg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/s6.png" height="600px;" width="1299px">
  
  
</div>
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>


	 <center><h1> News...</h1></center>
    <div class = "container">
     <div class="log">

<?php
	include 'conn.php';
	include 'home.php';

	$select=mysqli_query($conn,"SELECT * FROM mb_publish");
	$rows = mysqli_num_rows($select);

	if($rows){
		$i=0;

		while($news=mysqli_fetch_assoc($select))
		{

		}

	}
?>

</body>
</html>