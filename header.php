<?php
	session_start();
	include 'includes/dbhSearch.inc.php';
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>SoleStack: Reseller Network</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?v=<?php echo time(); ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />-->
		<script src="https://kit.fontawesome.com/8c691d8c8b.js"></script>
		<script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".searchbtn").click(function(){
					$(this).toggleClass("bg-green");
					$(".fas").toggleClass("color-white");
					$(".input").focus().toggleClass("active-width").val('');
				});
			});
		</script>
	</head>
	<body class="is-preload landing">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1 id="logo"><a href="index.php"><img src="images/banner01.png" width="153" height="35" alt="" style="position:absolute; top:10px" /></a>
						<!--<div class="searchbox" style="top:10px; left:200px">
							<input type="text" class="input">
								<div class="searchbtn">
							<i class="fas fa-search"></i>
							</div>
						</div>-->
					</h1>
					<nav id="nav">
						
                    <ul>
						<!--<li><form action="browse.php" method="POST">
							<input type="text" name="search" placeholder="Search">
							<button type="submit" name="submit-search" class="button fit small">Go</button></form></li>-->
                        <li><a href="browse.php">Browse</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <!--<li><a href="login.php">Login</a></li>-->
						
						<?php
							if (isset($_SESSION['u_id'])) {
								echo '<li>
								<a href="#">Account</a>
								<ul>  
									<li><a href="#" class="button primary small fit">Profile</a></li>
									<li><a href="#" class="button primary small fit">Dashboard</a></li>
									
									<li><a href="#" class="button primary small fit">Settings</a></li>
								</ul>
								<li><form action="includes/logout.inc.php" method="POST">
									<button type="submit" name="submit" class="button fit small">Sign Out</button>
								</form></li>';
							}
							else {
								echo '<li><a href="login.php">Login</a></li>';
							}
						?>
						
                        <!--<li><a href="#" class="button primary">Become a Vendor</a></li>-->
						
						
                    </ul>
                </nav>
            </header>