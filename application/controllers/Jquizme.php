<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jquizme extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
                
               function create_zip($files = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file) {
			$zip->addFile($file,$file);
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		
		//close the zip -- done!
		$zip->close();
//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
} 
	}

	public function index()
	{
            
        $this->load->model('Quiz_model', 'quiz');
        //var_dump($this->quiz->get_all());die();
        
     
    $emparray = json_encode($this->quiz->get_all());
    
    
    
     //write to json file
    $fp = fopen('empdata.json', 'w');
    fwrite($fp, "var quiz = " . $emparray);
    fclose($fp);
    

    
    
    $files_to_zip = array(
	'public/js/jQuizMe-2.2.1.min.js',
	'public/css/jQuizMe.css',
	'empdata.json'
);
    
//if true, good; if false, zip creation failed
$result = create_zip($files_to_zip,'my-archive.zip');

    var_dump($emparray);die();
    //var_dump($emparray);die();
        
	$data['main_content'] = 'jquizme';
        $this->load->view('includes/template', $data);
	}
        





}
