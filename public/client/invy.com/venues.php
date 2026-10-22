<?php
require_once __DIR__ . '/includes/site-config.php';

$venues = [
  ['name' => 'Electric Eclipse Nightclub', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-1.jpg', 'logo' => './img/venue-logo-1.png'],
  ['name' => 'Neon Oasis Lounge', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-2.jpg', 'logo' => './img/venue-logo-2.png'],
  ['name' => 'Bassline Beats Club', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-3.jpg', 'logo' => './img/venue-logo-3.png'],
  ['name' => 'Celestial Vibes Bar', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-4.jpg', 'logo' => './img/venue-logo-4.png'],
  ['name' => 'Lunar Lounge', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-5.jpg', 'logo' => './img/venue-logo-5.png'],
  ['name' => 'Starlight Rave Hub', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-6.jpg', 'logo' => './img/venue-logo-1.png'],
  ['name' => 'Moonlit Groove Club', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-7.jpg', 'logo' => './img/venue-logo-1.png'],
  ['name' => 'Radiant Nights Venue', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-8.jpg', 'logo' => './img/venue-logo-1.png'],
  ['name' => 'Neon Dreamscape Club', 'location' => 'Dubai, UAE', 'image' => './img/venue-grid-9.jpg', 'logo' => './img/venue-logo-1.png'],
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Venues — INVY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/venues.css" />
  </head>
  <body class="venues-page">
    <header class="venues-hero" id="top">
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
      $navCtaHref = '#for-venues';
      $navCtaLabel = 'List Your Venue';
      $navSecondaryCtaHref = './';
      $navSecondaryCtaLabel = 'Login/Sign Up';
      require __DIR__ . '/includes/nav.php';
      ?>

      <div class="container venues-hero__inner">
        <div class="venues-hero__copy">
          <h1>Every venue worth knowing.</h1>
          <p>Clubs, rooftops, lounges, and after-hours — every room the city's nightlife flows through.</p>
          <div class="venues-hero__stores" aria-label="Download INVY">
            <a href="<?php echo htmlspecialchars(invy_store_href($invyAppStoreUrl)); ?>" aria-label="Download on the App Store"><img src="./img/Component 2.png" alt="" /></a>
            <a href="<?php echo htmlspecialchars(invy_store_href($invyPlayStoreUrl)); ?>" aria-label="Get it on Google Play"><img src="./img/Component 3.png" alt="" /></a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="venues-directory" aria-labelledby="venues-title">
        <div class="container">
          <div class="venues-directory__header">
            <h2 id="venues-title">Venues</h2>
            <div class="venues-directory__filters" aria-label="Venue filters">
              <label>
                <span class="sr-only">Location</span>
                <select id="venuesPageLocation">
                  <?php require_once __DIR__ . '/includes/locations.php'; invy_location_options(); ?>
                </select>
              </label>
              <label>
                <span class="sr-only">Month</span>
                <input type="month" value="2026-09" />
              </label>
            </div>
          </div>

          <p class="filter-empty" id="venuesPageEmpty" hidden>
            Nothing happening here yet — check back soon.
          </p>

          <div class="venues-directory__grid">
            <?php foreach ($venues as $venue) { ?>
              <a class="venue-card" href="./venue.php" aria-label="View <?php echo htmlspecialchars($venue['name']); ?>">
                <img class="venue-card__image" src="<?php echo htmlspecialchars($venue['image']); ?>" alt="<?php echo htmlspecialchars($venue['name']); ?>" />
                <div class="venue-card__glass">
                  <img src="<?php echo htmlspecialchars($venue['logo']); ?>" alt="" />
                  <div class="venue-card__copy">
                    <h3><?php echo htmlspecialchars($venue['name']); ?></h3>
                    <p><?php echo htmlspecialchars($venue['location']); ?></p>
                  </div>
                </div>
              </a>
            <?php } ?>
          </div>
        </div>
      </section>

      <section class="venue-partner" id="for-venues">
        <div class="container venue-partner__inner">
          <div class="venue-partner__copy">
            <span class="venue-partner__tag">For Venues</span>
            <h2>Your venue deserves the right crowd.</h2>
            <p class="venue-partner__intro">
              Sell tickets, manage reservations, fill tables, and reach the nightlife crowd already on INVY.
            </p>

            <div class="venue-partner__accordion" data-accordion>
              <details open>
                <summary>Sell tickets with zero setup</summary>
                <p>
                  List your event, set the tiers, and go live the same day. INVY handles ticketing, QR entry, refunds,
                  and guest communications — you keep the revenue and the data.
                </p>
              </details>
              <details>
                <summary>Fill tables, night after night</summary>
                <p>Manage table availability, tiers, minimum spend, and add-ons from one simple dashboard.</p>
              </details>
              <details>
                <summary>Reach the right audience at the right time</summary>
                <p>Promote each night to guests already searching for the right venue, genre, and experience.</p>
              </details>
              <details>
                <summary>One dashboard for the whole night</summary>
                <p>Track bookings, ticket sales, guest lists, revenue, and venue performance in real time.</p>
              </details>
            </div>

            <a class="venue-partner__cta" href="#">List Your Venue</a>
          </div>

          <div class="venue-partner__visual">
            <img src="./img/venue-dashboard.png" alt="INVY venue management dashboard" />
          </div>
        </div>
      </section>
    </main>

    <?php
    require __DIR__ . '/includes/cta.php';

    require __DIR__ . '/includes/footer.php';
    ?>

    <script src="./js/main.js"></script>
  </body>
</html>
