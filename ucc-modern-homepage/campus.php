<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="University of Caloocan City campus directory">
	<title>UCC | Campus</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="campus.css">
</head>
<body>
	<?php require_once __DIR__ . '/includes/utility-bar.php'; ?>
	<?php require_once __DIR__ . '/includes/navbar.php'; ?>
	<main id="campuses">
		<section class="campus-hero">
			<div class="campus-brand">
				<span class="brand-icon">♜</span>
				<span>UCC CAMPUS DIRECTORY</span>
			</div>
			<div class="container">
				<h1>Find your UCC Campus</h1>
				<p>Explore our campuses located across Caloocan City.</p>
				<div class="campus-community-badge">
					<i data-lucide="users"></i>
					<span>
						4 CAMPUSES
						<small>ONE COMMUNITY</small>
					</span>
				</div>
			</div>
		</section>
		<section class="campus-directory container">
			<div class="campus-grid" id="all-campuses">
				<a class="campus-card featured" id="main-campus" href="https://www.google.com/maps/search/?api=1&query=University+of+Caloocan+City+Biglang+Awa" target="_blank" rel="noopener noreferrer">
					<div class="campus-image-wrap">
						<img src="images/UCC-SOUTH.png" alt="Biglang Awa Main Campus">
						<span class="campus-badge">★ MAIN CAMPUS</span>
					</div>
					<div class="campus-card-body">
						<h2>Biglang Awa Main Campus</h2>
						<div class="campus-detail">
							<i data-lucide="map-pin"></i>
							<span>Biglang Awa Street, Cor 11th Ave, Caloocan City</span>
						</div>
						<div class="campus-detail">
							<i data-lucide="phone"></i>
							<span>Trunk Line: 8528-4654</span>
						</div>
						<div class="campus-detail">
							<i data-lucide="user-round"></i>
							<span>Admin: 53106855</span>
						</div>
						<div class="campus-link">
							<span>SHOW LOCATION ON GOOGLE MAPS</span>
							<i data-lucide="map"></i>
						</div>
					</div>
				</a>
				<a class="campus-card extension-card" id="congressional-campus" href="https://www.google.com/maps/search/?api=1&query=University+of+Caloocan+City+Congressional+Extension+Campus" target="_blank" rel="noopener noreferrer">
					<div class="extension-number">02</div>
					<div class="extension-image">
						<img src="images/University of Caloocan City.jpg" alt="Congressional Extension Campus">
					</div>
					<div class="small-campus-info">
						<h3>CONGRESSIONAL EXTENSION CAMPUS</h3>
						<div class="campus-detail">
							<i data-lucide="map-pin"></i>
							<span>Congressional Rd Ext, Barangay 171, Caloocan</span>
						</div>
						<div class="campus-detail">
							<i data-lucide="mail"></i>
							<span>congresscampusadmin@ucc-caloocan.edu.ph</span>
						</div>
						<div class="campus-detail">
							<i data-lucide="phone"></i>
							<span>Contact: 85242267</span>
						</div>
					</div>
				</a>
				<a class="campus-card extension-card" id="bagong-silang-campus" href="https://www.google.com/maps/search/?api=1&query=University+of+Caloocan+City+Bagong+Silang" target="_blank" rel="noopener noreferrer">
					<div class="extension-number">03</div>
					<div class="extension-image">
						<img src="images/UCC-BAGONGSILANG.png" alt="Bagong Silang Extension Campus">
					</div>
					<div class="small-campus-info">
						<h3>BAGONG SILANG EXTENSION CAMPUS</h3>
						<div class="campus-detail">
							<i data-lucide="map-pin"></i>
							<span>Barangay 176, Bagong Silang, Caloocan City</span>
						</div>
						<div class="campus-detail">
							<i data-lucide="mail"></i>
							<span>admin@ucc-caloocan.edu.ph</span>
						</div>
						<div class="campus-detail">
							<i data-lucide="phone"></i>
							<span>Contact: 88132324</span>
						</div>
					</div>
				</a>
				<a class="campus-card extension-card" id="camarin-campus" href="https://www.google.com/maps/search/?api=1&query=University+of+Caloocan+City+Camarin" target="_blank" rel="noopener noreferrer">
					<div class="extension-number">04</div>
					<div class="extension-image">
						<img src="images/UCC-CAMARIN.png" alt="Camarin Extension Campus">
					</div>
					<div class="small-campus-info">
						<h3>CAMARIN EXTENSION CAMPUS</h3>
						<div class="campus-detail">
							<i data-lucide="map-pin"></i>
							<span>23 Chrysanthemum St, Barangay 174, Caloocan, Metro Manila</span>
						</div>
						<div class="campus-detail">
							<i data-lucide="mail"></i>
							<span>camarinextension@ucc-caloocan.edu.ph</span>
						</div>
					</div>
				</a>
			</div>
		</section>
		<section class="glance-section">
			<div class="container">
				<div class="section-title">
					<div class="section-eyebrow">UCC CAMPUS DIRECTORY <span></span></div>
					<div class="section-heading-row">
						<span></span>
						<h2>CAMPUS AT A GLANCE</h2>
						<span></span>
					</div>
				</div>
				<div class="glance-grid">
					<div class="glance-card">
						<div class="glance-icon">
							<i data-lucide="building-2"></i>
						</div>
						<div class="glance-text">
							<strong>4</strong>
							<span>CAMPUSES</span>
						</div>
					</div>
					<div class="glance-card">
						<div class="glance-icon">
							<i data-lucide="map-pin"></i>
						</div>
						<div class="glance-text">
							<strong>CITY-WIDE</strong>
							<span>ACCESS</span>
						</div>
					</div>
					<div class="glance-card">
						<div class="glance-icon">
							<i data-lucide="users"></i>
						</div>
						<div class="glance-text">
							<strong>STUDENT-</strong>
							<span>CENTERED SPACES</span>
						</div>
					</div>
					<div class="glance-card">
						<div class="glance-icon">
							<i data-lucide="heart-handshake"></i>
						</div>
						<div class="glance-text">
							<strong>ONE UCC</strong>
							<span>COMMUNITY</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="visit-callout container">
			<div>
				<h2>Planning a visit?</h2>
				<p>See contact details and directions for each campus.</p>
			</div>
			<a href="contacts.php" class="gold-button">
				CONTACT UCC
				<i data-lucide="arrow-right"></i>
			</a>
		</section>
	</main>
	<?php require_once __DIR__ . '/includes/footer.php'; ?>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script>
		lucide.createIcons();
		const backTop=document.getElementById("backTop");
		if(backTop){
			window.addEventListener("scroll",()=>{
				if(window.scrollY>300){
					backTop.classList.add("show");
				}else{
					backTop.classList.remove("show");
				}
			});
			backTop.addEventListener("click",()=>{
				window.scrollTo({
					top:0,
					behavior:"smooth"
				});
			});
		}
		const menuToggle=document.querySelector(".menu-toggle");
		const mainNav=document.querySelector(".main-nav");
		if(menuToggle&&mainNav){
			menuToggle.addEventListener("click",()=>{
				mainNav.classList.toggle("open");
			});
		}
	</script>
</body>
</html>
