<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('srsse_widgettitle');
delete_option('srsse_setting');
delete_option('srsse_height_display_length_s1');
delete_option('srsse_s1');
delete_option('srsse_height_display_length_s2');
delete_option('srsse_s2');
delete_option('srsse_height_display_length_s3');
delete_option('srsse_s3');
delete_option('srsse_height_display_length_s4');
delete_option('srsse_s4');
 
// for site options in Multisite
delete_site_option('srsse_widgettitle');
delete_site_option('srsse_setting');
delete_site_option('srsse_height_display_length_s1');
delete_site_option('srsse_s1');
delete_site_option('srsse_height_display_length_s2');
delete_site_option('srsse_s2');
delete_site_option('srsse_height_display_length_s3');
delete_site_option('srsse_s3');
delete_site_option('srsse_height_display_length_s4');
delete_site_option('srsse_s4');