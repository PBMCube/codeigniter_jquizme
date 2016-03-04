<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
    
    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('Courses_model', 'courses');
        $this->load->model('Topics_model', 'topics');
        
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function create()
	{
        $id = $this->courses->insert(array(
            'name' => 'Map skills',
        ));
       
        
       if($id) {
        
        $topics = array("Map skills", "Gis Skills", "Measuring Bearing");
        
        foreach ($topics as $value) {
            
            $this->topics->insert(array(
            'name' => $value,
            'course_id' => $id,
        ));
    
}
        
        
        }
        
	}
}
