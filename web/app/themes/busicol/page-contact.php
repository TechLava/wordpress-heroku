<?php define('_BG', true);
	get_header(); ?>

<div class="text-center bg-image" style="background-image: url('<?php echo __BASE.'/img/banner/bradcam_3.png' ?>');">
	<div class="p-5" style="background: rgba(0,0,0,0.6);">
		<div class="p-md-5 mx-auto mt-5" style="max-width: 600px">
			<br/><br/>
			<h2 class="mb-3 text-white">
				<b>Contact Us</b>
			</h2>
			<p style="color: #C7C7C7"><?php echo get_post()->post_content; ?></p>
			<br/>
		</div>
	</div>
</div>
<div class="p-4 my-4 px-lg-5">
	<form method="post" class="form-row">
		<div class="col-12 col-sm-6 col-md-4 mb-4">
			<div class="border bg-light rounded p-3">
				<div class="">
					<i class="fab fa-2x text-success fa-whatsapp"></i>
					<b style="font-size: large;">&nbsp;&nbsp;Whatsapp</b>
				</div>
				<h4 class="mt-3 font-weight-light">
					+234 705 9906 476
				</h4>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-md-4 mb-4">
			<div class="border bg-light rounded p-3">
				<div class="">
					<i class="fab fa-2x text-primary fa-twitter"></i>
					<b style="font-size: large;">&nbsp;&nbsp;Twitter</b>
				</div>
				<h4 class="mt-3 font-weight-light">
					@althectic_solutions
				</h4>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-md-4 mb-4 mx-auto">
			<div class="border bg-light rounded p-3">
				<div class="">
					<i class="fab fa-2x text-danger fa-mailchimp"></i>
					<b style="font-size: large;">&nbsp;&nbsp;Email</b>
				</div>
				<h4 class="mt-3 font-weight-light">
					<?php echo get_bloginfo('admin_email'); ?>
				</h4>
			</div>
		</div>
		<div class="col-12"></div>

		<div class="col-12 col-sm-6 mb-3">
			<label class="form-label">&nbsp;&nbsp;Full Name:</label>
			<input type="text" name="name" class="form-control" placeholder="Name" value="" required />
		</div>
		<div class="col-12 col-sm-6 mb-3">
			<label class="form-label">&nbsp;&nbsp;Email Address:</label>
			<input type="email" name="email" class="form-control" placeholder="Email" value="" required />
		</div>
		<div class="col-12">
			<label class="form-label">&nbsp;&nbsp;Message Group:</label>
			<select class="form-control" name="group" required>
				<option value="support">SUPPORT</option>
				<option value="quote">REQUEST QUOTE</option>
				<option value="inquiry">INQUIRY</option>
			</select>
		</div>
		<div class="col-12 mt-3">
			<label class="form-label">&nbsp;&nbsp;Message Subject: <small>(200)</small></label>
			<input type="text" name="subject" class="form-control" placeholder="Subject" maxlength="200" value="" required />
		</div>
		<div class="col-12 mt-3">
			<label class="form-label">&nbsp;&nbsp;Message: <small>(1000)</small></label>
			<textarea name="message" class="form-control" rows="8" required></textarea>
		</div>
		<div class="col-12 mt-5 text-center">
			<input type="submit" name="contact" class="btn btn-dark rounded-0" value="Send" style="width: 300px" maxlength="1000" required />
		</div>
	</form>
</div>

<br/><br/>
<?php get_footer(); ?>