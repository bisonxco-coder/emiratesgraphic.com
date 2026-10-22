<?php
/**
 * Reusable footer.
 */
require_once __DIR__ . '/site-config.php';
?>

<footer class="footer">
  <div class="container-fluid footer__inner">
    <div class="footer__main">
      <div class="footer__brand">
        <a href="./" aria-label="INVY home">
          <img src="./img/logo.svg" alt="INVY" />
        </a>
        <p>Nightlife in your pocket. One app. Your night out — handled.</p>
        <small>© 2026 Invy FZC. All rights reserved.</small>
      </div>

      <div class="footer__nav">
        <div class="footer__col">
          <div class="footer__title">Explore</div>
          <a href="./events.php">Events</a>
          <a href="./venues.php">Venues</a>
        </div>
        <div class="footer__col">
          <div class="footer__title">Company</div>
          <a href="./about.php">About INVY</a>
          <a href="./how-it-works.php">How It Works</a>
          <a href="<?php echo htmlspecialchars($invyVenueOnboardingUrl); ?>">List Your Venue</a>
        </div>
        <div class="footer__col">
          <div class="footer__title">Support</div>
          <a href="<?php echo htmlspecialchars($invyHelpCenterUrl); ?>">Help Center</a>
          <a href="mailto:<?php echo htmlspecialchars($invySupportEmail); ?>">Contact Us</a>
        </div>
      </div>

      <?php if ($invyShowNewsletter) { ?>
      <div class="footer__newsletter">
        <div class="footer__title">Stay on the list</div>
        <form class="footer__form" action="#" method="post">
          <input type="email" name="email" placeholder="Enter your email address" required />
          <button class="btn btn--pill" type="submit">Join the list</button>
        </form>
      </div>
      <?php } ?>
    </div>

    <?php if (invy_has_store_badges() || invy_has_social_links()) { ?>
    <div class="footer__meta">
      <?php if (invy_has_store_badges()) { ?>
      <div class="footer__stores" aria-label="Download INVY">
        <?php if ($invyAppStoreUrl !== '') { ?>
        <a href="<?php echo htmlspecialchars($invyAppStoreUrl); ?>" aria-label="Download on the App Store">
          <img src="./img/Component 2.png" alt="" />
        </a>
        <?php } ?>
        <?php if ($invyPlayStoreUrl !== '') { ?>
        <a href="<?php echo htmlspecialchars($invyPlayStoreUrl); ?>" aria-label="Get it on Google Play">
          <img src="./img/Component 3.png" alt="" />
        </a>
        <?php } ?>
      </div>
      <?php } ?>

      <?php if (invy_has_social_links()) { ?>
      <div class="footer__social" aria-label="INVY on social media">
        <?php foreach ($invySocialLinks as $social) {
          if (empty($social['url'])) {
            continue;
          } ?>
        <a href="<?php echo htmlspecialchars($social['url']); ?>" aria-label="<?php echo htmlspecialchars($social['label']); ?>" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo htmlspecialchars($social['icon']); ?>" alt="" />
        </a>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
    <?php } ?>

    <div class="footer__bottom">
      <nav class="footer__legal" aria-label="Legal">
        <a href="./terms.php">Terms &amp; Conditions</a>
        <a href="./privacy.php">Privacy Policy</a>
        <a href="./refund.php">Refund Policy</a>
        <a href="./data-deletion.php">Account Deletion Policy</a>
      </nav>

      <div class="footer__lang">
        <label class="sr-only" for="footer-lang">Language</label>
        <select id="footer-lang" class="footer__langSelect" data-lang-select>
          <option value="en">English</option>
          <option value="fr">Français</option>
          <option value="ar">العربية</option>
        </select>
      </div>
    </div>
  </div>
</footer>
