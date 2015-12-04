<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jquizme extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
                
                
	}

	public function index()
	{
            
        $this->load->model('Quiz_model', 'quiz');
        var_dump($this->quiz->get_all());die();
        
	$data['main_content'] = 'jquizme';
        $this->load->view('includes/template', $data);
	}





}
