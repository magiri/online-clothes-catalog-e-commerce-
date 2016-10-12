<?php

class product_images_m extends MY_Model {

    var $img_upload_path;
    protected $_table_name = 'fn_images';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';
   
    public function __construct() {
        parent::__construct();
       
    }

}