<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">ViewMarks</li>
  </ol>
</nav>



<table class="table table-success table-striped">
  <thead class="table-primary" border="5px">
    <tr >
        <th>TeamNumber</th>
        <th>UserId</th>
        <th>Titleoftheproject</th>
        <th>Marks</th>

        <!-- <th  align="center">Action</th> -->
    </tr>
  </thead>
  <tbody class="table-light">
      <?php
        $query="SELECT * FROM projectmarks";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
           ?>
           <tr>
               <td><?php echo $row['TeamNumber'] ?></td>
               <td><?php echo $row['UserId'] ?></td>
               <td><?php echo $row['TitleoftheProject'] ?></td>
               <td><?php echo $row['marks'] ?></td>
               
               <!-- <td>
                 <button type="button" class="btn btn-success"><a href="operations.php?update=" class="text-white">update<button>
                 <button type="button" class="btn btn-danger"><a href="operations.php?delete=" class="text-white">Delete</button>
                 </td> -->
           </tr>

      <?php  }
      ?>
  </tbody>
</table>