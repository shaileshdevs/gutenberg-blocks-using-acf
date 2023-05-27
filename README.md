# Gutenberg Blocks Using Acf

## What does this plugin do?
This plugin demonstrates how the Gutenberg Blocks can be created using ACF plugin.

## The file structure
The plugin file structure is as follows:
 - build
   -  testimonial (Gutenberg Block directory)
      - block.json
      - render.php
      - style-index.css
 - shailesh-gutenberg-blocks-using-acf.php

## To create Gutenberg Block
To create Guteberg Block, just create the directory inside the build directory. Your directory must contain the block.json and render.php files. You can also include CSS file and JS file in the directory. You should also define the path of the PHP, CSS and JS files in it.

## File Information
### block.json
- This file contains the metadata about the Gutenberg Block. To create Gutenberg Block using ACF, this file must contain the acf key in it.

### render.php
- This file is responsible to output the content on the frontend as well as on the backend editor.
- You can use the ACF function get_field in it. This function will retrieve the data corresponding to the current instance of your Gutenberg Block.

### style-index.css
- This file contains the CSS file. The CSS added in this file will be loaded on the frontend as well as on the backend.

### scripts.js
- This file contains the JS code.

## Useful Resources
- The Torquemag https://torquemag.io/2020/01/create-gutenberg-block-with-acf/
- The ACF function acf_register_block_type https://www.advancedcustomfields.com/resources/acf_register_block_type/
- The ACF block registration using block.json file https://www.advancedcustomfields.com/resources/acf-blocks-with-block-json/
- The WordPress block.json file https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/
