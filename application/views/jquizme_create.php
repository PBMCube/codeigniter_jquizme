 <!--simple clone demo start-->

        <!--simple clone demo end-->
        
                <!--nested clone demo start-->
        <div class="nest-clone demo-wrap">
            <h2>Create Asset</h2>
           
           

<form>

<div class="toclone">
                    
                    <p class="name"> 
                      
                       
                         <input type="text" name="title" /> 
                        <label for="name">Title</label> 
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
                            
                            
                            <div class="nest-clone inner-inner-wrap">
                                <div class="toclone">
                                    <strong>Answer set</strong>
                                    <p class="ansSet"> 
                                        <input type="text" name="ansSet[]" id="addphone" /> 
                                        <label for="ansSet">Answer option</label> 
                                    </p>  
                                    <a href="#" class="clone">clone</a>
                                    <a href="#" class="delete">delete</a>
                                </div>
                            </div>

                            

                              
                           
                            <a href="#" class="clone">clone</a>
                            <a href="#" class="delete">delete</a>
                        </div>
                    </div>
                    <!-- <a href="#" class="clone">clone</a>
                    <a href="#" class="delete">delete</a> -->
                </div>

                <p class="submit"> 
                   
                     <input type="button" id="Save" value="Save" />
                </p> 

            </form>
        </div>
        <!--nested clone demo end-->
 
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

     <!-- iCheck -->
      <script src="<?php echo base_url("public/plugins/iCheck/icheck.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/application.js"); ?>"></script>