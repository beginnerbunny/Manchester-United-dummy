<!DOCTYPE html>
<html>
<head>
	<!-- Required Meta tags-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Manchester United | Players</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	 <!-- Custom stylesheet-->
	<link rel="stylesheet" href="/Project/stylesheets/mystyle.css">
  	<link rel="stylesheet" href="/Project/stylesheets/style.css">

  	<style>
  	body{
  		background-color: black;
  	}
  		@media screen and (max-width: 600px) {
    		.column {
        		width: 100%;
    		}
		}

  		.column{
  			float: left;
  			width: 25px;
  			padding-left: 10px;
  		}

  		.row:after {
    		content: "";
    		display: table;
    		clear: both;
    		background-color: black;
		}
		.stack{
			background-color: black;
			margin:0px 54px;
		}
		.stack img{
			float:left;
			width: 310px;
			padding:10px; 
		}
		.foot li{
			display: inline-block;
		}

		.stack h1{
			text-align: justify;
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
					<a class = "nav-link" href="shop.php">Shop</a>
				</button>
				<button class="nav-item">
					<a class = "nav-link active" href="players.php">Players</a>
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
					<br>
				</div>
			</ul>
		</div>
	</nav>
	<h1 style="color: white;padding-left:680px">GoalKeepers</h1>
	<div class="stack">
		
			<img src="/Project/images/gk1.PNG" alt="GoalKeepers">
			<img src="/Project/images/gk2.PNG" alt="GoalKeepers">
			<img src="/Project/images/gk3.PNG" alt="GoalKeepers">
			<img src="/Project/images/gk4.PNG" alt="GoalKeepers">
	</div>
	<br>
	<!--<hr style="background-color: white;">-->
	<h1 style="color: white">Defenders</h1>
	<div class="stack">
		
			<img src="/Project/images/def1.PNG" alt="Defenders">
			<img src="/Project/images/def2.PNG" alt="Defenders">
			<img src="/Project/images/def3.PNG" alt="Defenders">
			<img src="/Project/images/def4.PNG" alt="Defenders">
	</div>
	<br>
	<h1 style="color: white">Midfielders</h1>
	<div class="stack">
		
			<img src="/Project/images/mf1.PNG" alt="Midfielders">
			<img src="/Project/images/mf2.PNG" alt="Midfielders">
			<img src="/Project/images/mf3.PNG" alt="Midfielders">
			<img src="/Project/images/mf4.PNG" alt="Midfielders">
	</div>
	<br>
	<h1 style="color: white">Strikers</h1>
	<div class="stack">		
			<img src="/Project/images/fw1.PNG" alt="Defenders">
			<img src="/Project/images/fw2.PNG" alt="Defenders">
			<img src="/Project/images/fw3.PNG" alt="Defenders">
			<img src="/Project/images/fw4.PNG" alt="Defenders">
	</div>
	<br>
<footer style="background-color: black; padding: 10px; font-size: 24px; color: white;">
		<center>Developed for FWT Project</center>
	</footer>
</body>
</html>
