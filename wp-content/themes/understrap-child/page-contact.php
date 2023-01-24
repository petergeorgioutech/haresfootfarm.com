<?php
/*
	Template Name: Contact Page
*/

$featuredImage				= get_field('featured_image');
$backgroundColor			= get_field('background_color');

$introduction				= get_field('contact_introduction');
$details					= get_field('contact_details');
$maplink					= get_field('map_link');


get_header();
?>


<?php if ($featuredImage) : ?>
	<div class="featured-image" style="background-image:url(<?=$featuredImage?>)">
<?php else : ?>
	<div class="featured-image" style="background-color:<?=$backgroundColor?>">
<?php endif; ?>
		<h1 class="title"><?=the_title()?></h1>
	</div>

<div class="container my-5 content-wrapper image-last" id="about">
	<div class="row d-flex justify-content-center align-items-center">
		<div class="col-12 col-lg-5">
			<?php if ($introduction) : ?>
				<?=$introduction?>
			<?php endif; ?>
		</div>
		<div class="col-12 col-lg-6 offset-lg-1">
			<?php if ($details) : ?>
				<?=$details?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="embed-responsive embed-responsive-21by9 map-wrapper">
  <iframe class="embed-responsive-item" src="<?=$maplink?>" style="border:0;" width="100%" height="600" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<?php get_footer(); ?>