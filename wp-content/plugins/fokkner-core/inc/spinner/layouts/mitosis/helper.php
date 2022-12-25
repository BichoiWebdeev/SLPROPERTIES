<?php

if ( ! function_exists( 'fokkner_core_add_mitosis_spinner_layout_option' ) ) {
	/**
	 * Function that set new value into page spinner layout options map
	 *
	 * @param array $layouts - module layouts
	 *
	 * @return array
	 */
	function fokkner_core_add_mitosis_spinner_layout_option( $layouts ) {
		$layouts['mitosis'] = esc_html__( 'Mitosis', 'fokkner-core' );

		return $layouts;
	}

	add_filter( 'fokkner_core_filter_page_spinner_layout_options', 'fokkner_core_add_mitosis_spinner_layout_option' );
}
