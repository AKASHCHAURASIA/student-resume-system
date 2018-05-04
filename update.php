<?php 
session_start();
$user = $_SESSION['user'];

$log = $_SESSION['student'];
$msg = "";
$flag="1";
if ($log != "log")
{
  header ("Location: index.php");
}
require_once 'config/config.php';
$SQL = "SELECT * FROM users WHERE Username='".$user."' ";
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
			$batch1= $db_field['user'];
			
		}
$SQL = "SELECT * FROM personal_data WHERE u_id='".$uid."'";
		$res = mysqli_query($conn, $SQL);
		while ($db_field = mysqli_fetch_assoc($res))
		{
			$Name = $db_field['name'];
			$FName=$db_field['fathername'];
			$MName=$db_field['mothername'];
			$DOB=$db_field['dob'];
			$Sex=$db_field['sex'];
			$CAddress= $db_field['caddress'];
			$PAddress=$db_field['paddress'];
			$Nationality=$db_field['nationality'];
			$Email = $db_field['email'];
			$MobileNo= $db_field['mobileno'];
			$Adhar=$db_field['aadhar'];
			$Languages=$db_field['languages'];
			$Interest=$db_field['interest'];
			$Objective=$db_field['objective'];
			$Photo=$db_field['photo'];
			$Core=$db_field['core'];
			$It=$db_field['it'];
			$Sales=$db_field['sales'];
		}
if(isset($_POST['submit']))
	
{  

$target_dir = "uploads";
	  $uploadOk = 1;
	  
	$target_dir1 = "./uploads/photo";
	echo $extension = pathinfo($_FILES['Photo']['name'],PATHINFO_EXTENSION);
	echo $target_file=$user.".".$extension;
	if($extension!=''){
 $sql = "UPDATE  `personal_data` SET  photo= '".$extension."'  WHERE u_id = '".$uid."' ";
 $result = mysqli_query($conn, $sql);}
	if ($_FILES["Photo"]["size"] > 5000000 ) {
     echo "<script>alert('file size is too large');</script>"; 
    $uploadOk = 0;
}
// Allow certain file formats
echo $uploadOk;

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	echo "<script>alert('files size is too large');</script>";
// if everything is ok, try to upload file
} else {

if($_FILES["Photo"]["tmp_name"])
      
	{   
	     $SQL = "UPDATE `users` SET chk='1' where  WHERE u_id='".$uid."'";
		 $result = mysqli_query($conn, $SQL);
	 
		$filea='uploads/photo/'.$target_file;
		unlink($filea);
	    move_uploaded_file($_FILES["Photo"]["tmp_name"],"uploads/photo/".$target_file);
		
	
	}
}
		
		 $Name1 = $_POST['Name']; //1.
   
    $FName1 = $_POST['FName'];//2.
   
   $MName1 = $_POST['MName'];//3
   
	 $DOB1 = $_POST['DateofBirth'];//4
	 $Sex1=$_POST['Gender'];
     $CAddress1 = $_POST['CAddress'];//5
	 $PAddress1 = $_POST['PAddress'];//5
	echo $Nationality1 = $_POST['Nationality'];//5
  echo   $Email1 = $_POST['Email'];//6
	
	$aadhar=$_POST['Aadhar'];
	
   echo $MobileNo1 = $_POST['MobileNo'];//8
   echo $Languages1=$_POST['Languages'];
			$Areaofinterest1=$_POST['Areaofinterest'];
			$Objective1=$_POST['Objective'];
			$Photo1 = pathinfo($_FILES['Photo']['name'],PATHINFO_EXTENSION);
   $D=DATE('d-m-y');
   $Core1=$_POST['Core'];
   $It1=$_POST['It'];
   $Sales1=$_POST['Sales'];
   echo $SQL = "UPDATE `personal_data` SET name='".$Name1."',fathername='".$FName1."',mothername='".$MName1."',dob='".$DOB1."',sex='".$Sex1."',caddress='".$CAddress1."',paddress='".$PAddress1."',nationality='".$Nationality1."',email='".$Email1."', mobileno='".$MobileNo1."',aadhar='".$aadhar."',languages='".$Languages1."',interest='".$Areaofinterest1."',objective='".$Objective1."',D_te='".$D."',core='".$Core1."',it='".$It1."',sales='".$Sales1."'  WHERE u_id='".$uid."' ";
  

                   echo $result = mysqli_query($conn, $SQL);

    
    
	$achi = array();//11
	$sql = "DELETE FROM  `achievements` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['achievements']); $i++) {
		$achi[] = '("' . $uid . '","' . $_POST['achievements'][$i] . '","' .$_POST['19sno'][$i]. '")';
 echo $SQL = "
