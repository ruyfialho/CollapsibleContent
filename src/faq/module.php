<?php
/**
 * FAQ Module Handler
 *
 * @package     KnowTheCode\Module\FAQ
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GPL-2.0+
 */
namespace KnowTheCode\Module\FAQ;

define( 'FAQ_MODULE_TEXT_DOMAIN', COLLAPSIBLE_CONTENT_TEXT_DOMAIN );

/**
 * Autoload plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'custom/post-type.php',
		'custom/taxonomy.php',
		'shortcode/shortcode.php',
		'template/helpers.php',
	);

	foreach( $files as $file ) {
		include( __DIR__ . '/' . $file );

	}
}
autoload();

register_activation_hook( COLLAPSIBLE_CONTENT_PLUGIN, __NAMESPACE__ . '\activate_plugin' );
/**
 * Initialize the rewrites for our new custom post type
 * upon activation.
 *
 * @since 1.0.0
 *
 * @return void
 */
function activate_plugin() {
	Custom\register_faq_custom_post_type();
	Custom\register_custom_taxonomy();

	flush_rewrite_rules();
}

register_deactivation_hook( COLLAPSIBLE_CONTENT_PLUGIN, __NAMESPACE__ . '\deactivate_plugin' );
/**
 * The plugin is deactivating.  Delete out the rewrite rules option.
 *
 * @since 1.0.0
 *
 * @return void
 */
function deactivate_plugin() {
	delete_option( 'rewrite_rules' );
}

register_uninstall_hook( COLLAPSIBLE_CONTENT_PLUGIN, __NAMESPACE__ . '\uninstall_plugin' );
/**
 * Plugin is being uninstalled. Clean up after ourselves...arsilly.
 *
 * @since 1.0.0
 *
 * @return void
 */
function uninstall_plugin() {
	delete_option( 'rewrite_rules' );
}