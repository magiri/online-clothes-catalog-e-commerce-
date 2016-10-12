<?php

class web_vars extends MX_Controller {

    var $data;

    function __construct() {
        parent::__construct();
          $this->load->module('auth');
         if (!$this->auth->isadmin()){
            redirect('auth/login');
            exit();
        }
        $this->load->module('web_var_m');
        $this->form_validation->CI = & $this;
        $this->data = '';
       
    }

    public function index() {
        
    }

  

  
}
