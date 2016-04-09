<?php

class Ide_model extends CI_Model {

    /**
     * @desc load both db
     */
    function __construct() {
        parent::__Construct();
        $this->db = $this->load->database('default', TRUE, TRUE);
        
    }

    function get_details($q_no) {
        $query=$this->db->get_where('questions',array('q_no'=>$q_no));
        return $query->result_array();
    }
}