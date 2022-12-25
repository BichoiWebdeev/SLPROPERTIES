<?php
/**
 * Smash Balloon Custom Twitter Feeds Generic Header Template
 * Information about the hashtag or search
 *
 * @version 1.13 Custom Twitter Feeds by Smash Balloon
 *
 */
use TwitterFeed\CTF_Parse;
use TwitterFeed\CTF_Display_Elements;

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$header_attr = CTF_Display_Elements::get_element_attribute( 'header-text', $feed_options );
?>
<div class="ctf-header ctf-header-type-text" <?php echo $header_attr ?>>
	<?php echo $feed_options['customheadertext'] ?>
</div>