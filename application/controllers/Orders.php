<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Auth_Controller {

    function __construct() {
        $this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('Orders_model', 'orders');
        $this->load->model('Users_courses_model');
        $this->load->model('Courses_model');
        
    }

    public function create() {
        
        $user = $this->ion_auth->user()->row();
        
        $id = $this->orders->insert(array(
            'order_num' => 1003,
            'user_id' => $user->id,
            'payed' => 0,
        ));
       
        
        if($id) {
        
        $this->Users_courses_model->insert(array(
            'order_id' => $id,
            'user_id' => $user->id,
            'course_id' => 1,
        ));
        
        }
       
        //Insert into users_courses - user_id, order_id, course_id
    }
    
       

        function view($user_id,$course_id) {
            $has_access = $this->Courses_model->user_has_access($user_id, $course_id);
            var_dump($has_access);die();
        }

}
