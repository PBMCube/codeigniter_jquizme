<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

<!-- Bootstrap css -->

<link rel="stylesheet" href="<?php echo base_url("public/css/jQuizMe.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">
 </head>
 <body>
<div id="quizArea"/>


</body>
<script type="text/javascript" src="<?php echo base_url("public/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/jQuizMe-2.2.1.min.js"); ?>"></script>
<script type="text/javascript">
$( function($){
	var quiz = [
        { 
                ques: "Silver", //question
                ans: "Ag", // answer
                ansInfo : "More info <a href='http://www.periodictable.com/Elements/079/index.html'>here</a>"  // answer information.
        },
        {
                ques: "Gold.", 
                ans: "Au", 
                ansInfo : "Gold-Au <br/>More info <a href='http://www.periodictable.com/Elements/079/index.html'>here</a>"
        }
	];
	var options = {
			addToEnd: " has what periodic symbol ?",
			quizType: "fill"  //Or you can write fillInTheBlank instead of fill.
	};
	// quiz has 2 problems, while the options has set the quiz type to fill in the blank.
	
	options.statusUpdate = function( info, $questions ){
	//$( "#score-right" ).html( info.numOfRight ); 
	//$( "#score-wrong" ).html( info.numOfWrong ); 
	//console.log(info.currIndex);
	console.log(info.total); 
	console.log(info.numOfRight);
	console.log(info.numOfWrong); 
	
	}
	$( "#quizArea" ).jQuizMe( quiz, options );
	
	//Display Version information.
	$( "#jqueryVersion" ).text( $.fn.jquery );
	$( "#jQuizMeVersion" ).text( $.fn.jQuizMe.version );
});
</script>
</html>