INSERT INTO `student`.`achievements` (`u_id`, `achievement`,`sno`)VALUES $achi[$i]";
 echo  $result = mysqli_query($conn, $SQL);	
	}

   $co = array();//11
	$sql = "DELETE FROM  `cocurriculars` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['cocurricular']); $i++) { 
	$co[] = '("' . $uid . '","' . $_POST['cocurricular'][$i] . '","' . $_POST['17sno'][$i]. '")';
 echo $SQL = "
INSERT INTO `student`.`cocurriculars` (`u_id`, `cocurricular`,`sno`) VALUES $co[$i]"; echo $result = mysqli_query($conn, $SQL); 
	}
   
	
   
	
	$edu = array();//11
	$sql = "DELETE FROM  `educations qualification` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['12Degree']); $i++) {
		 $edu[] = '("' . $uid . '","' . $_POST['12Degree'][$i] . '","' . $_POST['12Institute'][$i] . '","' . $_POST['12Mark'][$i] . '","' . $_POST['12CGPA'][$i] . '","' . $_POST['12Year'][$i] . '","' . $_POST['12Specialization'][$i] . '","' . $_POST['12sno'][$i]. '")';

	echo $SQL = "
INSERT INTO `student`.`educations qualification` (`u_id`, `Degree`, `Institute/Uni`, `Marks`, `%/CGPA`, `Year`, `Specialization`,`sno`) VALUES $edu[$i]";  
 echo $result = mysqli_query($conn, $SQL); 
	}
	
		 
	$hob = array();//11
	$sql = "DELETE FROM  `hobbies` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['hobbies']); $i++) {
		$hob[] = '("' . $uid . '","' . $_POST['hobbies'][$i] . '","' . $_POST['18sno'][$i]. '")';
	echo $SQL = "
INSERT INTO `student`.`hobbies` (`u_id`, `hobby`,`sno`) VALUES $hob[$i]"; 
 echo  $result = mysqli_query($conn, $SQL); 


	}
	
	
	$pro = array();//11
	$sql = "DELETE FROM  `projects` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['Project']); $i++) {
			$pro[] = '("' . $uid . '","' . $_POST['Project'][$i] . '","' . $_POST['Degree'][$i]  . '","' . $_POST['14sno'][$i]. '")';
       echo  $SQL = "
INSERT INTO `student`.`projects` (`u_id`, `description`, `level`,`sno`) VALUES $pro[$i]";  
    echo   $result = mysqli_query($conn, $SQL);
	
	
	 
	}
	$ref = array();//11
	$sql = "DELETE FROM  `references` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['References']); $i++) {
			$ref[] = '("' . $uid . '","' . $_POST['References'][$i] . '","' . $_POST['15sno'][$i]. '")';
  echo $SQL = "
INSERT INTO `student`.`references` (`u_id`, `reference`,`sno`) VALUES $ref[$i]";  echo $result = mysqli_query($conn, $SQL);	
	}
	$ski = array();//11
	$sql = "DELETE FROM  `skills` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['Skills']); $i++) {
			$ski[] = '("' . $uid . '","' . $_POST['Skills'][$i] . '","' . $_POST['16sno'][$i]. '")';
	echo  $SQL = "
INSERT INTO `student`.`skills` (`u_id`, `skill`,`sno`) VALUES $ski[$i]"; 
 echo $result = mysqli_query($conn, $SQL);	
	
	}
	$train = array();//11
	$sql = "DELETE FROM  `training` WHERE u_id='".$uid."' ";
   $result = mysqli_query($conn, $sql);
    for($i=0 ;$i < count($_POST['13Department']); $i++) {
			$train[] = '("' . $uid . '","' . $_POST['13Degree'][$i] . '","' . $_POST['13Description'][$i] . '","' . $_POST['13Department'][$i] . '","' . $_POST['13Organization'][$i]  . '","' . $_POST['13Duration'][$i]  . '","' . $_POST['13sno'][$i]. '")';
   echo  $SQL = "
INSERT INTO `student`.`training` (`u_id`, `level`,`description`, `department`, `organisation`, `duration`,`sno`) VALUES $train[$i]";   
   $result = mysqli_query($conn, $SQL); 
   if($result)
   {
	    
	header('Location: dashboard.php');
    } else{ 
	echo "<script>alert('Problem with update data');</script>"; 
        $msg = "There was an error updating your profile";
       header('Location: update.php');
    }
}
}	 
	?>	
<html>
<head>
	<title>Resume form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/freelancer.min.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/moment.min.js"></script>

	<style>
