<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class products extends MX_Controller {

    var $data;

    public function __construct() {
        parent::__construct();

        $this->data = '';
        $this->load->module('template');
        $this->load->model('products_m');
        $this->load->model('universal/uni_m');
        $this->data['title'] = "Products";
         
    }

    public function index() {

        /*         * ****************************pagination logic start here*************************** */
        $this->pagenate(site_url('products/index'), 12, count($this->products_m->get_price(array('status' => 1))));
        $products_m = new $this->products_m;
        $this->data['products'] = $products_m->get_price(array('status' => 1));

        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
    }

    public function new_arrivals() {

        $this->pagenate(site_url('products/index'), 12, count($this->products_m->get_price(array('page_control' => 1, 'page_control' => 2, 'status' => 1))));
        $products_m = new $this->products_m;
        $this->data['products'] = $products_m->get_price(array('page_control' => 1, 'page_control' => 2, 'status' => 1));


        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
        // $this->load->view('products', $this->data);
    }

    public function trends() {


        $this->db->order_by('viewed', 'asce');
        $this->pagenate(site_url('products/trends/'), 12, count($this->products_m->get_price(array('status' => 1))));
        $products_model = new $this->products_m;
        $this->data['products'] = $products_model->get_price(array('status' => 1));

        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
        // $this->load->view('products', $this->data);
    }

    public function sort($catid = '0') {

        if ($catid == 0) {
            $this->pagenate(site_url('products/product_specific_cat/0/'), 12, count($this->products_m->get_price(array('status' => 1))));
            $products_model = new $this->products_m;
            $this->data['products'] = $products_model->get_price(array('status' => 1));
        } else {
            $perpage = 12;
            $count = count($this->products_m->get_price(array('category_id' => $catid)));
            $this->pagenate(site_url('products/product_specific_cat/' . $catid . '/'), $perpage, $count);
            $products_model = new $this->products_m;
            $this->data['products'] = $products_model->get_price(array('status' => 1));
        }
        echo( $this->load->view('dynamic', $this->data));
    }

    public function product_specific_cat($catid = '0') {
        if ($catid == 0) {
            $this->pagenate(site_url('products/product_specific_cat/0/'), 12, count($this->products_m->get_price(array('status' => 1))));
            $products_m = new $this->products_m;
            $this->data['products'] = $products_m->get_price(array('status' => 1));
        } else {
            $perpage = 12;
            $this->pagenate(site_url('products/product_specific_cat/' . $catid . '/'), $perpage, count($this->products_m->get_price(array('category_id' => $catid))));
            $products_m = new $this->products_m;
            $this->data['products'] = $products_m->get_price(array('category_id' => $catid));
        }
        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
    }

    public function details($slug) {
        $this->data['products'] = $this->products_m->get_price(array('slug' => $slug), FALSE);

        if (count($this->data['products']) <= 0) {
            show_error("Product Not Found");
        }
        $this->db->limit(4, rand(0, 10));
        $this->data['similar'] = $this->products_m->get_price(array('contact_id' => $this->data['products'][0]->contact_id));
        $this->load->model('price_list/price_list_m');
        $this->data['sizeandpice'] = $this->price_list_m->get_by(array('category_id' => $this->data['products'][0]->category_id));
        $this->load->model('universal/uni_m');
        $cat_model = new $this->uni_m;
       $cat_model->create_model('category');
       $this->data['cat_name'] =$cat_model->get_by(array('id'=>$this->data['products'][0]->category_id),TRUE);
        $this->data['subview'] = 'details';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
    }

    function pagenate($url, $perpage, $all) {
        $this->load->library('pagination');

        $config['num_links'] = 8;
        $config['use_page_numbers'] = TRUE;
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '</div>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<div>';
        $config['last_tag_close'] = '</div>';
        $config['base_url'] = $url;
        $config['total_rows'] = $all;
        $config['per_page'] = $perpage;

        $this->pagination->initialize($config);
        $offset = $this->uri->segment($this->uri->total_segments(), 0);
        If ($offset > $all) {
            $offset = 0;
        }

        $this->data['offset_data'] = $offset;
        $this->db->limit($perpage, $offset);
        $this->data['pagination'] = $this->pagination->create_links();

        return $this->data['pagination'];
    }

    public function test() {
        $model = $this->uni_m;
        $model->setTable('fn_product');


        var_dump($model->join('contacts', 'fn_product.contact_id = contacts.id'));
    }

}
