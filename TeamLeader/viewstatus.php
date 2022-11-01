<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">ViewStatus</li>
  </ol>
</nav>


<div class="card" style="margin-left:150px;margin-right:150px">
  <div class="card-body">
    <h5 class="card-title" align="center">PROJECT STATUS</h5>
    <br>
    <br>
    <?php
      $tl=$_SESSION['UserName'];
      $query = "SELECT * FROM status WHERE UserName = '$tl'";
      $query_run=mysqli_query($conn,$query);
      $row=mysqli_fetch_assoc($query_run);
      $status = $row['status'];
      ?>
    <div class="progress">
      <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $status;?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><?php echo $status ?></div>
    </div>
  </div>
</div>