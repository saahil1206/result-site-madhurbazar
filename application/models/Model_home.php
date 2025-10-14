<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function fetch_data()
    {
        $this->db->where('status', 1);
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

    function fetch_result_record($id, $start_date, $end_date, $type)
    {
        $call_procedure = "CALL result_records($id, '$start_date', '$end_date', '$type')";
        $query = $this->db->query($call_procedure);
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }

    function getFlottingUrl()
    {
        $this->db->select('*');
        $this->db->where('id', 1);
        $this->db->where('status', 1);
        $query = $this->db->get('settings');
        $row = $query->row();
        return $row;
    }

    public function get_meta($game_id, $page_name)
    {
        $site_id = $this->config->item('site_id');

        $this->db->where('site_id', $site_id);
        $this->db->where('game_id', $game_id);
        $this->db->where('page_name', $page_name);
        $query = $this->db->get('game_seo_pages');

        $result = $query->row();

        return $result;
    }


    public function get_bazar_by_name($bazar_name)
    {
        $this->db->where('bazar_name', $bazar_name);
        $query = $this->db->get('game_bazar');
        return $query->row();
    }
}
