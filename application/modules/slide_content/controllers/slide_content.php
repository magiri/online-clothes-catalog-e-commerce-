<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class slide_content extends MX_Controller {

    var $data;

    function __construct() {
        parent::__construct();
        $this->load->model('slide_content_m');
        $this->data = '';
    }

    public function get($id = NULL, $single = false) {
        return $this->slide_content_m->get($id, $single);
    }

    public function get_by($where, $single = false) {
        return $this->slide_content_m->get_by($where, $single);
    }

//    public function gt($slug) {
//        $data['title'] = $slug;
//        $data['carItems'] = $this->slide_content_m->get_by(array('slug' => $slug, 'blocked !=' => 1,'is_deleted'=>0), true);
//        $data['subview'] = 'index';
//        $this->load->module('template');
//        $this->template->public_two_col($data);
//    }
//
//    public function carItemsall() {
//        /*         * ****************************pagination logic start here*************************** */
//
//        if ($this->uri->segment(3) < 0) {     //ensure the offset number is not less than data availabale in database
//            redirect('carItems/carItemsall', 'location', '301');
//        }
//
//        $perpage = 10;
//        $count = $this->db->where(array('blocked'=>0,'is_deleted'=>0,'pubdate <=' => date('y-m-d')))->from('carItems')->count_all_results();
//
//        if ($this->uri->segment(3) > $count) {      //ensure the offset number is not greater than data availabale in database
//            redirect('carItems/carItemsall', 'location', '301');
//        }
//
//        if ($count > $perpage) { /* if data greater than per page then set up pagination */
//
//            /* pagination configs */
//            $config['per_page'] = $perpage;
//            $config['uri_segment'] = 3;
//            $config['total_rows'] = $count;
//            $config['base_url'] = site_url($this->uri->segment(1) . '/' . 'carItemsall' . '/');
//
//            $this->pagination->initialize($config);
//            $this->data['pagination'] = $this->pagination->create_links();
//            $offset = $this->uri->segment(3);
//
//            /* additional data */
//            $this->data['offset_data'] = $offset;
//        } else {
//            $offset = 0;
//            $this->data['pagination'] = '';
//        }
//
//        /* fetch courses */
//        $this->db->limit($perpage, $offset);
//        $this->db->where(array('pubdate <=' => date('y-m-d'),'blocked' => 0,'is_deleted'=>0));
//        $this->data['carItemsall'] = $this->get();
//
//        /* amount of data available according to uri segment(3) or just request */
//        if (count($this->data['carItemsall'])) {
//            $this->data['noOfcarItemsall'] = $count;
//        } else {
//            $this->data['noOfcarItemsall'] = 0;
//        }
//
//        /*         * ***********pagination logic ends here************************** */
//
//        $this->data['title'] = 'All News';
//        $this->data['subview'] = 'carItemsallsum';
//        $this->load->module('template');
//        $this->template->public_two_col($this->data);
//    }

    public function _upload_slider() {
        return $this->slide_content_m->_upload_slider();
    }

//    public function get_DropdownArray(){
//        return $this->slide_content_m->get_DropdownArray();
//    }

    public function _delete_previous($img_url = null) {
       return $this->slide_content_m->_delete_previous($img_url);
    }

    public function get_new() {
        return $this->slide_content_m->get_new();
    }

//    public function get_recent($limit = 3) {
//        return $this->slide_content_m->get_recent($limit);
//    }

    public function _rules() {
        return $this->slide_content_m->rules;
    }

    public function _array_in_post($fields) {
        return $this->slide_content_m->array_in_post($fields);
    }

    public function _save($data, $id = null) {
        $this->slide_content_m->save($data, $id);
    }

    public function _delete($id = NULL) {
        $this->slide_content_m->_delete($id);
    }

    public function _deleteall() {
        $this->slide_content_m->_deleteall();
    }

    public function countAllResults() {
        return $this->db->from('slide_content')->count_all_results();
    }

}
