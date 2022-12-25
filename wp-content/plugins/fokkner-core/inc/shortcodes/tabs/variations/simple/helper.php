<?php

if ( ! function_exists( 'fokkner_core_add_tabs_variation_simple' ) ) {
	/**
	 * Function that add variation layout for this module
	 *
	 * @param array $variations
	 *
	 * @return array
	 */
	function fokkner_core_add_tabs_variation_simple( $variations ) {
		$variations['simple'] = esc_html__( 'Simple', 'fokkner-core' );

		return $variations;
	}

	add_filter( 'fokkner_core_filter_tabs_layouts', 'fokkner_core_add_tabs_variation_simple' );
}
