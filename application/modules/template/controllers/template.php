<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template extends MX_Controller
{
    
    function __construct() {
        parent::__construct();
     $this->load->module('auth');
       $this->session->set_userdata('last_page', current_url());
       
  
    }

    function public_two_col($data)
    {
        
        $this->load->view('public_two_col',$data);
        
    }
    
    function public_three_col($data)
    {
        
        $this->load->view('public_three_col',$data);
        
    }
    function public_one_col($data)
    {
        
     $this->load->view('public_one_col',$data);
//      var_dump($data);
    }
   
    function auth($view, $data=null, $render=false)
    {
       $this->load->view('components/headerfile'); 
       $this->load->view('auth/'.$view, $data, $render);
       
     $this->load->view('components/footerfile');

    }
   
    function admin($data)
    {
        $this->load->view('admin',$data);
    }
    function sidebar(){
        
    }
    
}
