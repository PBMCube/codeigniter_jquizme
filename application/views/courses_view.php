<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var_dump($has_access);

 echo $course->name . '<br />';
 
$i = 1;
  foreach ($course->topics as $topic){
    
        echo "<a href='".base_url('courses/topic/'.$topic->id)."'>$topic->name</a><br />";
    if($i>2 && ($has_access===FALSE)) {
    	echo 'buy course to see this episode (topic)';
}
    $i++;
}
?>


