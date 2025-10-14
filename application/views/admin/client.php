<!-- Data Tables -->
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />	
<div class="accordion toggle-icons" id="toggleIcons">
								<div class="accordion-container" >
									<div class="accordion-header" id="toggleIconsTwo">
										<a  href="#" class="collapsed" data-toggle="collapse" data-target="#toggleIconsCollapseTwo" aria-expanded="false" aria-controls="toggleIconsCollapseTwo">
											<i class="icon icon-shield1"></i> CLICK ME
										</a>
									</div>
									<div id="toggleIconsCollapseTwo" class="collapse" aria-labelledby="toggleIconsTwo" data-parent="#toggleIcons">
										<div class="accordion-body" style="background-color:#342e36;">
											
									
									<div class="row gutters" style="color:white;">
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group row">
										<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="text" style="color:white;"readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
										</div>
									</div>
									

										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group row">
										<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="text"  style="color:white;"readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
										</div>
									</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group row">
										<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="text"  style="color:white;"readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
										</div>
									</div>
										</div>
									</div>

								
										</div>
									</div>
								</div>
							</div>
	<div class="content-wrapper">
		<div class="row gutters">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body p-0">
						<div class="invoice-container">
							<div class="invoice-header">
								<!-- Row start -->
								<div class="row gutters">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="invoice-logo"></div>
									</div>

									<!-- <div class="col-lg-6 col-md-6 col-sm-6">
										<div class="btn-group float-right"style="  font-size: 30px;">
											<button href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bd-example-modal-xl">
											<i class="icon-export" ></i> PDF
											</button>
											&nbsp;
											<button href="#" class="btn btn-secondary btn-lg">
											<i class="icon-printer"></i> EXCEL
											</button>
										</div>
										
									</div> -->
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
		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="table-container">
					<div class="card-header" >
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-user"></i> CLIENT LIST</div>
						
					
						<a href="<?php echo base_url('Account/addAccount');?>" class="btn btn-warning btn-lg"  style="position: absolute;top:50px;right:30px;"></i>ADD CLIENT</a><br><br>
						
						
						
						
						
					</div>
					
					<!--*************************
						*************************
						*************************
						Basic table start
					*************************
					*************************
					*************************-->
					<div class="table-responsive">
						<table id="basicExample" class="table m-0">
							<thead>
								<tr>
									<th>CLIENT</th>
									<th>USERNAME</th>
									<th>BALANCE</th>
									<th>CLIENT(P/L)</th>
									
									<th>U.ST.</th>
									<th>B.ST.</th>
									<th>EXP.LIMIT</th>
									<th>A/C TYPE</th>
										<?php
									if($ActionStatus=='display'){
									
									?>
									<th>ACTIONS</th>
									<?php
									}
									?>
								</tr>
							</thead>
							<tbody>

								<?php

