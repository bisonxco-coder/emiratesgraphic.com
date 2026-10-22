<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog — INVY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./img/logo.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/blog.css" />
  </head>
  <body class="blog-page">
    <header class="blog-header" id="top">
      <?php
      $navLinks = [
        ['href' => './', 'label' => 'Home'],
        ['href' => './#features', 'label' => 'Features'],
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

      <div class="container blog-header__inner">
        <h1>Stories from the city<br />after dark.</h1>
      </div>
    </header>

    <main class="blog-list" aria-label="Latest stories">
      <article class="blog-story">
        <a class="blog-story__media blog-story__media--one" href="#" aria-label="Read Inside Dubai's new underground techno scene">
          <span>Read More</span>
        </a>
        <h2>Inside Dubai's new underground techno<br />scene.</h2>
      </article>

      <article class="blog-story">
        <a class="blog-story__media blog-story__media--two" href="#" aria-label="Read The 12 best rooftops in Dubai for a Friday night">
          <span>Read More</span>
        </a>
        <h2>The 12 best rooftops in Dubai for a Friday<br />night</h2>
      </article>

      <article class="blog-story">
        <a class="blog-story__media blog-story__media--three" href="#" aria-label="Read How to book a VVIP table">
          <span>Read More</span>
        </a>
        <h2>How to book a VVIP table — and what you actually get for the price<br />Bottle service, minimum spends, and the rules nobody tells you</h2>
      </article>

      <article class="blog-story">
        <a class="blog-story__media blog-story__media--four" href="#" aria-label="Read Why ladies' nights still rule Dubai nightlife"></a>
        <h2>Why ladies' nights still rule Dubai nightlife A look at the venues, the<br />offers, and why the tradition isn't going anywhere.</h2>
      </article>

      <article class="blog-story">
        <a class="blog-story__media blog-story__media--five" href="#" aria-label="Read Behind the booth">
          <span>Read More</span>
        </a>
        <h2>Behind the booth: A night with the team running Soho Garden DXB from<br />soundcheck to last call — what it actually takes to run a club.</h2>
      </article>

      <?php require __DIR__ . '/includes/cta.php'; ?>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
    <script src="./js/main.js"></script>
  </body>
</html>
