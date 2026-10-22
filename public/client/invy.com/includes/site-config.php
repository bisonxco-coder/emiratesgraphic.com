<?php
/**
 * Launch toggles and shared site constants.
 * Flip flags when production content / integrations are ready.
 */
$invyShowFeaturedEvents = false;
$invyShowFeaturedVenues = false;
$invyShowNewsletter = false;
$invySupportEmail = 'info@invyapp.ae';
$invyHelpCenterUrl = 'mailto:info@invyapp.ae';
$invyVenueOnboardingUrl = './venues.php#for-venues';
$invyAppStoreUrl = '';
$invyPlayStoreUrl = '';

/** Social links — leave url empty to hide until profiles are live. */
$invySocialLinks = [
  ['label' => 'Instagram', 'url' => '', 'icon' => './img/event-linkedin.svg'],
  ['label' => 'TikTok', 'url' => '', 'icon' => './img/event-youtube.svg'],
  ['label' => 'LinkedIn', 'url' => '', 'icon' => './img/event-linkedin.svg'],
];

function invy_store_href($url = '') {
  return $url !== '' ? $url : '#download';
}

function invy_store_url_ready($url = '') {
  return $url !== '';
}

function invy_has_store_badges() {
  global $invyAppStoreUrl, $invyPlayStoreUrl;
  return $invyAppStoreUrl !== '' || $invyPlayStoreUrl !== '';
}

function invy_has_social_links() {
  global $invySocialLinks;
  foreach ($invySocialLinks as $link) {
    if (!empty($link['url'])) {
      return true;
    }
  }
  return false;
}
