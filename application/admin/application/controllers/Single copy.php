<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single extends CI_Controller {

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
        if(!$customer_logged_in){
            redirect(Login/index);
		}
    } 

	public function index()
	{

        $gameid=$this->uri->segment(3);
        $userId=$this->session->userdata('userid');
		$this->load->model('Bazar_Model');
        $data['b']=$this->Bazar_Model->getBazar($userId);
        $data['bazar']=$this->Bazar_Model->getBazarById($gameid);
        $this->load->view('user/header');
        $this->load->view('user/Nav',$data);
		$this->load->view('user/single',$data);
		$this->load->view('user/footer');

    }



}


?>