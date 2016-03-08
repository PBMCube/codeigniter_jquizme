<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MY_Controller {

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

    function view($course_id) {

        $this->data['has_access'] = FALSE;

        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $this->data['has_access'] = $this->courses_model->user_has_access($user->id, $course_id);
        }

        $this->data['course'] = $this->courses_model->with_topics('fields:name,id')->get($course_id);
        $this->render('courses_view');
    }

    function topic($topic_id) {

        $has_access = FALSE;

        $topic = $this->topics_model->get($topic_id);
        if ($topic === FALSE) {
            echo 'wherever you want because the topic doesnt exist';
        } else {
            $course_id = $topic->course_id;
            echo $course_id;
        }

        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $has_access = $this->courses_model->user_has_access($user->id, $course_id);
        }

        $this->data['has_access'] = $has_access;

        if (($has_access === TRUE) || (($has_access === FALSE) && $this->topics_model->where('free', '1')->get($topic_id))) {
            //echo 'your topic is shown here';

            $this->data['book'] = array(
                "title" => "JavaScript: The Definitive Guide",
                "author" => "David Flanagan",
                "edition" => 6
            );
            $this->render('quiz_view');
        } else {
            echo 'pay, you mutha fckr! Yeah, Pay up bitch!';
        }
    }

}
