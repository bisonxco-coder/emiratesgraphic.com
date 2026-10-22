<?php
$events = [
  [
    'title' => 'Full Moon Neon Rave',
    'handle' => '@SohoGarden',
    'genre' => 'Techno',
    'venue' => 'Soho Garden, Dubai',
    'date' => 'Sep 12, 2026 - 8PM',
    'image' => './img/event-1.png',
    'logo' => './img/venue-soho.png',
  ],
  [
    'title' => 'Full Moon Neon Rave',
    'handle' => '@CavalliClub',
    'genre' => 'House',
    'venue' => 'Cavalli Club, Dubai',
    'date' => 'Sep 12, 2026 - 8PM',
    'image' => './img/event-3.png',
    'logo' => './img/venue-cavalli.png',
  ],
  [
    'title' => 'Secure Beats Thursdays',
    'handle' => '@PulseDubai',
    'genre' => 'Hip Hop',
    'venue' => 'PulseDubai',
    'date' => 'Sep 12, 2026 - 8PM',
    'image' => './img/event-2.png',
    'logo' => './img/venue-white.png',
  ],
  [
    'title' => 'Lunar Glow',
    'handle' => '@WhiteClub',
    'genre' => 'House',
    'venue' => 'White Club, Dubai',
    'date' => 'Sep 12, 2026 - 8PM',
    'image' => './img/event-3.png',
    'logo' => './img/venue-white.png',
  ],
  [
    'title' => 'Lunar Glow',
    'handle' => '@Blase',
    'genre' => 'House',
    'venue' => 'Blase Dubai',
    'date' => 'Sep 12, 2026 - 8PM',
    'image' => './img/event-2.png',
    'logo' => './img/venue-cavalli.png',
  ],
  [
    'title' => 'Full Moon Neon Rave',
    'handle' => '@SohoGarden',
    'genre' => 'Techno',
    'venue' => 'Soho Garden, Dubai',
    'date' => 'Sep 12, 2026 - 8PM',
    'image' => './img/event-1.png',
    'logo' => './img/venue-soho.png',
  ],
];
require_once __DIR__ . '/includes/site-config.php';

function render_event_card($event) {
  ?>
  <article class="event-card">
    <a class="event-card__media" href="./event.php" aria-label="View <?php echo htmlspecialchars($event['title']); ?>">
      <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>" />
    </a>
    <div class="event-card__top">
      <div class="event-card__topLogo">
        <img class="event-card__logo" src="<?php echo htmlspecialchars($event['logo']); ?>" alt="" />
      </div>
      <div class="event-card__topText">
        <div class="event-card__topTitle"><?php echo htmlspecialchars($event['title']); ?></div>
        <a href="./event.php" class="event-card__topSub"><?php echo htmlspecialchars($event['handle']); ?></a>
      </div>
      <div class="event-card__topTag"><?php echo htmlspecialchars($event['genre']); ?></div>
    </div>
    <div class="event-card__details">
      <div class="event-card__detailRow">
        <div class="event-card__detailLeft">
          <div class="event-card__metaRow">
            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
              <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
            </svg>
            <span><?php echo htmlspecialchars($event['venue']); ?></span>
          </div>
          <div class="event-card__metaRow">
            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
              <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
            </svg>
            <span><?php echo htmlspecialchars($event['date']); ?></span>
          </div>
        </div>
        <a class="event-card__cta" href="#download">Book Table</a>
      </div>
      <div class="event-card__priceRow">
        <span class="event-card__priceLabel">Buy Tickets at</span>
        <strong class="event-card__priceValue">AED 280,00</strong>
      </div>
    </div>
  </article>
  <?php
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Events — INVY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/events.css" />
  </head>
  <body class="event-list-page">
    <header class="events-hero" id="top">
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

      <div class="container events-hero__inner">
        <div class="events-hero__copy">
          <h1>Tonight's the night.</h1>
          <p>Every event, every venue, every city — filter your way to the dancefloor.</p>
          <div class="events-hero__stores" aria-label="Download INVY">
            <a href="<?php echo htmlspecialchars(invy_store_href($invyAppStoreUrl)); ?>" aria-label="Download on the App Store"><img src="./img/Component 2.png" alt="" /></a>
            <a href="<?php echo htmlspecialchars(invy_store_href($invyPlayStoreUrl)); ?>" aria-label="Get it on Google Play"><img src="./img/Component 3.png" alt="" /></a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="events-grid-section" aria-labelledby="events-title">
        <div class="container">
          <div class="events-grid-section__header">
            <h2 id="events-title">Events</h2>
            <div class="events-grid-section__filters" aria-label="Event filters">
              <label class="events-filter events-filter--select">
                <span class="sr-only">Location</span>
                <select id="eventsPageLocation">
                  <?php require_once __DIR__ . '/includes/locations.php'; invy_location_options(); ?>
                </select>
              </label>
              <label class="events-filter events-filter--date">
                <span class="sr-only">Month</span>
                <input type="month" value="2026-09" />
              </label>
            </div>
          </div>

          <p class="filter-empty" id="eventsPageEmpty" hidden>
            Nothing happening here yet — check back soon.
          </p>

          <div class="events-grid">
            <?php foreach ($events as $event) render_event_card($event); ?>
          </div>
        </div>
      </section>

      <?php
      require __DIR__ . '/includes/cta.php';
      ?>
    </main>

    <?php
    $footerLinkPrefix = './';
    require __DIR__ . '/includes/footer.php';
    ?>
    <script src="./js/main.js"></script>
  </body>
</html>
