
<!-- *************
************ Main container start *************
************* -->
<div class="content-wrapper">
  <div class="row gutters">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body p-0">
						<div class="invoice-container">
							<div class="invoice-header">
								<!-- Row start -->
								<div class="row gutters">
								
									<?php
										if($this->session->flashdata('message_danger')!=null){
										  ?>
										
									<div class="alert alert-danger" style="width:100%" role="alert">
                                       <?php 	echo $this->session->flashdata('message_danger'); ?>
                                    </div>
                                    <?php
                                    
										}
                                    ?>
										<?php
										if($this->session->flashdata('message_name')!=null){
										  ?>
										
									<div class="alert alert-success" style="width:100%" role="alert">
                                       <?php 	echo $this->session->flashdata('message_name'); ?>
                                    </div>
                                    <?php
                                    
										}
                                    ?>
								
								</div>
								<!-- Row end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<form method="POST" action="<?php echo base_url(); ?>Account/addAccount">
	<div class="content-wrapper">
	    
		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="card">
					<div class="card-header" style="background-color:#342e36;">
						<div class="card-title" style="color:white;font-size: 15px;font-weight: bold;">PERSONAL DETAILS</div>
					</div>
					<div class="card-body">
					  
						<div class="row gutters">
						    
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">User Name</label>
									<input type="text" name='clientName' value='<?php echo set_value('clientName'); ?>' class="form-control" id="inputName" placeholder=" Enter Client Name" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('clientName'); ?></span>
								</div>
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">User password</label>
									<input type="text" name='password' value='<?php echo set_value('password'); ?>'class="form-control" id="inputName" placeholder="Enter User password" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('password'); ?></span>
								</div>
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">Confirm Password</label>
									<input type="text" class="form-control" name='confirmPassword' value='<?php echo set_value('confirmPassword'); ?>'  id="inputName" placeholder="Retype Password" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('confirmPassword'); ?></span>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">Full Name</label>
									<input type="text"  name='fullName' value='<?php echo set_value('fullName'); ?>' class="form-control" id="inputName" placeholder="Enter Full Name" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('fullName'); ?></span>
								</div>
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">City</label>
									<input type="text" name='city' value='<?php echo set_value('city'); ?>' class="form-control" id="inputName" placeholder="Enter City" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('city'); ?></span>
								</div>
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">Phone</label>
									<input type="text" name='Phone' value='<?php echo set_value('Phone'); ?>' class="form-control" id="inputName" placeholder="Enter Phone No" style="font-weight: bold;font-size: 15px;">
								<span style="color:red"><?php echo form_error('Phone'); ?></span>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="card">
					<div class="card-header" style="background-color:#342e36;">
						<div class="card-title" style="color:white;font-size: 15px;font-weight: bold;">ACCOUNT DETAILS</div>
					</div>
					<div class="card-body">
						<div class="row gutters">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">Exposer Limit</label>
									<input type="number" class="form-control" name='exposerLimit' value='<?php echo set_value('exposerLimit'); ?>' id="inputName" placeholder="Enter Exposer Limit" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('exposerLimit'); ?></span>
								</div>
									  <?php
			if($_SESSION['access_level']==1){	  
				  
				  ?>
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">Referred %</label>
									<input type="text" name='refered' value='<?php echo set_value('refered'); ?>' class="form-control" id="inputName" placeholder="Enter Refered %" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('refered'); ?></span>
								</div>
			<?php
			}
			?>
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;"> Opening Balance</label>
									<input type="number" name='openingBalance' value='<?php echo set_value('openingBalance'); ?>' class="form-control" id="inputName" placeholder="Enter Opening Balance" style="font-weight: bold;font-size: 15px;">
									<span style="color:red"><?php echo form_error('openingBalance'); ?></span>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">Account Type</label>
									<select name='accounttype' value='<?php echo set_value('accounttype'); ?>' class="form-control form-control-sm" style="font-weight: bold;font-size: 15px;">
										<option value='' >Select one</option>
										<?php
	

		if($_SESSION['access_level']==1){
			
			{
		
		
		?>
									
									<option value='3'>Dealer</option>
									<option value='4'>Agent</option>
									<option value='5'>Player</option>
									<option value='7'>Result</option>
									
										<?php
		}
	}
										?>

<?php
	

if($_SESSION['access_level']==2){
		
	
	
	?>
										<option value='3'>SuperMaster</option>
									<option value='4'>Master</option>
									<option value='5'>Player</option>
									
									<?php
	
}
									?>
<?php
	if($_SESSION['access_level']==3){
		
	
	
	?>
									<option value='4'>Master</option>
									<option value='5'>PLAYER</option>
									<?php
	
}
									?>
