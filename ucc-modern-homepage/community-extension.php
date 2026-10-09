<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | Community-Extension Services</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
	<style>
		#cesModal{
			position:fixed;
			inset:0;
			z-index:99999;
			opacity:0;
			visibility:hidden;
			pointer-events:none;
		}
		#cesModal.active{
			opacity:1;
			visibility:visible;
			pointer-events:auto;
		}
		#cesModal .student-modal-backdrop{
			position:absolute;
			inset:0;
		}
		#cesModal .student-modal-dialog{
			position:relative;
			z-index:2;
		}
		#cesModal .student-modal-close{
			display:flex;
			align-items:center;
			justify-content:center;
			width:38px;
			height:38px;
			flex-shrink:0;
			padding:0;
			border:1px solid rgba(255,255,255,.25);
			border-radius:50%;
			background:rgba(255,255,255,.08);
			color:#fff;
			font-family:Arial,Helvetica,sans-serif;
			font-size:26px;
			line-height:1;
			cursor:pointer;
			transition:
				background .2s ease,
				border-color .2s ease,
				transform .2s ease;
		}
		#cesModal .student-modal-close:hover{
			background:#eab72e;
			border-color:#eab72e;
			color:#003b25;
			transform:rotate(90deg);
		}
		.ces-featured-card,
		.ces-moa-card,
		.ces-services-card{
			cursor:pointer;
		}
	</style>
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
	<!-- COMMUNITY & EXTENSION SERVICES MAIN CONTENT -->
	<main class="ces-page">
		<div class="ces-bg ces-bg-1"></div>
		<div class="ces-bg ces-bg-2"></div>
		<section class="ces-container">
			<!-- FEATURED COMMUNITY POST -->
			<article class="ces-featured-card ces-modal-trigger" data-article="ugnayan">
				<div class="ces-featured-image">
					<img src="images/UGNAYAN.jpg" alt="Ugnayan ng Mamamayan, Barangay, at Pamantasan">
				</div>
				<div class="ces-featured-content">
					<div class="ces-post-meta ces-meta-light">
						<div class="ces-meta-item">
							<i data-lucide="map-pin"></i>
							<div>
								<strong>November 6-7, 2019</strong>
								<span>Session Hall, Sangguniang Panglungsod,<br>Caloocan New City Hall</span>
							</div>
						</div>
					</div>
					<h1>UGNAYAN NG MAMAMAYAN,<br>BARANGAY, AT PAMANTASAN</h1>
					<div class="ces-title-line"></div>
					<p>
						November 6-7, 2019 | Session Hall, Sangguniang Panglungsod,
						Caloocan New City Hall. This collaborative gathering strengthened
						the relationship between the community, barangays, and the
						University of Caloocan City.
					</p>
					<a href="#" class="ces-read-more ces-read-light" data-modal-trigger="ugnayan">
						<span>Read More</span>
						<i data-lucide="arrow-right"></i>
					</a>
				</div>
				<div class="ces-featured-glow"></div>
			</article>
			<!-- MEMORANDUM POST -->
			<article class="ces-moa-card ces-modal-trigger" data-article="memorandum">
				<div class="ces-moa-image">
					<img src="images/SIGNING-MEMORANDUM.jpg" alt="Signing of the Memorandum of Agreement">
				</div>
				<div class="ces-moa-content">
					<div class="ces-post-meta ces-meta-dark">
						<div class="ces-meta-item">
							<i data-lucide="map-pin"></i>
							<div>
								<strong>October 8, 2019</strong>
								<span>Barangay 28, Caloocan City</span>
							</div>
						</div>
					</div>
					<h2>SIGNING OF THE<br>MEMORANDUM OF AGREEMENT</h2>
					<div class="ces-title-line ces-line-dark"></div>
					<p>
						October 8, 2019 | Barangay 28, Caloocan City. The Memorandum
						of Agreement was officially signed by the representatives of
						the University of Caloocan City's Community Extension Services
						and Barangay 28.
					</p>
					<a href="#" class="ces-read-more ces-read-dark" data-modal-trigger="memorandum">
						<span>Read More</span>
						<i data-lucide="arrow-right"></i>
					</a>
					<div class="ces-pen-decoration">
						<i data-lucide="pen-line"></i>
					</div>
					<div class="ces-signature-decoration">UCC</div>
				</div>
			</article>
			<!-- COMMUNITY AND EXTENSION SERVICES -->
			<article class="ces-services-card ces-modal-trigger" data-article="services">
				<div class="ces-services-content">
					<h2>Community and<br>Extension Services</h2>
					<div class="ces-title-line ces-line-dark"></div>
					<p>
						VISION AND MISSION is envisioned that the people of the community
						in Caloocan City, the main focus of the University's Extension
						Services Program, can be uplifted from helplessness to self-reliance
						and from indifference to positive involvement.
					</p>
					<a href="#" class="ces-read-more ces-read-dark" data-modal-trigger="services">
						<span>Read More</span>
						<i data-lucide="arrow-right"></i>
					</a>
				</div>
				<div class="ces-community-graphic">
					<svg class="ces-connection-lines" viewBox="0 0 600 260" preserveAspectRatio="none" aria-hidden="true">
						<line x1="105" y1="55" x2="255" y2="115"></line>
						<line x1="495" y1="55" x2="345" y2="115"></line>
						<line x1="125" y1="205" x2="255" y2="145"></line>
						<line x1="475" y1="205" x2="345" y2="145"></line>
					</svg>
					<div class="ces-icon-node ces-node-home">
						<i data-lucide="house"></i>
					</div>
					<div class="ces-icon-node ces-node-handshake">
						<i data-lucide="handshake"></i>
					</div>
					<div class="ces-icon-node ces-node-book">
						<i data-lucide="book-open"></i>
					</div>
					<div class="ces-icon-node ces-node-school">
						<i data-lucide="school"></i>
					</div>
					<div class="ces-icon-node ces-node-people">
						<i data-lucide="users-round"></i>
						<span>COMMUNITY</span>
					</div>
					<i class="ces-mini-icon ces-mini-1" data-lucide="map-pin"></i>
					<i class="ces-mini-icon ces-mini-2" data-lucide="trees"></i>
					<i class="ces-mini-icon ces-mini-3" data-lucide="map-pin"></i>
					<i class="ces-mini-icon ces-mini-4" data-lucide="tree-pine"></i>
				</div>
			</article>
		</section>
	</main>
	<!-- COMMUNITY EXTENSION ARTICLE MODAL -->
	<div class="student-modal" id="cesModal" aria-hidden="true">
		<div class="student-modal-backdrop" data-modal-close></div>
		<div class="student-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="cesModalTitle">
			<div class="student-modal-header">
				<div class="student-modal-heading">
					<span class="student-modal-label" id="cesModalCategory">COMMUNITY EXTENSION SERVICES</span>
				</div>
				<button class="student-modal-close" type="button" aria-label="Close" data-modal-close>×</button>
			</div>
			<div class="student-modal-body">
				<div class="student-modal-accent"></div>
				<h2 id="cesModalTitle"></h2>
				<div id="cesModalContent"></div>
			</div>
			<div class="student-modal-footer">
				<span>UNIVERSITY OF CALOOCAN CITY</span>
			</div>
		</div>
	</div>
	<?php include __DIR__ . '/includes/footer.php'; ?>
	<button class="back-top" id="backTop" aria-label="Back to top">↑</button>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script src="script.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded",function(){
			if(typeof lucide!=="undefined"){
				lucide.createIcons();
			}
			const cesModal=document.getElementById("cesModal");
			const cesModalCategory=document.getElementById("cesModalCategory");
			const cesModalTitle=document.getElementById("cesModalTitle");
			const cesModalContent=document.getElementById("cesModalContent");
			if(!cesModal){
				return;
			}
			const cesArticles={
				ugnayan:{
					category:"COMMUNITY ENGAGEMENT",
					title:"UGNAYAN NG MAMAMAYAN, BARANGAY, AT PAMANTASAN",
					content:`
						<p>
							The University of Caloocan City brings together the community,
							barangays, and the University through meaningful collaboration
							and community engagement.
						</p>
						<div class="modal-highlight">
							<strong>November 6-7, 2019</strong><br>
							Session Hall, Sangguniang Panglungsod,<br>
							Caloocan New City Hall
						</div>
						<h3>Ugnayan ng Mamamayan, Barangay, at Pamantasan</h3>
						<p>
							This collaborative gathering strengthened the relationship
							between the community, barangays, and the University of
							Caloocan City. It highlights the importance of cooperation
							between the University and the communities it serves.
						</p>
						<p>
							Through community engagement and dialogue, UCC continues
							to provide opportunities for stronger partnerships and
							meaningful participation in programs that respond to
							community needs.
						</p>
					`
				},
				memorandum:{
					category:"COMMUNITY EXTENSION SERVICES",
					title:"SIGNING OF THE MEMORANDUM OF AGREEMENT",
					content:`
						<div class="modal-highlight">
							<strong>October 9, 2019</strong><br>
							Barangay 28, Caloocan City
						</div>
						<p>
							The Memorandum of Agreement (MOA) was officially signed by
							the representatives of the University of Caloocan City’s
							Community Extension Services (UCC-CES) and Barangay Captain
							Hon. Edgar Galgana of Barangay 28, Caloocan City.
						</p>
						<p>
							This agreement marked the formal collaboration between the
							two parties, highlighting their shared commitment to
							community engagement and service.
						</p>
						<h3>Community Programs</h3>
						<p>
							The MOA outlined the roles and responsibilities of both
							parties in various community-driven programs, focusing on
							key areas such as health awareness and disaster risk
							management.
						</p>
						<ul>
							<li>Providing free feeding programs for malnourished children in the community.</li>
							<li>Educating the youth on the prevention of teenage pregnancy.</li>
							<li>Raising awareness on HIV prevention among the youth.</li>
							<li>Developing disaster preparedness skills within the community.</li>
							<li>Establishing a barangay library.</li>
							<li>Conducting financial literacy lectures and training.</li>
							<li>Enhancing literacy rates among out-of-school youth, street children, and older adults.</li>
						</ul>
						<p>
							This partnership underscores the shared vision of UCC-CES
							and Barangay 28 in promoting community welfare, education,
							and resilience.
						</p>
					`
				},
				services:{
					category:"COMMUNITY EXTENSION SERVICES",
					title:"COMMUNITY AND EXTENSION SERVICES",
					content:`
						<h3>Vision and Mission</h3>
						<p>
							It is envisioned that the people of the community in
							Caloocan City, the main focus of the University’s Extension
							Services Program, can be uplifted from helplessness to
							self-reliance, from indifference to positive involvement,
							and from helplessness to commitment.
						</p>
						<p>
							This shall be realized through the effective implementation
							of the University’s Extension Service Program.
						</p>
						<h3>Goals</h3>
						<p>
							The Community Extension Services program facilitates
							awareness and understanding among students on the community
							where they belong by providing opportunities in
							community-related activities that foster engagement and
							contribute to the transformation of society.
						</p>
						<h3>Community Extension Services Aims To</h3>
						<ul>
							<li>Provide practical experience among students through various community service projects.</li>
							<li>Aid in students’ personal growth and life skills such as leadership, collaboration, communication, problem-solving, and critical thinking.</li>
							<li>Promote social responsibility and commitment to community service through participation in community-related activities.</li>
							<li>Build connections between students and professionals and leaders that can be beneficial for their future careers.</li>
							<li>Promote cultural understanding among students through experiences that broaden their perspectives regarding community issues.</li>
						</ul>
						<div class="modal-highlight">
							The program connects student development with meaningful
							community engagement, allowing students to gain practical
							experience while contributing to community-related
							activities.
						</div>
					`
				}
			};
			function openCesModal(articleId){
				const article=cesArticles[articleId];
				if(!article){
					return;
				}
				cesModalCategory.textContent=article.category;
				cesModalTitle.textContent=article.title;
				cesModalContent.innerHTML=article.content;
				cesModal.classList.add("active");
				cesModal.setAttribute("aria-hidden","false");
				document.body.classList.add("student-modal-open");
				const modalBody=cesModal.querySelector(".student-modal-body");
				if(modalBody){
					modalBody.scrollTop=0;
				}
			}
			function closeCesModal(){
				cesModal.classList.remove("active");
				cesModal.setAttribute("aria-hidden","true");
				document.body.classList.remove("student-modal-open");
			}
			/* WHOLE CARD CLICK */
			document.querySelectorAll(".ces-modal-trigger").forEach(card=>{
				card.addEventListener("click",function(event){
					if(event.target.closest("a")){
						return;
					}
					openCesModal(this.dataset.article);
				});
			});
			/* READ MORE BUTTON */
			document.querySelectorAll("[data-modal-trigger]").forEach(button=>{
				button.addEventListener("click",function(event){
					event.preventDefault();
					event.stopPropagation();
					openCesModal(this.dataset.modalTrigger);
				});
			});
			/* BACKDROP + X BUTTON */
			cesModal.querySelectorAll("[data-modal-close]").forEach(button=>{
				button.addEventListener("click",function(event){
					event.preventDefault();
					event.stopPropagation();
					closeCesModal();
				});
			});
			/* ESCAPE KEY */
			document.addEventListener("keydown",function(event){
				if(event.key==="Escape"&&cesModal.classList.contains("active")){
					closeCesModal();
				}
			});
		});
	</script>
</body>
</html>
