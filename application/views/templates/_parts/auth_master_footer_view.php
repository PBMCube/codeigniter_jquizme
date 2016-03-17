<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<footer>
    <div class="container">
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>
</footer>
<?php echo $before_closing_body;?>

<script src="<?php echo base_url("public/plugins/jQuery/jQuery-2.1.4.min.js"); ?>"></script>

<!-- Morris.js charts -->

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
 
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url("public/bootstrap/js/bootstrap.min.js"); ?>"></script>



<!-- Sparkline -->
    <script src="<?php echo base_url("public/plugins/sparkline/jquery.sparkline.min.js"); ?>"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url("public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"); ?>"></script>
    <script src="<?php echo base_url("public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url("public/plugins/knob/jquery.knob.js"); ?>"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url("public/plugins/daterangepicker/daterangepicker.js"); ?>"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url("public/plugins/datepicker/bootstrap-datepicker.js"); ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url("public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"); ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url("public/plugins/slimScroll/jquery.slimscroll.min.js"); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("public/plugins/fastclick/fastclick.min.js"); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url("public/dist/js/app.min.js"); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url("public/dist/js/pages/dashboard.js"); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url("public/dist/js/demo.js"); ?>"></script>
    
    
     <!-- iCheck -->
      <script src="<?php echo base_url("public/plugins/iCheck/icheck.min.js"); ?>"></script>
      
           <!-- Custom code -->
      <script src="<?php echo base_url("public/js/application.js"); ?>"></script>

  <!-- JQuize code -->
<script src="<?php echo base_url("public/js/jQuizMe-2.2.js"); ?>"></script>

</body>
</html>