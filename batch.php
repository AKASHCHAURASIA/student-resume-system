<?php

$r=$_REQUEST['q'];

if($r=='Degree(4-Year)')
{
echo "<label>Batch</label><select id='kl1' class='form-control select2 select2-hidden-accessible' style='width: 100%;' tabindex='-1'  aria-hidden='true' onmouseup='s1()'>
                  <option selected='selected'value='12'>Select a Batch</option>
				   <option value='".date('y')."'> 2k".date('y')."</option>
              <option value='".(date('y')-1)."'>2k".(date('y')-1)."</option>
                  <option value='".(date('y')-2)."'>2k".(date('y')-2)."</option>
<option value='".(date('y')-3)."'>2k".(date('y')-3)."</option>
                  
                </select>";
}
if($r=='Degree(3-Year)')
{
echo "<label>Batch</label><select id='kl1' class='form-control select2 select2-hidden-accessible' 
style='width: 100%;' tabindex='-1' aria-hidden='true' onmouseup='s1()' >
                  <option selected='selected' value='12'>Select a Batch</option>
				   <option value='".date('y')."'> 2k".date('y')."</option>
              <option value='".(date('y')-1)."'>2k".(date('y')-1)."</option>
                  <option value='".(date('y')-2)."'>2k".(date('y')-2)."</option>

                  
                </select>";
}

?>
