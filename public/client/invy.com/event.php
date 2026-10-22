<?php
// Static event detail template. It can be connected to dynamic event data later.
$event = [
  'title' => 'Lunar Glow',
  'date' => '12 September, 2026',
  'venue' => 'Base Dubai',
  'genre' => 'House',
  'price' => 'AED 280,00',
  'venue_logo' => './img/venue-white.png',
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($event['title']); ?> — INVY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/events.css" />
    <link rel="stylesheet" href="./css/event-detail.css" />
  </head>
  <body class="event-detail-page">
    <header class="event-detail-hero" id="top">
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
      $navSecondaryCtaHref = '#';
      $navSecondaryCtaLabel = 'Login/Sign Up';
      require __DIR__ . '/includes/nav.php';
      ?>

      <div class="container event-detail-hero__inner">
        <div class="event-detail-hero__summary">
          <div class="event-detail-hero__copy">
            <p class="event-detail-hero__meta">
              <?php echo htmlspecialchars($event['date']); ?> <span>|</span> @<?php echo htmlspecialchars($event['venue']); ?>
            </p>
            <h1><?php echo htmlspecialchars($event['title']); ?></h1>
            <span class="event-detail-hero__genre"><?php echo htmlspecialchars($event['genre']); ?></span>
          </div>

          <aside class="event-booking-card" aria-label="Event booking">
            <div class="event-booking-card__price">
              <span>Buy Tickets at</span>
              <strong><?php echo htmlspecialchars($event['price']); ?></strong>
            </div>
            <a href="#download">Book Table</a>
          </aside>
        </div>
      </div>
    </header>

    <main class="event-detail">
      <div class="container event-detail__layout">
        <aside class="event-detail__sidebar">
          <div class="event-detail__venue">
            <img src="<?php echo htmlspecialchars($event['venue_logo']); ?>" alt="" />
            <strong><?php echo htmlspecialchars($event['venue']); ?></strong>
          </div>
          <div class="event-detail__share">
            <span>Share:</span>
            <div class="event-detail__socials">
              <a href="#" aria-label="Share on LinkedIn"><img src="./img/event-linkedin.svg" alt="" /></a>
              <a href="#" aria-label="Share on YouTube"><img src="./img/event-youtube.svg" alt="" /></a>
              <a href="#" aria-label="Share on Facebook"><img src="./img/event-facebook.svg" alt="" /></a>
            </div>
          </div>
        </aside>

        <article class="event-detail__content">
          <section>
            <h2>Event Description</h2>
            <p>
              LUNAR GLOW lands at Base Dubai for one night only — a full takeover blending UV-reactive visuals,
              immersive lighting, and a lineup curated around deep house and melodic techno. Expect a packed
              dancefloor from open to close, with the venue's 360° LED system pushed to its limits.
            </p>
            <p>
              This isn't a residency or a weekly party. LUNAR GLOW only runs four times a year, each edition with a
              different visual concept and a different headline act. The October edition leans cosmic — chrome
              staging, lasers, and a custom-built mirrored DJ booth at the center of the room.
            </p>
          </section>

          <section>
            <h2>Lineup</h2>
            <p>
              Headline: [DJ Name] — closing set, 1:30 AM<br />
              Support: [DJ Name] — 11:30 PM<br />
              Opener: [DJ Name] — 10:00 PM
            </p>
            <p>Full timetable announced one week before the event. Subscribe to updates in the INVY app.</p>
          </section>

          <section>
            <h2>What to Expect</h2>
            <p>
              Doors open at 10:00 PM, music until 4:00 AM. The venue runs at full capacity for LUNAR GLOW, so tables
              sell out early and standard tickets often go before the door. Expect immersive UV-reactive installations
              across the dancefloor, a custom-built mirrored DJ booth at room center, and the venue's full LED rig
              synced to every set.
            </p>
          </section>

          <section>
            <h2>Tables &amp; Tickets</h2>
            <ul>
              <li>Standard entry — AED 280</li>
              <li>VIP table (up to 6) — minimum spend AED 3,000</li>
              <li>VVIP table (up to 10) — minimum spend AED 6,000</li>
            </ul>
            <p>
              Bottle bundles, birthday packages, and group add-ons can be configured at checkout. Tables include
              guaranteed entry, dedicated server, and access to the VVIP section near the booth.
            </p>
          </section>

          <section>
            <h2>Dress Code</h2>
            <p>
              Smart casual. No shorts, sportswear, or open-toe footwear for men. The door operates a discretion policy
              at full capacity.
            </p>
          </section>
        </article>
      </div>
    </main>

    <?php
    require __DIR__ . '/includes/cta.php';

    $footerLinkPrefix = './';
    require __DIR__ . '/includes/footer.php';
    ?>
    <script src="./js/main.js"></script>
  </body>
</html>
