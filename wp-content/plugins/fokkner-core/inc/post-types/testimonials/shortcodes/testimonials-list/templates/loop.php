<?php if ( $query_result->have_posts() ) {
	while ( $query_result->have_posts() ) :
		$query_result->the_post();

		fokkner_core_list_sc_template_part( 'post-types/testimonials/shortcodes/testimonials-list', 'layouts/' . $layout, '', $params );
	endwhile; // End of the loop.
} else {
	// Include global posts not found
	fokkner_core_theme_template_part( 'content', 'templates/parts/posts-not-found' );
}

wp_reset_postdata();