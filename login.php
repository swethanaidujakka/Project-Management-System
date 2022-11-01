<?php
    include('connect.php');
    session_start();
   
        $UserId=$_POST["UserId"];
        $Password=$_POST["Password"];
        $Role=$_POST["Role"];
        if($Role=='admin')
        {
            $query = "SELECT * FROM administrator WHERE UserId = '$UserId'";
            if($query_run = mysqli_query($conn,$query))
            {
                $num_rows = mysqli_num_rows($query_run);
                if($num_rows == 0){
                    echo 'Invalid UserName or Password';
                }
                else if($num_rows == 1){
                    $row= mysqli_fetch_row($query_run);
                    $id = $row[0];
                    $_SESSION['UserName']=$id;
                    echo 'Successfully Logged in';
                    header('Location: admin/dashboard.php');
                }
            }
        }
        elseif($Role=='Coordinator')
        {
            $query = "SELECT * FROM coordinator WHERE UserId = '$UserId'";
            if($query_run = mysqli_query($conn,$query))
            {
                $num_rows = mysqli_num_rows($query_run);
                if($num_rows == 0){
                    echo 'Invalid UserName or Password';
                }
                else if($num_rows == 1){
                    $row= mysqli_fetch_row($query_run);
                    $id = $row[0];
                    $_SESSION['UserName']=$id;
                    echo 'Successfully Logged in';
                    header('Location: coordinator/dashboard.php');
                }
            }
        }
        elseif($Role=='Guide')
        {
            $query = "SELECT * FROM guide WHERE UserId = '$UserId'";
            if($query_run = mysqli_query($conn,$query))
            {
                $num_rows = mysqli_num_rows($query_run);
                if($num_rows == 0){
                    echo 'Invalid UserName or Password';
                }
                else if($num_rows == 1){
                    $row= mysqli_fetch_row($query_run);
                    $id = $row[1];
                    $_SESSION['UserName']=$id;
                    echo 'Successfully Logged in';
                    header('Location: guide/dashboard.php');
                }
            }
        }
        elseif($Role=='TeamLeader')
        {
            $query = "SELECT * FROM teamleader WHERE UserId = '$UserId' AND `Role`='$Role' ";
            if($query_run = mysqli_query($conn,$query))
            {
                $num_rows = mysqli_num_rows($query_run);
                if($num_rows == 0){
                    echo 'Invalid UserName or Password';
                }
                else if($num_rows == 1){
                    $row= mysqli_fetch_row($query_run);
                    $id = $row[1];
                    $_SESSION['UserName']=$id;
                    echo 'Successfully Logged in';
                    header('Location: TeamLeader/dashboard.php');
                }
            }
        }
        elseif($Role=='TeamMember')
        {
            $query = "SELECT * FROM teammember WHERE UserId = '$UserId' AND `Role`='$Role' ";
            if($query_run = mysqli_query($conn,$query))
            {
                $num_rows = mysqli_num_rows($query_run);
                if($num_rows == 0){
                    echo 'Invalid UserName or Password';
                }
                else if($num_rows == 1){
                    $row= mysqli_fetch_row($query_run);
                    $id = $row[1];
                    $_SESSION['UserName']=$id;
                    echo 'Successfully Logged in';
                    header('Location: TeamMember/dashboard.php');
                }
            }
        }
?>