<?php 

require 'config/config.php';
$conn = db();

$r=$_REQUEST['q'];

$r=explode(",",$r);
$r1=$r[0];
$r2=$r[1];

echo "<div class='row dept'>
				<div class='col-md-12' style='border:1px solid black; padding-top:15px; padding-bottom:15px;'>
					<h4 ><a class='list-group-item list-group-item-info' style='text-align:center;'>".$r2." Department</a></h4>";
					
	 $SQL = "SELECT * FROM  `users` WHERE branch='".$r2."' AND batch='".$r1."' ";        
	 
	$res = mysqli_query($conn, $SQL);
		$arr=array();
		if(mysqli_num_rows($res)>0)
		{
		while ($db_field = mysqli_fetch_assoc($res))
		{	 $uid=$db_field['u_id'];
	          
				   echo "<div class='list-group-item'>
						<div class='col-sm-7'>".$db_field['name']."</div>";
						if($db_field['chk']==1 )
						{	$arr[]=$uid;
						echo "<div class='col-sm-2'><i class='fa fa-check-circle' style='color:green;'></i> </div>";
						}
						else 
						echo "<div class='col-sm-2'><i class='fa fa-times-circle' style='color:red;'></i></div>";
						if($db_field['chk']==1)
						echo "<div class='col-sm-3'  style='margin-top:-6px;'><a href='/student/student_all.php?id=".$uid."'><button type='button' class='btn btn-sm btn-primary'><span class=' pull-right'><i class='fa fa-print'></i> print</span></button></a></div>";
					echo "</div>";
					
					
					}
					
					echo "<div style='margin-top:10px'><center><form action='printall.php' method='post'><input type='hidden' name='input_name' value=".htmlentities(serialize($arr))." />
					<button type='submit' class='btn btn-sm btn-primary'><span class=' pull-right'><i class='fa fa-print'></i> print all</span></button></form>
					</center></div>";
				
		}	?>	
					</div>				
				</div>	
			</div>  
			 