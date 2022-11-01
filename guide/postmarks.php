<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">PostMarks</li>
  </ol>
</nav>


<div class="container-fluid">
<div class="card" style="margin-left:150px;margin-right:150px">
  <div class="card-body">
    <h5 class="card-title" align="center">ProjectMarks</h5>
    <br>
    <br>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" align="center">
      <label for="Tno">TeamNumber</label>
      <select name="teamno" id="tno">
        <option value=""  selected="" disabled>--Select--</option>
        <?php
            $guide = $_SESSION['UserName'];
            $query="SELECT TeamNumber FROM guide Where UserId = '$guide'";
            $query_run = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($query_run);
            $tno = $row['TeamNumber'];
          $query="SELECT TeamNumber FROM projects WHERE TeamNumber = '$tno'";
          $query_run  = mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($query_run))
          {?>
            <option value="<?php echo $row['TeamNumber']?>"><?php echo $row['TeamNumber'] ?></option>
         <?php }
        ?>
      </select>
      <br><br>
      <label for="Tname">NAME</label>
      <select name="sname" id="Tname">
        <option value=""  selected="" disabled>--Select--</option>
        <?php
            $guide = $_SESSION['UserName'];
            $query="SELECT TeamNumber FROM guide Where UserId = '$guide'";
            $query_run = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($query_run);
            $tno = $row['TeamNumber'];
            $query="SELECT UserId FROM teamleader WHERE TeamNumber = '$tno'";
            $query_run  = mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($query_run);
            ?>
            <option value="<?php echo $row['UserId']?>"><?php echo $row['UserId'] ?></option>
          <?php
            $query="SELECT UserId FROM teammember WHERE TeamNumber = '$tno'";
            $query_run  = mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($query_run))
          {?>
            <option value="<?php echo $row['UserId']?>"><?php echo $row['UserId'] ?></option>
         <?php }
        ?>
      </select>
      <br><br>
      <label for="pt">PojectTitle</label>
      <select name="ptitle" id="pt">
        <option value=""  selected="" disabled>--Select--</option>
        <?php
          $query="SELECT TitleoftheProject FROM projects WHERE TeamNumber = '$tno'";
          $query_run  = mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($query_run))
          {?>
            <option value="<?php echo $row['TitleoftheProject']?>"><?php echo $row['TitleoftheProject'] ?></option>
         <?php   }
        ?>
      </select>
      <br><br>
      <label for="m">Marks</label>
      <input type="number" name="marks" id="m"/>
      <br><br>
      <button type="submit" class="btn btn-primary" name='post'>Post</button>
      <button type="submit" class="btn btn-danger" name='update' >update</button>
      <!-- <a href="" class="btn btn-success" role="button">Post</a> -->
    </form>
  </div>
</div>
</div>




<!-- ========POstMarks======== -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['teamno']) && isset($_POST['sname']) && isset($_POST['ptitle']) && isset($_POST['marks']))
  {
    $tno = $_POST['teamno'];
    $uname=$_POST['sname'];
    $ptitle= $_POST['ptitle'];
    $marks = $_POST['marks'];
    if(!empty($tno) && !empty($uname) && !empty($ptitle) && !empty($marks))
    {
      if(isset($_POST['post']))
      {
        $query="SELECT * FROM projectmarks WHERE TeamNumber='$tno' AND UserId='$uname'";
      if($query_run  = mysqli_query($conn,$query))
      {
        $num_rows = mysqli_num_rows($query_run);
        if($num_rows == 0){
          $query="INSERT INTO projectmarks VALUES('$tno','$uname','$ptitle','$marks')";
          if($query_run=mysqli_query($conn,$query))
          {
            echo '<script>alert("Sucessfully Posted")</script>';
          }
        }
        else{
          echo "<script>alert('MARKS ARE ALREADY POSTED')</script>";
        }
      }
      }
      if(isset($_POST['update']))
      {
        $query="SELECT * FROM projectmarks WHERE TeamNumber='$tno' AND UserId='$uname'";
        if($query_run  = mysqli_query($conn,$query))
        {
          $num_rows = mysqli_num_rows($query_run);
          if($num_rows == 1){
            $query="UPDATE projectmarks SET marks='$marks' WHERE TeamNumber='$tno' AND UserId='$uname' AND TitleoftheProject='$ptitle'";
            if($query_run=mysqli_query($conn,$query))
            {
              echo '<script>alert("Sucessfully UPDAted")</script>';
            }
          }
          else{
            echo "<script>alert('MARKS ARE NOT YET POSTED')</script>";
          }
        }

      }
    }
    else
    {
      echo "<script>alert('Pls Enter the marks')<script>";
    }
  }
}
?>