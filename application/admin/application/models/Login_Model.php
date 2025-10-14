<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model{
	
function __construct(){
	parent::__construct();
}
public function userData($user){
    $this->db->where('username', $user);
    $query = $this->db->get('game_user_personal');
    return $query;
}

public function checkAccessLevel($id){
    $this->db->where('game_user_id', $id);
    $query = $this->db->get('game_user_account');
    foreach ($query->result() as $row)
    {
        $levelid=$row->game_group_id;
    } 
    if(!empty($levelid)){
    return $levelid;
}
}
public function userAuthentication($user,$password){
    
         $this->db->where('username', $user);
    $query = $this->db->get('game_user_personal');
    $count_row = $query->num_rows();
    if($count_row == 1){    
    foreach ($query->result() as $row)
    {
        $orgPassword=$row->password;
        $userId=$row->id;
    } 
    
    $result=$this->validatePassword($orgPassword,$password);
    if($result){
        $target=$this->validateStatus($user);
        if($target){
            
            return true;
        }else{
            $msg='This account is blocked contact admin';
            return $msg; 
        }

    }else{
         $msg='This password does not correct';
        return $msg; 
    }

    } else {
        $msg='This usernme does not exit';
        return $msg;
    }



}
public function validatePassword($orgPassword,$password){
    $password=md5($password);
    if($orgPassword == $password){
         return true;
    }else{
        return false;
    }

}

public function validateStatus($user){
    $this->db->where('username', $user);
    $query = $this->db->get('game_user_personal');
    if($query){    
    foreach ($query->result() as $row)
    {
        $status=$row->blocked_status;
    } 
    if($status == 1){
        return true;
    }else{
        return false;
    }

}


}


}
?>