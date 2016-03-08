<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends MY_Controller {

    public function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('questions_model');
        $this->load->model('answers_model');
        $this->load->model('answers_info_model');
        $this->load->model('answers_sel_model');
    }

    public function index() {
        $this->load->view('welcome_message');
        
    }

    public function create() {

        $id = $this->questions_model->insert(array(
            'ques' => 'Silver',
            'topic_id' => 1,
        ));
 
        if ($id) {

            $this->answers_model->insert(array(
                'ans' => 'Ag',
                'questions_id' => $id,
            ));

            $this->answers_info_model->insert(array(
                'ansInfo' => 'More info here',
                'questions_id' => $id,
            ));

            $ansSel = array("x", "not a number", "x^2");

            foreach ($ansSel as $items) {

                $this->answers_sel_model->insert(array(
                    'ansSel' => $items,
                    'questions_id' => $id,
                ));
            }
        }
      
        echo "Success!";
    }

}
