<?php

class discounts_m extends MY_Model {

    protected $_table_name = 'fn_product_discount';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';
  

    public function __construct() {
        parent::__construct();
    }
 public function rules() {
        return $rules = array(
            'price' => array(
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'required|trim|xss_clean'
            ),
            
        );
    }
    public function get_new() {
        $discount = new stdClass();
        $discount->id = '';
        $discount->product_id = '';
        $discount->quantity = '';
        $discount->priority = '';
        $discount->price = '';
        $discount->date_start = '';
        $discount->date_end = '';
        return $discount;
    }

}
//`id`, `product_id`, `customer_group_id`, `quantity`, `priority`, `price`, `date_start`, `date_end`