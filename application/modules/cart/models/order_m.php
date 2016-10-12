<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class order_m extends MY_Model {

    protected $_table_name = 'fn_order';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';
  

    public function __construct() {
        parent::__construct();
    }
 public function rules() {
        return $rules = array(
            'customer_name' => array(
                'field' => 'customer_name',
                'label' => 'Name',
                'rules' => 'required|trim|xss_clean'
            ),
            'comment' => array(
                'field' => 'comment',
                'label' => 'comment',
                'rules' => 'trim|xss_clean'
            ),
            'email' => array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|xss_clean'
            ),
            'telephone' => array(
                'field' => 'telephone',
                'label' => 'telephone',
                'rules' => 'trim|required|xss_clean'
            ),
        );
    }
    public function get_new() {
        $order = new stdClass();
        $order->id = '';
        $order->invoice_no = '';
        $order->invoice_prefix = '';
        $order->customer_id =$this->session->userdata('user_id');
        $order->customer_group_id = 4;
        $order->customer_name = $this->session->userdata('username');
        $order->email = $this->session->userdata('email');
        $order->telephone = '';
        $order->custom_field = '';
        $order->comment = '';
        $order->total = '';
        $order->order_status_id = '';
        $order->commission = '';
        $order->ip = $this->session->userdata('ip_address');
        $order->date_added = '';
        $order->date_modified = '';
   

        return $order;
    }

}
