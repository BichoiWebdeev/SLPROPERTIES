<?php

if ( ! function_exists( 'fokkner_core_add_team_archive_sidebar_options' ) ) {
	/**
	 * Function that add sidebar options for team archive module
	 */
	function fokkner_core_add_team_archive_sidebar_options( $tab ) {

		if ( $tab ) {
			$tab->add_field_element(
				array(
					'field_type'    => 'select',
					'name'          => 'qodef_team_archive_sidebar_layout',
					'title'         => esc_html__( 'Sidebar Layout', 'fokkner-core' ),
					'description'   => esc_html__( 'Choose default sidebar layout for team archives', 'fokkner-core' ),
					'default_value' => 'no-sidebar',
					'options'       => fokkner_core_get_select_type_options_pool( 'sidebar_layouts', false ),
				)
			);

			$custom_sidebars = fokkner_core_get_custom_sidebars();
			if ( ! empty( $custom_sidebars ) && count( $custom_sidebars ) > 1 ) {
				$tab->add_field_element(
					array(
						'field_type'  => 'select',
						'name'        => 'qodef_team_archive_custom_sidebar',
						'title'       => esc_html__( 'Custom Sidebar', 'fokkner-core' ),
						'description' => esc_html__( 'Choose a custom sidebar to display on team archives', 'fokkner-core' ),
						'options'     => $custom_sidebars,
					)
				);
			}

			$tab->add_field_element(
				array(
					'field_type'  => 'select',
					'name'        => 'qodef_team_archive_sidebar_grid_gutter',
					'title'       => esc_html__( 'Set Grid Gutter', 'fokkner-core' ),
					'description' => esc_html__( 'Choose grid gutter size to set space between content and sidebar', 'fokkner-core' ),
					'options'     => fokkner_core_get_select_type_options_pool( 'items_space' ),
				)
			);
		}
	}

	add_action( 'fokkner_core_action_after_team_options_archive', 'fokkner_core_add_team_archive_sidebar_options' );
}

if ( ! function_exists( 'fokkner_core_add_team_single_sidebar_options' ) ) {
	/**
	 * Function that add sidebar options for team single module
	 */
	function fokkner_core_add_team_single_sidebar_options( $tab ) {

		if ( $tab ) {
			$tab->add_field_element(
				array(
					'field_type'    => 'select',
					'name'          => 'qodef_team_single_sidebar_layout',
					'title'         => esc_html__( 'Sidebar Layout', 'fokkner-core' ),
					'description'   => esc_html__( 'Choose default sidebar layout for team singles', 'fokkner-core' ),
					'default_value' => 'no-sidebar',
					'options'       => fokkner_core_get_select_type_options_pool( 'sidebar_layouts', false ),
				)
			);

			$custom_sidebars = fokkner_core_get_custom_sidebars();
			if ( ! empty( $custom_sidebars ) && count( $custom_sidebars ) > 1 ) {
				$tab->add_field_element(
					array(
						'field_type'  => 'select',
						'name'        => 'qodef_team_single_custom_sidebar',
						'title'       => esc_html__( 'Custom Sidebar', 'fokkner-core' ),
						'description' => esc_html__( 'Choose a custom sidebar to display on team singles', 'fokkner-core' ),
						'options'     => $custom_sidebars,
					)
				);
			}

			$tab->add_field_element(
				array(
					'field_type'  => 'select',
					'name'        => 'qodef_team_single_sidebar_grid_gutter',
					'title'       => esc_html__( 'Set Grid Gutter', 'fokkner-core' ),
					'description' => esc_html__( 'Choose grid gutter size to set space between content and sidebar', 'fokkner-core' ),
					'options'     => fokkner_core_get_select_type_options_pool( 'items_space' ),
				)
			);
		}
	}

	add_action( 'fokkner_core_action_after_team_options_single', 'fokkner_core_add_team_single_sidebar_options' );
}
