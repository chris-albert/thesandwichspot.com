<?php

	wp_register_script('jq', "http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js", array(), '1.61');
	wp_register_script( 'tss-script', get_bloginfo('template_url') . '/js/script.js', array( 'jq' ) );
	wp_register_script( 'tss-easing', get_bloginfo('template_url') . '/js/jquery.easing.1.3.js', array( 'jq' ) );
	wp_register_script( 'tss-cycle', get_bloginfo('template_url') . '/js/jquery.cycle.all.js', array( 'jq' ) );

?>