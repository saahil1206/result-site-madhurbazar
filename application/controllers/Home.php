<?php

defined('BASEPATH') or exit('No direct script access allowed');

error_reporting(0);

class Home extends CI_Controller
{





	function __construct()
	{



		parent::__construct();

		$this->load->helper(array('form', 'url'));

		error_reporting(0);

		$this->load->library('form_validation');

		$this->load->model('Login_Model');



		$this->load->helper('security');

		$this->load->helper('result');

		$this->load->helper('url');

		$this->load->library(array('session'));

		$customer_logged_in = $this->session->userdata('customer_logged_in');



	}



	public function index()
	{





		$this->load->model("Model_home");

		$this->load->model("Result_Model");

		$data["fetch_data"] = $this->Model_home->fetch_data();



		$data['gussing'] = $this->Model_home->getluckynumber();

		$data['noticedata'] = $this->Model_home->getnotice();
		$data["flotting_url"] = $this->Model_home->getFlottingUrl();
		
		// Add meta data for SEO - using game_id = 1 for homepage
		// $data['meta'] = $this->Model_home->get_meta(23);
		
		// DEBUG: Let's check what we got from get_meta()
		// echo "<!-- DEBUG Home Controller: meta variable set: " . (isset($data['meta']) ? 'YES' : 'NO') . " -->";
		// if(isset($data['meta']) && $data['meta']) {
		// 	echo "<!-- DEBUG Home Controller: meta object exists: YES -->";
		// 	echo "<!-- DEBUG Home Controller: meta_title = " . (isset($data['meta']->page_title) ? $data['meta']->page_title : 'NOT SET') . " -->";
		// 	echo "<!-- DEBUG Home Controller: meta_description = " . (isset($data['meta']->meta_description) ? $data['meta']->meta_description : 'NOT SET') . " -->";
		// } else {
		// 	echo "<!-- DEBUG Home Controller: meta object is NULL or empty -->";
		// }

		$this->load->view('home/header', $data);

		$this->load->view('home/index', $data);

		$this->load->view('home/footer', $data);





	}





// 13
// public function jodi_chart()
// {
//     $game_id = $this->uri->segment(3); // e.g., 24
//     $this->load->model('Game_seo_model');

//     // fetch meta dynamically
//     $data['meta'] = $this->Game_seo_model->get_meta($game_id);

//     $this->load->view('home/header', $data);
//     $this->load->view('user/jodi_chart', $data);
//     $this->load->view('home/footer', $data);
// }

	public function jodi_chart()
	{

		date_default_timezone_set('Asia/Kolkata');
		$date3 = date("Y-m-d h:i:s A", time());
		$end_date = date("Y-m-d", time());
		$data['id'] = $this->uri->segment('3');
		$this->load->model("Model_home");

		// $data['meta'] = $this->Model_home->get_meta($data['id'],'jodi');

		// DEBUG: Let's check what we got from get_meta()
		// echo "<!-- DEBUG Home Controller: meta variable set: " . (isset($data['meta']) ? 'YES' : 'NO') . " -->";
		// if(isset($data['meta']) && $data['meta']) {
		// 	echo "<!-- DEBUG Home Controller: meta object exists: YES -->";
		// 	echo "<!-- DEBUG Home Controller: meta_title = " . (isset($data['meta']->page_title) ? $data['meta']->page_title : 'NOT SET') . " -->";
		// 	echo "<!-- DEBUG Home Controller: meta_description = " . (isset($data['meta']->meta_description) ? $data['meta']->meta_description : 'NOT SET') . " -->";
		// } else {
		// 	echo "<!-- DEBUG Home Controller: meta object is NULL or empty -->";
		// }

		$data['bazar'] = $this->uri->segment('4');
		$start_date = "2021-01-01";


		$data["fetch_data"] = $this->Model_home->fetch_data();
		$data["open_result"] = $this->Model_home->fetch_result_record($data['id'], $start_date, $end_date, "open");
		$data["close_result"] = $this->Model_home->fetch_result_record($data['id'], $start_date, $end_date, "close");

		$this->load->view('home/header', $data);

		$this->load->view('user/jodi_chart', $data);

		$this->load->view('home/footer', $data);

	 }

