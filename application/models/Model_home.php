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
// sssksksksk adddd
    // public function get_meta($game_id)
    // {

    //     $site_id = $this->config->item('site_id');

    //     echo '<pre>';
    //     echo "Game ID: ";
    //     print_r($game_id);
    //     echo "\n";
    //     echo "Site ID: ";
    //     print_r($site_id);
    //     echo "\n";
    //     echo '</pre>';
    //     exit;

    //     $this->db->where('game_id', $game_id);
    //     $this->db->where('site_id', $site_id);
    //     $query = $this->db->get('game_seo_pages');
    //     return $query->row();
    // }



 public function get_meta($game_id,$page_name)
    {
        $site_id = $this->config->item('site_id'); // default from config
        
        // DEBUG: Let's see what values we're working with
        echo "<!-- DEBUG get_meta(): game_id = " . $game_id . " -->";
        echo "<!-- DEBUG get_meta(): page_name = " . $page_name . " -->";
        echo "<!-- DEBUG get_meta(): site_id = " . $site_id . " -->";
        echo "<!-- DEBUG get_meta(): site_id type = " . gettype($site_id) . " -->";

        $this->db->where('site_id', $site_id);
        $this->db->where('game_id', $game_id);
        $this->db->where('page_name', $page_name);
        $query = $this->db->get('game_seo_pages');

        // DEBUG: Let's see the SQL query and result
        // echo "<!-- DEBUG get_meta(): SQL = " . $this->db->last_query() . " -->";
        // echo "<!-- DEBUG get_meta(): num_rows = " . $query->num_rows() . " -->";
        
        $result = $query->row();
        // if($result) {
        //     echo "<!-- DEBUG get_meta(): Found record with meta_title = " . $result->page_title . " -->";
        // } else {
        //     echo "<!-- DEBUG get_meta(): No record found for game_id=$game_id, site_id=$site_id -->";
        // }

        return $result; // returns an object with meta_title, meta_description, meta_keywords
    }

    
    // public function get_meta($game_id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('game_meta');
    //     $this->db->where('game_id', $game_id);
    //     $query = $this->db->get();
    //     return $query->row(); // ✅ returns single row object
    // }





    //addd shubham
    public function get_bazar_by_name($bazar_name)
    {
        $this->db->where('bazar_name', $bazar_name);
        $query = $this->db->get('game_bazar'); // Replace with your actual table name
        return $query->row();
    }


}