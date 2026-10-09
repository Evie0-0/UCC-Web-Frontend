<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | E-Services</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
</head>
<body>
	<?php include __DIR__ . '/includes/utility-bar.php'; ?>
	<?php include __DIR__ . '/includes/navbar.php'; ?>

	<!-- PAGE DOTS -->
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>

	<!-- E-SERVICES MAIN CONTENT -->
	<main class="eservices-page">
		<div class="eservices-bg-shape eservices-shape-1"></div>
		<div class="eservices-bg-shape eservices-shape-2"></div>
		<div class="eservices-bg-shape eservices-shape-3"></div>

		<div class="eservices-container">
			<!-- CITY OF CALOOCAN -->
			<a href="https://caloocancity.gov.ph/" class="eservices-government-card" target="_blank" rel="noopener noreferrer">
				<div class="government-glow"></div>
				<div class="government-pattern"></div>

				<div class="government-content">
					<div class="government-logo-wrap">
						<img src="images/Caloocan.png" alt="City of Caloocan">
					</div>

					<div class="government-title">
						<h1>City of Caloocan</h1>
						<span>PUBLIC SERVICE</span>
					</div>

					<div class="government-line">
						<span></span>
					</div>

					<p>Official website of the City Government of Caloocan.</p>
				</div>

				<div class="city-skyline">
					<div class="building building-1"></div>
					<div class="building building-2"></div>
					<div class="building building-3"></div>
					<div class="building building-4"></div>
					<div class="building building-5"></div>
					<div class="building building-6"></div>
					<div class="city-bridge"></div>
				</div>
			</a>

			<!-- E-SERVICES CARDS -->
			<section class="eservices-grid">
				<!-- UCC LIBRARY -->
				<a href="https://sites.google.com/ucc-caloocan.edu.ph/ucclibrary/home" class="eservice-card" target="_blank" rel="noopener noreferrer">
					<div class="service-logo service-logo-ched">
						<img src="images/LIBRARY-LOGO.png" alt="University of Caloocan City Library">
					</div>
					<h2>University of Caloocan City<br>Library</h2>
					<span class="service-category">LIBRARY SERVICES</span>
					<div class="service-divider">
						<span></span>
					</div>
					<div class="service-button">
						<span>Visit Website</span>
						<span class="external-icon">↗</span>
					</div>
				</a>

				<!-- AIMS FACULTY -->
				<a href="https://aims.ucc-caloocan.edu.ph/ucc/faculty/" class="eservice-card" target="_blank" rel="noopener noreferrer">
					<div class="service-logo service-logo-aims">
						<img src="images/AIMS.png" alt="AIMS Faculty Portal">
					</div>
					<h2 class="aims-title">AIMS<br>Faculty Portal</h2>
					<span class="service-category">FACULTY PORTAL</span>
					<div class="service-divider">
						<span></span>
					</div>
					<div class="service-button">
						<span>Visit Website</span>
						<span class="external-icon">↗</span>
					</div>
				</a>

				<!-- AIMS STUDENT -->
				<a href="https://aims.ucc-caloocan.edu.ph/ucc/students/" class="eservice-card" target="_blank" rel="noopener noreferrer">
					<div class="service-logo service-logo-aims">
						<img src="images/AIMS.png" alt="AIMS Student Portal">
					</div>
					<h2 class="aims-title">AIMS<br>Student Portal</h2>
					<span class="service-category">STUDENT PORTAL</span>
					<div class="service-divider">
						<span></span>
					</div>
					<div class="service-button">
						<span>Visit Website</span>
						<span class="external-icon">↗</span>
					</div>
				</a>

				<!-- OFFICIAL UCC FACEBOOK PAGE -->
				<a href="https://www.facebook.com/univofcaloocanofficial" class="eservice-card" target="_blank" rel="noopener noreferrer">
					<div class="service-logo service-logo-dict">
						<img src="images/UCC2.png" alt="Official Facebook Page of University of Caloocan City">
					</div>
					<h2>Official Facebook Page of<br>University of Caloocan City</h2>
					<span class="service-category">GOVERNMENT ICT</span>
					<div class="service-divider">
						<span></span>
					</div>
					<div class="service-button">
						<span>Visit Website</span>
						<span class="external-icon">↗</span>
					</div>
				</a>
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