	// shubham
	public function jodi_chart_by_slug($bazar_slug)
	{
		date_default_timezone_set('Asia/Kolkata');
		$date3 = date("Y-m-d h:i:s A", time());
		$end_date = date("Y-m-d", time());
		$start_date = "2021-01-01";

		// Convert slug back to normal name
		$bazar_name = str_replace('-', ' ', $bazar_slug);

		// Load your model
		$this->load->model("Model_home");

		// Fetch bazar ID by name
		$bazar_record = $this->Model_home->get_bazar_by_name($bazar_name);
		if (!$bazar_record) {
			show_404(); // Show 404 if bazar not found
		}
		$id = $bazar_record->id;

		$data['meta'] = $this->Model_home->get_meta($id,'jodi');

		// DEBUG: Let's check what we got from get_meta()
		// echo "<!-- DEBUG Home Controller: meta variable set: " . (isset($data['meta']) ? 'YES' : 'NO') . " -->";
		// if(isset($data['meta']) && $data['meta']) {
		// 	echo "<!-- DEBUG Home Controller: meta object exists: YES -->";
		// 	echo "<!-- DEBUG Home Controller: meta_title = " . (isset($data['meta']->page_title) ? $data['meta']->page_title : 'NOT SET') . " -->";
		// 	echo "<!-- DEBUG Home Controller: meta_description = " . (isset($data['meta']->meta_description) ? $data['meta']->meta_description : 'NOT SET') . " -->";
		// } else {
		// 	echo "<!-- DEBUG Home Controller: meta object is NULL or empty -->";
		// }

		// Fetch results
		$data['id'] = $id;
		$data['bazar'] = $bazar_name;
		$data["fetch_data"] = $this->Model_home->fetch_data();
		$data["open_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "open");
		$data["close_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "close");


		

		// Load views
		$this->load->view('home/header', $data);
		$this->load->view('user/jodi_chart', $data);
		$this->load->view('home/footer', $data);
	}







	public function panel_chart()
	{

		date_default_timezone_set('Asia/Kolkata');
		$date3 = date("Y-m-d h:i:s A", time());
		$end_date = date("Y-m-d", time());
		$data['id'] = $this->uri->segment('3');

		$data['bazar'] = $this->uri->segment('4');
		$start_date = "2021-01-01";

		$this->load->model("Model_home");


		$data["fetch_data"] = $this->Model_home->fetch_data();
		$data["open_result"] = $this->Model_home->fetch_result_record($data['id'], $start_date, $end_date, "open");
		$data["close_result"] = $this->Model_home->fetch_result_record($data['id'], $start_date, $end_date, "close");

		$this->load->view('home/header', $data);

		$this->load->view('home/panel', $data);

		$this->load->view('home/footer', $data);







	}
	// added shkkkkk
	public function panel_chart_by_slug($bazar_slug)
	{
		date_default_timezone_set('Asia/Kolkata');
		$date3 = date("Y-m-d h:i:s A", time());
		$end_date = date("Y-m-d", time());
		$start_date = "2021-01-01";

		// Convert the slug (e.g. madhur-day) back to readable name (Madhur Day)
		$bazar_name = str_replace('-', ' ', $bazar_slug);

		// Load your model
		$this->load->model("Model_home");

		
		// Fetch bazar record by name
		$bazar_record = $this->Model_home->get_bazar_by_name($bazar_name);
		if (!$bazar_record) {
			show_404(); // if bazar not found
		}
		
		$id = $bazar_record->id;
		
		$data['meta'] = $this->Model_home->get_meta($id,'pana');

			// DEBUG: Let's check what we got from get_meta()
		// echo "<!-- DEBUG Home Controller: meta variable set: " . (isset($data['meta']) ? 'YES' : 'NO') . " -->";
		// if(isset($data['meta']) && $data['meta']) {
		// 	echo "<!-- DEBUG Home Controller: meta object exists: YES -->";
		// 	echo "<!-- DEBUG Home Controller: meta_title = " . (isset($data['meta']->page_title) ? $data['meta']->page_title : 'NOT SET') . " -->";
		// 	echo "<!-- DEBUG Home Controller: meta_description = " . (isset($data['meta']->meta_header) ? $data['meta']->meta_header : 'NOT SET') . " -->";
		// } else {
		// 	echo "<!-- DEBUG Home Controller: meta object is NULL or empty -->";
		// }

		// Fetch your result data
		$data['id'] = $id;
		$data['bazar'] = $bazar_name;
		$data["fetch_data"] = $this->Model_home->fetch_data();
		$data["open_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "open");
		$data["close_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "close");

		// Load your views
		$this->load->view('home/header', $data);
		$this->load->view('home/panel', $data);
		$this->load->view('home/footer', $data);
	}









}