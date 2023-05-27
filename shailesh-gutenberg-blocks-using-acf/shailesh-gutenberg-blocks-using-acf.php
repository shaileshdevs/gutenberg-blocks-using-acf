<?php
/**
 * Plugin Name:       Shailesh Gutenberg Blocks using ACF
 * Description:       Gutenber blocks to ease your tasks.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Shailesh
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       shailesh-gutenberg-blocks-using-acf
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_shailesh_gutenberg_blocks_block_init() {
	$block_json_files = glob( __DIR__ . '/build/*/block.json' );

	// auto register all blocks that were found.
	foreach ( $block_json_files as $filename ) {
		$block_folder = dirname( $filename );
		register_block_type( $block_folder );
	}
}

add_action( 'init', 'create_block_shailesh_gutenberg_blocks_block_init' );
