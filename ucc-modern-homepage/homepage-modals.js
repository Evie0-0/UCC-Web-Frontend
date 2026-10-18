
document.addEventListener("DOMContentLoaded", function () {
	const newsModal = document.getElementById("newsModal");
	const calendarModal = document.getElementById("calendarModal");
	const newsModalTitle = document.getElementById("newsModalTitle");
	const newsModalCategory = document.getElementById("newsModalCategory");
	const newsModalDate = document.getElementById("newsModalDate");
	const newsModalImage = document.getElementById("newsModalImage");
	const newsModalDescription = document.getElementById("newsModalDescription");
	const newsModalClose = document.getElementById("newsModalClose");
	const newsModalBackdrop = document.getElementById("newsModalBackdrop");
	const calendarModalClose = document.getElementById("calendarModalClose");
	const calendarModalBackdrop = document.getElementById("calendarModalBackdrop");
	const newsDescriptions = {
		"2": "The University of Caloocan City announces the official overall list of qualified applicants for enrollment for Academic Year 2026–2027. Applicants should review the official announcement and follow the university's enrollment instructions.",
		"3": "The University of Caloocan City announces the opening of the First Semester for Academic Year 2026–2027. Students should check official university announcements for enrollment schedules, requirements, and other important updates.",
		"4": "The University of Caloocan City celebrates the performance of its graduates in the May 2026 Certified Public Accountant Licensure Examination. Please refer to official university announcements for confirmed results and additional details."
	};
	function openModal(modal) {
		if (!modal) return;
		modal.classList.add("is-open", "active", "show");
		modal.setAttribute("aria-hidden", "false");
		document.body.classList.add("modal-open");
	}
	function closeModal(modal) {
		if (!modal) return;
		modal.classList.remove("is-open", "active", "show");
		modal.setAttribute("aria-hidden", "true");
		if (!document.querySelector(".news-modal.is-open, .calendar-modal.is-open")) {
			document.body.classList.remove("modal-open");
		}
	}
	document.querySelectorAll(".news-card .read-more").forEach(function (link) {
		link.addEventListener("click", function (event) {
			event.preventDefault();
			const index = this.getAttribute("data-news-index");
			const card = this.closest(".news-card");
			if (!card || !newsModal) return;
			const title = card.querySelector("h3");
			const date = card.querySelector("small");
			const image = card.querySelector(".news-image");
			newsModalTitle.textContent = title ? title.textContent.trim() : "University News";
			newsModalCategory.textContent = "UNIVERSITY NEWS";
			newsModalDate.textContent = date ? date.textContent.trim() : "University of Caloocan City";
			newsModalDescription.textContent = newsDescriptions[index] || "Please refer to the official University of Caloocan City announcement for complete information.";
			if (image && newsModalImage) {
				const backgroundImage = window.getComputedStyle(image).backgroundImage;
				const imageUrl = backgroundImage.match(/url\(["']?(.*?)["']?\)/);
				if (imageUrl && imageUrl[1]) {
					newsModalImage.src = imageUrl[1];
					newsModalImage.alt = title ? title.textContent.trim() : "University news image";
					newsModalImage.parentElement.style.display = "block";
				} else {
					newsModalImage.removeAttribute("src");
					newsModalImage.alt = "";
					newsModalImage.parentElement.style.display = "none";
				}
			}
			openModal(newsModal);
		});
	});
	const calendarButton = document.getElementById("viewFullCalendar");
	if (calendarButton) {
		calendarButton.addEventListener("click", function (event) {
			event.preventDefault();
			openModal(calendarModal);
		});
	}
	if (newsModalClose) {
		newsModalClose.addEventListener("click", function () {
			closeModal(newsModal);
		});
	}
	if (newsModalBackdrop) {
		newsModalBackdrop.addEventListener("click", function () {
			closeModal(newsModal);
		});
	}
	if (calendarModalClose) {
		calendarModalClose.addEventListener("click", function () {
			closeModal(calendarModal);
		});
	}
	if (calendarModalBackdrop) {
		calendarModalBackdrop.addEventListener("click", function () {
			closeModal(calendarModal);
		});
	}
	document.addEventListener("keydown", function (event) {
		if (event.key === "Escape") {
			closeModal(newsModal);
			closeModal(calendarModal);
		}
	});
});
