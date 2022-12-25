<?php

if ( ! function_exists( 'fokkner_core_add_custom_font_widget' ) ) {
	/**
	 * Function that add widget into widgets list for registration
	 *
	 * @param array $widgets
	 *
	 * @return array
	 */
	function fokkner_core_add_custom_font_widget( $widgets ) {
		$widgets[] = 'FokknerCore_Custom_Font_Widget';

		return $widgets;
	}

	add_filter( 'fokkner_core_filter_register_widgets', 'fokkner_core_add_custom_font_widget' );
}

if ( class_exists( 'QodeFrameworkWidget' ) ) {
	class FokknerCore_Custom_Font_Widget extends QodeFrameworkWidget {

		public function map_widget() {
			$widget_mapped = $this->import_shortcode_options(
				array(
					'shortcode_base' => 'fokkner_core_custom_font',
				)
			);
			if ( $widget_mapped ) {
				$this->set_base( 'fokkner_core_custom_font' );
				$this->set_name( esc_html__( 'Fokkner Custom Font', 'fokkner-core' ) );
				$this->set_description( esc_html__( 'Add a custom font element into widget areas', 'fokkner-core' ) );
			}
		}

		public function render( $atts ) {
			$params = $this->generate_string_params( $atts );

			echo do_shortcode( "[fokkner_core_custom_font $params]" ); // XSS OK
		}
	}
}
