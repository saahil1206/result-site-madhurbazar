<?php include('header.php');?>


	<div class="content-wrapper">
		<!-- Row start -->
		<div class="card-body">
				<div class="row gutters">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Date
							</label>
							<input type="date" class="form-control" id="inputName">
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Bazar
							</label>
							<select class="form-control select_group" id="showWaiter" name="showWaiter">
                        <option value="0">Select One</option>
                      </select>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Category
							</label>
							<select class="form-control select_group" id="showWaiter" name="showWaiter">
                        <option value="0">Select One</option>
                      </select>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName"style=" font-size:15px;font-weight:bold;">Client</label>
							<select class="form-control select_group" id="showWaiter" name="showWaiter">
                        <option value="0">Select One</option>
                      </select>
						</div>
					</div>
				</div>
				
			</div>
		                      
<div class="row gutters">
		                      <div class="col-lg-6 col-md-6 col-sm-6">
										<div class="btn-group float-right" style="  font-size: 30px;">
											<button href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target=".bd-example-modal-xl">
											<i class="icon-search" ></i> Search
											</button> 
											   &nbsp;
											<button href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bd-example-modal-xl">
											<i class="icon-export" ></i> PDF
											</button> 
											   &nbsp;
											<button href="#" class="btn btn-secondary btn-lg">
											<i class="icon-printer"></i> EXCEL
											</button>
										</div>
									</div>
								</div>
										
<br><br><br>
	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="table-container">
				<div class="card-header" >
					<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;BAZAR REPORT</div>
					
					
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
								    <th>Buss.Amt</th>
									<th>Win.Amt</th>
									<th>Tot.Aakda</th>
									<th>A.Com%</th>
									<th>Tot.A.COM</th>
									<th>TOT.PANA</th>
									<th>P.COM(%)</th>
									<th>Tot.P.COM(%)</th>
									<th>TOT.S.C.PANA</th>
									<th>C.S.P.COM(%)</th>
									<th>Tot.S.P.COM(%)</th>
									<th>BFOR.PART</th>
									<th>PATNERSHIP</th>
									<th>AFT.PATNERSHIP</th>
									<th>Net.PAY</th>
								</tr>
							</thead>
							<tbody>
	
								<tr>
								    <td></td>
								    <td></td>
								    <td></td>
									<td></td>
									<td></td>
									<td></td>
									<th></th>
									<td></td>
								    <td></td>
								    <td></td>
									<td></td>
									<td></td>
									<td></td>
									<th></th>
									<th></th>
									
	
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

	
</div>


<?php include('footer.php');?>