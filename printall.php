<?php
session_start();
$uid = unserialize($_POST['input_name']);
require_once 'config/config.php';
$conn = db();
$log = $_SESSION['flag'];
$msg = "";
if ($log !=1){
  header ("Location: index.php");
}
//login log check
/*         $SQL = "SELECT * FROM users where u_id='2898' OR u_id='2777'";
        $conn = db();
		$uid=array();
		$user=array();
		$res = mysqli_query($conn, $SQL);
		while ($db_field = mysqli_fetch_assoc($res))
		{
			
			
			
			$uid[] = $db_field['u_id'];
			$user[]= $db_field['Username'];
			
			
			
		} */	
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
@media print {
    #pages{
		page-break-after: always;
	}
}
</style>
    <link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="print" >
<?php 
	 for($i=0;$i<count($uid);$i++)
	 {
		 $SQL = "SELECT * FROM users WHERE u_id='".$uid[$i]."'";
		$res = mysqli_query($conn, $SQL);
		while ($db_field = mysqli_fetch_assoc($res))
		{
			$user[]= $db_field['Username'];
		}
	  $SQL = "SELECT * FROM personal_data WHERE u_id='".$uid[$i]."'";
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
		
echo "<div style='margin:2% 6%;' id='pages' style='page-break-after: always;'>
	<div class='row' style='margin-bottom:20px'>
		<div style='width:60%;float:left;'>
			<h3>".$Name."</h3>
			<p><b>Contacts:</b> +91 ".$MobileNo."<br>
			   <b>E-mail Id:</b> ".$Email."
			</p>
		</div>
		<div style='width:40%;float:left;'>
			<div class='img-div'>
				<img src='./uploads/photo/".$user[$i].".".$Photo."' height=180 width=150 >
			</div>
		</div>
	</div>
	<div class='row'>
		<table class='table table-bordered'>
			<thead>
			  <tr><th style='width:50%'>CORRESPONDENCE ADDRESS</th><th style='width:50%'>PERMANENT ADDRESS</th></tr>
			</thead>
			<tbody>
				<tr><td>". $CAddress."</td><td>". $PAddress."</td></tr>
			</tbody>
		</table>
	</div>
	<div class='row'>
		<div class='career-head'>Career Objective</div>
		<div class='career-body'>".$Objective."</div>
	</div>
	<div class='row'>
		<div class='edu-head'>Educational Qualification</div>
		<table class='table table-bordered edutable' style='margin:20px 0'>
			<thead class='table-head'>
			  <tr><th>Course</th><th>Discipline/ specialization</th><th>University/ Board</th><th>Marks </th><th>Percentage / CGPA</th><th>Year Of Passing</th></tr>
			</thead>
			<tbody>";
			 $SQL = "SELECT * FROM `educations qualification` WHERE u_id='".$uid[$i]."'  ORDER BY sno ASC ";
			 $res = mysqli_query($conn, $SQL);
		while ($db_field = mysqli_fetch_assoc($res))
		{
		echo "<tr><td>".$db_field['Degree']."</td><td>".$db_field['Specialization']."</td><td>".$db_field['Institute/Uni']."</td><td>".$db_field['Marks']."</td><td>".$db_field['%/CGPA']."</td><td>".$db_field['Year']."</td></tr>";}
		
		echo "	</tbody>
		</table>
	</div>
	<div class='row'>
		<div class='box'>
			<div class='industrial-head'>Industrial Training</div>
			<div class='industrial-body'>";
			 $SQL = "SELECT * FROM `training` WHERE u_id='".$uid[$i]."'AND level='MBA/M. Tech.' ORDER BY sno ASC ";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
				$SQL = "SELECT * FROM `training` WHERE u_id='".$uid[$i]."'AND level='BE' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
				$SQL = "SELECT * FROM `training` WHERE u_id='".$uid[$i]."'AND level='Diploma' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
				$SQL = "SELECT * FROM `training` WHERE u_id='".$uid[$i]."'AND level='Certificate' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<div class='industrial'>
					<div class='industrial-training-head'>At ".$db_field['level']." Level :</div>
					<div class='industrial-training-body'>Department: ".$db_field['department']."</div>	
					<div class='industrial-training-body'>Organisation: ".$db_field['organisation']."</div>
					<div class='industrial-training-body'>Duration: ".$db_field['duration']."</div>
					</div>";
				}
			echo "</div>
			<div class='project'>
				<div class='project-main-head'> Academic Projects / Internships</div>
				<div class='row'>";
				$SQL = "SELECT * FROM `projects` WHERE u_id='".$uid[$i]."' AND level='PG' ORDER BY sno ASC";
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
					echo '</ol>
					</div>';
				$SQL = "SELECT * FROM `projects` WHERE u_id='".$uid[$i]."' AND level='Degree' ORDER BY sno ASC";
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
					echo '</ol>
					</div>';
				$SQL = "SELECT * FROM `projects` WHERE u_id='".$uid[$i]."' AND level='Diploma' ORDER BY sno ASC";
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
					echo '</ol>
					</div>';
				echo "
				</div>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='box'>
			<div class='mypanel-head1'>Skills
			</div>
			<div class='mypanel-body'>
			<ol>";
				$SQL = "SELECT * FROM `skills` WHERE u_id='".$uid[$i]."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['skill']."</li>";
				}
			echo "
			</ol>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='box'>
			<div class='mypanel-head1'>Area of Interest
			</div>
			<div class='mypanel-body'>
			 ".$Interest."
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='box '>
			<div class='mypanel-head1'>Co-Curricular</div>
			<div class='mypanel-body'>
			<div class='row'>
				<div class='cocurricular-body'>
				<ol>";
				$SQL = "SELECT * FROM `cocurriculars` WHERE u_id='".$uid[$i]."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['cocurricular']."</li>";
				}
			echo "
				</ol>	
				</div></div>
				</div>

			<div class='mypanel-head'>Achievements
			</div>
			<div class='mypanel-body'>
			<ol>";
			 $SQL = "SELECT * FROM `achievements` WHERE u_id='".$uid[$i]."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['achievement']."</li>";
				}
			echo "
				</ol>
				</div>

			<div class='mypanel-head'>Hobbies
			</div>
			<div class='mypanel-body'>
				<ol>";
			 $SQL = "SELECT * FROM `hobbies` WHERE u_id='".$uid[$i]."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['hobby']."</li>";
				}
			echo "
				</ol>
			</div>

			<div class='mypanel-head'>References
			</div>
			<div class='mypanel-body'>
				<ol>";
			$SQL = "SELECT * FROM `references` WHERE u_id='".$uid[$i]."' ORDER BY sno ASC";
				$res = mysqli_query($conn, $SQL);
				while ($db_field = mysqli_fetch_assoc($res))
				{
				echo "<li>".$db_field['reference']."</li>";
				}
			echo "
				</ol>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='personal-head'>Personal Profile</div>
		<div class='personal-body'>
		<table class='p-data'>
			<tr><td> Father's Name </td><td> : </td><td> ". $FName ."</td></tr>
			<tr><td> Mother's Name </td><td> : </td><td> ". $MName ."</td></tr>
			<tr><td> Date of Birth </td><td> : </td><td> " . $DOB  ."</td></tr>
			<tr><td> Aadhar Number </td><td> : </td><td> ". $Aadhar."</td></tr>
			<tr><td> Sex           </td><td> : </td><td> ". $Sex."</td></tr>
			<tr><td> Nationality </td><td> : </td><td> ". $Nationality."</td></tr>
			<tr><td> Languages Known </td><td> : </td><td> ". $Languages."</td></tr>
		</table>
		</div>
		<div class='row declaration' style='margin-left:0'>
		<div style='width:100px;float:left'><b>Declaration :</b> </div><div style='width:85%;float:left'>I hereby declare that all the above mentioned information is true and correct to the best of my knowledge.</div>
		</div>
		<div style='margin-top:12px;'>
		<div class='declaration'>
			<b> Date : </b>". Date('d-m-y')."
		</div>
		</div>
		<div style='margin-bottom:12px;'>
		<div class='declaration'>
			<b>Place :</b> SLIET , Longowal
		</div>
		</div>
		<div class='sign'>
		<table class='table sign-table'>
			<tbody>
				<tr><td><b>Signature</td><td>:</b></td><td></td></tr>
				<tr><td><b>Name</td><td>:</b></td><td>". $Name ."</td></tr>
			</tbody>
		</table>
		</div>
		</div>
	</div>";
}
?>
</div>
<script >
function PrintDiv() { 
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
            frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames['frame1'].focus();
                window.frames['frame1'].print();
                document.body.removeChild(frame1);
				
            }, 500);
			
            return false;
        }</script>


	
	</body>
	</html>
		