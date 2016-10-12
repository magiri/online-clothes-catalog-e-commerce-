<?php

class uni_m extends MY_Model {

    protected $_table_name = '';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
//    protected $_order_by = '';
    protected $_timestamps = false;

    public function __construct() {
        parent::__construct();
    }

    public function setTable($table) {
        return $this->_table_name = $table;
    }

    public function flike($where = Array(), $single = FALSE) {
        $this->db->or_like($where);
        return $this->get(NULL, $single);
    }
 public function create_model($tableName,$primaryKey='id',$orderBy=''){

        $this->_table_name = $tableName;
        $this->_primary_key = $primaryKey;
        $this->_order_by = $orderBy;
        
    }
    
     public function get_new($keysArray)
    {
         
        $GeneralOperations = new stdClass();
        foreach($keysArray as $keyArray){
           $GeneralOperations->$keyArray='';
        }
        return $GeneralOperations;
        
    }
  
     function pagenate($url, $perpage, $all) {
        $this->load->library('pagination');

        $config['num_links'] = 8;
        $config['use_page_numbers'] = TRUE;
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '</div>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<div>';
        $config['last_tag_close'] = '</div>';
        $config['base_url'] = $url;
        $config['total_rows'] = $all;
        $config['per_page'] = $perpage;

        $this->pagination->initialize($config);
        $offset = $this->uri->segment($this->uri->total_segments(), 0);
        If ($offset > $all) {
            $offset = 0;
        }

        $this->data['offset_data'] = $offset;
        $this->db->limit($perpage, $offset);
        $this->data['pagination'] = $this->pagination->create_links();

        return $this->data['pagination'];
    }
    public function like($search) {
        
    }
}
