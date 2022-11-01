<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">ViewStatus</li>
  </ol>
</nav>



<table class="table table-success table-striped">
  <thead class="table-primary" border="5px">
    <tr >
        <th>TeamNumber</th>
        <th>Teamleader</th>
        <th>Titleoftheproject</th>
        <th>Status</th>
    </tr>
  </thead>
  <tbody class="table-light">
  <?php
      $query="SELECT * FROM status";
      $query_run = mysqli_query($conn,$query);
      while($row = mysqli_fetch_assoc($query_run))
      {
      ?>
        <tr>
            <td><?php echo $row['TeamNumber'] ?></td>
            <td><?php echo $row['UserName'] ?></td>
            <td><?php echo $row['TitleoftheProject'] ?></td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $row['status'];?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><?php echo $row['status'] ?></div>
              </div>
            </td>
          </tr>

      <?php  }
      ?>
  </tbody>
</table>