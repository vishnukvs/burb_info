<?php 	include('includes/header.php');
?>
<!--/contact form-->
<div class="center">
	<h4>Thanks for Visting us</h4>
	<div id="message"></div>
</div>
<div id="preview"> </div>
<div id="formbox">
	<form class="form-horizontal" role="form"id="contact_form" method="post" action="contact_us.php">			
		<div class="form-group">
			<label for="inputName" class="col-xs-2 col-sm-2 control-label">Name</label>
			<div class="col-xs-6 col-md-4">
				<input type="text" class="form-control" id="inputName" placeholder="Name"name="name" required="true">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-xs-2 col-sm-2 control-label">Email</label>
			<div class="col-xs-6 col-md-4">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email"name="email" required="true">
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
<?php include('includes/footer.php'); ?>
</body>
</html>