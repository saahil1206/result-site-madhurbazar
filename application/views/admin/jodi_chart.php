
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
	<div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 20px;" onclick="">GO TO BOTTOM</h2></div>
	<div class="row jodi-chat">
		<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
  </style>

<div id="section1" class="container-fluid" style="margin-top:-40px;"> 
 <?php


 ?>
 <br>
 <br>
 <h1 style="text-align:center;color:red;"> <span class="RED"><FONT COLOR="RED"><?php  echo str_ireplace('%20',' ',$bazar);?></FONT></span></h1>
<div class="bord">
<div class="table-responsive">

<table class="table m-0">

	<thead>
	<th style="background:#342e36;color:white;border:2px solid black;"><div style='width: 70px;'>DATE</div></th>
	<?php
	/*include'dbconnect.php';
	$query="select date,lotname from result where lotname='Madhur Day' order by date desc limit 1";
$result=mysql_query($query);
$query1=mysql_fetch_array($result);
$date1=$query1['date'];
*/
$bazarname=$id;
$date1=date('y-m-d H:i:s');
$date2=$date1;
$curdate=$date1;

$date1=strtotime($date1);
$date1=date('w',$date1);
if($date1==0)
{
		$date1=strtotime($date2);
	$date1=strtotime('+1 day',$date1);
	$date1=date('y-m-d',$date1);
}	
		else if($date1==1)
		{
		$date1=strtotime($date2);
	$date1=strtotime('+0 day',$date1);

	$date1=date('y-m-d',$date1);
		}
	else if($date1==2)
	{
	  $date1=strtotime($date2);
	$date1=strtotime('+6 day',$date1);
	
	$date1=date('y-m-d',$date1);
	}
	else if($date1==3)
	{
		$date1=strtotime($date2);
	$date1=strtotime('+5 day',$date1);
	
	$date1=date('y-m-d',$date1);
	}
	else if($date1==4)
	{
		$date1=strtotime($date2);
	$date1=strtotime('+4 day',$date1);
	$date1=date('y-m-d',$date1);
	}
	else if($date1==5)
	{
		$date1=strtotime($date2);
	$date1=strtotime('+3 day',$date1);

	$date1=date('y-m-d',$date1);
	}
	else if($date1==6)
	{
		$date1=strtotime($date2);
	$date1=strtotime('+2 day',$date1);
	$date1=date('y-m-d',$date1);
	}
$j=0;
$date2=$date1;
$date1=strtotime($date1);
$date1=date('w',$date1);
while($j<7)
{
	if($date1==0)
	
		$value="SUNDAY";
		
	else if($date1==1)
	
		$value="MONDAY";
	
	else if($date1==2)
		$value="TUESDAY";
	else if($date1==3)
		$value="WEDNESDAY";
	else if($date1==4)
		$value="THURSDAY";
	else if($date1==5)
		$value="FRIDAY";
	else if($date1==6)
		$value="SATURDAY";
	?>
			
			<th style="background:#342e36;color:white;border:2px solid black;"><div style='width:70px;'><font size="2"><?php echo $value;?></font></div></th>
			
	<?php
	$j++;
	$date1=strtotime($date2);
	$date1=strtotime('+1 day',$date1);
	$date2=date('y-m-d',$date1);
$date1=date('w',$date1);

}
?>
		</tr>
	</thead>
	<tbody>
    <?php
   $reqdata=resultdata1($bazarname);
