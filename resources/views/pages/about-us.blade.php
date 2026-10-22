  @extends('index')
  @section('title_and_meta')

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": ["Organization", "LocalBusiness"],
        "@id": "https://emiratesgraphic.com/#org",
        "name": "Emirates Graphic",
        "url": "https://emiratesgraphic.com/",
        "logo": "https://emiratesgraphic.com/img/white-logo-eg.svg",
        "image": "https://emiratesgraphic.com/img/white-logo-eg.svg",
        "description": "Emirates Graphic is a creative agency that builds powerful digital solutions.",
        "email": "info@emiratesgraphic.com",
        "telephone": "+971509124567",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "35th Floor, Swiss Tower, Cluster Y, Jumeirah Lakes Towers",
          "addressLocality": "Dubai",
          "addressRegion": "Dubai",
          "addressCountry": "UAE"
        },
        "openingHours": "Mo-Fr 09:00-18:00",
        "founder": {
          "@type": "Person",
          "@id": "https://emiratesgraphic.com/#founder",
          "name": "Sacha Christe",
          "jobTitle": "Founder"
        },
        "foundingDate": "2013",
        "foundingLocation": {
          "@type": "Place",
          "name": "Switzerland"
        },
        "numberOfEmployees": 36,
        "areaServed": [
          {
            "@type": "Country",
            "name": "United Arab Emirates"
          },
          {
            "@type": "Country",
            "name": "Saudi Arabia"
          }
        ],
        "sameAs": [
          "https://www.facebook.com/EmiratesGraphic/",
          "https://x.com/designxemirates",
          "https://www.instagram.com/EMIRATESGRAPHIC/",
          "https://www.youtube.com/@emiratesgraphic4629",
          "https://www.linkedin.com/company/emirates-graphic-web-design-dubai/"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "https://emiratesgraphic.com/#website",
        "url": "https://emiratesgraphic.com/",
        "name": "Emirates Graphic",
        "publisher": {
          "@id": "https://emiratesgraphic.com/#org"
        }
      },
      {
        "@type": "WebPage",
        "@id": "https://emiratesgraphic.com/#home",
        "url": "https://emiratesgraphic.com/",
        "name": "Mobile App Development Company in Dubai",
        "isPartOf": {
          "@id": "https://emiratesgraphic.com/#website"
        },
        "about": {
          "@id": "https://emiratesgraphic.com/#org"
        },
        "primaryImageOfPage": "https://emiratesgraphic.com/img/home/animation_500_lcpd27mg%201.png"
      },
      {
        "@type": "WebPage",
        "@id": "https://emiratesgraphic.com/studio#studio",
        "url": "https://emiratesgraphic.com/studio",
        "name": "Trusted Internet Marketing & Web Development Company in Dubai",
        "isPartOf": {
          "@id": "https://emiratesgraphic.com/#website"
        },
        "about": {
          "@id": "https://emiratesgraphic.com/#org"
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://emiratesgraphic.com/#breadcrumbs",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://emiratesgraphic.com/"
          }
        ]
      },
      {
        "@type": "Service",
        "@id": "https://emiratesgraphic.com/#service-web-development",
        "provider": {
          "@id": "https://emiratesgraphic.com/#org"
        },
        "serviceType": "Web Development",
        "areaServed": "UAE",
        "description": "Custom websites and web platforms built from scratch."
      },
      {
        "@type": "Service",
        "@id": "https://emiratesgraphic.com/#service-web3",
        "provider": {
          "@id": "https://emiratesgraphic.com/#org"
        },
        "serviceType": "Web 3.0",
        "areaServed": "UAE",
        "description": "Web3 and blockchain-enabled digital solutions."
      },
      {
        "@type": "Service",
        "@id": "https://emiratesgraphic.com/#service-app-development",
        "provider": {
          "@id": "https://emiratesgraphic.com/#org"
        },
        "serviceType": "App Development",
        "areaServed": "UAE",
        "description": "Mobile app development for businesses in Dubai and the UAE."
      },
      {
        "@type": "Service",
        "@id": "https://emiratesgraphic.com/#service-digital-marketing",
        "provider": {
          "@id": "https://emiratesgraphic.com/#org"
        },
        "serviceType": "Digital Marketing",
        "areaServed": "UAE",
        "description": "Performance-driven digital marketing and growth services."
      },
      {
        "@type": "Service",
        "@id": "https://emiratesgraphic.com/#service-prototype",
        "provider": {
          "@id": "https://emiratesgraphic.com/#org"
        },
        "serviceType": "Prototype",
        "areaServed": "UAE",
        "description": "Prototype and MVP design for startups and enterprises."
      },
      {
        "@type": "FAQPage",
        "@id": "https://emiratesgraphic.com/#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What services does Emirates Graphic offer?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Emirates Graphic offers web development, Web 3.0 solutions, app development, digital marketing, and prototype/MVP services."
            }
          },
          {
            "@type": "Question",
            "name": "Where is Emirates Graphic located?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Emirates Graphic is located in Jumeirah Lakes Towers, Dubai, UAE (35th Floor, Swiss Tower, Cluster Y)."
            }
          },
          {
            "@type": "Question",
            "name": "Does Emirates Graphic work with clients outside Dubai?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Emirates Graphic serves clients across the UAE and has expanded operations to Saudi Arabia."
            }
          },
          {
            "@type": "Question",
            "name": "When was Emirates Graphic founded?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Emirates Graphic was founded in 2013 by Sacha Christe."
            }
          },
          {
            "@type": "Question",
            "name": "What makes Emirates Graphic different from other agencies?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The team emphasizes Swiss-quality standards, innovative product thinking, and long-term client relationships focused on measurable success."
            }
          }
        ]
      }
    ]
  }
  </script>

  <title>Emirates Graphic — UAE Digital Transformation Agency | 400+ Websites &amp; 200+ Apps Since 2013</title>
  <meta name="description"
    content="Emirates Graphic is a UAE-based digital transformation agency with European-led design, a fully in-house team of 36, and a 12-year track record delivering 400+ websites and 200+ mobile apps across the GCC. We build high-performance mobile apps, websites, Web3 platforms, and digital marketing funnels for ambitious brands in the UAE and Saudi Arabia.">

  @include('includes.google_scripts')

  <style>
    /* Studio Page - Custom Sections Styling */
    
    /* Hero Services Line */
    .hero-services {
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      font-size: 18px;
      opacity: 0.8;
    }

    /* Unified Positioning Statement Section */
    .section_positioning {
      padding: 4% 0;
      background: #fff;
      border-bottom: 1px solid #f5f5f5;
    }

    .section_positioning h1 {
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      font-size: 28px;
      line-height: 40px;
      font-weight: normal;
      text-align: center;
      max-width: 1000px;
      margin: 0 auto;
    }
    
    .section_about_intro {
      padding: 3% 0;
      background: #fff;
    }

    .section_about_intro h2 {
      font-family: "sf-ui-display-heavy", sans-serif;
      color: #191727;
      font-size: 55px;
      margin-bottom: 20px;
      letter-spacing: -4px;
    }

    .section_about_intro p {
      font-size: 20px;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      line-height: 32px;
    }

    .section_services_overview {
      padding: 3% 0;
      background: #f5f5f5;
    }

    .section_services_overview h2 {
      font-family: "sf-ui-display-heavy", sans-serif;
      color: #191727;
      font-size: 55px;
      margin-bottom: 30px;
      letter-spacing: -4px;
    }

    .section_services_overview h4 {
      font-family: "Poppins-bold", sans-serif;
      color: #191727;
      font-size: 30px;
      margin-bottom: 15px;
      letter-spacing: -1px;
    }

    .section_services_overview p {
      font-size: 18px;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      line-height: 28px;
    }

    .section_why_choose {
      padding: 3% 0;
      background: #fff;
    }

    .section_why_choose h2 {
      font-family: "sf-ui-display-heavy", sans-serif;
      color: #191727;
      font-size: 55px;
      margin-bottom: 30px;
      letter-spacing: -4px;
    }

    .section_why_choose .bullet-list {
      list-style: none;
      padding-left: 0;
    }

    .section_why_choose .bullet-list li {
      font-size: 20px;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      margin-bottom: 15px;
      padding-left: 30px;
      position: relative;
      line-height: 30px;
    }

    .section_why_choose .bullet-list li:before {
      content: "•";
      color: #e82a2a;
      font-weight: bold;
      font-size: 25px;
      position: absolute;
      left: 0;
      top: -2px;
    }

    .section_faq_highpriority {
      padding: 3% 0;
      background: #f5f5f5;
    }

    .section_faq_highpriority h2 {
      font-family: "sf-ui-display-heavy", sans-serif;
      color: #191727;
      font-size: 55px;
      margin-bottom: 40px;
      letter-spacing: -4px;
    }

    .section_faq_highpriority .faq-list {
      width: 100%;
    }

    .section_faq_highpriority .faq-item {
      margin-bottom: 30px;
    }

    .section_faq_highpriority .faq-item h5 {
      font-family: "sf-ui-display-bold", sans-serif;
      color: #191727;
      font-size: 22px;
      margin-bottom: 10px;
    }

    .section_faq_highpriority .faq-item p {
      font-size: 18px;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      line-height: 28px;
    }

    .section_industries {
      padding: 3% 0;
      background: #fff;
    }

    .section_industries h2 {
      font-family: "sf-ui-display-heavy", sans-serif;
      color: #191727;
      font-size: 55px;
      margin-bottom: 20px;
      letter-spacing: -4px;
    }

    .section_industries p {
      font-size: 20px;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      line-height: 32px;
    }

    .section_impact {
      padding: 3% 0;
      background: #f5f5f5;
    }

    .section_impact h2 {
      font-family: "sf-ui-display-heavy", sans-serif;
      color: #191727;
      font-size: 55px;
      margin-bottom: 40px;
      letter-spacing: -4px;
    }

    .section_impact p {
      font-size: 20px;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      margin-bottom: 10px;
      line-height: 30px;
    }

    .section_impact strong {
      font-family: "sf-ui-display-bold", sans-serif;
      color: #e82a2a;
      font-size: 24px;
    }

    .section_featured {
      padding: 3% 0;
      background: #fff;
    }

    .section_featured h2 {
      font-family: "sf-ui-display-heavy", sans-serif;
      color: #191727;
      font-size: 55px;
      margin-bottom: 20px;
      letter-spacing: -4px;
    }

    .section_featured p {
      font-size: 20px;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      line-height: 32px;
    }

    /* Team Member Professional Lines */
    .team-role {
      font-size: 16px !important;
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      line-height: 24px !important;
      margin-bottom: 15px !important;
      padding: 10px 0;
      border-left: 3px solid #e82a2a;
      padding-left: 15px;
      background: rgba(245, 245, 245, 0.5);
    }

    .team-role strong {
      font-family: "sf-ui-display-bold", sans-serif;
      color: #e82a2a;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* Hero Section Adjustments */
    .top_cover_page h2 {
      font-family: "Poppins-bold", sans-serif;
      color: #191727;
      font-size: 45px;
      line-height: 55px;
      margin-bottom: 0;
    }

    .top_cover_page h1 {
      font-family: "SF-UI-Display-Regular", sans-serif;
      color: #191727;
      font-size: 20px;
      line-height: 32px;
      font-weight: normal;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .hero-services {
        font-size: 16px;
      }

      .section_positioning {
        padding: 6% 0;
      }

      .section_positioning h1 {
        font-size: 20px;
        line-height: 32px;
      }

      .section_about_intro h2,
      .section_services_overview h2,
      .section_why_choose h2,
      .section_faq_highpriority h2,
      .section_industries h2,
      .section_impact h2,
      .section_featured h2 {
        font-size: 35px;
        letter-spacing: -2px;
      }

      .section_services_overview h4 {
        font-size: 24px;
        margin-top: 20px;
      }

      .section_about_intro p,
      .section_industries p,
      .section_featured p {
        font-size: 18px;
      }

      .section_services_overview p,
      .section_faq_highpriority .faq-item p {
        font-size: 16px;
      }

      .section_why_choose .bullet-list li {
        font-size: 18px;
      }

      .section_impact p {
        font-size: 18px;
      }

      .section_impact strong {
        font-size: 20px;
      }

      .top_cover_page h2 {
        font-size: 32px;
        line-height: 40px;
      }

      .top_cover_page h1 {
        font-size: 18px;
        line-height: 28px;
      }
    }
  </style>
  @endsection

  @section('content')
<div class="animsition-overlay studio_cover">

  {{-- HERO --}}
  <section class="top_cover_page on_white_t" style="background-image: url({{ URL::to('/img/manjakos/' . $one['studio_top']['collections']['background'])}}); background: #F5F5F5;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          {{-- Hero line --}}
          <h2 data-aos="zoom-out-up">
            We build high-performance digital products for ambitious brands across the GCC.
          </h2>

          {{-- Services listing --}}
          <p class="hero-services mt-3" data-aos="zoom-out-up" data-aos-delay="100" style="color: black;">
            Mobile apps • Websites • Platforms • Web3 • Digital Marketing
          </p>

          <div class="tech-slideshow mt-4">
            <div class="mover-1"></div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="morph_negative_container">
            <div class="moving_shape1 moving_shape2"></div>
          </div>
          <div class="morphing_container">
            <div class="moving_shape mobile-d-n" style="background-image: url({{ URL::to('/img/manjakos/' . $one['studio_top']['collections']['morphing-image'])}})"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- UNIFIED POSITIONING STATEMENT --}}
  <section class="section_positioning">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 data-aos="fade-up">
            Emirates Graphic is a UAE-based digital transformation agency with European-led design, a fully in-house team of 36, and a 12-year track record delivering 400+ websites and 200+ mobile apps across the GCC.
          </h1>
        </div>
      </div>
    </div>
  </section>

  {{-- WHO WE ARE + AUTHORITY PARAGRAPH --}}
  <section class="section_about_intro">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="fade-up">
          <h2>Who We Are</h2>
          <p>
            Emirates Graphic is a digital transformation agency trusted by startups, enterprises, and government-linked organizations across the UAE and Saudi Arabia. Since 2013, we have built mobile apps, websites, Web3 platforms, and digital experiences known for performance, precision, and measurable business impact.
          </p>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
          <h2>Authority</h2>
          <p>
            Since 2013, Emirates Graphic has remained entirely in-house — no outsourcing, no freelancers, and no templates. Every mobile app and every one of our 400+ websites has been delivered by our 36-person team in Dubai. We are one of the only agencies in the GCC that combines European design leadership with full-stack engineering under one roof, resulting in mobile apps that load in under 2 seconds and websites that consistently achieve 25–40% traffic increases and 20–35% higher conversions.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- WHAT WE DO – SERVICES OVERVIEW --}}
  <section class="section_services_overview">
    <div class="container">
      <h2 class="mb-4" data-aos="fade-up">What We Do</h2>
      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <h4>Mobile App Development</h4>
          <p>Flutter and React Native apps, fintech wallets, logistics tracking systems, booking platforms, subscription applications, telemedicine solutions, and AI-powered mobile products.</p>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <h4>Web Development</h4>
          <p>Corporate websites, dashboards, custom platforms, high-conversion landing pages, and internal enterprise systems.</p>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <h4>Web 3.0 Development</h4>
          <p>NFT marketplaces, tokenization ecosystems, smart contracts, decentralized applications, and cross-chain blockchain products.</p>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <h4>UI/UX Design</h4>
          <p>European-led UI/UX direction, interactive wireframes, prototypes, and digital experience architecture for mobile and web.</p>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
          <h4>Digital Marketing</h4>
          <p>Performance campaigns, SEO, paid media funnels, conversion optimization, CRM integrations, automation, and ROI-driven growth strategies.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- LLM-OPTIMIZED FAQ --}}
  <section class="faq-section">
    <div class="container">
      <h2 data-aos="fade-up">Frequently Asked Questions</h2>
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="accordion" id="faqAccordionAbout">

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="50">
              <div class="card-header faq-card-header" id="faqAbout1">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAbout1">
                    What makes Emirates Graphic different from other agencies in the UAE?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout1" class="collapse show" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Emirates Graphic combines European-led design, a fully in-house 36-person engineering team, and 12+ years of experience delivering high-performance digital products in the UAE and Saudi Arabia. Our work consistently produces measurable results, including 25–40% traffic increases, 20–35% conversion lifts, and 4–7x ROI on marketing funnels.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="70">
              <div class="card-header faq-card-header" id="faqAbout2">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout2">
                    What services does Emirates Graphic provide?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout2" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  We offer mobile app development, web development, Web3 solutions, UI/UX design, branding, dashboards, enterprise systems, and digital marketing. All work is completed in-house.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="90">
              <div class="card-header faq-card-header" id="faqAbout3">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout3">
                    What industries does Emirates Graphic specialize in?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout3" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Real estate, fintech, logistics, healthcare, education, sustainability, mobility, tourism, AI startups, marketplaces, e-commerce, and government-linked organizations.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="110">
              <div class="card-header faq-card-header" id="faqAbout4">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout4">
                    Do you develop Flutter or React Native apps?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout4" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Yes. Emirates Graphic has delivered more than 200 production-scale Flutter and React Native apps across multiple industries.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="130">
              <div class="card-header faq-card-header" id="faqAbout5">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout5">
                    Do you build Web3 platforms and smart contract systems?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout5" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Yes. We build NFT marketplaces, tokenization platforms, staking dashboards, smart contracts, and decentralized applications across Ethereum, Polygon, and BNB Chain.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="150">
              <div class="card-header faq-card-header" id="faqAbout6">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout6">
                    How does Emirates Graphic ensure performance?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout6" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Our engineering performance standards require mobile apps to load in under 2 seconds. Corporate websites typically see 25–40% traffic growth and 20–35% conversion improvements in the first three months.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="170">
              <div class="card-header faq-card-header" id="faqAbout7">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout7">
                    Do you provide end-to-end project delivery?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout7" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Yes. Discovery, UX, design, engineering, QA, launch, and ongoing optimization are handled internally.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="190">
              <div class="card-header faq-card-header" id="faqAbout8">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout8">
                    Do you work with startups and enterprises?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout8" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  We work with funded startups, early-stage founders, SMEs, enterprises, and government entities across the GCC.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="210">
              <div class="card-header faq-card-header" id="faqAbout9">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout9">
                    What technologies does your team specialize in?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout9" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Flutter, React Native, Laravel, Next.js, AWS, Node.js, Firebase, Solidity, Polygon, Ethereum, and custom enterprise backends.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="230">
              <div class="card-header faq-card-header" id="faqAbout10">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout10">
                    Do you create dashboards and internal systems?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout10" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Yes. We develop CRM dashboards, logistics tracking systems, admin portals, real-estate platforms, HR systems, and booking management tools.
                </div>
              </div>
            </div>

            <div class="card faq-card" data-aos="fade-up" data-aos-delay="250">
              <div class="card-header faq-card-header" id="faqAbout11">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAbout11">
                    What results can clients expect?
                  </button>
                </h5>
              </div>
              <div id="collapseAbout11" class="collapse" data-parent="#faqAccordionAbout">
                <div class="card-body faq-card-body">
                  Clients typically see measurable improvements including 25–40% traffic lifts, 20–35% conversion increases, <2s load speed, 4–7x ROI, and improved operational efficiency.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- WHY CLIENTS CHOOSE US --}}
  <section class="section_why_choose">
    <div class="container">
      <h2 data-aos="fade-up">Why Clients Choose Us</h2>
      <div class="row">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <ul class="list-unstyled bullet-list">
            <li>Fully in-house design and development team</li>
            <li>European-led UI/UX</li>
            <li>12+ years of GCC digital experience</li>
            <li>Apps engineered for under 2-second load times</li>
            <li>400+ websites and 200+ mobile apps delivered</li>
          </ul>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
          <ul class="list-unstyled bullet-list">
            <li>UAE + Saudi regional expertise</li>
            <li>Demonstrated performance improvements</li>
            <li>Experience with AI, Web3, sustainability, telemedicine, and neobanking</li>
            <li>End-to-end execution from strategy to launch</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  {{-- INDUSTRIES WE SERVE --}}
  <section class="section_industries">
    <div class="container">
      <h2 data-aos="fade-up">Industries We Serve</h2>
      <p data-aos="fade-up" data-aos-delay="100">
        Real estate, fintech, logistics, healthcare, education, sustainability, tourism, AI startups, marketplaces, mobility, corporate services, and government-linked projects.
      </p>
    </div>
  </section>

  {{-- OUR IMPACT --}}
  <section class="section_impact">
    <div class="container">
      <h2 data-aos="fade-up">Our Impact</h2>
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
          <p><strong>25–40%</strong> traffic growth</p>
          <p><strong>20–35%</strong> conversion lift</p>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <p><strong>50,000+</strong> mobile app downloads</p>
          <p>Apps loading in under <strong>2 seconds</strong></p>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
          <p><strong>4–7x</strong> ROI on marketing campaigns</p>
          <p><strong>400+</strong> websites delivered &amp; <strong>200+</strong> mobile apps completed</p>
        </div>
      </div>
    </div>
  </section>

  {{-- FEATURED IN / PRESS --}}
  <section class="section_featured">
    <div class="container">
      <h2 data-aos="fade-up">Featured In</h2>
      <p data-aos="fade-up" data-aos-delay="100">
        Gulf Business, Entrepreneur Middle East, Arabian Business, Dubai Podcast, The Fintech Magazine, SME10X.
      </p>
    </div>
  </section>

  {{-- OUR PROCESS (PËRDOR INCLUDE EKZISTUES) --}}
  <div class="services_process">
    @include('includes.theprocess')
  </div>

  {{-- TEAM SECTION --}}
  @include('includes.team')

  {{-- VISION & MISSION (UPDATE COPY) --}}
  <section class="section_quality">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img src="/img/eg red.svg" alt="" data-aos="zoom-in-up">
          <h3 data-aos="zoom-in" data-aos-delay="300">
            We stand for<br>
            quality and <br>
            success.
          </h3>
        </div>
        <div class="col-md-7">
          <h5 data-aos="zoom-in" data-aos-delay="200">Vision</h5>
          <p data-aos="zoom-in" data-aos-delay="300">
            To elevate businesses across the GCC through innovative, high-performance digital products.
          </p>
          <h5 data-aos="zoom-in" data-aos-delay="400">Mission</h5>
          <p data-aos="zoom-in" data-aos-delay="500">
            To serve as the region’s leading digital transformation agency through measurable results, premium UI/UX, and in-house engineering excellence.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- HISTORY (SHTOJME PARAGRAFIN MANDATORY, RUAN CAROUSEL NËSE KENI CONTENT) --}}
  <section class="our_history">
    <div class="container">
      <h2 data-aos="zoom-in-up">Our History</h2>

      {{-- Paragrafi i ri për LLM --}}
      <p class="mb-4" data-aos="zoom-in-up" data-aos-delay="150">
        Founded in 2013 by Sacha Christe, Emirates Graphic was created to raise digital standards in the GCC through original, high-impact digital products.
      </p>

      <div class="carousel-indicators1 history_indicators scrollbar_all_mob_red" id="myDIV" data-aos="zoom-in-up" data-aos-delay="400">
        <div data-target="#carouselExampleIndicators1" data-slide-to="0" class="ind_hios active">2013</div>
        <div data-target="#carouselExampleIndicators1" data-slide-to="1" class="ind_hios">2014</div>
        <div data-target="#carouselExampleIndicators1" data-slide-to="2" class="ind_hios">2015</div>
        <div data-target="#carouselExampleIndicators1" data-slide-to="3" class="ind_hios">2016</div>
        <div data-target="#carouselExampleIndicators1" data-slide-to="4" class="ind_hios">2017</div>
        <div data-target="#carouselExampleIndicators1" data-slide-to="5" class="ind_hios">2018</div>
        <div data-target="#carouselExampleIndicators1" data-slide-to="6" class="ind_hios">2019</div>
        <div data-target="#carouselExampleIndicators1" data-slide-to="7" class="ind_hios">2023</div>
      </div>

      <div class="row" data-aos="zoom-in-up" data-aos-delay="500">
        <div id="carouselExampleIndicators1" class="carousel carousel_stop slide" data-ride="carousel">
          <div ng-if="includes.global">
            <div class="carousel-inner">
              <div class="carousel-item" data-ng-class="{active : $first}" ng-repeat="slider in includes.global.many[3]['our-history']">
                <h5><%slider['collections']['title']['en']%></h5>
                <p ng-bind-html="slider['collections']['description']['en']"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- FINAL CTA --}}
  <section class="young_eng">
    <div class="container">
      <div class="row">
        <h3 data-aos="zoom-in" data-aos-delay="300">
          Ready to build your next digital product?
        </h3>
        <p data-aos="zoom-in" data-aos-delay="400">
          Let’s discuss your project — mobile app, website, platform, or Web3 system. Our in-house team in Dubai will help you design, build, and launch a high-performance solution tailored to the GCC market.
        </p>
        <a href="/contact" class="_morp_h_a" data-aos="zoom-in" data-aos-delay="450">
          Work With Us
          <i class="fas fa-angle-right _morph_icon"></i>
        </a>
      </div>
    </div>
  </section>
