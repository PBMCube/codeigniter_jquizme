<link rel="stylesheet" type="text/css" href= "http://jquizme.googlecode.com/hg/releases/pre-release%20of%20jQuizMe%202.2%20fixed/jQuizMe-2.2.css"/>


<div class="lesson"><?php echo $course->preview . '<br />'; ?></div>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//var_dump($has_access);

 echo $course->name . '<br />';
 
$i = 1;
  foreach ($course->topics as $topic){
    
        echo "<a class='course_details' href='".$topic->id."'>$topic->name</a><br />";
    if($i>2 && ($has_access===FALSE)) {
    	echo 'buy course to see this episode (topic)';
}
    $i++;
}
?>


<div class="assessment"><div id="quizArea"></div> </div>

<script type="text/javascript" src="<?php echo base_url("public/plugins/jQuery/jQuery-2.1.4.min.js"); ?>"></script>

<script>
    
$(function () {
       
$('.course_details').click(function(e){
    e.preventDefault();
    var topic_id = $(this).attr("href");
    //console.log(topic_id);
    $('.assessment').html('<div class="row"><div class="text-center"><img src="<?php echo base_url("public/dist/img/preloader.gif"); ?>"/><div><div>');
    $('.lesson').html('<div class="row"><div class="text-center"><img src="<?php echo base_url("public/dist/img/preloader.gif"); ?>"/><div><div>');
    $.ajax({
        url: 'http://codeigniter_jquizme.dev/courses/topic/'+topic_id,
        
    	success: function(data){
            
             console.log(data);
             
             var theQuiz = data[1];
         
         console.log(theQuiz);
          
     
          var theQuiz = data.quiz;
          var i = 0;
          while(i<theQuiz.length){
          	console.log(theQuiz[i].ques);
            i++;
          }

    	},

    	error: function(){
    	},

    	complete: function(){
    	}
});
 
});





 

});
</script>