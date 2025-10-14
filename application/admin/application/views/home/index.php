<style>
 @-webkit-keyframes blink { 50% { border-color: #03fc07; }  }
#bklinkwa{ 
	border: 4px solid  ;
	background-color: #ed557b;
	top: 10px ;
    left: 10px ;
	text-align:center ;
	font-family: monospace ;

	-webkit-animation: blink .5s step-end infinite alternate; 
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #f07c7c;
}
.slash-text {
    color: #000;
    line-height: 1.4;
    font-size: 14px;
    padding: 4px 10px;
    text-shadow: 1px 1px #f4e1e1;
}
.borderwa{
  	border: 4px solid  ;
	background-color: #ed557b;
	top: 10px ;
    left: 10px ;
	text-align:center ;
	font-family: monospace ;  
}
.cm-patti h4 {
    font-size: 24px;
    color: #ff0;
    text-shadow: 1px 1px 3px #000000;
}
.cm-patti h6 {
    font-size: 15px;
    color: #ff0;
    text-shadow: 1px 1px 3px #000000;
}
.cm-patti h1 {
    margin: 0;
    background-image: linear-gradient(45deg,#9c27b0,#e91e63,#9c27b0);
    color: #fff;
    padding-top: 2px;
    border-bottom: 1px solid #ffffff61;
    font-size: 22px;
}
.cm-patti .aa55 {
    border-right: 1px solid #e91e63;
}
.matka-result h4 {
    background-color: #1a237e!important;
    color: #fff;
    padding-top: 2px;
    padding-bottom: 4px;
    font-size: 30px;
}
</style>
<div class="container-fluid" id="bklinkwa" style="margin-top:40px;height:90px;color:white">
  <div class="row gold-res-area" >
  <div class="mrque-div">

<marquee><h2>!! Welcome Friends in the world of sattaa matka. May you always win. !!</h2></marquee>
</div>
  </div>
</div>


<div class="container-fluid">
      <div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 25px; font-weight: bold; font-size: 25px; color: yellow;" >WELCOME TO LARGEST MATKA GAMES</h2></div>
    
</div>
<div class="container-fluid">
      <div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 25px; font-weight: bold; font-size: 25px; color: yellow;" >
         Satta Matka madhur Kalyan rajdhani main  Matka Result</h2>
          
   
<h4 class="borderwa"> India's No.1 Matka Site  Heartly Welcome. Here You Will 
Get Perfect Guessing By Top Guesser And Fast Matka Result. Aaj Ka Satta Kalyan Fix
Single Jodi Free Update Here You Find Top Matka Market Of India Kalyan Main Milan Rajdhani* *kalyan Matka Tips *fast Matka Result
*kalyan Main Rajdhani Matka Chart *Matka Guessing By sattaa-matka By App Best Matka Site By sattaa-matka</h4>      
          </div>
    
</div>

<div class="container-fluid">
<div class="cm-patti">
<h1><center>Today Lucky Number</center></h1>
<table class="table table-bordered">
    <tr>
        <th><h6><b>AAKDA</b></h6></th>
        <th><h6><b>PANA</b></h6></th>
        <th><h6><b>JODI</b></h6></th>
        <th><h6><b>MOTOR</b></h6></th>
        
    </tr>
    <?php
    foreach($gussing ->result() as $row)
        {
    
    ?>
    <tr>
        <th><h6><b><?php echo $row->aakda; ?></b></h6></th>
        <th><h6><b><?php echo $row->pana; ?></b></h6></th>
        <th><h6><b><?php echo $row->jodi; ?></b></h6></th>
        <th><h6><b><?php echo $row->motor; ?></b></h6></th>
        
    </tr>
    <?php
    }
    ?>
    
</table>    

</div>
</div>
<div class="container-fluid">
<div class="matka-result">
<h4><center>☔LIVE RESULT☔</center></h4>

<div class="matka-card">
    <div class="container-fluid">
  <div class="row gold-res-area" >
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row gold-payment-type lazy" style="display: block; background-image: url('assets/front/images/b3.jpg');">
        <div>
          
          <div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 22px; color: yellow;" >!!! MATKA LIVE GAME RESULTS !!!</h2></div>
          <?php
      if($fetch_data ->num_rows() > 0)
      {
        foreach($fetch_data ->result() as $row)
        {
$bazarid=$row->id;
//echo $bazarid;
//$currenttime=time();
	date_default_timezone_set("Asia/Kolkata");

								

									$currenttime=time();
									$currenttime=date('Y-m-d H:i:s', $currenttime);
									$currenttime=strtotime($currenttime);
$resultopenData='';
$resultcloseData='';
$gameResult='';
$openpanaResult='';
$openAAkdaResult='';
$closepanaResult='';
$closeAAkdaResult='';
									$currentDate=date('Y-m-d', $currenttime);
$recent=getRecent($bazarid,'open',$currentDate);

  if($recent==1){
    $resultopenData=getResult($bazarid,'open',$currentDate);  
  foreach($resultopenData->result() as $rowdata){
	  $openpanaResult=$rowdata->result_pana;
	  $openAAkdaResult=$rowdata->result_AAkda;
	  $aftertimeopen=$rowdata->result_AAkda;
  }

  $resultcloseData=getResult($bazarid,'close',$currentDate);
  foreach($resultcloseData->result() as $rowdata2){
	  $closepanaResult=$rowdata2->result_pana;
	  $closeAAkdaResult=$rowdata2->result_AAkda;
	  $aftertimeclose=$rowdata->result_AAkda;
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
          <div class="g-sing-result" style="background-color: #fcec03;">
            </style>
            <h3 style="font-size:22px; font-weight: bold;"><?php echo $row->bazar_name; ?></h3>
            <ul>
              <li><span class="blinking"><?php echo $gameResult;   ?></span></li>
             
            </ul>
            <div class="g-rtime" style="font-size:17px; font-weight: bold;"><p>Open - <?php echo $row->open_time; ?><span>Close - <?php echo $row->close_time; ?></span></p></div>
          </div>
            <?php
        }
        
        }    
      }



      ?>
          
        </div>
      </div>
    </div>
    <div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 20px;" onclick="window.location.href=window.location.href">REFRESH</h2></div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">

<h2 class="slash-text" style="border-color: #aa00c0;">
<p class="borderwa">KALYAN MATKA | MATKA RESULT | KALYAN MATKA TIPS | SATTA MATKA | MATKA.COM |
MATKA PANA JODI TODAY | BATTA SATKA | MATKA PATTI JODI NUMBER | MATKA RESULTS | MATKA CHART | MATKA JODI | 
SATTA COM | FULL RATE GAME | MATKA GAME | MATKA WAPKA | ALL MATKA RESULT LIVE ONLINE | MATKA RESULT 
| KALYAN MATKA RESULT  | MAIN MATKA</p></h2>

</div>
<div class="container-fluid">
  <div class="row gold-res-area" >
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row gold-payment-type lazy" style="display: block; background-image: url('assets/front/images/b3.jpg');">
        <div>
          
          <div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 22px; color: yellow;" >!!! MATKA ALL GAME RESULTS !!!</h2></div>
          <?php
      if($fetch_data ->num_rows() > 0)
      {
        foreach($fetch_data ->result() as $row)
        {
$bazarid=$row->id;
//echo $bazarid;
//$currenttime=time();
	        



	date_default_timezone_set("Asia/Kolkata");

								

									$currenttime=time();
									$currenttime=date('Y-m-d H:i:s', $currenttime);
									$currenttime=strtotime($currenttime);
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
           	date_default_timezone_set("Asia/Kolkata");
			$currenttime=time();
			$currenttime=date('Y-m-d H:i:s', $currenttime);
			$currenttime=strtotime($currenttime);
           if(!empty($gameResult)){ 
			    				$orgDate = getresult_time($currentDate,$bazarid);
			    				$orgd=strtotime($orgDate);
			}else{
			    $orgd = 00000;
			    $currenttime = 99999;
			 }
			 
			 //echo $orgDate;
			 echo'<br>';
			// echo $currenttime;
          ?>
          <div class="g-sing-result" <?php  if(($orgd > $currenttime)){ ?>   
          style="background-color: #fcec03;"  <?php   }else {?>  style="background-color:#ffd9b3 ;"   <?php } ?>>
            </style>
            <h3 style="font-size:22px; font-weight: bold;"><?php echo $row->bazar_name; ?></h3>
            <ul>
              <li><span class="blinking"><?php echo $gameResult;   ?></span></li>
             
            </ul>
            <div class="g-rtime" style="font-size:17px; font-weight: bold;"><p>Open - <?php echo $row->open_time; ?><span>Close - <?php echo $row->close_time; ?></span></p></div>
          </div>
            <?php
        }
      }



      ?>
          
        </div>
      </div>
    </div>
    <div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 20px;" onclick="window.location.href=window.location.href">REFRESH</h2></div>
  </div>
</div>
</div>

<div class="container-fluid">
  
</div>



</div>
<div class="container-fluid">
<div class="row gold-cont" style="background-color:#342e36;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="gcon-area">
    <h2 style="color: yellow; font-weight: bold;">Sattaa-Matka</h2>
  <!--  <p>Call us to play online matka</p>
    <h3><i class="fa fa-phone" aria-hidden="true"></i> +91 9999999999
    </h3>  -->
    <hr>
  </div>
</div>
<p style="text-align: center;color: white; font-size: 15px; font-weight: bold;">For Any Queries Or Support contact us at <a href="" target="_top" style="color: yellow;  font-size: 17px; font-weight: bold;">
    support@sattaa-matka.com</a></p>
</div>
</div>
<div class="container-fluid">
<br>
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="row sing-chat-area">
    <div class="head" id="jc" ><h2 style="background-color:#342e36; font-size: 22px; color: yellow;">ALL MATKA JODI CHART RECORDS</h2></div>
    <ul>
          <?php
      if($fetch_data ->num_rows() > 0)
      {
        foreach($fetch_data ->result() as $row)
        {
            
            ?>
      <a href="<?php echo base_url();?>home/jodi_chart/<?php  echo $row->id;  ?>/<?php echo $row->bazar_name;?>"><li><p><?php echo $row->bazar_name; ?></p></li></a>
    <?php
    
        }
          
      }
    ?>
    </ul>
  </div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="row sing-chat-area">
    <div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 22px; color: yellow;">ALL MATKA PANEL CHART RECORDS</h2></div>
    <ul>
     
            <?php
      if($fetch_data ->num_rows() > 0)
      {
        foreach($fetch_data ->result() as $row)
        {
            
            ?>
      <a href="<?php echo base_url();?>home/panel_chart/<?php  echo $row->id;  ?>/<?php echo $row->bazar_name;?>"><li><p><?php echo $row->bazar_name; ?></p></li></a>
    <?php
    
        }
          
      }
    ?>
    </ul>
  </div>
</div>
</div>
</div>

<div class="container-fluid">

<div class="row gold-time-table" >
<div class="head" id="jc" ><h2 style="background-color:#342e36; font-size: 22px; color: yellow;">!! ALL MATKA GAMES TIME TABLE !!</h2></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="gcon-table">
    
    <table>
      <tr style="font-weight:bold;">
        <th style="background-color: #9b0000;">BAZAAR</th>
       
        <th style="background-color: #9b0000;">OPEN TIME</th>
       
        <th style="background-color: #9b0000;">CLOSE TIME</th>
       
      </tr>
      <?php
      if($fetch_data ->num_rows() > 0)
      {
        foreach($fetch_data ->result() as $row)
        {

          ?>
          <tr style="font-weight:bold;font-size:15px;">
            <td><?php echo $row->bazar_name; ?></td>
        
       
        <td><?php echo $row->open_block_time; ?></td>
       
        <td><?php echo $row->close_block_time; ?></td>
        <tr>
          <?php
        }
      }
    else
    {


      ?>
      <tr>
        <td colspan="3" >No Data Found</td>
        
      </tr>
      <?php 
    }
      ?>
    </table>
    
  </div>
</div>
</div>
</div>