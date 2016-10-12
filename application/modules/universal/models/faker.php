<?php

class faker extends MY_Model {

//    protected $_table_name = '';
//    protected $_primary_key = 'id';
//    protected $_primary_filter = 'intval';
//    protected $_order_by = '';
//    protected $_timestamps = false;
var $faker;
    public function __construct() {
        parent::__construct();
        $this->faker= Faker\Factory::create();
   
    }
    public function student() {
        $student_details = new stdClass();
        $student_details->id = '';
        $student_details->admission_number = $this->faker->unique()->bothify('????/#####');
        $student_details->first_name = $this->faker->firstName;
        $student_details->other_names = $this->faker->lastName;
        $student_details->gender = $this->faker->randomElement($array = array(0,1));
        $student_details->email = $this->faker->email;
        $student_details->phone_number = $this->faker->unique()->numerify('+2547########');
        $student_details->photo_url = '';
        $student_details->religion = $this->faker->randomElement($array = array('Christian','muslim','hindu','jew'));
        $student_details->special_needs = mt_rand(0, 1) ? '0' : '1';
        $student_details->date_of_birth = now();
        $student_details->place_of_birth =$this->faker->city;
        $student_details->nationality = $this->faker->country;
        $student_details->current_resident = $this->faker->city;
        $student_details->guardian1_id = '';
        $student_details->guardian2_id = '';
        $student_details->guardian1_relationship = '';
        $student_details->guardian2_relationship = '';
        $student_details->current_school_id = '';
        $student_details->class_id = '';
        $student_details->date_joined_school = '';
        $student_details->date_into_system = '';
        $student_details->deleted_at = '';
        $student_details->created = '';
        $student_details->modified = '';
        return $student_details;
    }

    public function institution() {
        $insitution = new stdClass();
        $insitution->id = '';
        $insitution->name = $this->faker->city . ' ' . $this->faker->randomElement($array = array('university', 'primary', 'High School', 'college'));
        $insitution->location_id = 200;
        $insitution->address = $this->faker->streetAddress;
        $insitution->gender = $this->faker->randomElement($array = array('male', 'female', 'mixed'));
        $insitution->phone = $this->faker->unique()->numerify('+2547########');
        $insitution->website = 'www.jemslab.com';
        $insitution->description = $this->faker->text;
        $insitution->history = $this->faker->text;
        $insitution->Logo = 'assets/images/design/bwn.jpg';
        $insitution->contact_person = $this->faker->firstName;
        $insitution->email = $this->faker->email;
        $insitution->date_opened = $this->faker->dateTimeThisCentury->format('Y-m-d');
        $insitution->date_closed = '';
        $insitution->created_at = '';
        $insitution->updated_at = '';
        $insitution->deleted = '';
        $insitution->type = $this->faker->randomElement($array = array('private', 'public'));
        ;
        $insitution->level = $this->faker->randomElement($array = array('university', 'primary', 'High School', 'college'));
        $insitution->ownership = $this->faker->randomElement($array = array('Catholic', 'Muslim', 'Hindu', 'jew', 'P.C.E.A', 'methodist', 'Private'));
        $insitution->special = mt_rand(0, 1) ? '0' : '1';
        return $insitution;
    }

    public function guardian() {
        $guardian = new stdClass();
        $guardian->id = '';
        $guardian->national_id = $this->faker->unique()->numerify('########');
        $guardian->gender =  $this->faker->randomElement($array = array(0,1));
        $guardian->first_name = $this->faker->firstName;
        $guardian->other_names =  $this->faker->lastName;
        $guardian->phone_number =$this->faker->unique->numerify('+2547########');
        $guardian->email =$this->faker->email;
        $guardian->other_contacts = $this->faker->streetAddress;
        $guardian->occupation = '';
        $guardian->level_of_education =$this->faker->randomElement($array = array('Primary','secondary','tertially'));
        $guardian->special_needs =$this->faker->randomElement($array = array(0,1));
        $guardian->created_at = '';
        $guardian->updated_at = '';
        return $guardian;
    }

}
