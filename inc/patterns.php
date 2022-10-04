<?php

function custom_block_patterns() {

	register_block_pattern(
		'custom-block-patterns/custom-content-upgrade',
		array(
			'title'       => __( 'Content Upgrade', 'jc-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'jc-block-patterns' ),
			
			'content'     => "<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:buttons -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Hello</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons -->",
			
			'categories'  => array( 'buttons' ),
		)
	);

	register_block_pattern(
		'custom-block-patterns/custom-content-upgrade',
		array(
			'title'       => __( 'Content Upgrade', 'jc-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'jc-block-patterns' ),
			
			'content'     => "",
			
			'categories'  => array( 'buttons' ),
		)
	);


}    

add_action( 'init', 'custom_block_patterns' );

