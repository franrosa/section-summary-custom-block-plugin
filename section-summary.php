<?php
/**
 * Plugin Name:       Section Summary
 * Description:       Shows a summary of a section of a site, either a post type or a static page
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Fran Rosa
 * License:           GNU General Public License v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       section-summary
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function franrosa_section_summary_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'franrosa_section_summary_block_init' );
