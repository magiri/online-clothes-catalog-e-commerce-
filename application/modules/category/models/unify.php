<?php

class unify extends MY_Model {

    protected $_table_name = 'category';
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
        );
    }
    public function get_new() {

        $category = new stdClass();
        $category->id = '';
        $category->name = 'this is my test';
        $category->description = ' Driven by heartbreak, Love, Lost dreams and Passion for Art I picked up 
        a brush. One Drop of paint at time, Numerous Stains on my clothes sleepless 
        night Paint smelling house One canvas after another i painted all my creativity,
        pain, the beauty around me and other things. Still painting...........';
        $category->meta_title = 'if only it could work';
        $category->meta_description = 'life is Better';
        $category->meta_keyword = '';
        $category->category_id = '';
        $category->image = 'image';
        $category->parent_id = '';
        $category->top = '';
        $category->column = '';
        $category->sort_order = '';
        $category->status = '';
        $category->date_added = '';
        $category->date_modified = '';
      
        return $category;
    }

// `category_id`, `language_id`, `name`, `description`, `meta_title`, `metaription`, `meta_keyword`
}
