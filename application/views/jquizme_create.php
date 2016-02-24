<!DOCTYPE html>
<html>
    <head>
        <title>jQuery CloneYa demo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <style type="text/css">
            .demo-wrap{
                margin: 40px auto;
                display:block;
                position:relative;
                max-width:500px;
            }
            .inner-wrap, .inner-inner-wrap{
                margin-left:10px;
                padding-left:10px;
                border-left:1px #ccc solid;
                padding-bottom:10px;
                margin-bottom:10px;
            }
            input, textarea { 
                padding: 9px; 
                border: solid 1px #E5E5E5; 
                outline: 0; 
                font: normal 13px/100% Verdana, Tahoma, sans-serif; 
                width: 200px; 
                background: #FFFFFF; 
            } 

            textarea { 
                width: 400px; 
                max-width: 400px; 
                height: 150px; 
                line-height: 150%; 
            } 

            input:hover, textarea:hover, 
            input:focus, textarea:focus { 
                border-color: #C9C9C9; 
            } 

            .form label { 
                margin-left: 10px; 
                color: #999999; 
            } 

            .submit input { 
                width: auto; 
                padding: 9px 15px; 
                background: #617798; 
                border: 0; 
                font-size: 14px; 
                color: #FFFFFF; 
            }
        </style>
    </head>
    <body>
        <!--simple clone demo start-->

        <!--simple clone demo end-->
        
                <!--nested clone demo start-->
        <div class="nest-clone demo-wrap">
            <h2>Create Asset</h2>
           
            
            <?php echo validation_errors(); ?>

<?php echo form_open('Jquizme/create'); ?>

<div class="toclone">
                    
                    <p class="name"> 
                        <input type="text" name="title" id="sname" /> 
                        <label for="name">Name</label> 
                    </p> 
                    
                      <label for="course">Questions type</label><br />
  <input type="radio" name="type" value="fill"> fill in the blanks<br>
  <input type="radio" name="type" value="multi">Dropdown<br>
  <input type="radio" name="type" value="multiList">multiple choice<br>
  <input type="radio" name="type" value="trueOrFalse">true Or False<br>
  <input type="radio" name="type" value="flashCards">flash Cards<br>
  
                    <div class="nest-clone inner-wrap">
                        <div class="toclone">
                            <strong>Questions</strong>
                            <p class="ques"> 
                                <input type="text" name="question[0][ques]" /> 
                                <label for="ques">Set Question</label> 
                            </p> 
                            
                            <p class="ans"> 
                                <input type="text" name="question[0][ans]" /> 
                                <label for="ans">Correct Answer</label> 
                            </p>

                            <p class="ansInfo"> 
                                <input type="text" name="question[0][ansInfo]" /> 
                                <label for="ansInfo">answer Info</label> 
                            </p>
                            

                            

                              
                           
                            <a href="#" class="clone">clone</a>
                            <a href="#" class="delete">delete</a>
                        </div>
                    </div>
                    <!-- <a href="#" class="clone">clone</a>
                    <a href="#" class="delete">delete</a> -->
                </div>

                <p class="submit"> 
                    <input type="submit" value="Save" /> 
                </p> 

            </form>
        </div>
        <!--nested clone demo end-->
    </body>
<script type="text/javascript" src="<?php echo base_url("public/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/jquery-cloneya.min.js"); ?>"></script>

<script type="text/javascript">

$(document).ready(function() {
 

 
 
$('.nest-clone').cloneya({
serializeIndex     : true,
preserveChildCount  : true

});
        




});

</script>
</html>