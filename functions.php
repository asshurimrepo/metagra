<?php

	require_once( 'inc/helpers.php' );
	require_once( 'inc/hooks.php' );

	add_theme_support( 'menus' );

	add_action('admin_menu', 'my_menu');

	function my_menu(){
		add_menu_page( 'Form Entries', 'Applicants', 'view_applicants', 'form-entries', 'form_entries_display', 'http://alfareedajobs.com/wp-content/uploads/2014/12/users6-21.png', 11 );
	}

	function form_entries_display( ){
		get_template_part('partials/cv_registration_iframe');
	}

