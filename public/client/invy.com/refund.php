<?php
// Static legal page (no backend dependencies yet).
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INVY — Refund &amp; Cancellation Policy</title>

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
        <h1>Refund &amp; Cancellation Policy</h1>
        <p class="legal-hero__sub">This policy outlines how cancellations and refunds are handled.</p>
        <div class="legal-hero__meta">
          <span class="tag tag--ghost">Last updated: <strong>04/05/2026</strong></span>
          <a class="tag tag--ghost" href="#toc">Jump to sections</a>
        </div>
      </div>
    </header>

    <main class="legal">
      <div class="container legal__wrap">
        <aside class="legal__aside" id="toc" aria-label="Refund policy table of contents">
          <div class="legal__card">
            <div class="legal__asideTitle">Contents</div>
            <nav class="legal__toc">
              <a href="#tickets">1. Tickets</a>
              <a href="#tables">2. Table Bookings</a>
              <a href="#method">3. Refund Method</a>
              <a href="#fees">4. Admin Fees</a>
              <a href="#changes">5. Event Changes</a>
              <a href="#disputes">6. Disputes</a>
              <a href="#contact">7. Contact</a>
            </nav>
          </div>
        </aside>

        <article class="legal__content" aria-label="Refund policy content">
          <section class="legal__section" id="tickets">
            <h2>1. Tickets</h2>
            <ul>
              <li><strong>Full refund</strong> if canceled <strong>24+ hours</strong> before event</li>
              <li><strong>No refund</strong> if canceled <strong>less than 24 hours</strong> before event</li>
              <li><strong>No-shows</strong> are non-refundable</li>
            </ul>
          </section>

          <section class="legal__section" id="tables">
            <h2>2. Table Bookings</h2>
            <ul>
              <li>Deposits are required to confirm reservations</li>
              <li>Deposit is deducted from final venue bill</li>
              <li>
                Cancellation rules:
                <ul>
                  <li><strong>24+ hours</strong>: Full refund (issued as platform credits)</li>
                  <li><strong>&lt;24 hours</strong>: No refund</li>
                </ul>
              </li>
              <li>Tables may be released if guests do not arrive within the <strong>grace period (30–60 mins)</strong></li>
            </ul>
          </section>

          <section class="legal__section" id="method">
            <h2>3. Refund Method</h2>
            <ul>
              <li>Refunds are issued as <strong>wallet credits</strong> unless otherwise specified</li>
              <li>Wallet credits are non-withdrawable and usable within the platform only</li>
            </ul>
          </section>

          <section class="legal__section" id="fees">
            <h2>4. Admin Fees (Optional – can be adjusted)</h2>
            <ul>
              <li>A cancellation fee (e.g., <strong>10%</strong>) may apply depending on the case</li>
            </ul>
          </section>

          <section class="legal__section" id="changes">
            <h2>5. Event Changes</h2>
            <p>If an event is:</p>
            <ul>
              <li><strong>Canceled</strong>: Full refund issued</li>
              <li><strong>Rescheduled</strong>: Users may choose to attend or request a refund</li>
            </ul>
          </section>

          <section class="legal__section" id="disputes">
            <h2>6. Disputes</h2>
            <p>All refund decisions are subject to:</p>
            <ul>
              <li>Venue policy</li>
              <li>Platform review</li>
            </ul>
          </section>

          <section class="legal__section" id="contact">
            <h2>7. Contact</h2>
            <p>For questions about this policy, contact us at <a href="mailto:info@invyapp.ae">info@invyapp.ae</a>.</p>
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

