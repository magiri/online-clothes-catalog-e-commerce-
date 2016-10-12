<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contacts extends MX_Controller
{
    var $data;
    
    public Function __construct() {
        parent::__construct();
        $this->data = "";
        $this->load->model('contacts_m');
        $this->load->module('mail');
        $this->data['title'] = 'Contact';
    }
    
    public function index()
    {
        $this->data['title'] = 'Contact Us';
        $this->data['subview'] = "index";
        $this->load->module("template");
        $this->template->public_one_col($this->data);
    }
    
    public function contactsmail(){
         $rules = $this->contacts_m->rules;
         $this->form_validation->set_rules($rules);
                  if($this->form_validation->run() == true){
             $data = $this->contacts_m->array_in_post(array('formName','formEmail','formMessage','formLocation'));
            // echo var_dump($data);
             $message = '<b>Location:</b> '.$data['formLocation'] .'<br/><br/><b>Message:<b><br/>' .$data['formMessage'];
             $mailstatus = $this->mail->sendmail($data['formEmail'],$data['formName'],$message,'Libertyhomes Contacts',array('0'=>'biusamuel8@gmail.com','1'=>'info@libertyhomes.co.ke'));
            /* if ($mailstatus){
                 log_error('successfully sent mail');
             }else{
                 log_error('failed to send mail');
             } */
             //redirect();
         }
         
       $this->data['title'] = 'Contact Us';
        $this->data['subview'] = "index";
        $this->load->module("template");
        $this->template->public_one_col($this->data);
    }
    
    
     public function get($id = NULL,$single = false)
    {
        return $this->contacts_m->get($id,$single);
           }    
    public function get_by($where,$single=false)
    {   
        return $this->contacts_m->get_by($where,$single);
        
    }
    
    public function get_new()
    {
        return $this->contacts_m->get_new();
    }
    
    public function _myrules()
    {
        return $this->contacts_m->myrules;
    }
    
    public function _array_in_post($fields)
    {
        return $this->contacts_m->array_in_post($fields);
    }
    
    public function _save($data,$id = null)
    {
       $this->contacts_m->save($data,$id);
    }
    
    
    public function countAllResults()
    {
        return $this->db->count_all_results('contacts');
    }
    
    
}
