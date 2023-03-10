<?php
$hero_video					= get_field('hero_background_video');
$hero_title					= get_field('hero_title');
$hero_description			= get_field('hero_description');
$hero_button_text			= get_field('hero_button_text');
$hero_button_link			= get_field('hero_button_link');

$section1_title				= get_field('section1_title');
$section1_content			= get_field('section1_content');
$section1_image				= get_field('section1_image');
$section1_button_link		= get_field('section1_button_link');

$section2_title				= get_field('section2_title');
$section2_content			= get_field('section2_content');
$section2_image				= get_field('section2_image');
$section2_button_link		= get_field('section2_button_link');

$section3_title				= get_field('section3_title');
$section3_content			= get_field('section3_content');
$section3_image_1			= get_field('section3_image_1');
$section3_image_2			= get_field('section3_image_2');
$section3_button_link		= get_field('section3_button_link');


get_header();
?>

<?php if ($hero_video) : ?>
<div class="hero-wrapper video-wrapper has-video">
  <video playsinline autoplay muted loop style="background: white;">
    <source src="<?=$hero_video?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="hero-wrapper__content">
		<h2 class="hero-wrapper__content__description"><?= $hero_description ?></h2>
		<a href="<?= $hero_button_link ?>" class="hero-wrapper__content__cta arrow-button"><?= $hero_button_text ?></a>
	</div>
</div>
<?php endif; ?>
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
<?php if ($section2_content) : ?>
<div class="gray-background content-wrapper py-5 image-first">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-12 col-md-5">
			<?php if ($section2_image) : ?>
				<img src="<?=$section2_image?>" class="img-fluid">
			<?php endif; ?>
			</div>
			<div class="col-12 col-md-6 offset-md-1">
				<?php if ($section2_title) : ?>
					<h3><?=$section2_title?></h3>
				<?php endif; ?>
				<?php if ($section2_content) : ?>
					<?=$section2_content?>
				<?php endif; ?>
				<?php if ($section2_button_link) : ?>
					<a href="<?=$section2_button_link?>" class="btn btn-primary">Read more</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if ($section3_content) : ?>
<div class="content-wrapper py-5 image-last">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-12 col-md-6">
				<?php if ($section3_title) : ?>
					<h3><?=$section3_title?></h3>
				<?php endif; ?>
				<?php if ($section3_content) : ?>
					<?=$section3_content?>
				<?php endif; ?>
				<?php if ($section3_button_link) : ?>
					<a href="<?=$section3_button_link?>" class="btn btn-primary">Read more</a>
				<?php endif; ?>
			</div>
			<div class="col-12 col-md-6 flex-image-wrapper">
				<?php if ($section3_image_1) : ?>
					<img src="<?=$section3_image_1?>">
				<?php endif; ?>
				<?php if ($section3_image_2) : ?>
					<img src="<?=$section3_image_2?>">
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
