<?php
$collegeMap = [
    'business-accountancy' => [
        'title' => 'College of Business and Accountancy',
        'programs' => [
            ['name' => 'Accountancy', 'slug' => 'accountancy'],
            ['name' => 'Accounting Information System', 'slug' => 'accounting-information-system'],
            ['name' => 'Financial Management', 'slug' => 'financial-management'],
            ['name' => 'Human Resource Management', 'slug' => 'human-resource-management'],
            ['name' => 'Marketing Management', 'slug' => 'marketing-management'],
            ['name' => 'Entrepreneurship', 'slug' => 'entrepreneurship'],
            ['name' => 'Hospitality Management', 'slug' => 'hospitality-management'],
            ['name' => 'Office Administration', 'slug' => 'office-administration'],
            ['name' => 'Tourism Management', 'slug' => 'tourism-management']
        ]
    ],
    'criminal-justice' => [
        'title' => 'College of Criminal Justice Education',
        'programs' => [
            ['name' => 'Criminology', 'slug' => 'criminology'],
            ['name' => 'Industrial Security Management', 'slug' => 'industrial-security-management']
        ]
    ],
    'education' => [
        'title' => 'College of Education',
        'programs' => [
            ['name' => 'Secondary Education - English', 'slug' => 'secondary-education-english'],
            ['name' => 'Secondary Education - English-Chinese', 'slug' => 'secondary-education-english-chinese'],
            ['name' => 'Secondary Education - Science', 'slug' => 'secondary-education-science'],
            ['name' => 'Secondary Education - TLE', 'slug' => 'secondary-education-tle'],
            ['name' => 'Early Childhood Education', 'slug' => 'early-childhood-education'],
            ['name' => 'Professional Education', 'slug' => 'professional-education'],
            ['name' => 'Elementary / Secondary / P.E.', 'slug' => 'elementary-secondary-pe']
        ]
    ],
    'engineering' => [
        'title' => 'College of Engineering',
        'programs' => [
            ['name' => 'Computer Engineering', 'slug' => 'computer-engineering'],
            ['name' => 'Electrical Engineering', 'slug' => 'electrical-engineering'],
            ['name' => 'Electronics Engineering', 'slug' => 'electronics-engineering'],
            ['name' => 'Industrial Engineering', 'slug' => 'industrial-engineering']
        ]
    ],
    'graduate-school' => [
        'title' => 'Graduate School',
        'programs' => [
            ['name' => 'Graduate Programs', 'slug' => 'graduate-programs']
        ]
    ],
    'law' => [
        'title' => 'College of Law',
        'programs' => [
            ['name' => 'Juris Doctor', 'slug' => 'juris-doctor']
        ]
    ],
    'liberal-arts-sciences' => [
        'title' => 'College of Liberal Arts and Sciences',
        'programs' => [
            ['name' => 'Political Science', 'slug' => 'political-science'],
            ['name' => 'Communication', 'slug' => 'communication'],
            ['name' => 'Public Administration', 'slug' => 'public-administration'],
            ['name' => 'Special Program in Public Administration', 'slug' => 'public-administration-special'],
            ['name' => 'Computer Science', 'slug' => 'computer-science'],
            ['name' => 'Entertainment and Multimedia Computing', 'slug' => 'entertainment-multimedia-computing'],
            ['name' => 'Information Systems', 'slug' => 'information-systems'],
            ['name' => 'Information Technology', 'slug' => 'information-technology'],
            ['name' => 'Mathematics', 'slug' => 'mathematics'],
            ['name' => 'Psychology', 'slug' => 'psychology']
        ]
    ]
];
function collegeEventsEscape($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
$collegeKey = isset($_GET['college']) ? (string)$_GET['college'] : 'business-accountancy';
if (!isset($collegeMap[$collegeKey])) {
    http_response_code(404);
    $collegeKey = 'business-accountancy';
}
$college = $collegeMap[$collegeKey];
$programs = $college['programs'];
$programSlugs = array_column($programs, 'slug');
$sampleEvents = [
    ['title' => 'UCC - College of Engineering Strengthens Learning Environment with New Drafting Room and Library', 'category' => 'ACADEMIC', 'date' => 'Published 1 day ago', 'image' => 'images/News/NEWS-CollegeofEngineering.jpg', 'program' => 'computer-engineering', 'college' => 'engineering'],
    ['title' => 'Congratulations, August 2026 Criminologists Licensure Examination Passers!', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 1 day ago', 'image' => 'images/News/NEWS-2026Criminologists.jpg', 'program' => 'criminology', 'college' => 'criminal-justice'],
    ['title' => 'University of Caloocan City Surpassed National Passing Rate in the May 2026 CPA Licensure Examination', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 3 mos ago', 'image' => 'images/News/NEWS-CPA.jpg', 'program' => 'accountancy', 'college' => 'business-accountancy'],
    ['title' => 'UCC Recognition Day 2026: Honoring Excellence, Inspiring Purpose', 'category' => 'EVENTS', 'date' => 'Published 4 mos ago', 'image' => 'images/News/NEWS-Recognition20206.jpg', 'program' => 'secondary-education-english', 'college' => 'education'],
    ['title' => 'Celebrating UCC’s Outstanding Criminology Board Achievement!', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 4 mos ago', 'image' => 'images/News/NEWS-CrimBoardAchievement.jpg', 'program' => 'criminology', 'college' => 'criminal-justice'],
    ['title' => 'Champions Rise at the UCC College of Law Debate Council’s Ikalimang Talastasan – Vera Cup 2026', 'category' => 'EVENTS', 'date' => 'Published 6 mos ago', 'image' => 'images/News/NEWS-ChampionsRise.jpg', 'program' => 'juris-doctor', 'college' => 'law'],
    ['title' => 'University of Caloocan City’s Aspiring Engineers Earn National Recognition at AutoMATHic 2026', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 6 mos ago', 'image' => 'images/News/NEWS-AutoMATHic2026.jpg', 'program' => 'industrial-engineering', 'college' => 'engineering'],
    ['title' => 'University of Caloocan City Earns PRC Recognition for Exemplary Performance in the Licensure Examination for Teachers', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 7 mos ago', 'image' => 'images/News/NEWS-LET.jpg', 'program' => 'secondary-education-science', 'college' => 'education'],
    ['title' => 'UCC Strengthens Scholarship Programs Through Partnership with Tzu Chi Foundation', 'category' => 'ACADEMIC', 'date' => 'Published 7 mos ago', 'image' => 'images/News/NEWS-TzuChiPartnership.jpg', 'program' => 'financial-management', 'college' => 'business-accountancy'],
    ['title' => 'UCC - College of Education Strengthens Partnership for Localized Tara, Basa Tutoring Program', 'category' => 'ACADEMIC', 'date' => 'Published 1 yr ago', 'image' => 'images/News/NEWS-news-64.jpg', 'program' => 'early-childhood-education', 'college' => 'education'],
    ['title' => 'UCC Students Shine at the International Youth Fellowship World Camp 2024', 'category' => 'STUDENT LIFE', 'date' => 'Published 1 yr ago', 'image' => 'images/News/NEWS-news-75.png', 'program' => 'communication', 'college' => 'liberal-arts-sciences'],
    ['title' => 'University of Caloocan City - College of Law Testimonial Ceremonies for the 2025 Bar Examination Passers', 'category' => 'EVENTS', 'date' => 'Published 6 mos ago', 'image' => 'images/News/NEWS-Law2025BarPassers.jpg', 'program' => 'juris-doctor', 'college' => 'law'],
    ['title' => 'UCC Advances Toward Excellence: Nine Programs Earn ALCUCOA Candidate Status', 'category' => 'ACADEMIC', 'date' => 'Published 8 mos ago', 'image' => 'images/News/NEWS-UCCAdvancesTowardExcellence.jpg', 'program' => 'computer-science', 'college' => 'liberal-arts-sciences'],
    ['title' => 'UCC Strengthens Public Service Excellence: College of Criminal Justice Education Excels in the NAPOLCOM Examination', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 8 mos ago', 'image' => 'images/News/NEWS-NAPOLCOM.jpg', 'program' => 'industrial-security-management', 'college' => 'criminal-justice'],
    ['title' => 'University of Caloocan City - College of Law Recognized in the Bar Examination', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 8 mos ago', 'image' => 'images/News/NEWS-UCCLawRecognized.jpg', 'program' => 'juris-doctor', 'college' => 'law'],
    ['title' => 'UCC Windbreaker Jackets for the Graduating Class of 2026!', 'category' => 'STUDENT LIFE', 'date' => 'Published 8 mos ago', 'image' => 'images/News/NEWS-Windbreaker.jpg', 'program' => 'tourism-management', 'college' => 'business-accountancy'],
    ['title' => 'University of Caloocan City Celebrates Collective Success', 'category' => 'ACHIEVEMENTS', 'date' => 'Published 7 mos ago', 'image' => 'images/News/NEWS-CollectiveSuccess.jpg', 'program' => 'graduate-programs', 'college' => 'graduate-school'],
    ['title' => 'UCC Heroes United: Building a Legacy of Collective Excellence', 'category' => 'EVENTS', 'date' => 'Published 9 mos ago', 'image' => 'images/News/NEWS-UCCHeroesUnited.jpg', 'program' => 'information-technology', 'college' => 'liberal-arts-sciences'],
    ['title' => 'The Heart of UCC: Amplifying the Voices That Shape Our WISE Community', 'category' => 'EVENTS', 'date' => 'Published 9 mos ago', 'image' => 'images/News/NEWS-TheHeartOfUCC.jpg', 'program' => 'psychology', 'college' => 'liberal-arts-sciences'],
    ['title' => 'Cultivating Culture: UCC Strengthens Its Cultural Vision Through a Landmark Partnership with PETA', 'category' => 'EVENTS', 'date' => 'Published 9 mos ago', 'image' => 'images/News/NEWS-CultivatingCulture.jpg', 'program' => 'hospitality-management', 'college' => 'business-accountancy'],
    ['title' => 'UCC - College of Engineering: New Opportunities for Future Engineers', 'category' => 'ACADEMIC', 'date' => 'Published 2 mos ago', 'image' => 'images/News/NEWS-CollegeofEngineering.jpg', 'program' => 'electrical-engineering', 'college' => 'engineering'],
    ['title' => 'Student Activities and Academic Milestones in UCC', 'category' => 'STUDENT LIFE', 'date' => 'Published 3 mos ago', 'image' => 'images/News/NEWS-Recognition20206.jpg', 'program' => 'marketing-management', 'college' => 'business-accountancy'],
    ['title' => 'Academic Excellence and Innovation at UCC', 'category' => 'ACADEMIC', 'date' => 'Published 5 mos ago', 'image' => 'images/News/NEWS-GordonCollege.jpg', 'program' => 'accounting-information-system', 'college' => 'business-accountancy'],
    ['title' => 'UCC Students Celebrate Achievements and Campus Life', 'category' => 'EVENTS', 'date' => 'Published 6 mos ago', 'image' => 'images/News/NEWS-WomensMonth.jpg', 'program' => 'public-administration', 'college' => 'liberal-arts-sciences']
];
$collegeEvents = array_values(array_filter($sampleEvents, function ($event) use ($collegeKey, $programSlugs) {
    return $event['college'] === $collegeKey && in_array($event['program'], $programSlugs, true);
}));
$eventsJson = json_encode($collegeEvents, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
$programsJson = json_encode($programs, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCC | <?= collegeEventsEscape($college['title']) ?> Events</title>
    <link rel="icon" type="image/png" href="images/UCC2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/utility-bar.css">
    <link rel="stylesheet" href="assets/navbar.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="colleges-events.css">
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

    <main class="news-page college-events-page">
        <div class="news-decor news-decor-top" aria-hidden="true"></div>
        <div class="news-decor news-decor-right" aria-hidden="true"></div>
        <div class="news-decor news-decor-bottom" aria-hidden="true"></div>
        <section class="news-container">
            <div class="news-heading college-events-heading">
                <div>
                    <div class="college-events-eyebrow">
                        <a href="colleges.php?college=<?= rawurlencode($collegeKey) ?>">ACADEMICS</a>
                        <span>/</span>
                        <span><?= collegeEventsEscape(strtoupper($college['title'])) ?></span>
                    </div>
                    <h1>COLLEGE EVENTS</h1>
                    <div class="news-heading-line"><span></span><i></i><span></span></div>
                    <p>Explore academic activities, announcements, achievements, and student events across the programs of <?= collegeEventsEscape($college['title']) ?>.</p>
                </div>
                <a class="college-events-back" href="colleges.php?college=<?= rawurlencode($collegeKey) ?>"><span>←</span> BACK TO COLLEGE</a>
            </div>
            <div class="college-events-context">
                <span class="college-events-context-icon"><i data-lucide="graduation-cap"></i></span>
                <div>
                    <span class="college-events-context-label">COLLEGE / DEPARTMENT</span>
                    <strong><?= collegeEventsEscape($college['title']) ?></strong>
                    <small>Showing sample news and events associated with this college's programs.</small>
                </div>
            </div>
            <div class="news-filters college-program-filters" id="programFilters" role="group" aria-label="Filter events by program">
                <button type="button" class="news-filter active" data-filter="ALL">ALL PROGRAMS</button>
                <?php foreach ($programs as $program): ?>
                    <button type="button" class="news-filter" data-filter="<?= collegeEventsEscape($program['slug']) ?>"><?= collegeEventsEscape(strtoupper($program['name'])) ?></button>
                <?php endforeach; ?>
            </div>
            <section class="news-featured" id="featuredNews" aria-live="polite"></section>
            <div class="news-section-title">
                <div><span id="moreEventsTitle">MORE COLLEGE EVENTS</span><div class="news-mini-line"><i></i><i></i><i></i></div></div>
                <span class="college-events-count" id="eventsCount"></span>
            </div>
            <section class="news-grid-wrapper">
                <button type="button" class="news-slider-arrow news-slider-prev" id="newsPrev" aria-label="Previous events">‹</button>
                <div class="news-grid" id="newsGrid" aria-live="polite"></div>
                <button type="button" class="news-slider-arrow news-slider-next" id="newsNext" aria-label="Next events">›</button>
            </section>
            <div class="news-pagination" id="newsPagination" aria-label="Event pages"></div>
            <button type="button" class="news-view-all" id="viewAllEvents"><span>▤</span> VIEW ALL EVENTS</button>
        </section>
    </main>

    <div class="news-modal college-events-modal" id="newsModal" aria-hidden="true">
        <div class="news-modal-backdrop" data-news-modal-close></div>
        <div class="news-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="newsModalTitle">
            <div class="news-modal-header">
                <div class="news-modal-heading"><span class="news-modal-label" id="newsModalCategory">COLLEGE EVENT</span><h2 id="newsModalTitle">Event Title</h2></div>
                <button type="button" class="news-modal-close" data-news-modal-close aria-label="Close event popup">×</button>
            </div>
            <div class="news-modal-body">
                <figure class="news-modal-image">
                    <a href="#" id="newsModalImageLink" aria-label="View full-size event image"><img id="newsModalImage" src="" alt=""></a>
                </figure>
                <div class="news-modal-meta"><span class="news-modal-category" id="newsModalCategoryBadge">EVENT</span><span class="news-modal-date" id="newsModalDate">Published</span></div>
                <div class="college-events-modal-program" id="newsModalProgram"></div>
                <div class="news-modal-accent"></div>
                <p class="news-modal-placeholder" id="newsModalDescription">Demo article content. Event details can be connected when a real event data source is available.</p>
            </div>
            <div class="news-modal-footer"><?= collegeEventsEscape($college['title']) ?> • College Events</div>
        </div>
    </div>
    
    <div class="news-image-lightbox" id="newsImageLightbox" aria-hidden="true">
        <div class="news-image-lightbox-backdrop" data-news-image-close></div>
        <div class="news-image-lightbox-content">
            <button type="button" class="news-image-lightbox-close" data-news-image-close aria-label="Close full-size image">×</button>
            <img id="newsLightboxImage" src="" alt="">
        </div>
    </div>
    <script type="application/json" id="collegeEventsData"><?= $eventsJson ?: '[]' ?></script>
    <script type="application/json" id="collegeProgramsData"><?= $programsJson ?: '[]' ?></script>
    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="script.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="colleges-events.js" defer></script>
</body>
</html>