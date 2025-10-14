

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
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="btn-group float-right"style="  font-size: 30px;">
											<button href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bd-example-modal-xl">
											<i class="icon-export" ></i> PDF
											</button>
											<button href="#" class="btn btn-secondary btn-lg">
											<i class="icon-printer"></i> EXCEL
											</button>
										</div>
										
									</div>
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
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"><i class="icon-user"></i>&nbsp;COMM. RECORDS</div>
						
						
					
						
						
						
						
						
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
									<th>CLIENT</th>
									<th>USERNAME</th>
									<th>A.COMM</th>
									<th>P.COMM</th>
								
									<th>PART.%</th>
									<th>A.RATE</th>
									<th>S.P.RATE</th>
									<th>D.P.RATE</th>
									<th>T.P.RATE</th>
									<th>J.RATE</th>
									<th>WIN.COMM</th>
									<th>ACTIONS</th>
								</tr>
							</thead>
							<tbody>
									<?php

foreach ($Acount->result() as $row) {
	
								?>
								<tr>
								    
									<td><?php echo $row->fullname;  ?></td>
										<td><?php echo $row->username;  ?></td>
								    <th><?php echo $row->aakda_com;  ?></th>
									<td><?php echo $row->pana_com;  ?></td>
									<td><?php echo $row->partnership;  ?></td>
									<td><?php echo $row->aakdarate;  ?></td>
									<td><?php echo $row->singlepanarate;  ?></td>
									<td><?php echo $row->doublepanarate;  ?></td>
									<td><?php echo $row->triplepanarate;  ?></td>
									<td><?php echo $row->jodirate;  ?></td>
									<td><?php echo $row->wincom;  ?></td>
								
									
									<td>
										<div class="btn-group btn-group-sm">
										<a href="<?php echo base_url();?>Account/editCommission/<?php echo $row->id;  ?>">	<button type="button" class="btn btn-info">
											<i class="icon-edit1"></i>
											</button> </a>
	                                         &nbsp;	&nbsp;
											
										</div>
									</div>
								</td>
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
	<?php //include('footer.php');?>