$number=$reqdata->num_rows();
if($number>0)
{
//$row1=mysql_fetch_array($res1);


foreach ($reqdata->result() as $row1)
{
$num1=$row1->result_date;

}

/*$sql2="select date,lotname from result where lotname ='Madhur Day' order by date desc limit 1";
$res2=mysql_query($sql2);
$row2=mysql_fetch_array($res2);
$num2=$row2['date'];*/
 //$num1=date("y-m-d", strtotime($row1->date));
 //$num1=date("y-m-d", strtotime("-6 months", strtotime($row1->date)));
 $num1=date("y-m-d", strtotime("-2 months"));
 $limit=$num1;
 $limit=strtotime($limit);
	$limit=strtotime('-1 day',$limit);
	$limit=date('y-m-d',$limit);
  //$num2=date("y-m-d", strtotime($row2['date']));
  $num2=date('y-m-d H:i:s');
  $num3=$num2;
  $num2=strtotime($num2);
$num2=date('w',$num2);
  if($num2==0)
{
		$num2=strtotime($num3);
	$num2=strtotime('-6 day',$num2);
	$num2=date('y-m-d',$num2);
}	
		else if($num2==1)
		{
		$num2=strtotime($num3);
	$num2=strtotime('+0 day',$num2);

	$num2=date('y-m-d',$num2);
		}
	else if($num2==2)
	{
	  $num2=strtotime($num3);
	$num2=strtotime('-1 day',$num2);
	
	$num2=date('y-m-d',$num2);
	}
	else if($num2==3)
	{
		$num2=strtotime($num3);
	$num2=strtotime('-2 day',$num2);
	
	$num2=date('y-m-d',$num2);
	}
	else if($num2==4)
	{
		$num2=strtotime($num3);
	$num2=strtotime('-3 day',$num2);
	$num2=date('y-m-d',$num2);
	}
	else if($num2==5)
	{
		$num2=strtotime($num3);
	$num2=strtotime('-4 day',$num2);

	$num2=date('y-m-d',$num2);
	}
	else if($num2==6)
	{
		$num2=strtotime($num3);
	$num2=strtotime('-5 day',$num2);
	$num2=date('y-m-d',$num2);
	}
	$num3=strtotime($num2);
  $num3=strtotime('+6 day',$num3);
	$num3=date('y-m-d',$num3);
 $j=0;
    while($num1<=$num2 || $num2==$limit)
{
 $i=0;
$addeddays=7;



?>
      <tr >
        <td style="border:2px solid black;"><div style='width:120px;color:red;font-size:18px;font-weight:bold;'><?php echo date("d-m-Y", strtotime($num2));?> <BR>TO</BR><?php echo  date("d-m-Y", strtotime($num3));?></DIV></td>
   
<?php
//include'dbconnect.php';
$date=$num2;
$date1=strtotime($num2);
$date1=date('w',$date1);

while($i<7)
{

//$sql="select date,lotname,result from result where lotname='Dhanlaxmi Day' and date(date)='".$date."'";
//$res=mysql_query($sql);

$reqdata2=lotteryresult2($date,$bazarname);
//$row=mysql_fetch_array($res);

$val2=$reqdata2;

$val2=str_split($val2);

?>
 

        
		<td style="border:2px solid black;">
		<table>
	
		<tr>
	
		<td style="font-size:25px;font-weight:bold; "><?php if(!array_key_exists('4', $val2) or $val2[4]=='') echo '*'; else echo $val2[4];
	             if(!array_key_exists('5', $val2) or$val2[5]=='')echo '*'; else echo $val2[5];?></td>
	
		<tr>
	
		</table>
		
		</td>
		<?php
    $i++;
   $date=strtotime($date);
   $date=strtotime("+1 day",$date);
   $date=date('y-m-d',$date);
    }
   ?>
   <?php
   $j++;
    $num3=strtotime($num2);
   $num3=strtotime("-1 day",$num3);
   $num3=date('y-m-d',$num3);
   if($j>1)
   {
   $num2=strtotime($num3);
   $num2=strtotime("-6 day",$num2);
    $num2=date('y-m-d',$num2);
  }
  else
   {
   $num2=strtotime($num3);
   $num2=strtotime("-6 day",$num2);
    $num2=date('y-m-d',$num2);
    }
  }
}
  ?>
   
	
  </table>
  </div>
  </div>
			</div>
		</div>
	</div>
	<div class="head head2" id="pc" ><h2 style="background-color:#342e36; font-size: 20px;" onclick="">GO TO TOP</h2></div>
</div>
</div>
