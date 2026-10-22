@extends('index') @section('title_and_meta')

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

<title>Mobile App Development Company in Dubai | IOS & Android Apps in UAE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
    content="Emirates Graphic provides professional, web design services in Dubai and is the best solution for high quality responsive website development in national level. We help small businesses achieve fast results through smart and forward thinking online marketing.">
@include('includes.google_scripts')
@endsection @section('content')
<!-- <div class="progress"></div> -->
<div class="animsition-overlay">
    <section class="main_portfolio" data-0="transform: translateX(0%)" data-4000="transform: translateX(-940%)">
        <section class="new_cover">
            <div class="cover_text">
                <h2>Emirates Graphic is a <span>creative agency</span> that builds powerful <span>digital
                        solutions.</span></h2>
                        <a href="https://calendly.com/sacha-emiratesgraphic"><button class="white_extrabtn">Book a Call</button></a>
            </div>
            <div class="canvas">
                <div class="circles">
                    <div class="circle research"></div>
                    <div class="circle design"></div>
                </div>
                <div class="circless">
                    <div class="circle research"></div>
                    <div class="circle design"></div>
                </div>
            </div>
            <div class="view_portfolio">
                <a href="#first_portfolio_order" onclick="scrollWin()">Our Portfolio <img
                        src="/img/home/animation_500_lcpd27mg 1.png"></a>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio wide_portfolios" style="background-color: #4DC2FF;" id="first_portfolio_order">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                <span class="tag" style="background-color: rgb(255 255 255 / 80%); color: black;">
                        Bayan Pay
                    </span>
                    <a href="/bayan-pay"><h2>Revolutionizing payment processes</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">73+ Screens</button></a>
                    </div>
                    <a href="/bayan-pay" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/BayanPay.png" alt="" srcset="">
                </div>
                <div class="phoneholder mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/bayan-pay"><img src="img/home/BayanPay.png" alt="" srcset=""></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #FF9024;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #000000; color: white;">
                        Guide in City
                    </span>
                    <a href="/guide-in-city"><h2 style="color: white;">Experience Dubai in the best way</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">82+ Screens</button></a>
                    </div>
                    <a href="/guide-in-city" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n end " data-aos="fade-up" data-aos-delay="100">
                    <img src="img/portfolio/guide/weqGroup 162728.png" alt="" srcset="" class="u_wide">
                </div>
                <div class="phoneholder end mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/guide-in-city"><img src="img/portfolio/guide/weqGroup 162728.png" alt="" srcset=""
                            class="u_wide"></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #000;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #434343; color: white;">
                        Instaworker
                    </span>
                    <a href="/instaworker"><h2>Matching the Employers with Employees</h2></a>
                    <div class="button_holders">
                        <a href="/instaworker"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="/instaworker"><button class="screens">99+ Screens</button></a>
                    </div>
                    <a href="/instaworker" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder" data-aos="fade-up" data-aos-delay="100">
                <a href="/instaworker"><img src="img/home/instaworkerhome.png" alt="" srcset=""></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #7C3AED;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #7330E4; color: white;">
                        Summit
                    </span>
                    <a href="/summit" ><h2 style="color: white;">Helping Founders Build Startups</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">54+ Screens</button></a>
                    </div>
                    <a href="/summit" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n end " data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/summit.png" alt="" srcset="" class="u_wide">
                </div>
                <div class="phoneholder end mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/summit"><img src="img/home/summit.png" alt="" srcset=""
                            class="u_wide"></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #FF3333;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #ED2020; color: white;">
                        Fidali
                    </span>
                    <a href="/fidali"><h2 style="color: white;">Experience Dubai in the best Way</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">52+ Screens</button></a>
                    </div>
                    <a href="/fidali" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n end " data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/fidali.png" alt="" srcset="" class="u_wide">
                </div>
                <div class="phoneholder end mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/fidali"><img src="img/home/fidali.png" alt="" srcset=""
                            class="u_wide"></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #D7C3FF;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color:rgb(203, 178, 253); color: black;">
                        Famfolio
                    </span>
                    <a href="/famfolio"><h2 style="color: black;">Connecting Chefs and Food Lovers</h2></a>
                    <div class="button_holders">
                        <a href="/famfolio"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="/famfolio"><button class="screens">60+ Screens</button></a>
                    </div>
                    <a href="/famfolio" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder" data-aos="fade-up" data-aos-delay="100">
                <a href="/famfolio"><img src="img/home/famfolio.png" alt="" srcset=""></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #FED000;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #000000; color: white;">
                        XXSIM
                    </span>
                    <a href="/xxsim"><h2 style="color: black;">International Roaming SIM cards</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">58+ Screens</button></a>
                    </div>
                    <a href="/xxsim" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder end desktop-d-n" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/xxsim.png" alt="" srcset="" class="u_wide">
                </div>
                <div class="phoneholder end mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/xxsim"><img src="img/home/xxsim.png" alt="" srcset="" class="u_wide"></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #5066ED;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #171725; color: white;">
                        Community Advisor
                    </span>
                    <a href="/community-advisor"><h2>Bringing Communities Together</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">48+ Screens</button></a>
                    </div>
                    <a href="/community-advisor" class="view_case">View Project <img src="img/home/arrow.png"
                            alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/Community Advisor.png" alt="" srcset="">
                </div>
                <div class="phoneholder mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/community-advisor"><img src="img/home/Community Advisor.png" alt="" srcset=""></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #507DC5;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #6991D1; color: white;">
                        Daska
                    </span>
                    <a href="/daska"><h2 style="color: white;">Connecting 
                    Dog Lovers with Dog Trainers</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">64+ Screens</button></a>
                    </div>
                    <a href="/daska" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n end " data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/daska.png" alt="" srcset="" class="u_wide">
                </div>
                <div class="phoneholder end mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/daska"><img src="img/home/daska.png" alt="" srcset=""
                            class="u_wide"></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #FD5451;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #FD615E; color: white;">
                        Papaya
                    </span>
                    <a href="/papaya"><h2>Save your favorite Restaurants</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">30+ Screens</button></a>
                    </div>
                    <a href="/papaya" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/Papaya.png" alt="" srcset="">
                </div>
                <div class="phoneholder mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/papaya"><img src="img/home/Papaya.png" alt="" srcset=""></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <!-- <section class="wide_portfolio" style="background-color: #000000;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #131313; color: white;">
                        DWISI
                    </span>
                    <h2>Buy & Sell Second Hand Products</h2>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">39+ Screens</button></a>
                    </div>
                    <a href="/dwisi" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/Dwisi.png" alt="" srcset="">
                </div>
            </div>
        </section> -->
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #F47E3A;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #1E355E; color: white;">
                        SmartShip
                    </span>
                    <a href="/smartship"><h2>Innovating the way businesses sell their goods</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">72+ Screens</button></a>
                    </div>
                    <a href="/smartship" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n end" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/smartship.png" alt="" srcset="" class="u_wide">
                </div>
                <div class="phoneholder mobile-d-n end" data-aos="fade-up" data-aos-delay="100">
                    <a href="/smartship"><img src="img/home/smartship.png" alt="" srcset="" class="u_wide"></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio"
            style="background: rgb(81,133,221); background: linear-gradient(180deg, rgba(81,133,221,1) 0%, rgba(80,178,230,1) 35%);">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #4DC2FF; color: white;">
                        Emoji Zone
                    </span>
                    <a href="/emoji-zone"><h2>Meet new Friends</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">55+ Screens</button></a>
                    </div>
                    <a href="/emoji-zone" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/Emoji Zone.png" alt="" srcset="">
                </div>
                <div class="phoneholder mobile-d-n" data-aos="fade-up" data-aos-delay="100">
                    <a href="/emoji-zone"><img src="img/home/Emoji Zone.png" alt="" srcset=""></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <section class="wide_portfolio" style="background-color: #5067EB;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #5E73ED; color: white;">
                        Job Advisor
                    </span>
                    <a href="/job-advisor"><h2>Be Seen, Be Heard, Be Hired</h2></a>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">99+ Screens</button></a>
                    </div>
                    <a href="/job-advisor" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder desktop-d-n end" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/jobadvisor.png" alt="" srcset="" class="u_wide">
                </div>
                <div class="phoneholder mobile-d-n end" data-aos="fade-up" data-aos-delay="100">
                    <a href="/job-advisor"><img src="img/home/jobadvisor.png" alt="" srcset="" class="u_wide"></a>
                </div>
            </div>
        </section>
        <!-- ====================== -->
        <!-- <section class="wide_portfolio" style="background-color: #0062FF;">
            <img src="img/home/Subtraction 1.png" alt="" class="rotatebg">
            <div class="background_wide">
                <div class="txt_holder">
                    <span class="tag" style="background-color: #136EFF; color: white;">
                        WeWrite
                    </span>
                    <h2>Create Something Together</h2>
                    <div class="button_holders">
                        <a href="#"><button class="figma"><img src="img/home/Group 32933.png" alt=""
                                    srcset=""></button></a>
                        <a href="#"><button class="screens">39+ Screens</button></a>
                    </div>
                    <a href="#" class="view_case">View Project <img src="img/home/arrow.png" alt=""></a>
                </div>
                <div class="phoneholder" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/home/Wewrite.png" alt="" srcset="">
                </div>
            </div>
        </section> -->
        <!-- ====================== -->
        <!-- ====================== -->
        <section class="new_contact_section" id="slidebottom">
            <div class="contact_dark_section_new">
                <h5>Let's start a project together</h5>
                <div id="mc_embed_signup">
                    <!-- <form
                        action="https://emiratesgraphic.us16.list-manage.com/subscribe/post?u=4d5bf31cd0d012031c3af0d1d&id=cbd0f44ebf"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                        class="validate"> -->
                    <form name="sentMessage" action="" id="form_contact_main">
                        <div class="input_rows">
                            <label>Full Name</label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Full Name"
                                required>
                            <div class="group">
                                <label>Your Email</label>
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                    placeholder="Email" required>
                            </div>
                            <div class="group">
                                <label>Phone Number</label>
                                <input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4" placeholder="Phone"
                                    required>
                            </div>
                            <label>Website</label>
                            <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3" placeholder="Website">
                            <label>Interested in</label>
                            <select name="interested_in" id="" class="full_width">
                                <option value="" selected disabled>Interested In </option>
                                <option value="Mobile App development">Mobile App development</option>
                                <option value="Web development">Web development</option>
                                <option value="E-commerce Marketing">E-commerce Marketing</option>
                                <option value="Mobile App Marketing">Mobile App Marketing</option>
                                <option value="B2B Marketing">B2B Marketing</option>
                                <option value="Lead Generation">Lead Generation</option>
                                <option value="Prototype">Prototype</option>
                                <option value="Other">Other</option>
                            </select>
                            <label>Message</label>
                            <textarea name="MMERGE2" id="mce-MMERGE2" placeholder="Message" id="" cols="30"
                                rows="3"></textarea>
                        </div>
                        <div class="rows_beta">
                            <!-- <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_4d5bf31cd0d012031c3af0d1d_cbd0f44ebf" tabindex="-1" value="">
                            </div>

                            <div class="clear">
                                <input type="submit" value="Submit" name="subscribe" id="submitmaincontactBtn"
                                    class="button_submit_a">
                            </div> -->
                        </div>
                        <button type="submit" class="button_submit_a" id="submitmaincontactBtn">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer_row_contact_ nd">
                <ul>
                    <li class="new_contact_title">CONTACT DETAILS</li>
                    <li><a href="tel:+971 50 912 4567">Tel: +971 50 912 4567</a></li>
                    <li><a href="mailto:info@emiratesgraphic.com">info@emiratesgraphic.com</a></li>
                </ul>
                <ul>
                    <li class="new_contact_title">CONTACT DETAILS</li>
                    <li>
                        <a href="#"> 35th Floor, Swiss Tower
                            <br>Cluster Y, Jumeirah Lakes Towers
                        </a>
                    </li>
                </ul>
                <div class="contact_icons">
                    <li class="new_contact_title">CONTACT DETAILS</li>
                    <a href="https://web.facebook.com/EmiratesGraphic/"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/designxemirates"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/EMIRATESGRAPHIC/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/5203570/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UC5LT8GrHp8QaLEcw8V1MRbg"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
            <!--End mc_embed_signup-->
        </section>
    </section>
</div>
<style>
    .no_foot_spec {
        display: none !important;
        visibility: hidden !important;
    }
</style>
@endsection