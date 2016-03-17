<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jquizme extends CI_Controller {

    public function __construct() {
        parent::__construct();

        
        $this->load->database();
	$this->load->library(array('form_validation'));
	
        
        function create_zip($files = array(), $destination = '', $overwrite = false) {
            //if the zip file already exists and overwrite is false, return false
            if (file_exists($destination) && !$overwrite) {
                return false;
            }
            //vars
            $valid_files = array();
            //if files were passed in...
            if (is_array($files)) {
                //cycle through each file
                foreach ($files as $file) {
                    //make sure the file exists
                    if (file_exists($file)) {
                        $valid_files[] = $file;
                    }
                }
            }
            //if we have good files...
            if (count($valid_files)) {
                //create the archive
                $zip = new ZipArchive();
                if ($zip->open($destination, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
                    return false;
                }
                //add the files
                foreach ($valid_files as $file) {
                    $zip->addFile($file, $file);
                }
                //debug
                //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
                //close the zip -- done!
                $zip->close();
//check to make sure the file exists
                return file_exists($destination);
            } else {
                return false;
            }
        }

    }

    public function index() {

        //$data['main_content'] = 'jquizme';
         $data['pageTitle'] = 'Asset Creator';
        $this->load->view('jquizme_create');
    }
    
        public function create() {

        //$data['main_content'] = 'jquizme';
        $this->form_validation->set_rules('title', 'Title', 'required');

       if ($this->form_validation->run() == FALSE) {

       echo validation_errors();
           //var_dump(validation_errors());die();
           
             //echo '<div class="error">'.validation_errors().'</div>';   
          
        } 
        
        
        
        else {
          /*   
            $title = $this->input->post('title');
            $text = $this->input->post('type');
            $ques = $this->input->post('ques');
            $ans = $this->input->post('ans');
            $ansInfo = $this->input->post('ansInfo');
            $ansSel = $this->input->post('ansSel');
            */
            
         //echo 'success';
        

    
   for ($i=0;$this->input->post('question['.$i.']')>0;$i++) {
    echo '<hr>Question: '.$this->input->post('question['.$i.'][ques]');
    echo '<br>Answer: '.$this->input->post('question['.$i.'][ans]');
    echo '<br>Answer info: '.$this->input->post('question['.$i.'][ansInfo]');
    
    //echo '<br>position: '.$this->input->post('question['.$i.'][ques]');
    //echo '<br>dept: '.$this->input->post('question['.$i.'][ques]');
   }

        
          
            
            //echo json_encode($data);
            //var_dump(json_encode($data));die();
            
        }
    }
    
    public function create_this() {

        //$data['main_content'] = 'jquizme';
        
        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run() === FALSE) {
        
            
          
        } 
        
        
        
        else {
          /*   
            $title = $this->input->post('title');
            $text = $this->input->post('type');
            $ques = $this->input->post('ques');
            $ans = $this->input->post('ans');
            $ansInfo = $this->input->post('ansInfo');
            $ansSel = $this->input->post('ansSel');
            */
            
            
        

    
    for ($i=0;$this->input->post('question['.$i.']')>0;$i++) {
    echo '<hr>Question: '.$this->input->post('question['.$i.'][ques]');
    echo '<br>Answer: '.$this->input->post('question['.$i.'][ans]');
    echo '<br>Answer info: '.$this->input->post('question['.$i.'][ansInfo]');
    //echo '<br>position: '.$this->input->post('question['.$i.'][ques]');
    //echo '<br>dept: '.$this->input->post('question['.$i.'][ques]');
    }

        
          
            
            //echo json_encode($data);
            //var_dump(json_encode($data));die();
            
        }
    }
    
    

    public function zip() {

        $this->load->model('Questions_model', 'quiz');
        //var_dump($this->quiz->get_all());die();


        $emparray = json_encode($this->quiz->get_all());



        //write to json file
        $fp = fopen('empdata.js', 'w');
        fwrite($fp, " var quiz = { multiList: [{" . $emparray . "}]");
        fclose($fp);




        $files_to_zip = array(
            'public/js/jQuizMe-2.2.1.min.js',
            'public/css/jQuizMe.css',
            'empdata.js'
                //'empdata.json'
        );

//if true, good; if false, zip creation failed
        $result = create_zip($files_to_zip, 'my-archive.zip');

        var_dump($emparray);
        die();
        //var_dump($emparray);die();

        $data['main_content'] = 'jquizme';
        $this->load->view('includes/template', $data);
    }

}
