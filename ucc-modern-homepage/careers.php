<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | Careers</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
</head>
<body>
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>
	<?php include __DIR__ . '/includes/utility-bar.php'; ?>
	<?php include __DIR__ . '/includes/navbar.php'; ?>
	<!-- CAREERS CONTENT -->
	<main class="careers-page">
		<div class="careers-decoration careers-decoration-1"></div>
		<div class="careers-decoration careers-decoration-2"></div>
		<div class="careers-dot careers-dot-1"></div>
		<div class="careers-dot careers-dot-2"></div>
		<div class="careers-container">
			<section class="careers-header">
				<div class="careers-header-content">
					<h1>CAREERS</h1>
					<div class="careers-title-line">
						<span></span>
						<i></i>
						<span></span>
					</div>
					<p>Explore career opportunities and professional possibilities at the University of Caloocan City.</p>
				</div>
			</section>
			<section class="careers-post">
				<div class="careers-image-card">
					<img src="images/CAREERS.jpg" alt="University of Caloocan City Careers">
				</div>
				<div class="careers-post-info">
					<div class="careers-category-row">
						<span class="careers-line"></span>
						<span class="careers-dots">•••</span>
						<span class="careers-category">CAREERS</span>
						<span class="careers-dots">•••</span>
						<span class="careers-line"></span>
					</div>
					<h2>WE'RE HIRING!</h2>
					<div class="careers-meta">
						<i data-lucide="calendar-days"></i>
						<span>Published 1 year ago</span>
					</div>
					<div class="careers-post-line"></div>
				</div>
			</section>
		</div>
	</main>
	<?php include __DIR__ . '/includes/footer.php'; ?>
	<button class="back-top" id="backTop" aria-label="Back to top">↑</button>
	<script src="script.js"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script>
		lucide.createIcons();
	</script>
</body>
</html>
