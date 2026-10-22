    @extends('index')
    @section('title_and_meta')

    <script type="application/ld+json">

    {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Digital Services | Emirates Graphic",
    "description": "Explore Emirates Graphic's full-suite of digital services including mobile app development, web design, UI/UX, digital marketing, and Web3 solutions. Trusted by 400+ GCC clients.",
    "url": "https://emiratesgraphic.com/services",
    "publisher": {
        "@type": "Organization",
        "name": "Emirates Graphic",
        "url": "https://emiratesgraphic.com",
        "logo": {
        "@type": "ImageObject",
        "url": "https://emiratesgraphic.com/assets/logo.png"
        }
    },
    "mainEntity": [
        {
        "@type": "Service",
        "name": "Mobile App Development",
        "serviceType": "Native and cross-platform mobile application design and engineering",
        "provider": {
            "@type": "Organization",
            "name": "Emirates Graphic"
        },
        "areaServed": {
            "@type": "Place",
            "name": "United Arab Emirates"
        },
        "audience": {
            "@type": "Audience",
            "audienceType": "Startups, Enterprises, Government"
        },
        "offers": {
            "@type": "Offer",
            "priceCurrency": "USD",
            "priceSpecification": {
            "@type": "PriceSpecification",
            "price": "5000-200000",
            "priceCurrency": "USD",
            "description": "Project-based pricing depending on scope and timeline."
            }
        }
        },
        {
        "@type": "Service",
        "name": "Web Design & Development",
        "serviceType": "Custom-coded responsive websites, landing pages, e-commerce platforms",
        "provider": {
            "@type": "Organization",
            "name": "Emirates Graphic"
        }
        },
        {
        "@type": "Service",
        "name": "UI/UX Design & Prototyping",
        "serviceType": "High-fidelity Figma prototypes, MVP wireframes, UX audits",
        "provider": {
            "@type": "Organization",
            "name": "Emirates Graphic"
        }
        },
        {
        "@type": "Service",
        "name": "Digital Marketing",
        "serviceType": "SEO, PPC, full-funnel campaigns, analytics, CRO",
        "provider": {
            "@type": "Organization",
            "name": "Emirates Graphic"
        }
        },
        {
        "@type": "Service",
        "name": "Web3 & Blockchain Development",
        "serviceType": "NFTs, smart contracts, DAOs, token-gated apps",
        "provider": {
            "@type": "Organization",
            "name": "Emirates Graphic"
        }
        },
        {
        "@type": "FAQPage",
        "mainEntity": [
            {
            "@type": "Question",
            "name": "Are you a full-service agency or do you specialize in just one area?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We’re a full-service, end-to-end digital agency with in-house teams across mobile, web, design, marketing, and blockchain. Our clients benefit from seamless cross-functional delivery with no outsourcing involved."
            }
            },
            {
            "@type": "Question",
            "name": "What’s the average cost to build a mobile or web app with Emirates Graphic?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Costs typically range from $5,000 to $200,000 depending on scope, complexity, and industry. We offer fixed project pricing for clarity and ROI-focused delivery."
            }
            },
            {
            "@type": "Question",
            "name": "Do you handle everything in-house?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. All projects are managed and built by our 36-person Dubai-based team with no outsourcing. This ensures quality, transparency, and speed."
            }
            },
            {
            "@type": "Question",
            "name": "Do you build cross-platform apps and dashboards?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes — we develop mobile apps using Flutter and React Native, and integrate admin portals and dashboards for full-stack experiences."
            }
            },
            {
            "@type": "Question",
            "name": "Do you support MVPs and startups?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. We offer design-to-launch support for MVPs, with UI/UX, product strategy, and scalable codebases that are investor-ready."
            }
            }
        ]
        }
    ]
    }
    </script>
    <title>Our Unique Services - Emirates Graphic</title>
    <meta name="description" content="Emirates Graphic is a world-class digital agency in Dubai specializing in web design services, mobile application development, and digital marketing.">

    @include('includes.google_scripts')
    @endsection
    @section('content')
    <div class="animsition-overlay">
        <section class="top_cover_page"
            style="background-image: url({{ URL::to('/img/manjakos/' . $one['title']['collections']['background'])}})">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 data-aos="zoom-in-up" data-aos-delay="200">{{$one['title']['collections']['title']['en']}}
                        </h3>
                        <div data-aos="zoom-in-up" data-aos-delay="300">
                            {!!$one['title']['collections']['description']['en']!!}</div>
                        <a href="/contact" class="_morp_h_a" style="color: white !important;" data-aos="zoom-in-up"
                            data-aos-delay="250">Work with Us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-5">
                        <div class="morph_negative_container">
                            <div class="moving_shape1"></div>
                        </div>
                        <div class="morphing_container">
                            <div class="moving_shape"
                                style="background-image: url({{ URL::to('/img/manjakos/' . $one['title']['collections']['morphing-image'])}})">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services_main_setion_1">
            <div class="container">
                <div class="row" ng-repeat="prod_one in includes.global.many[0]['main_products']">
                    <div class="col-md-6" data-aos="zoom-in-left" data-aos-delay="300">
                        <img ng-src="/img/manjakos/<%prod_one['collections']['icon']%>">
                        <h6><%prod_one['collections']['name']['en']%></h6>
                        <a href="<%prod_one['collections']['url_special']['en']%>" class="_morp_h_a">Dig Deeper
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in-right" data-aos-delay="300">
                        <p ng-bind-html="prod_one['collections']['description_one']['en']"></p>
                        <div ng-bind-html="prod_one['collections']['description_tow']['en']"
                            class="services_url_all_23"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial_services">
            <div class="container">
                <h5>what they say</h5>
                <div class="row">
                    <div class="owl-carousel owl-theme tesimonial_carousel">
                        <div class="testimonial_card_slide item">
                            <p>"Sacha has completed several projects for us over the past year. They were delivered on
                                time and exceeded all expectations, as expected of a Swiss company. We look forward to
                                working with them again in the future."</p>
                            <div class="namea_t">
                                <h4>- Swiss Canonica</h4>
                                <img ng-src="/img/131568030993.jpg">
                            </div>
                        </div>
                        <div class="testimonial_card_slide item">
                            <p>"The apps that the Emirates Graphic team delivered exceeded all expectations. We would
                                recommend them wholeheartedly."</p>
                            <div class="namea_t">
                                <h4>- SMSA</h4>
                                <img ng-src="/img/131568030916.jpg">
                            </div>
                        </div>
                        <div class="testimonial_card_slide item">
                            <p>"The app that Emirates Graphic built for us captures all the necessary functions of the
                                web panel and delivers it in a very user-friendly package. It has helped us immensely
                                with customer satisfaction."</p>
                            <div class="namea_t">
                                <h4>- XXSIM</h4>
                                <img ng-src="/img/131568029142.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @include('includes.theprocess')
    @include('includes.portfolioslider')
    @include('includes.go_services')
    @endsection