<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction_Model extends CI_Model{
	
function __construct(){
	parent::__construct();
}

public function TicketNumber(){
    $sql='select MAX(id) as id from game_ticket';
    $query = $this->db->query($sql);
    $row = $query->row_array();
    $id=$row['id'];
    $id=$id+1;
    date_default_timezone_set('Asia/Kolkata');
    $date3=time();
    $ticketNumber ='M-'.$id.'-'.$date3;

    return $ticketNumber;

}

public function updateUserBalance($id,$amount){
    
    $this->db->set('creditrefrence',$amount);
    $this->db->where('game_user_id', $id);
    $this->db->update('game_user_account');
    return true;
}

public function generatequery($table,$data){

	
    $i = 0;
    //print_r($data);
   $count = count($data);
   //echo $table;
   //exit;
   $sql_query = "INSERT INTO ".$table." VALUES (0 ";
   for($i=0;$i<$count;$i++){
       $sql_query = $sql_query." ,'".$data[$i]."'";
   }
   $sql_query = $sql_query.")";
   return $sql_query;

}

}