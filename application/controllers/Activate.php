<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activate extends MY_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('orders_model');
        $this->load->model('users_courses_model');
        $this->load->model('courses_model');
        $this->load->model('users_model');
    }

    public function index() {

        $data['users'] = $this->orders_model->with_user('fields:first_name,last_name,email')->get_all();
        //$users = $this->users_model->with_orders('fields:order_num')->get_all();
        //$this->data['users'] = $users;
        //var_dump($users);die();
        //render('activate/activate_view');
        $this->load->view('activate/activate_view', $data);
    }

    public function activate($user_id) {
        /*$user = $this->users_model->with_user('fields:first_name,last_name,email')->get($user_id);
        
        echo '<pre>';
        print_r($user->email);
        echo '</pre>';
        die();*/
        
        $payed = 1;
        if ($this->orders_model->where(array('user_id' => $user_id))->get()) { //struggling here on how to query the db if this record exists
            $this->orders_model->update(array('payed' => $payed));
            $user = $this->users_model->with_user('fields:first_name,last_name,email')->get($user_id);

            $this->load->library('email');
            $this->email->from('absmugz09@gmail.com', 'Absolom');
            $this->email->to($user->email);


            $this->email->subject('You have been activated');
            $this->email->message('Thank you for paying');

            $this->email->send();
        }
    }

}
