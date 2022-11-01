<?php
    include '../connect.php';
?>
<?php
    if(isset($_GET['ldelete']))
    {
        $user=$_GET['ldelete'];
        $delete="DELETE FROM teamleader WHERE UserId='$user'";
        if($query_run=mysqli_query($conn,$delete))
        {
            header("Location:student.php");
        }

    }
    if(isset($_GET['mdelete']))
    {
        $user=$_GET['mdelete'];
        $delete="DELETE FROM teammember WHERE UserId='$user'";
        if($query_run=mysqli_query($conn,$delete))
        {
            header("Location:student.php");
        }

    }
    if(isset($_GET['gdelete']))
    {
        $user=$_GET['gdelete'];
        $delete="DELETE FROM guide WHERE UserId='$user'";
        if($query_run=mysqli_query($conn,$delete))
        {
            header("Location:guide.php");
        }

    }
    if(isset($_GET['pdelete']))
    {
        $project=$_GET['pdelete'];
        $delete="DELETE FROM projects WHERE TitleoftheProject='$project'";
        if($query_run=mysqli_query($conn,$delete))
        {
            header("Location:project.php");
        }

    }
    
?>