<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_home extends CI_Model{
	
function __construct(){
	parent::__construct();
}
   function fetch_data()
   {
       $this->db->where('status',1);
   	$query = $this->db->get("game_bazar");
   	return $query;
   }
   
    function getluckynumber()
   {
      
   	$query = $this->db->get("lucky_number");
   	return $query;
   }
     function getnotice()
   {
      
   	$query = $this->db->get("notice");
   	return $query;
   }
   
   
}