.sub_heading{
padding-left:4%;
}
.panel-body{
padding-bottom:0;
}
.navbar-custom{
	font-weight: 600;
	padding : 9px 0;
}
.input-group-btn>.btn {
    position: relative;
    margin: 0 6px;
}
.emsg{
    color: red;
}
.hidden{
     visibility:hidden;
}
.emsg1{
    color: red;
}
.hidden1{
     visibility:hidden;
}
#upload-file-selector {
    display:none;   
}
</style>
</head>
<body>
 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="http://sliet.ac.in" style='blue;'>Student Database System </a>
				
            </div>
  
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                   
                    <li class="page-scroll">
                        <a href="logout.php">Logout</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<div class="container" style="margin-top:80px;margin-bottom:30px;">
<div class="panel panel-default">
<form action=""  method='POST'  enctype="multipart/form-data">
	<div class="panel-body">
	<div class="form-group">
		<label class="col-sm-3">1. Name</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="   form-control" value="<?php echo $Name; ?>" id="Name" name="Name"  placeholder="Name"></div>
		</div>
		<label class="col-sm-3">2. Father's Name</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="FName" value="<?php echo $FName; ?>"name="FName"  placeholder="Father's Name"></div>
		</div>
		<label class="col-sm-3">3. Mother's Name</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="MName" name="MName" value="<?php echo $MName; ?>" placeholder="Mother's Name"></div>
		</div>
	<label class="col-sm-3">4. Date of Birth</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="DateofBirth" name="DateofBirth" value="<?php echo $DOB; ?>" placeholder="dd/mm/yyyy"><span class="emsg hidden">Please Enter a Valid Date</span></div>
		</div>
		<label class="col-sm-3">5. Sex</label>
		<div class="col-sm-9 ">
			<div class="form-group">
				  <select class="form-control" id="group" name="Gender">
				     <option value="<?php echo $Sex; ?>"><?php echo $Sex; ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        
                      </select>
			</div>
		</div>
	<label class="col-sm-3">6. Correspondence Address </label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="CAddress" value="<?php echo $CAddress; ?>" name="CAddress"  placeholder="Correspondence Address"></div>
		</div>
	<label class="col-sm-3">7. Permanent Address </label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="PAddress" name="PAddress" value="<?php echo $PAddress; ?>" placeholder="Permanent Address"></div>
		</div>
		<label class="col-sm-3">8. Nationality </label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="Nationality" name="Nationality" value="<?php echo $Nationality; ?>" placeholder="Nationality"></div>
		</div>
	<label class="col-sm-3">9. Email</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="Email" name="Email" value="<?php echo $Email; ?>" placeholder="Email"></div>
		</div>
	<label class="col-sm-3">9. Aadhar Number</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class="  form-control" id="Aadhar" name="Aadhar" value="<?php echo $Adhar; ?>" placeholder="Aadhar No"></div>
		</div>
	<label class="col-sm-3">10. Mobile No</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class=" form-control" id="MobileNo" name="MobileNo" value="<?php echo $MobileNo; ?>" placeholder="9876543210"><span class="emsg1 hidden1">Please Enter a Valid Mobile No</span></div>
		</div>
	<label class="col-sm-3">11. Languages Known</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class=" form-control" id="Languages" name="Languages" value="<?php echo $Languages; ?>" placeholder="Languages"  ></div>
		</div>
	</div>
	</div>
    
	<div class="panel-body">
	<label class="col-sm-12 ">12. Educational Qualification</label>
	  <div id="educational_qualification">
		  <label class="col-sm-2">Course</label>
		  <label class="col-sm-3">Specialization</label>
		  <label class="col-sm-3">Institute/University</label>
		  <label class="col-sm-1">Marks</label>
		  <label class="col-sm-2">% / CGPA</label>
		  <label class="col-sm-1">Year</label>
		  <?php $SQL = "SELECT * FROM `educations qualification` WHERE u_id='".$uid."' ORDER BY sno ASC ";
			 $res = mysqli_query($conn, $SQL);
			 $a=0;
		while ($db_field = mysqli_fetch_assoc($res))
		{$a++;
		  echo "<div class='form-group' id='educational_qualification".$a."'>
				<input type='hidden' name='12sno[]' value='".$a."'>
				<div class='col-sm-2 nopadding'><div class='form-group'><select class=' form-control' id='Degree' name='12Degree[]' >
				         
                        <option value='".$db_field['Degree']."'>".$db_field['Degree']."</option>
                        <option value='Master'>MBA/M. Tech.</option>
                        <option value='BE'>B.E.</option>
						<option value='Diploma'>Diploma</option>
						<option value='Higher Secondary'>Higher Secondary</option>
						<option value='Certificate'>Certificate</option>
						<option value='Matriculation'>Matriculation</option></select></div>
				</div>	
				<div class='col-sm-3 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='Specialization' name='12Specialization[]' value='".$db_field['Specialization']."' placeholder='Specialization'></div>
				</div>
				<div class='col-sm-3 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='Institute' name='12Institute[]' value='".$db_field['Institute/Uni']."'  placeholder='Institute/University'></div>
				</div>
				<div class='col-sm-1 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='Mark' name='12Mark[]' value='".$db_field['Marks']."' placeholder='Marks'></div>
				</div>
				<div class='col-sm-2 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='CGPA' name='12CGPA[]' value='".$db_field['%/CGPA']."' placeholder='% / CGPA'></div>
				</div>
				<div class='col-sm-1 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='Year' name='12Year[]' value='".$db_field['Year']."'  placeholder='Year'></div>
				</div>
				
			</div>";
		}
		?>
	    </div>
	    <div class="input-group-btn " style="text-align:right">
			<button type="button" class="btn btn-success" id="del10" onclick="<?php echo "DeleteRow('educational_qualification".$a."','educational_qualification','".$a."','del10')"; ?>" >Delete</button> 
			<button class="btn btn-success " type="button"  id="add10" onclick="educational_qualification(<?php echo $a; ?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		<div class="clear"></div>
  
    </div>
	<div class="panel-body">
	<label class="col-sm-12 " >13. Industrial Training</label>
	  <div id="work_experience">
		  <label class="col-sm-2">Level</label>
		  <label class="col-sm-4">Description</label>
		  <label class="col-sm-2">Department</label>
		  <label class="col-sm-2">Organization</label>
		  <label class="col-sm-2">Duration</label>
		  <?php $SQL = "SELECT * FROM `training` WHERE u_id='".$uid."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				$b=0;
				while ($db_field = mysqli_fetch_assoc($res))
				{ $b++;
				echo "<div class='form-group' id='work_experience".$b."'>
				<input type='hidden' name='13sno[]' value='".$b."'>
				<div class='col-sm-2 nopadding'><div class='form-group'><select class=' form-control' id='Degree' name='13Degree[]' >
                        <option value='".$db_field['level']."'>".$db_field['level']."</option>
                        <option value='Master'>MBA/M. Tech.</option>
                        <option value='BE'>B.E.</option>
						<option value='Diploma'>Diploma</option>
						<option value='Certificate'>Certificate</option></select></div>
				</div>	
				<div class='col-sm-4 nopadding'>
					<div class='form-group'><input type='text' class=' form-control'  id='Description' name='13Description[]'  value='".$db_field['description']."' placeholder='Description'></div>
				</div>
				<div class='col-sm-2 nopadding'>
					<div class='form-group'><input type='text' class=' form-control'  id='Department' name='13Department[]'  value='".$db_field['department']."' placeholder='Department'></div>
				</div>
				<div class='col-sm-2 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='Organization' name='13Organization[]'  value='".$db_field['organisation']."'  placeholder='Organization'></div>
				</div>
				<div class='col-sm-2 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='Duration' name='13Duration[]'  value='".$db_field['duration']."' placeholder='Duration'></div>
				</div>
			</div>";
				}
				?>
	    </div>
	    <div class="input-group-btn" style="text-align:right">
			<button type="button" class="btn btn-success" id="del11" onclick="<?php  echo "DeleteRow('work_experience".$b."','work_experience','".$b."','del11')"; ?>">Delete</button>
			<button class="btn btn-success" type="button" id="add11" onclick="work_experience(<?php echo $b; ?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		<div class="clear"></div>
  
    </div>
	<div class="panel-body">
	<label class="col-sm-12 " >14. Projects/Internship</label>
	  <div id="projects">
		  <label class="col-sm-1">S.No.</label>
		  <label class="col-sm-9">Description</label>
		  <label class="col-sm-2">level</label>
		  <?php
				$SQL = "SELECT * FROM `projects` WHERE u_id='".$uid."' ORDER BY sno ASC ";
				$res = mysqli_query($conn, $SQL);
				$i=0;
				while ($db_field = mysqli_fetch_assoc($res))
				{ $i++;
		echo "  <div class='form-group' id='projects".$i."'>
				<input type='hidden' name='14sno[]' value='".$i."'>	
				<div class='col-sm-1 nopadding'>
					<div class='form-group'><input type='text' class=' form-control'  id='SNo' name='SNo[]'   value='".$i."' ></div>
				</div>
				<div class='col-sm-9 nopadding'>
					<div class='form-group'><input type='text' class=' form-control' id='Project'  value='".$db_field['description']."' name='Project[]'  placeholder='Project Description'></div>
				</div>
				<div class='col-sm-2 nopadding'><div class='form-group'><select class=' form-control' id='Degree' name='Degree[]' >
                        <option value='".$db_field['level']."'>".$db_field['level']."</option>
                        <option value='PG'>PG</option>
                        <option value='Degree'>Degree</option>
						<option value='Diploma'>Diploma</option></select></div>
				</div>
			</div>";
				}
				?>
	    </div>
	    <div class="input-group-btn" style="text-align:right">
			<button type="button" class="btn btn-success" id="del14" onclick="<?php echo "DeleteRow('projects".$i."','projects','".$i."','del14')"; ?>" >Delete</button>
			<button class="btn btn-success" type="button"  id="add14" onclick="projects(<?php echo $i;?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		</div>
		<div class="clear"></div>

	<div class="panel-body">
	<label class="col-sm-3">15. References</label>
		<div id="references">
		<?php $SQL = "SELECT * FROM `references` WHERE u_id='".$uid."' ORDER BY sno ASC ";
				$res = mysqli_query($conn, $SQL);
				$i=0;
				while ($db_field = mysqli_fetch_assoc($res))
				{$i++;
				echo "<div class='form-group' id='references".$i."'>
					<input type='hidden' name='15sno[]' value='".$i."'>
					<div class='col-sm-offset-3 col-sm-9 nopadding'><div class='form-group'><input type='text' value='".$db_field['reference']."' class=' form-control' id='Reference' name='References[]'  placeholder='References'></div></div>
			</div>";
				}
				?>
		</div>
		<div class="input-group-btn" style="text-align:right">
			<button type="button" class="btn btn-success" id="del15" onclick="<?php echo "DeleteRow('references".$i."','references','".$i."','del15')"; ?>" >Delete</button>
			<button class="btn btn-success" type="button"  id="add15" onclick="references(<?php echo $i;?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		</div>
		<div class="clear"></div>

	<div class="panel-body">
	<label class="col-sm-3">16. Skills/Hand-on-experience</label>
		<div id="skills">
		<?php $SQL = "SELECT * FROM `skills` WHERE u_id='".$uid."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				$i=0; 
				while ($db_field = mysqli_fetch_assoc($res))
				{$i++;
				echo "<div class='form-group' id='skills".$i."'>
				<input type='hidden' name='16sno[]' value='".$i."'>
					<div class='col-sm-offset-3 col-sm-9 nopadding'><div class='form-group'><input type='text' value='".$db_field['skill']."' class='form-control' id='Skills' name='Skills[]'  placeholder='Skills'></div></div>
			</div>";
				}
				?>
		</div>
		<div class="input-group-btn" style="text-align:right">
			<button type="button" class="btn btn-success" id="del16" onclick="<?php echo "DeleteRow('skills".$i."','skills','".$i."','del16')"; ?>" >Delete</button>
			<button class="btn btn-success" type="button"  id="add16" onclick="skills(<?php echo $i;?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		</div>
		<div class="clear"></div>

	<div class="panel-body">
	<label class="col-sm-3">17. Co-Curricular</label>
		<div id="mycocurricular">
		<?php $SQL = "SELECT * FROM `cocurriculars` WHERE u_id='".$uid."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				$i=0;
				while ($db_field = mysqli_fetch_assoc($res))
				{$i++;
				echo "<div class='form-group' id='mycocurricular".$i."'>
					<input type='hidden' name='17sno[]' value='".$i."'>
					<div class='col-sm-offset-3 col-sm-9 nopadding'><div class='form-group'><input type='text' class=' form-control' value='".$db_field['cocurricular']."' id='cocurricular' name='cocurricular[]'  placeholder='co-curricular'></div></div>
			</div>";
				}
				?>
		</div>
		<div class="input-group-btn" style="text-align:right">
			<button type="button" class="btn btn-success" id="del17" onclick="<?php  echo "DeleteRow('mycocurricular".$i."','mycocurricular','".$i."','del17')"; ?>" >Delete</button>
			<button class="btn btn-success" type="button"  id="add17" onclick="mycocurricular(<?php echo $i;?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		</div>
		<div class="clear"></div>
		
	<div class="panel-body">
	<label class="col-sm-3">18. Hobbies</label>
		<div id="myhobbies">
		<?php $SQL = "SELECT * FROM `hobbies` WHERE u_id='".$uid."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				$i=0;
				while ($db_field = mysqli_fetch_assoc($res))
				{$i++;
				echo "<div class='form-group' id='myhobbies".$i."'>
					<input type='hidden' name='18sno[]' value='".$i."'>
					<div class='col-sm-offset-3 col-sm-9 nopadding'><div class='form-group'><input type='text' class=' form-control'  value='".$db_field['hobby']."' id='hobbies' name='hobbies[]'  placeholder='hobbies'></div></div>
			</div>";
				}
				?>
		</div>
		<div class="input-group-btn" style="text-align:right">
			<button type="button" class="btn btn-success" id="del18" onclick="<?php echo "DeleteRow('myhobbies".$i."','myhobbies','".$i."','del18')"; ?>" >Delete</button>
			<button class="btn btn-success" type="button"  id="add18" onclick="myhobbies(<?php echo $i;?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		</div>
		<div class="clear"></div>
		
	<div class="panel-body">
	<label class="col-sm-3">19. Achievements</label>
		<div id="myachievements">
		<?php $SQL = "SELECT * FROM `achievements` WHERE u_id='".$uid."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				$i=0;
				while ($db_field = mysqli_fetch_assoc($res))
				{$i++;
				echo "<div class='form-group' id='myachievements".$i."'>
					<input type='hidden' name='19sno[]' value='".$i."'>
					<div class='col-sm-offset-3 col-sm-9 nopadding'><div class='form-group'><input type='text' class=' form-control' value='".$db_field['achievement']."' id='achievements' name='achievements[]'  placeholder='Achievements'></div></div>
			</div>";
				}
				?>
		</div>
		<div class="input-group-btn" style="text-align:right">
			<button type="button" class="btn btn-success" id="del19" onclick="<?php echo "DeleteRow('myachievements".$i."','myachievements','".$i."','del19')"; ?>" >Delete</button>
			<button class="btn btn-success" type="button"  id="add19" onclick="myachievements(<?php echo $i;?>);"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add more</button>
		</div>
		</div>
		<div class="clear"></div>
		
	<div class="panel-body">
	<div class="form-group">
	<label class="col-sm-3">20. Area of interest</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class=" form-control" value="<?php echo $Interest; ?>" id="Areaofinterest" name="Areaofinterest"  placeholder="Area of interest"></div>
		</div>
		<label class="col-sm-3">21. Carrer Objective</label>
		<div class="col-sm-9 nopadding">
			<div class="form-group"><input type="text" class=" form-control" id="Carrer" value="<?php echo $Objective; ?>"name="Objective"  placeholder="Carrer Objective"></div>
		</div>
		<label class="col-sm-3 nopadding">22. Upload Photo</label>
		<div class="col-sm-9 nopadding"><div class="form-group">
			<label class="btn btn-md btn-info" for="upload-file-selector"><input type="file" name='Photo'></label>
			<?php if($Photo!='') 
		echo "<a href='./uploads/photo/".$user.".".$Photo."' target='_blank'><button type='button' style='margin:10px' class='btn btn-md btn-info'>View existing file</button></a> ";
		?>
			</div>
		</div>
		<label class="col-sm-4 nopadding">23. Are you interested in Core Branch placement</label>
		<div class="col-sm-6 nopadding">
			<div class="form-group"><input type="checkbox" id="core" name="Core" value="1" <?php if ($Core == 1) echo "checked='checked'"; ?>></div>
		</div>
		<label class="col-sm-4 nopadding">24. Are you interested in IT placement</label>
		<div class="col-sm-6 nopadding">
			<div class="form-group"><input type="checkbox"  id="it" name="It" value="1" <?php if ($It == 1) echo "checked='checked'"; ?>></div>
		</div>
		<label class="col-sm-4 nopadding">25. Are you interested in Sales And Marketing </label>
		<div class="col-sm-6 nopadding">
			<div class="form-group"><input type="checkbox" id="sales" name="Sales" value="1" <?php if ($Sales == 1) echo "checked='checked'"; ?>></div>
		</div>
	</div>
	<div class="clear"></div>
	</div>

