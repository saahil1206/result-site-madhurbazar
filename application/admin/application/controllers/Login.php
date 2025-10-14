<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->helper(array('form', 'url','result'));

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
        $this->load->helper('security');
        $this->load->library(array('session'));	
        
    } 
	public function index()
	{
	    
		$this->load->model("Model_home");
			$data['gussing']=$this->Model_home->getluckynumber();
			//$this->load->model('Model_home');
		$data['gussing']=$this->Model_home->getnotice();
		$data["fetch_data"] = $this->Model_home->fetch_data();
		//echo'data migration in progress ..............';
			$this->load->view('home/header',$data);	
	$this->load->view('home/index',$data);
		$this->load->view('home/footer',$data);
    }
    
     public function customerLogin(){

        $this->form_validation->set_rules('userName', 'userName', 'trim|required|min_length[3]|max_length[25]');
        $this->form_validation->set_rules('passWord', 'passWord', 'trim|required|min_length[3]|max_length[25]');
        $data=[];
        if ($this->form_validation->run() != FALSE)
            {   
 
                $userName=$this->input->post('userName');
               
                $passWord=$this->input->post('passWord');
                
                $result=$this->Login_Model->userAuthentication($userName,$passWord);
                if($result === true){
                    $data['messagesuccess']='successfully logged In';
                    
                    $userdata=$this->Login_Model->userData($userName);
                               
                    foreach ($userdata->result() as $row)
                    {
                         $username=$row->username;
                         $userId=$row->id;
                    }
                    $levelData=$this->Login_Model->checkAccessLevel($userId);
                   
                    if($levelData == 1 or $levelData == 2 or $levelData == 3 or $levelData == 4 or $levelData == 7)
                    {
                        $newdata = array(
                            'username'  => $username,
                            'userid' => $userId,
                            "customer_logged_in" => TRUE,
                            "access_level" => $levelData
                        );
                
                         $this->session->set_userdata($newdata);
                            redirect('Admin/index');
                    }

                    else{
                    $data['messagedanger']='something wrong contact admin';  
                }
                }else{
                  $data['messagedanger']=$result;  
                }
                
            }
             
            $this->load->view('login',$data);   

    }


    public function logOut(){
        $array_items = array('username', 'userid','customer_logged_in','access_level');

        $this->session->unset_userdata($array_items);
        
        $this->session->sess_destroy();
        //$this->index();
        redirect('Login/index');

    }


}


?>