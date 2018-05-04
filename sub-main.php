<?php
session_start();
$user = $_SESSION['user'];
require_once 'config/config.php';

$conn=db();
$log = $_SESSION['flag'];
$msg = "";

if ($log !=1){
  header ("Location: index.php");
}
$res = mysqli_query($conn, "SELECT * FROM `users` WHERE Username='$user'");
while ($db_field = mysqli_fetch_assoc($res))
	{
		$batch=$db_field['batch'];
		$branch=$db_field['branch'];
	}
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | PR Panel</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style1.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
	 <link href="css/stud.css" rel="stylesheet" type="text/css"/>
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
<style>
h4{margin-top:0 !important;}
.list-group-item{
min-height:40px;
}
.dept{
margin:0 auto;
}
.list:hover{
background:#972217;
transition:linear all 0.40s;
margin-left:10px;
}
.selected a{
color:black;
}
</style>
   </head>
   
<body>
    <!--  wrapper -->
    <div id="wrapper" >
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse" >
                <!-- side-menu -->
                <ul class="nav" id="side-menu" style="background-color:#323232;">
                    <li>
                        <!-- user image section-->
                        <div class="user-section" style="background-color: #323232">
                            
                            <div class="user-info" style="position: relative; left: 5%;">
                               <div>PR</div>
                            </div>

                        </div>
                        <!--end user image section-->
                    </li>
					<li class="list"> <a href='dashboard.php'>Home</a></li>
                    
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
               
                <!--End Page Header -->
            </div>
           <div class="header">
            	<form action="logout.php" method="post">
            		<div style="height: 100%; position: absolute; right: 0px;">
					<span style="color:white"><?php echo $branch?> - <?php echo $batch?></span>
            			<button type="submit" name="logout" class="btn bg-maroon btn-flat margin logout">Logout</button>
            		</div>
            	</form>
            </div><br>
			<div class="row">
					<!-- Welcome -->
					<div class="col-lg-12">
						<div class="alert alert-info">
							<i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome  <b><?php echo $_SESSION['name'];?></b>
							<input type="hidden" id="search1" name="search1" value="<?php echo $batch?>">				
							<input type="hidden" id="search2" name="search2" value="<?php echo $branch?>">
						</div>
					</div>
					<!--end  Welcome -->
			</div>
			<div id="mainDiv">
					
			</div>     	
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
	<script src="assets/plugins/jquery-1.10.2.js"></script>
		<script>
	$(document).ready(function () {
		search();
    $(".list").click(function () {
        var isActive = ($(this).hasClass('selected')) ? true : false; // checks if it is already active
        $('.list').removeClass('selected');
        if (!isActive) $(this).addClass('selected'); // set active only if it was not active
    });
});
		 function search()
		   { 
			   
		var str = document.getElementById("search1").value;

		var str1 = document.getElementById("search2").value;

		str=str+","+str1;
			   var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("mainDiv").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "search.php?q="+str, true);
				xmlhttp.send();
			   
		   }
	</script>
    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
	

</body>

</html>