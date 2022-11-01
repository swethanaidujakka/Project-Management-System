<?php
include('connect.php');
session_start();
$TeamNumber=$_POST["TeamNumber"];
$Role=$_POST["Role"];
$UserId=$_POST["UserId"];
$Password=$_POST["Password"];
$TitleoftheProject=$_POST["TitleoftheProject"];
if($Role=="TeamLeader")
{
    $query="SELECT * FROM teamleader WHERE TeamNumber = '$TeamNumber' and UserId='$UserId'";
    if($query_run=mysqli_query($conn,$query))
    {
        $num=mysqli_num_rows($query_run);
        if($num==1)
        {
            echo '<script>alert("TeamNumber and TeamLeader is already taken")</script>';
        }
        else{
            $query = "INSERT INTO teamleader VALUES('$TeamNumber','$UserId','$Password','$TitleoftheProject','$Role')";
            mysqli_query($conn,$query);
            $query = "INSERT INTO projects VALUES('$TeamNumber','$TitleoftheProject')";
            mysqli_query($conn,$query);
            echo '<script>alert("Registration successful")</script>';
            

        }

    }

}
elseif($Role="TeamMember")
{
    $query="SELECT * FROM teammember WHERE TeamNumber='$TeamNumber'";
    if($query_run=mysqli_query($conn,$query))
    {
        $num=mysqli_num_rows($query_run);
        if($num>3)
        {
            echo '<script>alert("TeamLeader  Capacity already Exceded")</script>';
        }
        else{
            $query = "INSERT INTO teammember VALUES('$TeamNumber','$UserId','$Password','$TitleoftheProject','$Role')";
            mysqli_query($conn,$query);
            echo '<script>alert("Registration Successful")</script>';

        }

    }
}
?>