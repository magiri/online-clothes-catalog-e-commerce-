<?php

class table extends MY_Model {

    public $student = array(
        'table_name' => 'student_details',
        'all' => array('id', 'admission_number', 'first_name', 'other_names', 'gender', 'email',
            'phone_number', 'photo_url', 'religion', 'special_needs', 'date_of_birth',
            'place_of_birth', 'nationality', 'current_resident', 'current_school_id',
            'guardian1_id', 'guardian2_id', 'guardian1_relationship', 'guardian2_relationship',
            'class_id', 'date_joined_school', 'created_at', 'deleted', 'updated_at'),
        'update' => array('admission_number', 'first_name', 'other_names', 'gender', 'email',
            'phone_number', 'religion', 'special_needs', 'date_of_birth',
            'place_of_birth', 'nationality', 'current_resident', 'date_joined_school'),
    );
    public $guardian = array(
        'table_name' => 'guardian_details',
        'all' => array('id', 'national_id', 'gender', 'first_name', 'other_names', 'phone_number',
            'email', 'other_contacts', 'occupation', 'level_of_education', 'special_needs',
            'created_at', 'updated_at'),
        'update' => array('national_id', 'gender', 'first_name', 'other_names', 'phone_number',
            'email', 'other_contacts', 'occupation', 'level_of_education', 'special_needs'),
    );
    public $school = array(
        'table_name' => 'in',
        'all' => array('id', 'name', 'location_id', 'gender', 'address', 'phone', 'website', 'description',
            'history', 'logo', 'contact_person', 'email', 'date_opened', 'date_closed', 'deleted',
            'type', 'level', 'ownership',
            'special', 'created_at', 'updated_at'),
        'update' => array(),
    );
    public $template = array(
        'table_name' => 'tablename',
        'all' => array(),
        'update' => array(),
    );

    public function __construct() {
        parent::__construct();
        $this->faker = Faker\Factory::create();
    }

}