<?php
	

	if($_SESSION['access_level']==4){
		
	
	
	?>
									
									<option value='5'>PLAYER</option>
									<?php
	
}
									?>
									</select>
									
									<span style="color:red"><?php echo form_error('accounttype'); ?></span>
								</div>
								 <?php
			if($_SESSION['access_level']==1){	  
				  
				  ?>
								<div class="form-group">
									<label for="inputName" style=" font-size:15px;font-weight:bold;">Referred by</label>
									<select name='referedby' value='<?php echo set_value('referedby'); ?>' class="form-control form-control-sm" style="font-weight: bold;font-size: 15px;">
										<option>Select one</option>
										
		<?php

		foreach ($Acount->result() as $row) {
			
										?>
								 <option value="<?php echo $row->id;?>"><?php echo $row->username;?></option>
		
		
								 <?php
		
		}
								 ?>
									</select>
									<span style="color:red"><?php echo form_error('referedby'); ?></span>
								</div>
				<?php
				
			}
				?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="card">
			<div class="card-header" style="background-color:#342e36;">
				<div class="card-title" style="color:white;font-size: 15px;font-weight: 20px;">COMMISSION DETAILS</div>
			</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Aakda Commission<span style="color:red;">	<?php
	

		if($_SESSION['access_level']!=1)
			
			{
		
		
		?><?php echo '(Max='.$Commission->aakda_com.')';  ?>) 
		<?php  }?></span>
							</label>
							<input type="text" name='aakdaCommision' value='<?php echo set_value('aakdaCommision'); ?>' class="form-control" id="inputName" placeholder="%" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('aakdaCommision'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Pana Commission<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo 'Max='.$Commission->pana_com.')'; } ?></span>
							</label>
							<input type="text"  name='panaCommision' value='<?php echo set_value('panaCommision'); ?>' class="form-control" id="inputName" placeholder="%" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('panaCommision'); ?></span>
						</div>
					</div>
					<!--
					<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Chart Single Pana Commission
							</label>
							<input type="text"  name='aakdaCommision' value='<?php //echo set_value('aakdaCommision'); ?>' class="form-control" id="inputName" placeholder="%">
							<span style="color:red"><?php //echo form_error('referedby'); ?></span>
						</div>
					</div> -->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Partnership %<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->partnership.')'; } ?></span></label>
							<input type="text"  name='partnerShip' value='<?php echo set_value('partnerShip'); ?>' class="form-control" id="inputName" placeholder="%"><span style="color:red" style="font-weight: bold;font-size: 15px;"><?php echo form_error('partnerShip'); ?></span>
						</div>
					</div>
				</div>
				<div class="row gutters">
					<!--
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Chart Double Pana Commission</label>
							<input type="text" class="form-control" id="inputName" placeholder="%">
							<span style="color:red"><?php //echo form_error('referedby'); ?></span>
						</div>
					</div> -->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Single Pana RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->singlepanarate.')'; } ?></span></label>
							<input type="text"  name='singlePana' value='<?php echo set_value('singlePana'); ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('singlePana'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Aakda RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->aakdarate.')'; } ?></span></label>
							<input type="text"  name='aakdaRate' value='<?php echo set_value('aakdaRate'); ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('aakdaRate'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Double Pana RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->doublepanarate.')'; }  ?></span></label>
							<input type="text" name='doublePana' value='<?php echo set_value('doublePana'); ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('doublePana'); ?></span>
						</div>
					</div>
					
				</div>
				<div class="row gutters">
					
					
					
					<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Triple Pana RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->triplepanarate.')'; } ?></span></label>
							<input type="text" name='tripplePana' value='<?php echo set_value('tripplePana'); ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('tripplePana'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Jodi RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->jodirate.')'; }  ?></span></label>
							<input type="text" name='jodiRate' value='<?php echo set_value('jodiRate'); ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('jodiRate'); ?></span>
						</div>
					</div>
				  <?php
			if($_SESSION['access_level']==1){	  
				  
				  ?>
				   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Win Commission</label>
							<input type="text" name='winCommision' value='<?php echo set_value('winCommision'); ?>' class="form-control" id="inputName" placeholder="%" style="font-weight: bold;font-size: 15px;">
						</div>
						<span style="color:red"><?php echo form_error('winCommision'); ?></span>
					</div>
				<?php
			}
		?>
					
				</div>
				
				
			</div>
		</div>
		
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
				<div class="card-header" style="background-color:#342e36;">
					<div class="card-title" style="color:white;font-size: 15px;font-weight: 20px;">ALLOT BAZAR</div>
				</div>
				
				<div class="card-header" >
					<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;">CHOOSE BAZAR</div>
				</div>
				<?php
						$i=1;
		foreach ($bazar->result() as $row)
    {
		?>	    
				<div class="custom-control custom-switch" style="margin-left:10px;">
					<input type="checkbox" name='bazar_<?php echo $row->id;  ?>'

					<?php $bazval='bazar_'.$row->id;if(set_value('$bazval')){ echo 'checked';}   ?> class="custom-control-input" id="customSwitch<?php echo $i; ?>">
					<label class="custom-control-label" for="customSwitch<?php echo $i; ?>" style=" font-size:15px;font-weight:bold;"><?php echo $row->bazar_name;  ?></label>
					<span style="color:red"><?php echo form_error("'bazar_'.$row->id."); ?></span>
				</div>
		<?php 
      $i++;  
	}
        ?>		
				
			</div>
			
			<div class="text-right"><button  name="createAccount" class="btn btn-primary btn-lg" style="color:white;"> <i class="icon-verified_user"></i>  &nbsp;CREATE ACCOUNT</button></div>
		</div>
	</div>
	<!-- Card end -->
	
</div>
</div>
</div>
</form>
<!-- Row end -->
