<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$passErr=$loginErr=$unameErr="";
?>
<div class="container-fluid">
<div class="row">
<div class="jumbotron" style="margin-top: -20px;text-align:center;">
<h2 style="font-family: 'Arial', 'sansserif';">NITW Bill Mangement System Login</h2>
</div>
<div class="col-md-3" style="padding-left:30px;">
	<img src="<?php echo base_url(); ?>static/images/logo.jpg" class="img img-rounded" />
</div>
<div class="col-md-8">
<form action="" method="POST" class="form-horizontal">
	<div class="form-group">
		<div class="col-md-5">
			<input type="text" class="form-control input-md" placeholder="Username" name="uname">
			<span style="color: #ff0000;" class="control-label"><?php echo $unameErr; ?></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-5">
			<input type="password" class="form-control input-md" placeholder="Password" name="pass">
			<span style="color: #ff0000;"class="control-label"><?php echo $passErr; ?></span>
		</div>
		<div class="col-md-6">
			<span style="color: #ff0000;"class="control-label"><?php echo $loginErr; ?></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-5">
		<label>Log In As :&dash;</label>
		<select data-toggle="select" class="form-control select select-default" id="post">
          <option value="0" selected>Super Administrator</option>
          <option value="1">Department Administrator</option>
          <option value="2">Department Member</option>
          <option value="3">Inventory Member</option>
        </select>
		</div>
		<input type="hidden" id="hidden" name="hidden" value="" />
	</div>
	<div class="form-group" id="dept">
		<div class="col-md-5">
		<label>Choose Department :&dash;</label><br />
		<input type="radio" name="group1" value="ece" checked> ECE</input><br />
		<input type="radio" name="group1" value="cse"> CSE</input><br />
		<input type="radio" name="group1" value="eee"> EEE</input><br />
		<input type="radio" name="group1" value="mech"> Mech</input><br />
		<input type="radio" name="group1" value="civil"> Civil</input><br />
		<input type="radio" name="group1" value="chem"> Chem</input><br />
		<input type="radio" name="group1" value="mme"> MME</input><br />
		<input type="radio" name="group1" value="biotech"> BioTech </input>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-5">
			<button class="btn btn-success btn-md" type="submit">Login</button>
		</div>
	</div>
</form>
</div>
</div>
<script type="text/javascript">
	$(function() {
      	$("#post").change(function(){
      		var pName= $('option:selected', this).attr('value');
      		//alert(pName);
      		$('#hidden').val(pName);
      		if (pName=='1' || pName=='2') {
      			$("#dept").show();
      			//alert('show');
      		} else {
      			$("#dept").hide();
      			//alert('hide');
      		}
   		});
	});
</script>