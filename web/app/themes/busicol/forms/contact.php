<?php

	if( isset($_POST['contact']) ){
		$GLOBALS['errors'] = array();
		$name = $_POST['name'];
		$email = $_POST['email'];
		$group = $_POST['group'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		global $errors;

		if( checkErrors($name, $email, $group, $subject, $message) ){
			$composed = "<h3>$subject</h3><hr/><p>$message</p><hr/>Posted in <b>$group</b> By <i>$name</i>, $email";
			$subject = 'Website Message: '.$subject;
			$to = get_bloginfo('admin_email');

			$headers = array('Content-Type: text/html; charset=UTF-8');
			$mail = wp_mail( $to, $subject, $composed, $headers );

			if( $mail ){

			?>
			<div class="p-4">
				<div class="p-4 mx-auto shadow-sm text-success rounded" style="max-width: 600px">
					Message sent successfully
				</div>
			</div>
			<?php } else { ?>
			
			<div class="p-4">
				<div class="p-4 mx-auto shadow-sm text-success rounded" style="max-width: 600px">
					An error occurred!
				</div>
			</div>

			<?php }

			die('<script>setTimeout(function(){ location.href = "?"; }, 1000);</script>');
		} else {
			?>
			<div class="p-4">
				<div class="p-4 mx-auto shadow-sm text-success rounded" style="max-width: 600px">
					An error occurred!
				</div>
			</div>
			<?php die('<script>setTimeout(function(){ location.href = "?"; }, 1000);</script>');
		}
	}

	function checkErrors($name, $email, $group, $subject, $message) {
		global $errors;
		if( $name==''||strlen($name)>20 ){
			$errors[] = 'Please supply a genuine name';
		}
		if( $email==''||strlen($name)>50 ){
			$errors[] = 'Please supply a genuine email address';
		}
		if( $subject==''||strlen($subject)>230 ){
			$errors[] = 'supply a subject not more than 200 characters';
		}
		if( $message==''||strlen($message)>1100 ){
			$errors[] = 'supply a message not more than 1000 characters';
		}

		return !boolval(sizeof($errors));
	}