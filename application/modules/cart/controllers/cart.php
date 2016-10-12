<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cart extends MX_Controller {

    var $data;

    public Function __construct() {
        parent::__construct();
        $this->data = "";
//        $this->flexi = new stdClass;
        $this->load->library('cart');
        $this->load->module('template');
        $this->load->model('products/products_m');
        $this->load->model('price_list/price_list_m');
    }

    public function index() {
//        redirect($this->agent->referrer());
    }

    public function add_to_cart($id, $size = NULL) {
        var_dump($size);
        var_dump($id);
        if (is_numeric($id)) {

            $data = $this->products_m->get($id);
            if (!isset($data->size)) {
                $data = $this->products_m->get_new();
            }

            if ($size == NULL || $size == 0) {
                $size = $data->size;
            }

            $price = $this->price_list_m->get_by(array('size' => $size, 'category_id' => $data->category_id), TRUE);

            if (!isset($price->price)) {
                $price = $this->price_list_m->get_new();
            }

            $cartdata = array(
                'id' => $data->id . '_' . $data->category_id . '_' . $data->size,
                'qty' => 1,
                'price' => $price->price,
                'name' => $data->name,
                'options' => array('size' => $data->size, 'color' => $data->color)
            );
            $cart = $this->cart->contents();
            $this->cart->insert($cartdata);
            foreach ($cart as $item) {
                if ($cartdata['id'] == $item['id']) {
                    $cartdata['rowid'] = $item['rowid'];
                    $cartdata['qty'] = $item['qty'] + 1;
                    $this->cart->update($cartdata);
                    break;
                } 
            }
        }
        echo $this->load->view('sidecart');
    }

    public function update_cart() {

        $data = $this->input->post();

        $this->cart->update($data);
        redirect($this->agent->referrer());
    }

    public function product() {

        $data = $this->input->post();

        $this->cart->update($data);
        // $this->save_order();
        redirect($this->agent->referrer());
    }

    public function empty_cart() {
        //  var_dump($this->session->all_userdata());
        $this->cart->destroy();
        redirect($this->agent->referrer(), 'refresh');
    }

    public function save_order() {
        $this->load->model('order_m');
        $this->load->model('order_data_m');
        $this->load->library('form_validation');

        $rules = $this->order_m->rules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $order['id'] = '';
            $order['invoice_no'] = '';
            $order['invoice_prefix'] = '';
            $order['customer_id'] = $this->session->userdata('user_id');
            $order['customer_group_id'] = 4;
            $order['customer_name'] = $this->input->post('customer_name');
            $order['email'] = $this->input->post('email');
            $order['telephone'] = '';
            $order['custom_field'] = '';
            $order['comment'] = $this->input->post('comment');
            $order['total'] = $this->cart->total();
            $order['order_status_id'] = 1;
            $order['commission'] = '';
            $order['ip'] = $this->session->userdata('ip_address');
            $order['date_added'] = date('y:d:m H:i:s');
            $order['date_modified'] = date('y:d:m H:i:s');
            $this->order_m->save($order);
            $id = $this->db->insert_id();
            foreach ($this->cart->contents() as $items) {
                $order_data['id'] = '';
                $order_data['order_id'] = $id;
                $order_data['product_id'] = $items['id'];
                $order_data['price'] = $items['price'];
                $order_data['quantity'] = $items['qty'];
                $order_data['date'] = date('y:d:m H:i:s');
                $this->order_data_m->save($order_data);
            }
            $this->empty_cart();
            redirect('cart/order_sucess', 'location', 301);
        } else {
            $this->data['orders'] = $this->order_m->get_new();
            $this->data['subview'] = 'enquire';
            $this->template->public_one_col($this->data);
        }
    }

    public function order_sucess() {
        $this->data['subview'] = 'success';
        $this->template->public_one_col($this->data);
    }

}
