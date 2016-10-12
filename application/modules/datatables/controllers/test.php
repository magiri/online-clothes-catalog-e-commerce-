<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class test extends MX_Controller {

 
    var $data;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->module('datatables');
        $datatables = new datatables;
        
        $datatables->set_table('fn_product');
        
     $datatables->set_display_cols(array(
         'name'=>'Name',
         'description'=>'Desc', 
         'category_id'=> 'Cat',
         
     ));
     $datatables->set_edit_field('id');
     $datatables->set_edit_links(array(
         'edit'=>'/products/admin/edit/',
         'delete'=>'products/admin/delete_product/',
         'Make Home'=>'products/admin/make_home/',
       
         
     ));
             
     
     $datatables->all_data_output();
   echo $datatables->output();
    }

}
