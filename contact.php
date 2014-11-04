<?php 	include('includes/header.php');
require_once('dbconn.php');
?>
<!--/contact form-->
<div class="center">
	<h4>Thanks for Visting us</h4>
	<div id="message"></div>
</div>
<form class="form-horizontal" role="form"id="contact_form" method="post" action="contact_us.php">			
	<div class="form-group">
		<label for="inputName" class="col-xs-2 col-sm-2 control-label">Name</label>
		<div class="col-xs-6 col-md-4">
			<input type="text" class="form-control" id="inputName" placeholder="Name"name="name">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-xs-2 col-sm-2 control-label">Email</label>
		<div class="col-xs-6 col-md-4">
			<input type="email" class="form-control" id="inputEmail3" placeholder="Email"name="email">
		</div>
	</div>
	<div class="form-group">
		<label for="inputcomments" class="col-xs-2 col-sm-2 control-label">Message</label>
		<div class="col-xs-6 col-md-4">
			<textarea rows="14" cols="50"class="form-control" placeholder="Message"name="message"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-10 col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</div>
</form>
<!--/end of contact form-->
<div class="row">
	<footer id="footer_background">
		<div class="container">
			<p>&copy 2014 All Rights Reserved BurbTech</p>
		</div>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>