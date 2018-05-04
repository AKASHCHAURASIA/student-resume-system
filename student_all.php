<?php
session_start();
$user = $_SESSION['user'];
$log = $_SESSION['flag'];
$msg = "";

if ($log !=1){
  header ("Location: index.php");
}
require_once 'config/config.php';
$conn=db();
 
		  $res = mysqli_query($conn, "SELECT * FROM `users` WHERE Username='".$user."'");
while ($db_field = mysqli_fetch_assoc($res))
{
$sp_post=$db_field['sp_post'];
$branch1=$db_field['branch'];
	} 
	
	$uid=$_REQUEST['id'];
		  
		  $res = mysqli_query($conn, "SELECT * FROM `users` WHERE u_id='$uid'");
while ($db_field = mysqli_fetch_assoc($res))
	{
		$user1=$db_field['Username'];
		$branch2=$db_field['branch'];
	}	
	if($sp_post!='admin')
	{ 
      if($branch1!=$branch2)
	  {echo "Access Denied";
	  die();}	  
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
			$Aadhar= $db_field['aadhar'];
			$Languages=$db_field['languages'];
			$Interest=$db_field['interest'];
			$Objective=$db_field['objective'];
			$Photo=$db_field['photo'];
		}
?>
<html>
<head>
	<title>Print Resume</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/student_style.css">
	<style>
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 6px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor:pointer;
}
.row{
    margin-left:  0px;
    margin-right: 0px;
}
</style>
    <link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="fixed-content" id="print" >
