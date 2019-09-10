<?php
	include 'header.php';

?>


			
            <!-- Main -->
            <div id="main" class="wrapper style1">

                <div class="container">
				<section>
				<br>
				<h3>Signed up successfully.</h3>
				<h5>Please check your inbox to confirm your email.</h5>
				<form method="POST" action="includes/signup.inc.php">
					<div class="row gtr-uniform gtr-50">
						<div class="col-8 col-12-xsmall">
						<?php
							if (isset($_GET['uid'])) {
								$uid = $_GET['uid'];
								echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
							}
							else {
								echo '<input type="text" name="uid" placeholder="Username">';
							}
						?>	
						</div>
						<div class="col-8 col-12-xsmall">
							<input type="password" name="pwd" placeholder="Password">
						</div>
						<div class="col-12">
							<h5><a href="login.php">Forgot your password?</a></h5>
						</div>
						<div class="col-12">
							<input type="submit" name="submit" value="Login" class="primary" />
						</div>
		
					</div>
				</form>
				</section>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<?php
			/*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			if (strpos($fullUrl, "signup=empty") == true) {
				echo "Fill in all fields to continue.";
				
			}
			elseif (strpos($fullUrl, "signup=char") == true) {
				echo "Please use valid characters.";
				
			}
			elseif (strpos($fullUrl, "signup=email") == true) {
				echo "Please use valid email.";
				
			}
			elseif (strpos($fullUrl, "signup=success") == true) {
				echo "Sign up complete.";
				
			}*/

			if (!isset($_GET['signup'])) {
			
			}
			else {
				$signupCheck = $_GET['signup'];

				if ($signupCheck == "empty") {
					echo "Fill in all fields to continue.";
				}
				elseif ($signupCheck == "char") {
					echo "Please use valid characters.";
				}
				elseif ($signupCheck == "email") {
					echo "Please use valid email.";
				}
				elseif ($signupCheck == "success") {
					//echo "Sign up complete.";
					header("Location: ../solestack/success.php");
				}
			}

?>
                    
                    

                </div>
            </div>

            

        </div>
		
		
	

	</body>
	
</html>