<?php 
echo "<input type='hidden' value='2018' id='search1'>";
echo "<div class='row dept'>
				<div class='col-md-12' style='border:1px solid black; padding-top:15px; padding-bottom:15px;min-height:80px'>
					<div class='col-sm-12'><h4>Year of Passing : 2018</h4></div>
					<form>
					<label class='col-sm-2'><h4>Department</h4></label>
					<div class='col-sm-4 '>
					<div class='form-group'>
					  <select class='form-control'  name='dept' id='search2'>
						<option value='Computer Science and Engineering'>Computer Science and Engineering</option>
                        <option value='Chemical Engineering'>Chemical Engineering</option>
						<option value='Civil Engineering'>Civil Engineering</option>
                        <option value='Electronics and Communication Engineering'>Electronics and Communication Engineering</option>
                        <option value='Electrical and Instrumentation Engineering'>Electrical and Instrumentation Engineering</option>
                        <option value='Food Engineering and Technology'>Food Engineering and Technology</option>
                        <option value='Mechanical Engineering'>Mechanical Engineering</option>
                        
                      </select>
					</div>
					</div>
					</form>
					<div class='col-sm-2'><button onclick='search()'  class='btn btn-primary'><span style='color: white'>Search</span> </button> </div>			
				</div>					

			</div>";
?>			