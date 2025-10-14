

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
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-gift"></i>&nbsp;BAZAR LIST</div>
						
						
						<a href="<?php echo base_url('Bazar/addbazar');?>" class="btn btn-warning btn-lg"  style="position: absolute;top:50px;right:30px;"></i>ADD BAZAR</a><br><br>
						
						
						
						
						
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
								<th>S.NO.</th>
								<th>GAME</th>
								<th>OPEN</th>
								<th>CLOSE</th>
								<th>DAYS</th>
								<th>O-BT</th>
								<th>C-BT</th>
								<th>HighLight</th>
								<th>STATUS</th>
								
								<th>ACTIONS</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$i=1;
		foreach ($b->result() as $row)
    {
		?>	    
							<tr>
							    
								<td><?php echo $i ?></td>
								<td><?php echo $row->bazar_name; ?></td>
								<td><?php echo $row->open_time; ?></td>
								<td><?php echo $row->close_time; ?></td>
								<td><?php echo $row->total_days; ?></td>
								<td><?php echo $row->open_block_time; ?></td>
								<td><?php echo $row->close_block_time; ?></td>
								<td><?php if($row->higlightbazar == 0){ 
								echo'<button class="btn btn-danger">enable</button>';
								}else{
								echo'<span class="btn btn-success">disable</span>';
								}; 
								?></td>
								
								<td><?php if($row->status){ 
								echo'<span class="badge badge-danger">active</span>';
								}else{
								echo'<span class="badge badge-warning">Deactive</span>';
								}; 
								?></td>
								<td>
									<div class="btn-group btn-group-sm">
										<button type="button" class="btn btn-info">
										<a href='<?php echo base_url();   ?>Bazar/editBazar/<?php echo $row->id; ?>'><i class="icon-edit1"></i></a>
										</button>
										&nbsp;	&nbsp;
										<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#testing_<?php echo $i ?>">
										<a><i class="icon-cancel"></i> </a>
										</button>
									</div>
									<div id ="testing_<?php echo $i ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" 
									aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title"  id="myLargeModalLabel">Are You Sure You Want To Delete ?</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
											
												<div class="modal-footer">
													<button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
												<button type="button" class="btn btn-danger"  data-toggle="modal" data-target=".bd-example-modal-sm">
										            <a href='<?php echo base_url();   ?>Bazar/deleteBazar/<?php echo $row->id; ?>'>Yes </a>
										        </button>
												</div>
											</div>
									  </div>
									</div>
								</td>
							</tr>
				<?php
			$i++;	
				
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
