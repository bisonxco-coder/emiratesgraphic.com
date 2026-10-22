<?php
// Static legal page (no backend dependencies yet).
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INVY — Account Deletion &amp; Data Policy</title>

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
        <h1>Account Deletion &amp; Data Policy</h1>
        <p class="legal-hero__sub">This policy explains how users can delete their accounts and how their data is handled.</p>
        <div class="legal-hero__meta">
          <span class="tag tag--ghost">Last updated: <strong>04/05/2026</strong></span>
          <a class="tag tag--ghost" href="#toc">Jump to sections</a>
        </div>
      </div>
    </header>

    <main class="legal">
      <div class="container legal__wrap">
        <aside class="legal__aside" id="toc" aria-label="Account deletion policy table of contents">
          <div class="legal__card">
            <div class="legal__asideTitle">Contents</div>
            <nav class="legal__toc">
              <a href="#how">1. How to Delete Your Account</a>
              <a href="#after">2. What Happens After Deletion</a>
              <a href="#retention">3. Data Retention Exceptions</a>
              <a href="#time">4. Processing Time</a>
              <a href="#re-reg">5. Re-Registration</a>
              <a href="#contact">6. Contact</a>
            </nav>
          </div>
        </aside>

        <article class="legal__content" aria-label="Account deletion policy content">
          <section class="legal__section" id="how">
            <h2>1. How to Delete Your Account</h2>
            <p>You can request account deletion by:</p>
            <ul>
              <li>Using the in-app deletion feature (if available), or</li>
              <li>Contacting us at: <a href="mailto:info@invyapp.ae">info@invyapp.ae</a></li>
            </ul>
          </section>

          <section class="legal__section" id="after">
            <h2>2. What Happens After Deletion</h2>
            <p>Once your request is processed:</p>
            <ul>
              <li>Your account will be permanently deleted</li>
              <li>Personal data will be removed or anonymized</li>
              <li>
                You will lose access to:
                <ul>
                  <li>Bookings</li>
                  <li>Wallet credits</li>
                  <li>History</li>
                </ul>
              </li>
            </ul>
          </section>

          <section class="legal__section" id="retention">
            <h2>3. Data Retention Exceptions</h2>
            <p>We may retain certain data for:</p>
            <ul>
              <li>Legal obligations</li>
              <li>Financial records (transactions, payments)</li>
              <li>Fraud prevention</li>
            </ul>
          </section>

          <section class="legal__section" id="time">
            <h2>4. Processing Time</h2>
            <ul>
              <li>Account deletion requests are processed within <strong>7–14 business days</strong></li>
            </ul>
          </section>

          <section class="legal__section" id="re-reg">
            <h2>5. Re-Registration</h2>
            <ul>
              <li>You may create a new account, but previous data will not be restored.</li>
            </ul>
          </section>

          <section class="legal__section" id="contact">
            <h2>6. Contact</h2>
            <p>For deletion requests or questions: <a href="mailto:info@invyapp.ae">info@invyapp.ae</a></p>
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

