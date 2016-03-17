<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users_model extends MY_Model {

    public $table = 'users';

    function __construct() {

        $this->timestamps = FALSE;
        parent::__construct();
        $this->has_many['orders'] = array('foreign_model'=>'Orders_model','foreign_table'=>'orders','foreign_key'=>'user_id','local_key'=>'id');
    }

}
