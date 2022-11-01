<?php
include('includes/header.php');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">PostDeadline</li>
  </ol>
</nav>


<div class="card" style="margin:150px">
  <div class="card-body">
    <h5 class="card-title">ProjectDeadLine</h5>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" align="center">
      <label for="area" style="color:red">Deadline</label><br>
      <textarea  name="deadline" class="border border-success" id="area" cols="100" ></textarea><br>
      <button type="submit" class="btn btn-primary" name="post">Post</button>
      <button type="submit" class="btn btn-danger" name="update">Update</button>
      <!-- <a href="" class="btn btn-success" role="button">Post</a> -->
    </form>
  </div>
</div>



<!-- ========POstDEADLINE======== -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['post']))
  {
    $uname = $_SESSION['UserName'];
    $message = $_POST['deadline'];
    if(!empty($message))
    {
      $query = "SELECT * FROM deadline WHERE coordinator='$uname'";
      $query_run=mysqli_query($conn,$query);
      $num_rows=mysqli_num_rows($query_run);
      if($num_rows==0)
      {
        $post="INSERT INTO deadline VALUES('$uname','$message')";
        if(mysqli_query($conn,$post))
        {
          echo "<script>alert('Posted Successfully')</script>";
        }
      }
      else if($num_rows==1)
      {
        echo "<script>alert('Deadline is Already POsted')</script>";
      }
    }
    else
    {
      echo "<script>alert('Pls Enter the Deadline')</script>";
    }
  }
  if(isset($_POST['update']))
  {

   $uname=$_SESSION["UserName"];
   $message=$_POST['deadline'];
   if(!empty($message))
   {
      $query = "SELECT * FROM deadline WHERE coordinator='$uname'";
      $query_run=mysqli_query($conn,$query);
      $num_rows=mysqli_num_rows($query_run);
      if($num_rows==1)
      {
        $update="UPDATE deadline SET message='$message' WHERE coordinator = '$uname'";
        if(mysqli_query($conn,$update))
        {
          echo "<script>alert('Updated Successfully')</script>";
        }
      }
      else
      {
        echo "<script>alert('You have not posted any deadline')</script>";
      }
   }
   else
    {
      echo "<script>alert('Pls Provide the Deadline for update')</script>";
    }
   

  }
}
?>