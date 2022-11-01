<?php
	include('includes/header.php')
?>
		<div class="col-div-3">
			<div class="box">
			<?php 
			$query = "SELECT * FROM guide";
			$query_run = mysqli_query($conn,$query);
			$count = mysqli_num_rows($query_run);
				echo "<p>$count <br><span>Guides</span></p>";
			?>
			<i class="fa fa-users box-icon"></i>
			</div>
		</div> 
        <div class="col-div-3">
			<div class="box">
			<?php 
            
			$query = "SELECT * FROM teamleader";
			$query_run = mysqli_query($conn,$query);
			$count = mysqli_num_rows($query_run);
				echo "<p>$count <br><span>TeamLeaders</span></p>";
		?>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
        <div class="col-div-3">
			<div class="box">
			<?php 
            
			$query = "SELECT * FROM teammember";
			$query_run = mysqli_query($conn,$query);
			$count = mysqli_num_rows($query_run);
				echo "<p>$count <br><span>TeamMember</span></p>";
		?>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
			<?php 
            
			$query = "SELECT * FROM projects";
			$query_run = mysqli_query($conn,$query);
			$count = mysqli_num_rows($query_run);
				echo "<p>$count <br><span>Projects</span></p>";
		?>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
	</div>


	