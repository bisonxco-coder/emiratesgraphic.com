<?php
/**
 * Reusable top navigation.
 *
 * Optional vars before include:
 * - $navLinks: array of ['href' => string, 'label' => string]
 * - $navCtaHref: string
 * - $navCtaLabel: string
 * - $navSearchPlaceholder: string (enables the search field)
 * - $navSecondaryCtaHref / $navSecondaryCtaLabel: string
 */
if (!isset($navLinks) || !is_array($navLinks)) {
  $navLinks = [
    ['href' => './', 'label' => 'Home'],
    ['href' => './#features', 'label' => 'Features'],
    ['href' => './events.php', 'label' => 'Events'],
    ['href' => './venues.php', 'label' => 'Venues'],
    ['href' => './about.php', 'label' => 'About Us'],
  ];
}

$navCtaHref = $navCtaHref ?? '#download';
$navCtaLabel = $navCtaLabel ?? 'Download App';
$hasNavSearch = isset($navSearchPlaceholder) && $navSearchPlaceholder !== '';
$hasSecondaryCta = isset($navSecondaryCtaLabel) && $navSecondaryCtaLabel !== '';
?>

<nav class="nav<?php echo ($hasNavSearch || $hasSecondaryCta) ? ' nav--expanded' : ''; ?>">
  <div class="nav__inner">
    <a class="brand" href="<?php echo htmlspecialchars($navLinks[0]['href']); ?>" aria-label="INVY">
      <img src="./img/logo.svg" alt="INVY" />
    </a>

    <div class="nav__links" aria-label="Primary">
      <?php foreach ($navLinks as $link) { ?>
        <a href="<?php echo htmlspecialchars($link['href']); ?>"><?php echo htmlspecialchars($link['label']); ?></a>
      <?php } ?>
    </div>

    <div class="nav__actions">
      <?php if ($hasNavSearch) { ?>
        <label class="nav__search">
          <span class="sr-only">Search</span>
          <span class="nav__searchIcon" aria-hidden="true"></span>
          <input type="search" placeholder="<?php echo htmlspecialchars($navSearchPlaceholder); ?>" />
        </label>
      <?php } ?>

      <a class="btn btn--pill <?php echo $hasSecondaryCta ? 'nav__primaryCta' : 'btn--light'; ?>" href="<?php echo htmlspecialchars($navCtaHref); ?>">
        <?php echo htmlspecialchars($navCtaLabel); ?>
      </a>

      <?php if ($hasSecondaryCta) { ?>
        <a class="btn btn--pill btn--light nav__secondaryCta" href="<?php echo htmlspecialchars($navSecondaryCtaHref ?? '#'); ?>">
          <?php echo htmlspecialchars($navSecondaryCtaLabel); ?>
        </a>
      <?php } ?>

      <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="nav-drawer" aria-label="Open menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>

  <div class="nav__drawer" id="nav-drawer" hidden>
    <div class="nav__drawerLinks" aria-label="Mobile primary">
      <?php
      $linksByLabel = [];
      foreach ($navLinks as $link) {
        $linksByLabel[$link['label']] = $link;
      }
      foreach (['Home', 'Events', 'Venues'] as $label) {
        if (!isset($linksByLabel[$label])) {
          continue;
        }
        echo '<a href="' . htmlspecialchars($linksByLabel[$label]['href']) . '">' . htmlspecialchars($label) . '</a>';
      }
      if ($navCtaLabel === 'List Your Venue') {
        echo '<a href="' . htmlspecialchars($navCtaHref) . '">List Your Venue</a>';
      }
      $about = $linksByLabel['About'] ?? $linksByLabel['About Us'] ?? null;
      if ($about) {
        echo '<a href="' . htmlspecialchars($about['href']) . '">About</a>';
      }
      ?>
    </div>

    <div class="nav__drawerActions">
      <?php if ($hasNavSearch) { ?>
        <label class="nav__search nav__search--drawer">
          <span class="sr-only">Search</span>
          <span class="nav__searchIcon" aria-hidden="true"></span>
          <input type="search" placeholder="<?php echo htmlspecialchars($navSearchPlaceholder); ?>" />
        </label>
      <?php } ?>

      <a class="btn btn--pill <?php echo $hasSecondaryCta ? 'nav__primaryCta' : 'btn--light'; ?>" href="<?php echo htmlspecialchars($navCtaHref); ?>">
        <?php echo htmlspecialchars($navCtaLabel); ?>
      </a>

      <?php if ($hasSecondaryCta) { ?>
        <a class="btn btn--pill btn--light nav__secondaryCta" href="<?php echo htmlspecialchars($navSecondaryCtaHref ?? '#'); ?>">
          <?php echo htmlspecialchars($navSecondaryCtaLabel); ?>
        </a>
      <?php } ?>
    </div>
  </div>
</nav>
