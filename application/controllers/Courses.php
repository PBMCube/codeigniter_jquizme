<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('courses_model');
        $this->load->model('topics_model');
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function create() {
        $id = $this->courses_model->insert(array(
            'name' => 'Map skills',
        ));


        if ($id) {

            $topics = array("Map skills", "Gis Skills", "Measuring Bearing");

            foreach ($topics as $value) {

                $this->topics_model->insert(array(
                    'name' => $value,
                    'course_id' => $id,
                ));
            }
        }
    }
    
    
     public function view($user_id,$course_id) {
        //$row = $this->courses_model->get($id);
        $data['has_access'] = $this->courses_model->user_has_access($user_id, $course_id);
        //echo $this->db->last_query();
        //exit;
        //var_dump($data['has_access']);die();
         $data['row'] = $this->courses_model->with_topics('fields:name')->get($course_id); 
         //var_dump($data);die();
         $this->load->view('courses_view',$data);
        
    }

}
