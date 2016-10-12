<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends MX_Controller {

    var $data;
    var $edit;
    var $noperpage = 25;

    public function __construct() {
        parent::__construct();
        $this->load->module('auth');

        if (!$this->auth->isadmin()) {
            redirect('auth/login', 'reflesh');
            exit();
        }
        $this->data = '';
        //$this->load->module('template');
        $this->load->model('products_m');
        $this->load->model('category/unify');
        $this->load->model('discounts_m');
        $this->load->model('admin/edit_m');

        $this->load->module('images');
        $this->load->library('form_validation');
        $this->data['message'] = 'Select to delete as a group';
        $this->data['head'] = 'Products List';
        $this->data['deletebtn'] = 'Delete';
        $this->edit['date_modified'] = date('y:m:d H:i:s');
        $this->data['title'] = 'Admin';
        $this->data['allresults'] = $this->products_m->countAllResults();
    }

    public function index() {
        $this->viewall();
//        $this->data['subview'] = 'admin/admin_index';
//        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function edit($id = NULL) {
        if ($id <= 0) {
            $id = NULL;
        }
        $rules = $this->products_m->rules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $data = $this->databuild($id);
            $this->products_m->save($data, $id);
            $id2 = $this->db->insert_id();
            if ($this->input->post('selectimage')) {

                if ($id2 == 0) {
                    $pr_id = $id;
                } else {
                    $pr_id = $id2;
                }
                $this->edit_m->save(array('data' => $pr_id), 2);
                redirect('images/image_sel/', 'reflesh');
            } else {
                $this->data['message'] = '1 Record Was Saved ';
                redirect('products/admin/viewall', 'reflesh');
            }
        } else {
            if ($id > 0) {
                $this->data['message'] = 'View All products';
                $this->data['product'] = $this->products_m->get($id);
            } elseif ($id <= 0) {
                $this->data['product'] = $this->products_m->get_new();
                $this->data['message'] = 'Add New Product';
            }
            $this->data['parent'] = $this->unify->get();
            $this->data['subview'] = 'admin/admin_edit';
            $this->load->view('admin/_admin_main_layout', $this->data);
        }
    }

    public function databuild($id = NULL) {
        $this->load->helper('date');
        $this->load->helper('string');
        $frompost = array('name', 'description', 'size', 'color', 'category_id');
        $product = $this->products_m->array_in_post($frompost);

        if ($id == NULL) {
            $product['date_added'] = date('y:m:d h:i:s');
        } else {
            $product['date_added'] = $this->input->post('date_added');
        }

        $product['image'] = $this->input->post('image');

//        $image_url = $this->images->_upload_image();
//        if ($image_url == FALSE) {
//        } else {
//            $product['image'] = $image_url['img_url'];
//        }

        $product['id'] = $id;
        //$product['name']= '';
        //$product['description']= '';
        $product['tag'] = 'Good One';
        $product['contact_id'] = 1;
        $product['slug'] = md5( random_string()).'-'.$this->input->post('name');

        $product['meta_title'] = 'faithnitts';
        $product['meta_description'] = 'Faith Nits';
        $product['meta_keyword'] = 'faith Nits';
        $product['model'] = '';
        $product['location'] = 'Thika';
        $product['quantity'] = '45';
        $product['stock_status_id'] = '1';
        //$product['image']= '';
        $product['manufacturer_id'] = '1';
        $product['delivery'] = '1';
        //$product['price_list_id']= '';
        $product['points'] = '45';
        // $product['tax_class_id']= '';
        $product['date_available'] = date('y:m:d H:i:s');
        $product['weight'] = '';
        $product['weight_class_id'] = '';
//        $product['size']= '';
//        $product['color']= '';
        $product['height'] = '';
        $product['page_control'] = 0;
        $product['subtract'] = '';
        $product['minimum'] = '';
        $product['sort_order'] = '';
        $product['status'] = '1';
        $product['viewed'] = '';
        //$product['date_added']= '';
        $product['date_modified'] = date('y:m:d H:i:s');
        $product['slug'] = $this->products_m->putDashes(time() . ' ' . $product['name']);

        return $product;
    }

    public function select_image($pid, $id) {

        $this->load->model('images/product_images_m');
        $imagedata = $this->product_images_m->get($id);
        $image['image'] = 'assets/filesManagement/album/uploads/' . $imagedata->url;
        $this->products_m->save($image, $pid);
        $this->edit_m->save(array('data' => 0), 2);
        $this->viewall();
//        return $imageurl;
    }

    public function viewall1($offset = NULL) {
//        $delete[] = '';
//        $delete = $this->input->post();
//
//        if (count($delete) > 1) {
//            foreach ($delete as $record) {
//                if ($record != 'Delete') {
//                    $this->products_m->delete($record);
//
//                    //  var_dump($record);
//                }
//            }
//            $this->data['message'] = count($delete) . ' Records were deleted ';
//        } else {
//            
//        }
        $this->load->model('price_list/price_list_m');
        $this->pagenate($offset);
        $this->db->limit($this->noperpage, $offset);
        $this->data['products'] = $this->products_m->get_price(array('status' => 1));
        $this->data['subview'] = 'admin/admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }
public function viewall() {
          $this->load->module('datatables');
        $datatables = new datatables;
        
        $datatables->set_table('fn_product');
        
     $datatables->set_display_cols(array(
         'name'=>'Name',
         'description'=>'Desc', 
         'category_id'=> 'Cat',
         
     ));
     $datatables->set_edit_field('id');
     $datatables->set_edit_links(array(
         'edit'=>'/products/admin/edit/',
         'delete'=>'products/admin/delete_product/',
         'Make Home'=>'products/admin/make_home/',
       
         
     ));
             
     
     $datatables->all_data_output();
     $this->data['subviewstring'] = $datatables->output();
        $this->load->view('admin/_admin_main_layout', $this->data);
   
}
    public function add_discount($id = NULL) {
        $rules = $this->discounts_m->rules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $frompost = array('name', 'description', 'price', 'color', 'size', 'category_id');
            $this->edit = $this->products_m->array_in_post($frompost);
            $this->edit = $this->databuild($id);
            var_dump($this->input->post('category_id'));
            var_dump($this->edit);
            $this->discounts_m->save($this->edit, $id);
            $id2 = $this->db->insert_id();

            $this->data['message'] = '1 Record Was Saved ';
            redirect('products/admin/viewall', 'reflesh');
        }
    }

    public function delete_product($id = NULL) {

        if ($id > 0 && is_numeric($id)) {
            $this->data['message'] = '1 Product Was Deleted ';
            $product = $this->products_m->get_by(array('id' => $id), TRUE);

            if ($product->status === '1') {
                $this->edit['status'] = '0';
                $this->products_m->save($this->edit, $id);
                $this->data['deletebtn'] = 'Delete';
            } elseif ($product->status === '0') {
                $this->edit['status'] = '1';
                $this->products_m->save($this->edit, $id);
                $this->data['deletebtn'] = 'UnDelete';
            } else {
                $this->data['message'] = 'Error Deleting Product';
            }
        } else {
            $this->data['message'] = 'Error Deleting Product';
        }
         $this->pagenate(0);
        $this->data['products'] = $this->products_m->get_price(array('status' => 0));
        $this->data['head'] = 'Deleted Products List';
        $this->data['subview'] = 'admin/admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function make_home($id = NULL) {
        if ($id > 0 && is_numeric($id)) {
            $product = $this->products_m->get_price(array('id' => $id), TRUE);

            if ($product->page_control === '1') {
                $this->edit['page_control'] = '0';
                $this->products_m->save($this->edit, $id);
                $this->data['head'] = 'Home Products List';
            } else {
                $this->edit['page_control'] = '1';
                $this->products_m->save($this->edit, $id);

                $this->data['head'] = 'Home Products List';
            }
        }
        $this->pagenate(0);
        $this->data['products'] = $this->products_m->get_price(array('page_control' => 1));
        $this->data['subview'] = 'admin/admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function new_arrivals($id = NULL) {
        if ($id > 0 && is_numeric($id)) {
            $product = $this->products_m->get_by(array('id' => $id), TRUE);
            if ($product->page_control === '2') {
                $this->edit['page_control'] = '0';
                $this->products_m->save($this->edit, $id);
            } else {
                $this->edit['page_control'] = '2';
                $this->products_m->save($this->edit, $id);
            }
        }
        $this->data['head'] = 'New Arrival Products List';
        $this->pagenate(0);
        $this->data['products'] = $this->products_m->get_price(array('page_control' => 1, 'page_control' => 2));
        $this->data['subview'] = 'admin/admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function pagenation() {

        $perpage = 10;
        $count = 5;



        /* pagination configs */
        $config['per_page'] = $perpage;
        $config['uri_segment'] = 5;
        $config['total_rows'] = $count;
        $config['base_url'] = site_url('products/index');

        $this->pagination->initialize($config);
        $this->data['pagination'] = $this->pagination->create_links();
        if ($this->uri->segment(5)) {
            $offset = $this->uri->segment(5);
        } else {
            $offset = 0;
        }

        /* additional data */
        $this->data['offset_data'] = $offset;




        $this->db->limit($perpage, $offset);
    }

    public function pagenate($currentoffset) {

        $this->data['pages'] = ceil($this->data['allresults'] / $this->noperpage);
        if (!isset($currentoffset)) {
            $currentoffset = 0;
            $currentoffsetn = $this->noperpage;
            $currentoffsetp = 0;
        } elseif ($currentoffset == 0) {
            $currentoffsetn = $currentoffset + $this->noperpage;
            $currentoffsetp = 0;
        } elseif ($currentoffset >= $this->noperpage) {
            $currentoffsetn = $currentoffset + $this->noperpage;
            $currentoffsetp = $currentoffset - $this->noperpage;
        }
        $this->data['cpage'] = $currentoffsetn / $this->noperpage;

        $this->data['currentoffset'] = $currentoffset;
        $this->data['currentoffsetn'] = $currentoffsetn;
        $this->data['currentoffsetp'] = $currentoffsetp;
//      return $currentoffset;
    }

    public function sort($catid = NULL) {


        $this->pagenate(0);
//        $this->db->limit($this->noperpage, $offset);
        $this->data['products'] = $this->products_m->get_price(array('category_id' => $catid));
        //   var_dump($this->data['products'] );

        $this->data['subview'] = 'admin/admin_index';
        $this->load->view('admin/_admin_main_layout', $this->data);
    }

    public function slug() {
        $products = $this->products_m->get();
        foreach ($products as $product) {
            $product->slug = $this->products_m->putDashes(human_to_unix($product->date_added) . ' ' . $product->name);
           $this->products_m->save($product, $product->id);
       
        }
    }

}
