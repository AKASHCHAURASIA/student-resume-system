<?php
session_start();
$user = $_SESSION['user'];
$log = $_SESSION['admin'];

if ($log != 'log'){
  header ('Location: index.php');
}
require_once 'config/config.php';
$msg='';
$conn=db();
if(isset($_POST['submit'])){
$del_user = $_POST['user'];
$res = mysqli_query($conn, "SELECT * FROM users WHERE Username='$del_user'");
		$db_field = mysqli_fetch_assoc($res);
            if(mysqli_num_rows($res) == 0){
                $msg = "Student does not exists!";
            } 
			else  {
			$uid = $db_field['u_id'];
			$flg=$db_field['flag'];
			if($flg!=1)
			{
			if(mysqli_query($conn, "UPDATE users SET flag='1' WHERE Username='$del_user'") ){
				$msg = "PR added sucessfully.";
				
			}
			else{
				$msg = "There was an error deleting the student!";
			}
			}
			else{
				$msg="Student is already PR.";
			}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Admin Panel</title>
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
                               <div>Admin</div>
                            </div>

                        </div>
                        <!--end user image section-->
                    </li>
					<li class="list"><a   href='admin.php'><i class="fa fa-hand-pointer-o fa-fw"></i>Home</a></li>
                   
                     <li class="list selected"><a   href='create_pr.php'><i class="fa fa-hand-pointer-o fa-fw"></i>Create PR</a></li>
                    
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
					<span style="font-weight:bold;color:white;">Welcome <?php echo $_SESSION['name'];?></span>
            			<button type="submit" name="logout" class="btn bg-maroon btn-flat margin logout">Logout</button>
            		</div>
            	</form>
            </div><br>
			<div class="row dept" id='pol'>
				
			</div>  

			<div  id="mainDiv" style="padding-top:15px; padding-bottom:15px;margin:2px 0;">
				<div class='row' style='margin-left: 10px;'>
                <form action='' method='POST'>
                    <p style='font-size: 20px;'>Enter the username of the student you want to Add as PR!</p>
                    <tr>
                      <td>USERNAME</td>
                      <td> <input type='text' name='user' required ></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type='submit' value='Add' class='sub_btn stop' style='height: 25px; left: 10px; width: 50px;' name='submit'></td>
                    </tr>
                </form><br>
                <span style="color: red; font-size: 15px;">
                    <?php if($msg){ echo $msg; } ?>
                </span>
            </div>
			</div>
			
        </div>
        <!-- end page-wrapper -->

    </div>
	
    <!-- end wrapper -->
	        <script src="assets/plugins/jquery-1.10.2.js"></script>
		<SCRIPT>$(document).ready(function () {
			
			
		$(".list").click(function () {
        var isActive = ($(this).hasClass('selected')) ? true : false; // checks if it is already active
        $('.list').removeClass('selected');
        if (!isActive) $(this).addClass('selected'); // set active only if it was not active
    });
});


</Script>

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>

	

</body>

</html>