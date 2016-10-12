<?php
class edit_m extends MY_Model
{
    
    protected $_table_name = 'being_edited';
     protected $_primary_key = 'id';
    protected $_order_by = 'id desc';
      /*implement the mail callbck function*/
    
    function __construct() {
        parent::__construct();
        /*deals with data from tenants table*/
    }
    
    function get_new()
    {
        $data = new stdClass();
        
        $data->id='';
        $data->data ='';
        $data->date ='';
       
       
        return $data;
    }
    
}


