
	<div class="content-wrapper">
		<!-- Row start -->
		<div class="card-body">
			<form method="post" action="<?php echo base_url();?>PlReport/index">
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
							<label for="inputName" style=" font-size:15px;font-weight:bold;">Bazar
							</label>
							<select class="form-control select_group" value='<?php echo set_value('bazarname'); ?>' id="showWaiter" name="bazarname" style="font-weight: bold;font-size: 15px;">
                        <option value="selectall">Select All</option>

                      	<?php
		foreach ($b->result() as $row)
    {
		?>


<option value="<?php echo $row->id;  ?>"><?php echo $row->bazar_name;  ?></option>

		<?php
}
		?>
                      </select>
						</div>
					</div>
					<div class="col-xl-4 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<label for="inputName"style=" font-size:15px;font-weight:bold;">Category</label>
							<select class="form-control select_group" value='<?php echo set_value('bazarcategory'); ?>' id="showWaiter" name="bazarcategory" style="font-weight: bold;font-size: 15px;">
                        <option value="selectall">Select all</option>
                         <option value="open">open</option>
                          <option value="close">close</option>
                      </select>
						</div>
					</div>
                                        
<div class="col-xl-4 col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="form-group">
							<button href="#"  class="btn btn-warning btn-lg" name="searchdata" style="margin-top: 22px;margin-left: 15px;font-size: 15px;"><i class="icon-search" ></i> Search
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
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;P L REPORT</div>
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
									<th>TICKET</th>
                                    
									<th>BAZAR</th>
									<th>CATEGORY</th>
									<th>AMT</th>
									<th>BAT</th>
										<th>PATNERSHIP (%)</th>
									<th>AFTER PATNERSHIP AMOUNT</th>
                                    <th>DETAILS</th>
                                    <th>WIN</th>
                                   <!--  <th>TOTAL-COMM.</th>
                                     <th>AFTER-PART.</th>  -->
                                    <th>NET-PAY</th>

								    
								</tr>
							</thead>
							<tbody>
							<?php
							$testy=0;
		foreach ($ticket->result() as $row)
    {

    	
		?>
								<tr>
								    <td><?php echo $row->date;  ?></td>
								    <td><?php echo $row->ticket_id;  ?></td>
                                                                 
								    <td><?php echo getBazarNameById($row->game_id);  ?></td>
									<td><?php echo $row->game_type;  ?></td>
									<td><?php echo $row->purchase_amount;  ?></td>
										<td><?php $custmeridPART=usercom($row->customer_id); echo $custmeridPART;?></td>
									
									<td><?php 
								   
								    
									IF($custmeridPART>0){ echo $row->purchase_amount-($row->purchase_amount*$custmeridPART/100); }ELSE{ ECHO $row->purchase_amount; } ?></td>
									
									<td>
										<a data-toggle="modal" data-target="#myModal<?php echo $testy.$row->game_patti_type; ?>"> <button type="button" class="btn btn-success">VIEW</button></a>
									<td>

									<a href="javascript:void(0);" class="CancleData"  data-id="<?php echo $row->ticket_id; ?>" data-ticket="<?php echo $row->ticket_id; ?>"
									date-gametype="<?php echo  $row->game_patti_type; ?>" 
								<?php
								$queryDetails=ticketdetails($row->ticket_id);
								foreach($queryDetails->result() as $tdetail){
								    ?>
								    data-aakda_number="<?php echo $tdetail->aakda_number; ?>"
								    data-pana_number="<?php echo $tdetail->pana_number; ?>"
								    
								     
								    data-total_aakda_amount="<?php echo $tdetail->total_aakda_amount; ?>"
								    data-aakda_com="<?php echo $tdetail->aakda_com; ?>"
								    data-aakda_total_com="<?php echo $tdetail->	aakda_total_com; ?>"
								    
								    data-aakda_total_wamount="<?php echo $tdetail->aakda_total_wamount; ?>"
								    data-aakda_rate="<?php echo $tdetail->aakda_rate; ?>"
								    data-aakda_win_amount="<?php echo $tdetail->aakda_win_amount; ?>"
								   
								    data-pana_total_amount="<?php echo $tdetail->pana_total_amount; ?>"
								    data-pana_com="<?php echo $tdetail->pana_com; ?>"
								    data-pana_total_com="<?php echo $tdetail->pana_total_com; ?>"
								    
								    data-single_pana_amount="<?php echo $tdetail->single_pana_amount; ?>"
								    data-single_pana_rate="<?php echo $tdetail->single_pana_rate; ?>"
								    data-single_pana_win_amount="<?php echo $tdetail->single_pana_win_amount; ?>"
								    
								     data-double_pana_amount="<?php echo $tdetail->double_pana_amount; ?>"
								    data-double_pana_rate="<?php echo $tdetail->double_pana_rate; ?>"
								    data-double_pana_win_amount="<?php echo $tdetail->double_pana_win_amount; ?>"
								    
								     data-tripple_pana_amount="<?php echo $tdetail->triple_pana_amount; ?>"
								    data-tripple_pana_rate="<?php echo $tdetail->triple_pana_rate; ?>"
								    data-tripple_pana_win_amount="<?php echo $tdetail->triple_pana_win_amount; ?>"
								    
								    data-jodi_number="<?php echo $tdetail->jodi_number; ?>"
								    
								    data-jodi_total_amount="<?php echo $tdetail->jodi_total_amount; ?>"
								    data-jodi_amount="<?php echo $tdetail->jodi_amount; ?>"
								    data-jodi_rate="<?php echo $tdetail->jodi_rate; ?>"
								    data-jodi_win_amount="<?php echo $tdetail->jodi_win_amount; ?>"
								    
								    data-total_com="<?php echo $tdetail->total_com; ?>"
								    
								    data-total_win="<?php echo $tdetail->total_win; ?>"
								    
								    data-before_patnership="<?php echo $tdetail->before_patnership; ?>"
								    
								    data-patnership="<?php echo $tdetail->patnership; ?>"
								    data-after_patnership="<?php echo $tdetail->after_patnership; ?>"
								    data-nettopay="<?php echo $tdetail->nettopay; ?>"
								    <?php
								}
								
								
								?>
									
									> <button type="button" class="btn btn-danger">DETAILS</button></a>
								</td>
								 <td><?php echo $row->ticket_win_amount;  ?></td>
								   
								    <td><?php echo $row->ticket_net_pay;;  ?></td>
								    
									
							   </tr>
		<?php
		$testy++;
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
		<?php
		$test=0;
		foreach ($ticket->result() as $row)
    {

    	
		?>

      <div class="modal fade" id="myModal<?php echo $test.$row->game_patti_type; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">TicKet Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                 <div class="modal-body">
              	<?php
              	$custmeridPART2=100-$row->playerpercent;
 $custmeridPART=100-$row->playerpercent;
if($row->game_patti_type=='AAKDA-001'){

              	?>
                <div class="table-responsive">
									<table class="table m-0">
										<thead>
		<?php 
			$aakd_data=gameDataByBazar($row->ticket_id,$row->game_patti_type,$row->customer_id,$row->customer_id,$custmeridPART);
	
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
		 
		   <tr  align="center">
          
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
	            <td align="center">
	            <?php 
	             $data1=$data_single1-($data_single1*$custmeridPART/100);
	            echo'BP-'.$data_single1;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data1; }ELSE{ echo'AP-'. $data_single1; } 
	            ?></td>
                <td align="center"><?php 
	            $data2=$data_single2-($data_single2*$custmeridPART/100);
	            echo'BP-'.$data_single2;
	            echo'<hr>';
	            ECHO 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data2; }ELSE{ echo'AP-'. $data_single2; } 
	            ?></td>
                <td align="center">
                     <?php 
	             $data3=$data_single3-($data_single3*$custmeridPART/100);
	            echo'BP-'.$data_single3;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data3; }ELSE{ echo'AP-'. $data_single3; } 
	            ?> </td>
                <td align="center">
                      <?php 
	             $data4=$data_single4-($data_single4*$custmeridPART/100);
	            echo'BP-'.$data_single4;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data4; }ELSE{ echo'AP-'. $data_single4; } 
	            ?></td>
                <td align="center">  <?php 
	             $data5=$data_single5-($data_single5*$custmeridPART/100);
	            echo'BP-'.$data_single5;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data5; }ELSE{ echo'AP-'. $data_single5; } 
	            ?></td>
                <td align="center">  <?php 
	             $data6=$data_single6-($data_single6*$custmeridPART/100);
	            echo'BP-'.$data_single6;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data6; }ELSE{ echo'AP-'. $data_single6; } 
	            ?></td>
                <td align="center">  <?php 
	            $data7= $data_single7-($data_single7*$custmeridPART/100);
	            echo'BP-'.$data_single7;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data7; }ELSE{ echo'AP-'. $data_single7; } 
	            ?></td>
                <td align="center">
                      <?php 
	             $data8=$data_single8-($data_single8*$custmeridPART/100);
	            echo'BP-'.$data_single8;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data8; }ELSE{ echo'AP-'. $data_single8; } 
	            ?>
                </td>
               <td align="center">
                     <?php 
	             $data9=$data_single9-($data_single9*$custmeridPART/100);
	            echo'BP-'.$data_single9;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data9; }ELSE{ echo'AP-'. $data_single9; } 
	            ?> 
                   </td>
                <td align="center">  <?php 
	             $data0=$data_single0-($data_single0*$custmeridPART/100);
	            echo'BP-'.$data_single0;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data0; }ELSE{ echo'AP-'. $data_single0; } 
	            ?></td>
               
          
                <td align="center">  <?php 
	             $data10=$data_single10-($data_single10*$custmeridPART/100);
	            echo'BP-'.$data_single10;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data10; }ELSE{ echo'AP-'. $data_single10; } 
	            ?></td>
            </tr>
			
            </tbody>
		</table>
		</div>

		<?php
}else if ($row->game_patti_type=='SINGLE-002') {
	?>

<div class="table-responsive">
									<table class="table m-0">
										<thead>
        
      

     
        <tr    align="center">
            <th >1</th>
            <th  >2</th>
            <th >3</th>
            <th  >4</th>
            <th  >5</th>
            <th  >6</th>
            <th >7</th>
            <th  >8</th>
            <th  >9</th>
            <th  >0</th>
           
        </tr>
	</thead>
	<style>
	font{
		font-size:23px;
		
	}
	.boxlabel{
		font-size:17px;
	
		text-decoration:underline;
		
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
 <tr  >
               <td align="center" ><div class="boxlabel">128</div>
                            <div class="ticket_amount" id="sp_1_0"><font size="25px" color='black'>
                                <?php  echo ret('n128',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                             <td align="center" class=""><div class="boxlabel">129</div><div class="ticket_amount" id="sp_2_0"><font color='black'>
                                 <?php  echo ret('n129',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font></div></td>
                                                                    <td align="center" class=""><div class="boxlabel">120</div>
                            <div class="ticket_amount" id="sp_3_0"><font color='black'>
                                <?php  echo ret('n120',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">130</div>
                            <div class="ticket_amount" id="sp_4_0"><font color='black'><?php  echo ret('n130',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">140</div>
                            <div class="ticket_amount" id="sp_5_0"><font color='black'><?php  echo ret('n140',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">123</div>
                            <div class="ticket_amount" id="sp_6_0"><font color='black'><?php  echo ret('n123',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">124</div>
                            <div class="ticket_amount" id="sp_7_0"><font color='black'><?php  echo ret('n124',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">125</div>
                            <div class="ticket_amount" id="sp_8_0"><font color='black'><?php  echo ret('n125',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">126</div>
                            <div class="ticket_amount" id="sp_9_0"><font color='black'><?php  echo ret('n126',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">127</div>
                            <div class="ticket_amount" id="sp_0_0"><font color='black'><?php  echo ret('n127',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
        </tr>
    <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">290</div>
                            <div class="ticket_amount" id="sp_1_1"><font color='black'><?php  echo ret('n290',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">246</div>
                            <div class="ticket_amount" id="sp_2_1"><font color='black'><?php  echo ret('n246',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">247</div>
                            <div class="ticket_amount" id="sp_3_1"><font color='black'><?php  echo ret('n247',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">248</div>
                            <div class="ticket_amount" id="sp_4_1"><font color='black'><?php  echo ret('n248',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">258</div>
                            <div class="ticket_amount" id="sp_5_1"><font color='black'><?php  echo ret('n258',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">259</div>
                            <div class="ticket_amount" id="sp_6_1"><font color='black'><?php  echo ret('n259',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">278</div>
                            <div class="ticket_amount" id="sp_7_1"><font color='black'><?php  echo ret('n278',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">279</div>
                            <div class="ticket_amount" id="sp_8_1"><font color='black'><?php  echo ret('n279',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">289</div>
                            <div class="ticket_amount" id="sp_9_1"><font color='black'><?php  echo ret('n289',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">235</div>
                            <div class="ticket_amount" id="sp_0_1"><font color='black'><?php  echo ret('n235',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr  >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center"><div class="boxlabel">579</div>
                            <div class="ticket_amount" id="sp_1_2"><font color='black'><?php  echo ret('n579',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">589</div>
                            <div class="ticket_amount" id="sp_2_2"><font color='black'><?php  echo ret('n589',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">670</div>
                            <div class="ticket_amount" id="sp_3_2"><font color='black'><?php  echo ret('n670',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">680</div>
                            <div class="ticket_amount" id="sp_4_2"><font color='black'><?php  echo ret('n680',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">690</div>
                            <div class="ticket_amount" id="sp_5_2"><font color='black'><?php  echo ret('n690',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">457</div>
                            <div class="ticket_amount" id="sp_6_2"><font color='black'><?php  echo ret('n457',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">467</div>
                            <div class="ticket_amount" id="sp_7_2"><font color='black'><?php  echo ret('n467',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">468</div>
                            <div class="ticket_amount" id="sp_8_2"><font color='black'><?php  echo ret('n468',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">478</div>
                            <div class="ticket_amount" id="sp_9_2"><font color='black'><?php  echo ret('n478',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">569</div>
                            <div class="ticket_amount" id="sp_0_2"><font color='black'><?php  echo ret('n569',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr  >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">137</div>
                            <div class="ticket_amount" id="sp_1_3"><font color='black'><?php  echo ret('n137',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">138</div>
                            <div class="ticket_amount" id="sp_2_3"><font color='black'><?php  echo ret('n138',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">139</div>
                            <div class="ticket_amount" id="sp_3_3"><font color='black'><?php  echo ret('n139',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">149</div>
                            <div class="ticket_amount" id="sp_4_3"><font color='black'><?php  echo ret('n149',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">159</div>
                            <div class="ticket_amount" id="sp_5_3"><font color='black'><?php  echo ret('n159',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">150</div>
                            <div class="ticket_amount" id="sp_6_3"><font color='black'><?php  echo ret('n150',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">160</div>
                            <div class="ticket_amount" id="sp_7_3"><font color='black'><?php  echo ret('n160',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">134</div>
                            <div class="ticket_amount" id="sp_8_3"><font color='black'><?php  echo ret('n134',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">135</div>
                            <div class="ticket_amount" id="sp_9_3"><font color='black'><?php  echo ret('n135',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">136</div>
                            <div class="ticket_amount" id="sp_0_3"><font color='black'><?php  echo ret('n136',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr  >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">380</div>
                            <div class="ticket_amount" id="sp_1_4"><font color='black'><?php  echo ret('n380',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">345</div>
                            <div class="ticket_amount" id="sp_2_4"><font color='black'><?php  echo ret('n345',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">256</div>
                            <div class="ticket_amount" id="sp_3_4"><font color='black'><?php  echo ret('n256',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">257</div>
                            <div class="ticket_amount" id="sp_4_4"><font color='black'><?php  echo ret('n257',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">267</div>
                            <div class="ticket_amount" id="sp_5_4"><font color='black'><?php  echo ret('n267',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">268</div>
                            <div class="ticket_amount" id="sp_6_4"><font color='black'><?php  echo ret('n268',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">340</div>
                            <div class="ticket_amount" id="sp_7_4"><font color='black'><?php  echo ret('n340',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">350</div>
                            <div class="ticket_amount" id="sp_8_4"><font color='black'><?php  echo ret('n350',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">360</div>
                            <div class="ticket_amount" id="sp_9_4"><font color='black'><?php  echo ret('n360',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">370</div>
                            <div class="ticket_amount" id="sp_0_4"><font color='black'><?php  echo ret('n370',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">678</div>
                            <div class="ticket_amount" id="sp_1_5"><font color='black'><?php  echo ret('n678',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">679</div>
                            <div class="ticket_amount" id="sp_2_5"><font color='black'><?php  echo ret('n679',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">689</div>
                            <div class="ticket_amount" id="sp_3_5"><font color='black'><?php  echo ret('n689',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">789</div>
                            <div class="ticket_amount" id="sp_4_5"><font color='black'><?php  echo ret('n789',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">780</div>
                            <div class="ticket_amount" id="sp_5_5"><font color='black'><?php  echo ret('n780',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">790</div>
                            <div class="ticket_amount" id="sp_6_5"><font color='black'><?php  echo ret('n790',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">890</div>
                            <div class="ticket_amount" id="sp_7_5"><font color='black'><?php  echo ret('n890',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">567</div>
                            <div class="ticket_amount" id="sp_8_5"><font color='black'><?php  echo ret('n567',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">568</div>
                            <div class="ticket_amount" id="sp_9_5"><font color='black'><?php  echo ret('n568',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">578</div>
                            <div class="ticket_amount" id="sp_0_5"><font color='black'><?php  echo ret('n578',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
                </tr>
                                            <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center"><div class="boxlabel">146</div>
                            <div class="ticket_amount" id="sp_1_6"><font color='black'><?php  echo ret('n146',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">147</div>
                            <div class="ticket_amount" id="sp_2_6"><font color='black'><?php  echo ret('n147',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">148</div>
                            <div class="ticket_amount" id="sp_3_6"><font color='black'><?php  echo ret('n148',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">158</div>
                            <div class="ticket_amount" id="sp_4_6"><font color='black'><?php  echo ret('n158',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">168</div>
                            <div class="ticket_amount" id="sp_5_6"><font color='black'><?php  echo ret('n168',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">169</div>
                            <div class="ticket_amount" id="sp_6_6"><font color='black'><?php  echo ret('n169',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">179</div>
                            <div class="ticket_amount" id="sp_7_6"><font color='black'><?php  echo ret('n179',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">170</div>
                            <div class="ticket_amount" id="sp_8_6"><font color='black'><?php  echo ret('n170',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">180</div>
                            <div class="ticket_amount" id="sp_9_6"><font color='black'><?php  echo ret('n180',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">145</div>
                            <div class="ticket_amount" id="sp_0_6"><font color='black'><?php  echo ret('n145',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
                </tr>
                                            <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">470</div>
                            <div class="ticket_amount" id="sp_1_7"><font color='black'><?php  echo ret('n470',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">390</div>
                            <div class="ticket_amount" id="sp_2_7"><font color='black'><?php  echo ret('n390',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">346</div>
                            <div class="ticket_amount" id="sp_3_7"><font color='black'><?php  echo ret('n346',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">347</div>
                            <div class="ticket_amount" id="sp_4_7"><font color='black'><?php  echo ret('n347',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">348</div>
                            <div class="ticket_amount" id="sp_5_7"><font color='black'><?php  echo ret('n348',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">349</div>
                            <div class="ticket_amount" id="sp_6_7"><font color='black'><?php  echo ret('n349',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">359</div>
                            <div class="ticket_amount" id="sp_7_7"><font color='black'><?php  echo ret('n359',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">369</div>
                            <div class="ticket_amount" id="sp_8_7"><font color='black'><?php  echo ret('n369',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">379</div>
                            <div class="ticket_amount" id="sp_9_7"><font color='black'><?php  echo ret('n379',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">389</div>
                            <div class="ticket_amount" id="sp_0_7"><font color='black'><?php  echo ret('n389',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">236</div>
                            <div class="ticket_amount" id="sp_1_8"><font color='black'><?php  echo ret('n236',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">156</div>
                            <div class="ticket_amount" id="sp_2_8"><font color='black'><?php  echo ret('n156',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">157</div>
                            <div class="ticket_amount" id="sp_3_8"><font color='black'><?php  echo ret('n157',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">167</div>
                            <div class="ticket_amount" id="sp_4_8"><font color='black'><?php  echo ret('n167',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">230</div>
                            <div class="ticket_amount" id="sp_5_8"><font color='black'><?php  echo ret('n230',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">178</div>
                            <div class="ticket_amount" id="sp_6_8"><font color='black'><?php  echo ret('n178',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">250</div>
                            <div class="ticket_amount" id="sp_7_8"><font color='black'><?php  echo ret('n250',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">189</div>
                            <div class="ticket_amount" id="sp_8_8"><font color='black'><?php  echo ret('n189',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">270</div>
                            <div class="ticket_amount" id="sp_9_8"><font color='black'><?php  echo ret('n270',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">190</div>
                            <div class="ticket_amount" id="sp_0_8"><font color='black'><?php  echo ret('n190',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
                </tr>
                                            <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">489</div>
                            <div class="ticket_amount" id="sp_1_9"><font color='black'><?php  echo ret('n489',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">480</div>
                            <div class="ticket_amount" id="sp_2_9"><font color='black'><?php  echo ret('n480',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">490</div>
                            <div class="ticket_amount" id="sp_3_9"><font color='black'><?php  echo ret('n490',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">356</div>
                            <div class="ticket_amount" id="sp_4_9"><font color='black'><?php  echo ret('n356',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">357</div>
                            <div class="ticket_amount" id="sp_5_9"><font color='black'><?php  echo ret('n357',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">358</div>
                            <div class="ticket_amount" id="sp_6_9"><font color='black'><?php  echo ret('n358',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">368</div>
                            <div class="ticket_amount" id="sp_7_9"><font color='black'><?php  echo ret('n368',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">378</div>
                            <div class="ticket_amount" id="sp_8_9"><font color='black'><?php  echo ret('n378',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">450</div>
                            <div class="ticket_amount" id="sp_9_9"><font color='black'><?php  echo ret('n450',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">460</div>
                            <div class="ticket_amount" id="sp_0_9"><font color='black'><?php  echo ret('n460',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">245</div>
                            <div class="ticket_amount" id="sp_1_10"><font color='black'><?php  echo ret('n245',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">237</div>
                            <div class="ticket_amount" id="sp_2_10"><font color='black'><?php  echo ret('n237',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">238</div>
                            <div class="ticket_amount" id="sp_3_10"><font color='black'><?php  echo ret('n238',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">239</div>
                            <div class="ticket_amount" id="sp_4_10"><font color='black'><?php  echo ret('n239',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">249</div>
                            <div class="ticket_amount" id="sp_5_10"><font color='black'><?php  echo ret('n249',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">240</div>
                            <div class="ticket_amount" id="sp_6_10"><font color='black'><?php  echo ret('n240',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">269</div>
                            <div class="ticket_amount" id="sp_7_10"><font color='black'><?php  echo ret('n269',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">260</div>
                            <div class="ticket_amount" id="sp_8_10"><font color='black'><?php  echo ret('n260',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">234</div>
                            <div class="ticket_amount" id="sp_9_10"><font color='black'><?php  echo ret('n234',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">280</div>
                            <div class="ticket_amount" id="sp_0_10"><font color='black'><?php  echo ret('n280',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr >
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" ><div class="boxlabel">560</div>
                            <div class="ticket_amount" id="sp_1_11"><font color='black'><?php  echo ret('n560',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">570</div>
                            <div class="ticket_amount" id="sp_2_11"><font color='black'><?php  echo ret('n570',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">580</div>
                            <div class="ticket_amount" id="sp_3_11"><font color='black'><?php  echo ret('n580',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">590</div>
                            <div class="ticket_amount" id="sp_4_11"><font color='black'><?php  echo ret('n590',$row->ticket_id,$row->game_patti_type,$row->customer_id,$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">456</div>
                            <div class="ticket_amount" id="sp_5_11"><font color='black'><?php  echo ret('n456',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">367</div>
                            <div class="ticket_amount" id="sp_6_11"><font color='black'><?php  echo ret('n367',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">458</div>
                            <div class="ticket_amount" id="sp_7_11"><font color='black'><?php  echo ret('n458',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">459</div>
                            <div class="ticket_amount" id="sp_8_11"><font color='black'><?php  echo ret('n459',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">469</div>
                            <div class="ticket_amount" id="sp_9_11"><font color='black'><?php  echo ret('n469',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">479</div>
                            <div class="ticket_amount" id="sp_0_11"><font color='black'><?php  echo ret('n479',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
 <tr>
	  
	  <td colspan="10">
	 <font color='black'SIZE="18">TOTAL:<?php  echo ret('total',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font> 
	  </td>
	  
	  
	  </tr>
	</tbody>
</table>
</div>
<?php
}elseif ($row->game_patti_type=='DOUBLE-003') {
	?>
<div class="table-responsive">
									<table id="basicExample" class="table m-0">
										<thead>
 <tr    align="center">
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

        </tr>
        </thead>
        <tbody>
  <tr >
                <td align="center" ><div class="boxlabel">100</div>
                            <div id="dp_1_0" class="ticket_amount"><font color='black'><?php  echo ret2('n100',$row->ticket_id,$row->game_patti_type,
                            $row->customer_id,$custmeridPART); ?></font></div>
                </td>
                <td align="center" class=""><div class="boxlabel">200</div>
                            <div id="dp_2_0" class="ticket_amount"><font color='black'><?php  echo ret2('n200',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                 </td>
                <td align="center" class=""><div class="boxlabel">300</div>
                            <div id="dp_3_0" class="ticket_amount"><font color='black'><?php  echo ret2('n300',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font></div>
                 </td>
                <td align="center" class=""><div class="boxlabel">400</div>
                            <div id="dp_4_0" class="ticket_amount"><font color='black'><?php  echo ret2('n400',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">500</div>
                            <div id="dp_5_0" class="ticket_amount"><font color='black'><?php  echo ret2('n500',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">600</div>
                            <div id="dp_6_0" class="ticket_amount"><font color='black'><?php  echo ret2('n600',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">700</div>
                            <div id="dp_7_0" class="ticket_amount"><font color='black'><?php  echo ret2('n700',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">800</div>
                            <div id="dp_8_0" class="ticket_amount"><font color='black'><?php  echo ret2('n800',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">900</div>
                            <div id="dp_9_0" class="ticket_amount"><font color='black'><?php  echo ret2('n900',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">226</div>
                            <div id="dp_0_0" class="ticket_amount"><font color='black'><?php  echo ret2('n226',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
                                            <tr>
                                                                    <td align="center" ><div class="boxlabel">335</div>
                            <div id="dp_1_1" class="ticket_amount"><font color='black'><?php  echo ret2('n335',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">336</div>
                            <div id="dp_2_1" class="ticket_amount"><font color='black'><?php  echo ret2('n336',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">355</div>
                            <div id="dp_3_1" class="ticket_amount"><font color='black'><?php  echo ret2('n355',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">338</div>
                            <div id="dp_4_1" class="ticket_amount"><font color='black'><?php  echo ret2('n338',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">339</div>
                            <div id="dp_5_1" class="ticket_amount"><font color='black'><?php  echo ret2('n339',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">448</div>
                            <div id="dp_6_1" class="ticket_amount"><font color='black'><?php  echo ret2('n448',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">223</div>
                            <div id="dp_7_1" class="ticket_amount"><font color='black'><?php  echo ret2('n223',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">288</div>
                            <div id="dp_8_1" class="ticket_amount"><font color='black'><?php  echo ret2('n288',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">225</div>
                            <div id="dp_9_1" class="ticket_amount"><font color='black'><?php  echo ret2('n225',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">668</div>
                            <div id="dp_0_1" class="ticket_amount"><font color='black'><?php  echo ret2('n668',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                      
                </tr>
                                            <tr >
                                                                    <td align="center" ><div class="boxlabel">344</div>
                            <div id="dp_1_2" class="ticket_amount"><font color='black'><?php  echo ret2('n344',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">499</div>
                            <div id="dp_2_2" class="ticket_amount"><font color='black'><?php  echo ret2('n499',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">445</div>
                            <div id="dp_3_2" class="ticket_amount"><font color='black'><?php  echo ret2('n445',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">446</div>
                            <div id="dp_4_2" class="ticket_amount"><font color='black'><?php  echo ret2('n446',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">366</div>
                            <div id="dp_5_2" class="ticket_amount"><font color='black'><?php  echo ret2('n366',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">466</div>
                            <div id="dp_6_2" class="ticket_amount"><font color='black'><?php  echo ret2('n446',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">377</div>
                            <div id="dp_7_2" class="ticket_amount"><font color='black'><?php  echo ret2('n377',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">440</div>
                            <div id="dp_8_2" class="ticket_amount"><font color='black'><?php  echo ret2('n440',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">388</div>
                            <div id="dp_9_2" class="ticket_amount"><font color='black'><?php  echo ret2('n388',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">488</div>
                            <div id="dp_0_2" class="ticket_amount"><font color='black'><?php  echo ret2('n488',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
                                            <tr>
                                                                    <td align="center" ><div class="boxlabel">119</div>
                            <div id="dp_1_3" class="ticket_amount"><font color='black'><?php  echo ret2('n119',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">110</div>
                            <div id="dp_2_3" class="ticket_amount"><font color='black'><?php  echo ret2('n110',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">166</div>
                            <div id="dp_3_3" class="ticket_amount"><font color='black'><?php  echo ret2('n166',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">112</div>
                            <div id="dp_4_3" class="ticket_amount"><font color='black'><?php  echo ret2('n112',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">113</div>
                            <div id="dp_5_3" class="ticket_amount"><font color='black'><?php  echo ret2('n113',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">114</div>
                            <div id="dp_6_3" class="ticket_amount"><font color='black'><?php  echo ret2('n114',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">115</div>
                            <div id="dp_7_3" class="ticket_amount"><font color='black'><?php  echo ret2('n115',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">116</div>
                            <div id="dp_8_3" class="ticket_amount"><font color='black'><?php  echo ret2('n116',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">117</div>
                            <div id="dp_9_3" class="ticket_amount"><font color='black'><?php  echo ret2('n117',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">118</div>
                            <div id="dp_0_3" class="ticket_amount"><font color='black'><?php  echo ret2('n118',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                      
                </tr>
                                            <tr >
                                                                    <td align="center" ><div class="boxlabel">399</div>
                            <div id="dp_1_4" class="ticket_amount"><font color='black'><?php  echo ret2('n399',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">660</div>
                            <div id="dp_2_4" class="ticket_amount"><font color='black'><?php  echo ret2('n660',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">599</div>
                            <div id="dp_3_4" class="ticket_amount"><font color='black'><?php  echo ret2('n599',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">455</div>
                            <div id="dp_4_4" class="ticket_amount"><font color='black'><?php  echo ret2('n455',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">447</div>
                            <div id="dp_5_4" class="ticket_amount"><font color='black'><?php  echo ret2('n447',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">556</div>
                            <div id="dp_6_4" class="ticket_amount"><font color='black'><?php  echo ret2('n556',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">449</div>
                            <div id="dp_7_4" class="ticket_amount"><font color='black'><?php  echo ret2('n449',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">477</div>
                            <div id="dp_8_4" class="ticket_amount"><font color='black'><?php  echo ret2('n477',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">559</div>
                            <div id="dp_9_4" class="ticket_amount"><font color='black'><?php  echo ret2('n559',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">334</div>
                            <div id="dp_0_4" class="ticket_amount"><font color='black'><?php  echo ret2('n334',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
                                            <tr >
                                                                    <td align="center" ><div class="boxlabel">155</div>
                            <div id="dp_1_5" class="ticket_amount"><font color='black'><?php  echo ret2('n155',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">228</div>
                            <div id="dp_2_5" class="ticket_amount"><font color='black'><?php  echo ret2('n228',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">229</div>
                            <div id="dp_3_5" class="ticket_amount"><font color='black'><?php  echo ret2('n229',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">220</div>
                            <div id="dp_4_5" class="ticket_amount"><font color='black'><?php  echo ret2('n220',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">122</div>
                            <div id="dp_5_5" class="ticket_amount"><font color='black'><?php  echo ret2('n122',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">277</div>
                            <div id="dp_6_5" class="ticket_amount"><font color='black'><?php  echo ret2('n277',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">133</div>
                            <div id="dp_7_5" class="ticket_amount"><font color='black'><?php  echo ret2('n133',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">224</div>
                            <div id="dp_8_5" class="ticket_amount"><font color='black'><?php  echo ret2('n224',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">144</div>
                            <div id="dp_9_5" class="ticket_amount"><font color='black'><?php  echo ret2('n144',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">299</div>
                            <div id="dp_0_5" class="ticket_amount"><font color='black'><?php  echo ret2('n299',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                      
                </tr>
                                            <tr >
                                                                    <td align="center" ><div class="boxlabel">588</div>
                            <div id="dp_1_6" class="ticket_amount"><font color='black'><?php  echo ret2('n588',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">688</div>
                            <div id="dp_2_6" class="ticket_amount"><font color='black'><?php  echo ret2('n688',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">779</div>
                            <div id="dp_3_6" class="ticket_amount"><font color='black'><?php  echo ret2('n779',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">699</div>
                            <div id="dp_4_6" class="ticket_amount"><font color='black'><?php  echo ret2('n699',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">799</div>
                            <div id="dp_5_6" class="ticket_amount"><font color='black'><?php  echo ret2('n799',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">880</div>
                            <div id="dp_6_6" class="ticket_amount"><font color='black'><?php  echo ret2('n880',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">557</div>
                            <div id="dp_7_6" class="ticket_amount"><font color='black'><?php  echo ret2('n557',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">558</div>
                            <div id="dp_8_6" class="ticket_amount"><font color='black'><?php  echo ret2('n558',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">577</div>
                            <div id="dp_9_6" class="ticket_amount"><font color='black'><?php  echo ret2('n577',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">550</div>
                            <div id="dp_0_6" class="ticket_amount"><font color='black'><?php  echo ret2('n550',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                        
                </tr>
                                            <tr >
                                                                    <td align="center" ><div class="boxlabel">227</div>
                            <div id="dp_1_7" class="ticket_amount"><font color='black'><?php  echo ret2('n227',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">255</div>
                            <div id="dp_2_7" class="ticket_amount"><font color='black'><?php  echo ret2('n255',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">337</div>
                            <div id="dp_3_7" class="ticket_amount"><font color='black'><?php  echo ret2('n337',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">266</div>
                            <div id="dp_4_7" class="ticket_amount"><font color='black'><?php  echo ret2('n266',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">177</div>
                            <div id="dp_5_7" class="ticket_amount"><font color='black'><?php  echo ret2('n177',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">330</div>
                            <div id="dp_6_7" class="ticket_amount"><font color='black'><?php  echo ret2('n330',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">188</div>
                            <div id="dp_7_7" class="ticket_amount"><font color='black'><?php  echo ret2('n188',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">233</div>
                            <div id="dp_8_7" class="ticket_amount"><font color='black'><?php  echo ret2('n233',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">199</div>
                            <div id="dp_9_7" class="ticket_amount"><font color='black'><?php  echo ret2('n199',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">244</div>
                            <div id="dp_0_7" class="ticket_amount"><font color='black'><?php  echo ret2('n244',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                        
                </tr>
                                            <tr >
                                                                    <td align="center" ><div class="boxlabel">669</div>
                            <div id="dp_1_8" class="ticket_amount"><font color='black'><?php  echo ret2('n669',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">778</div>
                            <div id="dp_2_8" class="ticket_amount"><font color='black'><?php  echo ret2('n778',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">788</div>
                            <div id="dp_3_8" class="ticket_amount"><font color='black'><?php  echo ret2('n788',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">770</div>
                            <div id="dp_4_8" class="ticket_amount"><font color='black'><?php  echo ret2('n770',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">889</div>
                            <div id="dp_5_8" class="ticket_amount"><font color='black'><?php  echo ret2('n889',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">899</div>
                            <div id="dp_6_8" class="ticket_amount"><font color='black'><?php  echo ret2('n899',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">566</div>
                            <div id="dp_7_8" class="ticket_amount"><font color='black'><?php  echo ret2('n566',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">990</div>
                            <div id="dp_8_8" class="ticket_amount"><font color='black'><?php  echo ret2('n990',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">667</div>
                            <div id="dp_9_8" class="ticket_amount"><font color='black'><?php  echo ret2('n667',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">677</div>
                            <div id="dp_0_8" class="ticket_amount"><font color='black'><?php  echo ret2('n677',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
       <tr>
	  
	  <td colspan="10">
	 <font color='black'SIZE="18">TOTAL:<?php  echo ret2('total',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font> 
	  </td>
	  
	  
	  </tr>
   
    
        </tbody>
    </table>
    
</div>

	<?php
	
}elseif ($row->game_patti_type=='JODI-004') {
	?>
  <div class="table-responsive">
									<table id="basicExample" class="table m-0">
										<thead>
           
        
      
            <tr   align="center">
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
               
                font-size:23px;
               
            }
        
            </style>
    <tbody>
            <tr >
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
                                   
                                    <td align="center" ><span class="boxlabel">00</span><br><span id="numvalue"><?php  echo ret3('n00',$row->ticket_id,
                                    $row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">01</span><br><span id="numvalue"><?php  echo ret3('n01',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">02</span><br><span id="numvalue"><?php  echo ret3('n02',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">03</span><br><span id="numvalue"><?php  echo ret3('n03',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">04</span><br><span id="numvalue"><?php  echo ret3('n04',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">05</span><br><span id="numvalue"><?php  echo ret3('n05',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">06</span><br><span id="numvalue"><?php  echo ret3('n06',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">07</span><br><span id="numvalue"><?php  echo ret3('n07',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">08</span><br><span id="numvalue"><?php  echo ret3('n08',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">09</span><br><span id="numvalue"><?php  echo ret3('n09',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                     
                                 <td align="center" ><span class="boxlabel">10</span><br><span id="numvalue"><?php  echo ret3('n10',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">11</span><br><span id="numvalue"><?php  echo ret3('n11',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">12</span><br><span id="numvalue"><?php  echo ret3('n12',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">13</span><br><span id="numvalue"><?php  echo ret3('n13',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">14</span><br><span id="numvalue"><?php  echo ret3('n14',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">15</span><br><span id="numvalue"><?php  echo ret3('n15',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">16</span><br><span id="numvalue"><?php  echo ret3('n16',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">17</span><br><span id="numvalue"><?php  echo ret3('n17',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">18</span><br><span id="numvalue"><?php  echo ret3('n18',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">19</span><br><span id="numvalue"><?php  echo ret3('n19',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                             
            </tr>
                        <tr >
                            <td align="center" ><span class="boxlabel">20</span><br><span id="numvalue"><?php  echo ret3('n20',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">21</span><br><span id="numvalue"><?php  echo ret3('n21',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">22</span><br><span id="numvalue"><?php  echo ret3('n22',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">23</span><br><span id="numvalue"><?php  echo ret3('n23',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">24</span><br><span id="numvalue"><?php  echo ret3('n24',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">25</span><br><span id="numvalue"><?php  echo ret3('n25',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">26</span><br><span id="numvalue"><?php  echo ret3('n26',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">27</span><br><span id="numvalue"><?php  echo ret3('n27',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">28</span><br><span id="numvalue"><?php  echo ret3('n28',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">29</span><br><span id="numvalue"><?php  echo ret3('n29',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                             
            </tr>
                        <tr >
                                    <td align="center" ><span class="boxlabel">30</span><br><span id="numvalue"><?php  echo ret3('n30',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">31</span><br><span id="numvalue"><?php  echo ret3('n31',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">32</span><br><span id="numvalue"><?php  echo ret3('n32',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">33</span><br><span id="numvalue"><?php  echo ret3('n33',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">34</span><br><span id="numvalue"><?php  echo ret3('n34',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">35</span><br><span id="numvalue"><?php  echo ret3('n35',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">36</span><br><span id="numvalue"><?php  echo ret3('n36',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">37</span><br><span id="numvalue"><?php  echo ret3('n37',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">38</span><br><span id="numvalue"><?php  echo ret3('n38',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">39</span><br><span id="numvalue"><?php  echo ret3('n39',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                                          <td align="center" ><span class="boxlabel">40</span><br><span id="numvalue"><?php  echo ret3('n40',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">41</span><br><span id="numvalue"><?php  echo ret3('n41',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">42</span><br><span id="numvalue"><?php  echo ret3('n42',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">43</span><br><span id="numvalue"><?php  echo ret3('n43',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">44</span><br><span id="numvalue"><?php  echo ret3('n44',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">45</span><br><span id="numvalue"><?php  echo ret3('n45',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">46</span><br><span id="numvalue"><?php  echo ret3('n46',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">47</span><br><span id="numvalue"><?php  echo ret3('n47',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">48</span><br><span id="numvalue"><?php  echo ret3('n48',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">49</span><br><span id="numvalue"><?php  echo ret3('n49',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                               
            </tr>
                        <tr >
                                        <td align="center" ><span class="boxlabel">50</span><br><span id="numvalue"><?php  echo ret3('n50',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">51</span><br><span id="numvalue"><?php  echo ret3('n51',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">52</span><br><span id="numvalue"><?php  echo ret3('n52',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">53</span><br><span id="numvalue"><?php  echo ret3('n53',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">54</span><br><span id="numvalue"><?php  echo ret3('n54',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">55</span><br><span id="numvalue"><?php  echo ret3('n55',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">56</span><br><span id="numvalue"><?php  echo ret3('n56',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">57</span><br><span id="numvalue"><?php  echo ret3('n57',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">58</span><br><span id="numvalue"><?php  echo ret3('n58',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">59</span><br><span id="numvalue"><?php  echo ret3('n59',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                             
            </tr>
                        <tr >
                                       <td align="center" ><span class="boxlabel">60</span><br><span id="numvalue"><?php  echo ret3('n60',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">61</span><br><span id="numvalue"><?php  echo ret3('n61',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">62</span><br><span id="numvalue"><?php  echo ret3('n62',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">63</span><br><span id="numvalue"><?php  echo ret3('n63',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">64</span><br><span id="numvalue"><?php  echo ret3('n64',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">65</span><br><span id="numvalue"><?php  echo ret3('n65',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">66</span><br><span id="numvalue"><?php  echo ret3('n66',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">67</span><br><span id="numvalue"><?php  echo ret3('n67',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">68</span><br><span id="numvalue"><?php  echo ret3('n68',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">69</span><br><span id="numvalue"><?php  echo ret3('n69',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                                      <td align="center" ><span class="boxlabel">70</span><br><span id="numvalue"><?php  echo ret3('n70',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">71</span><br><span id="numvalue"><?php  echo ret3('n71',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">72</span><br><span id="numvalue"><?php  echo ret3('n72',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">73</span><br><span id="numvalue"><?php  echo ret3('n73',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">74</span><br><span id="numvalue"><?php  echo ret3('n74',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">75</span><br><span id="numvalue"><?php  echo ret3('n75',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">76</span><br><span id="numvalue"><?php  echo ret3('n76',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">77</span><br><span id="numvalue"><?php  echo ret3('n77',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">78</span><br><span id="numvalue"><?php  echo ret3('n78',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">79</span><br><span id="numvalue"><?php  echo ret3('n79',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                           
            </tr>
                        <tr >
                                     <td align="center" ><span class="boxlabel">80</span><br><span id="numvalue"><?php  echo ret3('n80',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">81</span><br><span id="numvalue"><?php  echo ret3('n81',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">82</span><br><span id="numvalue"><?php  echo ret3('n82',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">83</span><br><span id="numvalue"><?php  echo ret3('n83',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">84</span><br><span id="numvalue"><?php  echo ret3('n84',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">85</span><br><span id="numvalue"><?php  echo ret3('n85',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">86</span><br><span id="numvalue"><?php  echo ret3('n86',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">87</span><br><span id="numvalue"><?php  echo ret3('n87',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">88</span><br><span id="numvalue"><?php  echo ret3('n88',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">89</span><br><span id="numvalue"><?php  echo ret3('n89',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                                    <td align="center" ><span class="boxlabel">90</span><br><span id="numvalue"><?php  echo ret3('n90',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">91</span><br><span id="numvalue"><?php  echo ret3('n91',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">92</span><br><span id="numvalue"><?php  echo ret3('n92',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">93</span><br><span id="numvalue"><?php  echo ret3('n93',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">94</span><br><span id="numvalue"><?php  echo ret3('n94',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">95</span><br><span id="numvalue"><?php  echo ret3('n95',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">96</span><br><span id="numvalue"><?php  echo ret3('n96',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">97</span><br><span id="numvalue"><?php  echo ret3('n97',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">98</span><br><span id="numvalue"><?php  echo ret3('n98',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">99</span><br><span id="numvalue"><?php  echo ret3('n99',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></span></td>
                                
            </tr>
          <tr>
	  
	  <td colspan="10">
	 <font color='black'SIZE="18">TOTAL:<?php  echo ret3('total',$row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART); ?></font> 
	  </td>
	  
	  
	  </tr>
            </tbody>
            </table>
</div>
	<?php
}elseif ($row->game_patti_type=='TRIPLE-004') {
	?>
<div class="table-responsive">
									<table id="basicExample" class="table m-0">
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
			$triple_data=rettripledata($row->ticket_id,$row->game_patti_type,$row->customer_id,$custmeridPART);
			
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
                <td align="center">  <?php 
	             $data0=$data_single0-($data_single0*$custmeridPART/100);
	            echo'BP-'.$data_single0;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data0; }ELSE{ echo'AP-'. $data_single0; } 
	            ?></td>
	       <td align="center">
	            <?php 
	             $data1=$data_single1-($data_single1*$custmeridPART/100);
	            echo'BP-'.$data_single1;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data1; }ELSE{ echo'AP-'. $data_single1; } 
	            ?></td>
                <td align="center"><?php 
	            $data2=$data_single2-($data_single2*$custmeridPART/100);
	            echo'BP-'.$data_single2;
	            echo'<hr>';
	            ECHO 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data2; }ELSE{ echo'AP-'. $data_single2; } 
	            ?></td>
                <td align="center">
                     <?php 
	             $data3=$data_single3-($data_single3*$custmeridPART/100);
	            echo'BP-'.$data_single3;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data3; }ELSE{ echo'AP-'. $data_single3; } 
	            ?> </td>
                <td align="center">
                      <?php 
	             $data4=$data_single4-($data_single4*$custmeridPART/100);
	            echo'BP-'.$data_single4;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data4; }ELSE{ echo'AP-'. $data_single4; } 
	            ?></td>
                <td align="center">  <?php 
	             $data5=$data_single5-($data_single5*$custmeridPART/100);
	            echo'BP-'.$data_single5;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data5; }ELSE{ echo'AP-'. $data_single5; } 
	            ?></td>
                <td align="center">  <?php 
	             $data6=$data_single6-($data_single6*$custmeridPART/100);
	            echo'BP-'.$data_single6;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data6; }ELSE{ echo'AP-'. $data_single6; } 
	            ?></td>
                <td align="center">  <?php 
	            $data7= $data_single7-($data_single7*$custmeridPART/100);
	            echo'BP-'.$data_single7;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data7; }ELSE{ echo'AP-'. $data_single7; } 
	            ?></td>
                <td align="center">
                      <?php 
	             $data8=$data_single8-($data_single8*$custmeridPART/100);
	            echo'BP-'.$data_single8;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data8; }ELSE{ echo'AP-'. $data_single8; } 
	            ?>
                </td>
               <td align="center">
                     <?php 
	             $data9=$data_single9-($data_single9*$custmeridPART/100);
	            echo'BP-'.$data_single9;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data9; }ELSE{ echo'AP-'. $data_single9; } 
	            ?> 
                   </td>
               
               
          
                <td align="center">  <?php 
	             $data10=$data_single10-($data_single10*$custmeridPART/100);
	            echo'BP-'.$data_single10;
	            echo'<hr>';
	             echo 'P-'.$custmeridPART2.'%';
	            echo'<hr>';
	            IF($custmeridPART>0){  echo'AP-'.$data10; }ELSE{ echo'AP-'. $data_single10; } 
	            ?></td>
	            </tr>
			
            </tbody>
			 </table>
			 </div>


<?php	
}
		?>

	
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                
              </div>
          </div>
        </div>
      </div>
<?php
$test++;
}
?>

 

      <div class="modal fade" id="cancleWaiterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ticket win Details  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <input type="hidden" name="id_edit" id="ticketid">
              </button>
            </div>
              <div class="modal-body">
                <TABLE class="table table-bordered">
                	<TBODY>
                		 <TR>
								    <th>Ticket ID</th>
								    <th><span id="ticket"></span></th>
                	    </TR>
                	    <TR>
								    <th>PANA NUMBER</th>
								    <th><span id="pana_number"></span></th>
                	    </TR>
                	    <TR>
                		           <th>AAKDA NUMBER </th>
                                   <th><span id="aakda_number"></span></th>
                	    </TR>
                	    <TR>
								    <th>TOTAL AAKDA AMOUNT</th>
								    <th><span id="total_aakda_amount"></span></th>
                	    </TR>
                	    <TR>
								    <th>AAKDA COM</th>
								    <th><span id="aakda_com"></span></th>
                	    </TR>
                	    <TR>
								    <th>AAKDA TOTAL COM</th>
								    <th><span id="aakda_total_com"></span></th>
                	    </TR>
                	     <TR>
								    <th>AAKDA WIN PLAYED AMOUNT</th>
								    <th><span id="aakda_total_wamount"></span></th>
                	    </TR>
                	    <TR>
								    <th>AAKDA RATE</th>
								    <th><span id="aakda_rate"></span></th>
                	    </TR>
                	    <TR>
								    <th>AAKDA WIN AMOUNT</th>
								    <th><span id="aakda_win_amount"></span></th>
                	    </TR>
                	    <TR>
								    <th>TOTAL  PANA AMOUNT</th>
								    <th><span id="pana_total_amount"></span></th>
                	    </TR>
                	    <TR>
									<th>PANA COM</th>
									<th><span id="pana_com"></span></th>
                	    </TR>
                	    <TR>
								    <th>PANA TOTAL COM</th>
								    <th><span id="pana_total_com"></span></th>
                	    </TR>
                	    <TR>
								    <th>SINGLE PANA AMOUNT</th>
								    <th><span id="single_pana_amount"></span></th>
                	    </TR>
                	     <TR>
								    <th>SINGLE PANA RATE</th>
								    <th><span id="single_pana_rate"></span></th>
                	    </TR>
                	    <TR>
								    <th>SINGLE PANA WIN AMOUNT</th>
								    <th><span id="single_pana_win_amount"></span></th>
                	    </TR>
                	 
                	     <TR>
								    <th>DOUBLE PANA AMOUNT</th>
								    <th><span id="double_pana_amount"></span></th>
                	    </TR>
                	     <TR>
								    <th>DOUBLE PANA RATE</th>
								    <th><span id="double_pana_rate"></span></th>
                	    </TR>
                	    <TR>
								    <th>DOUBLE PANA WIN AMOUNT</th>
								    <th><span id="double_pana_win_amount"></span></th>
                	    </TR>
                	    
                	      <TR>
								    <th>TRIPPLE PANA AMOUNT</th>
								    <th><span id="triple_pana_amount"></span></th>
                	    </TR>
                	     <TR>
								    <th>TRIPPLE PANA RATE</th>
								    <th><span id="triple_pana_rate"></span></th>
                	    </TR>
                	    <TR>
								    <th>TRIPPLE PANA WIN AMOUNT</th>
								    <th><span id="triple_pana_win_amount"></span></th>
                	    </TR>
                	    
                	    <TR>
								    <th>JODI NUMBER</th>
								    <th><span id="jodi_number"></span></th>
                	    </TR>
                	      <TR>
								    <th>JODI TOTAL AMOUNT</th>
								    <th><span id="jodi_total_amount"></span></th>
                	    </TR>
                	     <TR>
								    <th>JODI PLAYED AMOUNT</th>
								    <th><span id="jodi_amount"></span></th>
                	    </TR>
                	      <TR>
								    <th>JODI RATE</th>
								    <th><span id="jodi_rate"></span></th>
                	    </TR>
                	    <TR>
								    <th>JODI WIN AMOUNT</th>
								    <th><span id="jodi_win_amount"></span></th>
                	    </TR>
                	    <TR>
								    <th>BEFORE PARTNERSHIP</th>
								    <th><span id="before_patnership"></span></th>
                	    </TR>
                	    <TR>
								    <th>PARTNERSHIP</th>
								    <th><span id="patnership"></span></th>
                	    </TR>
                	    <TR>
								    <th>AFTER PARTNERSHIP</th>
								    <th><span id="after_patnership"></span></th>
                	    </TR>
                	    <TR>
								    <th>NET TO PAY</th>
								    <th><span id="nettopay"></span></th>
                	    
						</TR>
                	</TBODY>
                	

                </TABLE>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                
              </div>
          </div>
        </div>
      </div>
 
  <script>
 $('.TicketData').on('click', function(){

        var id = $(this).data('id');
        $('#deleteWaiterModal').modal('show');
        $('[name="id_edit"]').val(id);
    });
 $('.CancleData').on('click', function(){
   
        var id = $(this).data('id');
        var ticket = $(this).data('ticket');
        var aakda_number = $(this).data('aakda_number');
        var total_aakda_amount = $(this).data('total_aakda_amount');
        
        var aakda_com = $(this).data('aakda_com');
        
        var aakda_total_com = $(this).data('aakda_total_com');
        
        var aakda_total_wamount = $(this).data('aakda_total_wamount');
        var aakda_rate = $(this).data('aakda_rate');
        var aakda_win_amount = $(this).data('aakda_win_amount');
        
        var pana_number = $(this).data('pana_number');
        
        var pana_total_amount = $(this).data('pana_total_amount');
        var pana_com = $(this).data('pana_com');
        var pana_total_com = $(this).data('pana_total_com');
        
        var single_pana_amount = $(this).data('single_pana_amount');
        var single_pana_rate = $(this).data('single_pana_rate');
        var single_pana_win_amount = $(this).data('single_pana_win_amount');
        
        var double_pana_amount = $(this).data('double_pana_amount');
        var double_pana_rate = $(this).data('double_pana_rate');
        var double_pana_win_amount = $(this).data('double_pana_win_amount');
        
        var triple_pana_amount = $(this).data('triple_pana_amount');
        var triple_pana_rate = $(this).data('triple_pana_rate');
        var triple_pana_win_amount = $(this).data('triple_pana_win_amount');
        
        var jodi_number = $(this).data('jodi_number');
        var jodi_total_amount = $(this).data('jodi_total_amount');
        
        var jodi_amount = $(this).data('jodi_amount');
        var jodi_rate = $(this).data('jodi_rate');
        var jodi_win_amount = $(this).data('jodi_win_amount');
        
        var total_com = $(this).data('total_com');
        var total_win = $(this).data('total_win');
        
        var before_patnership = $(this).data('before_patnership');
        var patnership = $(this).data('patnership');
        var after_patnership = $(this).data('after_patnership');
        var nettopay = $(this).data('nettopay');
        
        $('#cancleWaiterModal').modal('show');
        $('[name="id_edit"]').val(id);
         $('#ticket').html(ticket);
        $('#aakda_number').html(aakda_number);
        $('#total_aakda_amount').html(total_aakda_amount);
        
        $('#aakda_total_wamount').html(aakda_total_wamount);
        $('#aakda_rate').html(aakda_rate);
        
        $('#aakda_win_amount').html(aakda_win_amount);
        
        $('#pana_number').html(pana_number);
        
        $('#pana_total_amount').html(pana_total_amount);
        
        $('#pana_com').html(pana_com);
        $('#pana_total_com').html(pana_total_com);
        
        $('#single_pana_amount').html(single_pana_amount);
        $('#single_pana_rate').html(single_pana_rate);
        $('#single_pana_win_amount').html(single_pana_win_amount);
        
         $('#double_pana_amount').html(double_pana_amount);
        $('#double_pana_rate').html(double_pana_rate);
        $('#double_pana_win_amount').html(double_pana_win_amount);
        
         $('#triple_pana_amount').html(triple_pana_amount);
        $('#triple_pana_rate').html(triple_pana_rate);
        $('#triple_pana_win_amount').html(triple_pana_win_amount);
        
         $('#jodi_number').html(jodi_number);
        $('#jodi_total_amount').html(jodi_total_amount);
        $('#jodi_amount').html(jodi_amount);
        $('#jodi_rate').html(jodi_rate);
        $('#jodi_win_amount').html(jodi_win_amount);
        
        $('#total_com').html(total_com);
        $('#total_win').html(total_win);
        
        $('#before_patnership').html(before_patnership);
        $('#patnership').html(patnership);
        $('#after_patnership').html(after_patnership);
        $('#nettopay').html(nettopay);
        
    });
</script>