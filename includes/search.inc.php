<?php
	include '../header.php';
?>

<?php
	if(isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM catalog WHERE c_name LIKE '%$search%' OR c_brand LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div>
					<h3>".$row['c_category']."</h3>
					<h3>".$row['c_brand']."</h3>
					<h3>".$row['c_name']."</h3>
					<h3>".$row['c_release']."</h3>
					</div>";
			}
		}
		else {
			echo "No results found.";
		}
	}
?>