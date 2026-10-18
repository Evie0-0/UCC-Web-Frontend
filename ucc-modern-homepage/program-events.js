
document.addEventListener("DOMContentLoaded",function(){
	const eventsData=[
		{title:"UCC Recognition Day 2026: Honoring Excellence, Inspiring Purpose",date:"Published 4 months ago",image:"images/News/NEWS-Recognition20206.jpg",description:"A university celebration recognizing the achievements, dedication, and excellence of UCC students and members of the academic community.",programs:[]},
		{title:"Champions Rise at the UCC College of Law Debate Council’s Ikalimang Talastasan – Vera Cup 2026",date:"Published 6 months ago",image:"images/News/NEWS-ChampionsRise.jpg",description:"An academic debate event highlighting critical thinking, public speaking, and the intellectual excellence of participating students.",programs:["law"]},
		{title:"Happy National Women’s Month!",date:"Published 6 months ago",image:"images/News/NEWS-WomensMonth.jpg",description:"A celebration recognizing the contributions, achievements, and empowerment of women in the university and wider community.",programs:[]},
		{title:"Caloocan City Day",date:"Published 6 months ago",image:"images/News/NEWS-CaloocanDay.jpg",description:"A celebration honoring the history, culture, and community spirit of Caloocan City.",programs:[]},
		{title:"University of Caloocan City Strengthens Community Health Through Successful Blood Letting Activity",date:"Published 6 months ago",image:"images/News/NEWS-BloodLetting.jpg",description:"A community health initiative demonstrating UCC's commitment to public service, volunteerism, and community well-being.",programs:[]},
		{title:"University of Caloocan City College of Law Testimonial Ceremonies for the 2025 Bar Examination Passers",date:"Published 6 months ago",image:"images/News/NEWS-Law2025BarPassers.jpg",description:"A testimonial celebration honoring the accomplishments and dedication of the university's successful Bar Examination passers.",programs:["law"]},
		{title:"UCC Heroes United: Building a Legacy of Collective Excellence",date:"Published 9 months ago",image:"images/News/NEWS-UCCHeroesUnited.jpg",description:"A university feature celebrating the people and collective efforts that contribute to the UCC community.",programs:[]},
		{title:"The Heart of UCC: Amplifying the Voices That Shape Our WISE Community",date:"Published 9 months ago",image:"images/News/NEWS-TheHeartOfUCC.jpg",description:"A celebration of the individuals and shared experiences that help shape the university's WISE community.",programs:[]},
		{title:"UCC in Community Action: Showcasing Community-Extension Excellence",date:"Published 9 months ago",image:"images/News/NEWS-UCCinCommunityAction.jpg",description:"A look at community-extension initiatives that reflect UCC's commitment to public service and meaningful community engagement.",programs:[]},
		{title:"Bonifacio Day: Honoring the Father of the Philippine Revolution",date:"Published 9 months ago",image:"images/News/NEWS-BonifacioDay.jpg",description:"A commemoration honoring Andres Bonifacio and his contribution to Philippine history and the struggle for independence.",programs:[]},
		{title:"Cultivating Culture: UCC Strengthens Its Cultural Vision Through a Landmark Partnership with PETA",date:"Published 9 months ago",image:"images/News/NEWS-CultivatingCulture.jpg",description:"A cultural initiative highlighting collaboration and the university's commitment to creative expression and cultural development.",programs:[]},
		{title:"Celebrating Rod's Life",date:"Published 1 year ago",image:"images/News/NEWS-news-55.jpg",description:"A commemorative feature celebrating a life and the memories shared by the UCC community.",programs:[]},
		{title:"UCC at the PSPA Caravan 2025",date:"Published 1 year ago",image:"images/News/NEWS-news-59.jpg",description:"A university participation feature highlighting UCC's involvement in the PSPA Caravan 2025.",programs:[]},
		{title:"UCC Officials Make a Courtesy Visit to CHED-NCR Director",date:"Published 1 year ago",image:"images/News/NEWS-news-66.jpg",description:"A university engagement highlighting institutional communication and coordination with the Commission on Higher Education National Capital Region.",programs:[]},
		{title:"Gifts Were Shared, Memories Were Made: Adopt a Box 2025",date:"Published 1 year ago",image:"images/News/NEWS-news-67.jpg",description:"A community initiative centered on generosity, shared experiences, and bringing joy to children.",programs:[]},
		{title:"English-Chinese Department Year-End Summary Meeting: A Joint Festivity Between UCC and Huaqiao University",date:"Published 1 year ago",image:"images/News/NEWS-news-68.png",description:"A year-end gathering celebrating collaboration between the University of Caloocan City and Huaqiao University.",programs:["secondary-education-english-chinese"]},
		{title:"Mayor Dale Gonzalo “Along” Malapitan Leads Caloocan City Delegation on Official Visit to Huaqiao University",date:"Published 1 year ago",image:"images/News/NEWS-news-69.jpg",description:"An official university visit highlighting institutional engagement and international academic connections.",programs:[]},
		{title:"CCJE Week 2024 Held in Both South and North Campuses",date:"Published 1 year ago",image:"images/News/NEWS-news-70.jpg",description:"A college week bringing together the College of Criminal Justice Education community across the South and North campuses.",programs:["criminology","industrial-security-management"]},
		{title:"Inauguration of University of Caloocan City College of Engineering: A New Era Begins",date:"Published 1 year ago",image:"images/News/NEWS-news-73.jpg",description:"A milestone marking the inauguration of the UCC College of Engineering and a new chapter in engineering education.",programs:[]},
		{title:"UCC Boosts Employee Excellence with Dynamic Seminar and Team Building Event",date:"Published 2 years ago",image:"images/News/NEWS-news-76.jpg",description:"A university activity focused on professional development, teamwork, and strengthening collaboration among employees.",programs:[]},
		{title:"University of Caloocan City Celebrates Collective Success",date:"Published 7 months ago",image:"images/News/NEWS-CollectiveSuccess.jpg",description:"A celebration recognizing the collective efforts and achievements that help advance the university community.",programs:[]},
		{title:"Collaborative Interdisciplinary Research and Creative Linkages in Education Summit 2025",date:"Published 9 months ago",image:"images/News/NEWS-CollaborativeInterdisciplinary2025.jpg",description:"An academic gathering focused on interdisciplinary research, creative collaboration, and educational partnerships.",programs:[]}
	];
	const programPage=document.getElementById("programEventsPage");
	const selectedProgram=(programPage?.dataset.selectedProgram||"").trim().toLowerCase();
	const selectedEvents=eventsData.filter(item=>item.programs.includes(selectedProgram));
	const featuredEvent=document.getElementById("featuredEvent");
	const eventGrid=document.getElementById("eventGrid");
	const eventPagination=document.getElementById("eventPagination");
	const eventPrev=document.getElementById("eventPrev");
	const eventNext=document.getElementById("eventNext");
	const viewAllEvents=document.getElementById("viewAllEvents");
	const eventModal=document.getElementById("eventModal");
	const eventModalTitle=document.getElementById("eventModalTitle");
	const eventModalDate=document.getElementById("eventModalDate");
	const eventModalImage=document.getElementById("eventModalImage");
	const eventModalImageLink=document.getElementById("eventModalImageLink");
	const eventModalDescription=document.getElementById("eventModalDescription");
	const eventImageLightbox=document.getElementById("eventImageLightbox");
	const eventLightboxImage=document.getElementById("eventLightboxImage");
	const noProgramEvents=document.getElementById("noProgramEvents");
	const sectionTitle=document.querySelector(".news-section-title");
	const gridWrapper=document.querySelector(".news-grid-wrapper");
	const itemsPerPage=12;
	let currentPage=1;
	let showAllEvents=false;
	function getExcerpt(description){
		return description.length<=180?description:description.substring(0,180).trim()+"...";
	}
	function createEventCard(item,index){
		return `
			<article class="news-card">
				<div class="news-card-image">
					<img src="${item.image}" alt="${item.title}" loading="lazy" onerror="this.onerror=null;this.src='images/UCC2.png';">
				</div>
				<div class="news-card-content">
					<h3>${item.title}</h3>
					<div class="news-card-date"><span>▣</span>${item.date}</div>
					<div class="news-card-line"></div>
					<a href="#" class="news-card-button" data-event-index="${index}">READ MORE <span>→</span></a>
				</div>
			</article>
		`;
	}
	function renderFeatured(){
		if(!selectedEvents.length){
			featuredEvent.innerHTML="";
			featuredEvent.style.display="none";
			if(noProgramEvents){
				noProgramEvents.hidden=false;
				noProgramEvents.textContent=selectedProgram?"There are currently no events available for this program.":"No program was selected. Please select a program to view its events.";
			}
			if(sectionTitle)sectionTitle.style.display="none";
			if(gridWrapper)gridWrapper.style.display="none";
			eventPagination.innerHTML="";
			viewAllEvents.style.display="none";
			return;
		}
		featuredEvent.style.display="";
		if(noProgramEvents)noProgramEvents.hidden=true;
		if(sectionTitle)sectionTitle.style.display="";
		if(gridWrapper)gridWrapper.style.display="";
		const item=selectedEvents[0];
		featuredEvent.innerHTML=`
			<div class="news-featured-image">
				<img src="${item.image}" alt="${item.title}" onerror="this.onerror=null;this.src='images/UCC2.png';">
			</div>
			<div class="news-featured-content">
				<div class="news-featured-glow"></div>
				<h2>${item.title}</h2>
				<div class="news-meta"><span>▣</span><strong>${item.date}</strong></div>
				<div class="news-gold-divider"></div>
				<p>${getExcerpt(item.description)}</p>
				<a href="#" class="news-read-more news-featured-read-more" data-event-index="0">READ MORE <span>→</span></a>
			</div>
		`;
	}
	function renderCards(){
		if(!selectedEvents.length){
			eventGrid.innerHTML="";
			eventPagination.innerHTML="";
			eventPrev.style.display="none";
			eventNext.style.display="none";
			return;
		}
		const cardItems=selectedEvents.slice(1);
		const totalPages=Math.ceil(cardItems.length/itemsPerPage);
		if(currentPage>totalPages)currentPage=totalPages||1;
		const visibleItems=showAllEvents?cardItems:cardItems.slice((currentPage-1)*itemsPerPage,currentPage*itemsPerPage);
		eventGrid.innerHTML=visibleItems.length?visibleItems.map(item=>createEventCard(item,selectedEvents.indexOf(item))).join(""):`<div class="news-empty"><h3>No additional events</h3><p>There are no more events available for this program.</p></div>`;
		renderPagination(totalPages);
		updateArrowButtons(totalPages);
	}
	function renderPagination(totalPages){
		eventPagination.innerHTML="";
		if(showAllEvents||totalPages<=1)return;
		const previous=document.createElement("button");
		previous.type="button";
		previous.className="news-page-arrow";
		previous.textContent="‹ PREVIOUS";
		previous.disabled=currentPage===1;
		previous.addEventListener("click",()=>{
			if(currentPage>1){
				currentPage--;
				renderCards();
				scrollToEventsPage();
			}
		});
		eventPagination.appendChild(previous);
		for(let i=1;i<=totalPages;i++){
			const button=document.createElement("button");
			button.type="button";
			button.className="news-page-number"+(i===currentPage?" active":"");
			button.textContent=i;
			button.addEventListener("click",()=>{
				currentPage=i;
				renderCards();
				scrollToEventsPage();
			});
			eventPagination.appendChild(button);
		}
		const next=document.createElement("button");
		next.type="button";
		next.className="news-page-arrow";
		next.textContent="NEXT ›";
		next.disabled=currentPage===totalPages;
		next.addEventListener("click",()=>{
			if(currentPage<totalPages){
				currentPage++;
				renderCards();
				scrollToEventsPage();
			}
		});
		eventPagination.appendChild(next);
	}
	function updateArrowButtons(totalPages){
		const hide=showAllEvents||totalPages<=1;
		eventPrev.style.display=hide?"none":"";
		eventNext.style.display=hide?"none":"";
		eventPrev.disabled=currentPage===1;
		eventNext.disabled=currentPage===totalPages;
	}
	function scrollToEventsPage(){
		const page=document.querySelector(".news-page");
		if(!page)return;
		window.scrollTo({top:page.getBoundingClientRect().top+window.pageYOffset-20,behavior:"smooth"});
	}
	function updateViewAllButton(){
		viewAllEvents.innerHTML=showAllEvents?"<span>▤</span> SHOW LESS EVENTS":"<span>▤</span> VIEW ALL EVENTS";
		viewAllEvents.style.display=selectedEvents.length>1?"":"none";
	}
	function openEventModal(index){
		const item=selectedEvents[index];
		if(!item)return;
		eventModalTitle.textContent=item.title;
		eventModalDate.textContent=item.date;
		eventModalImage.src=item.image;
		eventModalImage.alt=item.title;
		eventModalImageLink.href=item.image;
		eventModalImageLink.dataset.image=item.image;
		eventModalDescription.textContent=item.description;
		eventModal.classList.add("active");
		eventModal.setAttribute("aria-hidden","false");
		document.body.classList.add("news-modal-open");
	}
	function closeEventModal(){
		closeEventImageLightbox();
		eventModal.classList.remove("active");
		eventModal.setAttribute("aria-hidden","true");
		document.body.classList.remove("news-modal-open");
	}
	function openEventImageLightbox(){
		const image=eventModalImageLink.dataset.image;
		if(!image)return;
		eventLightboxImage.src=image;
		eventLightboxImage.alt=eventModalImage.alt;
		eventImageLightbox.classList.add("active");
		eventImageLightbox.setAttribute("aria-hidden","false");
	}
	function closeEventImageLightbox(){
		eventImageLightbox.classList.remove("active");
		eventImageLightbox.setAttribute("aria-hidden","true");
		eventLightboxImage.src="";
	}
	document.addEventListener("click",function(event){
		const trigger=event.target.closest("[data-event-index]");
		if(trigger){
			event.preventDefault();
			openEventModal(Number(trigger.dataset.eventIndex));
		}
		if(event.target.closest("[data-event-modal-close]"))closeEventModal();
		if(event.target.closest("[data-event-image-close]"))closeEventImageLightbox();
	});
	eventModalImageLink.addEventListener("click",function(event){
		event.preventDefault();
		openEventImageLightbox();
	});
	eventPrev.addEventListener("click",()=>{
		const totalPages=Math.ceil(Math.max(selectedEvents.length-1,0)/itemsPerPage);
		if(currentPage>1&&!showAllEvents){
			currentPage--;
			renderCards();
			scrollToEventsPage();
		}
	});
	eventNext.addEventListener("click",()=>{
		const totalPages=Math.ceil(Math.max(selectedEvents.length-1,0)/itemsPerPage);
		if(currentPage<totalPages&&!showAllEvents){
			currentPage++;
			renderCards();
			scrollToEventsPage();
		}
	});
	viewAllEvents.addEventListener("click",()=>{
		showAllEvents=!showAllEvents;
		currentPage=1;
		updateViewAllButton();
		renderCards();
		if(!showAllEvents)scrollToEventsPage();
	});
	document.addEventListener("keydown",event=>{
		if(event.key==="Escape"){
			if(eventImageLightbox.classList.contains("active"))closeEventImageLightbox();
			else if(eventModal.classList.contains("active"))closeEventModal();
		}
	});
	renderFeatured();
	renderCards();
	updateViewAllButton();
});
