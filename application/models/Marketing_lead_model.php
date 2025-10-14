<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketing_lead_model extends CI_Model {

    protected $table = 'marketing_leads';

    public function save_lead($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}
