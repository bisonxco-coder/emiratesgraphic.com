<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us — INVY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/about.css" />
  </head>
  <body class="about-page">
    <header class="about-hero" id="top">
      <?php
      $navLinks = [
        ['href' => './', 'label' => 'Home'],
        ['href' => './#features', 'label' => 'Features'],
        ['href' => './events.php', 'label' => 'Events'],
        ['href' => './venues.php', 'label' => 'Venues'],
        ['href' => './about.php', 'label' => 'About Us'],
        ['href' => './blog.php', 'label' => 'Blog'],
      ];
      $navSearchPlaceholder = 'Search ...';
      $navCtaHref = './venues.php#for-venues';
      $navCtaLabel = 'List Your Venue';
      $navSecondaryCtaHref = './';
      $navSecondaryCtaLabel = 'Login/Sign Up';
      require __DIR__ . '/includes/nav.php';
      ?>

      <div class="container about-hero__inner">
        <div class="about-hero__copy">
          <h1>Power your nightlife</h1>
          <p>One app for every table, every ticket, every venue worth knowing.</p>
          <a href="#what-we-do">See how it works</a>
        </div>
      </div>
    </header>

    <main>
      <section class="about-story" aria-labelledby="about-story-title">
        <div class="container about-story__grid">
          <article class="about-story__card about-story__card--people">
            <strong>100%</strong>
            <p>Built by people who<br />actually go out</p>
          </article>

          <article class="about-story__card about-story__card--story">
            <h2>Our story</h2>
            <p>We started INVY with a simple idea: going out shouldn't take more effort than the night itself.</p>
          </article>

          <h2 class="about-story__title" id="about-story-title">We're<br />building the<br />night</h2>

          <article class="about-story__card about-story__card--mission">
            <h2>Our mission</h2>
            <p>To make the city's nightlife open, accessible, and effortless — for the people going out and the people running the night.</p>
          </article>

          <div class="about-story__team" role="img" aria-label="The INVY team"></div>

          <article class="about-story__card about-story__card--cities">
            <strong>11 Cities</strong>
            <p>live across the Gulf</p>
          </article>
        </div>
      </section>

      <section class="about-numbers" aria-labelledby="about-numbers-title">
        <div class="container about-numbers__panel">
          <div class="about-numbers__intro">
            <h2 id="about-numbers-title">Numbers that speak<br />for themselves</h2>
            <p>INVY is growing fast — trusted by venues and partygoers across the region's nightlife capitals.</p>
          </div>

          <div class="about-numbers__brand">
            <img src="./img/logo.svg" alt="INVY" />
          </div>

          <article class="about-stat about-stat--members">
            <strong>48K+</strong>
            <p>Active members booking<br />tables and tickets through<br />INVY.</p>
            <div class="about-stat__members" aria-hidden="true"><span></span><span></span><span></span><b>+</b></div>
          </article>

          <article class="about-stat about-stat--revenue">
            <strong>AED 12M+</strong>
            <p>Booked through INVY<br />every quarter.</p>
            <div class="about-stat__bar" aria-hidden="true"></div>
          </article>
        </div>
      </section>

      <section class="about-services" id="what-we-do" aria-labelledby="about-services-title">
        <div class="container about-services__stage">
          <h2 id="about-services-title">What we do</h2>

          <article class="about-service about-service--find">
            <span aria-hidden="true">✧</span>
            <h3>Find the night</h3>
            <p>Browse every event, venue, and DJ set in the city — by date, genre, or vibe.</p>
          </article>

          <article class="about-service about-service--book">
            <span aria-hidden="true">◒</span>
            <h3>Book any spot</h3>
            <p>VVIP, VIP, or standard. Pick your table, add the bottles, lock it in, and secure.</p>
          </article>

          <article class="about-service about-service--crew">
            <span aria-hidden="true">⌁</span>
            <h3>Build your crew</h3>
            <p>Invite friends to bookings, share tickets, earn AED 250 for every referral.</p>
          </article>

          <article class="about-service about-service--venue">
            <span aria-hidden="true">↗</span>
            <h3>Run your venue</h3>
            <p>Sell tickets, manage tables, and reach the city's nightlife crowd — all from one dashboard.</p>
          </article>
        </div>
      </section>

      <section class="about-quote" aria-label="A message from INVY's founder">
        <div class="container about-quote__inner">
          <blockquote>
            “INVY isn't trying to replace nightlife. We're trying to make sure none of it is wasted — no half-empty
            tables, no missed nights, no scrolling Instagram for an hour to figure out where to go.”<br />
            And empowering.”
          </blockquote>
          <div class="about-quote__author">
            <div class="about-quote__portrait" role="img" aria-label="Mathew, founder of INVY"></div>
            <strong>Mathew</strong>
            <span>Founder &amp; CEO, INVY</span>
          </div>
        </div>
      </section>

      <?php require __DIR__ . '/includes/gallery.php'; ?>
      <?php require __DIR__ . '/includes/cta.php'; ?>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <script src="./js/main.js"></script>
  </body>
</html>
