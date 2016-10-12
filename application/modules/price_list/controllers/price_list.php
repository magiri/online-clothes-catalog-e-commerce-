<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class price_list extends MX_Controller {

    var $data;

    public function __construct() {
        parent::__construct();

        $this->data = '';
        $this->load->module('template');
    }

    public function index() {
        redirect('price_list/admin');
    }

}
