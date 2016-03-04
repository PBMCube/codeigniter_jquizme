<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Courses_model extends MY_Model
{
 public $_table = 'courses';
  
############################# you put this method inside the courses model ###################################
        
public function user_has_access($user_id, $course_id)
{
	if(is_int($user_id) && is_int($course_id))
	{
		$this->db->where('courses.id',$course_id);
		$this->db->where('orders.user_id',$user_id);
		$this->db->where('orders.payed', '1');
		$this->db->limit(1);
		$this->db->join('users_courses','courses.id = users_courses.course_id', 'left');
		$this->db->join('orders','users_courses.order_id = orders.id', 'left');
		if($this->db->count_all('courses')==1)
		{
			return TRUE;
		}
	}
	return FALSE;
}

//Now, you simply do something like this: $has_access = $this->courses_model->user_has_access($user_id, $course_id);
//It should return true or false depending if the user has payed or not for the course
}
