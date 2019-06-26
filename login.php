<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required Meta tags-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Manchester United | Login</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- Custom stylesheet-->
  <link rel="stylesheet" href="/Project/stylesheets/mystyle.css">
  <link rel="stylesheet" href="/Project/stylesheets/style.css">

</head>
<body style="background: linear-gradient(to top left, #660066 0%, #ff0000 100%);">
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
          <a class = "nav-link " href="homepage.php">About</a>
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


<form class="box" action="login.php" method="post">
  <div style="background-; margin: 100px 380px; padding: 10px 190px; border-radius: 25px;">
    <center><h1 style="color: white;padding-bottom: 10px">Login</h1></center>
  <center><input style="border-radius: 25px; padding: 3px 8px;margin: 2px;" type="text" name="username" placeholder="Username" pattern="[A-Za-z]+" required value="<?php echo $username; ?>"></center>
  <br>
  <center><input style="border-radius: 25px; padding: 3px 8px;margin: 2px;" type="password"  required name="password" placeholder="Password"></center>
  <br>
  <center><input style="border-radius: 25px; padding: 3px 8px; margin: 2px;" type="submit" name="login_user" value="Login"></center>
  <p style="color: white;"><?php include('errors.php');?></p>
  <center><p style="color: white">Not a member? <a href="register.php">SIGN UP</a></p></center>
</div>
</form>

<footer style="background-color: black; padding: 10px; font-size: 24px; color: white;">
    <center>Developed for FWT Project</center>
  </footer>

  </body>

</html>