<?php

class slide_content_m extends MY_Model {

    var $img_upload_path;
    protected $_table_name = 'slide_content';
    protected $_primary_key = 'id';
    protected $_order_by = 'id desc';

    public function __construct() {
        parent::__construct();
        $this->img_upload_path = 'assets/filesManagement/album/libsliders';
    }

    public function get_new() {
        $slide_contents = new stdClass();
        $slide_contents->id = '';
        $slide_contents->img_url = '';
        $slide_contents->blocked = '';
        return $slide_contents;
    }

//    public function get_DropdownArray() {
//        
//        $slide_contents = $this->get();
//        /* return key => pair value array */
//        $array = $this->uri->segment(1) != 'admin' ? array() : array(0 => 'No Car Model');
//        if (count($slide_contents)) {
//            foreach ($slide_contents as $modelCar) {
//                //get child
//                $array[$modelCar->id] = $modelCar->name;
//            }
//        }
//        return $array;
//    }



    public function _delete($id) {
        $data = $this->get($id, true);

        unlink('./' . $data->img_url); /*         * ***delete slider from disk space***** */
        parent::delete($data->id);
    }

    public function _deleteall() {
        $data = $this->get();

        foreach ($data as $data) {
            unlink('./' . $data->img_url); /*             * ***delete slider from disk space***** */
            parent::delete($data->id);
        }
    }

    public function _delete_previous($img_url) {
        unlink('./' . $img_url); /*         * ***delete slider from disk space***** */
    }

//    public function deleteall($id) {
//
//        $this->load->module('images');
//        $CarItemsData = $this->get_by(array('new_used' => $id));
//
//        foreach ($CarItemsData as $CarItemData) {  //this single image parent
//            $childimages = $this->images->get_by(array('parent_image_id' => $CarItemData->id)); //fetch all images with this image parent id
//            foreach ($childimages as $childimage) {
//                $this->images->_delete($childimage->id);
//            }
//
//            $this->deletethis($CarItemData);
//        }
//    }
//
//    public function deletethis($data) {
//        unlink('./' . $data->car_image_url); /*         * ***delete logo from disk space***** */
//        unlink('./' . $data->car_thumbnail_url); /*         * ***delete logo from disk space***** */
//        parent::delete($data->id);                                     /*         * ****delete from db*************** */
//    }
//        unlink('./' . $CarItemData->car_image_url); /*         * ***delete logo from disk space***** */
//        unlink('./' . $CarItemData->car_thumbnail_url); /*         * ***delete logo from disk space***** */
//        parent::delete($id);                         /*         * ****delete from db******* */


    public function _upload_slider() {
          $this->load->library('upload');
        $config['upload_path'] = $this->img_upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['remove_spaces'] = true;
        $this->upload->initialize($config);

        if (!($this->upload->do_upload())) {
            return false;
        } else {
            //create thumbnails
            $image_data = $this->upload->data();
            $data['img_url'] = $this->img_upload_path . '/' . $image_data['file_name'];  //ulr of the img to be sent to the db.

            return $data;
        }
    }

}
