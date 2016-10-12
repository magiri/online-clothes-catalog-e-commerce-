<?php
 

class contacts_m extends MY_Model{
    
    
    protected $_table_name = 'contacts';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';
    public $rules= array(

        'formEmail' => array(
            'field'=>'formEmail',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email|xss_clean'
        ),
         'formName' => array(
            'field'=>'formName',
            'label' => 'Name',
            'rules' => 'trim|xss_clean|required'
        ),
        'formMessage' =>array(
            'field'=>'formMessage',
            'label' => 'Message',
            'rules' => 'trim|required|xss_clean'
        ),
        'formLocation' =>array(
            'field'=>'formLocation',
            'label' => 'Location',
            'rules' => 'trim|required|xss_clean'
        )
        );
    
    public $myrules = array(
        
        'first_email' => array(
            'field'=>'first_email',
            'label' => 'First Email',
            'rules' => 'trim|xss_clean'
        ),
        'second_email' => array(
            'field'=>'second_email',
            'label' => 'Second Email',
            'rules' => 'trim|xss_clean'
        ),
        'phone_numbers' => array(
            'field'=>'phone_numbers',
            'label' => 'Phone Numbers',
            'rules' => 'trim|xss_clean'
        ),
        'fax' => array(
            'field'=>'fax',
            'label' => 'Fax',
            'rules' => 'trim|xss_clean'
        ),
         
    );
    
    
    public function __construct() {
        parent::__construct();
    }
    
    
     public function get_new()
    {
        $contacts = new stdClass();
        $contacts->id = '';
        $contacts->name = '';
        $contacts->first_email = '';
        $contacts->second_email = '';
        $contacts->phone_numbers = '';
        $contacts->location = '';
        return $contacts;
    }
}
