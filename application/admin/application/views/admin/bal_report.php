
<!-- *************
************ Main container start *************
************* -->

	<!-- Page header end -->
	<div class="content-wrapper">
		<!-- Row start -->
		<div class="card-body">
			<form method="post" action="<?php  echo base_url(); ?>AdminBalanceReport/index">
				<div class="row gutters">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName"  style=" font-size:15px;font-weight:bold;">Date From
							</label>
							<input type="date"  name="datefrom" value='<?php echo set_value('datefrom'); ?>' class="form-control" id="inputName" style="font-weight: bold;font-size: 15px;">
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Date To
							</label>
							<input type="date" name="dateto" value='<?php echo set_value('dateto'); ?>'  class="form-control" id="inputName" style="font-weight: bold;font-size: 15px;">
						</div>
					</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName"style=" font-size:15px;font-weight:bold;">Account</label>
							<select class="form-control select_group"  id="showWaiter" name="username" style="font-weight: bold;font-size: 15px;">
                      
                        <?php
                        if($_SESSION['access_level']!=1){
                        ?>
                         <option value="<?php echo $_SESSION['userid'];?>"><?php echo $_SESSION['username'];?></option>
                         <?php
                         
                         }
                         ?>
                        	<?php

foreach ($Acount->result() as $row) {
	
								?>
                         <option value="<?php echo $row->id;?>"><?php echo $row->username;?></option>


                         <?php

}
                         ?>
                      
                      </select>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<button name="balancesearch" class="btn btn-warning btn-lg" data-toggle="modal" data-target=".bd-example-modal-xl" style="margin-top: 22px;margin-left: 15px;font-size: 15px;">
											<i class="icon-search" ></i> Search
											</button> 
						</div>
					</div>
				</div>
				
			</div>

		</form>								
<br><br><br>
		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="table-container">
					<div class="card-header" >
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;BALANCE REPORT</div>
					</div>
			<!--*************************
						*************************
						*************************
						Basic table start
					*************************
					*************************
					*************************-->
					<div class="table-responsive">
						<table id="basicExample" class="table">
							<thead>
								<tr>
								    <th>DATE</th>
								     <th>Username</th>
									<th>TRANS.ID</th>
								
									<th>FROM/TO</th>
									<th>DEBIT</th>
									<th>CREDIT</th>
									<th>CLOSING</th>
									<th>DESCRIPTION</th>
								</tr>
							</thead>
							<tbody>
							<?php
		foreach ($passbook->result() as $row)
    {
		?>
								<tr>
								    <td><?php echo $row->date;  ?></td>
								     <th><?php echo $row->username;  ?></th>
									<td><?php echo $row->tran_id;  ?></td>
									<td><?php
										if($row->datato)
									{ 
									echo getUserNameById($row->datafrom); 
									
									}
									?>/
									<?php 
									if($row->datato)
									{ 
					
									        
									    echo getUserNameById($row->datato);
									    
									} 
									?></td>
									<td><?php echo $row->debit;  ?></td>
									<td><?php echo $row->credit;  ?></td>
									<td><?php echo $row->closing;  ?></td>
									<td><?php echo $row->description;  ?></td>
									
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
		<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="basicModalLabel">Modal Title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-lighten" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	