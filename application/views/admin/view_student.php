<section id="view" class="bg-light-gray">
  <div class="container">
  	<div class="row">
	    <div class="col-lg-12 text-center">
	        <h2 class="section-heading">View Student</h2>
	        <h3 class="section-subheading text-muted">All Details Students</h3>
	        <table class="table table-striped table-bordered table-hover">
	        	<thead id="thbody">
		        	<tr style="background-color: #fed136">
		        		<th>#</th>
		        		<th>Student Name</th>
		        		<th>Email ID</th>
		        		<th>Password</th>
		        		<th>Address</th>
		        		<th>Date Of Birth</th>
		        		<th>City</th>
		        		<th>Gender</th>
		        		<th>Status</th>
		        	</tr>
	            </thead>
	            <?php $res;?>
	        	<tbody id="tbodysearch">
	        	<?php	                  
	        	if ($res != 0 || $res != FALSE) {
                  $a = 1;
                    foreach ($res as $key => $value) {?>
                      <?php if($value->status == 1){
                          $Status = "checked='checked'";
                          } else {
                          $Status = "";
                          }
                      ?>
	        		<tr>
	        			<td><a class="btn btn-primary" name="txt_edit" id="txt_edit"><i class="fa fa-edit"></i></a></td>
	        			<td><input type='hidden' id='txt_ID[<?php echo $a;?>]' class='form-control' name='txt_ID[<?php echo $a;?>]' value='<?php echo $value->id; ?>'><?php echo $value->username?></td>
	        			<td><?php echo $value->email?></td>
	        			<td><?php echo $value->password?></td>
	        			<td><?php echo $value->address?></td>
	        			<td><?php echo $value->dob?></td>
	        			<td><?php echo $value->city?></td>
	        			<td><?php echo $value->gender?></td>
	        			<td style='text-align: center;'><input type='checkbox' id='chk[<?php echo $a;?>]' name='chk[<?php echo $a;?>]' <?php echo $Status;?> style='padding: 7px;'></td>
	        		</tr>
	        		<?php
                     $a++; 
                     }
                     } 
                     ?>
	        	</tbody>
	        </table>
	    </div>
	</div>
</section>