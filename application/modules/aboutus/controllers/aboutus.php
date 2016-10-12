<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class aboutus extends MX_Controller
{
    var $data;
    
    public Function __construct() {
        parent::__construct();
        $data = "";
    }
    
    public function index()
    {
        $this->data['title'] = 'About Us';
        $this->data['subview'] = "index";
        $this->load->module("template");
        $this->template->public_one_col($this->data);
    }
    
}
