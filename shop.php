<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
	
<!DOCTYPE html>
<html>
<head>
	<!-- Required Meta tags-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Manchester United | Shop</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	 <!-- Custom stylesheet-->
	<link rel="stylesheet" href="/Project/stylesheets/mystyle.css">
  <link rel="stylesheet" href="/Project/stylesheets/shekharstyle.css">
  <link rel="stylesheet" href="/Project/stylesheets/style.css">

<style>

* {
  box-sizing: border-box;
}

</style>
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
					<a class = "nav-link" href="images.php">Images</a>
				</button>
				<button class="nav-item">
					<a class = "nav-link active" href="shop.php">Shop</a>
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


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="padding-left: 10px; padding-top: 10px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>

   <div class="row">
      <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/football.jpg" alt="Football" style="width:100%; height: 250px;">
          <p class="price">Rs.1299</p>
          <p>Adidas World Cup Football</p>
          <p><a href="/Project/football.php"><button>View Deal</button></a></p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/jersey.jpg" alt="Jersey" style="width:100%; height: 250px;">
          <p class="price">Rs.2599</p>
          <p>Adidas Manchester United Jersey</p>
          <p><a href="/Project/jersey.php"><button>View Deal</button></a></p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/shoes.jpeg" alt="Shoes" style="width:100%; height: 250px;">
          <p class="price">Rs.6499</p>
          <p>Adidas Nemeziz Shoes</p>
          <p><a href="/Project/shoes.php"><button>View Deal</button></a></p>
        </div>
      </div>

 <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/jersey1.jpg" alt="Jersey" style="width:100%; height: 250px;">
          <p class="price">Rs.2499</p>
          <p>Manchester United Jersey</p>
          <p><button>View Deal</button></p>
        </div>
      </div>

  <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/banner.jpg" alt="Banner" style="width:100%; height: 250px;">
          <p class="price">Rs.1199</p>
          <p>Manchester United Banner</p>
          <p><button>View Deal</button></p>
        </div>
      </div>

 <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/poster.jpg" alt="Poster" style="width:100%; height: 250px;">
          <p class="price">Rs.239</p>
          <p>Manchester United Poster</p>
          <p><button>Add to Cart</button></p>
        </div>
      </div>

        <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/jersey2.jpg" alt="Jersey" style="width:100%; height: 250px;">
          <p class="price">Rs.2199</p>
          <p>Manchester United Away Jersey</p>
          <p><button>View Deal</button></p>
        </div>
      </div>

        <div class="col-md-3">
        <div class="card" style="padding: 20px; margin: 10px;">
          <img src="/Project/images/badge.jpg" alt="Badge" style="width:100%; height: 250px;">
          <p class="price">Rs.79</p>
          <p>Club badge</p>
          <p><button>View Deal</button></p>
        </div>
      </div>
</div>

<?php  if (isset($_SESSION['username'])) : ?>
<p style="padding-right: 10px; padding-bottom: 10px;"> <strong><a href="homepage.php?logout='1'" style="float: right; color: black;">logout</a> </strong></p>
<?php endif ?>
  </div>

  <footer style="background-color: black; padding: 10px; font-size: 24px; color: white;">
    <center>Developed for FWT Project</center>
  </footer>
</body>
</html>
