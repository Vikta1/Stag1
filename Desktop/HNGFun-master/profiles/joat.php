<?php
require'db.php';
$result = $conn->query("Select * from secret_word LIMIT 1");
$result = $result->fetch(PDO::FETCH_OBJ);
$secret_word = $result->secret_word;

$result2 = $conn->query("Select * from interns_data where username='joat'");
$user = $result2->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>HNG FUN</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Custom styles for this template -->
      <link href="../css/style2.css" rel="stylesheet">
      <link href="../css/style1.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
	  <link href="../css/carousel.css" rel="stylesheet">
	<style type="text/css">
		a:hover{
		  text-decoration: none;
		}
	</style>
</head>
<body style='background-color:#3f4447;'>
	
<div class='container'>
	<br><br>
	<div class='row'>
		<div class='col-sm-6' >
			<center><img height='100%' class='img-responsive' src="http://res.cloudinary.com/dlsfrelbb/image/upload/v1523639668/josh.png"></center>
		</div>
		<div class='col-sm-6'>
			<div>
				<br><br><br><br><br><br>
				<h1 style='font-family: "proxima-nova"; color:#fff; font-size: 22px; font-weight: 600; letter-spacing: .14em; line-height: 1em; text-transform: uppercase;'><?php echo $user->name; ?></h1>
				<h2 style='font-family: "proxima-nova"; color:#a3a3a3; font-size: 22px; line-height: 1.15em; text-transform: none;letter-spacing: .01em; margin-bottom:26px; text-align:left;'>I am a website devloper, android app devloper ,an animator and also love gaimg. Follow me anywhere.</h2>
				<h2 style='text-align:left;'><a href="mailto:starboi247@gmail.com" style='font-family: "proxima-nova"; color:#fff; font-size: 22px; font-weight: 600; letter-spacing: .14em; line-height: 1em; '>STARBOI247@GMAIL.COM</a></h2>
				<h2 style='text-align:left;'><a href="http://itsjoat.com" style='font-family: "proxima-nova"; color:#fff; font-size: 22px; font-weight: 600; letter-spacing: .14em; line-height: 1em; '>WEBSITE</a></h2>
				<div>
					<a href="https://instagram.com/its_joat"><img style='margin-right:10px;' width='40' height='40' src="http://res.cloudinary.com/dlsfrelbb/image/upload/v1523643336/instagram-icon-white.png"></a>
					<a href="https://twitter.com/its_joat"><img style='margin-right:10px;' width='40' height='40' src="http://res.cloudinary.com/dlsfrelbb/image/upload/v1523643336/icon-twitter-white-1.png"></a>
					<a href="https://m.youtube.com/channel/UCvLacR6r37O6N_dWEXDGUyQ"><img width='40' height='40' src="http://res.cloudinary.com/dlsfrelbb/image/upload/v1523643336/white-youtube-2-512.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Custom scripts for this template -->
    <script src="../js/hng.min.js"></script>
</body>
</html>