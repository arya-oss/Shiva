<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$passErr=$loginErr=$unameErr="";
?>
<div class="container-fluid">
<div class="row">
<div class="jumbotron" style="margin-top: -20px;text-align:center;">
<h2 style="font-family: 'Arial', 'sansserif';">NITW Bill Mangement System Login</h2>
</div>
<div class="col-md-4" style="padding-left:30px;">
	<img src="<?php echo base_url(); ?>static/images/logo.jpg" class="img img-rounded" />
</div>
<div class="col-md-8">
<?php
	$attr=array('class'=>'form-horizontal', 'id'=>'login_form');
	$data = array(
        'name'        => 'user_name',
        'type'        => 'text',
        'id'          => 'user_name',
        'placeholder' => 'Username',
        'class'       => 'form-control input-md',
    );
	$pwd = array(
        'name'        => 'pass_word',
        'type'        => 'password',
        'id'          => 'pass_word',
        'placeholder' => 'Password',
        'class'       => 'form-control input-md',
    );
    $submit=array(
    	'name'    => 'submit',
    	'type'    => 'submit',
    	'value'   => 'login',
    	'class'   => 'btn btn-success',
    );
    $options = array(
        '0'  => 'Super Administrator',
        '1'  => 'Department Administrator',
        '2'  => 'Department Member',
        '3'  => 'Inventory Member',
    );
    $ctrl = array (
    	'class' => 'form-control',
    	'name'  => 'role',
    	'id'    => 'role',
    );
    $js = 'id="shirts" onChange=""';
?>
<?php echo form_open('welcome/validate_login', $attr); ?>
<div class="form-group">
	<div class="col-md-5">
		<?php echo form_input($data); ?>
	</div>
</div>
<div class="form-group">
	<div class="col-md-5">
		<?php echo form_password($pwd); ?>
	</div>
</div>
<div class="form-group">
	<div class="col-md-5">
		<?php echo "<p><b>Login As :</b></p>"; ?>
		<?php echo form_dropdown($ctrl, $options, '1', $js); ?>
	</div>
</div>
<div class="form-group" id="dept">
	<div class="col-md-5">
		<?php echo "<b><u>Select Department</u></b>"."<br />"; ?>
		<?php echo form_radio('branch', '0', TRUE). " ECE"."<br />"; ?>
		<?php echo form_radio('branch', '1', TRUE). " CSE"."<br />"; ?>
		<?php echo form_radio('branch', '2', TRUE). " EEE"."<br />"; ?>
		<?php echo form_radio('branch', '3', TRUE). " Mech"."<br />"; ?>
		<?php echo form_radio('branch', '4', TRUE). " Civil"."<br />"; ?>
		<?php echo form_radio('branch', '5', TRUE). " Chem"."<br />"; ?>
		<?php echo form_radio('branch', '6', TRUE). " MME"."<br />"; ?>
		<?php echo form_radio('branch', '7', TRUE). " Biotech"."<br />"; ?>
	</div>
</div>
<div class="form-group">
	<div class="col-md-5">
		<?php echo form_submit($submit); ?>
	</div>
</div>
</div>
</div>
<script type="text/javascript">
	$(function() {
      	$("#role").change(function(){
      		var pName= $('option:selected', this).attr('value');
      		$('#hidden').val(pName);
      		if (pName=='1' || pName=='2') {
      			$("#dept").show();
      		} else {
      			$("#dept").hide();
      		}
   		});
	});
</script>