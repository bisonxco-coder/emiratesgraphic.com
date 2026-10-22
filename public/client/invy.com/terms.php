<?php
// Static legal page (no backend dependencies yet).
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INVY — Terms &amp; Conditions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/vendor/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
  </head>
  <body>
    <header class="legal-hero" id="top">
      <?php
      $navLinks = [
        ['href' => './', 'label' => 'Home'],
        ['href' => './#features', 'label' => 'Features'],
        ['href' => './events.php', 'label' => 'Events'],
        ['href' => './venues.php', 'label' => 'Venues'],
        ['href' => './about.php', 'label' => 'About Us'],
      ];
      $navCtaHref = './';
      $navCtaLabel = 'Back to Home';
      require __DIR__ . '/includes/nav.php';
      ?>

      <div class="container legal-hero__inner">
        <div class="legal-hero__kicker">Legal</div>
        <h1>Terms &amp; Conditions</h1>
        <p class="legal-hero__sub">
          These Terms &amp; Conditions (“Terms”) govern your use of the INVY mobile application (“App”), operated by Invy
          FZC (“we”, “our”, or “us”). By using the App, you agree to these Terms.
        </p>
        <div class="legal-hero__meta">
          <span class="tag tag--ghost">Last updated: <strong>04/05/2026</strong></span>
          <a class="tag tag--ghost" href="#toc">Jump to sections</a>
        </div>
      </div>
    </header>

    <main class="legal">
      <div class="container legal__wrap">
        <aside class="legal__aside" id="toc" aria-label="Terms table of contents">
          <div class="legal__card">
            <div class="legal__asideTitle">Contents</div>
            <nav class="legal__toc">
              <a href="#use">1. Use of the App</a>
              <a href="#bookings">2. Bookings &amp; Purchases</a>
              <a href="#payments">3. Payments</a>
              <a href="#refunds">4. Refund &amp; Cancellation Policy</a>
              <a href="#wallet">5. Wallet &amp; Credits</a>
            </nav>
          </div>
        </aside>

        <article class="legal__content" aria-label="Terms content">
          <section class="legal__section" id="use">
            <h2>1. Use of the App</h2>
            <ul>
              <li>You must be at least <strong>18 years old</strong> to use the App.</li>
              <li>You agree to provide accurate and complete information when creating an account.</li>
              <li>You are responsible for maintaining the confidentiality of your account.</li>
            </ul>
          </section>

          <section class="legal__section" id="bookings">
            <h2>2. Bookings &amp; Purchases</h2>

            <h3>a. Tickets</h3>
            <ul>
              <li>Tickets purchased through the App grant access to specific events.</li>
              <li>Each ticket may include a QR code used for entry.</li>
              <li>Tickets are non-transferable unless explicitly allowed.</li>
            </ul>

            <h3>b. Table Bookings</h3>
            <ul>
              <li>Table reservations may require a <strong>deposit payment</strong>.</li>
              <li>The deposit is deducted from your final bill at the venue.</li>
              <li>Final spend is handled directly with the venue.</li>
            </ul>
          </section>

          <section class="legal__section" id="payments">
            <h2>3. Payments</h2>
            <ul>
              <li>Payments are processed via secure third-party providers.</li>
              <li>By making a payment, you authorize us to charge the selected payment method.</li>
              <li>All prices are displayed in <strong>AED</strong> and may include applicable taxes.</li>
            </ul>
          </section>

          <section class="legal__section" id="refunds">
            <h2>4. Refund &amp; Cancellation Policy</h2>
            <ul>
              <li>Full refund if cancellation is made at least <strong>24 hours</strong> before the event.</li>
              <li><strong>No refund</strong> for cancellations made less than 24 hours before the event.</li>
              <li>No-shows will result in forfeiture of the deposit or ticket amount.</li>
              <li>
                Approved refunds will be issued as <strong>platform credits (wallet)</strong> unless stated otherwise.
              </li>
            </ul>
          </section>

          <section class="legal__section" id="wallet">
            <h2>5. Wallet &amp; Credits</h2>
            <ul>
              <li>Wallet credits may be earned through referrals, promotions, or refunds.</li>
              <li>Credits are <strong>non-withdrawable</strong> and can only be used within the App.</li>
              <li>Promotional credits may have an <strong>expiry period</strong>.</li>
            </ul>
            <div class="legal__back">
              <a class="btn btn--pill" href="#top">Back to top</a>
            </div>
          </section>
        </article>
      </div>
    </main>

    <?php
    $footerLinkPrefix = './index.php';
    require __DIR__ . '/includes/footer.php';
    ?>

    <script src="./js/main.js"></script>
  </body>
</html>

