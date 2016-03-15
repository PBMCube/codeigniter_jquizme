<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Score extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->model('score_model');
        $this->load->model('courses_model');
        $this->load->model('topics_model');
        $this->load->model('questions_model');
    }

    public function index() {
        $this->load->view('welcome_message');
    }

 public function create($topic_id) {

        $topic = $this->topics_model->get($topic_id);
        
        if($topic===false)
        {
          //redirect...
        }
        
        $course_id = $topic->course_id;

        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $has_access = $this->courses_model->user_has_access($user->id, $course_id);
        }

        if ($has_access === TRUE) {

            if ($this->score_model->where(array('user_id'=>$user->id, 'topic_id'=>$topic_id))->get()) { //struggling here on how to query the db if this record exists
                $score = $this->uri->segment(4);
                $this->score_model->update(array('score' => $score, 'user_id' => $user->id, 'topic_id' => $topic_id, 'course_id' => $course_id));
            } else {
                $score = $this->uri->segment(4);
                $id = $this->score_model->insert(array('score' => $score, 'user_id' => $user->id, 'topic_id' => $topic_id, 'course_id' => $course_id));
            }
        }
    }

}
