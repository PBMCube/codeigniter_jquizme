<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Auth_Controller {

    function __construct() {
        $this->groups = array('admin'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
    }

    public function index() {
        $profile_pic = 1;
        if ($profile_pic == 0) {
            $loggedin = true;
        } else {
            $loggedin = false;
        }

        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['loggedin'] = $loggedin;

        $this->render('dashboard/index_view');
    }

}
