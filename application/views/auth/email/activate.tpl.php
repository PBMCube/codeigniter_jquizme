<html>
<body>
	<h1><?php echo sprintf(lang('email_activate_heading'), $identity);?></h1>
        <p>'Once you have paid you will get a email confirming your activation'</p>
<?php
 /*
  * sendind the activation code
echo <<<ENDHTML
	<p><?php echo sprintf(lang('email_activate_subheading'), anchor('auth/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>
ENDHTML;
*/?>
</body>
</html>