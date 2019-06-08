<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Contact Us</h2>
	<p>"Contact Us" conten goes here.  I'll stick with teh "lorem ipsum" as well, so that the footer isn't immediately following this text.</p>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
 




            <div class="col-xl-8 offset-xl-2 py-5 text-left">

               
                <p class="lead">We serve for both scheduled and unscheduled arrangements.</p>

                <!-- We're going to place the form here in the next step -->
                <form id="contact-form" method="post" action="contact.php" role="form">

				    <div class="messages"></div>

				    <div class="controls">

				        <div class="row">
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_name">Firstname *</label>
				                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_lastname">Lastname *</label>
				                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				        </div>
				        <div class="row">
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_email">Email *</label>
				                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_need">Please specify your need *</label>
				                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
				                        <option value=""></option>
				                        <option value="Request quotation">Request quotation</option>
				                        <option value="Request order status">Request order status</option>
				                        <option value="Request copy of an invoice">Request copy of an invoice</option>
				                        <option value="Other">Other</option>
				                    </select>
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				        </div>
				        <div class="row">
				            <div class="col-md-12">
				                <div class="form-group">
				                    <label for="form_message">Message *</label>
				                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				            <div class="col-md-12">
				                <input type="submit" class="btn btn-success btn-send" value="Send message">
				            </div>
				        </div>
				        <div class="row">
				            <div class="col-md-12">
				                <p class="text-muted">
				                    <strong>*</strong> These fields are required.
				                </p>
				            </div>
				        </div>
				    </div>

				</form>

            </div>

</div>

<?php include("includes/footer.php");?>

</body>
</html>