foreach ($Acount->result() as $row) {
	
								?>
								<tr>
									<td><?php
									if($row->game_group_id!=5){
									?>
									<a href="<?php echo base_url();  ?>Account/index/<?php echo $row->id; ?>/<?php echo $row->game_group_id; ?>"><?php echo $row->fullname;  ?>
									<?php  
									}else{

									

?>
<?php echo $row->fullname;  ?>
<?php

									}
?>
									
									</td>
								   
								    <th><?php echo $row->username;  ?></th>
									<td><?php echo $row->creditrefrence;  ?></td>
										
									<td>0</td>
									
									<td>
										<?php
if($row->blocked_status==1){
										?>

										<button type="button" class="btn btn-success"><i class="icon-check2"></i></button>
										

										<?php
}else{

?>

<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i></button>

	<?php
}
	?>
									

									</td>
									<td><?php
if($row->transaction_status==1){
										?>

										<button type="button" class="btn btn-success"><i class="icon-check2"></i></button>
										

										<?php
}else{
?>


<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i></button>

	<?php
}
	?></td>
									<td><?php echo $row->exposurelimit;  ?></td>
									<td><span class="btn  btn-danger" ><?php  echo $row->GAME_Group_name;?></span></td>
									<?php
									if($ActionStatus=='display'){
									
									?>
									<td>
										<div class="btn-group btn-group-sm">
										<a href="javascript:void(0);" class="depositData" 
										data-userid="<?php echo $_SESSION['userid'] ?>" 
										data-logedinaccess="<?php echo $_SESSION['access_level'] ?>" 
										data-logedinusername="<?php echo $_SESSION['username'] ?>" 
										data-loggedinbalance="<?php echo $balance ?>" 
										data-id="<?php  echo $row->id;?>" 
										data-balance="<?php  echo $row->creditrefrence;?>" 
										data-username="<?php  echo $row->username;?>">
											<button type="button" class="btn btn-warning btn-lg"style="padding: 5px;" >
											DP
											</button>
										</a>	
											&nbsp;&nbsp;
											<a href="javascript:void(0);" class="widrawData"
										data-userid="<?php echo $_SESSION['userid'] ?>" 
										data-logedinaccess="<?php echo $_SESSION['access_level'] ?>" 
										data-logedinusername="<?php echo $_SESSION['username'] ?>" 

										data-loggedinbalance="<?php echo $balance ?>" 
										data-id="<?php  echo $row->id;?>" 
										data-balance="<?php  echo $row->creditrefrence;?>" 
										data-username="<?php  echo $row->username;?>">
											<button type="button" class="btn btn-warning btn-lg"style="padding: 5px;">
											WD
											</button>
										

											&nbsp;&nbsp;
											<a href="javascript:void(0);" class="credit" 
										data-id="<?php  echo $row->id;?>" 
										data-balance="<?php  echo $row->exposurelimit;?>" 
										data-username="<?php  echo $row->username;?>">
											<button type="button" class="btn btn-warning btn-lg" style="padding: 5px;">
											LM
											</button>
											</a>	
											&nbsp;&nbsp;
											<a href="javascript:void(0);" class="password" 
										data-id="<?php  echo $row->id;?>" 
							
										data-username="<?php  echo $row->username;?>">
											<button type="button" class="btn btn-warning btn-lg" style="padding: 5px;">
											PS
											</button>
											</a>
											&nbsp;&nbsp;
											<a href="javascript:void(0);" class="status" 
										data-id="<?php  echo $row->id;?>" 
							            data-transactiostatus="<?php  echo $row->transaction_status;?>"
							            data-blockedstatus="<?php  echo $row->blocked_status;?>"
										data-username="<?php  echo $row->username;?>">
											<button type="button" class="btn btn-warning btn-lg"style="padding: 5px;">
											ST
											</button>
										</div>
									</td>
									<?php
									}
									?>
								</tr>
								<?php

}
								?>
							</tbody>
						</table>
					</div>
					<!--*************************
						*************************
						*************************
						Basic table end
					*************************
					*************************
					*************************-->
				</div>
			</div>
		</div>
		<!-- Row end -->
		<!-- Modal -->
		<form method="POST" action="<?php  echo base_url(); ?>Account/deposit">
		<div class="modal fade" id="deposit" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="basicModalLabel">DEPOSIT</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-4 col-form-label" id="ownusernameD" style="font-size:15px;font-weight:bold;"></label>
							<div class="col-md-4 col-12">
							<input type="hidden" name="accessidD" id="accessidD" class="form-control" readonly>
						<input type="hidden" name="admin_id_editD" id="admin_id_editD" class="form-control" readonly>
							<input type="text" name="myamtD" id="myamtD" class="form-control" readonly>
							</div>
							<div class="col-md-4 col-12">
							    
								<input type="text" name="mybalD" id="mybalD" class="form-control" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" id="clientusernameD" style="font-size:15px;font-weight:bold;">Client Name</label>
							<div class="col-md-4">
							
								<input type="hidden" name="id_editD" id="id_editD" class="form-control" readonly>
								<input type="text" name="userD" id="userD" class="form-control" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" name="userbalD" id="userbalD" class="form-control" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Amount</label>
							<div class="col-md-8">
								<input type="number" min="0" name="amtD" id="amtD" required class="form-control" placeholder="Deposit Amount">
							    <span id="errorData" style="color:red;"></span>
							</div>
							
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Remarks</label>
							<div class="col-md-8">
								<textarea name="remarkD" id="remarkD" required class="form-control"></textarea>
							</div>
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal"> <i class="icon-reply"></i>&nbsp; Close</button>
							<input  type="submit" name="depositSave" value="DepositSave" class="btn btn-primary">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<form method="POST" action="<?php  echo base_url(); ?>Account/withdraw">
		<div class="modal fade" id="widrawl" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="basicModalLabel">WITHDRAW</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<div class="form-group row">
							<label class="col-md-4 col-form-label" id="ownusernameW" style="font-size:15px;font-weight:bold;"></label>
							<div class="col-md-4 col-12">
							<input type="hidden" name="accessidW" id="accessidW" class="form-control" readonly>
								<input type="hidden" name="admin_id_editW" id="admin_id_editW" class="form-control" readonly>
						
							
							<input type="text" name="myamtW" id="myamtW" class="form-control" readonly>
							</div>
							<div class="col-md-4 col-12">
							    
								<input type="text" name="mybalW" id="mybalW" class="form-control" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" id="clientusernameW" style="font-size:15px;font-weight:bold;">Client Name</label>
							<div class="col-md-4">
							<input type="hidden" name="id_editW" id="id_editW" class="form-control" readonly>
								<input type="text" name="userW" id="userW" class="form-control" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" name="userbalW" id="userbalW" class="form-control" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Amount</label>
							<div class="col-md-8">
								<input type="number" min="0" name="amtW" id="amtW" required class="form-control" placeholder="Deposit Amount">
							    <span id="errorDataW" style="color:red;"></span>
							</div>
							
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Remarks</label>
							<div class="col-md-8">
								<textarea name="remarkW" id="remarkW" required class="form-control"></textarea>
							</div>
						</div>
					
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-reply"></i>&nbsp;Close</button>
							<input  type="submit" name="WithdrwalSave" value="WithdrwalSave" class="btn btn-primary">
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<form method="POST" action="<?php  echo base_url(); ?>Account/limit">
		<div class="modal fade" id="limit" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="basicModalLabel">EXPOSURE LIMIT</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Client Name</label>
							<div class="col-md-8">
							   <input type="hidden" name="id_edit" id="id_edit" class="form-control" readonly>
								<input type="text" name="clientname" id="clientname" class="form-control" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Old Limit</label>
							<div class="col-md-8">
								<input type="text" name="olimit" id="olimit" class="form-control" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">New Limit</label>
							<div class="col-md-8">
								<input type="number" min="0" name="nlimit" id="nlimit" class="form-control">
							</div>
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-reply"></i>&nbsp;Close</button>
							<input  type="submit" class="btn btn-primary" value="save" name="limitsave">
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<form method="POST" action="<?php  echo base_url(); ?>Account/credit">
		<div class="modal fade" id="credit" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="basicModalLabel" style=" font-size:15px;font-weight:bold;">EXPOSURE LIMIT
