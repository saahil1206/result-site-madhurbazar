<?php

if($_SESSION['access_level']==1   ){


?>
<!-- *************
************ Main container start *************
************* -->

	<!-- Page header end -->
	<!-- Content wrapper start -->
	<style type="text/css">
	
    .center {
      
      margin: 0 auto;
      
    }

    .awesome {
      
      font-family: futura;
      font-style: ;
      
      width:100%;
      
      margin: 0 auto;
      text-align: center;
      
      color:#313131;
      font-size:35px;
      font-weight: bold;
     
      -webkit-animation:colorchange 20s infinite alternate;
      
      
    }

    @-webkit-keyframes colorchange {
      0% {
        
        color: blue;
      }
      
      10% {
        
        color: white;
      }
      
      20% {
        
        color: black;
      }
      
      30% {
        
        color: #d35400;
      }
      
      40% {
        
        color: blue;
      }
      
      50% {
        
        color: #34495e;
      }
      
      60% {
        
        color: blue;
      }
      
      70% {
        
        color: #2980b9;
      }
      80% {
     
        color: #f1c40f;
      }
      
      90% {
     
        color: #2980b9;
      }
      
      100% {
        
        color: pink;
      }
    }
	.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
</style>


				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12">
							<div class="card plain">
								<div class="card-body">
									<!-- Row start -->
									<div class="row gutters">
									<?php
									$i=1;
									$gameResult='';
									$resultopenData='';
									$resultcloseData='';
									$bazarid='';
									foreach ($b->result() as $row)
                                       {
                                        $bazarAvalability=bazarCheker($row->id);
                                        if($bazarAvalability){
										date_default_timezone_set("Asia/Kolkata");

									$orgDate=date("Y-m-d").' '.$row->open_time;
									$orgd=strtotime($orgDate);

									$currenttime=time();
									$currenttime=date('Y-m-d H:i:s', $currenttime);
									$currenttime=strtotime($currenttime);
									$orgtDate=date("Y-m-d").' '.$row->close_time;
									$orgdc=strtotime($orgtDate);
									
									
if($orgd>$currenttime ){
	$timer=date("Y-m-d").' '.$row->open_time;
	
	$openbazar='open';
	$bazarstatus=true;
	
}else if($orgdc>$currenttime){
	
	$timer=date("Y-m-d").' '.$row->close_time;
	$openbazar='close';
	$bazarstatus=true;
}else{
	$bazarstatus=false;
	$openbazar='closed';
}
$bazarid=$row->id;
//echo $bazarid;
//$currenttime=time();
$resultopenData='';
$resultcloseData='';
$gameResult='';
$openpanaResult='';
$openAAkdaResult='';
$closepanaResult='';
$closeAAkdaResult='';
									$currentDate=date('Y-m-d', $currenttime);
$resultopenData=getResult($bazarid,'open',$currentDate);
  foreach($resultopenData->result() as $rowdata){
	  $openpanaResult=$rowdata->result_pana;
	  $openAAkdaResult=$rowdata->result_AAkda;
  }

  $resultcloseData=getResult($bazarid,'close',$currentDate);
  foreach($resultcloseData->result() as $rowdata2){
	  $closepanaResult=$rowdata2->result_pana;
	  $closeAAkdaResult=$rowdata2->result_AAkda;
  }  

  if(empty($openpanaResult) and empty($closepanaResult)){
      $gameResult='XXX-XX-XXX';
 
  }else if(!empty($openpanaResult) and empty($closepanaResult)){
	$gameResult=$openpanaResult.' - '.$openAAkdaResult.' X - XXX';
  }else if(empty($openpanaResult) and !empty($closepanaResult)){
    $gameResult='XXX-X '.$closeAAkdaResult.' - '.$closepanaResult;
  }else if(!empty($openpanaResult) and !empty($closepanaResult)){
    $gameResult=$openpanaResult.'-'.$openAAkdaResult.$closeAAkdaResult.'-'.$closepanaResult;
  }
                                    ?>

										<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
										<a  class="hospital-list" style="background-color: #b79414;text-align: center;border: 2px solid #342e36;">
												
												<div class="hospital-details">
													<div class="hospital-location">
													 <span style="color:#4a3723;font-size: 20px;text-align:left;" class="awesome"><?php echo $row->bazar_name ?></span>&nbsp;&nbsp;&nbsp;
													
													 <span style="color:#4a3723;font-size: 18px;text-align:right;" class="awesome" id="demo<?php echo $i; ?>" ></span>
													</div>
													<br>
														 <div class="hospital-location"style="margin-bottom:12px;">
	<h6 style="color:#342e36;font-size:17px;">ACTIVE : <?php echo getBazarActiveData2($bazarid,'open');  ?> <span style="color:white; font-size: 14px;"><?php  ?></span>&nbsp;|&nbsp;ACTIVE : <?php echo getBazarActiveData2($bazarid,'close'); ?><span style="color:white; font-size: 14px;"><?php  ?></span></h6>
													</div>
													
													<div class="hospital-location">
													<h6 style="color:#342e36;"> OPEN &nbsp;: &nbsp;<span style="color:white; font-size: 16px;"><?php echo date('h:i A ', strtotime($row->open_time)); ?></span> </h6>
													</div>
													<div class="hospital-location" style="margin-bottom:10px;">
													    <h6 style="color:#342e36;"> CLOSE : <span style="color:white; font-size: 16px;"><?php echo date('h:i A ', strtotime($row->close_time)); ?></span> </h6>
													   </div>
													
													
													<div class="hospital-location" style="margin-bottom:10px;">
														<h6 style="color:green;font-size:19px;"> <?php echo $gameResult;  ?></h6>
														
						                            </div>
     <?php

if($_SESSION['access_level']==4  or $_SESSION['access_level']==3){


?>                                              	
													 <form method="POST" action="<?php echo base_url();?>Agentmaster/game"> 
													
											
														<!-- Buttons -->
														<?php 
if($bazarstatus==true){
	?>
													   <input type="hidden" name="bazarid" value="<?php echo $bazarid; ?>">
													   
													   
													   <?php
if($openbazar=='open'){
														?>
														
														<button  class="btn btn-primary" name="open">Open</button> 
														<?php 

									   }
?>
	<?php 
if($openbazar =='open' or $openbazar=='close'){
														?>
														<button  class="btn btn-primary" name="close">Close</button>

														<?php
}
														?>
														
														<?php 
if($openbazar=='open'){
														?>
														<!-- <button  class="btn btn-primary" name="otc" >Open+close</button>  -->

														<?php
}
}else{
	echo'<span style="color:red; font-size:25px;"> Closed</span>';
}
														?>
                            </form>

<?php

}
?>
													

												</div>
												
											</a>
											
										</div>
										<?php
					$i++;
					unset($bazarid);
				}
			}
								?>			
												
											
										</div>
									<!-- Row end -->
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					

			

		
	</div>
	</div>

	<?php
									$j=1;
									foreach ($b->result() as $row3)
                                       {
										date_default_timezone_set("Asia/Kolkata");

									$orgDate=date("Y-m-d").' '.$row3->open_time;
									$orgd=strtotime($orgDate);

									$currenttime=time();
									$currenttime=date('Y-m-d H:i:s', $currenttime);
									$currenttime=strtotime($currenttime);
									$orgtDate=date("Y-m-d").' '.$row3->close_time;
									$orgdc=strtotime($orgtDate);
									
									
if($orgd>$currenttime ){
	$timer=date("Y-m-d").' '.$row3->open_time;
	
	$openbazar='active';
}else if($orgdc>$currenttime){
	
	$timer=date("Y-m-d").' '.$row3->close_time;
	$closebazar='active';
}else {
	$timer='expired';
}


                                    ?>
<script>
// Set the date we're counting down to
<?php
if ($timer != 'expired') {
    
?>
var countDownDate<?php echo $j; ?> = new Date("<?php echo $timer ?>").getTime();


    
// Update the count down every 1 second
var x<?php echo $j; ?> = setInterval(function() {

  // Get today's date and time
  var now<?php echo $j; ?> = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance<?php echo $j; ?> = countDownDate<?php echo $j; ?> - now<?php echo $j; ?>;
    
  // Time calculations for days, hours, minutes and seconds
  var days<?php echo $j; ?> = Math.floor(distance<?php echo $j; ?> / (1000 * 60 * 60 * 24));
  var hours<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60 * 60)) / (1000 * 60));
  var seconds<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo<?php echo $j; ?>").innerHTML =  hours<?php echo $j; ?> + "h "
  + minutes<?php echo $j; ?> + "m " + seconds<?php echo $j; ?> + "s ";
    
  // If the count down is over, write some text 
  if (distance<?php echo $j; ?> < 0) {
    clearInterval(x<?php echo $j; ?>);
    document.getElementById("demo<?php echo $j; ?>").innerHTML = "EXPIRED";
  }
}, 1000);

