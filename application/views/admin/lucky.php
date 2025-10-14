

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
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-gift"></i>&nbsp;UPDATE Lucky number</div>
						
						
						
					</div>
					
					<!--*************************
					*************************
					*************************
					Basic table start
				*************************
				*************************
				*************************-->
				<div class="table-responsive">
					<table  class="table">
						<thead>
							<tr>
								<th>AAKDA</th>
								<th>PANA</th>
								<th>JODI</th>
								<th>MOTOR</th>
								<th></th>
								
							</tr>
						</thead>
						 <form method="post" action="<?php echo base_url(); ?>GameResult/lucky" >
						<tbody>
						      <?php
    foreach($gussing ->result() as $row)
        {
    
    ?>
   
					          <tr>
								<th> <div class="form-group"><input type="text" name="aakda" value="<?php echo $row->aakda;  ?>" class="form-control"></div></th>
								<th><div class="form-group"><input type="text" name="pana" value="<?php echo $row->pana;  ?>" class="form-control"></div></th>
								<th><div class="form-group"><input type="text" name="jodi" value="<?php echo $row->jodi;  ?>" class="form-control"></div></th>
								<th><div class="form-group"><input type="text" name="motor" value="<?php echo $row->motor;  ?>" class="form-control"></div></th>
								<th><input type="submit" value"submit" name="updatelucky" class="btn btn-lg btn-primary"></th>
								
							</tr>
							
					
							
							<?php
        }
							?>
	</form>								
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
