<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">projects</li>
  </ol>
</nav>

<table class="table table-success table-striped">
  <thead class="table-primary" border="5px">
    <tr >
        <th>TeamNumber</th>
        <th>Titleoftheproject</th>
    </tr>
  </thead>
  <tbody class="table-light">
     
   <?php 
				$tl= $_SESSION['UserName'];
				$query = "SELECT TeamNumber,TitleoftheProject FROM teamleader where UserId='$tl'";
				$query_run = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($query_run))
        {?>
            <tr>
              <td><?php echo $row['TeamNumber'] ?></td>
              <td><?php echo $row['TitleoftheProject'] ?></td>
            </tr>

        <?php 
        }
			?>
  
  </tbody>
</table>