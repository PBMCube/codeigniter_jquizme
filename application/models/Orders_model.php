<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Orders_model extends MY_Model {

    public $table = 'orders';

    function __construct() {

        $this->timestamps = FALSE;
        parent::__construct();
        //$this->has_many['users'] = array('foreign_model'=>'Users_model','foreign_table'=>'users','foreign_key'=>'user_id','local_key'=>'user_id');
        $this->has_one['user'] = array('foreign_model' => 'Users_model', 'foreign_table' => 'users', 'foreign_key' => 'id', 'local_key' => 'user_id');
        $this->has_one['course'] = array('foreign_model' => 'Courses_model', 'foreign_table' => 'courses', 'foreign_key' => 'id', 'local_key' => 'course_id');
    }

}
