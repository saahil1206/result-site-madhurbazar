<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_Model extends CI_Model{
	
function __construct(){
	parent::__construct();
}

public function userAccount($id){
	$this->db->where('game_user_id', $id);
	$query = $this->db->get('game_user_account');
	$row = $query->row();
    $creditrefrence=$row->creditrefrence;
    return $creditrefrence;

}
public function userAccountinfo($id){
	$this->db->where('id', $id);
	$query = $this->db->get('game_user_personal');
	$row = $query->row();
    $creditrefrence=$row->username;
    return $creditrefrence;
}
public function fullname($id){
	$this->db->where('id', $id);
	$query = $this->db->get('game_user_personal');
	$row = $query->row();
    $creditrefrence=$row->fullname;
    return $creditrefrence;
}

public function phone($id){
	$this->db->where('id', $id);
	$query = $this->db->get('game_user_personal');
	$row = $query->row();
    $creditrefrence=$row->phonenumber;
    return $creditrefrence;
}
public function city($id){
	$this->db->where('id', $id);
	$query = $this->db->get('game_user_personal');
	$row = $query->row();
    $creditrefrence=$row->city;
    return $creditrefrence;

}
public function userAccountExposer($id){
	$this->db->where('game_user_id', $id);
	$query = $this->db->get('game_user_account');
	$row = $query->row();
    $creditrefrence=$row->exposurelimit;
    return $creditrefrence;

}
public function getbalanceSearched($userid,$fromdate,$todate){
	 $this->db->where('date >=', $fromdate);
   $this->db->where('date <=', $todate);
 $this->db->where('game_user_id',$userid);
    $query = $this->db->get('user_passbook');
    return $query;
}
public function userTransactionStatus($id){

	$this->db->where('id', $id);
	//$this->db->where('transaction_status',1);
	$query = $this->db->get('game_user_personal');
	$row = $query->row();
	$transationStatus=$row->transaction_status;
	if($transationStatus==1){
       return true;
	}else{
        return false;
	}

}

public function getUserNameById($id){
    $this->db->where('id', $id);
	//$this->db->where('transaction_status',1);
	$query = $this->db->get('game_user_personal');
	$row = $query->row();
	if($row){
	$userName=$row->username;
	}
	if(isset($userName)){
    return $userName;
	}else{
	    return 'norefrence';
	}
}

public function fetchdata()
{

}

}