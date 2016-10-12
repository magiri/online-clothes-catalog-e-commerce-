<?php

class admin extends MX_Controller {

    var $data;

    function __construct() {
        parent::__construct();
        //modules::run('auth');
        $this->load->module('auth');
        $this->load->model('admin_m');
        $this->form_validation->CI = & $this;
        $this->data = '';
        $this->data['title'] = "Admin";
        if (!$this->auth->isadmin()){
            redirect('auth/login');
        }
    }

    public function index(){
         $this->data['subview'] = 'admin/index';
        $this->load->view('_admin_main_layout', $this->data);
    }
    


}
