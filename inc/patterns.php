<?php

function jc_block_patterns() {

	register_block_pattern(
		'jc-block-patterns/jc-content-upgrade',
		array(
			'title'       => __( 'Content Upgrade', 'jc-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'jc-block-patterns' ),
			
			'content'     => "<!-- wp:heading {\"textAlign\":\"center\"} -->\r\n<h2 class=\"has-text-align-center\">Blob</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\">Access Code</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Blobby</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons -->",
			
			'categories'  => array( 'buttons' ),
		)
	);

}    

add_action( 'init', 'jc_block_patterns' );

