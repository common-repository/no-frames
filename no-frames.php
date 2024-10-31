<?php

/*
Plugin Name: No Frames
Version: 0.2.1
Description: Frees your site from browser frames
Author: Vladimir Prelovac
Author URI: http://www.prelovac.com/vladimir/
Plugin URI: http://www.prelovac.com/vladimir/wordpress-plugins/no-frames
*/

/*  
Copyright 2008  Vladimir Prelovac  (email : vprelovac@gmail.com)

Released under GPL License.
*/

add_action( 'wp_head', 'wp_no_frames', -10 );

function wp_no_frames( ) {

if (is_admin() || current_user_can('level_10'))
	return;	
	
echo '
<script type="text/javascript">
<!--
	if (top.location!= self.location) {
		top.location = self.location.href
	}
//-->
</script>';
}
