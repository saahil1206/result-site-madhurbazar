


<?php  echo $id;
exit; include('header.php');?>
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
	 border: 1px solid green;
	
}
.bord email-address:before {
   content: "Email address: ";
}

td { border: 1px solid green; width: 200px; text-align: center; margin:0; padding:0 }
 
	 
  </style>

<div id="section1" class="container-fluid" style="margin-top:-40px;"> 
 <?php


 ?>
 <h1> <span class="RED"><FONT COLOR="RED"><?php  echo str_ireplace('%20',' ',$bazar);?></FONT></span></h1>
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
			
			<th><div style='width:70px;'><font size="2"><?php echo $value;?></font></div></th>
			
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
        <td><div style='width:120px;color:#F52BE0;'><?php echo date("d-m-Y", strtotime($num2));?> <BR><BR>TO<BR></BR><?php echo  date("d-m-Y", strtotime($num3));?></DIV></td>
   
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
		<td><?php if(!array_key_exists('0', $val2) or $val2[0]=='') echo '*'; else echo $val2[0];?></td>
		<td></td>
		<td><?php if(!array_key_exists('7', $val2) or $val2[7]=='') echo '*'; else echo $val2[7];?></td>
		<tr>
		<tr>
		<td><?php if(!array_key_exists('1', $val2) or $val2[1]=='') echo '*'; else echo $val2[1];?></td>
		<td><?php if(!array_key_exists('4', $val2) or $val2[4]=='') echo '*'; else echo $val2[4];
	             if(!array_key_exists('5', $val2) or$val2[5]=='')echo '*'; else echo $val2[5];?></td>
		<td><?php if(!array_key_exists('8', $val2) or $val2[8]=='') echo '*'; else echo $val2[8];?></td>
		<tr>
		<tr>
		<td><?php if(!array_key_exists('2', $val2) or $val2[2]=='') echo '*'; else echo $val2[2];?></td>
		<td></td>
		<td><?php if(!array_key_exists('9', $val2) or $val2[9]=='') echo '*'; else echo $val2[9];?></td>
		
    
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
  <?php
  if($id==35){
  ?>
 
<tbody>
<tr>
<td class="text-center">
<p>22-04-2019<br>
To
<br>
28-04-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-84">
2 <br>
8 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-84">84</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-84">
2<br>
4<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-12">
2 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-12">12</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-12">
4<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
1 <br>
2 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
2<br>
3<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-44">
2 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-44">44</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-44">
2<br>
3<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-35">
2 <br>
4 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-35">35</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-35">
7<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-64">
7 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-64">64</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-64">
4<br>
0<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-95">
1 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-95">95</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-95">
2<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>29-04-2019<br>
To
<br>
05-05-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-12">
1 <br>
2 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-12">12</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-12">
1<br>
4<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-50">
2 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-50">50</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-50">
5<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-63">
1 <br>
2 <br>
3 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-63">63</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-63">
6<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-38">
2 <br>
3 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-38">38</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-38">
1<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-47">
1 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-47">47</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-47">
2<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-99">
2 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-99">99</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-99">
5<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-65">
3 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-65">65</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-65">
2<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>06-05-2019<br>
To
<br>
12-05-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-39">
6 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-39">39</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-39">
4<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-15">
1 <br>
4 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-15">15</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-15">
3<br>
4<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-84">
4 <br>
5 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-84">84</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-84">
1<br>
3<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
2 <br>
3 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
4<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-04">
2 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-04">04</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-04">
4<br>
5<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-61">
2 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-61">61</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-61">
5<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-87">
2 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-87">87</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-87">
1<br>
6<br>
0<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>13-05-2019<br>
To
<br>
19-05-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-51">
2 <br>
5 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-51">51</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-51">
1<br>
2<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-36">
2 <br>
3 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-36">36</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-36">
4<br>
5<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-47">
1 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-47">47</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-47">
3<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
2 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
4<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-05">
2 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-05">05</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-05">
3<br>
4<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-28">
5 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-28">28</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-28">
1<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-93">
2 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-93">93</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-93">
6<br>
8<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>20-05-2019<br>
To
<br>
26-05-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
4 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
5<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-54">
4 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-54">54</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-54">
3<br>
4<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-29">
4 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-29">29</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-29">
1<br>
2<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-86">
2 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-86">86</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-86">
7<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-37">
6 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-37">37</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-37">
1<br>
2<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-91">
5 <br>
7 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-91">91</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-91">
5<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
1 <br>
1 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
2<br>
5<br>
0<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>27-05-2019<br>
To
<br>
02-06-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-37">
1 <br>
3 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-37">37</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-37">
4<br>
5<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-80">
3 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-80">80</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-80">
1<br>
3<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-43">
1 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-43">43</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-43">
5<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-60">
1 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-60">60</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-60">
4<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-44">
2 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-44">44</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-44">
1<br>
3<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-05">
5 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-05">05</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-05">
1<br>
4<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-88">
2 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-88">88</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-88">
5<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>03-06-2019<br>
To
<br>
09-06-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-20">
2 <br>
4 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-20">20</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-20">
4<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-84">
3 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-84">84</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-84">
4<br>
0<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-19">
2 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-19">19</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-19">
1<br>
2<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
6 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
2<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-66">
8 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-66">66</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-66">
7<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-15">
4 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-15">15</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-15">
3<br>
4<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-71">
2 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-71">71</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-71">
5<br>
8<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>10-06-2019<br>
To
<br>
16-06-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-55">
6 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-55">55</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-55">
1<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-91">
4 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-91">91</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-91">
2<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-40">
6 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-40">40</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-40">
3<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-00">
2 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-00">00</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-00">
5<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
3 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
6<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-80">
1 <br>
3 <br>
4 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-80">80</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-80">
4<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-88">
2 <br>
3 <br>
3 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-88">88</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-88">
5<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>17-06-2019<br>
To
<br>
23-06-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-76">
3 <br>
7 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-76">76</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-76">
3<br>
4<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-55">
2 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-55">55</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-55">
7<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-85">
3 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-85">85</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-85">
2<br>
4<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-27">
1 <br>
3 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-27">27</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-27">
8<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-12">
6 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-12">12</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-12">
1<br>
2<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-42">
2 <br>
3 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-42">42</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-42">
1<br>
5<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-32">
4 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-32">32</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-32">
2<br>
4<br>
6<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>24-06-2019<br>
To
<br>
30-06-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-89">
2 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-89">89</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-89">
1<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
1 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
3<br>
4<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-47">
1 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-47">47</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-47">
4<br>
6<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-63">
2 <br>
5 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-63">63</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-63">
5<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
1 <br>
3 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
1<br>
3<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-93">
3 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-93">93</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-93">
6<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-19">
2 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-19">19</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-19">
4<br>
7<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>01-07-2019<br>
To
<br>
07-07-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-25">
1 <br>
4 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-25">25</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-25">
4<br>
5<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-08">
5 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-08">08</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-08">
4<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-67">
2 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-67">67</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-67">
3<br>
4<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-44">
1 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-44">44</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-44">
6<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-35">
5 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-35">35</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-35">
3<br>
3<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-14">
1 <br>
3 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-14">14</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-14">
2<br>
5<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-79">
2 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-79">79</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-79">
4<br>
6<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>08-07-2019<br>
To
<br>
14-07-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-13">
5 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-13">13</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-13">
2<br>
3<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-61">
1 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-61">61</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-61">
3<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-13">
2 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-13">13</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-13">
2<br>
4<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
4 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
4<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-98">
4 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-98">98</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-98">
3<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
1 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
2<br>
5<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-98">
5 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-98">98</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-98">
3<br>
7<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>15-07-2019<br>
To
<br>
21-07-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-44">
4 <br>
0 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-44">44</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-44">
5<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-78">
2 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-78">78</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-78">
4<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-99">
2 <br>
3 <br>
4 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-99">99</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-99">
4<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-61">
4 <br>
6 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-61">61</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-61">
2<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-04">
4 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-04">04</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-04">
1<br>
6<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-98">
1 <br>
3 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-98">98</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-98">
4<br>
4<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-25">
2 <br>
5 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-25">25</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-25">
1<br>
1<br>
3<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>22-07-2019<br>
To
<br>
28-07-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-72">
8 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-72">72</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-72">
1<br>
1<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-18">
4 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-18">18</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-18">
1<br>
3<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-12">
5 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-12">12</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-12">
2<br>
3<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
4 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
3<br>
4<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-52">
6 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-52">52</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-52">
5<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-00">
1 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-00">00</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-00">
2<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-07">
4 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-07">07</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-07">
7<br>
0<br>
0<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>29-07-2019<br>
To
<br>
04-08-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-37">
6 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-37">37</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-37">
4<br>
6<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-57">
2 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-57">57</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-57">
1<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
4 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
2<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-98">
4 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-98">98</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-98">
1<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
2 <br>
3 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
6<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-24">
4 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-24">24</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-24">
1<br>
6<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-36">
4 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-36">36</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-36">
3<br>
4<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>05-08-2019<br>
To
<br>
11-08-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-37">
4 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-37">37</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-37">
7<br>
0<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-03">
5 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-03">03</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-03">
2<br>
3<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-18">
3 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-18">18</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-18">
3<br>
5<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-55">
3 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-55">55</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-55">
1<br>
4<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-78">
1 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-78">78</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-78">
1<br>
3<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-50">
2 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-50">50</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-50">
4<br>
8<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
3 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
1<br>
1<br>
0<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>12-08-2019<br>
To
<br>
18-08-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-97">
4 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-97">97</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-97">
8<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-27">
5 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-27">27</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-27">
9<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-26">
1 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-26">26</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-26">
1<br>
5<br>
0<br>
</p>
</td>
<td style="border-right:0;" class="text-centet"><p class="chart-**">*<br>*<br>*</p></td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-**">**</p>
</td>
<td style=" border-left:0;" class="text-centet"><p>*<br>*<br>*</p></td>
<td style="border-right:0" class="text-centet">
<p class="chart-67">
2 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-67">67</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-67">
1<br>
2<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-00">
2 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-00">00</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-00">
5<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-44">
5 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-44">44</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-44">
1<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>19-08-2019<br>
To
<br>
25-08-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-26">
3 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-26">26</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-26">
8<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-62">
4 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-62">62</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-62">
2<br>
4<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-12">
3 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-12">12</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-12">
4<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-16">
1 <br>
5 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-16">16</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-16">
1<br>
2<br>
3<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-88">
4 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-88">88</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-88">
8<br>
0<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-99">
2 <br>
3 <br>
4 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-99">99</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-99">
5<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-17">
1 <br>
2 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-17">17</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-17">
5<br>
5<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>26-08-2019<br>
To
<br>
01-09-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-28">
1 <br>
4 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-28">28</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-28">
4<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
2 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
1<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-96">
2 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-96">96</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-96">
3<br>
4<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-66">
1 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-66">66</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-66">
2<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-46">
7 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-46">46</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-46">
8<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-96">
3 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-96">96</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-96">
4<br>
4<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-40">
8 <br>
8 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-40">40</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-40">
5<br>
7<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>02-09-2019<br>
To
<br>
08-09-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-09">
2 <br>
9 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-09">09</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-09">
4<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0;" class="text-centet"><p class="chart-**">*<br>*<br>*</p></td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-**">**</p>
</td>
<td style=" border-left:0;" class="text-centet"><p>*<br>*<br>*</p></td>
<td style="border-right:0" class="text-centet">
<p class="chart-19">
6 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-19">19</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-19">
1<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-96">
4 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-96">96</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-96">
3<br>
5<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
3 <br>
5 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
4<br>
5<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-27">
1 <br>
3 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-27">27</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-27">
3<br>
4<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-88">
1 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-88">88</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-88">
4<br>
6<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>09-09-2019<br>
To
<br>
15-09-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
1 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
5<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-32">
1 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-32">32</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-32">
1<br>
2<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
1 <br>
4 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
4<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-55">
3 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-55">55</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-55">
7<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-85">
1 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-85">85</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-85">
2<br>
5<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-27">
3 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-27">27</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-27">
2<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-95">
4 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-95">95</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-95">
4<br>
5<br>
6<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>16-09-2019<br>
To
<br>
22-09-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
1 <br>
4 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
4<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
4 <br>
5 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
2<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-28">
5 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-28">28</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-28">
4<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-41">
3 <br>
3 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-41">41</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-41">
1<br>
1<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-14">
1 <br>
2 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-14">14</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-14">
5<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-65">
2 <br>
4 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-65">65</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-65">
4<br>
5<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-31">
4 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-31">31</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-31">
2<br>
3<br>
6<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>23-09-2019<br>
To
<br>
29-09-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-97">
2 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-97">97</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-97">
2<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-98">
2 <br>
3 <br>
4 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-98">98</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-98">
1<br>
3<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-37">
1 <br>
3 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-37">37</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-37">
3<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-42">
6 <br>
9 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-42">42</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-42">
5<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-01">
4 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-01">01</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-01">
1<br>
5<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-22">
6 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-22">22</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-22">
3<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-01">
5 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-01">01</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-01">
4<br>
8<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>30-09-2019<br>
To
<br>
06-10-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-90">
1 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-90">90</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-90">
1<br>
3<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-29">
2 <br>
2 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-29">29</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-29">
3<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-28">
4 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-28">28</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-28">
3<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-04">
5 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-04">04</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-04">
1<br>
5<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-46">
1 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-46">46</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-46">
3<br>
4<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-81">
1 <br>
3 <br>
4 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-81">81</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-81">
5<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-81">
6 <br>
6 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-81">81</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-81">
4<br>
8<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>07-10-2019<br>
To
<br>
13-10-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-52">
3 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-52">52</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-52">
4<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-54">
1 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-54">54</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-54">
3<br>
5<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-05">
1 <br>
3 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-05">05</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-05">
4<br>
5<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-76">
8 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-76">76</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-76">
3<br>
4<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-69">
1 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-69">69</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-69">
2<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-16">
2 <br>
2 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-16">16</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-16">
1<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-31">
1 <br>
4 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-31">31</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-31">
2<br>
4<br>
5<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>14-10-2019<br>
To
<br>
20-10-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
6 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
1<br>
2<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-60">
2 <br>
4 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-60">60</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-60">
4<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-22">
2 <br>
2 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-22">22</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-22">
3<br>
4<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-00">
3 <br>
3 <br>
4 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-00">00</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-00">
5<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-56">
3 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-56">56</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-56">
2<br>
4<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-96">
4 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-96">96</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-96">
2<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-06">
4 <br>
8 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-06">06</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-06">
3<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>21-10-2019<br>
To
<br>
27-10-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-58">
7 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-58">58</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-58">
3<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-13">
3 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-13">13</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-13">
1<br>
4<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
8 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
9<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-69">
4 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-69">69</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-69">
2<br>
3<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-21">
4 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-21">21</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-21">
3<br>
4<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-59">
3 <br>
4 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-59">59</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-59">
3<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0;" class="text-centet"><p class="chart-**">*<br>*<br>*</p></td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-**">**</p>
</td>
<td style=" border-left:0;" class="text-centet"><p>*<br>*<br>*</p></td>
</tr>
<tr>
<td class="text-center">
<p>28-10-2019<br>
To
<br>
03-11-2019</p>
</td>
<td style="border-right:0;" class="text-centet"><p class="chart-**">*<br>*<br>*</p></td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-**">**</p>
</td>
<td style=" border-left:0;" class="text-centet"><p>*<br>*<br>*</p></td>
<td style="border-right:0" class="text-centet">
<p class="chart-49">
2 <br>
6 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-49">49</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-49">
4<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-41">
6 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-41">41</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-41">
5<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-21">
7 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-21">21</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-21">
1<br>
4<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-66">
3 <br>
5 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-66">66</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-66">
8<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-57">
2 <br>
3 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-57">57</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-57">
2<br>
2<br>
3<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-15">
1 <br>
0 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-15">15</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-15">
3<br>
3<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>04-11-2019<br>
To
<br>
10-11-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-19">
3 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-19">19</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-19">
4<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-39">
1 <br>
3 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-39">39</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-39">
5<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-07">
1 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-07">07</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-07">
2<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-87">
5 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-87">87</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-87">
4<br>
6<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-68">
1 <br>
5 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-68">68</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-68">
4<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-20">
3 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-20">20</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-20">
1<br>
2<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-23">
1 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-23">23</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-23">
1<br>
4<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>11-11-2019<br>
To
<br>
17-11-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-89">
1 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-89">89</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-89">
2<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-64">
2 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-64">64</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-64">
7<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-94">
1 <br>
1 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-94">94</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-94">
3<br>
4<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-86">
5 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-86">86</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-86">
3<br>
4<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-62">
2 <br>
4 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-62">62</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-62">
6<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-34">
1 <br>
3 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-34">34</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-34">
1<br>
3<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-17">
2 <br>
3 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-17">17</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-17">
4<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>18-11-2019<br>
To
<br>
24-11-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-12">
6 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-12">12</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-12">
5<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-51">
3 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-51">51</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-51">
2<br>
4<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-69">
4 <br>
6 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-69">69</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-69">
4<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
4 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
3<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-40">
3 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-40">40</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-40">
3<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-19">
1 <br>
0 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-19">19</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-19">
2<br>
3<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-29">
2 <br>
3 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-29">29</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-29">
4<br>
6<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>25-11-2019<br>
To
<br>
01-12-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-19">
1 <br>
4 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-19">19</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-19">
1<br>
3<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-63">
1 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-63">63</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-63">
1<br>
2<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-88">
2 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-88">88</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-88">
1<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-08">
4 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-08">08</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-08">
1<br>
2<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-71">
4 <br>
5 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-71">71</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-71">
1<br>
2<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-23">
1 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-23">23</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-23">
4<br>
4<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-03">
5 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-03">03</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-03">
3<br>
4<br>
6<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>02-12-2019<br>
To
<br>
08-12-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-17">
2 <br>
4 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-17">17</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-17">
3<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-64">
4 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-64">64</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-64">
3<br>
5<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-39">
2 <br>
4 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-39">39</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-39">
4<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-22">
6 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-22">22</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-22">
1<br>
4<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-99">
9 <br>
0 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-99">99</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-99">
1<br>
4<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-72">
3 <br>
4 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-72">72</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-72">
3<br>
4<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-16">
3 <br>
9 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-16">16</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-16">
1<br>
5<br>
0<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>09-12-2019<br>
To
<br>
15-12-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-90">
1 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-90">90</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-90">
3<br>
3<br>
4<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-70">
1 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-70">70</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-70">
6<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-43">
1 <br>
1 <br>
2 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-43">43</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-43">
3<br>
5<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-79">
4 <br>
5 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-79">79</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-79">
3<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-60">
6 <br>
0 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-60">60</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-60">
1<br>
2<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-78">
1 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-78">78</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-78">
1<br>
1<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-11">
1 <br>
5 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-11">11</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-11">
3<br>
4<br>
4<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>16-12-2019<br>
To
<br>
22-12-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-22">
2 <br>
5 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-22">22</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-22">
3<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-65">
4 <br>
4 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-65">65</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-65">
2<br>
6<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-51">
7 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-51">51</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-51">
6<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-03">
4 <br>
8 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-03">03</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-03">
5<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
2 <br>
3 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
6<br>
7<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-37">
1 <br>
5 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-37">37</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-37">
5<br>
5<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-87">
1 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-87">87</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-87">
3<br>
4<br>
0<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>23-12-2019<br>
To
<br>
29-12-2019</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-13">
4 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-13">13</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-13">
1<br>
6<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-42">
7 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-42">42</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-42">
4<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-74">
8 <br>
9 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-74">74</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-74">
3<br>
3<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-17">
5 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-17">17</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-17">
1<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-75">
3 <br>
7 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-75">75</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-75">
1<br>
6<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-03">
3 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-03">03</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-03">
7<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-07">
2 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-07">07</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-07">
1<br>
7<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>30-12-2019<br>
To
<br>
05-01-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-47">
1 <br>
6 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-47">47</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-47">
3<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-47">
2 <br>
2 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-47">47</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-47">
7<br>
0<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-67">
2 <br>
4 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-67">67</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-67">
5<br>
6<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-00">
4 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-00">00</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-00">
5<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-74">
2 <br>
6 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-74">74</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-74">
2<br>
6<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-49">
1 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-49">49</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-49">
1<br>
9<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-08">
6 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-08">08</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-08">
1<br>
3<br>
4<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>06-01-2020<br>
To
<br>
12-01-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
1 <br>
5 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
4<br>
8<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-10">
4 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-10">10</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-10">
6<br>
7<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
3 <br>
4 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
2<br>
3<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-62">
3 <br>
4 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-62">62</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-62">
1<br>
2<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-41">
3 <br>
3 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-41">41</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-41">
1<br>
2<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-92">
1 <br>
2 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-92">92</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-92">
6<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-82">
5 <br>
5 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-82">82</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-82">
1<br>
3<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>13-01-2020<br>
To
<br>
19-01-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-39">
6 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-39">39</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-39">
3<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
9 <br>
9 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
3<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-07">
2 <br>
4 <br>
4 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-07">07</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-07">
8<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-86">
1 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-86">86</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-86">
3<br>
4<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-80">
4 <br>
4 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-80">80</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-80">
2<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-48">
1 <br>
1 <br>
2 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-48">48</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-48">
8<br>
0<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-47">
3 <br>
4 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-47">47</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-47">
4<br>
4<br>
9<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>20-01-2020<br>
To
<br>
26-01-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-64">
6 <br>
0 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-64">64</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-64">
2<br>
5<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-07">
4 <br>
8 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-07">07</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-07">
2<br>
2<br>
3<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-37">
6 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-37">37</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-37">
3<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-59">
4 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-59">59</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-59">
5<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-79">
2 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-79">79</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-79">
1<br>
2<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
6 <br>
7 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
7<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0;" class="text-centet"><p class="chart-**">*<br>*<br>*</p></td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-**">**</p>
</td>
<td style=" border-left:0;" class="text-centet"><p>*<br>*<br>*</p></td>
</tr>
<tr>
<td class="text-center">
<p>27-01-2020<br>
To
<br>
02-02-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-28">
1 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-28">28</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-28">
4<br>
5<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-42">
1 <br>
1 <br>
2 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-42">42</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-42">
4<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-02">
4 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-02">02</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-02">
2<br>
4<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-88">
2 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-88">88</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-88">
2<br>
8<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-66">
2 <br>
4 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-66">66</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-66">
4<br>
4<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-15">
1 <br>
3 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-15">15</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-15">
3<br>
6<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-99">
3 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-99">99</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-99">
6<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>03-02-2020<br>
To
<br>
09-02-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-30">
7 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-30">30</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-30">
5<br>
7<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-09">
4 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-09">09</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-09">
3<br>
6<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-96">
4 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-96">96</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-96">
6<br>
0<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-78">
1 <br>
1 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-78">78</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-78">
5<br>
6<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-58">
4 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-58">58</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-58">
4<br>
7<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-28">
5 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-28">28</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-28">
2<br>
7<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-38">
2 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-38">38</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-38">
3<br>
5<br>
0<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>10-02-2020<br>
To
<br>
16-02-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-57">
1 <br>
6 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-57">57</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-57">
2<br>
2<br>
3<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-21">
1 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-21">21</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-21">
5<br>
8<br>
8<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-14">
1 <br>
3 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-14">14</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-14">
2<br>
6<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-22">
7 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-22">22</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-22">
5<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-43">
3 <br>
4 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-43">43</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-43">
3<br>
3<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-94">
4 <br>
7 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-94">94</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-94">
6<br>
8<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-82">
1 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-82">82</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-82">
1<br>
3<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>17-02-2020<br>
To
<br>
23-02-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-63">
3 <br>
5 <br>
8 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-63">63</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-63">
4<br>
4<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-31">
5 <br>
8 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-31">31</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-31">
4<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-76">
1 <br>
3 <br>
3 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-76">76</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-76">
4<br>
6<br>
6<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-99">
3 <br>
6 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-99">99</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-99">
4<br>
6<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-71">
7 <br>
0 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-71">71</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-71">
2<br>
2<br>
7<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-32">
2 <br>
5 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-32">32</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-32">
5<br>
8<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-96">
2 <br>
7 <br>
0 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-96">96</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-96">
4<br>
4<br>
8<br>
</p>
</td>
</tr>
<tr>
<td class="text-center">
<p>24-02-2020<br>
To
<br>
01-03-2020</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-35">
6 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-35">35</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-35">
3<br>
3<br>
9<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-77">
1 <br>
1 <br>
5 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-77">77</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-77">
8<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-97">
1 <br>
2 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-97">97</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-97">
2<br>
5<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-62">
2 <br>
7 <br>
7 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-62">62</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-62">
3<br>
4<br>
5<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-11">
5 <br>
7 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-11">11</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-11">
4<br>
7<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-46">
7 <br>
8 <br>
9 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-46">46</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-46">
7<br>
9<br>
0<br>
</p>
</td>
<td style="border-right:0" class="text-centet">
<p class="chart-78">
5 <br>
6 <br>
6 <br>
</p>
</td>
<td style="border-left:0; border-right:0;" class="text-center">
<p class="chart-bold chart-78">78</p>
</td>
<td style=" border-left:0;" class="text-center">
<p class="chart-78">
5<br>
6<br>
7<br>
</p>
</td>
</tr>
<tr>
<td><p align="center">02/03/2020<br>to<br>08/03/2020</p></td>
<td style="border-right:0">
<p class="chart-69">6<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">20</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>2<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">06</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">32</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">20</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">08</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">13</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">28</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>6<br>6</p>
</td>
</tr> <tr>
<td><p align="center">09/03/2020<br>to<br>15/03/2020</p></td>
<td style="border-right:0">
<p class="chart-44">1<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">72</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69"><br><br></p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">**</p>
</td>
<td style="border-left:0">
<p class="chart-69"><br><br></p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">02</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">39</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">24</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">**</p>
</td>
<td style="border-left:0">
<p class="chart-69">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">69</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>0</p>
</td>
</tr> <tr>
<td><p align="center">16/03/2020<br>to<br>22/03/2020</p></td>
<td style="border-right:0">
<p class="chart-69">7<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">21</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">78</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">35</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">62</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">56</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">9<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">98</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
</tr><tr>
<td><p align="center">23/03/2020<br>to<br>17/05/2020</p></td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
</tr> <tr>
<td><p align="center">18/05/2020<br>to<br>24/05/2020</p></td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-69">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">6<br>7<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">38</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>5<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">78</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">05</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>1<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">95</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
</tr> <tr>
<td><p align="center">25/05/2020<br>to<br>31/05/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">60</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>8<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">35</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">14</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">65</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">07</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>7<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">39</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>6</p>
</td>
</tr> <tr>
<td><p align="center">01/06/2020<br>to<br>07/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">40</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">01</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">83</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">21</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">53</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">65</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>1<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>3<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">45</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>6</p>
</td>
</tr> <tr>
<td><p align="center">04/06/2020<br>to<br>14/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">32</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">57</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">71</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">86</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">47</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>7</p>
</td>
</tr> <tr>
<td><p align="center">15/06/2020<br>to<br>21/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">19</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">6<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">44</p>
</td>
<td style="border-left:0">
<p class="chart-44">2<br>6<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">62</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">56</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>4<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">72</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">40</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">52</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
</tr> <tr>
<td><p align="center">22/06/2020<br>to<br>28/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">57</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>4</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">82</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">32</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">90</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">59</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">63</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">03</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>8</p>
</td>
</tr> <tr>
<td><p align="center">29/06/2020<br>to<br>05/07/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">43</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>2</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">87</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">41</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">36</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">10</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">76</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>0</p>
</td>
</tr> <tr>
<td><p align="center">06/07/2020<br>to<br>12/07/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">42</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">6<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">99</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>8<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">08</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">45</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">43</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">20</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>1<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">5<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">61</p>
</td>
<td style="border-left:0">
<p class="chart-44">5<br>6<br>0</p>
</td>
</tr> <tr>
<td><p align="center">13/07/2020<br>to<br>19/07/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">42</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>3<br>4</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">99</p>
</td>
<td style="border-left:0">
<p class="chart-44">2<br>2<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">47</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">58</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">45</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">37</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
</tr> <tr>
<td><p align="center">16/03/2020<br>to<br>22/03/2020</p></td>
<td style="border-right:0">
<p class="chart-69">7<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">21</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">78</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">35</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">62</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">56</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">9<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">98</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
</tr>
<tr>
<td><p align="center">11/05/2020<br>to<br>17/05/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">37</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">64</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">52</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">34</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">63</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">14</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">98</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>9</p>
</td>
</tr> <tr>
<td><p align="center">18/05/2020<br>to<br>24/05/2020</p></td>
<td style="border-right:0">
<p class="chart-69">7<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">65</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">6<br>7<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">38</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>5<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">78</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">05</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>1<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">95</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">79</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>5</p>
</td>
</tr> <tr>
<td><p align="center">25/05/2020<br>to<br>31/05/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">60</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>8<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">35</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">14</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">65</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">07</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>7<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">39</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>6</p>
</td>
</tr> <tr>
<td><p align="center">01/06/2020<br>to<br>07/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">40</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">01</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">83</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">21</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">53</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">65</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>1<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>3<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">45</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>6</p>
</td>
</tr> <tr>
<td><p align="center">04/06/2020<br>to<br>14/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">32</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">57</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">71</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">86</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">47</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>7</p>
</td>
</tr> <tr>
<td><p align="center">15/06/2020<br>to<br>21/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">19</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">6<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">44</p>
</td>
<td style="border-left:0">
<p class="chart-44">2<br>6<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">62</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">56</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>4<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">72</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">40</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">52</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
</tr> <tr>
<td><p align="center">22/06/2020<br>to<br>28/06/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">57</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>4</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">82</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">32</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">90</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">59</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">63</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">03</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>8</p>
</td>
</tr> <tr>
<td><p align="center">29/06/2020<br>to<br>05/07/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">43</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>2</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">87</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">41</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">36</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">10</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">76</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>0</p>
</td>
</tr> <tr>
<td><p align="center">06/07/2020<br>to<br>12/07/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">42</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">6<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">99</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>8<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">08</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">45</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">43</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">20</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>1<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">5<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">61</p>
</td>
<td style="border-left:0">
<p class="chart-44">5<br>6<br>0</p>
</td>
</tr> <tr>
<td><p align="center">13/07/2020<br>to<br>19/07/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">42</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>3<br>4</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">99</p>
</td>
<td style="border-left:0">
<p class="chart-44">2<br>2<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">47</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">58</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">45</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">37</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
</tr>
<tr>
<td><p align="center">20/07/2020<br>to<br>26/07/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">23</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">82</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">64</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">91</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">03</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">14</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">51</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>8</p>
</td>
</tr> <tr>
<td><p align="center">27/07/2020<br>to<br>02/08/2020</p></td>
<td style="border-right:0">
<p class="chart-69">5<br>5<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">01</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">10</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">68</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>6<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">41</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>3<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">73</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">98</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">77</p>
</td>
<td style="border-left:0">
<p class="chart-44">2<br>6<br>9</p>
</td>
</tr> <tr>
<td><p align="center">03/08/2020<br>to<br>09/08/2020</p></td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">59</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">19</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">87</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">17</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>2<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">00</p>
</td>
<td style="border-left:0">
<p class="chart-44">4<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">36</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>3<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">60</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>2<br>6</p>
</td>
</tr> <tr>
<td><p align="center">10/08/2020<br>to<br>16/08/2020</p></td>
<td style="border-right:0">
<p class="chart-44">4<br>6<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">88</p>
</td>
<td style="border-left:0">
<p class="chart-44">2<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>3<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">68</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">74</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">70</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">64</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
</tr> <tr>
<td><p align="center">17/08/2020<br>to<br>23/08/2020</p></td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">02</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">57</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">31</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">69</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>2<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">11</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">21</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">69</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>9</p>
</td>
</tr> <tr>
<td><p align="center">24/08/2020<br>to<br>30/08/2020</p></td>
<td style="border-right:0">
<p class="chart-44">7<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">50</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">63</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">10</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">62</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>5<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">74</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">28</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>0<br>0</p>
</td>
</tr> <tr>
<td><p align="center">31/08/2020<br>to<br>06/09/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">28</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">03</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">18</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">34</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">15</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">13</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">59</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>6</p>
</td>
</tr> <tr>
<td><p align="center">07/09/2020<br>to<br>13/09/2020</p></td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">67</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">19</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">06</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">34</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">29</p>
</td>
<td style="border-left:0">
<p class="chart-69">9<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">28</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>0<br>0</p>
</td>
</tr> <tr>
<td><p align="center">14/09/2020<br>to<br>20/09/2020</p></td>
<td style="border-right:0">
<p class="chart-69">3<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">19</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">87</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">56</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>4<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">57</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-44">5<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">05</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">09</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>8<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>2<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">16</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>3</p>
</td>
</tr> <tr>
<td><p align="center">21/09/2020<br>to<br>27/09/2020</p></td>
<td style="border-right:0">
<p class="chart-44">2<br>8<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">88</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">46</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">03</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>0<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>4</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">87</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>8<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">81</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">66</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>1<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>4<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">66</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>6<br>9</p>
</td>
</tr> <tr>
<td><p align="center">28/09/2020<br>to<br>04/10/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">67</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">36</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">40</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">32</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">30</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">20</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">9<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">87</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>2<br>3</p>
</td>
</tr> <tr>
<td><p align="center">05/10/2020<br>to<br>11/10/2020</p></td>
<td style="border-right:0">
<p class="chart-69">5<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">85</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">67</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">30</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">8<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">51</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>4<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">53</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">31</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>3<br>5</p>
</td>
</tr> <tr>
<td><p align="center">12/10/2020<br>to<br>18/10/2020</p></td>
<td style="border-right:0">
<p class="chart-44">3<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">44</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>6<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">47</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">04</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">46</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">04</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">39</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">23</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>8<br>9</p>
</td>
</tr> <tr>
<td><p align="center">19/10/2020<br>to<br>25/10/2020</p></td>
<td style="border-right:0">
<p class="chart-69">8<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">70</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">29</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">98</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">45</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>3<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">16</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">63</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">95</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
</tr> <tr>
<td><p align="center">26/10/2020<br>to<br>01/11/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>2</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">48</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>2<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">96</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">13</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">48</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">48</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>3<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">26</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">8<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">75</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
</tr> <tr>
<td><p align="center">02/11/2020<br>to<br>08/11/2020</p></td>
<td style="border-right:0">
<p class="chart-44">5<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">72</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">9<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">81</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">19</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">46</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">09</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">8<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">75</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">49</p>
</td>
<td style="border-left:0">
<p class="chart-44">4<br>5<br>0</p>
</td>
</tr> <tr>
<td><p align="center">09/11/2020<br>to<br>15/11/2020</p></td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
</tr> <tr>
<td><p align="center">16/11/2020<br>to<br>22/11/2020</p></td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">30</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">46</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">56</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>3<br>0</p>
</td>
</tr> <tr>
<td><p align="center">23/11/2020<br>to<br>29/11/2020</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">59</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">09</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">79</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">20</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">80</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">89</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">89</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>9</p>
</td>
</tr> <tr>
<td><p align="center">30/11/2020<br>to<br>06/12/2020</p></td>
<td style="border-right:0">
<p class="chart-69">3<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">17</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">08</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>2<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">60</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">13</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>4<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">18</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>8<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">25</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>8<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">21</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>0<br>0</p>
</td>
</tr> <tr>
<td><p align="center">07/12/2020<br>to<br>13/12/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">13</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>4<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">54</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">78</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>7<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">8<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">65</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">7<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">58</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>7<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>8<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">04</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-44">4<br>5<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">88</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>5</p>
</td>
</tr> <tr>
<td><p align="center">14/12/2020<br>to<br>20/12/2020</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">02</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">82</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">95</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>9<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">12</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>1<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">81</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">86</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">01</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>8<br>8</p>
</td>
</tr> <tr>
<td><p align="center">21/12/2020<br>to<br>27/12/2020</p></td>
<td style="border-right:0">
<p class="chart-69">8<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">86</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">42</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">07</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">95</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">79</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">97</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">70</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>8<br>9</p>
</td>
</tr> <tr>
<td><p align="center">28/12/2020<br>to<br>03/01/2021</p></td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">92</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>2<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>5<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">49</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>2<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>4<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">36</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>8<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">98</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>3<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">48</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">3<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">83</p>
</td>
<td style="border-left:0">
<p class="chart-44">7<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">89</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>4</p>
</td>
</tr> <tr>
<td><p align="center">04/01/2021<br>to<br>10/01/2021</p></td>
<td style="border-right:0">
<p class="chart-69">1<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">96</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">40</p>
</td>
<td style="border-left:0">
<p class="chart-69">5<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>9<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">07</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">78</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>7<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">08</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>9<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">37</p>
</td>
<td style="border-left:0">
<p class="chart-69">8<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">59</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>9</p>
</td>
</tr> <tr>
<td><p align="center">11/01/2021<br>to<br>17/01/2021</p></td>
<td style="border-right:0">
<p class="chart-44">3<br>4<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">50</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">24</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>7</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">92</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">03</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-44">5<br>5<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">77</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>0<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">54</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>6</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">39</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>4</p>
</td>
</tr> <tr>
<td><p align="center">18/01/2021<br>to<br>24/01/2021</p></td>
<td style="border-right:0">
<p class="chart-44">3<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">00</p>
</td>
<td style="border-left:0">
<p class="chart-44">4<br>6<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>7<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">79</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>7<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">28</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>6<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>2<br>4</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">73</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">73</p>
</td>
<td style="border-left:0">
<p class="chart-69">6<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>1<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">28</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>3</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>8<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">82</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
</tr> <tr>
<td><p align="center">25/01/2021<br>to<br>31/01/2021</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>7<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">70</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">**</p>
</td>
<td style="border-left:0">
<p class="chart-44">*<br>*<br>*</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">96</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">17</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>6<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>7<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">96</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">6<br>8<br>0</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">42</p>
</td>
<td style="border-left:0">
<p class="chart-69">7<br>7<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>4</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">98</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>6<br>9</p>
</td>
</tr> <tr>
<td><p align="center">01/02/2021<br>to<br>07/02/2021</p></td>
<td style="border-right:0">
<p class="chart-69">2<br>3<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">09</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>6<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">62</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>4<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-44">6<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">16</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>5<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>2<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">03</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-44">2<br>4<br>5</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">16</p>
</td>
<td style="border-left:0">
<p class="chart-44">1<br>1<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-44">1<br>2<br>7</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">05</p>
</td>
<td style="border-left:0">
<p class="chart-44">3<br>4<br>8</p>
</td>
<td style="border-right:0">
<p class="chart-69">3<br>5<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">40</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>2<br>6</p>
</td>
</tr> <tr>
<td><p align="center">08/02/2021<br>to<br>14/02/2021</p></td>
<td style="border-right:0">
<p class="chart-44">1<br>2<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">27</p>
</td>
<td style="border-left:0">
<p class="chart-44">8<br>9<br>0</p>
</td>
<td style="border-right:0">
<p class="chart-69">4<br>6<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">91</p>
</td>
<td style="border-left:0">
<p class="chart-69">4<br>8<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">5<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">20</p>
</td>
<td style="border-left:0">
<p class="chart-69">1<br>4<br>5</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>4<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">29</p>
</td>
<td style="border-left:0">
<p class="chart-69">2<br>3<br>4</p>
</td>
<td style="border-right:0">
<p class="chart-69">1<br>3<br>6</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">07</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>5<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-44">4<br>8<br>9</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-44">11</p>
</td>
<td style="border-left:0">
<p class="chart-44">5<br>7<br>9</p>
</td>
<td style="border-right:0">
<p class="chart-69">2<br>6<br>8</p>
</td>
<td style="border-left:0; border-right:0;">
<p class="chart-bold chart-69">63</p>
</td>
<td style="border-left:0">
<p class="chart-69">3<br>0<br>0</p>
</td>
</tr></tbody>

  <?php
  
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