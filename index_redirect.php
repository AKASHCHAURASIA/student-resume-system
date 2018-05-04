<?php
session_start();
$user = $_SESSION['user'];

$log = $_SESSION['student'];
$msg = "";
$flag="1";
if ($log != "log"){
  header ("Location: index.php");
}
require_once 'config/config.php';

//login log check
        $SQL = "SELECT * FROM users WHERE Username='$user'";
        $conn = db();
		$res = mysqli_query($conn, $SQL);
		while ($db_field = mysqli_fetch_assoc($res))
		{
			
			
			$chk = $db_field['chk'];
			$uid = $db_field['u_id'];
			$grp=$db_field['Group1'];
			$email=$db_field['email'];
			$branch = $db_field['branch'];
			$group = $db_field['u_group'];
			$batch= $db_field['batch'];
			//$flag=$db_field['flag'];
		}
		if($branch!='' || $batch!=''|| $group!='')
		{ header('Location: update.php');
		}   
if(isset($_POST['update'])){
   
    $u_branch = $_POST['u_branch'];
    $u_group = $_POST['u_group'];
	$u_batch= $_POST['batch'];
	$u_course= $_POST['course'];
	
    
    
    $sql = "UPDATE users SET user = '".$user."', u_group = '".$u_group."' ,branch = '".$u_branch."', batch = '".$u_batch."',course = '".$u_course."',chk='0' WHERE Username = '".$user."' ";
    if($result = mysqli_query($conn, $sql)){
		if($chk==0){
		echo $SQL = "INSERT INTO `student`.`personal_data` (`u_id`, `name`, `fathername`, `mothername`, `dob`, `sex`, `caddress`, `paddress`, `nationality`, `email`, `mobileno`, `languages`, `interest`, `objective`, `photo`) VALUES ('$uid', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";


                   echo $result = mysqli_query($conn, $SQL);

    
    
	
	
 echo $SQL = "
INSERT INTO `student`.`achievements` (`u_id`, `achievement`) VALUES ('$uid', '')";
 echo  $result = mysqli_query($conn, $SQL);	
  

    
 echo $SQL = "
INSERT INTO `student`.`cocurriculars` (`u_id`, `cocurricular`) VALUES ('$uid', '')"; echo $result = mysqli_query($conn, $SQL); 
   
   
	
   
	
	
	echo $SQL = "
INSERT INTO `student`.`educations qualification` (`u_id`, `Degree`, `Institute/Uni`, `Marks`, `%/CGPA`, `Year`, `Specialization`) VALUES ('$uid', '', '', '', '', '', '')";  
 echo $result = mysqli_query($conn, $SQL); 
	
	
		 
	
	
	echo $SQL = "
INSERT INTO `student`.`hobbies` (`u_id`, `hobby`) VALUES ('$uid', '')"; 
 echo  $result = mysqli_query($conn, $SQL); 



	
	
	
       echo  $SQL = "
INSERT INTO `student`.`projects` (`u_id`, `description`, `level`) VALUES ('$uid', '', '')";  
    echo   $result = mysqli_query($conn, $SQL);
	
	
	 
	
	
  echo $SQL = "
INSERT INTO `student`.`references` (`u_id`, `reference`) VALUES ('$uid', '')";  echo $result = mysqli_query($conn, $SQL);	
	
	echo  $SQL = "
INSERT INTO `student`.`skills` (`u_id`, `skill`) VALUES ('$uid', '')"; 
 echo $result = mysqli_query($conn, $SQL);	
	
	
   echo  $SQL = "
INSERT INTO `student`.`training` (`u_id`, `level`, `department`, `organisation`, `duration`) VALUES ('$uid', '', '', '', '')";   
echo   $result = mysqli_query($conn, $SQL); 
		 
		
	
	$sql = "UPDATE users SET chk='1' WHERE Username = '".$user."' ";
		$result = mysqli_query($conn, $sql); 
        header('Location: update.php');}
    } else{
        $msg = "There was an error updating your profile";
        header('Location: index_redirect.php');
    }
        
		
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile | SLIET Feedback System</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <style>
    .box-title{
    margin-top: 45%;
        z-index: 1000;
        }
    </style>
	<script>
	function s()
   { 

var e = document.getElementById("kl2");
var str = e.options[e.selectedIndex].value;
	   
	   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hj").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "batch.php?q="+str, true);
        xmlhttp.send();
	   
   }
   </script>
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section" style="height: 140px; background-color: #333333; margin-bottom: -5px;">
                            
                            <div class="user-info">
                                <div><span style='color:#18BC9C'>SLIET LONGOWAL</span><br><br><?php echo $user;?></div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="selected">
                        <a href="index_redirect.php"> <i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
                    
                    <li class="logout-responsive" style="display: none;">
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        
        <div id="page-wrapper">
            <div class="header">
            	<form action="logout.php" method="post">
            		<div style="height: 100%; position: absolute; right: 0px;">
            			<button type="submit" name="logout" style="background-color: #972217; height: 100%; color: white; outline: none; border: none; height: 59px; width: 100px;" class="btn bg-maroon btn-flat margin">Logout</button>
            		</div>
            	</form>
            </div><br>

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                   <h1 class="page-header">Home</h1>
                </div>
                <!--End Page Header -->
            </div>

                <!-- Page Header -->
            <div class="box box-info col-lg-6">
            <div class="box-header with-border">
              <h3 class="bo-title">Required Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="branch" class="col-sm-2 control-label">Branch</label>

                  <div class="col-sm-10">
                      <select class="form-control" id="branch" name="u_branch" required onmouseup='s()'>
                        <option value="0">Select your Branch</option>
                       
                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
						<option value="Civil Engineering</">Civil Engineering</option>
                        <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                        <option value="Electrical and Instrumentation Engineering">Electrical and Instrumentation Engineering</option>
                        <option value="Food Engineering and Technology">Food Engineering and Technology</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Physics">Physics</option>
                        <option value="Management and Humanities">Management and Humanities</option>
                        
                      </select>
                  </div>
                </div>
				
                <div class="form-group">
                  <label for="group" class="col-sm-2 control-label">Group</label>

                  <div class="col-sm-10">
                      <select id='kl2' class="form-control" id="group" name="u_group" required onmouseover='s()'>
                        <option value="0">Select Group</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                      </select>
                  </div>
                </div> 
				<div class="form-group">
 <div >
                  <label for="group" class="col-sm-2 control-label">Course</label>
                
                  <div class="col-sm-10">
                      <select class="form-control" id="group" name="course" required >
                        <option value="0">Select Course</option>
                        <option value="ICD">ICD</option>
                        <option value="DEGREE">DEGREE</option>
                        <option value="M.Tech">M.Tech</option>
                        <option value="MBA">MBA</option>
						<option value="M.SC">M.SC</option>
						<option value="Phd">Phd</option>

                      </select>
                  </div>
                </div> 	 
</div>	
<div class="form-group">
 <div >
                  <label for="group" class="col-sm-2 control-label">Batch</label>
                
                  <div class="col-sm-10">
                      <select class="form-control" id="group" name="batch" required >
                        <option value="0">Select Year of Passing</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>

                      </select>
                  </div>
                </div> 	 
</div>				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="update">Submit Details</button>
              </div>
              <!-- /.box-footer -->
            </form>
                <?php
                print "$msg";
            ?>
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
