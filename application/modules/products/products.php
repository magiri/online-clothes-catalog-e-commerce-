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
        $this->data['title'] = "Products";
    }

    public function index() {

        /*         * ****************************pagination logic start here*************************** */

        if ($this->uri->segment(3) < 0) {     //ensure the offset number is not less than data availabale in database
            redirect('admin/contact', 'location', '301');
        }

        $perpage = 12;
        $count = $this->products_m->countAllResults();

//        if ($this->uri->segment(3) > $count) {      //ensure the offset number is not greater than data availabale in database
//            redirect('products', 'location', '301');
//        }

        if ($count > $perpage) { /* if data greater than per page then set up pagination */

            /* pagination configs */
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 3;
            $config['total_rows'] = $count;
            $config['base_url'] = site_url('products/index');

            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $offset = $this->uri->segment(3);

            /* additional data */
            $this->data['offset_data'] = $offset;
        } else {
            $offset = 0;
            $this->data['pagination'] = '';
        }

        $this->db->limit($perpage, $offset);
        $this->data['products'] = $this->products_m->get_price(array('status' => 1));


        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
        // $this->load->view('products', $this->data);
    }

    public function new_arrivals() {

        /*         * ****************************pagination logic start here*************************** */

        if ($this->uri->segment(3) < 0) {     //ensure the offset number is not less than data availabale in database
            redirect('admin/contact', 'location', '301');
        }

        $perpage = 12;
        $count = $this->db->where(array('page_control' => 1, 'page_control' => 2))->from('fn_product')->count_all_results();

//        if ($this->uri->segment(3) > $count) {      //ensure the offset number is not greater than data availabale in database
//            redirect('products', 'location', '301');
//        }

        if ($count > $perpage) { /* if data greater than per page then set up pagination */

            /* pagination configs */
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 3;
            $config['total_rows'] = $count;
            $config['base_url'] = site_url('products/new_arrivals');

            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $offset = $this->uri->segment(3);

            /* additional data */
            $this->data['offset_data'] = $offset;
        } else {
            $offset = 0;
            $this->data['pagination'] = '';
        }

        $this->db->limit($perpage, $offset);
        $this->data['products'] = $this->products_m->get_price(array('page_control' => 1, 'page_control' => 2, 'status' => 1));


        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
        // $this->load->view('products', $this->data);
    }

    public function trends() {

        /*         * ****************************pagination logic start here*************************** */

        if ($this->uri->segment(3) < 0) {     //ensure the offset number is not less than data availabale in database
            redirect('admin/contact', 'location', '301');
        }

        $perpage = 12;
        $count = $this->db->where(array('status' => 1))->from('fn_product')->count_all_results();

//        if ($this->uri->segment(3) > $count) {      //ensure the offset number is not greater than data availabale in database
//            redirect('products', 'location', '301');
//        }

        if ($count > $perpage) { /* if data greater than per page then set up pagination */

            /* pagination configs */
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 3;
            $config['total_rows'] = $count;
            $config['base_url'] = site_url('products/trends');

            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $offset = $this->uri->segment(3);

            /* additional data */
            $this->data['offset_data'] = $offset;
        } else {
            $offset = 0;
            $this->data['pagination'] = '';
        }
        $this->db->order_by('viewed', 'asce');
        $this->db->limit($perpage, $offset);
        $this->data['products'] = $this->products_m->get_price(array('status' => 1));
        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
        // $this->load->view('products', $this->data);
    }

    public function sort($catid = NULL) {
//    if ($catid==0 or $catid==NULL){
//        redirect('products/index','reflesh');
//    }


        $perpage = 2;

        $count = $this->db->where(array('category_id' => $catid))->from('fn_product')->count_all_results();

        if ($count > $perpage) { /* if data greater than per page then set up pagination */

            /* pagination configs */
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 4;
            $config['total_rows'] = $count;
            $config['base_url'] = site_url('products/sort/' . $catid . '/');

            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $offset = $this->uri->segment(4);

            /* additional data */
            $this->data['offset_data'] = $offset;
        } else {
            $offset = 0;
            $this->data['pagination'] = '';
        }

        $this->db->limit($perpage, $offset);
        $this->data['products'] = $this->products_m->get_price(array('category_id' => $catid));
        //   var_dump($this->data['products'] );

        $this->data['subview'] = 'products';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
    }

    public function details($slug) {
        $this->data['product'] = $this->products_m->get_price(array('slug' => $slug), TRUE);
        $this->db->limit(2, 0);
        $this->data['similar'] = $this->products_m->get_price(array('category_id' => $this->data['product']->category_id));
        $this->load->model('price_list/price_list_m');
        $this->data['sizeandpice'] = $this->price_list_m->get_by(array('category_id' => $this->data['product']->category_id));
        $this->data['subview'] = 'details';
        $this->data['module'] = 'products';
        $this->template->public_one_col($this->data);
    }

    function pagenate($url, $perpage, $all) {
        $this->load->library('pagination');

        $config['base_url'] = $url;
        $config['total_rows'] = $all;
        $config['per_page'] = $perpage;

        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }

}
