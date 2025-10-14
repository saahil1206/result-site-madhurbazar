<?php //include('header.php');?>
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
	<div class="content-wrapper">
		<div class="row justify-content-center gutters">
			<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
			
					<div class="card m-0">
						<div class="card-header" style="background-color:#342e36;">
							<div class="card-title" style="color:white;font-size: 15px;font-weight: 20px;">Enter Result</div>
						</div>
						<div class="card-body">
						<form method="POST" action="<?php echo base_url();  ?>GameResult/index">	
							<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group">
										<label for="inputName" class="col-form-label" style=" font-size:15px;font-weight:bold;">Date</label>
										<input type="Date" class="form-control" name="date" value='<?php  date_default_timezone_set('Asia/Kolkata'); $date=date("Y-m-d", time()); echo $date; ?>' id="inputName" required placeholder="Name">
										<span style="color:red"><?php echo form_error('date'); ?></span>
									</div>
								    	<div class="form-group">
										<label for="inputName" class="col-form-label" style=" font-size:15px;font-weight:bold;">Bazar</label>
										<select name="bazar" class="form-control" value='<?php echo set_value('bazar'); ?>' data-live-search="true">
										
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
										<span style="color:red"><?php echo form_error('bazar'); ?></span>
									</div>
									
									
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								    
								
									<div class="form-group">
										<label for="inputMobNumber" class="col-form-label" style=" font-size:15px;font-weight:bold;">Category</label>
										<select class="form-control"  id="active" value='<?php echo set_value('category'); ?>' name="cat">
											
											<option value="open">Open</option>
											<option value="close">Close</option>
										</select>
										
									</div>
									
										<div class="form-group">
										<label for="inputSubject" class="col-form-label" style=" font-size:15px;font-weight:bold;">Number</label>
										<input type="number" class="form-control" name="number" value='<?php echo set_value('number'); ?>' id="inputSubject" required placeholder="Type Number">
										<span style="color:red"><?php echo form_error('number'); ?></span>
									</div>
								</div>
							</div>
							
						
								<div class="col-xl-12">
									
<button class="btn btn-primary float-right" id="submit" name='submit' style=" font-size:15px;font-weight:bold;"><i class="icon-verified_user"></i>  &nbsp;Submit Result</button>

								
							</div>

							</form>
						</div>
						</div>
						</div>
					    </div>
					  
<?php

if($_SESSION['access_level']!=7){
?>

						<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="table-container">
				<div class="card-header" >
					<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;BAT RECORDS</div><br><br>
					<form method="post" action="<?php echo base_url(); ?>GameResult/index">
				<div class="row gutters">
					
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Date 
							</label>
							<input type="date" name="date"  value='<?php echo set_value('date'); ?>' class="form-control" id="inputName">
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Bazar
							</label>
							<select  name="bazar" value='<?php echo set_value('bazar'); ?>' class="form-control select_group" id="showWaiter" >
							     
                        <option value="">Select One</option>
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
							<select class="form-control select_group" value='<?php echo set_value('category'); ?>'  name="category" id="showWaiter" name="showWaiter">
                       <?php
                       
                       if(set_value('category')){
                       
                       ?>
                       
                       	<option value="<?php echo set_value('category'); ?>"><?php echo set_value('category'); ?></option>
                       
                       <?php
                       
                       }
                       ?>
                        <option value="">Select One</option>
						<option value="open">open</option>
						<option value="close">close</option>
						
                      </select>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="form-group">
					<label for="inputName"style=" font-size:15px;font-weight:bold;"></label>
										<div class="btn-group" style="  font-size: 30px;margin-top: 22px;">
											<input type="submit"  class="btn btn-warning btn-lg" value="search" name="search" >
										
							
											
										</div>
					</div>					
									</div>
				
				</div>

			<div class="row">
				<div class="col-lg-12">
					<center>
						<h5 onclick="top_bottom_data();" style="cursor: pointer;">TOP/BOTTOM</h5>
					</center>
				</div>
			</div>	
			</div>



	</form>				
					
				</div>
			

<?php


?>
<div class="table-container">
<?php 

$gamename='aakda';
if(isset($date) and isset($bazar) and isset($category)){
$date=$date;
$bazar=$bazar;
$category=$category;

}else{
 $date='';
$bazar='';
$category='';   
}


$aakd_data=gameDataByBazarAdmin($gamename,$date,$bazar,$category);

foreach($aakd_data->result() as $rowd){

$data_single0=$rowd->value1;
$data_single1=$rowd->value2;
$data_single2=$rowd->value3;
$data_single3=$rowd->value4;
$data_single4=$rowd->value5;
$data_single5=$rowd->value6;
$data_single6=$rowd->value7;
$data_single7=$rowd->value8;
$data_single8=$rowd->value9;
$data_single9=$rowd->value10;
$data_single10=$rowd->value11;

//echo $single0;
}
?> 
	<h3 class="table-title"style=" text-transform: uppercase;font-weight:bold; text-align:center;"><?php echo $gamename;?></h3></h3>
							
								<div class="table-responsive">
									<table class="table m-0">
										<thead>
<tr align="center" >

<th >1</th>
<th >2</th>
<th >3</th>
<th >4</th>
<th >5</th>
<th >6</th>
<th >7</th>
<th >8</th>
<th >9</th>
<th >0</th>
<th >Amount</th>
</tr>
</thead>
</tbody>
<tr >

<td align="center"><input id="single1" name="single1" autocomplete="false" size="3" readonly value="<?php  echo $data_single1; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single2" name="single2" autocomplete="false" size="3" readonly  maxlength="6" value="<?php  echo $data_single2; ?>" type="text"></td>
<td align="center"><input id="single3" name="single3" autocomplete="false" size="3" readonly value="<?php  echo $data_single3; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single4" name="single4" autocomplete="false" size="3" readonly value="<?php  echo $data_single4; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single5" name="single5" autocomplete="false" readonly size="3" value="<?php  echo $data_single5; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single6" name="single6" autocomplete="false" readonly size="4" value="<?php  echo $data_single6; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single7" name="single7" autocomplete="false" readonly size="4"  value="<?php  echo $data_single7; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single8" name="single8" autocomplete="false" readonly size="4" value="<?php  echo $data_single8; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single9" name="single9" autocomplete="false" readonly size="4"   value="<?php  echo $data_single9; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="singleAmt" name="singleAmt" class="numAmt" size="4" readonly value="<?php  echo $data_single0; ?>" type="text"></td>
<td align="center"><input id="single0" autocomplete="false"  readonly  size="3" type="text" value="<?php  echo $data_single10; ?>"></td>

</tr>
<?php
$aakd_data=gameDataByBazarAdmin22($gamename,$date,$bazar,$category);

foreach($aakd_data->result() as $rowd){

$data_single0=$rowd->value1;
$data_single1=$rowd->value2;
$data_single2=$rowd->value3;
$data_single3=$rowd->value4;
$data_single4=$rowd->value5;
$data_single5=$rowd->value6;
$data_single6=$rowd->value7;
$data_single7=$rowd->value8;
$data_single8=$rowd->value9;
$data_single9=$rowd->value10;
$data_single10=$rowd->value11;

//echo $single0;
}
?>
<tr >

<td align="center"><input id="single1" name="single1" autocomplete="false" size="3" readonly value="<?php  echo $data_single1; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single2" name="single2" autocomplete="false" size="3" readonly  maxlength="6" value="<?php  echo $data_single2; ?>" type="text"></td>
<td align="center"><input id="single3" name="single3" autocomplete="false" size="3" readonly value="<?php  echo $data_single3; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single4" name="single4" autocomplete="false" size="3" readonly value="<?php  echo $data_single4; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single5" name="single5" autocomplete="false" readonly size="3" value="<?php  echo $data_single5; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single6" name="single6" autocomplete="false" readonly size="4" value="<?php  echo $data_single6; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single7" name="single7" autocomplete="false" readonly size="4"  value="<?php  echo $data_single7; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single8" name="single8" autocomplete="false" readonly size="4" value="<?php  echo $data_single8; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single9" name="single9" autocomplete="false" readonly size="4"   value="<?php  echo $data_single9; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="singleAmt" name="singleAmt" class="numAmt" size="4" readonly value="<?php  echo $data_single0; ?>" type="text"></td>
<td align="center"><input id="single0" autocomplete="false"  readonly  size="3" type="text" value="<?php  echo $data_single10; ?>"></td>

</tr>

</tbody>
</table>
</div>
</div>

<?php
$gamename='single';
?>

<div class="table-container">
									<h3 class="table-title"style=" text-transform: uppercase;font-weight:bold; text-align:center;"><?php echo $gamename;?></h3>
							
								<div class="table-responsive">
									<table class="table m-0">
										<thead>




<tr  align="center">
<th >1</th>
<th  >2</th>
<th  >3</th>
<th >4</th>
<th  >5</th>
<th  >6</th>
<th  >7</th>
<th >8</th>
<th  >9</th>
<th  >0</th>

</tr>
</thead>

<style>
font{
font-size:24px;

}
.boxlabel{
font-size:17px;


}
#rpt_total{
color:yellow;
background:transparent;
width:180px;
height:70px;
padding:15px;
font-size:40px;
border:5px solid silver;
border-radius:15px;
text-align:center;
}

