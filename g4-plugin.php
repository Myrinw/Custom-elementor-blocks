
<?php
/**
 * Plugin Name:       G4-plugin
 * Plugin URI:        https://myrin.nl
 * Description:       G4 plgin
 *  Version:          1.0
 */



define('ELEMENTOR_AWESOMESAUCE', __FILE__);

/**
 * Include the Elementor_Awesomesauce class.
 */
require plugin_dir_path(ELEMENTOR_AWESOMESAUCE) . 'class-elementor-awesomesauce.php';

function myplugin_settings()
{
	// Add tag metabox to page
	//     register_taxonomy_for_object_type('post_tag', 'page'); 
	// Add category metabox to page
	register_taxonomy_for_object_type('category', 'page');
}
// Add to the admin_init hook of your theme functions.php file 
add_action('init', 'myplugin_settings');
