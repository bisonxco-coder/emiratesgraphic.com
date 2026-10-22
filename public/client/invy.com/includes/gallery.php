<?php
require_once __DIR__ . '/site-config.php';
?>
<section class="gallery" aria-label="INVY gets you in">
  <div class="gallery__stage">
    <div class="gallery__tile" style="--x: 0%; --y: 55%; --w: 240px; --h: 160px; --r: -10deg;">
      <video autoplay muted loop playsinline preload="metadata">
        <source src="./img/video/video1.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="gallery__tile" style="--x: 22%; --y: 15%; --w: 220px; --h: 160px; --r: 6deg;">
      <video autoplay muted loop playsinline preload="metadata">
        <source src="./img/video/video2.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="gallery__tile" style="--x: 12%; --y: 92%; --w: 260px; --h: 170px; --r: 9deg;">
      <video autoplay muted loop playsinline preload="metadata">
        <source src="./img/video/video3.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="gallery__tile" style="--x: 78%; --y: 18%; --w: 240px; --h: 160px; --r: -10deg;">
      <video autoplay muted loop playsinline preload="metadata">
        <source src="./img/video/video4.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="gallery__tile" style="--x: 100%; --y: 55%; --w: 240px; --h: 160px; --r: -7deg;">
      <video autoplay muted loop playsinline preload="metadata">
        <source src="./img/video/video7.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="gallery__tile" style="--x: 74%; --y: 92%; --w: 260px; --h: 170px; --r: 4deg;">
      <video autoplay muted loop playsinline preload="metadata">
        <source src="./img/video/video6.mp4" type="video/mp4" />
      </video>
    </div>

    <div class="gallery__center">
      <h2>INVY gets you <span>IN.</span></h2>
      <div class="gallery__stores" aria-label="Download INVY">
        <?php if (invy_store_url_ready($invyAppStoreUrl)) { ?>
          <a href="<?php echo htmlspecialchars($invyAppStoreUrl); ?>" aria-label="Download on the App Store">
            <img class="store__icon" src="./img/Component 2.png" alt="" />
          </a>
        <?php } else { ?>
          <span class="store-badge store-badge--soon" aria-label="App Store — Coming soon">
            <img class="store__icon" src="./img/Component 2.png" alt="" />
            <span class="store-badge__label">Coming soon</span>
          </span>
        <?php } ?>
        <?php if (invy_store_url_ready($invyPlayStoreUrl)) { ?>
          <a href="<?php echo htmlspecialchars($invyPlayStoreUrl); ?>" aria-label="Get it on Google Play">
            <img class="store__icon" src="./img/Component 3.png" alt="" />
          </a>
        <?php } else { ?>
          <span class="store-badge store-badge--soon" aria-label="Google Play — Coming soon">
            <img class="store__icon" src="./img/Component 3.png" alt="" />
            <span class="store-badge__label">Coming soon</span>
          </span>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
