<?php

/**
 * Plugin Name:       BC PublishPress Multisite Settings
 * Plugin URI:        https://github.com/bellevuecollege/pp-multisite-settings
 * Description:       A plugin to manage PublishPress multisite settings.
 * Version:           1.0.0
 * Author:            Bellevue College IT Services
 * Author URI:        https://www.bellevuecollege.edu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pp-multisite-settings
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * PublishPress Permissions Plugin
 * 
 * This is sourced from https://publishpress.com/knowledge-base/network-wide-permissions/
 **/

add_filter( 'presspermit_options', 'pp_multisite_settings_forced_options', 99 );

function pp_multisite_settings_forced_options( $def_options ) {

	// NOT CURRENTLY NEEDED, BUT LEFT HERE FOR FUTURE USE
	// $def_options['presspermit_enabled_post_types'] = array(
	// 	'post' => 1,
	// 	'page' => 1,
	// 	'attachment' => 1,
	// 	'wp_navigation' => 1,
	// 	'differentiator' => 1,
	// 	'identity-support' => 1,
	// 	'student-timeline' => 1,
	// 	'news' => 1,
	// 	'organization' => 1,
	// 	'pathway' => 1,
	// 	'focus-area' => 1,
	// 	'program' => 1,
	// 	'program' => 1,
	// );

	// $def_options['presspermit_enabled_taxonomies'] = array(
	// 	'category' => 1,
	// 	'news_topic' => 1,
	// 	'news_type' => 1,

	// );

	// Force media access options
	$def_options['presspermit_admin_others_unattached_files'] = 1;
	$def_options['presspermit_admin_others_attached_to_readable'] = 1;
	$def_options['presspermit_admin_others_attached_files'] = 1;
	$def_options['presspermit_edit_others_attached_files'] = 1;
	$def_options['presspermit_attachment_edit_requires_parent_access'] = 0;
	$def_options['presspermit_own_attachments_always_editable'] = 1;


	return $def_options;
}
