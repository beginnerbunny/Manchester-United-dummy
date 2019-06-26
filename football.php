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
	
	<title>Manchester United | Shop | Football</title>

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

</div>

  <div class="product">
    <div class="product-image">
      <img src="/Project/images/football.jpg" height="500px" width="700px">
    </div>
    <div class="product-details">
      <h3>Adidas Men World-Cup OMB Printed Football</h3>
      <hr>
      <center><div class="links">
        <h4><b>Flipkart</b></h4>
        <h6>Rs.1299</h6>
        <a href="https://www.flipkart.com/adidas-world-cup-tglid-football-size-5/p/itmf97qhm8hgaqtb?pid=BALF3DPMWJG2ZDZN&lid=LSTBALF3DPMWJG2ZDZNJEJWGU&marketplace=FLIPKART&srno=b_1_1&otracker=browse&fm=organic&iid=21ae7c95-7c59-4dfa-a246-97e22f7f18f8.BALF3DPMWJG2ZDZN.SEARCH&ppt=StoreBrowse&ppn=Store" target="_blank">
        <button class="buy-button">Buy at Flipkart</button>
        </a>
      </div></center>
      <hr>
      <center><div class="links">
        <h4><b>Amazon</b></h4>
        <h6>Rs.3,999</h6>
        <a href="https://www.amazon.in/Adidas-Synthetic-Football-Metallic-Silver/dp/B075LRHWMZ/ref=sr_1_fkmr0_2?s=sports&ie=UTF8&qid=1540025893&sr=1-2-fkmr0&keywords=adidas+world+cup+lid+football" target="_blank">
      <button class="buy-button">Buy at Amazon</button>
    </a>
      </div></center>
      <hr>
      <center><div class="links">
        <h4><b>Myntra</b></h4>
        <h6>Rs.5499</h6>
        <a href="https://www.myntra.com/footballs/adidas/adidas-men-off-white--black-world-cup-omb-printed-football/2234106/buy" target="_blank">
        <button class="buy-button">Buy at Myntra</button>
      </a>
      </div></center>
      <hr>
    </div>
  </div>

  <div class="product-description">
    <center><h2>Product Description</h2></center>
    <hr style="margin-right: 20px; margin-left: 20px;">
    <p style="text-align: justify;">
      <ul>
        <li>Off-white, black and grey graphic print football</li>
        <li>Thermally bonded seamless surface for a more predictable trajectory, better touch and lower water uptake</li>
        <li>Ball passed FIFA tests on circumference weight, rebound and water absorption</li>
        <li>Latex bladder</li>
        <li>Top game ball</li>
        <li>Requires inflation</li>
        <li>Officially licensed by FIFA</li>
        <li>Imported</li>    
      </ul>

      <br>
      <b style="font-size: 24px;">Material &amp; Care</b><br>
      83% TPU, 17% polyester surface<br>
      Wipe with a clean, dry cloth when needed
    </p>
  </div>

<?php  if (isset($_SESSION['username'])) : ?>
<p style="padding-right: 10px; padding-bottom: 10px;"> <strong><a href="homepage.php?logout='1'" style="float: right; color: black;">logout</a> </strong></p>
<?php endif ?>

<footer style="background-color: black; padding: 10px; font-size: 24px; color: white;">
    <center>Developed for FWT Project</center>
  </footer>
</body>
</html>
