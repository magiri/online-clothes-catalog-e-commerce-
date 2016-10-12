<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends MX_Controller {

    var $data;
    var $noperpage = 20;

    public function __construct() {
        parent::__construct();
        $this->load->module('auth');
        if (!$this->auth->isadmin()) {
            redirect('auth/login', 'reflesh');
            exit();
        }
        $this->data = '';
        //$this->load->module('template');
        $this->load->model('price_list_m');
        $this->load->model('category/unify');
        $this->load->library('form_validation');
        $this->data['message'] = '';
        $this->data['allresults'] = 2;
        $this->data['title'] = 'Admin';
    }

    public function index($offset = NULL) {
        if ($offset == NULL) {
            $offset = 0;
        }

        $this->data['allresults'] = $this->price_list_m->countAllResults();
        $this->data['parent'] = $this->unify->get();
        $this->pagenate($offset);
        $this->db->limit($this->noperpage, $offset);
        $this->data['prices'] = $this->price_list_m->get();
        $this->data['subview'] = 'admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function pagenate($currentoffset) {

        $this->data['pages'] = ceil($this->data['allresults'] / $this->noperpage);
        if (!isset($currentoffset)) {
            $currentoffset = 0;
            $currentoffsetn = $this->noperpage;
            $currentoffsetp = 0;
        } elseif ($currentoffset == 0) {
            $currentoffsetn = $currentoffset + $this->noperpage;
            $currentoffsetp = 0;
        } elseif ($currentoffset >= $this->noperpage) {
            $currentoffsetn = $currentoffset + $this->noperpage;
            $currentoffsetp = $currentoffset - $this->noperpage;
        }
        $this->data['cpage'] = $currentoffsetn / $this->noperpage;
        $this->data['currentoffset'] = $currentoffset;
        $this->data['currentoffsetn'] = $currentoffsetn;
        $this->data['currentoffsetp'] = $currentoffsetp;
//      return $currentoffset;
    }

    public function edit() {
      
        $rules = $this->price_list_m->rules();
        $this->form_validation->set_rules($rules);
        if ($this->input->post('delete')){
            $this->delete();
        }else{
        if ($this->form_validation->run()) {
            $frominput = array('id', 'category_id', 'size', 'price');
            $price = $this->price_list_m->array_in_post($frominput);
            $exist = $this->db->where(array('category_id' => $price['category_id'], 'size' => $price['size']))->from('price_list')->count_all_results();
            if ($exist == 0) {
                if ($price['id'] == '') {

                    $this->price_list_m->save($price);
                } elseif ($price['id'] != '') {

                    $this->price_list_m->save($price, $price['id']);
                } else {
                    $this->data['message'] = 'Price for That Category and Size Exists';
                }
            } elseif ($exist != 0 and $price['id'] != '') {
                $editpriceonly['price'] = $price['price'];
                $this->price_list_m->save($editpriceonly, $price['id']);
            }
            redirect($this->agent->referrer(), 'refresh');
        } else {
           redirect($this->agent->referrer(), 'refresh');
        }
        }
    }

    public function databuild($id = NULL) {
        $frompost = array('name', 'description', 'parent_id');
        $category = $this->unify->array_in_post($frompost);
        if ($id == NULL) {
            $category['date_added'] = date('y:m:d h:i:s');
        } else {
            $category['date_added'] = $this->input->post('date_added');
        }
        $image_url = $this->images->_upload_image();
        if ($image_url == FALSE) {
            $category['image'] = $this->input->post('image');
        } else {
            $category['image'] = $image_url['img_url'];
        }
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

    public function sort($catid = NULL, $offset = NULL) {
        if ($offset == NULL) {
            $offset = 0;
        }
        $this->data['parent'] = $this->unify->get();
        $this->data['allresults'] = $this->price_list_m->countAllResults();
        $this->data['parent'] = $this->unify->get_by(array('id' => $catid));
        $this->pagenate($offset);
//        $this->db->limit($this->noperpage, $offset);
        $this->data['prices'] = $this->price_list_m->get_by(array('category_id' => $catid));
        $this->data['subview'] = 'admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }
    public function delete() {
        
       $this->price_list_m->delete($this->input->post('id'));
redirect('price_list/admin', 'reflesh');
    }
}