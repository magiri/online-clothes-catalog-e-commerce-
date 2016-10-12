<?php
class accounts extends MY_Model
{
    
    protected $_table_name = 'adminlogin';
    protected $_order_by = 'id desc';
    public $rules_admin = array(

        'email' => array(
            'field'=>'email',
            'label' => 'Email',
            'rules' => 'required|trim|callback__unique_email|valid_email|xss_clean'
        ),
         'password' => array(
            'field'=>'password',
            'label' => 'Password',
            'rules' => 'trim|alpha_numeric|matches[passwordcnf]|min_length[5]|max_length[13]|xss_clean'
        ),
        'passwordcnf' =>array(
            'field'=>'passwordcnf',
            'label' => 'Password Confirmation',
            'rules' => 'trim|alpha_numeric|matches[password]|min_length[5]|max_length[13]|xss_clean'
        ),
        'first_name' =>array(
            'field'=>'first_name',
            'label' => 'First Name',
            'rules' => 'trim|alpha_numeric|required|xss_clean'
        ),
        'last_name' =>array(
            'field'=>'last_name',
            'label' => 'Last Name',
            'rules' => 'trim|alpha_numeric|required|xss_clean'
        )
         
        );
    
    
    /*implement the mail callbck function*/
    
    function __construct() {
        parent::__construct();
        /*deals with data from tenants table*/
    }
    
    function get_new()
    {
        $data = new stdClass();
        
        $data->id='';
        $data->first_name ='';
        $data->last_name ='';
        $data->email ='';
       
        return $data;
    }
    
}


