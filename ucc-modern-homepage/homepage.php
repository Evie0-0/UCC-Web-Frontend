<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | Homepage</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="assets/utility-bar.css">
	<link rel="stylesheet" href="assets/navbar.css">
	<link rel="stylesheet" href="assets/footer.css">
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
	<main>
		<!-- HERO -->
		<section class="hero" id="home">
			<video class="hero-slides" autoplay muted loop playsinline>
				<source src="images/HERO-SLIDES.mp4" type="video/mp4">
			</video>
			<div class="hero-gradient"></div>
			<div class="hero-curve" aria-hidden="true">
				<svg viewBox="0 0 1000 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
					<!-- YELLOW -->
					<path class="curve-gold" d="M0 70 C150 20, 350 20, 800 70 C650 120, 820 120, 930 75 C965 60, 985 35, 1000 25 L1000 140 L0 140 Z"/>
					<!-- GREEN -->
					<path class="curve-green" d="M0 75 C150 25, 350 25, 700 75 C650 125, 820 125, 930 80 C965 65, 985 40, 1000 15 L1000 140 L0 140 Z"/>
					<!-- WHITE -->
					<path class="curve-white" d="M0 80 C150 30, 350 30, 600 80 C650 130, 820 130, 930 85 C965 70, 985 45, 1000 20 L1000 140 L0 140 Z"/>
				</svg>
			</div>
			<!-- HERO CONTENT -->
			<div class="container hero-content">
				<div class="hero-copy reveal">
					<div class="eyebrow">
						UNIVERSITY OF CALOOCAN CITY
						<i></i>
						<i></i>
						<i></i>
						<span></span>
					</div>
					<h1>
						UNIVERSITY OF<br>
						<span>CALOOCAN CITY</span>
					</h1>
					<p>
						A leading local university committed to<br>
						academic excellence, innovation, and service<br>
						to the community.
					</p>
					<div class="hero-buttons">
						<a class="btn btn-primary" href="about.php">EXPLORE UCC <b>➜</b></a>
						<a class="btn btn-light" href="https://aims.ucc-caloocan.edu.ph/ucc/applicants/" target="_blank" rel="noopener noreferrer">APPLY NOW <b>➜</b></a>
					</div>
					<div class="slider-dots" aria-label="Hero slides">
						<button class="active"></button>
						<button></button>
						<button></button>
					</div>
				</div>
			</div>
		</section>

		<!-- NEWS + CALENDAR -->
		<section class="news-section" id="news">
			<div class="container two-column">
				<div class="calendar-dots" aria-hidden="true"></div>
				<!-- UNIVERSITY NEWS -->
				<div class="news-area">
					<div class="news-heading">
						<h2>UNIVERSITY NEWS</h2>
						<a href="news.php" class="view-news-btn">View All News</a>
					</div>
					<div class="news-grid">
						<!-- NEWS 1 -->
						<article class="news-card reveal" data-news="news1">
							<div class="news-image news-one" aria-hidden="true"></div>
							<div class="news-body">
								<h3>ANNOUNCEMENT | Official Overall List of Qualified Applicants for Enrollment A.Y. 2026 – 2027</h3>
								<small>Published 1 month ago</small>
								<a href="#" class="read-more" data-news-index="2">Read More <span aria-hidden="true">→</span></a>
							</div>
						</article>
						<!-- NEWS 2 -->
						<article class="news-card reveal" data-news="news2">
							<div class="news-image news-two" aria-hidden="true"></div>
							<div class="news-body">
								<h3>OFFICIAL ANNOUNCEMENT | Opening of First Semester A.Y. 2026 – 2027</h3>
								<small>Published 2 months ago</small>
								<a href="#" class="read-more" data-news-index="3">Read More <span aria-hidden="true">→</span></a>
							</div>
						</article>
						<!-- NEWS 3 -->
						<article class="news-card reveal" data-news="news3">
							<div class="news-image news-three" aria-hidden="true"></div>
							<div class="news-body">
								<h3>University of Caloocan City Surpasses National Passing Rate in CPALE May 2026</h3>
								<small>Published 2 months ago</small>
								<a href="#" class="read-more" data-news-index="4">Read More <span aria-hidden="true">→</span></a>
							</div>
						</article>
					</div>
				</div>
				<!-- RIGHT SIDEBAR -->
				<aside class="right-sidebar">
					<!-- ACADEMIC CALENDAR -->
					<div class="calendar-card reveal" id="calendar">
						<div class="side-title">
							<i data-lucide="calendar-days" class="calendar-icon" aria-hidden="true"></i>
							<span>ACADEMIC CALENDAR</span>
						</div>
						<!-- EVENT 1 -->
						<div class="calendar-event">
							<div class="date-badge">
								<strong>OCT</strong>
								<b>25–31</b>
								<small>2026</small>
							</div>
							<div class="event-info">
								<h3>FINALS EXAMINATION WEEK</h3>
								<p>October 25 – October 31, 2026</p>
							</div>
						</div>
						<!-- EVENT 2 -->
						<div class="calendar-event">
							<div class="date-badge">
								<strong>NOV</strong>
								<b>3–9</b>
								<small>2026</small>
							</div>
							<div class="event-info">
								<h3>SUBMISSION OF GRADES</h3>
								<p>November 3 – November 9, 2026</p>
							</div>
						</div>
						<!-- FULL CALENDAR BUTTON -->
						<a class="calendar-button" href="#" id="viewFullCalendar">
							<span>VIEW FULL CALENDAR</span>
							<i data-lucide="arrow-right" aria-hidden="true"></i>
						</a>
					</div>
					<!-- CHAIRMAN CARD -->
					<div class="chairman-card reveal">
						<img src="images/ALONG.png" alt="Chairman of the Board of Regents">
						<img class="chairman-logo" src="images/AM-LOGO.png" alt="Aksyon at Malasakit">
						<div class="chairman-content">
							<h3>CHAIRMAN OF THE<br>BOARD OF REGENTS</h3>
						</div>
					</div>
				</aside>
			</div>
		</section>
		
		<!-- PROGRAM EVENTS + QUICK LINKS -->
		<section class="explore-section" id="program-events">
			<div class="container">
				<!-- EXPLORE HEADING -->
				<div class="explore-heading">
					<span>DISCOVER EVENTS</span>
					<h2>Program Events</h2>
					<p>Discover exciting events, activities, and celebrations organized by each academic program at UCC.</p>
				</div>
				<!-- PROGRAM EVENTS + QUICK LINKS -->
				<div class="explore-bottom">
					<!-- PROGRAM EVENT CARDS -->
					<div class="program-events-wrapper">
						<div class="feature-grid" id="programEvents">
							<a href="program-events.php?program=accountancy" class="feature-card">
								<img src="images/7.jpg" alt="Accountancy program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Accountancy</h3>
									<p>Explore activities, seminars, and events organized by the Accountancy program.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=accounting-information-system" class="feature-card">
								<img src="images/7.jpg" alt="Accounting Information System program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Accounting Information System</h3>
									<p>Discover academic activities and events for Accounting Information System students.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=financial-management" class="feature-card">
								<img src="images/7.jpg" alt="Financial Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Financial Management</h3>
									<p>Discover activities, seminars, and events organized by Financial Management.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=human-resource-management" class="feature-card">
								<img src="images/7.jpg" alt="Human Resource Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Human Resource Management</h3>
									<p>Explore events and activities focused on people management and organizational development.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=marketing-management" class="feature-card">
								<img src="images/7.jpg" alt="Marketing Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Marketing Management</h3>
									<p>Stay updated on marketing activities, seminars, and student-led events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=entrepreneurship" class="feature-card">
								<img src="images/7.jpg" alt="Entrepreneurship program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Entrepreneurship</h3>
									<p>Discover business showcases, entrepreneurial activities, and student events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=hospitality-management" class="feature-card">
								<img src="images/7.jpg" alt="Hospitality Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Hospitality Management</h3>
									<p>Explore hospitality activities, practical showcases, and program events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=office-administration" class="feature-card">
								<img src="images/7.jpg" alt="Office Administration program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Office Administration</h3>
									<p>Find activities and events that support professional and administrative skills.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=tourism-management" class="feature-card">
								<img src="images/7.jpg" alt="Tourism Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Tourism Management</h3>
									<p>Explore tourism-related activities, learning opportunities, and student events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=criminology" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Criminology program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Criminology</h3>
									<p>Discover criminology activities, competitions, and academic events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=industrial-security-management" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Industrial Security Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Industrial Security Management</h3>
									<p>Explore activities and events related to industrial security and safety.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=secondary-education-english" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Secondary Education English program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Secondary Education — English</h3>
									<p>Explore academic activities and events for future English educators.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=secondary-education-english-chinese" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Secondary Education English-Chinese program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Secondary Education — English-Chinese</h3>
									<p>Discover events and activities for English-Chinese education students.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=secondary-education-science" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Secondary Education Science program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Secondary Education — Science</h3>
									<p>Find science education activities, seminars, and program events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=secondary-education-tle" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Secondary Education Technology and Livelihood Education program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Secondary Education — TLE</h3>
									<p>Explore activities related to Technology and Livelihood Education.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=early-childhood-education" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Early Childhood Education program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Early Childhood Education</h3>
									<p>Discover activities and learning events for aspiring early childhood educators.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=professional-education" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Professional Education program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Professional Education</h3>
									<p>Explore professional learning activities and education-related events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=elementary-secondary-pe" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Elementary, Secondary and Physical Education program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Elementary, Secondary and Physical Education</h3>
									<p>Find educational activities and events for future teachers and educators.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=computer-engineering" class="feature-card">
								<img src="images/ALUMNI.jpg" alt="Computer Engineering program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/ALUMNI2.png" alt=""></div>
									<h3>Computer Engineering</h3>
									<p>Discover engineering projects, competitions, and academic activities.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=electrical-engineering" class="feature-card">
								<img src="images/ALUMNI.jpg" alt="Electrical Engineering program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/ALUMNI2.png" alt=""></div>
									<h3>Electrical Engineering</h3>
									<p>Explore technical activities and events for Electrical Engineering students.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=electronics-engineering" class="feature-card">
								<img src="images/ALUMNI.jpg" alt="Electronics Engineering program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/ALUMNI2.png" alt=""></div>
									<h3>Electronics Engineering</h3>
									<p>Discover electronics projects, technical activities, and program events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=industrial-engineering" class="feature-card">
								<img src="images/ALUMNI.jpg" alt="Industrial Engineering program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/ALUMNI2.png" alt=""></div>
									<h3>Industrial Engineering</h3>
									<p>Explore process improvement, innovation, and engineering activities.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=doctor-public-administration" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Doctor in Public Administration program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Doctor in Public Administration</h3>
									<p>Explore academic events and activities in public administration.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=phd-educational-management" class="feature-card">
								<img src="images/COMMUNITY.png" alt="PhD Educational Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>PhD — Educational Management</h3>
									<p>Find graduate-level academic activities and education events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=master-public-administration" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Master in Public Administration program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Master in Public Administration</h3>
									<p>Discover graduate academic activities and public administration events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=ma-education-management" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Master of Arts in Education Educational Management program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>MA Education — Educational Management</h3>
									<p>Explore graduate-level activities for educational management students.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=ma-teaching-early-grades" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Master of Arts in Education Teaching in the Early Grades program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>MA Education — Teaching in the Early Grades</h3>
									<p>Find graduate learning activities and education-related events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=ma-teaching-science" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Master of Arts in Education Teaching Science program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>MA Education — Teaching Science</h3>
									<p>Discover graduate activities related to science education.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=master-business-administration" class="feature-card">
								<img src="images/7.jpg" alt="Master of Business Administration program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/FACILITIES.png" alt=""></div>
									<h3>Master of Business Administration</h3>
									<p>Explore graduate-level business activities, seminars, and events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=ms-criminal-justice-criminology" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Master of Science in Criminal Justice Criminology program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>MS Criminal Justice — Criminology</h3>
									<p>Discover graduate activities and events in criminal justice and criminology.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=law" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Law program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Law</h3>
									<p>Stay updated on legal debates, academic activities, and Law program events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=political-science" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Political Science program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>AB Political Science</h3>
									<p>Explore discussions, academic activities, and events in political science.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=communication" class="feature-card">
								<img src="images/STUDENT-LIFE.jpg" alt="Communication program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/STUDENT2.png" alt=""></div>
									<h3>BA Communication</h3>
									<p>Discover media, communication, and creative student activities.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=public-administration" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Public Administration program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Public Administration</h3>
									<p>Explore public service activities, seminars, and academic events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=public-administration-special" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Public Administration Special Program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Public Administration — Special Program</h3>
									<p>Discover activities and events for the Public Administration Special Program.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=computer-science" class="feature-card">
								<img src="images/STUDENT-LIFE.jpg" alt="Computer Science program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/STUDENT2.png" alt=""></div>
									<h3>Computer Science</h3>
									<p>Explore events, competitions, and activities organized by the Computer Science program.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=entertainment-multimedia-computing" class="feature-card">
								<img src="images/STUDENT-LIFE.jpg" alt="Entertainment and Multimedia Computing program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/STUDENT2.png" alt=""></div>
									<h3>Entertainment and Multimedia Computing</h3>
									<p>Discover multimedia projects, creative showcases, and computing events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=information-system" class="feature-card">
								<img src="images/STUDENT-LIFE.jpg" alt="Information System program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/STUDENT2.png" alt=""></div>
									<h3>Information System</h3>
									<p>Explore information systems activities, seminars, and student projects.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=information-technology" class="feature-card">
								<img src="images/STUDENT-LIFE.jpg" alt="Information Technology program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/STUDENT2.png" alt=""></div>
									<h3>Information Technology</h3>
									<p>Discover IT activities, technology showcases, and program events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=mathematics" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Mathematics program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Mathematics</h3>
									<p>Explore academic competitions, learning activities, and mathematics events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
							<a href="program-events.php?program=psychology" class="feature-card">
								<img src="images/COMMUNITY.png" alt="Psychology program events">
								<div class="feature-overlay"></div>
								<div class="feature-content">
									<div class="feature-icon" aria-hidden="true"><img src="images/COMMUNITY2.png" alt=""></div>
									<h3>Psychology</h3>
									<p>Discover psychology-related activities, seminars, and student events.</p>
								</div>
								<span class="feature-arrow" aria-hidden="true">→</span>
							</a>
						</div>
						<!-- PROGRAM EVENT CONTROLS -->
						<div class="program-event-controls">
							<button type="button" class="program-event-control" id="programPrev" aria-label="Previous program events">←</button>
							<div class="program-event-dots" id="programEventDots" aria-label="Program event pages"></div>
							<button type="button" class="program-event-control" id="programNext" aria-label="Next program events">→</button>
						</div>
					</div>
					<!-- QUICK LINKS -->
					<aside class="quick-links" aria-labelledby="quick-links-title">
						<h2 id="quick-links-title">Quick Links</h2>
						<div class="quick-links-grid">
							<a href="https://caloocancity.gov.ph/" class="quick-link-item" target="_blank" rel="noopener noreferrer"><img src="images/Caloocan.png" alt="City Government of Caloocan"></a>
							<a href="https://ched.gov.ph/" class="quick-link-item" target="_blank" rel="noopener noreferrer"><img src="images/CHED.png" alt="CHED"></a>
							<a href="https://aims.ucc-caloocan.edu.ph/ucc/faculty/" class="quick-link-item" target="_blank" rel="noopener noreferrer">
								<img src="images/AIMS.png" alt="AIMS Faculty Portal">
								<span>AIMS Faculty Portal</span>
							</a>
							<a href="https://aims.ucc-caloocan.edu.ph/ucc/students/" class="quick-link-item" target="_blank" rel="noopener noreferrer">
								<img src="images/AIMS.png" alt="AIMS Student Portal">
								<span>AIMS Student Portal</span>
							</a>
							<!-- DOST HAS NO LINK -->
							<div class="quick-link-item"><img src="images/DOST.png" alt="DOST"></div>
							<a href="https://dict.gov.ph/" class="quick-link-item" target="_blank" rel="noopener noreferrer"><img src="images/DICT.png" alt="DICT"></a>
						</div>
					</aside>
				</div>
			</div>
		</section>
		<!-- STATS -->
		<section class="stats-section">
			<div class="container stats-grid">
				<div class="stat reveal">
					<img src="images/BUILDING.png" alt="" class="stat-icon">
					<div class="stat-info">
						<strong data-count="1971">0</strong>
						<span>Year Established</span>
					</div>
				</div>
				<div class="stat reveal">
					<img src="images/STUDENT.png" alt="" class="stat-icon">
					<div class="stat-info">
						<div class="stat-number"><strong data-count="13000">0</strong><em>+</em></div>
						<span>Students</span>
					</div>
				</div>
				<div class="stat reveal">
					<img src="images/CAMPUSES.png" alt="" class="stat-icon">
					<div class="stat-info">
						<strong data-count="4">0</strong>
						<span>Campuses</span>
					</div>
				</div>
				<div class="stat reveal">
					<img src="images/COLLEGES.png" alt="" class="stat-icon">
					<div class="stat-info">
						<div class="stat-number"><strong data-count="7">0</strong><em>+</em></div>
						<span>Colleges</span>
					</div>
				</div>
			</div>
		</section>
		<!-- CURVE BETWEEN STATS AND FOOTER -->
		<div class="stats-footer-curve" aria-hidden="true">
			<svg viewBox="0 0 1000 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
				<path fill="#c5df2b" d="M0,45 C250,5 500,5 1000,45 L1000,100 L0,100 Z"/>
				<path fill="#003b29" d="M0,52 C250,12 500,12 1000,52 L1000,100 L0,100 Z"/>
			</svg>
		</div>
	</main>

	<!-- ACADEMIC CALENDAR MODAL -->
	<div class="calendar-modal" id="calendarModal" aria-hidden="true">
		<div class="calendar-modal-backdrop" id="calendarModalBackdrop"></div>
		<div class="calendar-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="calendarModalTitle">
			<div class="calendar-modal-header">
				<h2 id="calendarModalTitle">Academic Calendar</h2>
				<button type="button" class="calendar-modal-close" id="calendarModalClose" aria-label="Close academic calendar">×</button>
			</div>
			<div class="calendar-modal-content">
				<article class="calendar-modal-event">
					<div class="calendar-modal-event-info">
						<h3>FINALS EXAMINATION WEEK</h3>
						<p>October 25 – October 31, 2026</p>
					</div>
					<a href="calendar.php?event=finals" class="calendar-modal-read-more">Read More <span>→</span></a>
				</article>
				<article class="calendar-modal-event">
					<div class="calendar-modal-event-info">
						<h3>SUBMISSION OF GRADES</h3>
						<p>November 3 – November 9, 2026</p>
					</div>
					<a href="calendar.php?event=grades" class="calendar-modal-read-more">Read More <span>→</span></a>
				</article>
			</div>
		</div>
	</div>
	<!-- NEWS MODAL -->
	<div class="news-modal" id="newsModal" aria-hidden="true">
		<div class="news-modal-backdrop" id="newsModalBackdrop"></div>
		<div class="news-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="newsModalTitle">
			<div class="news-modal-header">
				<div class="news-modal-heading">
					<span class="news-modal-label" id="newsModalCategory">NEWS</span>
					<h2 id="newsModalTitle"></h2>
				</div>
				<button type="button" class="news-modal-close" id="newsModalClose" aria-label="Close news popup">×</button>
			</div>
			<div class="news-modal-body">
				<figure class="news-modal-image"><img id="newsModalImage" src="" alt=""></figure>
				<div class="news-modal-meta"><span class="news-modal-date" id="newsModalDate">Published</span></div>
				<div class="news-modal-accent"></div>
				<p class="news-modal-placeholder" id="newsModalDescription"></p>
			</div>
			<div class="news-modal-footer">UNIVERSITY OF CALOOCAN CITY <span>•</span> NEWS</div>
		</div>
	</div>
	<?php require_once __DIR__ . '/includes/footer.php'; ?>
	<button class="back-top" id="backTop" aria-label="Back to top">↑</button>

	<script src="https://unpkg.com/lucide@latest"></script>
	<script src="script.js"></script>
	<script src="homepage-modals.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			document.querySelectorAll(".news-section .reveal").forEach(function (element) {
				element.classList.add("show");
			});
			if (window.lucide) {
				window.lucide.createIcons();
			}
		});
	</script>
</body>
</html>
