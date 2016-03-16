<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MY_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('orders_model');
        $this->load->model('users_courses_model');
        $this->load->model('courses_model');
    }

    public function index() {
        render('welcome_message');
    }
    

public function checkout() {
 $user = $this->ion_auth->user()->row();
       //echo $user->email . "<br>";
       //var_dump($user);die();
     
//$this->ion_auth->activate($user_id);

$this->load->library('email');
$this->email->from('absmugz09@gmail.com', 'Absolom');
$this->email->to($user->email);


$this->email->subject('You have been activated');
$this->email->message('Congratulations, You have been activated.');

$this->email->send();

echo 'You have been activated';

} 
    
}