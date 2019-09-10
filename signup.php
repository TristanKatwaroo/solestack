<?php
	include 'header.php';

?>


			
            <!-- Main -->
            <div id="main" class="wrapper style1">

                <div class="container">
				<section>
				<br>
				<h3>Create your account to get started.</h3>
				<h5><?php
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
							echo "Please fill in all fields to continue.";
						}
						elseif ($signupCheck == "char") {
							echo "Please enter a name with valid characters.";
						}
						elseif ($signupCheck == "email") {
							echo "Please use a valid email address.";
						}
						elseif ($signupCheck == "usertaken") {
							echo "Username already in use.";
						}
						elseif ($signupCheck == "password") {
							echo "Passwords do not match.";
						}
						elseif ($signupCheck == "agree") {
							echo "Please confirm that you agree to the Terms of Service and Privacy Policy.";
						}
						elseif ($signupCheck == "success") {
							//echo "Sign up complete.";
							header("Location: ../solestack/success.php");
						}
					}

				?></h5>
				<form method="POST" action="includes/signup.inc.php">
					<div class="row gtr-uniform gtr-50">
						<div class="col-4 col-12-xsmall">
						<?php
							if (isset($_GET['first'])) {
								$first = $_GET['first'];
								echo '<input type="text" name="first" placeholder="First Name" value="'.$first.'">';
							}
							else {
								echo '<input type="text" name="first" placeholder="First Name">';
							}
						?>	
						</div>
						<div class="col-4 col-12-xsmall">
						<?php
							if (isset($_GET['last'])) {
								$last = $_GET['last'];
								echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'">';
							}	
							else {
								echo '<input type="text" name="last" placeholder="Last Name">';
							}
						?>	
						</div>
						<div class="col-8 col-12-xsmall">
						<?php
							if (isset($_GET['email'])) {
								$email = $_GET['email'];
								echo '<input type="text" name="email" placeholder="Email Address" value="'.$email.'">';
							}
							else {
								echo '<input type="text" name="email" placeholder="Email Address">';
							}
						?>
						</div>
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
						<div class="col-8 col-12-xsmall">
							<input type="password" name="cpwd" placeholder="Confirm Password">
						</div>
						<div class="col-6 col-12-medium">
							<input type="checkbox" id="agree" name="agree">
							<label for="agree">By signing up, you agree to the Terms of Service and Privacy Policy.</label>
						</div>
						<div class="col-12">
							<input type="submit" name="submit" value="Sign Up" class="primary" />
						</div>
						<div class="col-12">
							<a href="login.php" class="button">Already have an account? Click here to log in.</a>
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

                    
                    

                </div>
            </div>

            

        </div>
		
		
	

	</body>
	
</html>