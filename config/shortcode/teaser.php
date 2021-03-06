<?php
/**
 * Runtime configuration defaults for the `teaser` shortcode.
 *
 * @package     KnowTheCode\CollapsibleContent\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GPL-2.0+
 */
namespace KnowTheCode\CollapsibleContent\Shortcode;


return array(

	/**=================================================
	 * Shortcode name [teaser]
	 *==================================================*/
	'shortcode_name'              => 'teaser',

	/**=================================================
	 * Path to the view files
	 *==================================================*/
	'view'                        => COLLAPSIBLE_CONTENT_DIR . 'src/shortcode/views/teaser.php',

	/**=================================================
	 * Defined shortcode default attributes.  Each is
	 * overridable by the author.
	 *==================================================*/
	'defaults'                    => array(
		'show_icon'       => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon'       => 'dashicons dashicons-arrow-up-alt2',
		'visible_message' => '',
	),
);
