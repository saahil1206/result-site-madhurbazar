<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller
 {

 		public function __construct()
	{
		parent::__construct();
		
		

        $this->load->model('model_client');
        
	}

 	public function addclient()
	{
		

$this->form_validation->set_rules('clientName', 'clientName', 'trim|required|is_unique[name]');
$this->form_validation->set_rules('password', 'password', 'trim|required');
$this->form_validation->set_rules('conpass', 'conpass', 'trim|required');
$this->form_validation->set_rules('city', 'city', 'trim|required');
$this->form_validation->set_rules('phone', 'phone', 'trim|required');
$this->form_validation->set_rules('exlmt', 'exlmt', 'trim|required');
$this->form_validation->set_rules('obal', 'obal', 'trim|required');
$this->form_validation->set_rules('reffby', 'reffby', 'trim|required');
$this->form_validation->set_rules('refp', 'refp', 'trim|required');
$this->form_validation->set_rules('acctyp', 'acctyp', 'trim|required');
$this->form_validation->set_rules('acom', 'acom', 'trim|required');
$this->form_validation->set_rules('pcom', 'pcom', 'trim|required');
$this->form_validation->set_rules('csp', 'csp', 'trim|required');
$this->form_validation->set_rules('cdp', 'cdp', 'trim|required');
$this->form_validation->set_rules('part', 'part', 'trim|required');
$this->form_validation->set_rules('akrt', 'akrt', 'trim|required');
$this->form_validation->set_rules('sprt', 'sprt', 'trim|required');
$this->form_validation->set_rules('dprt', 'dprt', 'trim|required');
$this->form_validation->set_rules('tprt', 'tprt', 'trim|required');
$this->form_validation->set_rules('cspr', 'cspr', 'trim|required');
$this->form_validation->set_rules('cdpr', 'cdpr', 'trim|required');
$this->form_validation->set_rules('jrt', 'jrt', 'trim|required');
$this->form_validation->set_rules('wcom', 'wcom', 'trim|required');



        if ($this->form_validation->run() == TRUE) {

        	$data = array(
        		'clientName' => $this->input->post('clientName'),
        		'full_name' => $this->input->post('full_name'),
        		'upass' => $this->input->post('upass'),
        		'conpass' => $this->input->post('conpass'),
        		'city' => $this->input->post('city'),
        		'phone' => $this->input->post('phone'),
        		'exlmt' => $this->input->post('exlmt'),
        		'obal' => $this->input->post('obal'),
        		'reffby' => $this->input->post('reffby'),
        		'refp' => $this->input->post('refp'),
        		'acctyp' => $this->input->post('acctyp'),
        		'acom' => $this->input->post('acom'),
        		'pcom' => $this->input->post('pcom'),
        		'csp' => $this->input->post('csp'),	
        		'cdp' => $this->input->post('cdp'),	
        		'part' => $this->input->post('part'),	
        		'akrt' => $this->input->post('akrt'),	
        		'sprt' => $this->input->post('sprt'),	
        		'dprt' => $this->input->post('dprt'),	
        		'tprt' => $this->input->post('tprt'),
        		'cspr' => $this->input->post('cspr'),
        		'cdpr' => $this->input->post('cdpr'),
        		'jrt' => $this->input->post('jrt'),
        		'wcom' => $this->input->post('wcom'),
        		
        			
        	);
        	
        	$create = $this->model_client->addclient($data);

        	if($create == true) {
        		
        		
				return redirect('admin/client');
        	}
        	else {
        		
        		
				return redirect('admin/client');
        	}
        }
        else
        {
           echo " data not insert";
        }
	}
 }
 ?>