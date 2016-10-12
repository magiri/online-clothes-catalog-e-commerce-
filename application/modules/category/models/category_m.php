<?php

class category_m extends MY_Model {

    protected $_table_name = 'fn_category';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';

    public function __construct() {
        parent::__construct();
    }

    public function rules() {
        return $rules = array(
            'delete28' => array(
                'field' => 'delete',
                'label' => '',
                'rules' => 'required'
            )
        );
    }

    public function deleteall() {
        $data = $this->get();

        foreach ($data as $data) {
            parent::delete($data->id);
        }
    }

    public function get_new() {
         array('category_id' => '25','image' => '','parent_id' => '0','top' => '1',
             'column' => '1','sort_order' => '3','status' => '1','date_added' => '2009-01-31 01:04:25',
             'date_modified' => '2011-05-30 12:14:55');
        $category = new stdClass();
        $category->category_id = '';
        $category->image = '';
        $category->parent_id = '';
        $category->top = '';
        $category->column = '';
        $category->sort_order = '';
        $category->status = '';
        $category->date_added = '';
        $category->date_modified = '';
        return $category;
    }

}
