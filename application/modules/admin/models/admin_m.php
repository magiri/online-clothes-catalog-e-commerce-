<?php

class admin_m extends MY_Model {

    protected $_table_name = 'testimonial_enquiry';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';

    public function __construct() {
        parent::__construct();
    }

    public function rules() {
        return $rules = array(
            'name' => array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|trim|xss_clean'
            ),
            'message' => array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'trim|required|xss_clean'
            ),
        );
    }

    public function deleteall() {
        $data = $this->get();

        foreach ($data as $data) {
            parent::delete($data->id);
        }
    }

    public function get_new() {
        $testimonial = new stdClass();
        $testimonial->id = '';
        $testimonial->name = '';
        $testimonial->message = '';
        return $testimonial;
    }

}
