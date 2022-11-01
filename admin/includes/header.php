<?php
	session_start();
	include('../connect.php');
?>
<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<style>
			a{
				text-decoration:none;
			}
			input{
				margin-left:50px;
			}
			select{
				margin-left:80px;
			}
		</style>
		

    </head>
	<body>
		
		<div id="mySidenav" class="sidenav"">
	  <a href="dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="coordinator.php"class="icon-a"><i class="fa fa-users icons"></i>   Coordinators</a>
	  <a href="guide.php"class="icon-a"><i class="fa fa-users icons"></i>   Guides</a>
	  <a href="student.php"class="icon-a"><i class="fa fa-graduation-cap"></i>   Students
		</a>
	  <a href="project.php"class="icon-a"><i class="fa fa-list icons"></i>   Projects</a>
	  <!-- <a href="postdeadline.php"class="icon-a"><i class="fa fa-list-alt icons"></i>   Postdeadline</a> -->
	  <a href="viewstatus.php"class="icon-a"><i class="fa fa-check icons"></i>   ViewStatus</a>
	  <!-- <a href="postmarks.php"class="icon-a"><i class="fa fa-list-alt icons"></i>   Postmarks</a>
	  <a href="viewmarks.php"class="icon-a"><i class="fa fa-list-alt icons"></i>   Viewmarks</a> -->
      <a href="logout.php"class="icon-a"><i class="fa fa-arrow-left"></i>   Logout</a>

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<div class="horzontial">
        <span style="font-size:30px;cursor:pointer; color: black;" class="nav"  >☰ ADMIN</span>
	<span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  >☰ ADMIN</span>
    </div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

	</script>
	

	</body>
	</html>