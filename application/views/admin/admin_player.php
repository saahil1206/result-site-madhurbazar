
	<div class="content-wrapper">
		<!-- Row start -->
		<div class="card-body">
			<form method="post" action="<?php echo base_url();?>AdminPlayer/index">
				<div class="row gutters">
					<div class="col-xl-4 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Date From
							</label>
							<input type="date" name="fromdate"   value='<?php echo set_value('fromdate'); ?>' required class="form-control" id="inputName" style="font-weight: bold;font-size: 15px;">
						</div>
					</div>
					<div class="col-xl-4 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Date To
							</label>
							<input type="date" value='<?php echo set_value('todate'); ?>' name="todate" required class="form-control" id="inputName" style="font-weight: bold;font-size: 15px;">
						</div>
					</div>
					<div class="col-xl-4 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<input type="submit"  value="Search" class="btn btn-warning btn-lg" name="searchdata" style="margin-top: 22px;margin-left: 15px;font-size: 15px;">
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
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;Player Sale Report</div>
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
								    <th>UserName</th>
									<th>TotalAakdaAmount</th>
									<th>AakdaCom</th>
									<th>AakdaTotalCom</th>
									<th>TotalPanaAmount</th>
									<th>PanaCom</th>
									<th>PanaTotalCom</th>
									<th>AakdaAmount</th>
									<th>AakdaRate</th>
									<th>AakdaWinAmount</th>
									<th>S.P.AMOUNT</th>
								    <th>S.P.Rate</th>
									<th>S.P.Win</th>
									<th>D.P.AMOUNT</th>
									<th>D.P.Rate</th>
									<th>D.P.Win</th>
									<th>T.P.AMOUNT</th>
									<th>T.P.Rate</th>
									<th>T.P.Win</th>
									<th>TotalJodiAmount</th>
									<th>JodiAmount</th>
									<th>JodiRate</th>
									<th>JodiWinAmount</th>
									<th>TotalWinAmount</th>
									<th>TotalComAmount</th>
								
									<th>BeforePatnership</th>
									<th>Patnership</th>
									<th>AfterPatnership</th>
									<th>NetToPay</th>
									
								</tr>
							</thead>
							<tbody>
							    <?php
							foreach($player->result() as $row){
							    if(isset($fromdate) and isset($todate)){
							    $queryter=getplayerwinbydate($row->id,$fromdate,$todate);
							    }else{
							     $queryter=getplayerwin($row->id);   
							    }
							    if($queryter->aakda_total_com>0 or $queryter->pana_total_amount>0 or $queryter->jodi_amount>0 ){
							    
							    ?>
						          	<tr>
								    <th><?php echo $row->username;  ?></th>
									<th><?php echo $queryter->total_aakda_amount;  ?></th>
									<th><?php echo $row->aakda_com;  ?></th>
									<th><?php echo $queryter->aakda_total_com;  ?></th>
									<th><?php echo $queryter->pana_total_amount;  ?></th>
									<th><?php echo $row->pana_com;  ?></th>
									<th><?php echo $queryter->pana_total_com;  ?></th>
									<th><?php echo $queryter->aakda_total_wamount;  ?></th>
								
									<th><?php echo $row->aakdarate;  ?></th>
									<th><?php echo $queryter->aakda_win_amount;  ?></th>
									
									<th><?php echo $queryter->single_pana_amount;  ?></th>
								    <th><?php echo $row->singlepanarate;  ?></th>
									<th><?php echo $queryter->single_pana_win_amount;  ?></th>
									
									<th><?php echo $queryter->double_pana_amount;  ?></th>
								    <th><?php echo $row->doublepanarate;  ?></th>
									<th><?php echo $queryter->double_pana_win_amount;  ?></th>
									
										<th><?php echo $queryter->triple_pana_amount;  ?></th>
								    <th><?php echo $row->triplepanarate;  ?></th>
									<th><?php echo $queryter->triple_pana_win_amount;  ?></th>
									<th><?php echo $queryter->jodi_total_amount;  ?></th>
									<th><?php echo $queryter->jodi_amount;  ?></th>
									<th><?php echo $row->jodirate;  ?></th>
									<th><?php echo $queryter->jodi_win_amount;  ?></th>
									<th><?php echo $queryter->total_win;  ?></th>
								    <th><?php echo $queryter->total_com;  ?></th>
								
									<th><?php echo $queryter->before_patnership;  ?></th>
									<th><?php echo $row->partnership;  ?></th>
									<th><?php echo $queryter->after_patnership;?></th>
									<th><?php echo $queryter->nettopay;?></th>
									
								</tr>
								<?php
							    }
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
		</div>
		</div>
		</div>
		<!-- Row end -->
		<!-- Modal -->
	