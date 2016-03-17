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

    public function activate($order_num) {
        
       $data['users'] = $this->orders_model->with_user('fields:first_name,last_name,email')->get_all();
        /*$user = $this->users_model->with_user('fields:first_name,last_name,email')->get($user_id);
        
        echo '<pre>';
        print_r($user->email);
        echo '</pre>';
        die();
        
         $user = $this->orders_model->with_user('fields:first_name,last_name,email')->get($order_num);
         
          echo '<pre>';
        print_r($user->user->email);
        echo '</pre>';
        die();
        
        
         $course = $this->orders_model->with_course('fields:name')->get($order_num);
         
          echo '<pre>';
        print_r($course->course->name);
        echo '</pre>';
        die();
         * 
         */
        
        $payed = 1;
        if ($order = $this->orders_model->where(array('order_num' => $order_num))->get()) { //struggling here on how to query the db if this record exists
            
            $this->orders_model->update(array('payed' => $payed));
            $user = $this->orders_model->with_user('fields:first_name,last_name,email')->get($order_num);
            $course = $this->orders_model->with_course('fields:name')->get($order_num);
            
            //var_dump($user->user->id);die();
            
            $this->users_courses_model->insert(array('user_id' => $user->user->id, 'order_id' => $order->order_id, 'course_id' => $course->course->id));
             
            //$user = $this->users_model->with_user('fields:first_name,last_name,email')->get($user_id);

            $this->load->library('email');
            $this->email->from('absmugz09@gmail.com', 'Absolom');
            $this->email->to($user->user->email);


            $this->email->subject('You have been activated');
            $this->email->message('Thank you for paying for'. $course->course->name);

            $this->email->send();
        }
        
         redirect('activate');
    }

}
