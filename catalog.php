<?php
	include 'header.php';
?>


			
            <!-- Main -->
            <div id="main" class="wrapper style1">

                <div class="container">
				<section>
				
				<h3>Browse our ever-expanding catalog.</h3>
				
				<form form action="browse.php" method="POST">
					<div class="row gtr-uniform gtr-50">
						
						<?php

							$name = mysqli_real_escape_string($conn, $_GET['name']);

							
							$sql = "SELECT * FROM catalog WHERE c_name='%$name%'";
							$result = mysqli_query($conn, $sql);
							$queryResults = mysqli_num_rows($result);

							if ($queryResults > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									echo "<a href='catalog.php?name=".$row['c_name']."&release=".$row['c_release']."'><div>
										<h3>".$row['c_category']."</h3>
										<h3>".$row['c_brand']."</h3>
										<h3>".$row['c_name']."</h3>
										<h3>".$row['c_release']."</h3>
										</div></a>";
								}
							}
							else {
								echo "No results found.";
							}
							
						?>
					</div>
				</form>
				</section>
			</div>
			
		</div>
	</section>
            
<?php
	include 'footer.php';
?>   