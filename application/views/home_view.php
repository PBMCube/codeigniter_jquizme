<?php
    echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
    ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php echo form_open('members/login');?>
<input type="text" name="username" class="form-control" placeholder="Username">
<input type="password" name="password" class="form-control" placeholder="Password">
<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
</form>

       

   
   