</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Client Name</label>
							<div class="col-md-8">
							    <input type="hidden" name="id_edit" id="id_edit" class="form-control" readonly>
								<input type="text" name="clientname" id="clientname" class="form-control" readonly>
							</div>
							
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Old Limit</label>
							<div class="col-md-8">
								<input type="text" required name="ocredit" id="ocredit" class="form-control" readonly>
							</div>
							<span style="color:red"><?php echo form_error('ocredit'); ?></span>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">New Limit</label>
							<div class="col-md-8">
								<input type="number" required min="0" name="ncredit" id="ncredit" class="form-control">
							</div>
						</div>
						<span style="color:red"><?php echo form_error('ncredit'); ?></span>
					
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-reply"></i>&nbsp;Close</button>
							<input  type="submit" class="btn btn-primary" value="save" name="creditsave">
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<form method="POST" action="<?php  echo base_url(); ?>Account/changepassword">
		<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="basicModalLabel" style=" font-size:15px;font-weight:bold;">PASSWORD</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Client Name</label>
							<div class="col-md-8">
							<input type="hidden" name="id_edit" id="id_edit" class="form-control" readonly>
								<input type="text" name="clientname"  required  id="agentamtW" class="form-control" readonly>
							</div>
							
							
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">New Password</label>
							<div class="col-md-8">
								<input type="password" required name="npassword" value='<?php echo set_value('npassword'); ?>' id="npassword" 
								class="form-control" placeholder="Enter Password">
							</div>
							<span style="color:red"><?php echo form_error('npassword'); ?></span>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Confirm Password</label>
							<div class="col-md-8">
								<input type="text" required  name="cpassword" value='<?php echo set_value('cpassword'); ?>'
								id="cpassword" class="form-control" placeholder="Enter Password">
							</div>
							<span style="color:red"><?php echo form_error('cpassword'); ?></span>
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-reply"></i>&nbsp;Close</button>
							<input  type="submit" class="btn btn-primary" value="save" name="changepassword">
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<form method="post" action="<?php  echo base_url(); ?>Account/changestatus">
		<div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="basicModalLabel" style=" font-size:15px;font-weight:bold;">CHANGE STATUS</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-4 col-form-label" style=" font-size:15px;font-weight:bold;">Client Name</label>
							<div class="col-md-8">
							    <input type="hidden" name="id_edit" id="id_edit" class="form-control" readonly> 
								<input type="text" name="clientname" id="agentamtW" class="form-control" readonly>
							</div>
							
						</div>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" name="loginstatus"  id="customSwitch10">
							<label class="custom-control-label" for="customSwitch10" style=" font-size:15px;font-weight:bold;">Login Status</label>
						</div> <br>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" name="gamestatus" id="customSwitch11">
							<label class="custom-control-label" for="customSwitch11"   style=" font-size:15px;font-weight:bold;">Game Status</label>
						</div>    <br>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input"  name="closestatus" id="customSwitch12">
							<label class="custom-control-label" for="customSwitch12"   style=" font-size:15px;font-weight:bold;">Close User</label>
						</div>  <br>
					
						
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-reply"></i>&nbsp;Close</button>
							<input  	type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-sm" value="Save">
						
						</div>
					</div>type="submit" class="btn btn-primary" value="save" name="changestatus"
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title"  id="mySmallModalLabel">Are You Sure You Want to Submit ?</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													...
												</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="icon-reply"></i>&nbsp;No</button>
							<input  type="submit" class="btn btn-primary" value="Yes" name="changestatus">
												</div>
											</div>
									  </div>
									</div>
	</form>
	
	<script>
	
 $('.depositData').on('click', function(){

	$(function(){
 $('body').on('keyup',function(){// run anytime the value changes
  var enteredvalue = parseFloat($('#amtD').val()) || 0; // get value of field
  var uservalue = parseFloat($('#myamtD').val()) || 0; // convert it to a float
  var agentvalue =  parseFloat($('#userD').val()) || 0; // convert it to a float
  var accessidD =  parseFloat($('#accessidD').val()) || 0; // convert it to a float
  if(accessidD==1 || accessidD==2){
  
  }else{
	if(enteredvalue<=uservalue){
     $('#errorData').html('Amount must be less than ur balance');
  
  }
  }

  if(enteredvalue== 0){
	var newadminamount=0;
	var newuseramount=0;
	}else{
  var newadminamount= uservalue-enteredvalue;
  var newuseramount= agentvalue+enteredvalue;
	}
  $('#mybalD').val(newadminamount); // output it
  $('#userbalD').val(newuseramount);
  
});
   });
	
var id = $(this).data('id');
var balance = $(this).data('balance');
var username = $(this).data('username');
var aceessid = $(this).data('logedinaccess');

var useridid = $(this).data('userid');
var userbalance = $(this).data('loggedinbalance');
var userusername = $(this).data('logedinusername');
if(aceessid==1 || aceessid==2){
var userbalance=0;
}
$('#deposit').modal('show');
$('[name="id_editD"]').val(id);
$('#clientusernameD').html(username);
$('[name="userD"]').val(balance);


$('[name="admin_id_editD"]').val(useridid);
$('#ownusernameD').html(userusername);
$('[name="myamtD"]').val(userbalance);
$('[name="accessidD"]').val(aceessid);


});

