<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home_m extends MY_Model {

    var $data;
    protected $_table_name = 'clusters';
    protected $_order_by = 'cut_off desc';
    public $rules = array(
        'mean_grade'=> array(
            'field' => 'mean_grade',
            'label' => 'Mean Grade',
            'rules' => 'trim|xss_clean|required|callback__only_point'
        ),
        '101' => array(
            'field' => '101',
            'label' => 'English',
            'rules' => 'trim|xss_clean|required|callback__only_grades'
        ),
        '102' => array(
            'field' => '102',
            'label' => 'Kiswahili',
            'rules' => 'trim|xss_clean|required|callback__only_grades'
        ),
        '121' => array(
            'field' => '121',
            'label' => 'Mathematics Option A',
            'rules' => 'trim|xss_clean|callback__mathematics_options|callback__only_grades'
        ),
        '122' => array(
            'field' => '122',
            'label' => 'Mathematics Option B',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        '237' => array(
            'field' => '237',
            'label' => 'General Science',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        'first_option' => array(
            'field' => 'first_option',
            'label' => 'First Option',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        'second_option' => array(
            'field' => 'second_option',
            'label' => 'Second Option',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        'third_option' => array(
            'field' => 'third_option',
            'label' => 'Third Option',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        'fourth_option' => array(
            'field' => 'fourth_option',
            'label' => 'Fourth Option',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        'fifth_option' => array(
            'field' => 'fifth_option',
            'label' => 'Fifth Option',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        'sixth_option' => array(
            'field' => 'sixth_option',
            'label' => 'Sixth Option',
            'rules' => 'trim|xss_clean|callback__only_grades'
        ),
        'no_of_grades' => array(
            'field' => 'no_of_grades',
            'label' => 'No of Grades',
            'rules' => 'callback__size_grades_array'
        ),
        'sms' => array(
            'field' => 'sms',
            'label' => 'SMS',
            'rules' => ''
        ),
        
    );
public $rules2 = array('raw_cluster'=> array(
            'field' => 'raw_cluster',
            'label' => 'Cut Off',
            'rules' => 'trim|xss_clean|required|callback__only_clusters'
        ),
         );
}
