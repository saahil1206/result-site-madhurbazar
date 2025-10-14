<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bazar_Model extends CI_Model{
	
function __construct(){
	parent::__construct();
}

public function getBazar($id){
    if($id){
    $bazarid=[];
    $this->db->where('game_user_id', $id);
   
    $query = $this->db->get('game_user_bazar');
    foreach ($query->result() as $row)
    {
        $bazarid[]=$row->game_bazar_id;
    } 
    $this->db->where_in('id', $bazarid);
    $this->db->where('status',1);
    $query = $this->db->get('game_bazar');
    return $query;
    }else{
     return [];   
    }
}

public function getBazarActiveData($id,$open,$customer_id){
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    
    $this->db->select_sum('purchase_amount','purchase_amount');
    $this->db->where('customer_id', $customer_id);
    $this->db->where('ticket_status', 0);
    $this->db->where('game_id', $id);
    $this->db->where('game_type', $open);
    $this->db->where('date', $date);
    $query = $this->db->get('game_ticket');
    $row = $query->row();
	$bazar=$row->purchase_amount;
    return $bazar;
}

public function getBazarActiveData2($id,$open){
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d", time());
    
    $this->db->select_sum('purchase_amount','purchase_amount');
    //$this->db->where('customer_id', $customer_id);
    $this->db->where('game_id', $id);
     $this->db->where('ticket_status', 0);
    $this->db->where('game_type', $open);
    $this->db->where('date', $date);
    $query = $this->db->get('game_ticket');
    $row = $query->row();
	$bazar=$row->purchase_amount;
    return $bazar;
}

public function getAllBazar($id){
    $bazarid=[];
    $this->db->where('game_user_id', $id);
   
    $query = $this->db->get('game_user_bazar');
    foreach ($query->result() as $row)
    {
        $bazarid[]=$row->game_bazar_id;
    } 
    $this->db->where_in('id', $bazarid);
    
    $query = $this->db->get('game_bazar');
    return $query;
}
public function getBazarById($id){
    $this->db->where('id', $id);
    $query = $this->db->get('game_bazar');
    return $query;

}
public function getBazarDaysById($id){
    $this->db->where('game_bazar_id', $id);
    $query = $this->db->get('game_bazar_day');
    return $query;

}
public function getBazarNameById($id){
    $this->db->where('id', $id);
    $query = $this->db->get('game_bazar');
    $row = $query->row();
	$bazar=$row->bazar_name;
    return $bazar;

}

public function getBazarData(){
//$this->db->where('status',1);
$query = $this->db->get('game_bazar');
 
 return $query;
    
}

public function getAllBazarData(){
    $this->db->where('status',1);
    $query = $this->db->get('game_bazar');
     
     return $query;
        
    }
public function checkBazarTime($bazar_id,$bazar_type){
    //echo $bazar_id;
    $this->db->where('id', $bazar_id);
    $query = $this->db->get('game_bazar');
    $row = $query->row();
   
    if($bazar_type == 'open'){
        $bazartime=$row->open_block_time;
    }else if($bazar_type == 'close'){
        $bazartime=$row->close_block_time;
    }else{
        return false;
        exit;
    }
    
        
    
         date_default_timezone_set('Asia/Kolkata');
        $currentTime=date("Y-m-d h:i:s A", time());
        $currentTime=strtotime($currentTime);

        $date=date("Y-m-d", time());
        $bazarRealTime=$date.' '.$bazartime;
        $bazarRealTime=strtotime( $bazarRealTime);
         $sql = "SELECT COUNT(*)
                FROM game_result
                WHERE bazar_id='".$bazar_id."' and result_type='".$bazar_type."' and result_date='".$date."' "; 
                
        $query = $this->db->query($sql);
        $result = $query->row_array();
        $count = $result['COUNT(*)'];
       
    if($count!=1){    
    if($bazarRealTime>$currentTime){
        
        return true;

    }else{
        return false;
    }
}else{
   
    return false;
}


}


public function blockTime($bazar_id,$bazar_type){
    return true;
}
public function addBazar($post_data){
   $this->db->insert('game_bazar', $post_data);
   $insert_id = $this->db->insert_id();

   return  $insert_id;
   
}
public function addBazarDays($daysData){
	 $this->db->insert('game_bazar_day', $daysData);
  

   return  true;

}
public function updateBazar($id,$data){

$this->db->where('id',$id);
$this->db->update('game_bazar',$data);

return true;
}

public function updateBazardays($id,$data){


$this->db->where('game_bazar_id', $id);
$this->db->update('game_bazar_day', $data);

return true;
}
public function deleteBazar($id){
	

$this->db->where('id',$id);
$this->db->delete('game_bazar');

$this->db->where('game_bazar_id',$id);
$this->db->delete('game_bazar_day');

$this->db->where('bazar',$id);
$this->db->delete('game_single_digit');

$this->db->where('bazar',$id);
$this->db->delete('single_pana');

$this->db->where('bazar',$id);
$this->db->delete('double_pana');

$this->db->where('bazar',$id);
$this->db->delete('game_tripple_pana');

$this->db->where('bazar',$id);
$this->db->delete('jodi');

$this->db->where('game_id',$id);
$this->db->delete('game_ticket');

$this->db->where('bazar_id',$id);
$this->db->delete('game_result');

$this->db->where('game_bazar_id',$id);
$this->db->delete('game_user_bazar');
}
}