$('.widrawData').on('click', function(){

	$(function(){
 $('body').on('keyup',function(){// run anytime the value changes
  var enteredvalue = parseFloat($('#amtW').val()) || 0; // get value of field
  var uservalue = parseFloat($('#myamtW').val()) || 0; // convert it to a float
  var agentvalue =  parseFloat($('#userW').val()) || 0; // convert it to a float
  var accessidD =  parseFloat($('#accessidW').val()) || 0; // convert it to a float
  if(accessidD==1 || accessidD==2){
  
  }else{
	if(enteredvalue>uservalue){
     $('#errorData').html('Amount must be less than ur balance');
  
  }
  }

  if(enteredvalue== 0){
	var newadminamount=0;
	var newuseramount=0;
	}else{
  var newadminamount= uservalue+enteredvalue;
  var newuseramount= agentvalue-enteredvalue;
	}
  $('#mybalW').val(newadminamount); // output it
  $('#userbalW').val(newuseramount);
  
});
   });
	
var id = $(this).data('id');
var balance = $(this).data('balance');
var username = $(this).data('username');
var aceessid = $(this).data('logedinaccess');

var useridid = $(this).data('userid');
var userbalance = $(this).data('loggedinbalance');
var userusername = $(this).data('logedinusername');
if(aceessid==1 || aceessid==2){
var userbalance=0;
}
$('#widrawl').modal('show');
$('[name="id_editW"]').val(id);
$('#clientusernameW').html(username);
$('[name="userW"]').val(balance);


$('[name="admin_id_editW"]').val(useridid);
$('#ownusernameW').html(userusername);
$('[name="myamtW"]').val(userbalance);
$('[name="accessidW"]').val(aceessid);

});

