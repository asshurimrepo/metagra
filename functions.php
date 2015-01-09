<?php

	require_once( 'inc/helpers.php' );
	require_once( 'inc/hooks.php' );
	require_once( 'inc/dimox_breadcrumbs.php' );

	add_theme_support( 'menus' );

	add_theme_support( 'post-thumbnails' );

	add_action('admin_menu', 'my_menu');

	function my_menu(){
		add_menu_page( 'Form Entries', 'Applicants', 'view_applicants', 'form-entries', 'form_entries_display', 'http://alfareedajobs.com/wp-content/uploads/2014/12/users6-21.png', 11 );
	}

	function form_entries_display( ){
		get_template_part('partials/cv_registration_iframe');
	}


	add_action( 'init', 'my_script_enqueuer' );

	function my_script_enqueuer() {
		wp_localize_script( 'my_voter_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
		wp_enqueue_script( 'my_voter_script' );

	}