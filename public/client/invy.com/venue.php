<?php
$venue = [
  'name' => 'Bassline Beats Club',
  'location' => 'Dubai, UAE',
  'description' => "Underground sound. Industrial scale. One of the region's defining nightclubs.",
  'logo' => './img/venue-detail-logo.png',
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($venue['name']); ?> — INVY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/venue-detail.css" />
  </head>
  <body class="venue-detail-page">
    <header class="venue-detail-hero" id="top">
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

      <div class="container venue-detail-hero__inner">
        <div class="venue-detail-hero__copy">
          <h1><?php echo htmlspecialchars($venue['name']); ?></h1>
          <p><?php echo htmlspecialchars($venue['description']); ?></p>
          <a href="#download">Book a Table</a>
        </div>
      </div>
    </header>

    <main class="venue-detail">
      <div class="container venue-detail__layout">
        <aside class="venue-detail__sidebar">
          <div class="venue-detail__identity">
            <img src="<?php echo htmlspecialchars($venue['logo']); ?>" alt="" />
            <div>
              <strong><?php echo htmlspecialchars($venue['name']); ?></strong>
              <span><?php echo htmlspecialchars($venue['location']); ?></span>
            </div>
          </div>

          <div class="venue-detail__share">
            <span>Share:</span>
            <div>
              <a href="#" aria-label="Share on LinkedIn"><img src="./img/event-linkedin.svg" alt="" /></a>
              <a href="#" aria-label="Share on YouTube"><img src="./img/event-youtube.svg" alt="" /></a>
              <a href="#" aria-label="Share on Facebook"><img src="./img/event-facebook.svg" alt="" /></a>
            </div>
          </div>
        </aside>

        <article class="venue-detail__content">
          <section>
            <h2>About the Venue</h2>
            <div class="venue-detail__text">
              <h3>The space</h3>
              <p>
                Base Dubai sits inside a converted warehouse in the heart of Dubai Design District — 1,200 capacity
                across one main floor, two bars, and an outdoor terrace that opens after midnight. The room was built
                for sound first: a custom Funktion-One system designed by the venue's resident engineers, a 360° LED
                installation that wraps the dancefloor, and a central DJ booth positioned so the room moves around it
                instead of facing it.
              </p>
              <h3>The scene</h3>
              <p>
                Since opening in 2018, Base has hosted some of the most defining nights in Gulf nightlife. The booking
                policy is deliberately narrow — house, techno, and electronic crossovers — which has built a crowd
                that knows exactly what they're walking into. Solomun, Black Coffee, Peggy Gou, CamelPhat, Adam Beyer,
                and Honey Dijon have all played here. Local residents anchor the off-weeks.
              </p>
              <h3>What makes it different</h3>
              <p>
                Most clubs in Dubai program for tourists. Base programs for the room. The crowd skews 25–40, mostly
                regulars, mostly there for the music. Tables are available, but the dancefloor is where the night
                actually happens — and the venue's layout makes that clear from the moment you walk in.
              </p>
            </div>
          </section>

          <section>
            <h2>Tables &amp; Pricing</h2>
            <div class="venue-detail__text">
              <p>Base Dubai runs three table tiers. Minimum spends apply per night and scale up for headline events.</p>
              <p><strong>Standard table</strong> — from AED 1,500<br />Up to 4 guests · Standard bar access · General floor placement</p>
              <p><strong>VIP table</strong> — from AED 3,000<br />Up to 6 guests · Priority entry · Dedicated server · Premium bar selection · Raised platform near the dancefloor</p>
              <p><strong>VVIP table</strong> — from AED 6,000<br />Up to 10 guests · Express door entry · Personal host · Full premium menu · Booth-side placement with direct dancefloor access</p>
              <p><strong>Add-ons:</strong> Bottle bundles, birthday packages, premium mixers, and shisha service can be configured at checkout via the INVY app.</p>
              <p>Full timetable announced one week before the event. Subscribe to updates in the INVY app.</p>
            </div>
          </section>

          <section>
            <h2>Good to Know</h2>
            <ul>
              <li>Age 21+ with valid government ID</li>
              <li>Dress code: smart casual · no shorts, sportswear, or open-toe footwear for men</li>
              <li>Re-entry: not permitted</li>
              <li>Coat check available · AED 30 per item</li>
              <li>Card payments only · no cash</li>
              <li>Photography: phones allowed on the floor · no flash near the booth</li>
            </ul>
          </section>

          <section>
            <h2>Gallery</h2>
            <div class="venue-detail__gallery">
              <?php for ($i = 1; $i <= 9; $i++) { ?>
                <button type="button" aria-label="Open gallery image <?php echo $i; ?>">
                  <img src="./img/venue-gallery-<?php echo $i; ?>.png" alt="" />
                </button>
              <?php } ?>
            </div>
          </section>
        </article>
      </div>
    </main>

    <?php
    require __DIR__ . '/includes/cta.php';
    require __DIR__ . '/includes/footer.php';
    ?>
    <script src="./js/main.js"></script>
  </body>
</html>
