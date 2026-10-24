
document.addEventListener("DOMContentLoaded", () => {
    const eventsElement = document.getElementById("collegeEventsData");
    const programsElement = document.getElementById("collegeProgramsData");
    if (!eventsElement || !programsElement) return;
    let eventsData = [];
    let collegePrograms = [];
    try {
        eventsData = JSON.parse(eventsElement.textContent || "[]");
        collegePrograms = JSON.parse(programsElement.textContent || "[]");
    } catch (error) {
        console.error("Unable to load college events data:", error);
        return;
    }
    let currentFilter = "ALL";
    let currentPage = 1;
    let showAllEvents = false;
    const itemsPerPage = 6;
    const featuredNews = document.getElementById("featuredNews");
    const newsGrid = document.getElementById("newsGrid");
    const newsPagination = document.getElementById("newsPagination");
    const newsPrev = document.getElementById("newsPrev");
    const newsNext = document.getElementById("newsNext");
    const programFilters = document.querySelectorAll(".college-program-filters .news-filter");
    const viewAllEvents = document.getElementById("viewAllEvents");
    const eventsCount = document.getElementById("eventsCount");
    const moreEventsTitle = document.getElementById("moreEventsTitle");
    const newsModal = document.getElementById("newsModal");
    const newsModalTitle = document.getElementById("newsModalTitle");
    const newsModalCategory = document.getElementById("newsModalCategory");
    const newsModalCategoryBadge = document.getElementById("newsModalCategoryBadge");
    const newsModalDate = document.getElementById("newsModalDate");
    const newsModalImage = document.getElementById("newsModalImage");
    const newsModalImageLink = document.getElementById("newsModalImageLink");
    const newsModalProgram = document.getElementById("newsModalProgram");
    const newsModalDescription = document.getElementById("newsModalDescription");
    const newsImageLightbox = document.getElementById("newsImageLightbox");
    const newsLightboxImage = document.getElementById("newsLightboxImage");
    if (!featuredNews || !newsGrid || !newsPagination || !newsPrev || !newsNext || !viewAllEvents || !eventsCount || !moreEventsTitle || !newsModal || !newsModalTitle || !newsModalImage || !newsModalImageLink || !newsModalProgram || !newsImageLightbox || !newsLightboxImage) return;
    function getFilteredEvents() {
        if (currentFilter === "ALL") return eventsData;
        return eventsData.filter(event => event.program === currentFilter);
    }
    function getProgramName(slug) {
        const program = collegePrograms.find(item => item.slug === slug);
        return program ? program.name : "College Program";
    }
    function getExcerpt(title, limit = 125) {
        return title.length <= limit ? title : title.substring(0, limit).trim() + "...";
    }
    function escapeHTML(value) {
        return String(value ?? "").replace(/[&<>"']/g, character => ({
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#039;"
        })[character]);
    }
    function getSafeImagePath(path) {
        const allowedPrefix = "images/News/";
        return typeof path === "string" && path.startsWith(allowedPrefix) ? path : "images/UCC2.png";
    }
    function createEventCard(event) {
        const eventIndex = eventsData.indexOf(event);
        return `
            <article class="news-card college-event-card">
                <div class="news-card-image">
                    <img src="${escapeHTML(getSafeImagePath(event.image))}" alt="${escapeHTML(event.title)}" loading="lazy">
                    <span class="news-card-category">${escapeHTML(event.category)}</span>
                </div>
                <div class="news-card-content">
                    <span class="college-event-program">${escapeHTML(getProgramName(event.program))}</span>
                    <h3>${escapeHTML(event.title)}</h3>
                    <div class="news-card-date"><span>▣</span>${escapeHTML(event.date)}</div>
                    <div class="news-card-line"></div>
                    <button type="button" class="news-card-button" data-event-index="${eventIndex}">READ MORE <span>→</span></button>
                </div>
            </article>`;
    }
    function renderFeatured() {
        const items = getFilteredEvents();
        if (!items.length) {
            featuredNews.innerHTML = `
                <div class="news-empty college-events-empty">
                    <h3>No sample events found</h3>
                    <p>There are currently no demo items assigned to this program. The filter is working; sample event data can be added when needed.</p>
                </div>`;
            return;
        }
        const event = items[0];
        const eventIndex = eventsData.indexOf(event);
        featuredNews.innerHTML = `
            <div class="news-featured-image">
                <img src="${escapeHTML(getSafeImagePath(event.image))}" alt="${escapeHTML(event.title)}">
            </div>
            <div class="news-featured-content">
                <div class="news-featured-glow"></div>
                <span class="news-badge">${escapeHTML(event.category)}</span>
                <h2>${escapeHTML(event.title)}</h2>
                <div class="news-meta"><span>▣</span><strong>${escapeHTML(event.date)}</strong></div>
                <div class="college-events-featured-program">${escapeHTML(getProgramName(event.program))}</div>
                <div class="news-gold-divider"></div>
                <p>${escapeHTML(getExcerpt(event.title))}</p>
                <button type="button" class="news-read-more news-featured-read-more" data-event-index="${eventIndex}">READ MORE <span>→</span></button>
            </div>`;
        setImageFallbacks(featuredNews);
    }
    function renderCards() {
        const items = getFilteredEvents();
        const cardItems = items.slice(1);
        const totalPages = Math.ceil(cardItems.length / itemsPerPage);
        eventsCount.textContent = `${items.length} SAMPLE ${items.length === 1 ? "ITEM" : "ITEMS"}`;
        if (showAllEvents) {
            newsGrid.innerHTML = cardItems.length
                ? cardItems.map(createEventCard).join("")
                : `<div class="news-empty"><h3>No more events</h3><p>There are no additional demo items in this selection.</p></div>`;
            newsPagination.innerHTML = "";
            newsPrev.hidden = true;
            newsNext.hidden = true;
            setImageFallbacks(newsGrid);
            return;
        }
        if (currentPage > totalPages) currentPage = totalPages || 1;
        const start = (currentPage - 1) * itemsPerPage;
        const pageItems = cardItems.slice(start, start + itemsPerPage);
        newsGrid.innerHTML = pageItems.length
            ? pageItems.map(createEventCard).join("")
            : `<div class="news-empty"><h3>No more events</h3><p>The featured item is currently the only demo item for this selection.</p></div>`;
        renderPagination(totalPages);
        updateArrowButtons(totalPages);
        setImageFallbacks(newsGrid);
    }
    function setImageFallbacks(container) {
        container.querySelectorAll("img").forEach(image => {
            image.addEventListener("error", () => {
                if (!image.dataset.fallbackApplied) {
                    image.dataset.fallbackApplied = "true";
                    image.src = "images/UCC2.png";
                }
            }, { once: true });
        });
    }
    function renderPagination(totalPages) {
        newsPagination.innerHTML = "";
        if (showAllEvents || totalPages <= 1) return;
        const previous = document.createElement("button");
        previous.type = "button";
        previous.className = "news-page-arrow";
        previous.textContent = "‹ PREVIOUS";
        previous.disabled = currentPage === 1;
        previous.addEventListener("click", () => changePage(currentPage - 1));
        newsPagination.appendChild(previous);
        for (let page = 1; page <= totalPages; page++) {
            const button = document.createElement("button");
            button.type = "button";
            button.className = "news-page-number" + (page === currentPage ? " active" : "");
            button.textContent = page;
            button.setAttribute("aria-label", `Go to page ${page}`);
            button.setAttribute("aria-current", page === currentPage ? "page" : "false");
            button.addEventListener("click", () => changePage(page));
            newsPagination.appendChild(button);
        }
        const next = document.createElement("button");
        next.type = "button";
        next.className = "news-page-arrow";
        next.textContent = "NEXT ›";
        next.disabled = currentPage === totalPages;
        next.addEventListener("click", () => changePage(currentPage + 1));
        newsPagination.appendChild(next);
    }
    function changePage(page) {
        const totalPages = Math.ceil(Math.max(0, getFilteredEvents().length - 1) / itemsPerPage);
        if (page < 1 || page > totalPages) return;
        currentPage = page;
        renderCards();
        scrollToEvents();
    }
    function updateArrowButtons(totalPages) {
        const hide = showAllEvents || totalPages <= 1;
        newsPrev.hidden = hide;
        newsNext.hidden = hide;
        newsPrev.disabled = currentPage === 1;
        newsNext.disabled = currentPage === totalPages;
    }
    function scrollToEvents() {
        const page = document.querySelector(".college-events-page");
        if (!page) return;
        window.scrollTo({
            top: page.getBoundingClientRect().top + window.pageYOffset - 20,
            behavior: "smooth"
        });
    }
    function setActiveFilter(selectedButton) {
        programFilters.forEach(button => {
            const isActive = button === selectedButton;
            button.classList.toggle("active", isActive);
            button.setAttribute("aria-pressed", String(isActive));
        });
    }
    function updateViewAllButton() {
        viewAllEvents.innerHTML = showAllEvents
            ? "<span>▤</span> SHOW LESS EVENTS"
            : "<span>▤</span> VIEW ALL EVENTS";
    }
    function openEventModal(index) {
        const event = eventsData[index];
        if (!event) return;
        newsModalTitle.textContent = event.title;
        newsModalCategory.textContent = event.category;
        newsModalCategoryBadge.textContent = event.category;
        newsModalDate.textContent = event.date;
        newsModalImage.src = getSafeImagePath(event.image);
        newsModalImage.alt = event.title;
        newsModalImageLink.href = getSafeImagePath(event.image);
        newsModalImageLink.dataset.image = getSafeImagePath(event.image);
        newsModalProgram.textContent = "Program: " + getProgramName(event.program);
        newsModalDescription.textContent = "This is sample content for the college events layout preview. Full event descriptions, schedules, venues, and announcements can be connected when a real event data source becomes available.";
        newsModal.classList.add("active");
        newsModal.setAttribute("aria-hidden", "false");
        document.body.classList.add("news-modal-open");
        const closeButton = newsModal.querySelector(".news-modal-close");
        if (closeButton) closeButton.focus();
    }
    function closeEventModal() {
        closeEventImageLightbox();
        newsModal.classList.remove("active");
        newsModal.setAttribute("aria-hidden", "true");
        document.body.classList.remove("news-modal-open");
    }
    function openEventImageLightbox() {
        const image = newsModalImageLink.dataset.image;
        if (!image) return;
        newsLightboxImage.src = image;
        newsLightboxImage.alt = newsModalImage.alt;
        newsImageLightbox.classList.add("active");
        newsImageLightbox.setAttribute("aria-hidden", "false");
        const closeButton = newsImageLightbox.querySelector(".news-image-lightbox-close");
        if (closeButton) closeButton.focus();
    }
    function closeEventImageLightbox() {
        newsImageLightbox.classList.remove("active");
        newsImageLightbox.setAttribute("aria-hidden", "true");
        newsLightboxImage.removeAttribute("src");
    }
    featuredNews.addEventListener("click", event => {
        const trigger = event.target.closest("[data-event-index]");
        if (trigger) openEventModal(Number(trigger.dataset.eventIndex));
    });
    newsGrid.addEventListener("click", event => {
        const trigger = event.target.closest("[data-event-index]");
        if (trigger) openEventModal(Number(trigger.dataset.eventIndex));
    });
    newsModalImageLink.addEventListener("click", event => {
        event.preventDefault();
        openEventImageLightbox();
    });
    newsImageLightbox.addEventListener("click", event => {
        if (event.target.closest("[data-news-image-close]")) closeEventImageLightbox();
    });
    programFilters.forEach(button => {
        button.addEventListener("click", () => {
            currentFilter = button.dataset.filter || "ALL";
            currentPage = 1;
            showAllEvents = false;
            setActiveFilter(button);
            updateViewAllButton();
            const selectedProgram = currentFilter === "ALL" ? null : getProgramName(currentFilter);
            moreEventsTitle.textContent = selectedProgram
                ? "MORE: " + selectedProgram.toUpperCase()
                : "MORE COLLEGE EVENTS";
            renderFeatured();
            renderCards();
            scrollToEvents();
        });
    });
    newsPrev.addEventListener("click", () => changePage(currentPage - 1));
    newsNext.addEventListener("click", () => changePage(currentPage + 1));
    viewAllEvents.addEventListener("click", () => {
        if (showAllEvents) {
            showAllEvents = false;
            currentPage = 1;
        } else {
            currentFilter = "ALL";
            currentPage = 1;
            showAllEvents = true;
            const allButton = document.querySelector('.college-program-filters [data-filter="ALL"]');
            if (allButton) setActiveFilter(allButton);
            moreEventsTitle.textContent = "MORE COLLEGE EVENTS";
        }
        updateViewAllButton();
        renderFeatured();
        renderCards();
        if (!showAllEvents) scrollToEvents();
    });
    newsModal.addEventListener("click", event => {
        if (event.target.closest("[data-news-modal-close]")) closeEventModal();
    });
    document.addEventListener("keydown", event => {
        if (event.key === "Escape") {
            if (newsImageLightbox.classList.contains("active")) {
                closeEventImageLightbox();
            } else if (newsModal.classList.contains("active")) {
                closeEventModal();
            }
        }
    });
    renderFeatured();
    renderCards();
    updateViewAllButton();
    if (window.lucide) window.lucide.createIcons();
});
