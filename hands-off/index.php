<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}

?>

<html>
	<head>
		<title>	Hands-Off Homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
		<body>
		<script>
		function myLogOut(){
		location.replace("https://hands-off-app.herokuapp.com/register.php")
		
		}
		</script>
		
			<div class="navBar">
				<a href="index.php" class ="active" >Hands-Off</a>

				<button id="logOutButton" onclick="myLogOut()">
				Log Out
				
				</button>
			</div>
			
			<div class="welcomeContainer">
			<h1> Welcome to Hands-Off!</h1>
			<h2> The power is now in your hands.<br>
			You will now have the capability to control a video purely by hand gestures.</h2>
			</div>
			
			<div class="tutorialContainer">
			<h1>There will be a tutorial video here to demonstrate how to use our website!</h1>
			</div>
			
			<div class="videoSelection">
			<h1>Please select a video to get started!</h1>
			<div id="firstVid">video one</div>
			<div id="secondVid">video two</div>
			<div id="thirdVid">video three</div>
			</div>
		</body>

</html>
