<?php

class price_list_m extends MY_Model {

    protected $_table_name = 'price_list';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';

    public function __construct() {
        parent::__construct();
    }
 public function rules() {
        return $rules = array(
            'category_id' => array(
                'field' => 'category_id',
                'label' => 'Category',
                'rules' => 'required|trim|xss_clean'
            ),
            'size' => array(
                'field' => 'size',
                'label' => 'size',
                'rules' => 'trim|required|xss_clean'
            ),
            'price' => array(
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'trim|required|xss_clean|numeric'
            ),
        );
    }
    public function get_new() {

        $pricelist = new stdClass();
        $pricelist->id = '';
        $pricelist->category_id = '';
        $pricelist->size = '';
        $pricelist->price = 0.50;
       
      
        return $pricelist;
    }

}
