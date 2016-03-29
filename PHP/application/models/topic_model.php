<?php
Class Topic_model extends CI_Model{
    
    public function __construct() 
    {
        parent::__construct();
    }

    public function gets()
    {
        //echo 'test';
        return $this->db->count_all_results('dbnm');
        //return $this->db->query('SELECT * FROM dbnm')->result();
        //return $this->db->get_where('dbnm',array('id'=>$topic_id))->result();
    }

    public function get($topic_id)
    {
        return $this->db->get_where('dbnm',array('Nname'=>$topic_id))->result();
    }
}