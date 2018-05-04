<div class="row dept">
				<div class="col-md-12" style="border:1px solid black; padding-top:15px; padding-bottom:15px;">
					<h4 ><a class="list-group-item list-group-item-info" style="text-align:center;">CSE Department</a></h4>
					<?php 
					require_once 'config/config.php';
					 $SQL = "SELECT * FROM  `users` WHERE branch='CSE'";        
					 $conn = db();
						$res = mysqli_query($conn, $SQL);
						
						while ($db_field = mysqli_fetch_assoc($res))
						{	  $uid=$db_field['u_id'];
								   echo "<div class='list-group-item'>
										<div class='col-sm-6'>".$db_field['name']."</div>";
										if($db_field['chk']==1)
											
										echo "<div class='col-sm-3'><i class='fa fa-check-circle' style='color:green;'></i> </div>";
										
										else 
										echo "<div class='col-sm-3'><i class='fa fa-times-circle' style='color:red;'></i></div>";
										if($db_field['chk']==1)
										echo "<div class='col-sm-3'><a href='/sliet/print_all.php?id=".$uid."'><button type='button' class='button btn-primary'><span class=' pull-right'><i class='fa fa-print'></i> print</span></button></a></div>";
									echo "</div>";
									
									}
								?>	
									
				</div>	
			</div> 