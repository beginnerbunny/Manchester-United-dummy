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
	
	<title>Manchester United | Shop | Shoes</title>

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
      <img src="/Project/images/shoes.jpeg" height="500px" width="700px">
    </div>
    <div class="product-details">
      <h3>Adidas NEMEZIZ Messi Football Shoes for Men</h3>
      <hr>
      <center><div class="links">
        <h4><b>Flipkart</b></h4>
        <h6>Rs.6649</h6>
        <a href="https://www.flipkart.com/adidas-nemeziz-messi-17-1-fg-football-shoes-men/p/itmf3xpzrcyzznuf?pid=SHOEVMGFGZRZEJEF&lid=LSTSHOEVMGFGZRZEJEF6S2BEN&marketplace=FLIPKART&srno=s_1_22&otracker=search&fm=SEARCH&iid=3399fa3f-778a-49a7-b48d-4bc8a004e196.SHOEVMGFGZRZEJEF.SEARCH&ppt=SearchPage&ppn=Search&ssid=1qawbwsqww0000001540729836631&qH=a5caf7fc4e3fe3a9" target="_blank">
        <button class="buy-button">Buy at Flipkart</button>
        </a>
      </div></center>
      <hr>
      <center><div class="links">
        <h4><b>Jabong</b></h4>
        <h6>Rs.6999</h6>
        <a href="https://www.jabong.com/adidas-white-nemeziz-messi-171-fg-football-shoes-4882122.htm?pos=1" target="_blank">
      <button class="buy-button">Buy at Jabong</button>
    </a>
      </div></center>
      <hr>
      <center><div class="links">
        <h4><b>Amazon India</b></h4>
        <h6>Rs.6999</h6>
        <a href="https://shop.adidas.co.in/#!product/BY2405_nemezizmessi171fg" target="_blank">
        <button class="buy-button">Buy at Amazon India</button>
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
        <li>Soft lightweight synthetic leather upper</li>
        <li>Stud configuration</li>
        <li>Flexible Traction configured upper</li>
        <li>Nemeziz wording on the back</li>
        <li>3-Stripes on side</li>
        <li>Warranty provided by brand owner/manufacturer</li>   
      </ul>

      <br>
      <b style="font-size: 24px;">Material &amp; Care</b><br>
      Synthetic leather<br>
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
