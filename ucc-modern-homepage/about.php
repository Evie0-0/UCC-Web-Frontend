<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | About</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="About.css">
</head>
<body>
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>
	<?php require_once __DIR__ . '/includes/utility-bar.php'; ?>
	<?php require_once __DIR__ . '/includes/navbar.php'; ?>
	<main class="about-page">
		<!-- HERO -->
		<section class="about-hero">
			<div class="about-hero-overlay"></div>
			<div class="container about-hero-content">
				<span class="about-eyebrow">ABOUT UCC <span class="eyebrow-dots">•••</span></span>
				<h1>ABOUT THE<span>UNIVERSITY OF CALOOCAN CITY</span></h1>
			</div>
		</section>
		<!-- ABOUT UCC INTRODUCTION -->
		<section id="about-ucc" class="ucc-introduction">
			<div class="container ucc-intro-grid">
				<div class="ucc-intro-image">
					<img src="images/UCC-ABOUT.png" alt="University of Caloocan City building">
					<div class="ucc-seal">
						<img src="images/UCC2.png" alt="University of Caloocan City seal">
					</div>
				</div>
				<div class="ucc-intro-divider"></div>
				<div class="ucc-intro-text">
					<p><strong>The University of Caloocan City (abbreviated as UCC) is a public-type local university established in 1971 and formerly called Caloocan City Community College and Caloocan City Polytechnic College.</strong></p>
					<p>It is located in the south, at Biglang Awa, with main campus fronting EDSA. To the north, it has two extension campuses, one is located in Camarin (Business Campus) while the other is located in Camarin (Congressional and Engineering Campus).</p>
				</div>
			</div>
		</section>
		<!-- UNIVERSITY HISTORY -->
		<section id="history" class="history-section">
			<div class="container">
				<div class="section-heading centered">
					<span>UNIVERSITY HISTORY</span>
					<i></i>
				</div>
				<h2 class="section-title centered">UCC HISTORICAL DEVELOPMENT</h2>
				<div class="history-timeline">
					<div class="history-item">
						<div class="history-number">1</div>
						<div class="history-year">1971</div>
						<p>First-year operation of Caloocan City Community College.</p>
					</div>
					<div class="history-item">
						<div class="history-number">2</div>
						<div class="history-year">1973</div>
						<p>New Bachelor of Science in Industrial Education and Business Technology program.</p>
					</div>
					<div class="history-item">
						<div class="history-number">3</div>
						<div class="history-year">1975</div>
						<p>Became Caloocan City Polytechnic College.</p>
					</div>
					<div class="history-item">
						<div class="history-number">4</div>
						<div class="history-year">1996</div>
						<p>Buena Park and Camarin Annexes became operational.</p>
					</div>
					<div class="history-item has-image">
						<div class="history-number">5</div>
						<div class="history-year">2000</div>
						<p>Student population reached 3,600.</p>
						<div class="history-image">
							<img src="images/ABOUT-2000.jpg" alt="UCC in 2000" loading="lazy">
						</div>
					</div>
					<div class="history-item has-image">
						<div class="history-number">6</div>
						<div class="history-year">2004</div>
						<p>Officially proclaimed the University of Caloocan City.</p>
						<div class="history-image">
							<img src="images/UCC-SOUTH.png" alt="UCC in 2004" loading="lazy">
						</div>
					</div>
					<div class="history-item has-image">
						<div class="history-number">7</div>
						<div class="history-year">2017</div>
						<p>UCC College of Law established.</p>
						<div class="history-image">
							<img src="images/ABOUT-2017.jpg" alt="UCC in 2017" loading="lazy">
						</div>
					</div>
					<div class="history-item has-image">
						<div class="history-number">8</div>
						<div class="history-year">2022</div>
						<p>New administration and continued expansion.</p>
						<div class="history-image">
							<img src="images/ABOUT-2022.jpg" alt="UCC in 2022" loading="lazy">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- THE NEW UCC -->
		<section class="new-ucc-section">
			<div class="container">
				<div class="section-heading">
					<span>THE NEW UCC</span>
					<i></i>
				</div>
				<div class="new-ucc-grid">
					<article class="info-card">
						<div class="card-icon"><i data-lucide="landmark"></i></div>
						<div>
							<h3>CONSTRUCTION OF MAIN AND EXTENSION CAMPUSES</h3>
							<p>Continuous construction and development of the Main and Extension campuses to provide better spaces for learning and growth.</p>
						</div>
					</article>
					<article class="info-card">
						<div class="card-icon"><i data-lucide="flask-conical"></i></div>
						<div>
							<h3>UPGRADED SCHOOL FACILITIES</h3>
							<p>Additional classrooms and laboratories, libraries, audio-visual facility, sound engineering and radio broadcasting studio, speech laboratory, multipurpose halls, covered courts, drainage improvements, and air-conditioning.</p>
						</div>
					</article>
					<article class="info-card">
						<div class="card-icon"><i data-lucide="graduation-cap"></i></div>
						<div>
							<h3>100% FREE TUITION</h3>
							<p>Free education in the University of Caloocan City pursuant to City Ordinance No. 063 series of 2014.</p>
						</div>
					</article>
					<article class="info-card">
						<div class="card-icon"><i data-lucide="users"></i></div>
						<div>
							<h3>INCREASE IN NUMBER OF STUDENTS</h3>
							<p>From a humble beginning of forty-two (42) students in 1971 to over 13,000 students by 2022.</p>
						</div>
					</article>
				</div>
			</div>
		</section>
		<!-- PROGRESS AND OPPORTUNITIES -->
		<section class="progress-section">
			<div class="container">
				<div class="section-heading centered">
					<span>PROGRESS &amp; OPPORTUNITIES</span>
					<i></i>
				</div>
				<div class="progress-grid">
					<article class="progress-card">
						<div class="progress-icon"><i data-lucide="trophy"></i></div>
						<div>
							<h3>LICENSURE AND BAR EXAMINATION PERFORMANCE</h3>
							<p>UCC has achieved outstanding results in both the Licensure Examination and the Bar Examinations, reflecting the University's commitment to academic excellence and producing competent, licensed professionals.</p>
						</div>
					</article>
					<article class="progress-card">
						<div class="progress-icon"><i data-lucide="gavel"></i></div>
						<div>
							<h3>UCC COLLEGE OF LAW</h3>
							<p>The UCC College of Law continues to produce competent, service-oriented and socially responsible legal professionals.</p>
						</div>
					</article>
					<article class="progress-card">
						<div class="progress-icon"><i data-lucide="cog"></i></div>
						<div>
							<h3>ENGINEERING PROGRAMS</h3>
							<p>UCC offers the following engineering programs:</p>
							<ul>
								<li>BS Electrical Engineering</li>
								<li>BS Electronics Engineering</li>
								<li>BS Computer Engineering</li>
								<li>BS Industrial Engineering</li>
							</ul>
						</div>
					</article>
					<article class="progress-card">
						<div class="progress-icon"><i data-lucide="book-open"></i></div>
						<div>
							<h3>NEW PROGRAMS</h3>
							<p>The University continues to diversify its academic offerings with the introduction of:</p>
							<ul>
								<li>BS Social Work</li>
								<li>BS Industrial Security Management</li>
							</ul>
						</div>
					</article>
					<article class="progress-card">
						<div class="progress-icon"><i data-lucide="plus"></i></div>
						<div>
							<h3>NEW OPPORTUNITIES</h3>
							<p>UCC is planning to offer quality health and medical programs at the future Barangay 180 campus:</p>
							<ul>
								<li>BS Nursing</li>
								<li>BS Medical Technology</li>
								<li>BS Pharmacy</li>
								<li>BS Midwifery</li>
							</ul>
						</div>
					</article>
				</div>
			</div>
		</section>
		<!-- QUOTE -->
		<section class="about-quote">
			<div class="container">
				<div class="quote-mark">“</div>
				<p>Basta sa Caloocan, walang batang maiwan</p>
				<div class="quote-mark quote-right">”</div>
			</div>
		</section>
	</main>
	<?php require_once __DIR__ . '/includes/footer.php'; ?>
	<button class="back-top" id="backTop" aria-label="Back to top">↑</button>
	<script src="script.js"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script>lucide.createIcons();</script>
</body>
</html>
