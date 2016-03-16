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
        $this->load->model('questions_model');
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
            //echo $course_id;
        }

        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $has_access = $this->courses_model->user_has_access($user->id, $course_id);
        }

        $this->data['has_access'] = $has_access;

        if (($has_access === TRUE) || (($has_access === FALSE) && $this->topics_model->where('free', '1')->get($topic_id))) {
            //echo 'your topic is shown here';
            //This is where we get the questions when the course is free

            $questions = $this->questions_model->where('topic_id', $topic_id)->with_answers('fields:answer,answer_info,correct')->get_all();

            //print_r($questions);
            //exit;

            $quiz = array();
            if ($questions) {
                foreach ($questions as $question) {
                    $the_question = array();
                    $the_question['ques'] = $question->question;
                    foreach ($question->answers as $answer) {
                        //$the_question['ansSel'] = array();
                        if ($answer->correct == '1') {
                            $the_question['ans'] = $answer->answer;
                            $the_question['ansInfo'] = $answer->answer_info;
                        } else {
                            $the_question['ansSel'][] = $answer->answer;
                        }
                    }
                    $quiz[] = $the_question;
                }
            }

            /*  echo '<pre>';
              print_r($quiz);
              echo '</pre>';
              echo json_encode($quiz); */


            $data[] = array(
                'quiz' => $quiz,
                'message' => 'your topic is shown here'
            );

            //echo json_encode($data);
            echo json_encode($data);
            //$this->data['quiz'] = $quiz;
            //
            
            //$this->load-view('quiz_view');
            //$this->load->view('quiz_view');
        } else {
            
            $data[] = array(
                
                'message' => 'pay, you mutha fckr! Yeah, Pay up bitch!'
            );
            echo json_encode($data);
        }
    }

}
