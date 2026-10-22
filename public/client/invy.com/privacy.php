<?php
// Static legal template page (no backend dependencies yet).
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INVY — Privacy Policy</title>

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
        <h1>Privacy Policy</h1>
        <p class="legal-hero__sub">
          Invy FZC (“we”, “our”, or “us”) operates the INVY mobile application (the “App”). This Privacy Policy explains
          how we collect, use, disclose, and safeguard your information when you use our App.
        </p>
        <div class="legal-hero__meta">
          <span class="tag tag--ghost">Last updated: <strong>04/05/2026</strong></span>
          <a class="tag tag--ghost" href="#toc">Jump to sections</a>
        </div>
      </div>
    </header>

    <main class="legal">
      <div class="container legal__wrap">
        <aside class="legal__aside" id="toc" aria-label="Privacy policy table of contents">
          <div class="legal__card">
            <div class="legal__asideTitle">Contents</div>
            <nav class="legal__toc">
              <a href="#policy">Privacy Policy</a>
              <a href="#info-we-collect">1. Information We Collect</a>
              <a href="#use-info">2. How We Use Your Information</a>
              <a href="#contact">Contact</a>
            </nav>
          </div>
        </aside>

        <article class="legal__content" aria-label="Privacy policy content">
          <section class="legal__section" id="policy">
            <h2>Privacy Policy</h2>
            <p>
              Invy FZC (“we”, “our”, or “us”) operates the INVY mobile application (the “App”). This Privacy Policy
              explains how we collect, use, disclose, and safeguard your information when you use our App.
            </p>
            <p>
              By using the App, you agree to the terms of this Privacy Policy.
            </p>
          </section>

          <section class="legal__section" id="info-we-collect">
            <h2>1. Information We Collect</h2>
            <p>We may collect the following types of information:</p>

            <h3>a. Personal Information</h3>
            <ul>
              <li>Name</li>
              <li>Email address</li>
              <li>Phone number</li>
              <li>Profile information (preferences, interests, etc.)</li>
            </ul>

            <h3>b. Account Information</h3>
            <ul>
              <li>Login credentials (email/OTP-based authentication)</li>
              <li>Account preferences and settings</li>
            </ul>

            <h3>c. Transaction Information</h3>
            <ul>
              <li>Ticket purchases</li>
              <li>Table bookings</li>
              <li>Payment details (processed via third-party payment providers)</li>
              <li>Wallet transactions (credits, rewards, refunds)</li>
            </ul>

            <h3>d. Location Data</h3>
            <ul>
              <li>Approximate or precise location (to show nearby venues, events, and maps)</li>
            </ul>

            <h3>e. Device &amp; Usage Information</h3>
            <ul>
              <li>Device type and operating system</li>
              <li>IP address</li>
              <li>App usage data (pages viewed, actions taken)</li>
            </ul>

            <h3>f. Communications</h3>
            <ul>
              <li>Messages sent through the app</li>
              <li>Support inquiries</li>
            </ul>
          </section>

          <section class="legal__section" id="use-info">
            <h2>2. How We Use Your Information</h2>
            <p>We use your information to:</p>
            <ul>
              <li>Create and manage your account</li>
              <li>Process bookings, tickets, and payments</li>
              <li>Provide access to events and venues</li>
            </ul>
          </section>

          <section class="legal__section" id="contact">
            <h2>Contact</h2>
            <p>
              For questions about this Privacy Policy, contact us at <a href="mailto:privacy@invyapp.ae">privacy@invyapp.ae</a>.
            </p>
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

