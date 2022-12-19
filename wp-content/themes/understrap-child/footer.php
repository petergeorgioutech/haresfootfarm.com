<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="dark-background content-wrapper py-5 contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>COMMENTS</h3>
				<p>We welcome your feedback on our outline proposal via the comments box below.</p>
				<?php echo do_shortcode('[contact-form-7 id="24" title="Comments"]') ?>
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/logo.svg' ); ?>" alt="GRIGGS" class="logo my-3">
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>

