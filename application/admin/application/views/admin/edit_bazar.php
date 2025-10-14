
<!-- *************
************ Main container start *************
************* -->
	<form method="POST" action="">
	<div class="content-wrapper">
		<!-- Row start -->
		<div class="row gutters">
		<?php
		if(isset($success_message)){
		?>
		     <div>
			 
			 <?php echo $success_message; ?>
			 </div>
			 
			 <?php
		}else if(isset($success_message)){
			 ?>
			   <div>
			 
			 <?php echo $danger_message; ?>
			 </div>
			 
			 <?php
		}
		$row = $bazardays->row();
		$row2 = $bazar->row();
			 ?>
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
				<div class="card">
				
					<div class="card-header">
						<div class="card-title" style="font-size:19px;text-align:center;">CHOOSE DAYS</div>					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" onclick="updateCount()" class="test custom-control-input" <?php if($row->sunday){ echo'checked' ;} ?> name='Sunday'   id="customSwitch1">
						<label class="custom-control-label" for="customSwitch1"  style=" font-size:15px;font-weight:bold;">Sunday</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" onclick="updateCount()" class="test custom-control-input" <?php if($row->monday){ echo'checked' ;} ?> name='Monday' id="customSwitch2">
						<label class="custom-control-label" for="customSwitch2" name='Monday' style=" font-size:15px;font-weight:bold;">Monday</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" onclick="updateCount()" class="custom-control-input" <?php if($row->tuesday){ echo'checked' ;} ?> name='Tuesday' id="customSwitch3">
						<label class="custom-control-label" for="customSwitch3" name='Tuesday' style=" font-size:15px;font-weight:bold;">Tuesday</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" onclick="updateCount()" class="custom-control-input" <?php if($row->wednesday){ echo'checked' ;} ?> name='Wednesday' id="customSwitch4">
						<label class="custom-control-label" for="customSwitch4"  name='Wednesday'style=" font-size:15px;font-weight:bold;">Wednesday</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" onclick="updateCount()" class="custom-control-input" <?php if($row->thursday){ echo'checked' ;} ?> name='Thursday' id="customSwitch5">
						<label class="custom-control-label" for="customSwitch5" name='Thursday' style=" font-size:15px;font-weight:bold;">Thursday</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" <?php if($row->friday){ echo'checked' ;} ?> name='Friday' class="custom-control-input" onclick="updateCount()" id="customSwitch6">
						<label class="custom-control-label" for="customSwitch6" name='Friday' style=" font-size:15px;font-weight:bold;">Friday</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" <?php if($row->saturday){ echo'checked' ;} ?> name='Saturday' onclick="updateCount()"  id="customSwitch7">
						<label class="custom-control-label" for="customSwitch7" name='Saturday' style=" font-size:15px;font-weight:bold;"> Saturday</label>
					</div>
						<br><br>	
			................................................
			<br><br>
						<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" <?php if( $row2->timeupdate ){ echo'checked' ;} ?> name='timeupdate'   id="customSwitch8">
						<label class="custom-control-label" for="customSwitch8" name='timeupdate' style=" font-size:15px;font-weight:bold;"> Time Update</label>
					</div>
						
						<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" <?php if($row2->editresult){ echo'checked' ;} ?> name='editresult'   id="customSwitch9">
						<label class="custom-control-label" for="customSwitch9" name='editresult' style=" font-size:15px;font-weight:bold;"> Edit Result</label>
					</div>
				
						<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" <?php if($row2->noticeupdate){ echo'checked' ;} ?> name='noticeupdate'   id="customSwitch10">
						<label class="custom-control-label" for="customSwitch10" name='noticeupdate' style=" font-size:15px;font-weight:bold;"> Notice Update</label>
					</div>
				
						<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" <?php if($row2->higlightbazar){ echo'checked' ;} ?> name='higlightbazar' id="customSwitch11">
						<label class="custom-control-label" for="customSwitch11" name='higlightbazar' style=" font-size:15px;font-weight:bold;"> Highllight bazar</label>
					</div>
				
						<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" <?php if($row2->listbazar){ echo'checked' ;} ?> name='listbazar'  id="customSwitch12">
						<label class="custom-control-label" for="customSwitch12" name='listbazar' style=" font-size:15px;font-weight:bold;"> List In Live Game Result</label>
					</div>
					
				</div>
			</div>
			
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header" style="background-color:#342e36;">
						<div class="card-title" style="color:white;font-size: 15px;font-weight: 20px;">ADD NEW BAZAR</div>
					</div>
					<div class="card-body">
						<div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="fullName" style=" font-size:15px;font-weight:bold;">Bazar Name</label>
									<input type="text" class="form-control" id="fullName" value='<?php echo $row2->bazar_name; ?>'  name='gameName' placeholder="Game Name" style="font-weight: bold;font-size: 15px;">
								</div>
								<span style="color:red"><?php echo form_error('gameName'); ?></span>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="agE" style=" font-size:15px;font-weight:bold;">Open Time</label>
									<input type="time" class="form-control" id="agE" value='<?php echo $row2->open_time; ?>' name='openTime' placeholder="Time Of Open" style="font-weight: bold;font-size: 15px;">
									
								</div>
								<span style="color:red"><?php echo form_error('openTime'); ?></span>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="phoNe" style=" font-size:15px;font-weight:bold;">Close Time</label>
									<input type="time" class="form-control" id="phoNe" name='closeTime' value='<?php echo $row2->close_time; ?>' placeholder="Time Of Close" style="font-weight: bold;font-size: 15px;">
								</div>
								<span style="color:red"><?php echo form_error('closeTime'); ?></span>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="daysofplay" style=" font-size:15px;font-weight:bold;">Number Of DAYS </label>
									
									<input class="form-control" readonly value='<?php  echo $row2->total_days; ?>' id="daysofplay" type="text" name="daysofplay"style="font-weight: bold;font-size: 15px;" >
								</div>
								<span style="color:red"><?php echo form_error('daysofplay'); ?></span>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="fullName" style=" font-size:15px;font-weight:bold;">Open Block Time</label>
									<input type="time" class="form-control" value='<?php  echo $row2->open_block_time; ?>' id="blocktime" name='openblocktime' placeholder="Enter Bat Block Time" style="font-weight: bold;font-size: 15px;">
								</div>
								<span style="color:red"><?php echo form_error('openblocktime'); ?></span>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="fullName" style=" font-size:15px;font-weight:bold;">Close Block Time</label>
									<input type="time" class="form-control" value='<?php  echo $row2->close_block_time; ?>' id="blocktime" name='closeblocktime' placeholder="Enter Bat Block Time" style="font-weight: bold;font-size: 15px;">
								</div>
								<span style="color:red"><?php echo form_error('closeblocktime'); ?></span>
							</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="notice" style=" font-size:15px;font-weight:bold;">Notice </label>
									
									<input class="form-control"  value='<?php  echo $row2->Notice; ?>' id="notice" type="text" name="notice"style="font-weight: bold;font-size: 15px;" >
								</div>
								<span style="color:red"><?php echo form_error('notice'); ?></span>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="store" style=" font-size:15px;font-weight:bold;">Active</label>
									<select class="form-control" id="active" value='<?php echo $row2->status; ?>' name="bazarStatus" style="font-weight: bold;font-size: 15px;">
										<?php
                                        if($row2->status==1){
										?>
                                          <option value="1">Active</option>
										<?php
										}else{
										?>
                                          <option value="0">DeActive</option>

										<?php
										}
										?>
										<option value="1">Active</option>
										<option value="0">DeActive</option>
									</select>
								</div>
								<span style="color:red"><?php echo form_error('bazarStatus'); ?></span>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="text-right">
									<button class="btn btn-primary btn-lg" name='editBazar' style=" font-size:15px;font-weight:bold;"><i class="icon-verified_user"></i>  &nbsp;Create Bazar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Row end -->
	</div>
</div>
</form>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
window.updateCount = function() {
	debugger;
    var number = $("input[type=checkbox]:checked").length;
    // $('#daysofplay').html(number);
	 document.getElementById('daysofplay').value=number
};

</script>
