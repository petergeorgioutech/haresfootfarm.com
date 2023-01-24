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
$global_logo_white				= get_field('global_logo_white', 'option');
$contact_form_title			= get_field('contact_form_title', 'option');
$contact_form_content			= get_field('contact_form_content', 'option');

?>

<footer class="dark-background content-wrapper py-5 contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="<?=$global_logo_white?>" alt="logo" class="logo my-3">
				<p>HARESFOOT FARM, BERKHAMSTED, HERTFORDSHIRE, HP4 2SU</p>
				<nav class="social-icons">
					<ul>
						<li><a href="tel:12345678"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
						<li><a href="mailto:test@test.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</footer>

<!-- <div class="dark-background content-wrapper py-5 contact-form">
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
</div> -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_footer(); ?>


</body>

</html>

