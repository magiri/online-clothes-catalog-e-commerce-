<?php

class category_desc_m extends MY_Model {

    protected $_table_name = 'fn_category_description';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';

    public function __construct() {
        parent::__construct();
    }

    public function rules() {
        return $rules = array(
            'name' => array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|trim|xss_clean'
            ),
            'description' => array(
                'field' => 'description',
                'label' => 'description',
                'rules' => 'trim|required|xss_clean'
            ),
            'meta_title' => array(
                'field' => 'meta_title',
                'label' => 'meta_title',
                'rules' => 'trim|required|xss_clean'
            ),
            'meta_description' => array(
                'field' => 'meta_description',
                'label' => 'meta description',
                'rules' => 'trim|xss_clean'
            ),
            'meta_keyword' => array(
                'field' => 'meta_keyword',
                'label' => 'meta keyword',
                'rules' => 'trim|xss_clean'
            ),
        );
    }

    public function deleteall() {
        $data = $this->get();

        foreach ($data as $data) {
            parent::delete($data->id);
        }
    }

    public function get_new() {
      
        $category_desc = new stdClass();
        $category_desc->id = '';
        $category_desc->name = '';
        $category_desc->description = '';
        $category_desc->meta_title = '';
        $category_desc->meta_description = '';
        $category_desc->meta_keyword = '';
        return $category_desc;
    }
// `category_id`, `language_id`, `name`, `description`, `meta_title`, `meta_description`, `meta_keyword`
}
