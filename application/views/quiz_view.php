<link rel="stylesheet" type="text/css" href= "http://jquizme.googlecode.com/hg/releases/pre-release%20of%20jQuizMe%202.2%20fixed/jQuizMe-2.2.css"/>
<p>Using jQuery <span id="jqueryVersion"></span> and jQuizMe <span id="jQuizMeVersion"></span></p>
	<h2>jQuizMe StatusUpdate Demo 1</h2>
	<a href = "http://code.google.com/p/jquizme/wiki/HowToUse" >Back to HowToUse Wiki</a><br/>
	<div id="quizArea"></div>

<script type="text/javascript" src="<?php echo base_url("public/plugins/jQuery/jQuery-2.1.4.min.js"); ?>"></script>
<!-- JQuize code -->
<script src="<?php echo base_url("public/js/jQuizMe-2.2.js"); ?>"></script>
<?php
echo "<script>\n";
echo 'var test = ' . json_encode($quiz, JSON_PRETTY_PRINT) . ';';
echo "\n</script>";
?>
<script type="text/javascript">
$( function($){
    var quiz = <?php echo json_encode($quiz) ?>;


 var options = {
     addToEnd: " has what periodic symbol ?",
            quizType: "fill"
        };
        options.statusUpdate = function( quizInfo, $quiz ){
            if( quizInfo.hasQuit ){
                //console.dir( quizInfo );
                
                var totalScore = quizInfo.score;
                console.log(totalScore);
                
    
                var url = "http://codeigniter_jquizme.dev/score/create/"+totalScore;
                
                $.post(url);
                
            }
        };
	
	// quiz has 2 problems, while the options has set the quiz type to fill in the blank.
        
	$( "#quizArea" ).jQuizMe( quiz, options );
	
	//Display Version information.
	$( "#jqueryVersion" ).text( $.fn.jquery );
	$( "#jQuizMeVersion" ).text( $.fn.jQuizMe.version );
});
</script>
