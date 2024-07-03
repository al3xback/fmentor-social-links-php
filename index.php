<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Frontend Mentor | Social Links Profile | PHP</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - Social links profile solution." />
	<meta name="keywords" content="Frontend Mentor, Social links profile" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?php
	define('TITLE', 'Social links profile');
	define('CARD', array(
		'name' => 'Jessica Randall',
		'location' => 'London, United Kingdom',
		'job' => 'Front-end developer and avid reader.',
		'image' => array('src' => 'images/avatar.jpeg', 'alt' => 'Jessica Randall'),
		'socialLinks' => array(
			'GitHub' => '#',
			'Frontend Mentor' => '#',
			'LinkedIn' => '#',
			'Twitter' => '#',
			'Instagram' => '#'
		)
	));
	?>

	<header>
		<h1 class="sr-only"><?php echo TITLE; ?></h1>
	</header>

	<main>
		<div class="container">
			<div class="card">
				<div class="card__head">
					<div class="card__image">
						<img src="<?php echo CARD['image']['src']; ?>" width="80" height="80" alt="<?php echo CARD['image']['alt']; ?>" />
					</div>
					<div class="card__title-wrap">
						<h2 class="card__title"><?php echo CARD['name']; ?></h2>
						<p class="card__subtitle"><?php echo CARD['location']; ?></p>
					</div>
					<p class="card__desc">&Prime;<?php echo CARD['job']; ?>&Prime;</p>
				</div>
				<div class="card__body">
					<ul class="card__links">
						<?php foreach (CARD['socialLinks'] as $name => $url) : ?>
							<li class="card__link">
								<a href="<?php echo $url; ?>" class="btn btn--primary btn--full" rel="noopener" target="_blank"><?php echo $name; ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
