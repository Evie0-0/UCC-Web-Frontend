<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | Alumni</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
	<link rel="stylesheet" href="alumni.css">
</head>
<body>
	<?php include __DIR__ . '/includes/utility-bar.php'; ?>
	<?php include __DIR__ . '/includes/navbar.php'; ?>
	
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>
	<!-- ALUMNI CONTENT -->
	<main class="alumni-page">
		<div class="alumni-decor alumni-decor-top" aria-hidden="true"></div>
		<div class="alumni-decor alumni-decor-right" aria-hidden="true"></div>
		<div class="alumni-decor alumni-decor-bottom" aria-hidden="true"></div>
		<section class="alumni-container">
			<div class="alumni-heading">
				<div class="alumni-heading-content">
					<div class="alumni-eyebrow">
						<span></span>
						UCC ALUMNI
						<i></i>
					</div>
					<h1>ALUMNI</h1>
					<div class="alumni-heading-line">
						<span></span>
						<i></i>
						<span></span>
					</div>
					<p>Stay connected with the University of Caloocan City and discover the latest updates, stories, and opportunities for the UCC alumni community.</p>
				</div>
			</div>
			<section class="alumni-empty">
				<div class="alumni-empty-pattern" aria-hidden="true"></div>
				<div class="alumni-empty-icon">
					<i data-lucide="graduation-cap"></i>
				</div>
				<div class="alumni-empty-content">
					<span class="alumni-empty-label">UCC ALUMNI</span>
					<h2>No posts to show</h2>
					<div class="alumni-empty-line">
						<span></span>
						<i></i>
						<span></span>
					</div>
					<p>All posts have been displayed. No posts to show.</p>
				</div>
				<div class="alumni-empty-corner alumni-empty-corner-left" aria-hidden="true"></div>
				<div class="alumni-empty-corner alumni-empty-corner-right" aria-hidden="true"></div>
			</section>
			<div class="alumni-bottom-message">
				<div class="alumni-bottom-icon">
					<i data-lucide="users"></i>
				</div>
				<div>
					<strong>UCC ALUMNI COMMUNITY</strong>
					<span>Check back again for future alumni updates and posts.</span>
				</div>
			</div>
		</section>
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
