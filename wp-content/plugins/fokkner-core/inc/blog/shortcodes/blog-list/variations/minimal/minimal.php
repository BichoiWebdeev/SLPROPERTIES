<?php

if ( ! function_exists( 'fokkner_core_add_blog_list_variation_minimal' ) ) {
	/**
	 * Function that add variation layout for this module
	 *
	 * @param array $variations
	 *
	 * @return array
	 */
	function fokkner_core_add_blog_list_variation_minimal( $variations ) {
		$variations['minimal'] = esc_html__( 'Minimal', 'fokkner-core' );

		return $variations;
	}

	add_filter( 'fokkner_core_filter_blog_list_layouts', 'fokkner_core_add_blog_list_variation_minimal' );
}
