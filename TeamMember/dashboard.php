<?php

	include('includes/header.php');
?>
		
		<div class="col-div-3">
			<div class="box">
			<?php 
				$tm= $_SESSION['UserName'];
				$query = "SELECT TeamNumber FROM teammember where UserId='$tm'";
				$query_run = mysqli_query($conn,$query);
				$row = mysqli_fetch_row($query_run);
				$teamNo=$row[0];
				$query = "SELECT * FROM Projects where TeamNumber = '$teamNo'";
				$query_run = mysqli_query($conn,$query);
				$count = mysqli_num_rows($query_run);
				echo "<p>$count <br><span>Projects</span></p>";
			?>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>


	