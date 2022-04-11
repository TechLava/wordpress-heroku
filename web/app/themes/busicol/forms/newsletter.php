<?php

	if( isset($_GET['subscribe']) && !empty($_GET['d_name']) && !empty($_GET['d_email']) ){
		$name = $_GET['d_name'];
		$email = $_GET['d_email'];

		$id = username_exists( $name );
		if ( !$id and email_exists($email) == false ) {
			$random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
			$id = wp_create_user( $name, $random_password, $email );
			if( is_numeric($id) ){ ?>
			<div class="p-4">
				<div class="p-4 mx-auto shadow-sm text-success rounded" style="max-width: 600px">
					You've subscribed, you'll be notified of new events.
				</div>
			</div>
			<?php die('<script>setTimeout(function(){ location.href = "?"; }, 1000);</script>'); }
		}

	} else if( isset($_GET['subscribe']) ) { ?>
		<div class="p-4">
			<div class="p-4 mx-auto shadow-sm text-success rounded" style="max-width: 600px">
				An error occurred!
			</div>
		</div>
		<?php die('<script>setTimeout(function(){ location.href = "?"; }, 1000);</script>');
	}