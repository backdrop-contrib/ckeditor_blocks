<?php
/**
 * @file
 * API documentation for CKEditor Blocks.
 */

/**
 * Edit CKEditor Block list
 *
 * This hook is invoked when retrieving the list of supported block modules to
 * be inserted with the plugin or to be rendered. It allows you to add new
 * block types by adding modules to the supported block modules list.
 *
 * @param $supported_block_modules
 *   A list of supported modules for blocks to be inserted using the plugin.
 *   Passed by reference.
 */
function hook_ckeditor_blocks_module_list_alter(&$supported_block_modules) {
  $supported_block_modules += array('my_module');
}
