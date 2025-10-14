<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Marketing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Marketing_model');
        $this->load->model('Marketing_lead_model');
    }

    // GET / POST (AJAX) -> returns JSON with redirect_url
    public function popup()
    {
        $site_name = "madhuarbaza.com"; // or use $_SERVER['HTTP_HOST']
        $popup_data = $this->Marketing_model->get_popup_data($site_name);

        $resp = [
            'status' => 'error',
            'redirect_url' => 'https://www.playmaxx.club'
        ];

        if ($popup_data && !empty($popup_data['redirect_url'])) {
            $resp['status'] = 'success';
            $resp['redirect_url'] = $popup_data['redirect_url'];
            // include site_id so submit can store lead with site_id
            if (isset($popup_data['site_id'])) $resp['site_id'] = $popup_data['site_id'];
        }

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($resp));
    }

    // POST endpoint to save lead and return redirect_url
    public function submit()
    {
        // Expecting form-data POST (FormData). Use $this->input->post()
        $fullname  = $this->input->post('fullname', true);
        $email     = $this->input->post('email', true);
        $mobile_no = $this->input->post('mobile_no', true);
        $site_id   = $this->input->post('site_id', true); // optional

        // Basic validation
        if (empty($fullname) || empty($email) || empty($mobile_no)) {
            $resp = ['status' => 'error', 'message' => 'Missing required fields', 'redirect_url' => 'https://www.playmaxx.club'];
            return $this->output->set_content_type('application/json')->set_output(json_encode($resp));
        }

        // Save lead
        $leadData = [
            'site_id'   => $site_id ?: null,
            'fullname'  => $fullname,
            'email'     => $email,
            'mobile_no' => $mobile_no
        ];
        $this->Marketing_lead_model->save_lead($leadData);

        // Get redirect_url (use same site lookup)
        $site_name = "madhurbazar1.com";
        $popup_data = $this->Marketing_model->get_popup_data($site_name);

        $redirect_url = $popup_data && !empty($popup_data['redirect_url']) ? $popup_data['redirect_url'] : 'https://www.playmaxx.club';

        $resp = ['status' => 'success', 'redirect_url' => $redirect_url];

        return $this->output->set_content_type('application/json')->set_output(json_encode($resp));
    }
}