<?php
}else{

?>


<?php
}
?>
</script>
<?php
					$j++;
					
				}
				unset($timer);
								?>
	<!-- *************
		************ Main container end *************
	************* -->
<?php

}else if($_SESSION['access_level']==4 or $_SESSION['access_level']==3){
?>

<div class="content-wrapper">

<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			    
			    




			
					<div class="card-header" style="text-align:center;" >
						
						<a href="<?php echo base_url('Admin/mastergame');?>"class="badge badge-pill badge-info"style="font-size: 22px; font-weight: 900;color: white;height:40px;text-align:center;">
						    <i class="icon-import_contacts"></i>  &nbsp; OPERATOR</a>
					</div>
					</div>
					</div>
		
		<br>
		<br>
		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="table-container">
					<div class="card-header" >
						<div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;GAME REPORT</div>
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
									<th>CLIENT</th>
									<th>BAZAR</th>
									<th>CATEGORY</th>
									<th>AMOUNT</th>
									<th>PATNERSHIP (%)</th>
									<th>AFTER PATNERSHIP AMOUNT</th>
									<th>DETAILS</th>
									<th>ACTION</th>
								
									
								</tr>
							</thead>
							<tbody>
							<?php
							$testy=0;
							$custmeridPART=0;
		foreach ($ticket->result() as $row)
    {
      
      	if($_SESSION['access_level']==4){
    	    IF($row->customer_id==$_SESSION['userid']){
    	        $custmeridPART2=usercom($row->customer_id);
    	        $custmeridPART=100-$custmeridPART2;
    	    }ELSE{
    	        
    	        $custmeridPART=usercom($row->customer_id);
    	        $custmeridPART2=$custmeridPART;
    	    }
    	    
    	}
      	if($_SESSION['access_level']==3){
    		    
    		    
    		    
    		    
    	    IF($row->customer_id==$_SESSION['userid']){
    	        $custmeridPART2=usercom($row->customer_id);
    	        $custmeridPART=100-$custmeridPART2;
    	    }ELSE{
    	        
    	        $custmeridPART=$row->agentpercent;
    	        $custmeridPART2=$custmeridPART;
    	    }
    	    
    	}
    	
    		if($_SESSION['access_level']==1){
    		    
    		    
    		    
    		    
    	    IF($row->customer_id==$_SESSION['userid']){
    	        $custmeridPART2=usercom($row->customer_id);
    	        $custmeridPART=100-$custmeridPART2;
    	    }ELSE{
    	        
    	        $custmeridPART=$row->masterpercent;
    	        $custmeridPART2=$custmeridPART;
    	    }
    	    
    	}
		?>
								<tr>
								    <td><?php echo $row->date;  ?></td>
								    <td><?php echo $row->ticket_id;  ?></td>
									<td><?php echo getUserNameById($row->customer_id);  ?></td>
								    <td><?php echo getBazarNameById($row->game_id);  ?></td>
									<td><?php echo $row->game_type;  ?></td>
									
									<td><?php echo $row->purchase_amount;  ?></td>
									<td><?php echo $custmeridPART2;  ?></td>
									<td><?php 
								   
								    
									IF($custmeridPART>0){ echo $row->purchase_amount-($row->purchase_amount*$custmeridPART/100); }ELSE{ ECHO $row->purchase_amount; } ?></td>
									<td>
										<a data-toggle="modal" data-target="#myModal<?php echo $testy.$row->game_patti_type; ?>"> <button type="button" class="btn btn-success">VIEW</button></a>
									<td>
									  <?php  if($row->ticket_result_status ==0 ){ ?>    
									    <?php  if($row->ticket_status ==0 ){ ?>
<?php  if($row->customer_id == $_SESSION['userid'] ){ ?>  


									<a href="javascript:void(0);" class="CancleData"  data-id="<?php echo $row->id; ?>" 
									data-bazar="<?php echo $row->game_id; ?>" 
									data-bazar_cat="<?php echo $row->game_type; ?>" date-gametype="<?php echo  $row->game_patti_type; ?>"> <button type="button" class="btn btn-danger">REQUEST CANCEL</button></a>
<?php }else { ?>

	<a   data-id="<?php echo $row->id; ?>"
									data-bazar="<?php echo $row->game_id; ?>" data-bazar_cat="<?php echo $row->game_type; ?>"
									date-gametype="<?php echo  $row->game_patti_type; ?>"> <button type="button" class="btn btn-success">CONFIMED</button></a>
<?php
}
?>

<?php } else if($row->ticket_status ==2){ ?>

<button  class="btn btn-danger">Cancelled</button>

<?php }else if($row->ticket_status ==1){ ?>

<button  class="btn btn-warning">WAITING.. </button>

<?php } ?>
<?php }else { ?>
<button  class="btn btn-warning">RESULT OPEND.. </button>
<?php } ?>

								</td>
									
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
              <h5 class="modal-title" id="exampleModalLabel">Ticket Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
              	<?php
	if($_SESSION['access_level']==4){
    	    IF($row->customer_id==$_SESSION['userid']){
    	        $custmeridPART2=usercom($row->customer_id);
    	        $custmeridPART=100-$custmeridPART2;
    	    }ELSE{
    	        
    	        $custmeridPART=usercom($row->customer_id);
    	        $custmeridPART2=$custmeridPART;
    	    }
    	    
    	}
    	
    	
    	if($_SESSION['access_level']==3){
    		    
    		    
    		    
    		    
    	    IF($row->customer_id==$_SESSION['userid']){
    	        $custmeridPART2=usercom($row->customer_id);
    	        $custmeridPART=100-$custmeridPART2;
    	    }ELSE{
    	        
    	        $custmeridPART=$row->agentpercent;
    	        $custmeridPART2=$custmeridPART;
    	    }
    	    
    	}
if($row->game_patti_type=='AAKDA-001'){

              	?>
                <div class="table-responsive">
									<table id="basicExample" class="table m-0">
										<thead>
		<?php 
			$aakd_data=gameDataByBazar($row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART,$custmeridPART);
	
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
									<table id="basicExample" class="table m-0">
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
  <tr    align="center">
               <td align="center" class="fistcell"><div class="boxlabel">128</div>
         <div class="ticket_amount" id="sp_1_0"><font size="25px" color='black'><?php  echo ret('n128',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                             <td align="center" class=""><div class="boxlabel">129</div><div class="ticket_amount" id="sp_2_0"><font color='black'><?php  echo ret('n129',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font></div></td>
                                                                    <td align="center" class=""><div class="boxlabel">120</div>
                            <div class="ticket_amount" id="sp_3_0"><font color='black'><?php  echo ret('n120',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">130</div>
                            <div class="ticket_amount" id="sp_4_0"><font color='black'><?php  echo ret('n130',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">140</div>
                            <div class="ticket_amount" id="sp_5_0"><font color='black'><?php  echo ret('n140',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">123</div>
                            <div class="ticket_amount" id="sp_6_0"><font color='black'><?php  echo ret('n123',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">124</div>
                            <div class="ticket_amount" id="sp_7_0"><font color='black'><?php  echo ret('n124',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">125</div>
                            <div class="ticket_amount" id="sp_8_0"><font color='black'><?php  echo ret('n125',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">126</div>
                            <div class="ticket_amount" id="sp_9_0"><font color='black'><?php  echo ret('n126',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">127</div>
                            <div class="ticket_amount" id="sp_0_0"><font color='black'><?php  echo ret('n127',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
        </tr>
    <tr  height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">290</div>
                            <div class="ticket_amount" id="sp_1_1"><font color='black'><?php  echo ret('n290',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">246</div>
                            <div class="ticket_amount" id="sp_2_1"><font color='black'><?php  echo ret('n246',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">247</div>
                            <div class="ticket_amount" id="sp_3_1"><font color='black'><?php  echo ret('n247',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">248</div>
                            <div class="ticket_amount" id="sp_4_1"><font color='black'><?php  echo ret('n248',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">258</div>
                            <div class="ticket_amount" id="sp_5_1"><font color='black'><?php  echo ret('n258',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">259</div>
                            <div class="ticket_amount" id="sp_6_1"><font color='black'><?php  echo ret('n259',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">278</div>
                            <div class="ticket_amount" id="sp_7_1"><font color='black'><?php  echo ret('n278',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">279</div>
                            <div class="ticket_amount" id="sp_8_1"><font color='black'><?php  echo ret('n279',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">289</div>
                            <div class="ticket_amount" id="sp_9_1"><font color='black'><?php  echo ret('n289',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">235</div>
                            <div class="ticket_amount" id="sp_0_1"><font color='black'><?php  echo ret('n235',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">579</div>
                            <div class="ticket_amount" id="sp_1_2"><font color='black'><?php  echo ret('n579',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">589</div>
                            <div class="ticket_amount" id="sp_2_2"><font color='black'><?php  echo ret('n589',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">670</div>
                            <div class="ticket_amount" id="sp_3_2"><font color='black'><?php  echo ret('n670',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">680</div>
                            <div class="ticket_amount" id="sp_4_2"><font color='black'><?php  echo ret('n680',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">690</div>
                            <div class="ticket_amount" id="sp_5_2"><font color='black'><?php  echo ret('n690',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">457</div>
                            <div class="ticket_amount" id="sp_6_2"><font color='black'><?php  echo ret('n457',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">467</div>
                            <div class="ticket_amount" id="sp_7_2"><font color='black'><?php  echo ret('n467',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">468</div>
                            <div class="ticket_amount" id="sp_8_2"><font color='black'><?php  echo ret('n468',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">478</div>
                            <div class="ticket_amount" id="sp_9_2"><font color='black'><?php  echo ret('n478',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">569</div>
                            <div class="ticket_amount" id="sp_0_2"><font color='black'><?php  echo ret('n569',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr  height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">137</div>
                            <div class="ticket_amount" id="sp_1_3"><font color='black'><?php  echo ret('n137',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">138</div>
                            <div class="ticket_amount" id="sp_2_3"><font color='black'><?php  echo ret('n138',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">139</div>
                            <div class="ticket_amount" id="sp_3_3"><font color='black'><?php  echo ret('n139',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">149</div>
                            <div class="ticket_amount" id="sp_4_3"><font color='black'><?php  echo ret('n149',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">159</div>
                            <div class="ticket_amount" id="sp_5_3"><font color='black'><?php  echo ret('n159',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">150</div>
                            <div class="ticket_amount" id="sp_6_3"><font color='black'><?php  echo ret('n150',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">160</div>
                            <div class="ticket_amount" id="sp_7_3"><font color='black'><?php  echo ret('n160',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">134</div>
                            <div class="ticket_amount" id="sp_8_3"><font color='black'><?php  echo ret('n134',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">135</div>
                            <div class="ticket_amount" id="sp_9_3"><font color='black'><?php  echo ret('n135',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">136</div>
                            <div class="ticket_amount" id="sp_0_3"><font color='black'><?php  echo ret('n136',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">380</div>
                            <div class="ticket_amount" id="sp_1_4"><font color='black'><?php  echo ret('n380',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">345</div>
                            <div class="ticket_amount" id="sp_2_4"><font color='black'><?php  echo ret('n345',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">256</div>
                            <div class="ticket_amount" id="sp_3_4"><font color='black'><?php  echo ret('n256',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">257</div>
                            <div class="ticket_amount" id="sp_4_4"><font color='black'><?php  echo ret('n257',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">267</div>
                            <div class="ticket_amount" id="sp_5_4"><font color='black'><?php  echo ret('n267',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">268</div>
                            <div class="ticket_amount" id="sp_6_4"><font color='black'><?php  echo ret('n268',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">340</div>
                            <div class="ticket_amount" id="sp_7_4"><font color='black'><?php  echo ret('n340',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">350</div>
                            <div class="ticket_amount" id="sp_8_4"><font color='black'><?php  echo ret('n350',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">360</div>
                            <div class="ticket_amount" id="sp_9_4"><font color='black'><?php  echo ret('n360',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">370</div>
                            <div class="ticket_amount" id="sp_0_4"><font color='black'><?php  echo ret('n370',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr  height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">678</div>
                            <div class="ticket_amount" id="sp_1_5"><font color='black'><?php  echo ret('n678',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">679</div>
                            <div class="ticket_amount" id="sp_2_5"><font color='black'><?php  echo ret('n679',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">689</div>
                            <div class="ticket_amount" id="sp_3_5"><font color='black'><?php  echo ret('n689',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">789</div>
                            <div class="ticket_amount" id="sp_4_5"><font color='black'><?php  echo ret('n789',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">780</div>
                            <div class="ticket_amount" id="sp_5_5"><font color='black'><?php  echo ret('n780',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">790</div>
                            <div class="ticket_amount" id="sp_6_5"><font color='black'><?php  echo ret('n790',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">890</div>
                            <div class="ticket_amount" id="sp_7_5"><font color='black'><?php  echo ret('n890',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">567</div>
                            <div class="ticket_amount" id="sp_8_5"><font color='black'><?php  echo ret('n567',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">568</div>
                            <div class="ticket_amount" id="sp_9_5"><font color='black'><?php  echo ret('n568',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">578</div>
                            <div class="ticket_amount" id="sp_0_5"><font color='black'><?php  echo ret('n578',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">146</div>
                            <div class="ticket_amount" id="sp_1_6"><font color='black'><?php  echo ret('n146',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">147</div>
                            <div class="ticket_amount" id="sp_2_6"><font color='black'><?php  echo ret('n147',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">148</div>
                            <div class="ticket_amount" id="sp_3_6"><font color='black'><?php  echo ret('n148',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">158</div>
                            <div class="ticket_amount" id="sp_4_6"><font color='black'><?php  echo ret('n158',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">168</div>
                            <div class="ticket_amount" id="sp_5_6"><font color='black'><?php  echo ret('n168',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">169</div>
                            <div class="ticket_amount" id="sp_6_6"><font color='black'><?php  echo ret('n169',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">179</div>
                            <div class="ticket_amount" id="sp_7_6"><font color='black'><?php  echo ret('n179',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">170</div>
                            <div class="ticket_amount" id="sp_8_6"><font color='black'><?php  echo ret('n170',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">180</div>
                            <div class="ticket_amount" id="sp_9_6"><font color='black'><?php  echo ret('n180',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">145</div>
                            <div class="ticket_amount" id="sp_0_6"><font color='black'><?php  echo ret('n145',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">470</div>
                            <div class="ticket_amount" id="sp_1_7"><font color='black'><?php  echo ret('n470',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">390</div>
                            <div class="ticket_amount" id="sp_2_7"><font color='black'><?php  echo ret('n390',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">346</div>
                            <div class="ticket_amount" id="sp_3_7"><font color='black'><?php  echo ret('n346',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">347</div>
                            <div class="ticket_amount" id="sp_4_7"><font color='black'><?php  echo ret('n347',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">348</div>
                            <div class="ticket_amount" id="sp_5_7"><font color='black'><?php  echo ret('n348',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">349</div>
                            <div class="ticket_amount" id="sp_6_7"><font color='black'><?php  echo ret('n349',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">359</div>
                            <div class="ticket_amount" id="sp_7_7"><font color='black'><?php  echo ret('n359',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">369</div>
                            <div class="ticket_amount" id="sp_8_7"><font color='black'><?php  echo ret('n369',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">379</div>
                            <div class="ticket_amount" id="sp_9_7"><font color='black'><?php  echo ret('n379',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">389</div>
                            <div class="ticket_amount" id="sp_0_7"><font color='black'><?php  echo ret('n389',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">236</div>
                            <div class="ticket_amount" id="sp_1_8"><font color='black'><?php  echo ret('n236',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">156</div>
                            <div class="ticket_amount" id="sp_2_8"><font color='black'><?php  echo ret('n156',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">157</div>
                            <div class="ticket_amount" id="sp_3_8"><font color='black'><?php  echo ret('n157',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">167</div>
                            <div class="ticket_amount" id="sp_4_8"><font color='black'><?php  echo ret('n167',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">230</div>
                            <div class="ticket_amount" id="sp_5_8"><font color='black'><?php  echo ret('n230',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">178</div>
                            <div class="ticket_amount" id="sp_6_8"><font color='black'><?php  echo ret('n178',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">250</div>
                            <div class="ticket_amount" id="sp_7_8"><font color='black'><?php  echo ret('n250',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">189</div>
                            <div class="ticket_amount" id="sp_8_8"><font color='black'><?php  echo ret('n189',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">270</div>
                            <div class="ticket_amount" id="sp_9_8"><font color='black'><?php  echo ret('n270',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">190</div>
                            <div class="ticket_amount" id="sp_0_8"><font color='black'><?php  echo ret('n190',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                       
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">489</div>
                            <div class="ticket_amount" id="sp_1_9"><font color='black'><?php  echo ret('n489',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">480</div>
                            <div class="ticket_amount" id="sp_2_9"><font color='black'><?php  echo ret('n480',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">490</div>
                            <div class="ticket_amount" id="sp_3_9"><font color='black'><?php  echo ret('n490',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">356</div>
                            <div class="ticket_amount" id="sp_4_9"><font color='black'><?php  echo ret('n356',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">357</div>
                            <div class="ticket_amount" id="sp_5_9"><font color='black'><?php  echo ret('n357',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">358</div>
                            <div class="ticket_amount" id="sp_6_9"><font color='black'><?php  echo ret('n358',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">368</div>
                            <div class="ticket_amount" id="sp_7_9"><font color='black'><?php  echo ret('n368',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">378</div>
                            <div class="ticket_amount" id="sp_8_9"><font color='black'><?php  echo ret('n378',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">450</div>
                            <div class="ticket_amount" id="sp_9_9"><font color='black'><?php  echo ret('n450',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">460</div>
                            <div class="ticket_amount" id="sp_0_9"><font color='black'><?php  echo ret('n460',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">245</div>
                            <div class="ticket_amount" id="sp_1_10"><font color='black'><?php  echo ret('n245',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">237</div>
                            <div class="ticket_amount" id="sp_2_10"><font color='black'><?php  echo ret('n237',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">238</div>
                            <div class="ticket_amount" id="sp_3_10"><font color='black'><?php  echo ret('n238',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">239</div>
                            <div class="ticket_amount" id="sp_4_10"><font color='black'><?php  echo ret('n239',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">249</div>
                            <div class="ticket_amount" id="sp_5_10"><font color='black'><?php  echo ret('n249',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">240</div>
                            <div class="ticket_amount" id="sp_6_10"><font color='black'><?php  echo ret('n240',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">269</div>
                            <div class="ticket_amount" id="sp_7_10"><font color='black'><?php  echo ret('n269',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">260</div>
                            <div class="ticket_amount" id="sp_8_10"><font color='black'><?php  echo ret('n260',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">234</div>
                            <div class="ticket_amount" id="sp_9_10"><font color='black'><?php  echo ret('n234',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">280</div>
                            <div class="ticket_amount" id="sp_0_10"><font color='black'><?php  echo ret('n280',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
                                            <tr   height="45px">
                    <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                                                    <td align="center" class="fistcell"><div class="boxlabel">560</div>
                            <div class="ticket_amount" id="sp_1_11"><font color='black'><?php  echo ret('n560',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">570</div>
                            <div class="ticket_amount" id="sp_2_11"><font color='black'><?php  echo ret('n570',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">580</div>
                            <div class="ticket_amount" id="sp_3_11"><font color='black'><?php  echo ret('n580',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">590</div>
                            <div class="ticket_amount" id="sp_4_11"><font color='black'><?php  echo ret('n590',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART,$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">456</div>
                            <div class="ticket_amount" id="sp_5_11"><font color='black'><?php  echo ret('n456',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">367</div>
                            <div class="ticket_amount" id="sp_6_11"><font color='black'><?php  echo ret('n367',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">458</div>
                            <div class="ticket_amount" id="sp_7_11"><font color='black'><?php  echo ret('n458',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">459</div>
                            <div class="ticket_amount" id="sp_8_11"><font color='black'><?php  echo ret('n459',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">469</div>
                            <div class="ticket_amount" id="sp_9_11"><font color='black'><?php  echo ret('n469',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                                                    <td align="center" class=""><div class="boxlabel">479</div>
                            <div class="ticket_amount" id="sp_0_11"><font color='black'><?php  echo ret('n479',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div></td>
                                        
                </tr>
 <tr>
	  
	  <td colspan="10">
	 <font color='black'SIZE="18">TOTAL:<?php  echo ret('total',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font> 
	  </td>
	  
	  
	  </tr>
	</tbody>
</table>
</div>
<?php
}elseif ($row->game_patti_type=='DOUBLE-003') {
	?>
<div class="table-responsive">
									<table class="table m-0">
										<thead>
 <tr  align="center">
            <th >1</th>
            <th  >2</th>
            <th  >3</th>
            <th >4</th>
            <th >5</th>
            <th  >6</th>
            <th  >7</th>
            <th >8</th>
            <th  >9</th>
            <th  >0</th>

        </tr>
        </thead>
  <tr>
                <td align="center" class="fistcell"><div class="boxlabel">100</div>
                            <div id="dp_1_0" class="ticket_amount"><font color='black'><?php  echo ret2('n100',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font></div>
                </td>
                <td align="center" class=""><div class="boxlabel">200</div>
                            <div id="dp_2_0" class="ticket_amount"><font color='black'><?php  echo ret2('n200',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                 </td>
                <td align="center" class=""><div class="boxlabel">300</div>
                            <div id="dp_3_0" class="ticket_amount"><font color='black'><?php  echo ret2('n300',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font></div>
                 </td>
                <td align="center" class=""><div class="boxlabel">400</div>
                            <div id="dp_4_0" class="ticket_amount"><font color='black'><?php  echo ret2('n400',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">500</div>
                            <div id="dp_5_0" class="ticket_amount"><font color='black'><?php  echo ret2('n500',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">600</div>
                            <div id="dp_6_0" class="ticket_amount"><font color='black'><?php  echo ret2('n600',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">700</div>
                            <div id="dp_7_0" class="ticket_amount"><font color='black'><?php  echo ret2('n700',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">800</div>
                            <div id="dp_8_0" class="ticket_amount"><font color='black'><?php  echo ret2('n800',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">900</div>
                            <div id="dp_9_0" class="ticket_amount"><font color='black'><?php  echo ret2('n900',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">226</div>
                            <div id="dp_0_0" class="ticket_amount"><font color='black'><?php  echo ret2('n226',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">335</div>
                            <div id="dp_1_1" class="ticket_amount"><font color='black'><?php  echo ret2('n335',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">336</div>
                            <div id="dp_2_1" class="ticket_amount"><font color='black'><?php  echo ret2('n336',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">355</div>
                            <div id="dp_3_1" class="ticket_amount"><font color='black'><?php  echo ret2('n355',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">338</div>
                            <div id="dp_4_1" class="ticket_amount"><font color='black'><?php  echo ret2('n338',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">339</div>
                            <div id="dp_5_1" class="ticket_amount"><font color='black'><?php  echo ret2('n339',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">448</div>
                            <div id="dp_6_1" class="ticket_amount"><font color='black'><?php  echo ret2('n448',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">223</div>
                            <div id="dp_7_1" class="ticket_amount"><font color='black'><?php  echo ret2('n223',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">288</div>
                            <div id="dp_8_1" class="ticket_amount"><font color='black'><?php  echo ret2('n288',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">225</div>
                            <div id="dp_9_1" class="ticket_amount"><font color='black'><?php  echo ret2('n225',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">668</div>
                            <div id="dp_0_1" class="ticket_amount"><font color='black'><?php  echo ret2('n668',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                      
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">344</div>
                            <div id="dp_1_2" class="ticket_amount"><font color='black'><?php  echo ret2('n344',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">499</div>
                            <div id="dp_2_2" class="ticket_amount"><font color='black'><?php  echo ret2('n499',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">445</div>
                            <div id="dp_3_2" class="ticket_amount"><font color='black'><?php  echo ret2('n445',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">446</div>
                            <div id="dp_4_2" class="ticket_amount"><font color='black'><?php  echo ret2('n446',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">366</div>
                            <div id="dp_5_2" class="ticket_amount"><font color='black'><?php  echo ret2('n366',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">466</div>
                            <div id="dp_6_2" class="ticket_amount"><font color='black'><?php  echo ret2('n446',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">377</div>
                            <div id="dp_7_2" class="ticket_amount"><font color='black'><?php  echo ret2('n377',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">440</div>
                            <div id="dp_8_2" class="ticket_amount"><font color='black'><?php  echo ret2('n440',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">388</div>
                            <div id="dp_9_2" class="ticket_amount"><font color='black'><?php  echo ret2('n388',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">488</div>
                            <div id="dp_0_2" class="ticket_amount"><font color='black'><?php  echo ret2('n488',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">119</div>
                            <div id="dp_1_3" class="ticket_amount"><font color='black'><?php  echo ret2('n119',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">110</div>
                            <div id="dp_2_3" class="ticket_amount"><font color='black'><?php  echo ret2('n110',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">166</div>
                            <div id="dp_3_3" class="ticket_amount"><font color='black'><?php  echo ret2('n166',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">112</div>
                            <div id="dp_4_3" class="ticket_amount"><font color='black'><?php  echo ret2('n112',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">113</div>
                            <div id="dp_5_3" class="ticket_amount"><font color='black'><?php  echo ret2('n113',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">114</div>
                            <div id="dp_6_3" class="ticket_amount"><font color='black'><?php  echo ret2('n114',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">115</div>
                            <div id="dp_7_3" class="ticket_amount"><font color='black'><?php  echo ret2('n115',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">116</div>
                            <div id="dp_8_3" class="ticket_amount"><font color='black'><?php  echo ret2('n116',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">117</div>
                            <div id="dp_9_3" class="ticket_amount"><font color='black'><?php  echo ret2('n117',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">118</div>
                            <div id="dp_0_3" class="ticket_amount"><font color='black'><?php  echo ret2('n118',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                      
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">399</div>
                            <div id="dp_1_4" class="ticket_amount"><font color='black'><?php  echo ret2('n399',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">660</div>
                            <div id="dp_2_4" class="ticket_amount"><font color='black'><?php  echo ret2('n660',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">599</div>
                            <div id="dp_3_4" class="ticket_amount"><font color='black'><?php  echo ret2('n599',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">455</div>
                            <div id="dp_4_4" class="ticket_amount"><font color='black'><?php  echo ret2('n455',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">447</div>
                            <div id="dp_5_4" class="ticket_amount"><font color='black'><?php  echo ret2('n447',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">556</div>
                            <div id="dp_6_4" class="ticket_amount"><font color='black'><?php  echo ret2('n556',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">449</div>
                            <div id="dp_7_4" class="ticket_amount"><font color='black'><?php  echo ret2('n449',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">477</div>
                            <div id="dp_8_4" class="ticket_amount"><font color='black'><?php  echo ret2('n477',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">559</div>
                            <div id="dp_9_4" class="ticket_amount"><font color='black'><?php  echo ret2('n559',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">334</div>
                            <div id="dp_0_4" class="ticket_amount"><font color='black'><?php  echo ret2('n334',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">155</div>
                            <div id="dp_1_5" class="ticket_amount"><font color='black'><?php  echo ret2('n155',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">228</div>
                            <div id="dp_2_5" class="ticket_amount"><font color='black'><?php  echo ret2('n228',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">229</div>
                            <div id="dp_3_5" class="ticket_amount"><font color='black'><?php  echo ret2('n229',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">220</div>
                            <div id="dp_4_5" class="ticket_amount"><font color='black'><?php  echo ret2('n220',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">122</div>
                            <div id="dp_5_5" class="ticket_amount"><font color='black'><?php  echo ret2('n122',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">277</div>
                            <div id="dp_6_5" class="ticket_amount"><font color='black'><?php  echo ret2('n277',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">133</div>
                            <div id="dp_7_5" class="ticket_amount"><font color='black'><?php  echo ret2('n133',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">224</div>
                            <div id="dp_8_5" class="ticket_amount"><font color='black'><?php  echo ret2('n224',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">144</div>
                            <div id="dp_9_5" class="ticket_amount"><font color='black'><?php  echo ret2('n144',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">299</div>
                            <div id="dp_0_5" class="ticket_amount"><font color='black'><?php  echo ret2('n299',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                      
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">588</div>
                            <div id="dp_1_6" class="ticket_amount"><font color='black'><?php  echo ret2('n588',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">688</div>
                            <div id="dp_2_6" class="ticket_amount"><font color='black'><?php  echo ret2('n688',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">779</div>
                            <div id="dp_3_6" class="ticket_amount"><font color='black'><?php  echo ret2('n779',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">699</div>
                            <div id="dp_4_6" class="ticket_amount"><font color='black'><?php  echo ret2('n699',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">799</div>
                            <div id="dp_5_6" class="ticket_amount"><font color='black'><?php  echo ret2('n799',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">880</div>
                            <div id="dp_6_6" class="ticket_amount"><font color='black'><?php  echo ret2('n880',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">557</div>
                            <div id="dp_7_6" class="ticket_amount"><font color='black'><?php  echo ret2('n557',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">558</div>
                            <div id="dp_8_6" class="ticket_amount"><font color='black'><?php  echo ret2('n558',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">577</div>
                            <div id="dp_9_6" class="ticket_amount"><font color='black'><?php  echo ret2('n577',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">550</div>
                            <div id="dp_0_6" class="ticket_amount"><font color='black'><?php  echo ret2('n550',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                        
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">227</div>
                            <div id="dp_1_7" class="ticket_amount"><font color='black'><?php  echo ret2('n227',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">255</div>
                            <div id="dp_2_7" class="ticket_amount"><font color='black'><?php  echo ret2('n255',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">337</div>
                            <div id="dp_3_7" class="ticket_amount"><font color='black'><?php  echo ret2('n337',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">266</div>
                            <div id="dp_4_7" class="ticket_amount"><font color='black'><?php  echo ret2('n266',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">177</div>
                            <div id="dp_5_7" class="ticket_amount"><font color='black'><?php  echo ret2('n177',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">330</div>
                            <div id="dp_6_7" class="ticket_amount"><font color='black'><?php  echo ret2('n330',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">188</div>
                            <div id="dp_7_7" class="ticket_amount"><font color='black'><?php  echo ret2('n188',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">233</div>
                            <div id="dp_8_7" class="ticket_amount"><font color='black'><?php  echo ret2('n233',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">199</div>
                            <div id="dp_9_7" class="ticket_amount"><font color='black'><?php  echo ret2('n199',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">244</div>
                            <div id="dp_0_7" class="ticket_amount"><font color='black'><?php  echo ret2('n244',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                        
                </tr>
                                            <tr >
                                                                    <td align="center" class="fistcell"><div class="boxlabel">669</div>
                            <div id="dp_1_8" class="ticket_amount"><font color='black'><?php  echo ret2('n669',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">778</div>
                            <div id="dp_2_8" class="ticket_amount"><font color='black'><?php  echo ret2('n778',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">788</div>
                            <div id="dp_3_8" class="ticket_amount"><font color='black'><?php  echo ret2('n788',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">770</div>
                            <div id="dp_4_8" class="ticket_amount"><font color='black'><?php  echo ret2('n770',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">889</div>
                            <div id="dp_5_8" class="ticket_amount"><font color='black'><?php  echo ret2('n889',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">899</div>
                            <div id="dp_6_8" class="ticket_amount"><font color='black'><?php  echo ret2('n899',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">566</div>
                            <div id="dp_7_8" class="ticket_amount"><font color='black'><?php  echo ret2('n566',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">990</div>
                            <div id="dp_8_8" class="ticket_amount"><font color='black'><?php  echo ret2('n990',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">667</div>
                            <div id="dp_9_8" class="ticket_amount"><font color='black'><?php  echo ret2('n667',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                                                    <td align="center" class=""><div class="boxlabel">677</div>
                            <div id="dp_0_8" class="ticket_amount"><font color='black'><?php  echo ret2('n677',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font>
                                                            </div>
                        </td>
                                       
                </tr>
       <tr>
	  
	  <td colspan="10">
	 <font color='black'SIZE="18">TOTAL:<?php  echo ret2('total',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font> 
	  </td>
	  
	  
	  </tr>
   
    
        </tbody>
    </table>
    </div>


	<?php
	
}elseif ($row->game_patti_type=='JODI-004') {
	?>
  <div class="table-responsive">
									<table class="table m-0">
										<thead>
           
        
      
            <tr  align="center">
                 <th  >0</th>
               
            <th >1</th>
            <th  >2</th>
            <th  >3</th>
            <th >4</th>
            <th >5</th>
            <th  >6</th>
            <th  >7</th>
            <th >8</th>
            <th  >9</th>
        
               
            </tr>
            </thead>
            <style>
            .boxlabel{
            
            }
            #numvalue{
                color:black;
            }
            .numbersdata{
                text-align:center;
              
                font-size:24px;
               
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
                                   
                                    <td align="center" ><span class="boxlabel">00</span><br><span id="numvalue"><?php  echo ret3('n00',$row->ticket_id,
                                    $row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">01</span><br><span id="numvalue"><?php  echo ret3('n01',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">02</span><br><span id="numvalue"><?php  echo ret3('n02',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">03</span><br><span id="numvalue"><?php  echo ret3('n03',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">04</span><br><span id="numvalue"><?php  echo ret3('n04',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">05</span><br><span id="numvalue"><?php  echo ret3('n05',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">06</span><br><span id="numvalue"><?php  echo ret3('n06',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">07</span><br><span id="numvalue"><?php  echo ret3('n07',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">08</span><br><span id="numvalue"><?php  echo ret3('n08',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">09</span><br><span id="numvalue"><?php  echo ret3('n09',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                <!--    <td background="http://www.shrigoagems.com/images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:18px"><strong>3Star</strong></td> -->
                                     
                                 <td align="center" ><span class="boxlabel">10</span><br><span id="numvalue"><?php  echo ret3('n10',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">11</span><br><span id="numvalue"><?php  echo ret3('n11',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">12</span><br><span id="numvalue"><?php  echo ret3('n12',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">13</span><br><span id="numvalue"><?php  echo ret3('n13',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">14</span><br><span id="numvalue"><?php  echo ret3('n14',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">15</span><br><span id="numvalue"><?php  echo ret3('n15',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">16</span><br><span id="numvalue"><?php  echo ret3('n16',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">17</span><br><span id="numvalue"><?php  echo ret3('n17',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">18</span><br><span id="numvalue"><?php  echo ret3('n18',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">19</span><br><span id="numvalue"><?php  echo ret3('n19',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                             
            </tr>
                        <tr>
                            <td align="center" ><span class="boxlabel">20</span><br><span id="numvalue"><?php  echo ret3('n20',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">21</span><br><span id="numvalue"><?php  echo ret3('n21',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">22</span><br><span id="numvalue"><?php  echo ret3('n22',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">23</span><br><span id="numvalue"><?php  echo ret3('n23',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">24</span><br><span id="numvalue"><?php  echo ret3('n24',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">25</span><br><span id="numvalue"><?php  echo ret3('n25',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">26</span><br><span id="numvalue"><?php  echo ret3('n26',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">27</span><br><span id="numvalue"><?php  echo ret3('n27',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">28</span><br><span id="numvalue"><?php  echo ret3('n28',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">29</span><br><span id="numvalue"><?php  echo ret3('n29',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                             
            </tr>
                        <tr >
                                    <td align="center" ><span class="boxlabel">30</span><br><span id="numvalue"><?php  echo ret3('n30',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">31</span><br><span id="numvalue"><?php  echo ret3('n31',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">32</span><br><span id="numvalue"><?php  echo ret3('n32',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">33</span><br><span id="numvalue"><?php  echo ret3('n33',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">34</span><br><span id="numvalue"><?php  echo ret3('n34',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">35</span><br><span id="numvalue"><?php  echo ret3('n35',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">36</span><br><span id="numvalue"><?php  echo ret3('n36',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">37</span><br><span id="numvalue"><?php  echo ret3('n37',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">38</span><br><span id="numvalue"><?php  echo ret3('n38',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">39</span><br><span id="numvalue"><?php  echo ret3('n39',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                                          <td align="center" ><span class="boxlabel">40</span><br><span id="numvalue"><?php  echo ret3('n40',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">41</span><br><span id="numvalue"><?php  echo ret3('n41',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">42</span><br><span id="numvalue"><?php  echo ret3('n42',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">43</span><br><span id="numvalue"><?php  echo ret3('n43',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">44</span><br><span id="numvalue"><?php  echo ret3('n44',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">45</span><br><span id="numvalue"><?php  echo ret3('n45',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">46</span><br><span id="numvalue"><?php  echo ret3('n46',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">47</span><br><span id="numvalue"><?php  echo ret3('n47',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">48</span><br><span id="numvalue"><?php  echo ret3('n48',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">49</span><br><span id="numvalue"><?php  echo ret3('n49',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                               
            </tr>
                        <tr>
                                        <td align="center" ><span class="boxlabel">50</span><br><span id="numvalue"><?php  echo ret3('n50',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">51</span><br><span id="numvalue"><?php  echo ret3('n51',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">52</span><br><span id="numvalue"><?php  echo ret3('n52',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">53</span><br><span id="numvalue"><?php  echo ret3('n53',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">54</span><br><span id="numvalue"><?php  echo ret3('n54',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">55</span><br><span id="numvalue"><?php  echo ret3('n55',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">56</span><br><span id="numvalue"><?php  echo ret3('n56',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">57</span><br><span id="numvalue"><?php  echo ret3('n57',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">58</span><br><span id="numvalue"><?php  echo ret3('n58',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">59</span><br><span id="numvalue"><?php  echo ret3('n59',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                             
            </tr>
                        <tr >
                                       <td align="center" ><span class="boxlabel">60</span><br><span id="numvalue"><?php  echo ret3('n60',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">61</span><br><span id="numvalue"><?php  echo ret3('n61',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">62</span><br><span id="numvalue"><?php  echo ret3('n62',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">63</span><br><span id="numvalue"><?php  echo ret3('n63',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">64</span><br><span id="numvalue"><?php  echo ret3('n64',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">65</span><br><span id="numvalue"><?php  echo ret3('n65',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">66</span><br><span id="numvalue"><?php  echo ret3('n66',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">67</span><br><span id="numvalue"><?php  echo ret3('n67',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">68</span><br><span id="numvalue"><?php  echo ret3('n68',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">69</span><br><span id="numvalue"><?php  echo ret3('n69',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                                      <td align="center" ><span class="boxlabel">70</span><br><span id="numvalue"><?php  echo ret3('n70',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">71</span><br><span id="numvalue"><?php  echo ret3('n71',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">72</span><br><span id="numvalue"><?php  echo ret3('n72',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">73</span><br><span id="numvalue"><?php  echo ret3('n73',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">74</span><br><span id="numvalue"><?php  echo ret3('n74',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">75</span><br><span id="numvalue"><?php  echo ret3('n75',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">76</span><br><span id="numvalue"><?php  echo ret3('n76',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">77</span><br><span id="numvalue"><?php  echo ret3('n77',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">78</span><br><span id="numvalue"><?php  echo ret3('n78',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">79</span><br><span id="numvalue"><?php  echo ret3('n79',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                           
            </tr>
                        <tr >
                                     <td align="center" ><span class="boxlabel">80</span><br><span id="numvalue"><?php  echo ret3('n80',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">81</span><br><span id="numvalue"><?php  echo ret3('n81',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">82</span><br><span id="numvalue"><?php  echo ret3('n82',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">83</span><br><span id="numvalue"><?php  echo ret3('n83',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">84</span><br><span id="numvalue"><?php  echo ret3('n84',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">85</span><br><span id="numvalue"><?php  echo ret3('n85',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">86</span><br><span id="numvalue"><?php  echo ret3('n86',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">87</span><br><span id="numvalue"><?php  echo ret3('n87',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">88</span><br><span id="numvalue"><?php  echo ret3('n88',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">89</span><br><span id="numvalue"><?php  echo ret3('n89',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                              
            </tr>
                        <tr >
                                    <td align="center" ><span class="boxlabel">90</span><br><span id="numvalue"><?php  echo ret3('n90',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">91</span><br><span id="numvalue"><?php  echo ret3('n91',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">92</span><br><span id="numvalue"><?php  echo ret3('n92',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">93</span><br><span id="numvalue"><?php  echo ret3('n93',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">94</span><br><span id="numvalue"><?php  echo ret3('n94',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">95</span><br><span id="numvalue"><?php  echo ret3('n95',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">96</span><br><span id="numvalue"><?php  echo ret3('n96',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">97</span><br><span id="numvalue"><?php  echo ret3('n97',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">98</span><br><span id="numvalue"><?php  echo ret3('n98',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                    <td align="center" ><span class="boxlabel">99</span><br><span id="numvalue"><?php  echo ret3('n99',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></span></td>
                                
            </tr>
          <tr>
	  
	  <td colspan="10">
	 <font color='black'SIZE="18">TOTAL:<?php  echo ret3('total',$row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART); ?></font> 
	  </td>
	  
	  
	  </tr>
            </tbody>
            </table>
            </div>

	<?php
}elseif ($row->game_patti_type=='TRIPLE-004') {
  
	?>
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
			$triple_data=rettripledata($row->ticket_id,$row->game_patti_type,                             $row->customer_id,$custmeridPART);
			
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
	            ?></td>     </tr>
			
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

 

<form role="form" action="<?php echo base_url('GameReport/cancleTicket') ?>" method="post" id="deleteForm">
      <div class="modal fade" id="cancleWaiterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cancel Ticket </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <input type="hidden" name="id_edit" id="ticketid">
                 <input type="hidden" name="bazar" id="bazar">
                  <input type="hidden" name="bazar_cat" id="bazar_cat">
              </button>
            </div>
              <div class="modal-body">
                <span>Are  you sure U want to Cancel Ticket ?
<br>
                Note:Ticket only Cancelled if request is made within two minute of Purchase and Transaction is opened.
                </span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <input type="submit" name="cancleTicket"  value="Cancle-Ticket"class="btn btn-danger" >
                
              </div>
          </div>
        </div>
      </div>
  </form>
</td>
</tr>
</tbody>
</table>
</div>


  <script>
 $('.TicketData').on('click', function(){

        var id = $(this).data('id');
        $('#deleteWaiterModal').modal('show');
        $('[name="id_edit"]').val(id);
    });
 $('.CancleData').on('click', function(){

        var id = $(this).data('id');
         var bazar = $(this).data('bazar');
          var bazar_cat = $(this).data('bazar_cat');
        $('#cancleWaiterModal').modal('show');
        $('[name="id_edit"]').val(id);
         $('[name="bazar"]').val(bazar);
          $('[name="bazar_cat"]').val(bazar_cat);
    });
</script>


<br>
<br>
<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			    
			    




			
					<div class="card-header"  >
						
    <!-- Row start -->
    <div class="row gutters"  style="margin-top:-60px">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="table-container">
            
          <div class="card-header" >
            <div class="card-title"  style="color:#483622;font-size: 18px; font-weight: 900;"> <i class="icon-import_contacts"></i>  &nbsp;Sale Report</div>
             <div class="card-body">
      <form method="post" action="<?php echo base_url();?>Admin/index">
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
        
         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
                <input type="submit"  value="search" class="btn btn-warning btn-lg" name="searchdata" style="margin-top: 22px;margin-left: 15px;font-size: 15px;">
            </div>
          </div>
      </div>
              

          </form>
          </div>
          </div>
          <div class="table-container">
      <!--*************************
            *************************
            *************************
            Basic table start
          *************************
          *************************
          *************************-->
          <div class="table-responsive">
            <table id="fixedHeader" class="table">
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
                  <th><?php echo ($queryter->total_aakda_amount*$row->aakda_com)/100;  ?></th>
                  <th><?php echo $queryter->pana_total_amount;  ?></th>
                  <th><?php echo $row->pana_com;  ?></th>
                  <th><?php echo ($queryter->pana_total_amount*$row->pana_com)/100;  ?></th>
                  <th><?php echo $queryter->aakda_total_wamount;  ?></th>
                
                  <th><?php echo $row->aakdarate;  ?></th>
                  <th><?php echo $queryter->aakda_total_wamount*$row->aakdarate;  ?></th>
                  
                  <th><?php echo $queryter->single_pana_amount;  ?></th>
                    <th><?php echo $row->singlepanarate;  ?></th>
                  <th><?php echo $queryter->single_pana_amount*$row->singlepanarate;  ?></th>
                  
                  <th><?php echo $queryter->double_pana_amount;  ?></th>
                    <th><?php echo $row->doublepanarate;  ?></th>
                  <th><?php echo $queryter->double_pana_amount*$row->doublepanarate;  ?></th>
                  
                    <th><?php echo $queryter->triple_pana_amount;  ?></th>
                    <th><?php echo $row->triplepanarate;  ?></th>
                  <th><?php echo $queryter->triple_pana_amount*$row->triplepanarate;  ?></th>
                  <th><?php echo $queryter->jodi_total_amount;  ?></th>
                  <th><?php echo $queryter->jodi_amount;  ?></th>
                  <th><?php echo $row->jodirate;  ?></th>
                  <th><?php echo $queryter->jodi_amount*$row->jodirate;  ?></th>
  <th><?php echo $queryter->aakda_total_wamount*$row->aakdarate+$queryter->single_pana_amount*$row->singlepanarate+
  $queryter->double_pana_amount*$row->doublepanarate+$queryter->triple_pana_amount*$row->triplepanarate+$queryter->jodi_amount*$row->jodirate;  ?></th>
                    <th><?php echo (($queryter->pana_total_amount*$row->pana_com)/100)+(($queryter->total_aakda_amount*$row->aakda_com)/100);  ?></th>
                
                  <th>
    <?php $beforepatnership= ($queryter->aakda_total_wamount*$row->aakdarate+$queryter->single_pana_amount*$row->singlepanarate+$queryter->double_pana_amount*$row->doublepanarate+
  $queryter->triple_pana_amount*$row->triplepanarate+$queryter->jodi_amount*$row->jodirate)+
   (($queryter->pana_total_amount*$row->pana_com)/100+($queryter->total_aakda_amount*$row->aakda_com)/100);  echo $beforepatnership; ?></th>
                  <th><?php echo $row->partnership;  ?></th>
                  <th><?php
     $afterpatnership=$beforepatnership*($row->partnership)/100;   echo $beforepatnership-$afterpatnership;?></th>
                  <th><?php echo 
    $beforepatnership-$afterpatnership-
                  ($queryter->total_aakda_amount+$queryter->pana_total_amount+$queryter->jodi_total_amount);?></th>
                  
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


 <?php
                  }
               
                ?>


