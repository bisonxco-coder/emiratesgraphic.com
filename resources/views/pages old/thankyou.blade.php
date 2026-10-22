
  @extends('index')
  @section('title_and_meta')

  @include('includes.google_scripts')
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '464635711045015');
    fbq('track', 'Lead');
  </script>


  <!-- Event snippet for Conversion for App Development Campaign - General Campaign conversion page -->

  <script>
    gtag('event', 'conversion', {
      'send_to': 'AW-835155431/6F5lCOmT8vwBEOfrnY4D'
    });
  </script>
  
  @endsection
  @section('content')

  <style>
    .exceptthankyoupage {
      visibility: hidden;
    }

    body {
      background: #2A2E3A;
    }

    .media_all_12333 .inner_popup_services {
      display: none !important;
    }

    .body_of_thankyou {
      background-image: url('../img/backgroundiqwe.png');
      padding: 14% 10px;
      height: auto;
      width: 100%;
      background-position: center;
      background-size: cover;
    }

    .body_of_thankyou .row {
      display: block;
    }

    .body_of_thankyou img {
      width: 17%;
      margin-bottom: 20px;
    }

    .body_of_thankyou {
      text-align: center;
      color: white;
    }

    .body_of_thankyou h1 {
      font-family: Poppins-bold;
      color: white;
      font-size: 60px;
      letter-spacing: -2px;
    }

    .body_of_thankyou p {
      font-size: 18px;
    }

    /*	MOBILE 	*/
    /*Only in desktop*/
    @media only screen and (min-width: 1000px) {
      .desktop-d-n {
        display: none;
      }
    }

    /*Only on Mobile*/
    @media only screen and (max-width: 1000px) {
      .mobile-d-n {
        display: none;
      }

      .body_of_thankyou {
        padding-top: 43%;
      }

      .body_of_thankyou img {
        width: 35% !important;
      }
    }
  </style>

  <div class="animsition-overlay">

    <section class="body_of_thankyou">
      <div class="container">
        <div class="row">
          <img src="/img/check.svg" data-aos="zoom-in-up" data-aos-delay="150">
          <h1 data-aos="zoom-in-up" data-aos-delay="150">Thank You!</h1>
          <p data-aos="zoom-in-up" data-aos-delay="150">We will contact you shortly, but in the meantime, take<br> a
            look at our amazing work.</p>
          <a href="/home"><button class="button_submit_a" data-aos="zoom-in-up"
              data-aos-delay="150">Portfolio</button></a>
        </div>
      </div>
    </section>

  </div>
  @endsection