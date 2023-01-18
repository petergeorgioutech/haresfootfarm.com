<?php
$hero_video					= get_field('hero_background_video');
$hero_image					= get_field('hero_background_image');
$hero_title					= get_field('hero_title');
$hero_description			= get_field('hero_description');
$hero_button_text			= get_field('hero_button_text');
$hero_button_link			= get_field('hero_button_link');
$hero_title_colour			= get_field('hero_title_colour');
$hero_description_colour	= get_field('hero_description_colour');
$hero_shadow_colour			= get_field('hero_shadow_colour');

$section1_title				= get_field('section1_title');
$section1_content			= get_field('section1_content');
$section1_image				= get_field('section1_image');

$location_title				= get_field('location_title');
$location_content			= get_field('location_content');
$location_key_title			= get_field('location_key_title');
$location_key_content		= get_field('location_key_content');
$location_image_desktop		= get_field('location_image_desktop');
$location_image_mobile		= get_field('location_image_mobile');

$section2_title				= get_field('section2_title');
$section2_content			= get_field('section2_content');
$section2_image				= get_field('section2_image');

$section3_title				= get_field('section3_title');
$section3_content			= get_field('section3_content');
$section3_image_1			= get_field('section3_image_1');
$section3_image_2			= get_field('section3_image_2');


get_header();
?>

<header id="main-header" class="top-header">
	<div class="container">
		<nav class="social-icons">
			<ul>
				<li><a href="tel:12345678"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
				<li><a href="mailto:test@test.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
			</ul>
		</nav>
		<a class="brand-logo img-fluid" href=""><img src="https://via.placeholder.com/150x50?text=Logo"></a>
		<button class="nav-trigger"><span></span><span></span><span></span><span></span></button>
		
	</div>
	<nav class="main-menu">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About us</a></li>
			<li><a href="/availability">Availability</a></li>
			<li><a href="/contact-us">Contact us</a></li>
		</ul>
	</nav>
</header>


<div class="hero-wrapper video-wrapper has-video">
  <video playsinline autoplay muted loop style="background: white;">
    <source src="<?=$hero_video?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="hero-wrapper__content">
		<h2 class="hero-wrapper__content__description" style="color: <?=$hero_description_colour?>; text-shadow: -1px 1px 7px <?=$hero_shadow_colour?>;"><?= $hero_description ?></h2>
		<a href="<?= $hero_button_link ?>" class="hero-wrapper__content__cta arrow-button"><?= $hero_button_text ?></a>
	</div>
</div>

<!-- <div class="hero-wrapper ". <?php if ($hero_video) :  echo 'has-video'; endif; ?>" style="background-image:url(<?= $hero_image ?>)">
	<?php if ($hero_video) { ?>
		<video id="background-video" class="video-full" autoplay loop muted poster="<?= $hero_image ?>">
			<source src="<?= $hero_video ?>" type="video/mp4">
		</video>
	<?php } ?>
	<div class="hero-wrapper__content">
		<h1 class="hero-wrapper__content__title" style="color: <?=$hero_title_colour?>; border-bottom-color: <?=$hero_title_colour?>"><?=$hero_title?></h1>
		<h2 class="hero-wrapper__content__description" style="color: <?=$hero_description_colour?>; text-shadow: -1px 1px 7px <?=$hero_shadow_colour?>;"><?= $hero_description ?></h2>
		<a href="<?= $hero_button_link ?>" class="hero-wrapper__content__cta arrow-button"><?= $hero_button_text ?></a>
	</div>
</div> -->
<div class="container my-5" id="about">
	<div class="row d-flex justify-content-center align-items-center">
		<div class="col-12 col-lg-5">
			<h3><?=$section1_title?></h3>
			<?=$section1_content?>
			<a href="/" class="btn btn-primary">Read more</a>
		</div>
		<div class="col-12 col-lg-6 offset-lg-1">
			<img src="<?=$section1_image?>" class="img-fluid">
		</div>
	</div>
</div>

<!-- <div class="container my-5 location-block" style="background-image:url(<?=$location_image_desktop?>)">
	<img src="<?=$location_image_mobile?>" class="img-fluid location-block__static-image">
	<div class="location-block__content">
		<div class="row">
			<div class="col-12 col-sm-7 location-block__content__location-wrapper">
				<h3><?=$location_title?></h3>
				<p><?=$location_content?></p>
			</div>
			<div class="col-12 offset-sm-1 col-sm-4 location-block__content__key-wrapper">
				<h4><?=$location_key_title?></h4>
				<?=$location_key_content?>
			</div>
		</div>
	</div>
</div> -->

<div class="gray-background content-wrapper py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<img src="<?=$section2_image?>" class="img-fluid pb-2">
			</div>
			<div class="col-12 col-md-6 offset-md-1">
				<h3><?=$section2_title?></h3>
				<?=$section2_content?>
				<a href="/" class="btn btn-primary">Read more</a>
			</div>
		</div>
	</div>
</div>

<div class="content-wrapper py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h3><?=$section3_title?></h3>
				<?=$section3_content?>
				<a href="/" class="btn btn-primary">Read more</a>
			</div>
			<div class="col-12 col-md-6 flex-image-wrapper">
				<img src="<?=$section3_image_1?>">
				<img src="<?=$section3_image_2?>">
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
