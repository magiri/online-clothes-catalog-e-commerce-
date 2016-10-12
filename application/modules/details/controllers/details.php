<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class details extends MX_Controller {

    var $data;

    public function __construct() {
        parent::__construct();

        $this->data = '';
        $this->load->module('template');
        $this->load->model('products/products_m');
    }

    public function index($id) {
        $this->data['product']= $this->products_m->get($id);
        $this->data['title'] = 'Home';
        $this->data['subview'] = 'details';
        $this->data['module'] = 'details';
        $this->template->public_one_col($this->data);
//        $this->load->view('details', $this->data);
    }
    
}