$('.limitData').on('click', function(){
	
	var id = $(this).data('id');
	var exposurelimit = $(this).data('exposurelimit');
	var username = $(this).data('username');
	
	$('#limit').modal('show');
	$('[name="id_edit"]').val(id);
	$('[name="clientname"]').val(username);
	$('[name="olimit"]').val(exposurelimit);
	
	
	});

	$('.credit').on('click', function(){
	
	var id = $(this).data('id');
	var creditbalance = $(this).data('balance');
	var username = $(this).data('username');
	
	$('#credit').modal('show');
	$('[name="id_edit"]').val(id);
	$('[name="clientname"]').val(username);
	$('[name="ocredit"]').val(creditbalance);
	
	
	});	
	$('.credit').on('click', function(){
	
	var id = $(this).data('id');
	var creditbalance = $(this).data('balance');
	var username = $(this).data('username');
	
	$('#credit').modal('show');
	$('[name="id_edit"]').val(id);
	$('[name="clientname"]').val(username);
	$('[name="ocredit"]').val(creditbalance);
	
	
	});	
	$('.password').on('click', function(){
	
	var id = $(this).data('id');
	
	var username = $(this).data('username');
	
	$('#password').modal('show');
	$('[name="id_edit"]').val(id);
	$('[name="clientname"]').val(username);
	
	
	
	});	
	$('.status').on('click', function(){
	
	var id = $(this).data('id');
	debugger;
	var username = $(this).data('username');
		var transactiostatus = $(this).data('transactiostatus');
		var blockedstatus = $(this).data('blockedstatus');
		if(transactiostatus==1){
		   $("#customSwitch11").prop("checked", true);
		}
		
		if(blockedstatus==1){
		  $("#customSwitch10").prop("checked", true);
		}
	$('#status').modal('show');
	$('[name="id_edit"]').val(id);
	$('[name="clientname"]').val(username);
	//$('[name="transactionstatus"]').val(transactiostatus);
	//$('[name="blockedstatus"]').val(blockedstatus);
	
	
	});	
	</script>
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Data Tables -->
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>
		<script src="vendor/datatables/custom/fixedHeader.js"></script>
