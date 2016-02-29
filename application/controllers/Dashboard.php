<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends Auth_Controller
{
 
    public function index()
    {
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