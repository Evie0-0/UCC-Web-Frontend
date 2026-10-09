<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | Admission</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
</head>
<body>
	<!-- PAGE DOTS -->
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>
	<?php include __DIR__ . '/includes/utility-bar.php'; ?>
	<?php include __DIR__ . '/includes/navbar.php'; ?>
	<!-- MAIN CONTENT -->
	<main class="admission-news-page">
		<div class="admission-news-container">
			<div class="admission-news-heading">
				<h1>ADMISSION NEWS</h1>
				<div class="admission-heading-line"></div>
				<div class="admission-heading-dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<!-- ADMISSION PROCESS -->
			<div class="admission-post admission-modal-trigger" data-article="admission-process">
				<div class="admission-post-image">
					<img src="images/ADMISSION-PROCESS.jpg" alt="Admission Process">
				</div>
				<div class="admission-post-content">
					<span class="admission-category">UCC UPDATE</span>
					<h2>Admission Process</h2>
					<div class="admission-meta">
						<i data-lucide="calendar-days"></i>
						<span>Published 10 months ago</span>
					</div>
					<div class="admission-title-line"></div>
					<p>
						GOOD NEWS, FUTURE UCCIANS! The UCCAT 2026-2027 Admission Process will open earlier than expected! Application Period: October 6, 2025 onwards.
					</p>
					<a href="#" class="admission-read-more" data-modal-trigger="admission-process">
						READ MORE
						<span class="admission-arrow">
							<i data-lucide="arrow-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="admission-divider"></div>
			<!-- ONLINE ADMISSIONS AND ENROLLMENT -->
			<div class="admission-post admission-modal-trigger" data-article="online-admissions">
				<div class="admission-post-image">
					<img src="images/ADMISSION-ENROLLMENT.jpg" alt="Online Admissions and Enrollment Services for New Enrollees">
				</div>
				<div class="admission-post-content">
					<span class="admission-category">UCC UPDATE</span>
					<h2>Online Admissions and<br>Enrollment Services for<br>New Enrollees</h2>
					<div class="admission-meta">
						<i data-lucide="calendar-days"></i>
						<span>Published 1 year ago</span>
					</div>
					<div class="admission-title-line"></div>
					<p>
						Handa na po ang University of Caloocan City na tanggapin ang bagong batch ng mga Batang Kankaloo na nais maging UCCian.
					</p>
					<a href="#" class="admission-read-more" data-modal-trigger="online-admissions">
						READ MORE
						<span class="admission-arrow">
							<i data-lucide="arrow-right"></i>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="admission-location-decoration" aria-hidden="true">
			<div class="admission-location-pin">
				<i data-lucide="map-pin"></i>
			</div>
			<div class="admission-dotted-path"></div>
		</div>
		<div class="admission-bg-shape admission-bg-shape-1"></div>
		<div class="admission-bg-shape admission-bg-shape-2"></div>
	</main>
	<!-- ADMISSION ARTICLE MODAL -->
	<div class="student-modal" id="admissionModal" aria-hidden="true">
		<div class="student-modal-backdrop" data-modal-close></div>
		<div class="student-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="admissionModalTitle">
			<div class="student-modal-header">
				<div class="student-modal-heading">
					<span class="student-modal-label" id="admissionModalCategory">ADMISSION</span>
				</div>
				<button class="student-modal-close" type="button" aria-label="Close" data-modal-close>×</button>
			</div>
			<div class="student-modal-body">
				<div class="student-modal-accent"></div>
				<h2 id="admissionModalTitle"></h2>
				<div id="admissionModalContent"></div>
			</div>
			<div class="student-modal-footer">
				<span>UNIVERSITY OF CALOOCAN CITY</span>
			</div>
		</div>
	</div>
	<!-- FULL IMAGE LIGHTBOX -->
	<div class="policy-lightbox" id="policyLightbox" aria-hidden="true">
		<div class="policy-lightbox-backdrop" data-policy-close></div>
		<div class="policy-lightbox-content">
			<button type="button" class="policy-lightbox-close" aria-label="Close image" data-policy-close>
				<i data-lucide="x"></i>
			</button>
			<img id="policyLightboxImage" src="" alt="Admission Image">
		</div>
	</div>
	<!-- SHARED FOOTER -->
	<?php include __DIR__ . '/includes/footer.php'; ?>
	<button class="back-top" id="backTop" aria-label="Back to top">↑</button>
	<!-- JAVASCRIPT -->
	<script src="https://unpkg.com/lucide@latest"></script>
	<script src="script.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded",function(){
			if(typeof lucide!=="undefined"){
				lucide.createIcons();
			}
			const admissionModal=document.getElementById("admissionModal");
			const admissionModalCategory=document.getElementById("admissionModalCategory");
			const admissionModalTitle=document.getElementById("admissionModalTitle");
			const admissionModalContent=document.getElementById("admissionModalContent");
			const policyLightbox=document.getElementById("policyLightbox");
			const policyLightboxImage=document.getElementById("policyLightboxImage");
			if(!admissionModal){
				return;
			}
			const admissionArticles={
				"admission-process":{
					category:"UCC UPDATE",
					title:"ADMISSION PROCESS",
					content:`
						<p>
							<strong>GOOD NEWS, FUTURE UCCIANS!</strong> The UCCAT 2026-2027 Admission Process will open earlier than expected.
						</p>
						<div class="modal-highlight">
							<strong>Application Period</strong><br>
							October 6, 2025 onwards
						</div>
						<h3>Admission Process</h3>
						<p>
							Applicants are encouraged to review the admission requirements
							and follow the University's application procedures for the
							2026-2027 academic year.
						</p>
						<div class="admission-policy-guidelines">
							<h3>Policy Guidelines</h3>
							<p>
								Please review the following policy guidelines for the
								admission process:
							</p>
							<div class="admission-policy-images">
								<figure class="admission-policy-image">
									<a href="images/POLICYGUIDELINE-1.jpg" class="policy-image-trigger" data-policy-image="images/POLICYGUIDELINE-1.jpg">
										<img src="images/POLICYGUIDELINE-1.jpg" alt="Admission Policy Guidelines 1">
									</a>
									<figcaption>Policy Guidelines 1</figcaption>
								</figure>
								<figure class="admission-policy-image">
									<a href="images/POLICYGUIDELINE-2.jpg" class="policy-image-trigger" data-policy-image="images/POLICYGUIDELINE-2.jpg">
										<img src="images/POLICYGUIDELINE-2.jpg" alt="Admission Policy Guidelines 2">
									</a>
									<figcaption>Policy Guidelines 2</figcaption>
								</figure>
								<figure class="admission-policy-image">
									<a href="images/POLICYGUIDELINE-3.jpg" class="policy-image-trigger" data-policy-image="images/POLICYGUIDELINE-3.jpg">
										<img src="images/POLICYGUIDELINE-3.jpg" alt="Admission Policy Guidelines 3">
									</a>
									<figcaption>Policy Guidelines 3</figcaption>
								</figure>
							</div>
						</div>
					`
				},
				"online-admissions":{
					category:"UCC UPDATE",
					title:"ONLINE ADMISSIONS AND ENROLLMENT SERVICES FOR NEW ENROLLEES",
					content:`
						<p>
							Handa na po ang University of Caloocan City na tanggapin
							ang bagong batch ng mga Batang Kankaloo na nais maging UCCian.
						</p>
						<div class="modal-highlight">
							<strong>Online Admissions and Enrollment Services</strong><br>
							For New Enrollees
						</div>
						<h3>Online Admission Services</h3>
						<p>
							The University provides online admission and enrollment
							services to help new enrollees begin their application
							process and prepare for their enrollment at UCC.
						</p>
						<figure class="admission-online-image">
							<a href="images/ADMISSION-ENROLLMENT.jpg" class="policy-image-trigger" data-policy-image="images/ADMISSION-ENROLLMENT.jpg">
								<img src="images/ADMISSION-ENROLLMENT.jpg" alt="Online Admissions and Enrollment Services for New Enrollees">
							</a>
							<figcaption>Online Admissions and Enrollment Services for New Enrollees</figcaption>
						</figure>
						<p>
							Applicants are encouraged to follow the instructions and
							requirements provided by the University when completing
							their online application and enrollment process.
						</p>
					`
				}
			};
			function openAdmissionModal(articleId){
				const article=admissionArticles[articleId];
				if(!article){
					return;
				}
				admissionModalCategory.textContent=article.category;
				admissionModalTitle.textContent=article.title;
				admissionModalContent.innerHTML=article.content;
				admissionModal.classList.add("active");
				admissionModal.setAttribute("aria-hidden","false");
				document.body.classList.add("student-modal-open");
				const modalBody=admissionModal.querySelector(".student-modal-body");
				if(modalBody){
					modalBody.scrollTop=0;
				}
			}
			function closeAdmissionModal(){
				admissionModal.classList.remove("active");
				admissionModal.setAttribute("aria-hidden","true");
				document.body.classList.remove("student-modal-open");
			}
			function openPolicyLightbox(imageSrc){
				if(!policyLightbox||!policyLightboxImage){
					return;
				}
				policyLightboxImage.src=imageSrc;
				policyLightbox.classList.add("active");
				policyLightbox.setAttribute("aria-hidden","false");
			}
			function closePolicyLightbox(){
				if(!policyLightbox||!policyLightboxImage){
					return;
				}
				policyLightbox.classList.remove("active");
				policyLightbox.setAttribute("aria-hidden","true");
				policyLightboxImage.src="";
			}
			/* WHOLE CARD CLICK */
			document.querySelectorAll(".admission-modal-trigger").forEach(card=>{
				card.addEventListener("click",function(event){
					if(event.target.closest("a")){
						return;
					}
					openAdmissionModal(this.dataset.article);
				});
			});
			/* READ MORE */
			document.querySelectorAll("[data-modal-trigger]").forEach(button=>{
				button.addEventListener("click",function(event){
					event.preventDefault();
					event.stopPropagation();
					openAdmissionModal(this.dataset.modalTrigger);
				});
			});
			/* ALL ADMISSION IMAGES INSIDE MODALS */
			admissionModal.addEventListener("click",function(event){
				const imageTrigger=event.target.closest(".policy-image-trigger");
				if(!imageTrigger){
					return;
				}
				event.preventDefault();
				event.stopPropagation();
				const imageSrc=imageTrigger.dataset.policyImage||imageTrigger.getAttribute("href");
				openPolicyLightbox(imageSrc);
			});
			/* ADMISSION MODAL BACKDROP + CLOSE BUTTON */
			admissionModal.querySelectorAll("[data-modal-close]").forEach(button=>{
				button.addEventListener("click",function(event){
					event.preventDefault();
					event.stopPropagation();
					closeAdmissionModal();
				});
			});
			/* POLICY LIGHTBOX BACKDROP + CLOSE BUTTON */
			if(policyLightbox){
				policyLightbox.querySelectorAll("[data-policy-close]").forEach(button=>{
					button.addEventListener("click",function(event){
						event.preventDefault();
						event.stopPropagation();
						closePolicyLightbox();
					});
				});
			}
			/* ESCAPE KEY */
			document.addEventListener("keydown",function(event){
				if(event.key!=="Escape"){
					return;
				}
				if(policyLightbox&&policyLightbox.classList.contains("active")){
					closePolicyLightbox();
					return;
				}
				if(admissionModal.classList.contains("active")){
					closeAdmissionModal();
				}
			});
		});
	</script>
</body>
</html>