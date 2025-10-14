<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Resultcalculation extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}


public function aakdaamount($customer_id,$bazar,$category,$aakda,$date){

	if($aakda==1){

$aakda='single0';
	}else if($aakda==2){

$aakda='single1';
	}else if($aakda==3){

$aakda='single2';
	}else if($aakda==4){

$aakda='single3';
	}else if($aakda==5){

$aakda='single4';
	}else if($aakda==6){

$aakda='single5';
	}else if($aakda==7){

$aakda='single6';
	}else if($aakda==8){

$aakda='single7';
	}else if($aakda==9){

$aakda='single8';
	}else if($aakda==0){

$aakda='single9';
	}
	
	
      
        $this->db->select_sum($aakda);
        $this->db->from('game_single_digit');
        $this->db->where('customer_id',$customer_id);
        $this->db->where('bazar',$bazar);
        $this->db->where('bazar_type',$category);
        $this->db->where('cancle_status',0);
        $this->db->like('date',$date);
        $query =$this->db->get();

      
        $row = $query->row();
       if(!empty($row->$aakda)){
        return $row->$aakda;
		
	   }else{
		   
		  return 0; 
	   }
}

public function singlepanaamount($customer_id,$bazar,$category,$pana,$date){

$sql="select sum(amount) as num2 from all_pana where customer_id='".$customer_id."' and	pana=".$pana." and game_name='220patti' and  bazar='".$bazar."' and bazar_type='".$category."'and cancle_status='0' and date LIKE '".$date."%'";

$query = $this->db->query($sql);

$row2= $query->row();

$paamount=$row2->num2;
 if(!empty($paamount)){

return $paamount;
}else{
		   
		  return 0; 
	   }
}

public function singlegrouppanaamount($customer_id,$bazar,$category,$pana,$date){
$chngnumber='n'.$pana;
$sql="select sum($chngnumber) as num from single_pana where client='".$customer_id."' and	bazar='".$bazar."'  and type='".$category."' and cancle_status='0' and date LIKE '".$date."%'";


$query = $this->db->query($sql);

$row = $query->row();

$groupamount=$row->num;



$sql="select sum(amount) as num2 from all_pana where customer_id='".$customer_id."' and	pana=".$pana." and game_name!='220patti' and  bazar='".$bazar."' and bazar_type='".$category."'and cancle_status='0' and date LIKE '".$date."%'";

$query = $this->db->query($sql);

$row2= $query->row();

$paamount=$row2->num2;
$checknumber=array(123,234,345,456,567,678,789,890);

if(in_array($pana,$checknumber)){
$chngnumber='num_'.$pana;

$sql="select sum($chngnumber) as num from game_run_pana where customer_id='".$customer_id."' and	bazar='".$bazar."'  and bazar_type='".$category."' and cancle_status='0' and date LIKE '".$date."%'";


$query = $this->db->query($sql);

$row = $query->row();

$groupamount2=$row->num;
}else{
	
	$groupamount2=0;
}

return $groupamount+$paamount+$groupamount2;

}

public function doublepanaamount($customer_id,$bazar,$category,$pana,$date){


$sql="select sum(amount) as num2 from all_pana where customer_id='".$customer_id."' and	pana=".$pana." and game_name='220patti' and  bazar='".$bazar."' and bazar_type='".$category."'and cancle_status='0' and date LIKE '".$date."%'";

$query = $this->db->query($sql);

$row2= $query->row();

$paamount=$row2->num2;


return $paamount;





}

public function doublegrouppanaamount($customer_id,$bazar,$category,$pana,$date){

$chngnumber='n'.$pana;
$sql="select sum($chngnumber) as num from double_pana where client='".$customer_id."' and	bazar='".$bazar."'  and type='".$category."' and cancle_status='0' and date LIKE '".$date."%'";


$query = $this->db->query($sql);

$row = $query->row();

$groupamount=$row->num;



$sql="select sum(amount) as num2 from all_pana where customer_id='".$customer_id."' and	pana=".$pana." and game_name!='220patti' and  bazar='".$bazar."' and bazar_type='".$category."'and cancle_status='0' and date LIKE '".$date."%'";

$query = $this->db->query($sql);

$row2= $query->row();

$paamount=$row2->num2;


return $groupamount+$paamount;
}

public function triplepanaamount($customer_id,$bazar,$category,$pana,$date){
	$chngnumber='num_'.$pana;
$sql="select sum($chngnumber) as num from game_tripple_pana where 	customer_id='".$customer_id."' and	bazar='".$bazar."' and bazar_type='".$category."' and cancle_status='0' and date LIKE '".$date."%'";


$query = $this->db->query($sql);

$row = $query->row();
$groupamount=$row->num();


$sql="select sum(amount) as num2 from all_pana where customer_id='".$customer_id."' and	pana=".$pana." and  bazar='".$bazar."' and bazar_type='".$category."'and cancle_status='0' and date LIKE '".$date."%'";

$query = $this->db->query($sql);

$row2= $query->row();

$paamount=$row2->num2;
$paamount=$groupamount+$paamount;

return $paamount;

}



public function jodiamount($customer_id,$bazar,$category,$pana,$date){
//$customer_id='test';
	
$chngnumber='n'.$pana;
$sql="select sum($chngnumber) as num from jodi where client='".$customer_id."' and	bazar='".$bazar."'  and bazar_type='open' and cancle_status='0' and date LIKE '".$date."%'";

$query = $this->db->query($sql);

$row = $query->row();

$groupamount=$row->num;
//echo $sql;



$sql="select sum(amount) as num2 from jodi_tbl where customer_id='".$customer_id."' and	jodi=".$pana."  and  bazar='".$bazar."' and bazar_type='open'and cancle_status='0' and date LIKE '".$date."%'";

$query = $this->db->query($sql);

$row2= $query->row();

$paamount=$row2->num2;


return $groupamount+$paamount;



}



}


?>