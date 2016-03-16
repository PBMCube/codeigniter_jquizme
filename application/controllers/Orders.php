<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {

    function __construct() {
        $this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('orders_model');
        $this->load->model('users_courses_model');
        $this->load->model('courses_model');
    }

    public function create($course_id) {

        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            //create order if user is registered

            $id = $this->orders_model->insert(array(
                'order_num' => 1003,
                'user_id' => $user->id,
                'payed' => 0,
            ));


            if ($id) {

                $this->users_courses_model->insert(array(
                    'order_id' => $id,
                    'user_id' => $user->id,
                    'course_id' => $course_id,
                ));
            }
            //create order if user is registered finished here
          
            //redirect to payment page
           
          $course = $this->courses_model->get($course_id);
          
          var_dump($course);
        
         $this->data['user'] = $user;
         $this->data['course'] = $course;
    
     
        $this->render('payment/payment_view');
            
            //redirect to payment page finished here
            
            
        } else {
            redirect('register');
        }


        //Insert into users_courses - user_id, order_id, course_id
    }

    public function insert() {
        //Permits you to add items to the shopping cart, as outlined above. 
    }

    public function update() {
        //Permits you to update items in the shopping cart, as outlined above.
    }

    public function total() {
        //Displays the total amount in the cart.
    }

    function view($course_id) {
        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            //$has_access = $this->courses_model->user_has_access($user->id, $course_id); 
            $has_access = $this->Courses_model->user_has_access($user->id, $course_id);
        }


        var_dump($has_access);
        die();
    }

}
