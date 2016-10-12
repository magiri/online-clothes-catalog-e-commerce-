<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class order_data_m extends MY_Model {

    protected $_table_name = 'fn_order_data';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';
  

    public function __construct() {
        parent::__construct();
    }

    public function get_new() {
        $order_data = new stdClass();
        $order_data->id = '';
        $order_data->order_id = '';
        $order_data->product_id = '';
        $order_data->quantity = '';
        $order_data->date = '';
       
 
   

        return $order_data;
    }

}










//      `order_data_id`, `product_id`, `quantity`, `date`