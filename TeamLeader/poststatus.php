<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">PostStatus</li>
  </ol>
</nav>





<div class="card" style="margin-left:150px;margin-right:150px">
  <div class="card-body">
    <h5 class="card-title" align="center">PROJECT STATUS</h5>
    <br>
    <br>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" align="center">
      <label for="Tno">TeamNumber</label>
      <select name="teamno" id="tno">
        <option value=""  selected="" disabled>--Select--</option>
        <?php
            $tl= $_SESSION['UserName'];
            echo $tl;
          $query="SELECT TeamNumber FROM Teamleader WHERE UserId='$tl'";
          $query_run  = mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($query_run))
          {?>
            <option value="<?php echo $row['TeamNumber']?>"><?php echo $row['TeamNumber'] ?></option>
         <?php }
        ?>
      </select>
      <br><br>
      <label for="pt">PojectTitle</label>
      <select name="ptitle" id="pt">
        <option value=""  selected="" disabled>--Select--</option>
        <?php
          $tl= $_SESSION['UserName'];
          $query="SELECT TitleoftheProject FROM teamleader WHERE UserId ='$tl'";
          $query_run  = mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($query_run))
          {?>
            <option value="<?php echo $row['TitleoftheProject']?>"><?php echo $row['TitleoftheProject'] ?></option>
         <?php }
        ?>
      </select>
      <br><br>
      <label for="m">Status</label>
      <input type="number" name="status" id="m"/>
      <br><br>
      <button type="submit" class="btn btn-warning" name="post">Post</button>
      <button type="submit" class="btn btn-warning" name="update">Update</button>
      <!-- <a href="" class="btn btn-success" role="button">Post</a> -->
    </form>
  </div>
</div>
</div>




<!-- ========POstSTatus======== -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['teamno']) && isset($_POST['ptitle']) && isset($_POST['status']))
  {
    $tno = $_POST['teamno'];
    $ptitle= $_POST['ptitle'];
    $tl= $_SESSION['UserName'];
    $status = $_POST['status'];
    if(!empty($tno) && !empty($ptitle) && !empty($status))
    {
      $query="SELECT * FROM status WHERE TeamNumber='$tno'";
      if($query_run  = mysqli_query($conn,$query))
      {
        $num_rows = mysqli_num_rows($query_run);
        if($num_rows == 0){
          $query="INSERT INTO status VALUES('$tno','$tl','TeamLeader','$ptitle','$status')";
          if($query_run=mysqli_query($conn,$query))
          {
            echo '<script>alert("Sucessfully Posted")</script>';
          }
        }
        else{
          echo "<script>alert('Status is ALREADY POSTED')</script>";
        }
      }
    }
    else
    {
      echo "<script>alert('Pls Enter the marks')<script>";
    }
  }
  if(isset($_POST['teamno']) && isset($_POST['ptitle']) && isset($_POST['status']))
  {
    $tno = $_POST['teamno'];
    $ptitle= $_POST['ptitle'];
    $tl= $_SESSION['UserName'];
    $status = $_POST['status'];
    if(!empty($tno) && !empty($ptitle) && !empty($status))
    {
      $query="SELECT * FROM status WHERE TeamNumber='$tno'";
      if($query_run  = mysqli_query($conn,$query))
      {
        $num_rows = mysqli_num_rows($query_run);
        if($num_rows == 1){
          $query="UPDATE status SET status='$status' WHERE TeamNumber='$tno'";
          if($query_run=mysqli_query($conn,$query))
          {
            echo '<script>alert("Sucessfully updated")</script>';
          }
        }
        else{
          echo "<script>alert('You have not posted any status')</script>";
        }
      }
    }
    else
    {
      echo "<script>alert('Pls enter status for update')<script>";
    }
  }
}
?>


