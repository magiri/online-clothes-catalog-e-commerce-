<?php

class slidecont extends MX_Controller {

    var $data;

    function __construct() {
        parent::__construct();
          $this->load->module('auth');
         if (!$this->auth->isadmin()){
            redirect('auth/login');
            exit();
        }
        //modules::run('sitesecurity/adminisloggedin');
        $this->load->module('slide_content');
        $this->form_validation->CI = & $this;
        $this->data = '';
        $this->data['uploaderror'] = array('error' => '');
        $this->data['replacingsliderimage'] = false;
    }

    public function index() {

        /*         * ***************************pagination logic start here*************************** */

        if ($this->uri->segment(4) < 0) {     //ensure the offset number is not less than data availabale in database
            redirect('admin/slidecont','location','301');
        }

        $perpage = 10;
        $count = $this->slide_content->countAllResults();
        if ($this->uri->segment(4) > $count) {      //ensure the offset number is not greater than data availabale in database
            redirect('admin/slidecont','location','301');
        }

        if ($count > $perpage) { /* if data greater than per page then set up pagination */

            /* pagination configs */
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 4;
            $config['total_rows'] = $count;
            $config['base_url'] = site_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . 'index' . '/');

            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $offset = $this->uri->segment(4);

            /* additional data */
            $this->data['offset_data'] = $offset;
        } else {
            $offset = 0;
            $this->data['pagination'] = '';
        }

        /* fetch  */
        $this->db->limit($perpage, $offset);
        $this->data['slide_content'] = $this->slide_content->get();

        /* amount of data available according to uri segment(3) or just request */
        if (count($this->data['slide_content'])) {
            $this->data['noOfslide_content'] = $count;
        } else {
            $this->data['noOfslide_content'] = 0;
        }

        /************* pagination logic ends here ***************************/


        $this->data['title'] = 'Background Images';
        $this->data['subview'] = 'slidecont/index';
        $this->load->view('_admin_main_layout', $this->data);
    }

    public function edit($id = NULL) {
        if ($id) {
            redirect('admin/slidecont','location','301');
//            $this->data['slide_content'] = $this->slide_content->get($id);
//            count($this->data['slide_content']) ? $this->data['title'] = 'Edit Background Content' : redirect('admin/slidecont', 'location', '301');
        } else {
            $this->data['slide_content'] = $this->slide_content->get_new();
            $this->data['title'] = 'New Background Image';
        }


                //upload starts here
                $this->data['uploadstatus'] = $this->slide_content->_upload_slider();  //upload slide image 
                if ($this->data['uploadstatus'] !== false) {

                    $data['img_url'] = $this->data['uploadstatus']['img_url'];
                } else {
                    $this->data['uploaderror'] = array('error' => $this->upload->display_errors());
                }
                //upload ends here 

            if (strlen($this->data['uploaderror']['error']) < 1) {
                $this->slide_content->_save($data, $id);
                redirect('admin/slidecont','location',301);
            }

        $this->data['subview'] = 'slidecont/edit';
        $this->load->view('_admin_main_layout', $this->data);
    }

    public function delete($id = NULL) {
        
        is_numeric($id) || redirect('admin/slidecont','location',301);
        $this->slide_content->_delete($id);
        redirect('admin/slidecont','location',301);
    }

     public function deleteall() {
        
        //is_numeric($id) || redirect('admin/commtestimonials/'.$this->uri->segment(5),'location',301);
        $this->slide_content->_deleteall();
        redirect('admin/slidecont','location',301);
    }

    public function blockopt($opt = null) {
        $id = $this->uri->segment(5);
        $optsarray = array('block', 'unblock');
        $opt = (in_array($opt, $optsarray)) ? $opt : redirect('admin/slidecont','location',301);    //check if the option is the actual one ie either block or unblock
        if ($opt == 'block') {
            $blockopt = 1;
        } else {
            $blockopt = 0;
        }
        $data = array('blocked' => $blockopt);
        $this->slide_content->_save($data, $id);
        redirect('admin/slidecont','location',301);
    }

    public function replace_slider($id = null) {

        $id || redirect('admin/slidecont','location',301);

        $this->data['slide_content'] = $this->slide_content->get($id); //fetch data from db

        $replaceinspectorvalue = $this->input->post('replaceinspector');

        if (isset($replaceinspectorvalue) && $replaceinspectorvalue == true) {
            //upload starts here
            $this->data['uploadstatus'] = $this->slide_content->_upload_slider();  //upload slide image 
            if ($this->data['uploadstatus'] !== false) {

                $data['img_url'] = $this->data['uploadstatus']['img_url'];
                
                //delete previous image
                $this->slide_content->_delete_previous($this->data['slide_content']->img_url);
                
            } else {
                $this->data['uploaderror'] = array('error' => $this->upload->display_errors());
            }
            //upload ends here 

            if (strlen($this->data['uploaderror']['error']) < 1) {
                $this->slide_content->_save($data, $id);
                redirect('admin/slidecont/edit/'.$id,'location',301);
            }
        }


        $this->data['title'] = 'Replace Background Image';
        $this->data['subview'] = 'slidecont/replace_slider';
        $this->load->view('_admin_main_layout', $this->data);
    }

}
