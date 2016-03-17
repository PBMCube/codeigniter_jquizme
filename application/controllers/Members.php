<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends MY_Controller {

	function __construct()
    {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
	$this->load->library('ion_auth');
        $this->load->model('courses_model');
        $this->load->model('topics_model');
        
	}

     public function index()
    {
         $this->data['courses'] = $this->courses_model->get_all();
         //var_dump($this->data['courses']);die();

         if ($this->ion_auth->logged_in())
         {
         $user = $this->ion_auth->user()->row();
         $this->data['user'] = $user;
         }
     
        $this->render('home_view');
    }

    public function login()
    {
        $this->data['title'] = "Login";
		
	$this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === FALSE)
        {
           
            $this->render('home_view');
        }
        else
        {
            $remember = (bool) $this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember))
            {
                //redirect('dashboard');
                echo "this is a test";
                var_dump($this->ion_auth->user()->row());die();
                $this->render('home_view');
            }
            else
            {
                $_SESSION['auth_message'] = $this->ion_auth->errors();
                $this->session->mark_as_flash('auth_message');
                redirect('members/login');
            }
        }
    }

   public function logout()
{
	$this->ion_auth->logout();
	redirect('members/login');
}
}