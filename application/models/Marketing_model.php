<?php
class Marketing_model extends CI_Model {

    // public function get_popup_data($site_name) {
    //     $this->db->select('marketing_pop.redirect_url');
    //     $this->db->from('marketing_pop');
    //     $this->db->join('web_sites', 'web_sites.id = marketing_pop.site_id');
    //     $this->db->where('web_sites.name', $site_name);
    //     $this->db->where('marketing_pop.is_active', 1);
    //     $query = $this->db->get();
    //     return $query->row_array();
    // }

     public function get_popup_data($site_name) {
        $this->db->select('marketing_pop.redirect_url, marketing_pop.site_id');
        $this->db->from('marketing_pop');
        $this->db->join('web_sites', 'web_sites.id = marketing_pop.site_id');
        $this->db->where('web_sites.name', $site_name);
        $this->db->where('marketing_pop.is_active', 1);
        $query = $this->db->get();
        return $query->row_array();
    }
}

