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
</div>

<div class="product">
    <div class="product-image">
      <img src="/Project/images/jersey.jpg" height="500px" width="700px">
    </div>
    <div class="product-details">
      <h3>Adidas Men Manchester United FC Jersey</h3>
      <hr>
      <center><div class="links">
        <h4><b>Ebay</b></h4>
        <h6>Rs.2559</h6>
        <a href="https://www.ebay.com/itm/18-19-MANCHESTER-UNITED-HOME-JERSEY-RED-/132805086718" target="_blank">
        <button class="buy-button">Buy at Ebay</button>
        </a>
      </div></center>
      <hr>
      <center><div class="links">
        <h4><b>Myntra</b></h4>
        <h6>Rs.4999</h6>
        <a href="https://www.myntra.com/tshirts/adidas/adidas-men-red--black-striped-manchester-united-fc-home-football-jersey/6972341/buy" target="_blank">
      <button class="buy-button">Buy at Myntra</button>
    </a>
      </div></center>
      <hr>
      <center><div class="links">
        <h4><b>Adidas India</b></h4>
        <h6>Rs.4999</h6>
        <a href="https://shop.adidas.co.in/#!product/CG0040_mufchjsy" target="_blank">
        <button class="buy-button">Buy at Adidas India</button>
      </a>
      </div></center>
      <hr>
      <center><div class="links">
        <h4><b>United Megastore</b></h4>
        <h6>Rs.7313</h6>
        <a href="http://us.store.manutd.com/Manchester_United_Jerseys/Mens_adidas_Red_Manchester_United_2018_19_Home_Replica_Patch_Jersey" target="_blank">
        <button class="buy-button">Buy at United Megastore</button>
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
        <li>Red and black Manchester United FC home football Jersey</li>
        <li>has a V-neck </li>
        <li>short sleeves</li>
        <li>Manchester United Club crest embroidered on the front</li>
        <li>Made of breathable, quick-dry fabric that moves heat and moisture away from the body</li>
        <li>Warranty provided by Brand Owner / Manufacturer</li>   
      </ul>

      <br>
      <b style="font-size: 24px;">Material &amp; Care</b><br>
      56% recycled polyester and 44% polyester<br>
      Machine-wash
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
