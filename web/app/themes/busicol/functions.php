<?php

	include 'config.php';

	add_theme_support('post-thumbnails');

	define('__BASE', get_template_directory_uri());

	function show( ...$args ){
		$seen = '******';
		foreach ($args as $value) {
			if( !empty($value) ){
				$seen = $value;
				break;
			}
		}
		if( is_string($seen) ){
			echo $seen;
		}
		return $seen;
	}

	#add_action( 'init', 'contact_processor' );
	function contact_processor(){
    	include 'forms/contact.php';
	}