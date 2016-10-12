<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends MX_Controller {

    var $data;

    public function __construct() {
        parent::__construct();

        $this->data = '';
        $this->load->module('auth');
        $this->load->module('template');
        $this->load->model('products/products_m');
    }

    public function index() {
        $this->db->limit(12, 0);
//          $prod=$this->products_m->get_by();
        $this->data['products'] = $this->products_m->get_price(array('page_control' => 1, 'status' => 1));
$new_arrivals = new $this->products_m;
        $this->db->limit(4, 0);
        $this->data['newarrivals'] = $new_arrivals->get_price(array('page_control' => 1, 'page_control' => 2, 'status' => 1));
        $this->db->order_by('viewed', 'asce');
        $this->db->limit(4, 0);
//         $prodt= $this->products_m->get_by();
        $this->data['trending'] = $this->products_m->get_price(array('status' => 1));
        $this->data['title'] = 'Home';
        $this->data['subview'] = 'home';
        $this->data['module'] = 'home';
        $this->template->public_one_col($this->data);
//        $this->load->view('home', $this->data);
    }

}
