<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
		
        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
        $this->load->helper('security');
		$this->load->library(array('session'));	
		$customer_logged_in=$this->session->userdata('customer_logged_in');
        $access_level=$this->session->userdata('access_level');
          if(!$customer_logged_in  ){
            redirect('Login/index');
		}
		if($access_level!=5  ){
            redirect('Login/logOut');
		}
    } 

	public function index()
	{

        $gameid=$this->uri->segment(3);
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$this->load->model('User_Model');
        $data['b']=$this->Bazar_Model->getBazar($userId);
        $data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$data['phonenumber']=$this->User_Model->userAccountfull($userId);
		
        $this->load->view('user/header',$data);
        //$this->load->view('user/Nav',$data);
		$this->load->view('user/profile',$data);
		$this->load->view('user/footer');

    }
   
   	public function updateProfile(){

      $this->load->helper('form');
      $this->load->helper('security');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('oldpin', 'old pin', 'trim|required|exact_length[4]');
      $this->form_validation->set_rules('newpin', 'new pin', 'trim|required|exact_length[4]');
      $this->form_validation->set_rules('repin', 'repin', 'trim|required|matches[newpin]');
      
 
            $old = $this->input->post('oldpin');
            $new = $this->input->post('newpin');
            $user_id = $this->session->userdata('userid');
        $result=$this->Login_Model->userAuthentication($this->session->userdata('username'),$old);
        if($result === true){
            
             $data=array('password'=>md5($new));
            $this->db->where('id',$user_id);

            $result= $this->db->update('game_user_personal',$data);
          if($result){
             $data['success_sms'] ="Sucessfully Updated ";
            }
          }else{
            $data['error_sms'] ="Old Password Does not Match";
          }
       
       $gameid=$this->uri->segment(3);
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
		$this->load->model('User_Model');
        $data['b']=$this->Bazar_Model->getBazar($userId);
        $data['bazar']=$this->Bazar_Model->getBazarById($gameid);
		$data['balance']=$this->User_Model->userAccount($userId);
		$data['username']=$this->User_Model->userAccountinfo($userId);
		$data['phonenumber']=$this->User_Model->userAccountfull($userId);
		
        $this->load->view('user/header',$data);
        //$this->load->view('user/Nav',$data);
		$this->load->view('user/profile',$data);
		$this->load->view('user/footer');

}



}


?>