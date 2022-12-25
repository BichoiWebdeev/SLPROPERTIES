<?php

if ( ! function_exists( 'fokkner_core_add_property_list_variation_info_hover' ) ) {
	function fokkner_core_add_property_list_variation_info_hover( $variations ) {
		$variations['info-hover'] = esc_html__( 'Info On Hover', 'fokkner-core' );

		return $variations;
	}

	add_filter( 'fokkner_core_filter_property_list_layouts', 'fokkner_core_add_property_list_variation_info_hover' );
}
