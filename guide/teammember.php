<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">TeamMembers</li>
  </ol>
</nav>

<table class="table table-success table-striped">
  <thead class="table-primary" border="5px">
    <tr >
        <th>UserId</th>
        <th>Titleoftheproject</th>
        <th>Role</th>
        <!-- <th>Action</th> -->
    </tr>
  </thead>
  <tbody class="table-light">
      <?php
      $guide = $_SESSION['UserName'];
      $query="SELECT TeamNumber FROM guide Where UserId = '$guide'";
      $query_run = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($query_run);
      $tno = $row['TeamNumber'];
        $query="SELECT * FROM teammember WHERE TeamNumber = '$tno'";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
           ?>
           <tr>
               <td><?php echo $row['UserId'] ?></td>
               <td><?php echo $row['TitleoftheProject'] ?></td>
               <td><?php echo $row['Role'] ?></td>
               <!-- <td><button type="button" class="btn btn-danger"><a href="operations.php?delete=<?php echo $row['UserId']; ?>" class="text-white">Delete</a></button></td> -->
               
           </tr>

      <?php  }
      ?>
  </tbody>
</table>