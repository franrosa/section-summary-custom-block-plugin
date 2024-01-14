<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<section class="section-summary">
	<h1 class="section-summary_title"></h1>
	<h2 class="section-summary_post-title"></h2>
	<p class="section-summary_post-paragraph"></p>
	<p class="section-summary_post-paragraph"></p>
	<div class="section-summary_buttons"><a href="" class="section-summary_buttons_button"></a></div>
</section>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Section Summary – hello from a dynamic block!', 'section-summary' ); ?>
</p>