<div class="form-group"> 
    <div style="text-align:center">
      <button type="submit" class="btn btn-lg btn-success" name='submit' >Submit</button>
    </div>
  </div>
</form>  
</div>

</div>
<script src="js/jquery.min.js"></script>
<script>

	$(document).ready(function(){
    var $regexname= /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    $('#DateofBirth').on('keypress keydown keyup',function(){
             if (!$(this).val().match($regexname)) {
              // there is a mismatch, hence show the error message
                 $('.emsg').removeClass('hidden');
                 $('.emsg').show();
             }
           else{
                // else, do not display message
                $('.emsg').addClass('hidden');
               }
         });
		var phoneno = /^\d{10}$/;
		$('#MobileNo').on('keypress keydown keyup',function(){
             if (!$(this).val().match($phoneno)) {
              // there is a mismatch, hence show the error message
                 $('.emsg1').removeClass('hidden1');
                 $('.emsg1').show();
             }
           else{
                // else, do not display message
                $('.emsg1').addClass('hidden1');
               }
         });
	});
function DeleteRow(id,name,a,id1)
{   //id="#"+id;
	document.getElementById(id).remove()
	//$(id).remove();
	id=name+(a-1);
	
	res=id1.split('l');
	res='add'+res[1];
    var divtest1 = document.getElementById(id1);
	func="DeleteRow('"+id+"','"+name+"','"+(a-1)+"','"+id1+"')";
	divtest1.setAttribute("onclick",func);
	 var divtest1 = document.getElementById(res);
	 func=""+name+"("+(a-1)+")";
	 divtest1.setAttribute("onclick",func);
	 
}
function educational_qualification(a) {
      a += 1;
    var objTo = document.getElementById('educational_qualification');
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="educational_qualification"+a;
	divtest.setAttribute("id", id);
    divtest.innerHTML = '<input type="hidden" name="12sno[]" value="'+a+'"><div class="col-sm-2 nopadding"><div class="form-group"><select class=" form-control" id="Degree" name="12Degree[]" ><option value="Select Course">Select Course</option><option value="Master">MBA/M. Tech.</option>   <option value="BE">B.E.</option><option value="Diploma">Diploma</option><option value="Higher Secondary">Higher Secondary</option><option value="Certificate">Certificate</option>			<option value="Matriculation">Matriculation</option></select></div></div>				<div class="col-sm-3 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="Specialization" name="12Specialization[]"  placeholder="Specialization"></div>				</div>				<div class="col-sm-3 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="Institute" name="12Institute[]"  placeholder="Institute/University"></div>				</div>				<div class="col-sm-1 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="Mark" name="12Mark[]"  placeholder="Marks"></div>				</div>	<div class="col-sm-2 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="CGPA" name="12CGPA[]"  placeholder="% / CGPA"></div>				</div>				<div class="col-sm-1 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="Year" name="12Year[]"  placeholder="Year"></div>				</div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del10");
	func="DeleteRow('"+id+"','educational_qualification','"+a+"','del10')";
	if (a!='undefined')
	divtest1.setAttribute("onclick",func);
     var divtest1 = document.getElementById("add10");
   	 func="educational_qualification("+(a)+")";
	 divtest1.setAttribute("onclick",func);
}
function work_experience(b) {
      b += 1;
    var objTo = document.getElementById("work_experience")
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="work_experience"+b;
	divtest.setAttribute("id", id);
    divtest.innerHTML = '<input type="hidden" name="13sno[]" value="'+b+'"><div class="col-sm-2 nopadding"><div class="form-group"><select class=" form-control" id="Degree" name="13Degree[]" >                        <option value="Select Level">Select Level</option>                        <option value="Master">MBA/M. Tech.</option>                        <option value="BE">B.E.</option>						<option value="Diploma">Diploma</option>						<option value="Certificate">Certificate</option></select></div>				</div>					<div class="col-sm-4 nopadding">					<div class="form-group"><input type="text" class=" form-control"  id="Description" name="13Description[]"  placeholder="Description"></div>				</div><div class="col-sm-2 nopadding">					<div class="form-group"><input type="text" class=" form-control"  id="Department" name="13Department[]"  placeholder="Department"></div>				</div>				<div class="col-sm-2 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="Organization" name="13Organization[]"  placeholder="Organization"></div>				</div>				<div class="col-sm-2 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="Duration" name="13Duration[]"  placeholder="Duration"></div>				</div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del11");
	func="DeleteRow('"+id+"','work_experience','"+b+"','del11')";
	if (b!='undefined')
	divtest1.setAttribute("onclick",func);
        var divtest1 = document.getElementById("add11");
   	 func="work_experience("+(b)+")";
	 divtest1.setAttribute("onclick",func);
	
	
}
function projects(p) {
	p+=1;
    var objTo = document.getElementById('projects')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="projects"+p;
	divtest.setAttribute("id", id);
	divtest.innerHTML = '<input type="hidden" name="14sno[]" value="'+p+'"><div class="col-sm-1 nopadding">					<div class="form-group"><input type="text" class=" form-control"  id="SNo" name="SNo[]"  value="'+p+'"></div>				</div>				<div class="col-sm-9 nopadding">					<div class="form-group"><input type="text" class=" form-control" id="Project" name="Project[]"  placeholder="Project Description"></div>				</div>				<div class="col-sm-2 nopadding"><div class="form-group"><select class=" form-control" id="Degree" name="Degree[]" >                        <option value="Select Level">Select Level</option>                        <option value="PG">PG</option>                        <option value="Degree">Degree</option>						<option value="Diploma">Diploma</option></select></div>				</div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del14");
	func="DeleteRow('"+id+"','projects','"+p+"','del14')";
	if (p!='undefined')
	divtest1.setAttribute("onclick",func);
	var divtest1 = document.getElementById("add14");
   	 func="projects("+(p)+")";
	 divtest1.setAttribute("onclick",func);
}
function references(p) {
	p+=1;
    var objTo = document.getElementById('references')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="references"+p;
	divtest.setAttribute("id", id);
	divtest.innerHTML = '<input type="hidden" name="15sno[]" value="'+p+'"><div class="col-sm-offset-3 col-sm-9 nopadding"><div class="form-group"><input type="text" class=" form-control" id="Reference" name="References[]"  placeholder="References"></div></div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del15");
	func="DeleteRow('"+id+"','references','"+p+"','del15')";
	if (p!='undefined')
	divtest1.setAttribute("onclick",func);
	var divtest1 = document.getElementById("add15");
   	 func="references("+(p)+")";
	 divtest1.setAttribute("onclick",func);
}
function skills(p) {
	p+=1;
    var objTo = document.getElementById('skills')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="skills"+p;
	divtest.setAttribute("id", id);
	divtest.innerHTML = '<input type="hidden" name="16sno[]" value="'+p+'"><div class="col-sm-offset-3 col-sm-9 nopadding"><div class="form-group"><input type="text" class=" form-control" id="Skills" name="Skills[]"  placeholder="Skills"></div></div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del16");
	func="DeleteRow('"+id+"','skills','"+p+"','del16')";
	if (p!='undefined')
	divtest1.setAttribute("onclick",func);
	var divtest1 = document.getElementById("add16");
   	 func="skills("+(p)+")";
	 divtest1.setAttribute("onclick",func);
}
function mycocurricular(p) {
	p+=1;
    var objTo = document.getElementById('mycocurricular')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="mycocurricular"+p;
	divtest.setAttribute("id", id);
	divtest.innerHTML = '<input type="hidden" name="17sno[]" value="'+p+'"><div class="col-sm-offset-3 col-sm-9 nopadding"><div class="form-group"><input type="text" class=" form-control" id="cocurricular" name="cocurricular[]"  placeholder="co-curricular"></div></div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del17");
	func="DeleteRow('"+id+"','mycocurricular','"+p+"','del17')";
	if (p!='undefined')
	divtest1.setAttribute("onclick",func);
	var divtest1 = document.getElementById("add17");
   	 func="mycocurricular("+(p)+")";
	 divtest1.setAttribute("onclick",func);
}
function myhobbies(p) {
	p+=1;
    var objTo = document.getElementById('myhobbies')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="myhobbies"+p;
	divtest.setAttribute("id", id);
	divtest.innerHTML = '<input type="hidden" name="18sno[]" value="'+p+'"><div class="col-sm-offset-3 col-sm-9 nopadding"><div class="form-group"><input type="text" class=" form-control" id="hobbies" name="hobbies[]"  placeholder="hobbies"></div></div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del18");
	func="DeleteRow('"+id+"','myhobbies','"+p+"','del18')";
	if (p!='undefined')
	divtest1.setAttribute("onclick",func);
	var divtest1 = document.getElementById("add18");
   	 func="myhobbies("+(p)+")";
	 divtest1.setAttribute("onclick",func);
}
function myachievements(p) {
	p+=1;
    var objTo = document.getElementById('myachievements')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group");
	id="myachievements"+p;
	divtest.setAttribute("id", id);
	divtest.innerHTML = '<input type="hidden" name="19sno[]" value="'+p+'"><div class="col-sm-offset-3 col-sm-9 nopadding"><div class="form-group"><input type="text" class=" form-control" id="achievements" name="achievements[]"  placeholder="Achievements"></div></div><div class="clear"></div>';
    objTo.appendChild(divtest);
	var divtest1 = document.getElementById("del19");
	func="DeleteRow('"+id+"','myachievements','"+p+"','del19')";
	if (p!='undefined')
	divtest1.setAttribute("onclick",func);
	var divtest1 = document.getElementById("add19");
   	 func="myachievements("+(p)+")";
	 divtest1.setAttribute("onclick",func);
}
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>




	
	</body>
	</html>
		