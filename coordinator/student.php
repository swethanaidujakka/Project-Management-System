<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">students</li>
  </ol>
</nav>

<table class="table table-success table-striped">
  <thead class="table-primary" border="5px">
    <tr >
        <th>UserId</th>
        <th>TeamNumber</th>
        <th>TitleoftheProject</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody class="table-light">
      <?php
        $query="SELECT * FROM teamleader";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
           ?>
           <tr>
              <td><?php echo $row['UserId'] ?></td>
               <td><?php echo $row['TeamNumber'] ?></td>
               <td><?php echo $row['TitleoftheProject'] ?></td>
               <td><?php echo $row['Role'] ?></td>
               <td><button type="button" class="btn btn-danger"><a href="operations.php?ldelete=<?php echo $row['UserId']; ?>" class="text-white">Delete</a></button></td>
               
           </tr>

      <?php  }
      ?>
      <?php
        $query="SELECT * FROM teammember";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
           ?>
           <tr>
               <td><?php echo $row['UserId'] ?></td>
               <td><?php echo $row['TeamNumber'] ?></td>
               <td><?php echo $row['TitleoftheProject'] ?></td>
               <td><?php echo $row['Role'] ?></td>
               
               <td><button type="button" class="btn btn-danger"><a href="operations.php?mdelete=<?php echo $row['UserId']; ?>" class="text-white">Delete</a></button></td>
               
           </tr>

      <?php } ?>
  </tbody>
</table>