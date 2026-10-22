<?php
/**
 * Reusable download CTA section.
 *
 * Optional variables:
 * $ctaSectionClass, $ctaInnerClass, $ctaActionsClass, $ctaId
 * $ctaTitle, $ctaText
 * $ctaPrimaryLabel, $ctaPrimaryHref
 * $ctaSecondaryLabel, $ctaSecondaryHref
 * $ctaVideoSrc, $ctaPoster
 */
$ctaSectionClass = $ctaSectionClass ?? 'cta';
$ctaInnerClass = $ctaInnerClass ?? 'cta__inner';
$ctaActionsClass = $ctaActionsClass ?? 'cta__actions';
$ctaId = $ctaId ?? 'download';
$ctaTitle = $ctaTitle ?? 'Your next night out is one tap away.';
$ctaText = $ctaText ?? "Download INVY and book the city's best tables, tickets, and tonight's best events in seconds.";
$ctaPrimaryLabel = $ctaPrimaryLabel ?? 'Download the App';
$ctaPrimaryHref = $ctaPrimaryHref ?? '#download';
$ctaSecondaryLabel = $ctaSecondaryLabel ?? 'List your venue';
$ctaSecondaryHref = $ctaSecondaryHref ?? './venues.php#for-venues';
$ctaVideoSrc = $ctaVideoSrc ?? './img/video/Last Section.mp4';
$ctaPoster = $ctaPoster ?? './img/cta-bg.png';
?>

<section class="<?php echo htmlspecialchars($ctaSectionClass); ?>" id="<?php echo htmlspecialchars($ctaId); ?>">
  <?php if (!empty($ctaVideoSrc)) { ?>
    <div class="cta__bg" aria-hidden="true">
      <video class="cta__bgVideo" autoplay muted loop playsinline preload="auto"<?php echo !empty($ctaPoster) ? ' poster="' . htmlspecialchars($ctaPoster) . '"' : ''; ?>>
        <source src="<?php echo htmlspecialchars($ctaVideoSrc); ?>" type="video/mp4" />
      </video>
    </div>
  <?php } ?>

  <div class="container <?php echo htmlspecialchars($ctaInnerClass); ?>">
    <h2><?php echo htmlspecialchars($ctaTitle); ?></h2>
    <p><?php echo htmlspecialchars($ctaText); ?></p>
    <div class="<?php echo htmlspecialchars($ctaActionsClass); ?>">
      <a class="cta__btn cta__btn--primary" href="<?php echo htmlspecialchars($ctaPrimaryHref); ?>">
        <?php echo htmlspecialchars($ctaPrimaryLabel); ?>
      </a>
      <a class="cta__btn cta__btn--secondary" href="<?php echo htmlspecialchars($ctaSecondaryHref); ?>">
        <?php echo htmlspecialchars($ctaSecondaryLabel); ?>
      </a>
    </div>
  </div>
</section>
