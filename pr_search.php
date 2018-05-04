<?php 

require 'config/config.php';
$conn = db();

$r=$_REQUEST['q'];


echo "<div class='row dept'>
				<div class='col-md-12' style='border:1px solid black; padding-top:15px; padding-bottom:15px;'>
					<h4 ><a class='list-group-item list-group-item-info' style='text-align:center;'>".$r." Department</a></h4>";
					
	 $SQL = "SELECT * FROM  `users` WHERE branch='".$r."' AND flag=1 ORDER BY batch ASC";        
	 
	$res = mysqli_query($conn, $SQL);
		$arr=array();
		if(mysqli_num_rows($res)>0)
		{
		while ($db_field = mysqli_fetch_assoc($res))
		{	 $uid=$db_field['u_id'];
	          
				   echo "<div class='list-group-item'>
						<div class='col-sm-6'>".$db_field['name']."</div>
						<div class='col-sm-3'>".$db_field['batch']."</div>";
						echo "<div class='col-sm-3'></div>";
					echo "</div>";
					
					
					}
									
		}	?>	
					</div>				
				</div>	
			</div>  
			 