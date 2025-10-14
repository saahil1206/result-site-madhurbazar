<?php include('header.php');?>
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
			<style>
  body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
  #section1 {padding-top:100px;height:auto;color: #fff; }
  #section2 {padding-top:100px;height:auto;color:#fff;}
  #section3 {padding-top:100px;height:auto;color:#fff;  }
  #section4 {padding-top:100px;height:auto;color:#fff;}
  #section5 {padding-top:100px;height:auto;color:#fff;}
   #section6 {padding-top:100px;height:auto;color:#fff;}
  #section7 {padding-top:100px;height:auto;color:#fff;}
  #section8 {padding-top:100px;height:auto;color:#fff; }
  #section9 {padding-top:100px;height:auto;color: #fff; }
  #section10 {padding-top:100px;heigh:auto;color: #fff;}
  body {
  font-family: 'Open Sans', sans-serif;
  font-weight:300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color:white;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.green { color: #27AE60  ; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1.4em;
  text-align: left;
  color:#FDFEFE;
}

.container td {
	  font-weight: normal;
	  font-size:1.4em;
	  color:#E74C3C;
	  font-family:"Monospace";
	  font-style:italic bold;
	 
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	   padding-right: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #FDFEFE;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #FDFEFE;
}

.container th {
	  background-color: #8E44AD;
	  font-color:#fff;
}
..container td {
	  background-color: #8E44AD;
	  font-color:#fff;
} th {
	  background-color: #8E44AD;
	  font-color:#fff;
}
.container td:first-child { color:#17202A; }

.container td:last-child { color:#17202A; }
/*.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color:red;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
 transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}
*/
@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
tr{

}
.bord email-address:before {
   content: "Email address: ";
}

td { border: 1px solid green; width: 200px; text-align: center; margin:0; padding:0 }
 
	 
  </style>

<div id="section1" class="container-fluid" style="margin-top:-40px;"> 
 <?php


 ?>
 <h1> <span class="white"><FONT COLOR="white"><?php  echo str_ireplace('%20',' ',$bazar);?></FONT></span></h1>
<div class="bord">


<table class="container">

	<thead>
	<th><div style='width: 70px;'>DATE</div></th>
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
	
		$value="MON";
	
	else if($date1==2)
		$value="TUE";
	else if($date1==3)
		$value="WED";
	else if($date1==4)
		$value="THU";
	else if($date1==5)
		$value="FRI";
	else if($date1==6)
		$value="SAT";
	?>
			
			<th><div style='width:70px;color:white;'><font size="2"><?php echo $value;?></font></div></th>
			
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
 $num1=date("y-m-d", strtotime("2021-01-01"));
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
        <td><div style='width:100px;color:white;'><?php echo date("d-m-Y", strtotime($num2));?> <BR><BR>TO<BR></BR><?php echo  date("d-m-Y", strtotime($num3));?></DIV></td>
   
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
 

        
		<td>
		<table>
	
		<tr>
	
		<td><?php if(!array_key_exists('4', $val2) or $val2[4]=='') echo '*'; else echo $val2[4];
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
<?php include('footer.php');?>