<!DOCTYPE html>
<html>
<head>
	<!-- Required Meta tags-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Manchester United | Images</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

	 <!-- Custom stylesheet-->
	<link rel="stylesheet" href="/Project/stylesheets/mystyle.css">
	<link rel="stylesheet" href="/Project/stylesheets/style.css">
  <link rel="stylesheet" href="/Project/stylesheets/slidestyle.css">

</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #DA291C">
		<!-- Club Logo-->
		<a href="ManchesterUnited.html">
			<img class = "navbar-brand" src="/Project/images/logo.png" alternate = "Manchester United Logo" height="100px">
		</a>
		<h1 style="color: white">Manchester United</h1>	
	</nav>
	<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color: #000000;">
		<div class="links">
			<ul class = "navbar-nav">
				<button class="nav-item">
					<a class = "nav-link" href="homepage.php">About</a>
				</button>
				<button class="nav-item">
					<a class = "nav-link" href="videos.php">Videos</a>
				</button>
				<button class="nav-item">
					<a class = "nav-link active" href="images.php">Images</a>
				</button>
				<button class="nav-item">
					<a class = "nav-link" href="shop.php">Shop</a>
				</button>
				<button class="nav-item">
					<a class = "nav-link" href="players.php">Players</a>
				</button>
				<button class="nav-item">
					<a class = "nav-link" href="fixtures.php">Fixtures</a>
				</button>

				<div class = "sponsor">
					<ul class="navbar-nav">
						<img class="nav-image" src="/Project/images/sponsor-logo-1.png" height="40px">
						<img class="nav-image" src="/Project/images/sponsor-logo-2.png" height="40px">
						<img class="nav-image" src="/Project/images/sponsor-logo-3.png" height="40px">
					</ul>
				</div>
			</ul>
		</div>
	</nav>
<section id="showcase">
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/stadium.jpg" style="width:100%;">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif; color: #ffffff">The Battlefield: Old Trafford </div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/trophy.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif; color: #000000;">Sir Alex Ferguson with the trophy</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/rooney.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">Wayne Rooney, former skipper of the team</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/manager.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">Jose Mourinho, after losing against Juventus</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/freekick.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">So who's it going to be?</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/squad.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">How the current team lines up</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/gp.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">David De Gea after saving an obvious goal</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/cr7.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">Cristiano Ronaldo, taking at shot at the goal</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/team.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">The famous premier league win in 2008/09</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/Project/images/zlatan.jpg" style="width:100%">
  <div class="text" style="font-size: 40px;font-family: 'Acme', sans-serif;">Zlatan Ibrahamovic after scoring a goal against Cardiff</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span>
</div>
</section>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 10 seconds
}
</script>

</body>
</html>
