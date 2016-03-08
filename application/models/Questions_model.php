<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Questions_model extends MY_Model
{
 public $table = 'questions';
 
function __construct()
{
    
    $this->timestamps = FALSE;
        parent::__construct();
        $this->has_one['answers'] = array('foreign_model'=>'Answers_model','foreign_table'=>'answers','foreign_key'=>'questions_id','local_key'=>'id');
        $this->has_one['answers_info'] = array('foreign_model'=>'Answers_info_model','foreign_table'=>'answers_info','foreign_key'=>'questions_id','local_key'=>'id');
        $this->has_many['answers_sel'] = array('foreign_model'=>'Answers_sel_model','foreign_table'=>'answers_sel','foreign_key'=>'questions_id','local_key'=>'id');
}
}
