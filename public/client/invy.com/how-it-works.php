<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>How INVY Works — INVY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/how-it-works.css" />
  </head>
  <body class="how-page">
    <header class="how-hero" id="top">
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

      <div class="container how-hero__heading">
        <h1>How INVY<br />works</h1>
        <p>From discovering the night to getting through the door — here's how INVY works.</p>
      </div>

      <div class="how-hero__rail" aria-label="The INVY experience">
        <div class="how-hero__photo how-hero__photo--edge-left">
          <img src="./img/gallery-2.png" alt="" />
        </div>
        <div class="how-hero__photo">
          <img src="./img/events-bg.png" alt="A crowded nightclub dancefloor" />
        </div>
        <div class="how-hero__photo how-hero__photo--wide">
          <img src="./img/event-2.png" alt="Nightclub lights over a crowd" />
        </div>
        <div class="how-hero__photo how-hero__photo--edge-right">
          <img src="./img/gallery-3.png" alt="" />
        </div>
      </div>
    </header>

    <main>
      <section class="how-steps" aria-labelledby="how-steps-title">
        <div class="container">
          <h2 id="how-steps-title">Every part of the<br />night, handled.</h2>

          <div class="how-steps__grid">
            <article class="how-step">
              <span class="how-step__icon" aria-hidden="true">☷</span>
              <div>
                <h3>Discover</h3>
                <p>Browse venues, events and DJ sets by date, genre or vibe. Find the night that fits you.</p>
              </div>
            </article>

            <article class="how-step">
              <span class="how-step__icon" aria-hidden="true">⌑</span>
              <div>
                <h3>Book</h3>
                <p>Choose your ticket or table, complete your booking, and get your confirmation in seconds.</p>
              </div>
            </article>

            <article class="how-step">
              <span class="how-step__icon" aria-hidden="true">⊞</span>
              <div>
                <h3>Keep it together</h3>
                <p>Your tickets, reservations and upcoming nights — all in one place.</p>
              </div>
            </article>

            <article class="how-step">
              <span class="how-step__icon" aria-hidden="true">✧</span>
              <div>
                <h3>Enjoy</h3>
                <p>Have your booking or ticket ready when you arrive, then focus on the night — not the logistics.</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <?php require __DIR__ . '/includes/gallery.php'; ?>
      <?php
      $ctaTitle = 'Your next night out starts here.';
      $ctaText = 'Discover venues and events, book tickets or tables, and keep your night together in one app.';
      $ctaSecondaryLabel = 'List Your Venue';
      require __DIR__ . '/includes/cta.php';
      ?>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <script src="./js/main.js"></script>
  </body>
</html>
