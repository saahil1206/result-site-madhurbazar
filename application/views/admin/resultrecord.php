<?php //include('header.php');?>
<!-- *************
************ Main container start *************
************* -->

	<!-- Page header end -->
	<div class="content-wrapper">
		<!-- Row start -->
		<div class="card-body">
		    	<form method="post" action="<?php  echo base_url()?>GameResult/result">	
				<div class="row gutters">
			        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">From Date 
							</label>
							<input type="date" name="fromdate" value="<?php echo set_value('fromdate'); ?>"class="form-control" id="inputName" style="font-weight: bold;font-size: 15px;">
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">TO Date 
							</label>
							<input type="date" name="todate"  value="<?php echo set_value('todate'); ?>" class="form-control" id="inputName" style="font-weight: bold;font-size: 15px;">
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Bazar
							</label>
							<select class="form-control select_group" id="showWaiter" name="bazar" style="font-weight: bold;font-size: 15px;">
                        <option value="SelectAll">SelectAll</option>
                          <?php
						$i=1;
		foreach ($b->result() as $row)
    {
		?>	    
											<option value="<?php echo $row->id; ?>"><?php echo $row->bazar_name; ?></option>
			<?php

	}
?>
                      </select>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName"style=" font-size:15px;font-weight:bold;">Category</label>
							<select class="form-control select_group" id="showWaiter" name="category" style="font-weight: bold;font-size: 15px;">
                        <option value="SelectAll">SelectAll</option>
                        <option value="open">open</option>
                        <option value="close">close</option>
                      
                      </select>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<!--<input type="submit"  class="btn btn-warning btn-lg" name="resultserach" value="search" style="margin-top: 22px;margin-left: 15px;font-size: 15px;">-->
										
							<button type="submit"  name="resultserach" value="search" class="btn btn-warning btn-lg" style="margin-top: 22px;margin-left: 15px;font-size: 15px; ">
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
					<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;RESULT RECORDS</div>
					
					
				</div>

                <div class="table-responsive">
						<table id="basicExample" class="table">
							<thead>
								<tr>
								    <th>DATE</th>
									<th>BAZAR</th>
									<th>CATEGORY</th>
									<th>PANA.NO</th>
									<th>AAKDA</th>
									<th>ENTRY TIME</th>
									<th>ACTION</th>
								
									
								</tr>
							</thead>
							<tbody>
                            <?php
foreach ($resultdata->result() as $row)
{
                            ?>
                            <tr>
								    <th><?php echo $row->result_date;  ?></th>
									<th><?php echo getBazarNameById($row->bazar_id);  ?></th>
									<th><?php echo $row->result_type;  ?></th>
									<th><?php echo $row->result_pana;  ?></th>
									<th><?php echo $row->result_AAkda;  ?></th>
									<th><?php echo $row->createddt;  ?></th>
									
									<th><a href="<?php echo base_url();?>GameResult/revoke/<?php  echo $row->id; ?>"><button class="btn btn-danger">Delete</button></a></th>
								
									
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
							Basic table start
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