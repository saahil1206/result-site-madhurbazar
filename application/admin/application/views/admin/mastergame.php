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