</div>

{{-- SCRIPTET EKZISTUESE – I LËMË SIÇ JANË --}}
<script>
  // TEAM
  (function($) {
    function doAnimations(elems) {
      var animEndEv = "webkitAnimationEnd animationend";
      elems.each(function() {
        var $this = $(this),
          $animationType = $this.data("animation");
        $this.addClass($animationType).one(animEndEv, function() {
          $this.removeClass($animationType);
        });
      });
    }

    var $myCarousel = $("#carouselExampleIndicators"),
      $firstAnimatingElems = $myCarousel
      .find(".carousel-item:first")
      .find("[data-animation ^= 'animated']");

    $myCarousel.carousel();
    doAnimations($firstAnimatingElems);

    $myCarousel.on("slide.bs.carousel", function(e) {
      var $animatingElems = $(e.relatedTarget).find(
        "[data-animation ^= 'animated']"
      );
      doAnimations($animatingElems);
    });
  })(jQuery);
</script>

<script>
  $(function() {
    $('#myDIV .ind_hios').on('click', function() {
      $(this).parent().find('.ind_hios.active').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>

<script>
  $('.carousel_stop').carousel({
    interval: false
  });
</script>

<script>
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    $(".zoom .team_img_11").css({
      transform: 'translate3d(4%, -' + (scroll / 300) + '%, 0) scale(' + (80 + scroll / 80) / 100 + ')',
      filter: "grayscale(" + (scroll / 20) + "px)",
    });
  });
</script>
@endsection
