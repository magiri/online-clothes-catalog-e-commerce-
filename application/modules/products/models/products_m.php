<?php

class products_m extends MY_Model {

    protected $_table_name = 'fn_product';
    protected $_primary_key = 'id';
    protected $_order_by = 'date_modified desc';

    public function __construct() {
          $this->db->join('contacts', 'fn_product.contact_id = contacts.id', 'inner');
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
        $product = new stdClass();
        $product->id = '0';
        $product->name = 'Sample Product';
        $product->description = 'Product Dec';
        $product->category_id = '0';
        $product->tag = '';
        $product->slug = '';
        $product->meta_title = '';
        $product->meta_description = '';
        $product->meta_keyword = '';
        $product->model = '';
        $product->location = '';
        $product->quantity = '';
        $product->stock_status_id = '';
        $product->image = 'assets/genimages/logo/logo.gif';
        $product->manufacturer_id = '';
        $product->delivery = '';
        $product->price_list_id = '90';
        $product->points = '';
        $product->tax_class_id = '';
        $product->date_available = '';
        $product->weight = '';
        $product->weight_class_id = '';
        $product->size = '28';
        $product->color = 'Blue';
        $product->height = '';
        $product->page_control = '';
        $product->subtract = '';
        $product->minimum = '';
        $product->sort_order = '';
        $product->status = '';
        $product->viewed = '';
        $product->date_added = date('y:m:d H:i:s');
        $product->date_modified = '';

        return $product;
    }

}

//$product['product_id']= '';
//        $product['name']= '';
//        $product['description']= '';
//        $product['tag']= '';
//        $product['meta_title']= '';
//        $product['meta_description']= '';
//        $product['meta_keyword']= '';
//        $product['model']= '';
//        $product['location']= '';
//        $product['quantity']= '';
//        $product['stock_status_id']= '';
//        $product['image']= '';
//        $product['manufacturer_id']= '';
//        $product['delivery']= '';
//        $product['price']= '';
//        $product['points']= '';
//        $product['tax_class_id']= '';
//        $product['date_available']= '';
//        $product['weight']= '';
//        $product['weight_class_id']= '';
//        $product['size']= '';
//        $product['color']= '';
//        $product['height']= '';
//        $product['length_class_id']= '';
//        $product['subtract']= '';
//        $product['minimum']= '';
//        $product['sort_order']= '';
//        $product['status']= '';
//        $product['viewed']= '';
//        $product['date_added']= '';
//        $product['date_modified']= '';
//        