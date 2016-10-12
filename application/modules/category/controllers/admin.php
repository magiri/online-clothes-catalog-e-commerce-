<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends MX_Controller {

    var $data;

    public function __construct() {
        parent::__construct();
        $this->load->module('auth');
        if (!$this->auth->isadmin()) {
            redirect('auth/login', 'reflesh');
            exit();
        }
        $this->data = '';
        //$this->load->module('template');
        $this->load->model('unify');
        $this->load->module('images');
        $this->load->library('form_validation');
        $this->data['message'] = 'Select to delete as a group';
        $this->data['title'] = 'Admin';
    }

    public function index() {
        $this->data['subview'] = 'admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function edit($id = NULL) {
        if ($id <= 0) {
            $id = NULL;
        }
        $rules = $this->unify->rules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $data = $this->databuild($id);
            $this->unify->save($data, $id);
            $id2 = $this->db->insert_id();
            $this->data['message'] = '1 Record Was Saved ';
            redirect('category/admin/viewall');
        } elseif ($id > 0) {
            $this->data['message'] = 'Add New Category';
            $this->data['category'] = $this->unify->get($id);
        } elseif ($id <= 0) {
            $this->data['category'] = $this->unify->get_new();
            $this->data['message'] = 'Add New Category';
        }
        $this->data['parent'] = $this->unify->get_by(array('parent_id' => 0));
        $this->data['subview'] = 'edit';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function databuild($id = NULL) {
        $frompost = array('name', 'description', 'parent_id');
        $category = $this->unify->array_in_post($frompost);
        if ($id == NULL) {
            $category['date_added'] = date('y:m:d h:i:s');
        } else {
            $category['date_added'] = $this->input->post('date_added');
        }
//        $image_url = $this->images->_upload_image();
//        if ($image_url == FALSE) {
//            $category['image'] = $this->input->post('image');
//        } else {
//            $category['image'] = $image_url['img_url'];
//        }
        $category['id'] = $id;
        // $category['image'] = $this->images->_upload_image();
        //$category['parent_id'] = 0;
        $category['top'] = 0;
        $category['sort_order'] = 0;
        $category['status'] = 1;
        $category['meta_title'] = 'faith nits';
        $category['meta_description'] = 'faithnits';
        $category['meta_keyword'] = 'faith nits';
        $category['date_modified'] = date('y:m:d h:i:s');
        return $category;
    }

    public function databuild2($id2) {
        $frompost = array('name', 'description', 'meta_title', 'meta_description', 'meta_keyword');

        $category_desc = $this->unify->array_in_post($frompost);
        $category_desc['id'] = $id2;
        return $category_desc;
    }

    public function viewall() {
        $delete[] = '';
        $delete = $this->input->post();

        if (count($delete) > 1) {
            foreach ($delete as $record) {
                if ($record != 'Delete') {
                    $this->unify->delete($record);

                    //  var_dump($record);
                }
            }
            $this->data['message'] = count($delete) . ' Records were deleted ';
        } else {
            
        }
        $this->data['categories'] = $this->unify->get();
        $this->data['subview'] = 'admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

}
