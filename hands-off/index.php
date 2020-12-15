<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	header("Location: register.php");
}

?>

<html>

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Hands Off</title>

	<!-- Include Handsfree.js -->
	<link rel="stylesheet" href="https://unpkg.com/handsfree@7.2.15/build/lib/assets/handsfree.css" />
	<script src="https://unpkg.com/handsfree@7.2.15/build/lib/handsfree.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media-queries.css">

</head>

<body>
	<!-- Instantiate and start HandsFree -->
	<script>
		handsfree = new Handsfree({
			hand: true
		})

		handsfree.start()
	</script>

	<div class="navBar1">
		<a href="index.php" class="active">Hands-Off</a>
		<button id="logOutButton" onclick=location.replace("https://hands-off-app.herokuapp.com/register.php")> Log Out </button> </div>
		 <!-- Top content -->
			<div class="top-content">
				<div class="container">

					<!-- Title and description row -->
					<div class="row">
						<div class="welcomeDiv">
							<h1>Welcome to Hands-Off!</h1>
							<div class="description">
								<p>
									The power is now in your hands.<br>
									You will now have the capability to control a video purely by hand gestures.
								</p>
							</div>
						</div>
						<div class="cameraDiv">
							<video autoplay="true" id="webCamElement"></video>
							<script>
								var video = document.querySelector("#webCamElement");

								if (navigator.mediaDevices.getUserMedia) {
									navigator.mediaDevices.getUserMedia({
											video: true
										})
										.then(function(stream) {
											video.srcObject = stream;
										})
										.catch(function(err0r) {
											console.log("Something went wrong!");
										});
								}
							</script>
						</div>
					</div>
					<!-- End title and description row -->

					<!-- Carousel row -->
					<div class="row">
						<div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							<!-- Carousel -->
							<div id="carousel-example" class="carousel slide" data-interval="false">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example" data-slide-to="1"></li>
									<li data-target="#carousel-example" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="embed-responsive embed-responsive-16by9">
											<video src="assets/vid/Hands Off.mp4" autoplay loop muted controls></video>
										</div>
									</div>
									<div class="carousel-item">
										<div class="embed-responsive embed-responsive-16by9">
											<video src="assets/vid/vid1.mp4" autoplay loop muted controls></video>
										</div>
									</div>
									<div class="carousel-item">
										<div class="embed-responsive embed-responsive-16by9">
											<video src="assets/vid/vid2.mp4" autoplay loop muted controls></video>
										</div>
									</div>

								</div>
								<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<!-- End carousel -->
						</div>
					</div>
					<!-- End carousel row -->
				</div>
			</div>



			<!-- Javascript -->
			<script src="assets/js/jquery-3.3.1.min.js"></script>
			<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script src="assets/js/jquery.backstretch.min.js"></script>
			<script src="assets/js/wow.min.js"></script>
			<script src="assets/js/waypoints.min.js"></script>
			<script src="assets/js/scripts.js"></script>

</body>


</html>