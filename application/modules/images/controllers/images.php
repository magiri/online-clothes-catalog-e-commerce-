<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class images extends MX_Controller {

    var $data;
    var $image_crud;

    public function __construct() {
        parent::__construct();
$this->load->module('auth');

        if (!$this->auth->isadmin()) {
            redirect('auth/login', 'reflesh');
            exit();
        }
        /* Standard Libraries */
        $this->load->database();
        /* ------------------ */

//        $this->load->helper('url'); //Just for the examples, this is not required thought for the library
//        $this->load->library('image_CRUD');
        $this->data = '';
        $this->image_crud = new image_CRUD();
    }

    public function output($output = null) {

//        var_dump($output);
        $this->data['name'] = 'images';
        $this->load->view('admin/components/header');
        $this->load->view('index', $output);
        $this->load->view('admin/components/footer');
    }

    public function index() {

//        $this->output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
        $this->image_manager();
    }

    public function image_manager() {



        $this->image_crud->set_primary_key_field('id');
        $this->image_crud->set_url_field('url');
        $this->image_crud->set_title_field('title');
//       $this->image_crud ->set_relation_field('category_id');
        $this->image_crud->set_table('fn_images')
                ->set_ordering_field('priority')
                ->set_image_path('assets/filesManagement/album/uploads');


        $output = $this->image_crud->render();
        $this->output($output);
    }

    public function photo_gallery() {
//    $this->image_crud = new image_CRUD();

        $this->image_crud->unset_upload();
        $this->image_crud->unset_delete();

        $this->image_crud->set_primary_key_field('id');
        $this->image_crud->set_url_field('url');
        $this->image_crud->set_table('fn_images')
                ->set_image_path('assets/filesManagement/album/uploads');

        $output = $this->image_crud->render();
//   $output->prod_id = $pid;
        $this->output($output);
    }

    public function image_sel() {

$this->load->model('admin/edit_m');
$pid = $this->edit_m->get(2)->data;

        $this->image_crud->set_prod_id($pid);
         $this->image_crud->set_primary_key_field('id');
        $this->image_crud->set_url_field('url');
        $this->image_crud->set_title_field('title');
//       $this->image_crud ->set_relation_field('category_id');
        $this->image_crud->set_table('fn_images')
                ->set_ordering_field('priority')
                ->set_image_path('assets/filesManagement/album/uploads');


        $output = $this->image_crud->render();
        $this->output($output);
    }

}