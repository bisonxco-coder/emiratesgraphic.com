<?php
// Static landing page (no backend dependencies yet).
require_once __DIR__ . '/includes/site-config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INVY — Landing</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg">

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/vendor/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
  </head>
  <body>
    <header class="hero" id="home">
      <div class="hero__bg" aria-hidden="true">
        <video
          class="hero__bgVideo"
          autoplay
          muted
          loop
          playsinline
          preload="auto"
          poster="./img/Serenity at the Horizon 1.png"
        >
          <source src="./img/video/herosection.mp4" type="video/mp4" />
        </video>
      </div>

      <?php
      $navLinks = [
        ['href' => '#home', 'label' => 'Home'],
        ['href' => '#features', 'label' => 'Features'],
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

      <div class="hero__content container">
        <div class="hero__copy">
          <h1>Discover the best nightlife in your city.</h1>
          <p>Discover clubs, events, and nightlife experiences in one app.</p>
          <div class="hero__stores">
            <a href="<?php echo htmlspecialchars(invy_store_href($invyAppStoreUrl)); ?>" aria-label="Download on the App Store">
              <img class="store__icon" src="./img/Component 2.png" alt="" />
            </a>
            <a href="<?php echo htmlspecialchars(invy_store_href($invyPlayStoreUrl)); ?>" aria-label="Get it on Google Play">
              <img class="store__icon" src="./img/Component 3.png" alt="" />
            </a>
          </div>
        </div>

        <div class="hero__mock">
          <img src="./img/hero-mockup.png" alt="" />
        </div>
      </div>
    </header>

    <main>
      <?php if ($invyShowFeaturedEvents) { ?>
      <!-- Demo: bouncing swap cards (doesn't affect section above) -->
      <section class="featured-events featured-events--swapDemo" aria-label="Featured events swap demo">
        <div class="featured-events__cloud" aria-hidden="true"></div>

        <div class="featured-events__inner container-fluid">
          <div class="featured-events__kicker">Featured Events</div>
          <h2>The nights everyone's talking about</h2>

          <div class="featured-events__cards featured-events__cards--swap" data-featured-swap aria-label="Featured events swapping cards">
            <div class="swapWrap" data-slot="left">
              <article class="promo-card">
                <img class="promo-card__bg promo-card__bg--blur" src="./img/events-bg.png" alt="" aria-hidden="true" />
                <img class="promo-card__bg" src="./img/gallery-3.png" alt="" />

                <div class="promo-card__date">Sep 12, 2026</div>

                <div class="promo-card__content">
                  <h3 class="promo-card__title">Midnight Festival</h3>
                  <div class="promo-card__meta">
                    <div class="promo-card__metaRow">
                      <svg class="promo-ico" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                      </svg>
                      <span>J’Club Dubai</span>
                    </div>
                    <div class="promo-card__metaRow">
                      <svg class="promo-ico" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                      </svg>
                      <span>Sep 12, 2026 - 8PM</span>
                    </div>
                  </div>
                </div>

                <a class="promo-card__cta" href="#download">Book Table</a>
              </article>
            </div>

            <div class="swapWrap" data-slot="center">
              <article class="promo-card">
                <img class="promo-card__bg promo-card__bg--blur" src="./img/events-bg.png" alt="" aria-hidden="true" />
                <img class="promo-card__bg" src="./img/gallery-1.png" alt="" />

                <div class="promo-card__date">Sep 12, 2026</div>

                <div class="promo-card__content">
                  <h3 class="promo-card__title">Full Moon Neon Rave</h3>
                  <div class="promo-card__meta">
                    <div class="promo-card__metaRow">
                      <svg class="promo-ico" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                      </svg>
                      <span>J’Club Dubai</span>
                    </div>
                    <div class="promo-card__metaRow">
                      <svg class="promo-ico" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                      </svg>
                      <span>Sep 12, 2026 - 8PM</span>
                    </div>
                  </div>
                </div>

                <a class="promo-card__cta" href="#download">Book Table</a>
              </article>
            </div>

            <div class="swapWrap" data-slot="right">
              <article class="promo-card">
                <img class="promo-card__bg promo-card__bg--blur" src="./img/featured-3.png" alt="" aria-hidden="true" />
                <img class="promo-card__bg" src="./img/gallery-2.png" alt="" />

                <div class="promo-card__date">Sep 12, 2026</div>

                <div class="promo-card__content">
                  <h3 class="promo-card__title">Stellar Glow Dance Party</h3>
                  <div class="promo-card__meta">
                    <div class="promo-card__metaRow">
                      <svg class="promo-ico" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                      </svg>
                      <span>J’Club Dubai</span>
                    </div>
                    <div class="promo-card__metaRow">
                      <svg class="promo-ico" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                      </svg>
                      <span>Sep 12, 2026 - 8PM</span>
                    </div>
                  </div>
                </div>

                <a class="promo-card__cta" href="#download">Book Table</a>
              </article>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>

      <!-- Section 3 -->
      <section class="events" id="events">
        <div class="events__bg" aria-hidden="true"></div>

        <div class="events__inner">
          <div class="events__header container">
            <div class="events__left">
              <div class="events__kicker">events</div>
              <h2>What's on near you</h2>
              <div class="events__filters" aria-label="Event filters">
                <label class="select">
                  <span class="sr-only">Location</span>
                  <select id="eventsLocation">
                    <?php require_once __DIR__ . '/includes/locations.php'; invy_location_options(); ?>
                  </select>
                </label>
                <label class="date">
                  <span class="sr-only">Date</span>
                  <input id="eventsDate" type="date" />
                </label>
              </div>
            </div>

            <div class="events__nav" aria-label="Carousel navigation">
              <button class="circle left" type="button" data-swiper-prev aria-label="Previous"><img src="./img/arrow.svg" alt="" srcset=""></button>
              <button class="circle" type="button" data-swiper-next aria-label="Next"><img src="./img/arrow.svg" alt="" srcset=""></button>
            </div>
          </div>

          <p class="events__empty container" id="eventsEmpty" hidden>
            Nothing happening here yet — check back soon.
          </p>

          <div class="events__carousel" aria-label="Events carousel">
            <div class="swiper eventsSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <article class="event-card">
                    <div class="event-card__top">
                      <div class="event-card__topLogo">
                        <img class="event-card__logo" src="./img/venue-soho.png" alt="" />
                      </div>
                      <div class="event-card__topText">
                        <div class="event-card__topTitle">FULL MOON NEON RAVE</div>
                        <a href="#" class="event-card__topSub">@SohoGarden</a>
                      </div>
                      <div class="event-card__topTag">Techno</div>
                    </div>
                    <div class="event-card__media">
                      <img src="./img/event-1.png" alt="" />
                    </div>
                    <div class="event-card__details">
                      <div class="event-card__detailRow">
                        <div class="event-card__detailLeft">
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                            </svg>
                            <span>Soho Garden, Dubai</span>
                          </div>
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                            </svg>
                            <span>Sep 12, 2026 - 8PM</span>
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
                </div>

                <div class="swiper-slide">
                  <article class="event-card">
                    <div class="event-card__top">
                      <div class="event-card__topLogo">
                        <img class="event-card__logo" src="./img/venue-cavalli.png" alt="" />
                      </div>
                      <div class="event-card__topText">
                        <div class="event-card__topTitle">SECURE BEATS THURSDAYS</div>
                        <a href="#" class="event-card__topSub">@PulseDubai</a>
                      </div>
                      <div class="event-card__topTag">Hip Hop</div>
                    </div>
                    <div class="event-card__media">
                      <img src="./img/event-2.png" alt="" />
                    </div>
                    <div class="event-card__details">
                      <div class="event-card__detailRow">
                        <div class="event-card__detailLeft">
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                            </svg>
                            <span>PulseDubai</span>
                          </div>
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                            </svg>
                            <span>Sep 12, 2026 - 8PM</span>
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
                </div>

                <div class="swiper-slide">
                  <article class="event-card">
                    <div class="event-card__top">
                      <div class="event-card__topLogo">
                        <img class="event-card__logo" src="./img/venue-white.png" alt="" />
                      </div>
                      <div class="event-card__topText">
                        <div class="event-card__topTitle">LUNAR GLOW</div>
                        <a href="#" class="event-card__topSub">@WhiteClub</a>
                      </div>
                      <div class="event-card__topTag">House</div>
                    </div>
                    <div class="event-card__media">
                      <img src="./img/event-3.png" alt="" />
                    </div>
                    <div class="event-card__details">
                      <div class="event-card__detailRow">
                        <div class="event-card__detailLeft">
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                            </svg>
                            <span>White Club, Dubai</span>
                          </div>
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                            </svg>
                            <span>Sep 12, 2026 - 8PM</span>
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
                </div>

                
                <div class="swiper-slide">
                  <article class="event-card">
                    <div class="event-card__top">
                      <div class="event-card__topLogo">
                        <img class="event-card__logo" src="./img/venue-soho.png" alt="" />
                      </div>
                      <div class="event-card__topText">
                        <div class="event-card__topTitle">FULL MOON NEON RAVE</div>
                        <a href="#" class="event-card__topSub">@SohoGarden</a>
                      </div>
                      <div class="event-card__topTag">Techno</div>
                    </div>
                    <div class="event-card__media">
                      <img src="./img/event-1.png" alt="" />
                    </div>
                    <div class="event-card__details">
                      <div class="event-card__detailRow">
                        <div class="event-card__detailLeft">
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                            </svg>
                            <span>Soho Garden, Dubai</span>
                          </div>
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                            </svg>
                            <span>Sep 12, 2026 - 8PM</span>
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
                </div>

                <div class="swiper-slide">
                  <article class="event-card">
                    <div class="event-card__top">
                      <div class="event-card__topLogo">
                        <img class="event-card__logo" src="./img/venue-cavalli.png" alt="" />
                      </div>
                      <div class="event-card__topText">
                        <div class="event-card__topTitle">SECURE BEATS THURSDAYS</div>
                        <a href="#" class="event-card__topSub">@PulseDubai</a>
                      </div>
                      <div class="event-card__topTag">Hip Hop</div>
                    </div>
                    <div class="event-card__media">
                      <img src="./img/event-2.png" alt="" />
                    </div>
                    <div class="event-card__details">
                      <div class="event-card__detailRow">
                        <div class="event-card__detailLeft">
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                            </svg>
                            <span>PulseDubai</span>
                          </div>
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                            </svg>
                            <span>Sep 12, 2026 - 8PM</span>
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
                </div>

                <div class="swiper-slide">
                  <article class="event-card">
                    <div class="event-card__top">
                      <div class="event-card__topLogo">
                        <img class="event-card__logo" src="./img/venue-white.png" alt="" />
                      </div>
                      <div class="event-card__topText">
                        <div class="event-card__topTitle">LUNAR GLOW</div>
                        <a href="#" class="event-card__topSub">@WhiteClub</a>
                      </div>
                      <div class="event-card__topTag">House</div>
                    </div>
                    <div class="event-card__media">
                      <img src="./img/event-3.png" alt="" />
                    </div>
                    <div class="event-card__details">
                      <div class="event-card__detailRow">
                        <div class="event-card__detailLeft">
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                            </svg>
                            <span>White Club, Dubai</span>
                          </div>
                          <div class="event-card__metaRow">
                            <svg class="event-ico" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12 10.26 10.26 0 0 0 12 1.75Zm0 18.5A8.25 8.25 0 1 1 20.25 12 8.26 8.26 0 0 1 12 20.25Zm.75-13h-1.5v5.2l4.25 2.55.77-1.25-3.52-2.1Z"/>
                            </svg>
                            <span>Sep 12, 2026 - 8PM</span>
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
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 4 -->
      <?php if ($invyShowFeaturedVenues) { ?>
      <section class="venues" id="venues">
        <div class="venues__bg" aria-hidden="true"></div>
        <div class="container">
          <h2>Featured Venues</h2>
          <div class="venues__stack" id="venuesScatter" data-featured-venues aria-label="Featured venues gallery">
            <!-- These 4 tiles expand to the fixed layout (Photo 2). Tweak x/y/r/s/z freely. -->
            <a class="venue-tile" href="./venue.php" data-i="0" data-x="0.16" data-y="0.74" data-r="-10" data-s="1.02" data-z="12">
              <div class="venue-tile__media">
                <img src="./img/event-3.png" alt="" />
              </div>
              <div class="venue-tile__meta">
                <img class="venue-tile__logo" src="./img/venue-white.png" alt="" />
                <div class="venue-tile__text">
                  <div class="venue-tile__name">BASE Dubai</div>
                  <div class="venue-tile__loc">Dubai, UAE</div>
                </div>
              </div>
            </a>
            <a class="venue-tile" href="./venue.php" data-i="1" data-x="0.36" data-y="0.30" data-r="-2" data-s="1.08" data-z="14">
              <div class="venue-tile__media">
                <img src="./img/event-2.png" alt="" />
              </div>
              <div class="venue-tile__meta">
                <img class="venue-tile__logo" src="./img/venue-white.png" alt="" />
                <div class="venue-tile__text">
                  <div class="venue-tile__name">White Dubai</div>
                  <div class="venue-tile__loc">Dubai, UAE</div>
                </div>
              </div>
            </a>
            <a class="venue-tile" href="./venue.php" data-i="2" data-x="0.58" data-y="0.78" data-r="4" data-s="1.00" data-z="13">
              <div class="venue-tile__media">
                <img src="./img/featured-1.png" alt="" />
              </div>
              <div class="venue-tile__meta">
                <img class="venue-tile__logo" src="./img/venue-soho.png" alt="" />
                <div class="venue-tile__text">
                  <div class="venue-tile__name">Soho Garden</div>
                  <div class="venue-tile__loc">Dubai, UAE</div>
                </div>
              </div>
            </a>
            <a class="venue-tile" href="./venue.php" data-i="3" data-x="0.84" data-y="0.28" data-r="8" data-s="1.05" data-z="15">
              <div class="venue-tile__media">
                <img src="./img/event-1.png" alt="" />
              </div>
              <div class="venue-tile__meta">
                <img class="venue-tile__logo" src="./img/venue-cavalli.png" alt="" />
                <div class="venue-tile__text">
                  <div class="venue-tile__name">Cavalli Club</div>
                  <div class="venue-tile__loc">Dubai, UAE</div>
                </div>
              </div>
            </a>

            <!-- Extra tiles (currently hidden). Enable later if needed. -->
            <div class="venue-tile" data-i="4" data-hidden="1"><img src="./img/venue-photo-5.png" alt="" /></div>
            <div class="venue-tile" data-i="5" data-hidden="1"><img src="./img/venue-photo-6.png" alt="" /></div>
            <div class="venue-tile" data-i="6" data-hidden="1"><img src="./img/venue-photo-7.png" alt="" /></div>
            <div class="venue-tile" data-i="7" data-hidden="1"><img src="./img/venue-photo-8.png" alt="" /></div>
          </div>
        </div>
      </section>
      <?php } ?>

      <!-- Section 5 -->
      <section class="features" id="features">
        <div class="container features__inner">
          <div class="features__copy">
            <div class="features__pill">Features</div>
            <h2>BUILT FOR HOW YOU ACTUALLY GO OUT.</h2>
            <p>From finding the vibe to walking past the line — every part of your night, handled.</p>

            <div class="features-accordion" data-accordion>
              <details open>
                <summary>BOOK TABLES YOUR WAY</summary>
                <p>
                  Browse available table options and packages, see pricing and capacity, and book directly in the app.
                </p>
              </details>
              <details>
                <summary>TICKETS WITH A QR THAT WORKS</summary>
                <p>
                  Buy tickets in-app and use a scannable QR at the door for fast entry — no printing, no confusion.
                </p>
              </details>
              <details>
                <summary>FIND THE NIGHT, NOT JUST THE VENUE</summary>
                <p>
                  Filter by vibe, genre, and location to find what’s happening tonight — not just where.
                </p>
              </details>
              <details>
                <summary>YOUR NIGHT, ALL IN ONE WALLET</summary>
                <p>
                  Keep your bookings and tickets together in one place for quick and easy access.
                </p>
              </details>
            </div>
          </div>
          <div class="features__mock">
            <img src="./img/features-mock.png" alt="" />
          </div>
        </div>
      </section>

      <!-- Section 6 -->
      <section class="faq" id="faq">
        <div class="container">
          <h2>Frequently Asked Questions</h2>
          <p class="faq__sub">Everything you need to know about using INVY.</p>
          <div class="accordion" data-accordion>
            <details open>
              <summary>How do table bookings work?</summary>
              <p>
                Choose a venue or event, select your preferred table and available tier, review the booking details and
                minimum spend where applicable, then complete your payment in the INVY app. Once confirmed, your booking
                will be available directly in your account.
              </p>
            </details>
            <details>
              <summary>Can I cancel or get a refund?</summary>
              <p>
                Cancellation and refund eligibility depends on the policy set for your booking. Any applicable
                cancellation or refund conditions will be shown before you confirm and pay.
              </p>
            </details>
            <details>
              <summary>What do I show at the door?</summary>
              <p>
                Show your INVY booking or ticket QR code at the venue. You may also be required to present a valid ID
                depending on the venue’s entry policy.
              </p>
            </details>
            <details>
              <summary>Is there a minimum spend on tables?</summary>
              <p>
                Minimum spend varies depending on the venue and table selected. Where applicable, the minimum spend and
                what is included will be clearly displayed before you confirm your booking.
              </p>
            </details>
            <details>
              <summary>What's the age policy?</summary>
              <p>
                Age and entry requirements vary by venue, event and location. Always check the applicable entry policy
                before booking and bring a valid ID where required.
              </p>
            </details>
            <details>
              <summary>What should I do if I have a problem with my booking?</summary>
              <p>
                If you experience an issue with a booking, payment or confirmation, contact INVY Support through the app
                and our team will assist you.
              </p>
            </details>
            <details>
              <summary>Where can I find my bookings and tickets?</summary>
              <p>
                Your confirmed bookings and tickets are stored in your INVY account, giving you quick access whenever you
                need them.
              </p>
            </details>
          </div>
        </div>
      </section>

      <!-- Section 7 -->
      <?php require __DIR__ . '/includes/gallery.php'; ?>

      <!-- Section 8 -->
      <?php
      $ctaId = 'download';
      $ctaVideoSrc = './img/video/Last Section.mp4';
      $ctaPoster = './img/cta-bg.png';
      require __DIR__ . '/includes/cta.php';
      ?>
    </main>

    <?php
    $footerLinkPrefix = '';
    require __DIR__ . '/includes/footer.php';
    ?>

    <script src="./js/vendor/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
