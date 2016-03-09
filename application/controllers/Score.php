<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Score extends MY_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->load->library('ion_auth');
                $this->load->model('score_model');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
    
    public function create()
    {
        
        $score = $this->uri->segment(3);
        $id = $this->score_model->insert(array('score' => $score,'user_id' => 3,'topic_id' => 1,'course_id' => 1));
        
    }
    
}