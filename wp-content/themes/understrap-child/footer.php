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

$global_logo				= get_field('global_logo', 'option');
$contact_form_title			= get_field('contact_form_title', 'option');
$contact_form_content			= get_field('contact_form_content', 'option');

?>

<div class="dark-background content-wrapper py-5 contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3><?=$contact_form_title?></h3>
				<p><?=$contact_form_content?></p>
				<?php echo do_shortcode('[contact-form-7 id="24" title="Comments"]') ?>
				<img src="<?=$global_logo?>" alt="GRIGGS" class="logo my-3">
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>

