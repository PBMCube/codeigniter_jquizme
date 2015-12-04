<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jquizme extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$data['main_content'] = 'jquizme';
        $this->load->view('includes/template', $data);
	}





}
