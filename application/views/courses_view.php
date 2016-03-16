<link rel="stylesheet" type="text/css" href= "http://jquizme.googlecode.com/hg/releases/pre-release%20of%20jQuizMe%202.2%20fixed/jQuizMe-2.2.css"/>


<div class="lesson"><?php echo $course->preview . '<br />'; ?></div>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//var_dump($has_access);
//var_dump($course);

echo $course->name . '<br />';

$i = 1;
foreach ($course->topics as $topic) {

    echo "<a class='course_details' href='" . $topic->id . "'>$topic->name</a><br />";
    if ($i > 2 && ($has_access === FALSE)) { 
        //echo 'buy course to see this episode (topic)';
        //echo '<a href="#" class="add">link</a>';
        //echo "<a class='add' id='" . $course->id . "' href='orders/create/'.$course->id'>add</a><br />";
        
      echo anchor('orders/add/'.$course->id,'Add','class="add"');
        
        
    }
    $i++;
}
?>





<div class="assessment"></div>

<script type="text/javascript" src="<?php echo base_url("public/plugins/jQuery/jQuery-2.1.4.min.js"); ?>"></script>






<script>

    $(function () {


        $('.course_details').click(function (e) {
            e.preventDefault();
            var topic_id = $(this).attr("href");
            //console.log(topic_id);
            $('.assessment').html('<div class="row"><div class="text-center"><img src="<?php echo base_url("public/dist/img/preloader.gif"); ?>"/><div><div>');
            $('.lesson').html('<div class="row"><div class="text-center"><img src="<?php echo base_url("public/dist/img/preloader.gif"); ?>"/><div><div>');
            $.ajax({
                url: 'http://codeigniter_jquizme.dev/courses/topic/' + topic_id,
                success: function (data) {
                    var obj = JSON.parse(data);
                    //console.log(data);
                    //var theQuiz = data["quiz"];
                    //var data = JSON.parse(data);
                    //console.log(obj);

                    for (i = 0; i < obj.length; i++) {
                        $('.lesson').html(obj[i].message);
//console.log(obj[i].message)
                        //console.log(obj[i].quiz)
                        var questions = obj[i].quiz;

//alert(JSON.stringify(questions));
//Convert string back to JSON for quiz to work                       
                        var json = JSON.stringify(questions);
                        var quiz = JSON.parse(json);
//Convert string back to JSON for quiz to work    

                        var options = {
                            addToEnd: " has what periodic symbol ?",
                            quizType: "fill"
                        };
                        options.statusUpdate = function (quizInfo, $quiz) {
                            if (quizInfo.hasQuit) {
                                //console.dir( quizInfo );

                                var totalScore = quizInfo.score;
                                //console.log(totalScore);
                                console.log(topic_id);


                                var url = "http://codeigniter_jquizme.dev/score/create/" + topic_id + "/" + totalScore;
                                console.log(url);

                                $.post(url);

                            }
                        };

                        // quiz has 2 problems, while the options has set the quiz type to fill in the blank.
                        $('.assessment').html('<div class="quizArea"><div>');

                        $(".quizArea").jQuizMe(quiz, options);

                        //Display Version information.
                        //$( "#jqueryVersion" ).text( $.fn.jquery );
                        //$( "#jQuizMeVersion" ).text( $.fn.jQuizMe.version );
                        //Add quiz

                        for (i = 0; i < questions.length; i++) {

                            console.log(questions[i].ques)
                            console.log(questions[i].ans)
                            console.log(questions[i].ansInfo)
                            console.log(questions[i].ansSel)
                        }
                    }
                },
                error: function () {
                },
                complete: function () {
                }
            });

        });


//shopping cart ajax

        //$('.add').click(function (e) {
           // e.preventDefault();
           // var course_id = $(this).attr("id");
           // var course_name = $(this).attr("href");
           // console.log(course_id);
           // console.log(course_name);
           // $.ajax({
               // url: 'http://codeigniter_jquizme.dev/cart/add/' + course_id,
               // success: function (data) {
              //  },
             //   error: function () {
             //   },
              //  complete: function () {
              //  }
          //  });
            
       // });

//shopping cart ajax

    });
</script>