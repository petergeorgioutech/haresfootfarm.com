<?php
/*
	Template Name: Availability Page
*/

$featuredImage				= get_field('featured_image');
$backgroundColor			= get_field('background_color');

$section1_title				= get_field('section1_title');
$section1_content			= get_field('section1_content');
$section1_image				= get_field('section1_image');
$section1_button_link		= get_field('section1_button_link');

get_header();
?>


<?php if ($featuredImage) : ?>
	<div class="featured-image" style="background-image:url(<?=$featuredImage?>)">
<?php else : ?>
	<div class="featured-image" style="background-color:<?=$backgroundColor?>">
<?php endif; ?>
		<h1 class="title"><?=the_title()?></h1>
	</div>

<?php if ($section1_content) : ?>
<div class="container my-5 content-wrapper image-last" id="about">
	<div class="row d-flex justify-content-center align-items-center">
		<div class="col-12 col-lg-5">
			<?php if ($section1_title) : ?>
				<h3><?=$section1_title?></h3>
			<?php endif; ?>
			<?php if ($section1_content) : ?>
				<?=$section1_content?>
			<?php endif; ?>
			<?php if ($section1_button_link) : ?>
				<a href="<?=$section1_button_link?>" class="btn btn-primary">Read more</a>
			<?php endif; ?>
		</div>
		<div class="col-12 col-lg-6 offset-lg-1">
			<?php if ($section1_image) : ?>
				<img src="<?=$section1_image?>" class="img-fluid">
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
$featured_units = get_field('select_units');
if( $featured_units ): ?>
	<!-- Unit wrapper -->
	<div class="unit-wrapper">
		<div class="container">
			<p class="wrapper-text">Please click a unit for more information</p>
			<nav class="unit-nav nav nav-tabs">
				
			<?php $id = 1; ?>
				<?php foreach( $featured_units as $featured_unit ):
					$title 			= get_the_title( $featured_unit->ID );
					$availability 	= get_field('unit_availability', $featured_unit->ID );
					$temp_id = $id++;
				?>
					<div data-bs-toggle="tab" data-bs-target="#unit-<?=$temp_id?>" class="unit-nav-item 
					<?=esc_html( $availability );?> <?php if ($temp_id === 1){ ?>active<?php } ?>">
						<span class="unit-nav-item-title">
							<?=esc_html( $title );?>
						</span>
						<span class="unit-availability <?=esc_html( $availability );?>">
							<?=esc_html( $availability );?>
						</span>
					</div>
				<?php endforeach; ?>
			</nav>
			<div class="unit-container tab-content">
				<?php $id2 = 1; ?>
				<?php foreach( $featured_units as $featured_unit ): 
					$title = get_the_title( $featured_unit->ID );
					$availability			= get_field('unit_availability', $featured_unit->ID );
					$subtitle				= get_field('unit_subtitle', $featured_unit->ID );
					$description			= get_field('unit_description', $featured_unit->ID );
					$brochure				= get_field('unit_brochure', $featured_unit->ID );
					$images					= get_field('unit_image_gallery', $featured_unit->ID );
					$floor_plan				= get_field('unit_floor_plan', $featured_unit->ID );
					$temp_id2 = $id2++;
				?>
					<div id="unit-<?=$temp_id2?>" role="tabpanel" class="unit-item tab-pane fade <?php if ($temp_id2 === 1){ ?> show active <?php } ?>">
						<div class="unit-item-content">
							<h4 class="unit-title"><?=esc_html( $title );?></h4>
							<p class="unit-subtitle">
								<?=$subtitle?>
							</p>
							<p class="unit-description">
								<?=$description?>
							</p>
							<div class="button-wrapper">
								<a href="<?=esc_html( $brochure );?>" download class="unit-download-brochure"><i class="fa fa-download download-icon" aria-hidden="true"></i> Download Brochure</a>
								<a href="mailto:peter@petergeorgiou.tech?subject=Enquiry - <?=esc_html( $title );?>" class="unit-enquire">Enquire now</a>
							</div>
						</div>

						<div class="unit-image-gallery">
							<?php 
							if( $images ): ?>
								<div class="slider flexslider">
									<div class="slides">
										<?php foreach( $images as $image ): ?>
											<div class="slider-background" style="background-image:url(<?= esc_url($image['url']); ?>)"></div>
										<?php endforeach; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>

						<div class="floor-plan-wrapper">
							<h4><?=esc_html( $title );?> FLOOR PLAN</h4>
							<img src="<?=esc_html( $floor_plan );?>" class="img-fluid mt-3">
						</div>

					</div>
				<?php endforeach; ?>
			</div>

		</div>
		<div class="row mt-4 mb-2">
			<div class="col-12 text-center">
				<h4>GET IN TOUCH FOR MORE INFORMATION</h4>
				<a href="/contact-us" class="btn btn-text">Contact us</a>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>