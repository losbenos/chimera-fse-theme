<?php
/**
 * Title: CTA Centered, Two Buttons, Light
 * Slug: chimera-master/cta-centered-two-buttons-light
 * Description:
 * Categories: chimera-greyd, chimera-greyd
 * Keywords:
 * Viewport Width: 1000
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"className":""} -->
		<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'All WordPress. One Suite.', 'chimera-master' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":""} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Greyd is the perfect tool for everyone who wants to efficiently design and manage complex web projects with the latest WordPress features.', 'chimera-master' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill">
			<a class="wp-block-button__link wp-element-button" href="https://greyd.io/" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Download now →', 'chimera-master' ); ?></a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline">
			<a class="wp-block-button__link wp-element-button" href="https://greyd.io/known-issues/" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Known issues →', 'chimera-master' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->