</style>
<tbody>

<tr   align="center">
<td align="center" class="fistcell"><div class="boxlabel">128</div>
		  <div class="ticket_amount" id="sp_1_0"><font size="25px" color='black'><?php  echo retAdmin('n128',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
		   <td align="center" class=""><div class="boxlabel">129</div><div class="ticket_amount" id="sp_2_0"><font color='black'><?php  echo retAdmin('n129',$gamename,$date,$bazar,$category); ?></font></div></td>
												  <td align="center" class=""><div class="boxlabel">120</div>
		  <div class="ticket_amount" id="sp_3_0"><font color='black'><?php  echo retAdmin('n120',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">130</div>
		  <div class="ticket_amount" id="sp_4_0"><font color='black'><?php  echo retAdmin('n130',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">140</div>
		  <div class="ticket_amount" id="sp_5_0"><font color='black'><?php  echo retAdmin('n140',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">123</div>
		  <div class="ticket_amount" id="sp_6_0"><font color='black'><?php  echo retAdmin('n123',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">124</div>
		  <div class="ticket_amount" id="sp_7_0"><font color='black'><?php  echo retAdmin('n124',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">125</div>
		  <div class="ticket_amount" id="sp_8_0"><font color='black'><?php  echo retAdmin('n125',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">126</div>
		  <div class="ticket_amount" id="sp_9_0"><font color='black'><?php  echo retAdmin('n126',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">127</div>
		  <div class="ticket_amount" id="sp_0_0"><font color='black'><?php  echo retAdmin('n127',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					 
</tr>
<tr height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">290</div>
		  <div class="ticket_amount" id="sp_1_1"><font color='black'><?php  echo retAdmin('n290',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">246</div>
		  <div class="ticket_amount" id="sp_2_1"><font color='black'><?php  echo retAdmin('n246',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">247</div>
		  <div class="ticket_amount" id="sp_3_1"><font color='black'><?php  echo retAdmin('n247',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">248</div>
		  <div class="ticket_amount" id="sp_4_1"><font color='black'><?php  echo retAdmin('n248',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">258</div>
		  <div class="ticket_amount" id="sp_5_1"><font color='black'><?php  echo retAdmin('n258',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">259</div>
		  <div class="ticket_amount" id="sp_6_1"><font color='black'><?php  echo retAdmin('n259',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">278</div>
		  <div class="ticket_amount" id="sp_7_1"><font color='black'><?php  echo retAdmin('n278',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">279</div>
		  <div class="ticket_amount" id="sp_8_1"><font color='black'><?php  echo retAdmin('n279',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">289</div>
		  <div class="ticket_amount" id="sp_9_1"><font color='black'><?php  echo retAdmin('n289',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">235</div>
		  <div class="ticket_amount" id="sp_0_1"><font color='black'><?php  echo retAdmin('n235',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
						  <tr  height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">579</div>
		  <div class="ticket_amount" id="sp_1_2"><font color='black'><?php  echo retAdmin('n579',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">589</div>
		  <div class="ticket_amount" id="sp_2_2"><font color='black'><?php  echo retAdmin('n589',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">670</div>
		  <div class="ticket_amount" id="sp_3_2"><font color='black'><?php  echo retAdmin('n670',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">680</div>
		  <div class="ticket_amount" id="sp_4_2"><font color='black'><?php  echo retAdmin('n680',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">690</div>
		  <div class="ticket_amount" id="sp_5_2"><font color='black'><?php  echo retAdmin('n690',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">457</div>
		  <div class="ticket_amount" id="sp_6_2"><font color='black'><?php  echo retAdmin('n457',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">467</div>
		  <div class="ticket_amount" id="sp_7_2"><font color='black'><?php  echo retAdmin('n467',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">468</div>
		  <div class="ticket_amount" id="sp_8_2"><font color='black'><?php  echo retAdmin('n468',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">478</div>
		  <div class="ticket_amount" id="sp_9_2"><font color='black'><?php  echo retAdmin('n478',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">569</div>
		  <div class="ticket_amount" id="sp_0_2"><font color='black'><?php  echo retAdmin('n569',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
						  <tr  height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">137</div>
		  <div class="ticket_amount" id="sp_1_3"><font color='black'><?php  echo retAdmin('n137',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">138</div>
		  <div class="ticket_amount" id="sp_2_3"><font color='black'><?php  echo retAdmin('n138',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">139</div>
		  <div class="ticket_amount" id="sp_3_3"><font color='black'><?php  echo retAdmin('n139',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">149</div>
		  <div class="ticket_amount" id="sp_4_3"><font color='black'><?php  echo retAdmin('n149',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">159</div>
		  <div class="ticket_amount" id="sp_5_3"><font color='black'><?php  echo retAdmin('n159',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">150</div>
		  <div class="ticket_amount" id="sp_6_3"><font color='black'><?php  echo retAdmin('n150',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">160</div>
		  <div class="ticket_amount" id="sp_7_3"><font color='black'><?php  echo retAdmin('n160',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">134</div>
		  <div class="ticket_amount" id="sp_8_3"><font color='black'><?php  echo retAdmin('n134',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">135</div>
		  <div class="ticket_amount" id="sp_9_3"><font color='black'><?php  echo retAdmin('n135',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">136</div>
		  <div class="ticket_amount" id="sp_0_3"><font color='black'><?php  echo retAdmin('n136',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
						  <tr   height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">380</div>
		  <div class="ticket_amount" id="sp_1_4"><font color='black'><?php  echo retAdmin('n380',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">345</div>
		  <div class="ticket_amount" id="sp_2_4"><font color='black'><?php  echo retAdmin('n345',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">256</div>
		  <div class="ticket_amount" id="sp_3_4"><font color='black'><?php  echo retAdmin('n256',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">257</div>
		  <div class="ticket_amount" id="sp_4_4"><font color='black'><?php  echo retAdmin('n257',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">267</div>
		  <div class="ticket_amount" id="sp_5_4"><font color='black'><?php  echo retAdmin('n267',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">268</div>
		  <div class="ticket_amount" id="sp_6_4"><font color='black'><?php  echo retAdmin('n268',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">340</div>
		  <div class="ticket_amount" id="sp_7_4"><font color='black'><?php  echo retAdmin('n340',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">350</div>
		  <div class="ticket_amount" id="sp_8_4"><font color='black'><?php  echo retAdmin('n350',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">360</div>
		  <div class="ticket_amount" id="sp_9_4"><font color='black'><?php  echo retAdmin('n360',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">370</div>
		  <div class="ticket_amount" id="sp_0_4"><font color='black'><?php  echo retAdmin('n370',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
						  <tr  height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">678</div>
		  <div class="ticket_amount" id="sp_1_5"><font color='black'><?php  echo retAdmin('n678',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">679</div>
		  <div class="ticket_amount" id="sp_2_5"><font color='black'><?php  echo retAdmin('n679',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">689</div>
		  <div class="ticket_amount" id="sp_3_5"><font color='black'><?php  echo retAdmin('n689',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">789</div>
		  <div class="ticket_amount" id="sp_4_5"><font color='black'><?php  echo retAdmin('n789',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">780</div>
		  <div class="ticket_amount" id="sp_5_5"><font color='black'><?php  echo retAdmin('n780',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">790</div>
		  <div class="ticket_amount" id="sp_6_5"><font color='black'><?php  echo retAdmin('n790',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">890</div>
		  <div class="ticket_amount" id="sp_7_5"><font color='black'><?php  echo retAdmin('n890',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">567</div>
		  <div class="ticket_amount" id="sp_8_5"><font color='black'><?php  echo retAdmin('n567',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">568</div>
		  <div class="ticket_amount" id="sp_9_5"><font color='black'><?php  echo retAdmin('n568',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">578</div>
		  <div class="ticket_amount" id="sp_0_5"><font color='black'><?php  echo retAdmin('n578',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					 
</tr>
						  <tr   height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">146</div>
		  <div class="ticket_amount" id="sp_1_6"><font color='black'><?php  echo retAdmin('n146',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">147</div>
		  <div class="ticket_amount" id="sp_2_6"><font color='black'><?php  echo retAdmin('n147',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">148</div>
		  <div class="ticket_amount" id="sp_3_6"><font color='black'><?php  echo retAdmin('n148',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">158</div>
		  <div class="ticket_amount" id="sp_4_6"><font color='black'><?php  echo retAdmin('n158',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">168</div>
		  <div class="ticket_amount" id="sp_5_6"><font color='black'><?php  echo retAdmin('n168',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">169</div>
		  <div class="ticket_amount" id="sp_6_6"><font color='black'><?php  echo retAdmin('n169',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">179</div>
		  <div class="ticket_amount" id="sp_7_6"><font color='black'><?php  echo retAdmin('n179',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">170</div>
		  <div class="ticket_amount" id="sp_8_6"><font color='black'><?php  echo retAdmin('n170',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">180</div>
		  <div class="ticket_amount" id="sp_9_6"><font color='black'><?php  echo retAdmin('n180',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">145</div>
		  <div class="ticket_amount" id="sp_0_6"><font color='black'><?php  echo retAdmin('n145',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					 
</tr>
						  <tr   height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">470</div>
		  <div class="ticket_amount" id="sp_1_7"><font color='black'><?php  echo retAdmin('n470',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">390</div>
		  <div class="ticket_amount" id="sp_2_7"><font color='black'><?php  echo retAdmin('n390',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">346</div>
		  <div class="ticket_amount" id="sp_3_7"><font color='black'><?php  echo retAdmin('n346',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">347</div>
		  <div class="ticket_amount" id="sp_4_7"><font color='black'><?php  echo retAdmin('n347',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">348</div>
		  <div class="ticket_amount" id="sp_5_7"><font color='black'><?php  echo retAdmin('n348',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">349</div>
		  <div class="ticket_amount" id="sp_6_7"><font color='black'><?php  echo retAdmin('n349',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">359</div>
		  <div class="ticket_amount" id="sp_7_7"><font color='black'><?php  echo retAdmin('n359',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">369</div>
		  <div class="ticket_amount" id="sp_8_7"><font color='black'><?php  echo retAdmin('n369',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">379</div>
		  <div class="ticket_amount" id="sp_9_7"><font color='black'><?php  echo retAdmin('n379',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">389</div>
		  <div class="ticket_amount" id="sp_0_7"><font color='black'><?php  echo retAdmin('n389',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
						  <tr   height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">236</div>
		  <div class="ticket_amount" id="sp_1_8"><font color='black'><?php  echo retAdmin('n236',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">156</div>
		  <div class="ticket_amount" id="sp_2_8"><font color='black'><?php  echo retAdmin('n156',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">157</div>
		  <div class="ticket_amount" id="sp_3_8"><font color='black'><?php  echo retAdmin('n157',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">167</div>
		  <div class="ticket_amount" id="sp_4_8"><font color='black'><?php  echo retAdmin('n167',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">230</div>
		  <div class="ticket_amount" id="sp_5_8"><font color='black'><?php  echo retAdmin('n230',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">178</div>
		  <div class="ticket_amount" id="sp_6_8"><font color='black'><?php  echo retAdmin('n178',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">250</div>
		  <div class="ticket_amount" id="sp_7_8"><font color='black'><?php  echo retAdmin('n250',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">189</div>
		  <div class="ticket_amount" id="sp_8_8"><font color='black'><?php  echo retAdmin('n189',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">270</div>
		  <div class="ticket_amount" id="sp_9_8"><font color='black'><?php  echo retAdmin('n270',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">190</div>
		  <div class="ticket_amount" id="sp_0_8"><font color='black'><?php  echo retAdmin('n190',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					 
</tr>
						  <tr   height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">489</div>
		  <div class="ticket_amount" id="sp_1_9"><font color='black'><?php  echo retAdmin('n489',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">480</div>
		  <div class="ticket_amount" id="sp_2_9"><font color='black'><?php  echo retAdmin('n480',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">490</div>
		  <div class="ticket_amount" id="sp_3_9"><font color='black'><?php  echo retAdmin('n490',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">356</div>
		  <div class="ticket_amount" id="sp_4_9"><font color='black'><?php  echo retAdmin('n356',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">357</div>
		  <div class="ticket_amount" id="sp_5_9"><font color='black'><?php  echo retAdmin('n357',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">358</div>
		  <div class="ticket_amount" id="sp_6_9"><font color='black'><?php  echo retAdmin('n358',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">368</div>
		  <div class="ticket_amount" id="sp_7_9"><font color='black'><?php  echo retAdmin('n368',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">378</div>
		  <div class="ticket_amount" id="sp_8_9"><font color='black'><?php  echo retAdmin('n378',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">450</div>
		  <div class="ticket_amount" id="sp_9_9"><font color='black'><?php  echo retAdmin('n450',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">460</div>
		  <div class="ticket_amount" id="sp_0_9"><font color='black'><?php  echo retAdmin('n460',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
						  <tr  height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">245</div>
		  <div class="ticket_amount" id="sp_1_10"><font color='black'><?php  echo retAdmin('n245',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">237</div>
		  <div class="ticket_amount" id="sp_2_10"><font color='black'><?php  echo retAdmin('n237',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">238</div>
		  <div class="ticket_amount" id="sp_3_10"><font color='black'><?php  echo retAdmin('n238',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">239</div>
		  <div class="ticket_amount" id="sp_4_10"><font color='black'><?php  echo retAdmin('n239',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">249</div>
		  <div class="ticket_amount" id="sp_5_10"><font color='black'><?php  echo retAdmin('n249',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">240</div>
		  <div class="ticket_amount" id="sp_6_10"><font color='black'><?php  echo retAdmin('n240',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">269</div>
		  <div class="ticket_amount" id="sp_7_10"><font color='black'><?php  echo retAdmin('n269',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">260</div>
		  <div class="ticket_amount" id="sp_8_10"><font color='black'><?php  echo retAdmin('n260',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">234</div>
		  <div class="ticket_amount" id="sp_9_10"><font color='black'><?php  echo retAdmin('n234',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">280</div>
		  <div class="ticket_amount" id="sp_0_10"><font color='black'><?php  echo retAdmin('n280',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
						  <tr  height="45px">
  <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
												  <td align="center" class="fistcell"><div class="boxlabel">560</div>
		  <div class="ticket_amount" id="sp_1_11"><font color='black'><?php  echo retAdmin('n560',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">570</div>
		  <div class="ticket_amount" id="sp_2_11"><font color='black'><?php  echo retAdmin('n570',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">580</div>
		  <div class="ticket_amount" id="sp_3_11"><font color='black'><?php  echo retAdmin('n580',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">590</div>
		  <div class="ticket_amount" id="sp_4_11"><font color='black'><?php  echo retAdmin('n590',$gamename,$date,$bazar,$category,$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">456</div>
		  <div class="ticket_amount" id="sp_5_11"><font color='black'><?php  echo retAdmin('n456',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">367</div>
		  <div class="ticket_amount" id="sp_6_11"><font color='black'><?php  echo retAdmin('n367',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">458</div>
		  <div class="ticket_amount" id="sp_7_11"><font color='black'><?php  echo retAdmin('n458',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">459</div>
		  <div class="ticket_amount" id="sp_8_11"><font color='black'><?php  echo retAdmin('n459',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">469</div>
		  <div class="ticket_amount" id="sp_9_11"><font color='black'><?php  echo retAdmin('n469',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
												  <td align="center" class=""><div class="boxlabel">479</div>
		  <div class="ticket_amount" id="sp_0_11"><font color='black'><?php  echo retAdmin('n479',$gamename,$date,$bazar,$category); ?></font>
										  </div></td>
					  
</tr>
<tr>

<td colspan="10">
<font color='black'SIZE="18">TOTAL:<?php  echo retAdmin('total',$gamename,$date,$bazar,$category); ?></font> 
</td>


</tr>
</tbody>
</table>
</div>
</div>
<?php
$gamename='double';
?>
<div class="table-container">
									<h3 class="table-title"style=" text-transform: uppercase;font-weight:bold; text-align:center;"><?php echo $gamename;?></h3>
							
								<div class="table-responsive">
									<table class="table m-0">
										<thead>




<tr  align="center">

<th >1</th>
<th >2</th>
<th >3</th>
<th >4</th>
<th >5</th>
<th >6</th>
<th >7</th>
<th >8</th>
<td >9</th>
<th >0</th>

</tr>
</thead>
<tbody>
<tr >
<td align="center" class="fistcell"><div class="boxlabel">100</div>
		  <div id="dp_1_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n100',$gamename,$date,$bazar,$category); ?></font></div>
</td>
<td align="center" class=""><div class="boxlabel">200</div>
		  <div id="dp_2_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n200',$gamename,$date,$bazar,$category); ?></font>
										  </div>
</td>
<td align="center" class=""><div class="boxlabel">300</div>
		  <div id="dp_3_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n300',$gamename,$date,$bazar,$category); ?></font></div>
</td>
<td align="center" class=""><div class="boxlabel">400</div>
		  <div id="dp_4_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n400',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">500</div>
		  <div id="dp_5_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n500',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">600</div>
		  <div id="dp_6_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n600',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">700</div>
		  <div id="dp_7_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n700',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">800</div>
		  <div id="dp_8_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n800',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">900</div>
		  <div id="dp_9_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n900',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">226</div>
		  <div id="dp_0_0" class="ticket_amount"><font color='black'><?php  echo retAdmin('n226',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					 
</tr>
						  <tr >
												  <td align="center" class="fistcell"><div class="boxlabel">335</div>
		  <div id="dp_1_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n335',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">336</div>
		  <div id="dp_2_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n336',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">355</div>
		  <div id="dp_3_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n355',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">338</div>
		  <div id="dp_4_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n338',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">339</div>
		  <div id="dp_5_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n339',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">448</div>
		  <div id="dp_6_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n448',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">223</div>
		  <div id="dp_7_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n223',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">288</div>
		  <div id="dp_8_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n288',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">225</div>
		  <div id="dp_9_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n225',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">668</div>
		  <div id="dp_0_1" class="ticket_amount"><font color='black'><?php  echo retAdmin('n668',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					
</tr>
						  <tr >
												  <td align="center" class="fistcell"><div class="boxlabel">344</div>
		  <div id="dp_1_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n344',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">499</div>
		  <div id="dp_2_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n499',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">445</div>
		  <div id="dp_3_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n445',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">446</div>
		  <div id="dp_4_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n446',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">366</div>
		  <div id="dp_5_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n366',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">466</div>
		  <div id="dp_6_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n446',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">377</div>
		  <div id="dp_7_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n377',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">440</div>
		  <div id="dp_8_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n440',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">388</div>
		  <div id="dp_9_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n388',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">488</div>
		  <div id="dp_0_2" class="ticket_amount"><font color='black'><?php  echo retAdmin('n488',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					 
</tr>
						  <tr >
												  <td align="center" class="fistcell"><div class="boxlabel">119</div>
		  <div id="dp_1_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n119',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">110</div>
		  <div id="dp_2_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n110',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">166</div>
		  <div id="dp_3_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n166',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">112</div>
		  <div id="dp_4_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n112',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">113</div>
		  <div id="dp_5_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n113',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">114</div>
		  <div id="dp_6_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n114',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">115</div>
		  <div id="dp_7_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n115',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">116</div>
		  <div id="dp_8_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n116',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">117</div>
		  <div id="dp_9_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n117',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">118</div>
		  <div id="dp_0_3" class="ticket_amount"><font color='black'><?php  echo retAdmin('n118',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					
</tr>
						  <tr>
												  <td align="center" class="fistcell"><div class="boxlabel">399</div>
		  <div id="dp_1_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n399',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">660</div>
		  <div id="dp_2_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n660',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">599</div>
		  <div id="dp_3_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n599',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">455</div>
		  <div id="dp_4_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n455',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">447</div>
		  <div id="dp_5_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n447',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">556</div>
		  <div id="dp_6_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n556',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">449</div>
		  <div id="dp_7_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n449',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">477</div>
		  <div id="dp_8_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n477',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">559</div>
		  <div id="dp_9_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n559',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">334</div>
		  <div id="dp_0_4" class="ticket_amount"><font color='black'><?php  echo retAdmin('n334',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					 
</tr>
						  <tr >
												  <td align="center" class="fistcell"><div class="boxlabel">155</div>
		  <div id="dp_1_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n155',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">228</div>
		  <div id="dp_2_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n228',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">229</div>
		  <div id="dp_3_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n229',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">220</div>
		  <div id="dp_4_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n220',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">122</div>
		  <div id="dp_5_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n122',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">277</div>
		  <div id="dp_6_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n277',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">133</div>
		  <div id="dp_7_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n133',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">224</div>
		  <div id="dp_8_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n224',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">144</div>
		  <div id="dp_9_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n144',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">299</div>
		  <div id="dp_0_5" class="ticket_amount"><font color='black'><?php  echo retAdmin('n299',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					
</tr>
						  <tr >
												  <td align="center" class="fistcell"><div class="boxlabel">588</div>
		  <div id="dp_1_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n588',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">688</div>
		  <div id="dp_2_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n688',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">779</div>
		  <div id="dp_3_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n779',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">699</div>
		  <div id="dp_4_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n699',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">799</div>
		  <div id="dp_5_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n799',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">880</div>
		  <div id="dp_6_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n880',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">557</div>
		  <div id="dp_7_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n557',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">558</div>
		  <div id="dp_8_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n558',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">577</div>
		  <div id="dp_9_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n577',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">550</div>
		  <div id="dp_0_6" class="ticket_amount"><font color='black'><?php  echo retAdmin('n550',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					  
</tr>
						  <tr >
												  <td align="center" class="fistcell"><div class="boxlabel">227</div>
		  <div id="dp_1_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n227',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">255</div>
		  <div id="dp_2_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n255',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">337</div>
		  <div id="dp_3_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n337',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">266</div>
		  <div id="dp_4_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n266',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">177</div>
		  <div id="dp_5_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n177',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">330</div>
		  <div id="dp_6_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n330',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">188</div>
		  <div id="dp_7_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n188',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">233</div>
		  <div id="dp_8_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n233',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">199</div>
		  <div id="dp_9_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n199',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">244</div>
		  <div id="dp_0_7" class="ticket_amount"><font color='black'><?php  echo retAdmin('n244',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					  
</tr>
						  <tr >
												  <td align="center" class="fistcell"><div class="boxlabel">669</div>
		  <div id="dp_1_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n669',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">778</div>
		  <div id="dp_2_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n778',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">788</div>
		  <div id="dp_3_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n788',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">770</div>
		  <div id="dp_4_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n770',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">889</div>
		  <div id="dp_5_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n889',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">899</div>
		  <div id="dp_6_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n899',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">566</div>
		  <div id="dp_7_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n566',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">990</div>
		  <div id="dp_8_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n990',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">667</div>
		  <div id="dp_9_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n667',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
												  <td align="center" class=""><div class="boxlabel">677</div>
		  <div id="dp_0_8" class="ticket_amount"><font color='black'><?php  echo retAdmin('n677',$gamename,$date,$bazar,$category); ?></font>
										  </div>
	  </td>
					 
</tr>
<tr>

<td colspan="10">
<font color='black'SIZE="18">TOTAL:<?php  echo retAdmin('total',$gamename,$date,$bazar,$category); ?></font> 
</td>


</tr>


</tbody>
</table>
</div>
</div>


<?php
if($category=='open'){
$gamename='jodi';
?>
<div class="table-container">
									<h3 class="table-title"style=" text-transform: uppercase;font-weight:bold; text-align:center;"><?php echo $gamename;?></h3>
							
								<div class="table-responsive">
									<table class="table m-0">
										<thead>


<tr  align="center">
<th >0</th>
<th >1</th>
<th >2</th>
<th >3</th>
<th >4</th>
<th >5</th>
<th >6</th>
<th >7</th>
<th >8</th>
<th >9</th>


</tr>
</thead>
<style>
.boxlabel{
font-size:17px;
}
#numvalue{
color:black;
}
.numbersdata{
text-align:center;

font-size:17px;

}

</style>
<tbody>

<tr  align="center">
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
<td style=" border-bottom:0px"></td>
</tr>  

<tr >
<!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
				 
				  <td align="center" ><span class="boxlabel">00</span><br><span id="numvalue"><?php  echo retAdmin('n00',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">01</span><br><span id="numvalue"><?php  echo retAdmin('n01',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">02</span><br><span id="numvalue"><?php  echo retAdmin('n02',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">03</span><br><span id="numvalue"><?php  echo retAdmin('n03',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">04</span><br><span id="numvalue"><?php  echo retAdmin('n04',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">05</span><br><span id="numvalue"><?php  echo retAdmin('n05',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">06</span><br><span id="numvalue"><?php  echo retAdmin('n06',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">07</span><br><span id="numvalue"><?php  echo retAdmin('n07',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">08</span><br><span id="numvalue"><?php  echo retAdmin('n08',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">09</span><br><span id="numvalue"><?php  echo retAdmin('n09',$gamename,$date,$bazar,$category); ?></span></td>
			
</tr>
	  <tr >
<!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
				   
			   <td align="center" ><span class="boxlabel">10</span><br><span id="numvalue"><?php  echo retAdmin('n10',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">11</span><br><span id="numvalue"><?php  echo retAdmin('n11',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">12</span><br><span id="numvalue"><?php  echo retAdmin('n12',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">13</span><br><span id="numvalue"><?php  echo retAdmin('n13',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">14</span><br><span id="numvalue"><?php  echo retAdmin('n14',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">15</span><br><span id="numvalue"><?php  echo retAdmin('n15',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">16</span><br><span id="numvalue"><?php  echo retAdmin('n16',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">17</span><br><span id="numvalue"><?php  echo retAdmin('n17',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">18</span><br><span id="numvalue"><?php  echo retAdmin('n18',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">19</span><br><span id="numvalue"><?php  echo retAdmin('n19',$gamename,$date,$bazar,$category); ?></span></td>
		   
</tr>
	  <tr>
		  <td align="center" ><span class="boxlabel">20</span><br><span id="numvalue"><?php  echo retAdmin('n20',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">21</span><br><span id="numvalue"><?php  echo retAdmin('n21',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">22</span><br><span id="numvalue"><?php  echo retAdmin('n22',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">23</span><br><span id="numvalue"><?php  echo retAdmin('n23',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">24</span><br><span id="numvalue"><?php  echo retAdmin('n24',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">25</span><br><span id="numvalue"><?php  echo retAdmin('n25',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">26</span><br><span id="numvalue"><?php  echo retAdmin('n26',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">27</span><br><span id="numvalue"><?php  echo retAdmin('n27',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">28</span><br><span id="numvalue"><?php  echo retAdmin('n28',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">29</span><br><span id="numvalue"><?php  echo retAdmin('n29',$gamename,$date,$bazar,$category); ?></span></td>
		   
</tr>
	  <tr >
				  <td align="center" ><span class="boxlabel">30</span><br><span id="numvalue"><?php  echo retAdmin('n30',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">31</span><br><span id="numvalue"><?php  echo retAdmin('n31',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">32</span><br><span id="numvalue"><?php  echo retAdmin('n32',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">33</span><br><span id="numvalue"><?php  echo retAdmin('n33',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">34</span><br><span id="numvalue"><?php  echo retAdmin('n34',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">35</span><br><span id="numvalue"><?php  echo retAdmin('n35',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">36</span><br><span id="numvalue"><?php  echo retAdmin('n36',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">37</span><br><span id="numvalue"><?php  echo retAdmin('n37',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">38</span><br><span id="numvalue"><?php  echo retAdmin('n38',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">39</span><br><span id="numvalue"><?php  echo retAdmin('n39',$gamename,$date,$bazar,$category); ?></span></td>
			
</tr>
	  <tr >
						<td align="center" ><span class="boxlabel">40</span><br><span id="numvalue"><?php  echo retAdmin('n40',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">41</span><br><span id="numvalue"><?php  echo retAdmin('n41',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">42</span><br><span id="numvalue"><?php  echo retAdmin('n42',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">43</span><br><span id="numvalue"><?php  echo retAdmin('n43',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">44</span><br><span id="numvalue"><?php  echo retAdmin('n44',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">45</span><br><span id="numvalue"><?php  echo retAdmin('n45',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">46</span><br><span id="numvalue"><?php  echo retAdmin('n46',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">47</span><br><span id="numvalue"><?php  echo retAdmin('n47',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">48</span><br><span id="numvalue"><?php  echo retAdmin('n48',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">49</span><br><span id="numvalue"><?php  echo retAdmin('n49',$gamename,$date,$bazar,$category); ?></span></td>
			 
</tr>
	  <tr >
					  <td align="center" ><span class="boxlabel">50</span><br><span id="numvalue"><?php  echo retAdmin('n50',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">51</span><br><span id="numvalue"><?php  echo retAdmin('n51',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">52</span><br><span id="numvalue"><?php  echo retAdmin('n52',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">53</span><br><span id="numvalue"><?php  echo retAdmin('n53',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">54</span><br><span id="numvalue"><?php  echo retAdmin('n54',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">55</span><br><span id="numvalue"><?php  echo retAdmin('n55',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">56</span><br><span id="numvalue"><?php  echo retAdmin('n56',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">57</span><br><span id="numvalue"><?php  echo retAdmin('n57',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">58</span><br><span id="numvalue"><?php  echo retAdmin('n58',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">59</span><br><span id="numvalue"><?php  echo retAdmin('n59',$gamename,$date,$bazar,$category); ?></span></td>
		   
</tr>
	  <tr >
					 <td align="center" ><span class="boxlabel">60</span><br><span id="numvalue"><?php  echo retAdmin('n60',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">61</span><br><span id="numvalue"><?php  echo retAdmin('n61',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">62</span><br><span id="numvalue"><?php  echo retAdmin('n62',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">63</span><br><span id="numvalue"><?php  echo retAdmin('n63',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">64</span><br><span id="numvalue"><?php  echo retAdmin('n64',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">65</span><br><span id="numvalue"><?php  echo retAdmin('n65',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">66</span><br><span id="numvalue"><?php  echo retAdmin('n66',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">67</span><br><span id="numvalue"><?php  echo retAdmin('n67',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">68</span><br><span id="numvalue"><?php  echo retAdmin('n68',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">69</span><br><span id="numvalue"><?php  echo retAdmin('n69',$gamename,$date,$bazar,$category); ?></span></td>
			
</tr>
	  <tr >
					<td align="center" ><span class="boxlabel">70</span><br><span id="numvalue"><?php  echo retAdmin('n70',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">71</span><br><span id="numvalue"><?php  echo retAdmin('n71',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">72</span><br><span id="numvalue"><?php  echo retAdmin('n72',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">73</span><br><span id="numvalue"><?php  echo retAdmin('n73',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">74</span><br><span id="numvalue"><?php  echo retAdmin('n74',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">75</span><br><span id="numvalue"><?php  echo retAdmin('n75',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">76</span><br><span id="numvalue"><?php  echo retAdmin('n76',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">77</span><br><span id="numvalue"><?php  echo retAdmin('n77',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">78</span><br><span id="numvalue"><?php  echo retAdmin('n78',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">79</span><br><span id="numvalue"><?php  echo retAdmin('n79',$gamename,$date,$bazar,$category); ?></span></td>
		 
</tr>
	  <tr >
				   <td align="center" ><span class="boxlabel">80</span><br><span id="numvalue"><?php  echo retAdmin('n80',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">81</span><br><span id="numvalue"><?php  echo retAdmin('n81',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">82</span><br><span id="numvalue"><?php  echo retAdmin('n82',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">83</span><br><span id="numvalue"><?php  echo retAdmin('n83',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">84</span><br><span id="numvalue"><?php  echo retAdmin('n84',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">85</span><br><span id="numvalue"><?php  echo retAdmin('n85',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">86</span><br><span id="numvalue"><?php  echo retAdmin('n86',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">87</span><br><span id="numvalue"><?php  echo retAdmin('n87',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">88</span><br><span id="numvalue"><?php  echo retAdmin('n88',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">89</span><br><span id="numvalue"><?php  echo retAdmin('n89',$gamename,$date,$bazar,$category); ?></span></td>
			
</tr>
	  <tr >
				  <td align="center" ><span class="boxlabel">90</span><br><span id="numvalue"><?php  echo retAdmin('n90',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">91</span><br><span id="numvalue"><?php  echo retAdmin('n91',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">92</span><br><span id="numvalue"><?php  echo retAdmin('n92',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">93</span><br><span id="numvalue"><?php  echo retAdmin('n93',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">94</span><br><span id="numvalue"><?php  echo retAdmin('n94',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">95</span><br><span id="numvalue"><?php  echo retAdmin('n95',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">96</span><br><span id="numvalue"><?php  echo retAdmin('n96',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">97</span><br><span id="numvalue"><?php  echo retAdmin('n97',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">98</span><br><span id="numvalue"><?php  echo retAdmin('n98',$gamename,$date,$bazar,$category); ?></span></td>
				  <td align="center" ><span class="boxlabel">99</span><br><span id="numvalue"><?php  echo retAdmin('n99',$gamename,$date,$bazar,$category); ?></span></td>
			  
</tr>
<tr>

<td colspan="10">
<font color='black'SIZE="18">TOTAL:<?php  echo retAdmin('total',$gamename,$date,$bazar,$category); ?></font> 
</td>


</tr>
</tbody>
</table>
</div>
</div>

<?php
}
$gamename='triple';
?>
<div class="table-container">
									<h3 class="table-title"style=" text-transform: uppercase;font-weight:bold; text-align:center;"><?php echo $gamename;?></h3>
							
								<div class="table-responsive">
									<table class="table m-0">
										<thead>


<tr   align="center">

  <th >777</th>
<th >444</th>
<th >111</th>
<th >888</th>
<th >555</th>
<th >222</th>
<th >999</th>
<th >666</th>
<th >333</th>
<th >000</th>
<th >Amount</th>
</tr>
</thead>
<?php 
$triple_data=rettripledataAdmin($gamename,$date,$bazar,$category);

foreach($triple_data->result() as $rowtriple){

$data_single0=$rowtriple->value1;
$data_single1=$rowtriple->value2;
$data_single2=$rowtriple->value3;
$data_single3=$rowtriple->value4;
$data_single4=$rowtriple->value5;
$data_single5=$rowtriple->value6;
$data_single6=$rowtriple->value7;
$data_single7=$rowtriple->value8;
$data_single8=$rowtriple->value9;
$data_single9=$rowtriple->value10;
$data_single10=$rowtriple->value11;

//echo $single0;
}
?>

<tbody>
<tr >
<td align="center"><input id="single0" autocomplete="false"  readonly  size="3" type="text" value="<?php  echo $data_single0; ?>"></td>

<td align="center"><input id="single1" name="single1" autocomplete="false" size="3" readonly value="<?php  echo $data_single1; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single2" name="single2" autocomplete="false" size="3" readonly  maxlength="6" value="<?php  echo $data_single2; ?>" type="text"></td>
<td align="center"><input id="single3" name="single3" autocomplete="false" size="3" readonly value="<?php  echo $data_single3; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single4" name="single4" autocomplete="false" size="3" readonly value="<?php  echo $data_single4; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single5" name="single5" autocomplete="false" readonly size="3" value="<?php  echo $data_single5; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single6" name="single6" autocomplete="false" readonly size="4" value="<?php  echo $data_single6; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single7" name="single7" autocomplete="false" readonly size="4"  value="<?php  echo $data_single7; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single8" name="single8" autocomplete="false" readonly size="4" value="<?php  echo $data_single8; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single9" name="single9" autocomplete="false" readonly size="4"   value="<?php  echo $data_single9; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="singleAmt" name="singleAmt" class="numAmt" size="4" readonly value="<?php  echo $data_single10; ?>" type="text"></td>
</tr>
<?php 
$triple_data=rettripledataAdmin22($gamename,$date,$bazar,$category);

foreach($triple_data->result() as $rowtriple){

$data_single0=$rowtriple->value1;
$data_single1=$rowtriple->value2;
$data_single2=$rowtriple->value3;
$data_single3=$rowtriple->value4;
$data_single4=$rowtriple->value5;
$data_single5=$rowtriple->value6;
$data_single6=$rowtriple->value7;
$data_single7=$rowtriple->value8;
$data_single8=$rowtriple->value9;
$data_single9=$rowtriple->value10;
$data_single10=$rowtriple->value11;

//echo $single0;
}
?>
<tr >
<td align="center"><input id="single0" autocomplete="false"  readonly  size="3" type="text" value="<?php  echo $data_single0; ?>"></td>

<td align="center"><input id="single1" name="single1" autocomplete="false" size="3" readonly value="<?php  echo $data_single1; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single2" name="single2" autocomplete="false" size="3" readonly  maxlength="6" value="<?php  echo $data_single2; ?>" type="text"></td>
<td align="center"><input id="single3" name="single3" autocomplete="false" size="3" readonly value="<?php  echo $data_single3; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single4" name="single4" autocomplete="false" size="3" readonly value="<?php  echo $data_single4; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single5" name="single5" autocomplete="false" readonly size="3" value="<?php  echo $data_single5; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single6" name="single6" autocomplete="false" readonly size="4" value="<?php  echo $data_single6; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single7" name="single7" autocomplete="false" readonly size="4"  value="<?php  echo $data_single7; ?>"  maxlength="6" type="text"></td>
<td align="center"><input id="single8" name="single8" autocomplete="false" readonly size="4" value="<?php  echo $data_single8; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="single9" name="single9" autocomplete="false" readonly size="4"   value="<?php  echo $data_single9; ?>" maxlength="6" type="text"></td>
<td align="center"><input id="singleAmt" name="singleAmt" class="numAmt" size="4" readonly value="<?php  echo $data_single10; ?>" type="text"></td>
</tr>
</tbody>
</table>
</div>
</div>


<?php	
}
?>

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
					</div>
			
			</div>
		</div>
	</div>
	
</div>
 <div class="modal fade" id="TopModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div  id="top-contain">
              
            </div>
        
          </div>
        </div>
      </div>
<?php //include('footer.php');?>
<script type="text/javascript">
	function top_bottom_data(){
		 $.ajax({
            url:"<?php echo base_url();?>gameResult/gettop_bottom_data",
            type: "POST",
            dataType:'html',
            success: function (resultdata) {
                $('#top-contain').html(resultdata);
                $('#TopModal').modal('show');
             }
          });
	}
</script>