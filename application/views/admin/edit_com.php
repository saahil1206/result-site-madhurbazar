<form method="post" action="<?php echo base_url();   ?>Account/editCommission">
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
							<input type="hidden" name='user_id' value='<?php echo $Commissionedit->game_user_id; ?>' >
							<input type="hidden" name='com_id' value='<?php echo $Commissionedit->com_id; ?>' >
							<input type="text" name='aakdaCommision' value='<?php echo $Commissionedit->aakda_com; ?>' class="form-control" id="inputName" placeholder="%" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('aakdaCommision'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Pana Commission<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo 'Max='.$Commission->pana_com.')'; } ?></span>
							</label>
							<input type="text"  name='panaCommision' value='<?php echo $Commissionedit->pana_com; ?>' class="form-control" id="inputName" placeholder="%" style="font-weight: bold;font-size: 15px;">
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
							<input type="text"  name='partnerShip' value='<?php echo $Commissionedit->partnership; ?>' class="form-control" id="inputName" placeholder="%"><span style="color:red" style="font-weight: bold;font-size: 15px;"><?php echo form_error('partnerShip'); ?></span>
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
							<input type="text"  name='singlePana' value='<?php echo $Commissionedit->singlepanarate; ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('singlePana'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Aakda RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->aakdarate.')'; } ?></span></label>
							<input type="text"  name='aakdaRate' value='<?php echo $Commissionedit->aakdarate; ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('aakdaRate'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Double Pana RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->doublepanarate.')'; }  ?></span></label>
							<input type="text" name='doublePana' value='<?php echo $Commissionedit->doublepanarate; ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('doublePana'); ?></span>
						</div>
					</div>
					
				</div>
				<div class="row gutters">
					
					
					
					<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Triple Pana RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->triplepanarate.')'; } ?></span></label>
							<input type="text" name='tripplePana' value='<?php echo $Commissionedit->triplepanarate; ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('tripplePana'); ?></span>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Jodi RATE<span style="color:red;">
							    <?php if($_SESSION['access_level']!=1){ echo '(Max='.$Commission->jodirate.')'; }  ?></span></label>
							<input type="text" name='jodiRate' value='<?php echo $Commissionedit->jodirate; ?>' class="form-control" id="inputName" placeholder="Rate" style="font-weight: bold;font-size: 15px;">
							<span style="color:red"><?php echo form_error('jodiRate'); ?></span>
						</div>
					</div>
				  <?php
			if($_SESSION['access_level']==1){	  
				  
				  ?>
				   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Win Commission</label>
							<input type="text" name='winCommision' value='<?php echo $Commissionedit->wincom; ?>' class="form-control" id="inputName" placeholder="%" style="font-weight: bold;font-size: 15px;">
						</div>
						<span style="color:red"><?php echo form_error('winCommision'); ?></span>
					</div>
				<?php
			}
		?>
					
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
		foreach ($bazarall->result() as $row)
    {
        $bazarid=array();
        foreach ($bazar->result() as $row3)
    {
       $bazarid[]=$row3->id;
    }
		?>	    
				<div class="custom-control custom-switch" style="margin-left:10px;">
					<input type="checkbox" name='bazar_<?php echo $row->id;  ?>'

					<?php if(in_array($row->id,$bazarid)){ echo 'checked';}   ?> class="custom-control-input" id="customSwitch<?php echo $i; ?>">
					<label class="custom-control-label" for="customSwitch<?php echo $i; ?>" style=" font-size:15px;font-weight:bold;"><?php echo $row->bazar_name;  ?></label>
					<span style="color:red"><?php echo form_error("'bazar_'.$row->id."); ?></span>
				</div>
		<?php 
      $i++;  
	}
        ?>		
				
			</div>		
		<div class="text-right"><button  name="updateComission" class="btn btn-primary btn-lg" style="color:white;"> <i class="icon-verified_user"></i>  &nbsp;Update Commission</button></div>
				
			</div>
		</div>
		
		</form>