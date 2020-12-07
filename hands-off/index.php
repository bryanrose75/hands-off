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

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Hands Off</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

	</head>

    <body>

	<div class="navBar1">
				<a href="index.php" class ="active" >Hands-Off</a>
				<a href="aboutUs.html"> About Us</a>
				<a href="videos.html">Video</a>
				<button id="logOutButton" onclick=location.replace("https://hands-off-app.herokuapp.com/register.php")>
				Log Out
				
				</button>
			</div>

        <!-- Top content -->
        <div class="top-content">
	        <div class="container">
				
	        	<!-- Title and description row -->
	            <div class="row">
	                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
	                	<h1>Welcome to Hands-Off!</h1>
	                	<div class="description">
	                		<p>
	                			The power is now in your hands.<br>
									You will now have the capability to control a video purely by hand gestures.
	                		</p>
	                	</div>
	                </div>
	            </div>
				<!-- End title and description row -->
	<div class= "camContainer">>			
	<video autoplay="true" id="webCamElement"></video>
	<script>		
		var video = document.querySelector("#webCamElement");

		if (navigator.mediaDevices.getUserMedia) {
		navigator.mediaDevices.getUserMedia({ video: true })
		.then(function (stream) {
		video.srcObject = stream;
		})
		.catch(function (err0r) {
		console.log("Something went wrong!");
		});
		}
	</script>
	</div>
	            <!-- Carousel row -->
	            <div class="row">
	                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
	                	<!-- Carousel -->
	                	<div id="carousel-example" class="carousel slide">
	       					<ol class="carousel-indicators">
	       						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
	       						<li data-target="#carousel-example" data-slide-to="1"></li>
	       						<li data-target="#carousel-example" data-slide-to="2"></li>
	       					</ol>
	       					<div class="carousel-inner">
	       						<div class="carousel-item active">
	       							<div class="embed-responsive embed-responsive-16by9">
	       								<iframe class="embed-responsive-item" src="assets/vid/Hands Off.mp4" allowfullscreen></iframe>
	       							</div>
	       						</div>
	       						<div class="carousel-item">
	       							<div class="embed-responsive embed-responsive-16by9">
	       								<iframe class="embed-responsive-item" src="assets/vid/vid1.mp4" allowfullscreen></iframe>
	       							</div>
	       						</div>
	       						<div class="carousel-item">
	       							<div class="embed-responsive embed-responsive-16by9">
	       								<iframe class="embed-responsive-item" src="assets/vid/vid2.mp4" allowfullscreen></iframe>
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

        <!-- Section 1 -->
        <div class="section-1-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col section-1 section-description wow fadeIn">
	                    <h2>Section 1</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-md-4 section-1-box wow fadeInUp">
                		<div class="row">
                			<div class="col-md-4">
			                	<div class="section-1-box-icon">
			                		<i class="fas fa-magic"></i>
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Branding</h3>
	                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInDown">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div class="section-1-box-icon">
			                		<i class="fas fa-cog"></i>
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Web design</h3>
	                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div class="section-1-box-icon">
			                		<i class="fab fa-twitter"></i>
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Social media</h3>
	                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
	                    	</div>
	                    </div>
                    </div>
	            </div>
	        </div>
        </div>

        <!-- Section 2 -->
        <div class="section-2-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-2 section-description wow fadeIn">
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col section-2-box wow fadeInLeft">
                    	<h3>Section 2</h3>
                    	<p class="medium-paragraph">
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    		sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                    	</p>
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    		Ut wisi enim ad minim veniam, quis nostrud. 
                    		Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                    	</p>
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    		Ut wisi enim ad minim veniam, quis nostrud. 
                    		Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    	</p>
	                </div>
	            </div>
	        </div>
        </div>

		<!-- Section 3 -->
        <div class="section-3-container section-container">
	        <div class="container">
	        	
	            <div class="row">
	                <div class="col section-3 section-description wow fadeIn">
	                    <h2>Section 3</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Ut wisi enim ad minim</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fas fa-pencil-alt"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Sed do eiusmod tempor</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fas fa-cloud"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Quis nostrud exerci tat</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fab fa-google"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Minim veniam quis nostrud</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>

	        </div>
        </div>

		<!-- Section 4 -->
        <div class="section-4-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-4 section-description wow fadeInLeftBig">
	                	<h2>Section 4</h2>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
	                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
	                    </p>
	                </div>
	            </div>
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
