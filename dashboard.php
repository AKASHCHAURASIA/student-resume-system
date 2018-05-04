<?php
session_start();
require_once 'config/config.php';
$conn=db();
$user = $_SESSION['user'];
$log = $_SESSION['student'];
$res = mysqli_query($conn, "SELECT * FROM `users` WHERE Username='$user'");
while ($db_field = mysqli_fetch_assoc($res))
	{
		$batch=$db_field['batch'];
		$chk=$db_field['chk'];
		$flag=$db_field['flag'];
	}
	
$_SESSION['flag']=$flag;
if ($log != "log"){
  header ("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Student Database System</title>
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
	.flex-container {
  display: flex;
  flex-wrap: nowrap;
}

.flex-container > a > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
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
                               <div>Student</div>
                            </div>

                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        
                        <!--end search section-->
                    </li>
          <li class="selected">
                        <a href="dashboard.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
                     
                            
                      
                     
                 <li> <a href='update.php'><i class='fa fa-clock-o fa-fw'></i>Update Profile</a>
                    </li>
					<?php
 if($flag==1)					
	 {		 echo  "<li> <a href='sub-main.php'><i class='fa fa-clock-o fa-fw'></i>Monitor Your Class</a>
	 </li>";}
	 
					?>
					 <li sclass='logout-responsive' >
                        <a href='logout.php'><i class='fa fa-sign-out fa-fw'></i> Logout</a>
                    </li>
				
                <!-- end side-menu -->
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
            	
            </div><br>
            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome  <b><?php echo $_SESSION['name'];?></b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
                <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                   <h1 class="page-header" style="font-size: 18px;">Get Your TNP format Resume</h1>
				<a href='student_print.php'> <button class='btn btn-primary btn-md' >Print-Preview <i class='fa fa-print'></i></button></a>

                </div>

                <div>
                

				
                </div>
                <!--End Page Header -->
            </div>
			<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                   <h1 class="page-header" style="font-size: 18px;">Resume Formats</h1>
				   <div class="flex-container">
				<a href='student_print.php'> <div style="width:120px;height:150px;border:1px solid black;"><img src="images/format1.jpg" height=148px width=117px></div></a>
				<a href='student_print1.php'> <div style="width:120px;height:150px;border:1px solid black;"><img src="images/format2.jpg" height=148px width=117px></div></a>
				</div>
                </div>

                <div>
                

				
                </div>
                <!--End Page Header -->
            </div>
       
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
</body>

</html>