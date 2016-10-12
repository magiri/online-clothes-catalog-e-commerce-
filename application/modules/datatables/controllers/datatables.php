<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class datatables extends MX_Controller {

    public $model = null;
    var $data;

    public function __construct() {
        parent::__construct();

        $ci = &get_instance();

        $this->load->model('uni');

        $this->model = new uni;
        $this->data = '';
        $this->data['field'] = 'id';
    }

    public function set_display_cols($display_cols) {
        $this->data['display_cols'] = $display_cols;
    }

    public function set_table($table) {
        $this->model->create_model($table);
    }

    public function set_edit_field($field) {
        $this->data['field'] = $field;
    }

    public function set_edit_links($links) {
        $this->data['links'] = $links;
    }

    public function all_data_output() {

        $this->data['rows'] = $this->model->get();
    }

    public function select_data_output($where) {

        $this->data['rows'] = $this->model->get_by($where);
    }

    public function set_id_name($id_name) {
        $this->data['id_name'] = $id_name;
    }

    public function output() {

      return $this->load->view('table', $this->data, TRUE);
       
    }

}
