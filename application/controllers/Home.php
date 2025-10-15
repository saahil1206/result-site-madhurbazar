<?php defined('BASEPATH') or exit('No direct script access allowed');

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

		$data['meta'] = $this->Model_home->get_meta(0, 'home');

		$this->load->view('home/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('home/footer', $data);
	}

	public function jodi_chart()
	{

		date_default_timezone_set('Asia/Kolkata');
		$date3 = date("Y-m-d h:i:s A", time());
		$end_date = date("Y-m-d", time());
		$data['id'] = $this->uri->segment('3');
		$this->load->model("Model_home");

		$data['bazar'] = $this->uri->segment('4');
		$start_date = "2021-01-01";


		$data["fetch_data"] = $this->Model_home->fetch_data();
		$data["open_result"] = $this->Model_home->fetch_result_record($data['id'], $start_date, $end_date, "open");
		$data["close_result"] = $this->Model_home->fetch_result_record($data['id'], $start_date, $end_date, "close");

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

	public function jodi_chart_by_slug($bazar_slug)
	{
		date_default_timezone_set('Asia/Kolkata');
		$end_date = date("Y-m-d", time());
		$start_date = "2021-01-01";

		$bazar_name = str_replace('-', ' ', $bazar_slug);

		$this->load->model("Model_home");

		$bazar_record = $this->Model_home->get_bazar_by_name($bazar_name);
		if (!$bazar_record) {
			$this->output->set_status_header(404);
			$this->output->set_header("X-Robots-Tag: noindex, nofollow", TRUE);
			$this->load->view('home/404');
			return;
		}
		$id = $bazar_record->id;

		$data['meta'] = $this->Model_home->get_meta($id, 'jodi');

		// Fetch results
		$data['id'] = $id;
		$data['bazar'] = $bazar_name;
		$data["open_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "open");
		$data["close_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "close");
		$data["flotting_url"] = $this->Model_home->getFlottingUrl();

		// Load views
		$this->load->view('home/header', $data);
		$this->load->view('user/jodi_chart', $data);
		$this->load->view('home/footer', $data);
	}

	public function panel_chart_by_slug($bazar_slug)
	{
		date_default_timezone_set('Asia/Kolkata');
		$end_date = date("Y-m-d", time());
		$start_date = "2021-01-01";

		$bazar_name = str_replace('-', ' ', $bazar_slug);

		$this->load->model("Model_home");
		$bazar_record = $this->Model_home->get_bazar_by_name($bazar_name);
		if (!$bazar_record) {
			$this->output->set_status_header(404);
			$this->output->set_header("X-Robots-Tag: noindex, nofollow", TRUE);
			$this->load->view('home/404');
			return;
		}
		$id = $bazar_record->id;
		$data['meta'] = $this->Model_home->get_meta($id, 'pana');

		$data['id'] = $id;
		$data['bazar'] = $bazar_name;
		$data["fetch_data"] = $this->Model_home->fetch_data();
		$data["open_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "open");
		$data["close_result"] = $this->Model_home->fetch_result_record($id, $start_date, $end_date, "close");
		$data["flotting_url"] = $this->Model_home->getFlottingUrl();

		// Load your views
		$this->load->view('home/header', $data);
		$this->load->view('home/panel', $data);
		$this->load->view('home/footer', $data);
	}

	public function error()
	{
		$this->output->set_status_header('404');
		$this->output->set_header("X-Robots-Tag: noindex, nofollow", TRUE);

		$this->load->view('home/404');
	}
}
