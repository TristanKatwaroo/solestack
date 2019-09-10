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
								<div class="col-8 col-12-xsmall">
									<input type="text" name="search" placeholder="Search">
								</div>
								<div class="col-4">
									<input type="submit" name="submit-search" value="Go" class="primary"/>
								</div>
								<?php
									if(isset($_POST['submit-search'])) {
										$search = mysqli_real_escape_string($conn, $_POST['search']);
										$sql = "SELECT * FROM catalog WHERE c_name LIKE '%$search%' OR c_brand LIKE '%$search%'";
										$result = mysqli_query($conn, $sql);
										$queryResults = mysqli_num_rows($result);

										echo "".$queryResults." results found.";

										if ($queryResults > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
												echo "<a href='catalog.php?name=".$row['c_name']."'><div>
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
									}
								?>
							</div>
						</form>
					</section>
			</div>
		
            
<?php
	include 'footer.php';
?>   