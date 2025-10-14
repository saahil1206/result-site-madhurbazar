<?php 

class Model_client extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function addclient($data = array())
	{
		if($data) {
			// print_r($data);exit();
			$this->db->set('created','NOW()', FALSE);
			$create = $this->db->insert('addclient', $data);
			return ($create == true) ? true : false;
		}
	}
}	
?>