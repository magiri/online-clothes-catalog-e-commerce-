<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class category extends MX_Controller {

    var $data;

    public function __construct() {
        parent::__construct();

        $this->data = '';
        $this->load->module('template');
    }

    public function index() {
        redirect('category/admin');
    }

}
