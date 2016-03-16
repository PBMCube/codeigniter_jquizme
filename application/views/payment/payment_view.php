<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var_dump($course);
var_dump($order_ref);
?>


    <?php echo form_open('payment/checkout');?>
    

<input type="hidden" name="order_ref" value="<?php echo ($course->name); ?>" />
<input type="hidden" name="course_name" value="<?php echo ($order_ref); ?>" />
<input type="hidden" name="bank_info" value="bank_info" />

<input type="submit" value="go">
</form>

