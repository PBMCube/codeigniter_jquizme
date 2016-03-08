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
            'ques' => 'Gold',
            'topic_id' => 1,
        ));

        if ($id) {

            $this->answers_model->insert(array(
                'ans' => 'Au',
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

    public function view($topic_id) {

        $ans = $this->questions_model->with_answers('fields:ans')->get($topic_id);
        $ansInfo = $this->questions_model->with_answers_info('fields:ansInfo')->get($topic_id);
        $ansSel = $this->questions_model->with_answers_sel('fields:ansSel')->get($topic_id);


        var_dump($ans->answers->ans);
        var_dump($ansInfo->answers_info->ansInfo);
        //var_dump($ansSel->answers_sel[0]->ansSel);


        foreach ($ansSel->answers_sel as $item) {
            echo $item->ansSel . '<br>';
        }


        $post_data = array(
            'item' => array(
                'ques' => $ans->answers->ans,
                'ans' => $ansInfo->answers_info->ansInfo,
                'ansSel' => array()
            )
        );

        foreach ($ansSel->answers_sel as $item) {
            $post_data['ansSel'][] = array(
                $item->ansSel
            );
        }

        echo json_encode($post_data);
    }

    public function view_test($topic_id) {

        $questions = $this->questions_model->where('topic_id', $topic_id)->with_answers('fields:answer,answer_info,correct')->get_all();

        $quiz = array();
        if ($questions) {
            foreach ($questions as $question) {
                $the_question = array();
                $the_question['ques'] = $question->question;
                foreach ($question->answers as $answer) {
                    $the_question['ansSel'] = array();
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

        echo '<pre>';
        print_r($quiz);
        echo '</pre>';
        echo json_encode($quiz);
        
        $this->data['quiz'] = $quiz;
        
        $this->render('quiz_view');
    }

}
