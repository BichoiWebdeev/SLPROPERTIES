<div <?php wc_product_class( $item_classes ); ?>>
	<div class="qodef-woo-product-inner">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="qodef-woo-product-image">
				<?php fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/mark' ); ?>
				<?php fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/image', '', $params ); ?>
				<div class="qodef-woo-product-image-inner">
					<?php fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/title', '', $params ); ?>
<!--					--><?php //fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/category', '', $params ); ?>
					<?php fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/rating', '', $params ); ?>
					<?php fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/price', '', $params ); ?>
					<?php fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/add-to-cart' ); ?>
					<?php
					// Hook to include additional content inside product list item image
					do_action( 'fokkner_core_action_product_list_item_additional_image_content' );
					?>
				</div>
			</div>
		<?php } ?>
		<?php fokkner_core_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/link' ); ?>
	</div>
</div>
