<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-bar">
  <div class="container-fluid">
    <div class="navbar-header">
      <p class="navbar-brand">NITW Apps</p>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="<?php echo base_url(); ?>welcome/department">Departments</a></li>
        <li><a href="<?php echo base_url(); ?>welcome/query"> Query</a></li>
        <li><a href="<?php echo base_url(); ?>welcome/about"> About</a></li>
        <li><a href="<?php echo base_url(); ?>welcome/contact"> Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>welcome/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?php echo base_url(); ?>welcome/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br /><br /><br />