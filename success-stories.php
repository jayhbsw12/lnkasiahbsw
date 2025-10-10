<?php include("header-top.php"); ?>
<?php $currentPage = 'success-stories';   // set to 'index', 'about', 'services', 'contact' per page ?>
<title>LNK Asia</title>
<meta name="description" content="">
<?php include("header.php"); ?>

<body>
    <section class="hero-banner">
        <div class="hero-contact">
            <div class="square-box">
                <img src="assets/images/square.svg">
                <h4>Success Stories</h4>
            </div>
            <h1><span class="heading-gradient">Success Stories</span>
            </h1>
        </div>
        <img src="assets/images/hero-bottom.svg" class="hero-bottom-shape">
    </section>

    <svg width="0" height="0">
        <linearGradient id="grad" x1="0" x2="1" y1="0" y2="0">
            <stop offset="0" />
            <stop offset="1" />
        </linearGradient>
        <symbol id="border" overflow="visible">
            <rect width="100%" height="100%" rx="20px" ry="20px" />
        </symbol>
    </svg>
    <section class="archive-section">


        <div class="archive-holder module">

            <svg class="module-border-2">
                <use href="#border" />
            </svg>
            <img src="assets/images/story-card-shape.svg" alt="" class="story-shape">
            <div class="left-archive-holder">
                <div class="left-archive-upper-holder">
                    <span class="subtitle-normal">Subtitle</span>
                    <h2 class="heading-gradient">Infrastructure Migration to Cloud & RIMS</h2>
                </div>
                <div class="left-archive-lower-holder">
                    <span>The customer has a presence in Europe and wanted to migrate their physical infrastructure to
                        the cloud with the development and testing automation of the ERP.</span>
                    <button class="cta-btn">
                        <span class="cta-text">Read More</span>
                    </button>
                </div>
            </div>
            <div class="right-archive-holder">
                <img src="assets/images/stories/story1.png" alt="" style="border-radius: 0px 27px 27px 0px;">
            </div>
        </div>
        <div class="archive-holder module">
            <svg class="module-border-2">
                <use href="#border" />
            </svg>
            <img src="assets/images/story-card-shape.svg" alt="" class="story-shape">
            <div class="left-archive-holder">
                <div class="left-archive-upper-holder">
                    <span class="subtitle-normal">Subtitle</span>
                    <h2 class="heading-gradient">Infrastructure Migration to Cloud & RIMS</h2>
                </div>
                <div class="left-archive-lower-holder">
                    <span>The customer has a presence in Europe and wanted to migrate their physical infrastructure to
                        the cloud with the development and testing automation of the ERP.</span>
                    <button class="cta-btn">
                        <span class="cta-text">Read More</span>
                    </button>
                </div>
            </div>
            <div class="right-archive-holder">
                <img src="assets/images/stories/story2.png" alt="" style="border-radius: 0px 27px 27px 0px;">
            </div>
        </div>
        <div class="archive-holder module">
            <svg class="module-border-2">
                <use href="#border" />
            </svg>
            <img src="assets/images/story-card-shape.svg" alt="" class="story-shape">

            <div class="left-archive-holder">
                <div class="left-archive-upper-holder">
                    <span class="subtitle-normal">Subtitle</span>
                    <h2 class="heading-gradient">Infrastructure Migration to Cloud & RIMS</h2>
                </div>
                <div class="left-archive-lower-holder">
                    <span>The customer has a presence in Europe and wanted to migrate their physical infrastructure to
                        the cloud with the development and testing automation of the ERP.</span>
                    <button class="cta-btn">
                        <span class="cta-text">Read More</span>
                    </button>
                </div>
            </div>
            <div class="right-archive-holder">
                <img src="assets/images/stories/story3.png" alt="" style="border-radius: 0px 27px 27px 0px;">
            </div>
        </div>
    </section>
</body>

<?php include("footer.php"); ?>