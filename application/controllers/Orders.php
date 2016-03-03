<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Auth_Controller {

    function __construct() {
        $this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
        $this->load->model('Orders_model', 'orders');
    }

    public function create() {
        $user = $this->ion_auth->user()->row();
        $this->orders->insert(array(
            'order_num' => 1003,
            'user_id' => $user->id,
            '	payed' => 0,
        ));
    }

}