<div style="margin:2% 6%;"> 
	<div class="row row1" style="margin-bottom:20px">
		<div style="width:60%;float:left;">
            <input class='c_row1' type='checkbox' name='ch' checked>
			<h3><?php echo $Name; ?></h3>
			<p><b>Contacts:</b> +91 <?php echo $MobileNo; ?><br>
			   <b>E-mail Id:</b> <?php echo $Email; ?>
			</p>
		</div>
		<div style="width:40%;float:left;">
			<div class="img-div">
				<img src="./uploads/photo/<?php echo $user1.".".$Photo; ?>" height=180 width=150 >
			</div>
		</div>
	</div>
	<div class="row row2">
		<div><input class='c_row2' type='checkbox' name='ch' checked>
            <table class="table table-bordered">
                <thead>
                  <tr><th style="width:50%;text-align:center;">CORRESPONDENCE ADDRESS</th><th style="width:50%;text-align:center">PERMANENT ADDRESS</th></tr>
                </thead>
                <tbody>
                    <tr><td style="padding:20px 60px!important;"><?php echo $CAddress; ?></td><td style="padding:20px 60px !important;"><?php echo $PAddress; ?></td></tr>
                </tbody>
            </table>
        </div>
	</div>
	<div class="row row3">
        <div class="career-head"><input class='c_row3' type='checkbox' name='ch' checked> Career Objective</div>
		<div class="career-body"><?php echo $Objective; ?></div>
        </div>
	<div class="row row4">
		<div >
        <div class="edu-head"><input class='c_row4' type='checkbox' name='ch' checked> Educational Qualification</div>
		<table class="table table-bordered edutable" style="margin:20px 0">
			<thead class="table-head">
			  <tr><th>Course</th><th>Discipline/ specialization</th><th>University/ Board</th><th>Marks </th><th>Percentage / CGPA</th><th>Year Of Passing</th></tr>
			</thead>
			<tbody>
			 <?php $SQL = "SELECT * FROM `educations qualification` WHERE u_id='".$uid."'  ORDER BY Year DESC ";
			 $res = mysqli_query($conn, $SQL);
		while ($db_field = mysqli_fetch_assoc($res)) 
		{
		echo "<tr><td>".$db_field['Degree']."</td><td>".$db_field['Specialization']."</td><td>".$db_field['Institute/Uni']."</td><td>".$db_field['Marks']."</td><td>".$db_field['%/CGPA']."</td><td>".$db_field['Year']."</td></tr>";}
		?>
			</tbody>
		</table>
        </div>
	</div>
    <div class="row5" style="border:1px solid black">
            <div><input class='c_row5' type='checkbox' name='ch' checked>
            <span class="industrial-head">Industrial Training</span></div>
			<div class="industrial-body">
			<?php $SQL = "SELECT * FROM `training` WHERE u_id='".$uid."'AND level='MBA/M. Tech.' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body' style='width:8%;float:left'>Description: </div><div style='width:80%;float:left'>".$db_field['description']."</div>	
					<div class='industrial-training-body' style='width:90%'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body' style='width:90%'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body' style='width:90%'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
				$SQL = "SELECT * FROM `training` WHERE u_id='".$uid."'AND level='BE' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body' style='width:8%;float:left'>Description: </div><div style='width:80%;float:left'>".$db_field['description']."</div>	
					<div class='industrial-training-body' style='width:90%'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body' style='width:90%'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body' style='width:90%'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
				$SQL = "SELECT * FROM `training` WHERE u_id='".$uid."'AND level='Diploma' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body' style='width:8%;float:left'>Description: </div><div style='width:80%;float:left'>".$db_field['description']."</div>	
					<div class='industrial-training-body' style='width:90%'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body' style='width:90%'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body' style='width:90%'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
				$SQL = "SELECT * FROM `training` WHERE u_id='".$uid."'AND level='Certificate' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body' style='width:8%;float:left'>Description: </div><div style='width:80%;float:left'>".$db_field['description']."</div>	
					<div class='industrial-training-body' style='width:90%'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body' style='width:90%'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body' style='width:90%'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
			?>
			</div>
        </div>
		<div class="row6" style="border:1px solid black;margin-top:10px">
				<div><input class='c_row6' type='checkbox' name='ch' checked> <span class="project-main-head"> Academic Projects / Internships</span></div>
				<div class="row">
				<?php
				$SQL = "SELECT * FROM `projects` WHERE u_id='".$uid."' AND level='PG'";
				$res = mysqli_query($conn, $SQL);
				if(mysqli_num_rows($res))
					echo "<div class='project-head'>At PG Level :</div>
					<div class='project-body'>
						<ol>";
				while ($db_field = mysqli_fetch_assoc($res))
				{
					echo "<li>".$db_field['description']."</li>";
				}
				if(mysqli_num_rows($res))
					echo "</ol>
					</div>";
				$SQL = "SELECT * FROM `projects` WHERE u_id='".$uid."' AND level='Degree' ";
				$res = mysqli_query($conn, $SQL);
				if(mysqli_num_rows($res))
					echo "<div class='project-head'>At Degree Level :</div>
					<div class='project-body'>
						<ol>";
				while ($db_field = mysqli_fetch_assoc($res))
				{
					echo "<li>".$db_field['description']."</li>";
				}
				if(mysqli_num_rows($res))
					echo "</ol>
					</div>";
				$SQL = "SELECT * FROM `projects` WHERE u_id='".$uid."' AND level='Diploma'";
				$res = mysqli_query($conn, $SQL);
				if(mysqli_num_rows($res))
					echo "<div class='project-head'>At Diploma Level :</div>
					<div class='project-body'>
						<ol>";
				while ($db_field = mysqli_fetch_assoc($res))
				{
					echo "<li>".$db_field['description']."</li>";
				}
				if(mysqli_num_rows($res))
					echo "</ol>
					</div>";
				?>
				</div>
    </div>
	<div class="row7">
		<div class="box">
			<div class="mypanel-head1"><input class='c_row7' type='checkbox' name='ch' checked> Skills
			</div>
			<div class="mypanel-body">
			<ol>
				<?php $SQL = "SELECT * FROM `skills` WHERE u_id='".$uid."' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['skill']."</li>";
				}
			?>
			</ol>
			</div>
		</div>
	</div>
	<div class="row row8" style="margin:auto 0px;">
        <div class="box">
			<div class="mypanel-head1"><input class='c_row8' type='checkbox' name='ch' checked> Area of Interest
			</div>
			<div class="mypanel-body">
			 <?php echo $Interest;	?>
			</div>
		</div>
	</div>
	<div class="row" style="margin:auto 0px;">
		<div class="box ">
            <div class="row9" >
                <div class="mypanel-head1"><input class='c_row9' type='checkbox' name='ch' checked> Co-Curricular</div>
                <div class="mypanel-body">
                <div class="row">
                    <div class="cocurricular-body">
                    <ol>
                <?php $SQL = "SELECT * FROM `cocurriculars` WHERE u_id='".$uid."' ";
                    $res = mysqli_query($conn, $SQL);
                    while ($db_field = mysqli_fetch_assoc($res))
                    {
                    echo "<li>".$db_field['cocurricular']."</li>";
                    }
                ?>
                    </ol>	
                    </div></div>
                    </div>
            </div>
            <div class="row10">
			<div class="mypanel-head"><input class='c_row10' type='checkbox' name='ch' checked> Achievements</div>
			<div class="mypanel-body">
			<ol>
			<?php $SQL = "SELECT * FROM `achievements` WHERE u_id='".$uid."' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['achievement']."</li>";
				}
			?>
				</ol>
				</div>
            </div>
            <div class="row11">
			<div class="mypanel-head"><input class='c_row11' type='checkbox' name='ch' checked> Hobbies</div>
			<div class="mypanel-body">
				<ol>
			<?php $SQL = "SELECT * FROM `hobbies` WHERE u_id='".$uid."' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['hobby']."</li>";
				}
			?>
				</ol>
			</div>
            </div>
            <div class="row12">
			<div class="mypanel-head"><input class='c_row12' type='checkbox' name='ch' checked> References</div>
			<div class="mypanel-body">
				<ol>
			<?php $SQL = "SELECT * FROM `references` WHERE u_id='".$uid."' ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['reference']."</li>";
				}
			?>
				</ol>
			</div>
		</div>
	   </div>
    </div>
	<div class="row row13">
        <div class="personal-head"><input class='c_row13' type='checkbox' name='ch' checked> Personal Profile</div>
		<div class="personal-body">
            <table class="p-data">
                <tr><td> Father's Name </td><td> : </td><td> <?php echo $FName; ?></td></tr>
                <tr><td> Mother's Name </td><td> : </td><td> <?php echo $MName; ?></td></tr>
                <tr><td> Date of Birth </td><td> : </td><td> <?php echo $DOB; ?></td></tr>
                <tr><td> Aadhar Number </td><td> : </td><td> <?php echo $Aadhar; ?></td></tr>
                <tr><td> Sex           </td><td> : </td><td> <?php echo $Sex; ?></td></tr>
                <tr><td> Nationality </td><td> : </td><td> <?php echo $Nationality; ?></td></tr>
                <tr><td> Languages Known </td><td> : </td><td> <?php echo $Languages; ?></td></tr>
            </table>
		</div>
        </div>
    <div class="row ">
		<div class="row declaration" style="margin-left:0">
		<div style="width:100px;float:left"><b>Declaration :</b> </div><div style="width:85%;float:left">I hereby declare that all the above mentioned information is true and correct to the best of my knowledge.</div>
		</div>
		<div style="margin-top:12px;">
		<div class="declaration">
			<b> Date : </b><?php echo Date('d-m-y'); ?>
		</div>
		</div>
		<div style="margin-bottom:12px;">
		<div class="declaration">
			<b>Place :</b> SLIET , Longowal
		</div>
		</div>
		<div class="sign">
		<table class="table sign-table" style="margin-bottom:0px">
			<tbody>
                <tr><td><b>Signature</b></td><td>:</td><td></td></tr>
                <tr><td><b>Name</b></td><td>:</td><td><?php echo $Name; ?></td></tr>
			</tbody>
		</table>
		</div>
    </div>
</div>
</div>
<div style='position:absolute;bottom:10px;left:25%;'><span style="color:red">* untick to hide particular information. </span> <button type='button' id='tab' class='button' value='Print' onclick='PrintDiv()' >Print <i class='fa fa-print'></i></button></div>
<script >
function PrintDiv() { 
            valueChanged();
            var contents = document.getElementById('print').innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = 'frame1';
            frame1.style.position = 'absolute';
            frame1.style.top = '-1000000px';
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>'+document.title+'</title>');
			frameDoc.document.write('<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />');
			frameDoc.document.write('<link href="css/student_style.css" rel="stylesheet" type="text/css" />');
            frameDoc.document.write('<style>.row{margin-left:  0px;margin-right: 0px;}</style></head><body style="font-family:arial">');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames['frame1'].focus();
                window.frames['frame1'].print();
                document.body.removeChild(frame1);
				
            }, 500);
			
            return false;
        }
		
</script>
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    function valueChanged()
    {
        for(var i=1;i<14;i++){
            var c='.c_row'+i;
            var d='.row'+i;
        if($(c).is(":checked"))   
            { }
        else
            $(d).hide();
        }
        $( ":checkbox" ).hide();
    }
</script>

	
	</body>
</html>
