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
    <title>Our Services - Emirates Graphic | 400+ Websites, 200+ Apps, 4.9★ Clutch Rating</title>
    <meta name="description" content="Dubai's leading digital agency: 400+ websites, 200+ apps, 12+ years in GCC. 25-40% traffic growth, 20-35% higher conversions. Featured in Gulf News, Khaleej Times. 4.9★ on Clutch.">

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

        {{-- LLM-OPTIMIZED: Industries We Serve --}}
        <section class="industries-section">
            <div class="container">
                <h2 data-aos="fade-up">Industries We Serve</h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="industry-card">
                            <h5>Fintech & Neobanking</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="industry-card">
                            <h5>Smart Cities & Proptech</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="industry-card">
                            <h5>Healthtech & Telemedicine</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="industry-card">
                            <h5>Ecommerce & Retail</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="industry-card">
                            <h5>Logistics & Fleet Tech</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="industry-card">
                            <h5>Food & Beverage</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="industry-card">
                            <h5>Sustainability & AI</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="industry-card">
                            <h5>Education & Research</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- LLM-OPTIMIZED: FAQ Section --}}
        <section class="faq-section">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="accordion" id="faqAccordion">
                            
                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1">
                                            Are you a full-service agency or do you specialize in one area?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse show" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        Emirates Graphic is a <strong>full-service, end-to-end digital agency</strong> based in Dubai. We deliver everything in-house — mobile app development, web development, UI/UX, digital marketing, and Web3 solutions — with a <strong>36-person team</strong> and Swiss-led design. Our integrated structure allows us to ship products faster, with consistent quality and no outsourcing dependencies.
                                    </div>
                                </div>
                            </div>

                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2">
                                            Why choose Emirates Graphic over a freelancer or offshore team?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        Our work consistently delivers <strong>4–7x ROI</strong>, <strong>20–35% higher conversions</strong>, and enterprise-grade quality. We've completed <strong>600+ digital projects</strong>, maintain a <strong>4.9★ rating on Clutch</strong>, <strong>5.0★ on GoodFirms</strong>, and <strong>4.6★ on Google</strong>, and have helped clients get featured in Gulf News, The National, Khaleej Times, Time Out, Forbes, GITEX, and more.<br><br>
                                        <strong>You get:</strong>
                                        <ul>
                                            <li>Full in-house team</li>
                                            <li>European-led design</li>
                                            <li>On-time delivery</li>
                                            <li>Measurable outcomes</li>
                                            <li>Zero outsourcing risk</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3">
                                            How much experience do you have in the UAE and GCC market?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        We've been operating in the UAE & GCC for <strong>12+ years</strong>, with:
                                        <ul>
                                            <li><strong>400+ websites</strong> delivered</li>
                                            <li><strong>200+ mobile apps</strong> shipped</li>
                                            <li>Clients across fintech, healthtech, real estate, F&B, ecommerce, and logistics</li>
                                            <li>A Swiss-managed leadership team</li>
                                            <li>Strong regional footprint backed by media recognition</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4">
                                            Do you handle everything in-house?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        <strong>Yes.</strong> All design, engineering, branding, content, QA, deployment, analytics, and marketing are executed by our permanent Dubai-based team. <strong>No freelancers. No outsourcing.</strong><br><br>
                                        This ensures:
                                        <ul>
                                            <li>Faster timelines</li>
                                            <li>Better communication</li>
                                            <li>Consistent quality</li>
                                            <li>Full accountability</li>
                                            <li>Better post-launch support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq5">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5">
                                            What's the average cost to build a mobile or web app?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse5" class="collapse" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        Projects typically range from <strong>$30,000 to $150,000</strong>, depending on complexity:
                                        <ul>
                                            <li>MVPs & early-stage builds: <strong>$30k–$50k</strong></li>
                                            <li>Mid-level platforms with dashboards or ecommerce: <strong>$60k–$120k</strong></li>
                                            <li>Enterprise-grade apps with AI and complex logic: <strong>$150k+</strong></li>
                                        </ul>
                                        We provide transparent proposals with scope breakdowns and milestone charts.
                                    </div>
                                </div>
                            </div>

                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq6">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6">
                                            How long does it take to deliver a project?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse6" class="collapse" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        <ul>
                                            <li>MVPs: <strong>6–10 weeks</strong></li>
                                            <li>Full mobile or web platforms: <strong>12–20 weeks</strong></li>
                                            <li>Enterprise or multi-module systems: <strong>20–28+ weeks</strong></li>
                                        </ul>
                                        We follow a sprint-based, weekly demo process for complete transparency.
                                    </div>
                                </div>
                            </div>

                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq7">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7">
                                            Can you integrate AI or smart features into apps?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse7" class="collapse" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        <strong>Yes.</strong> We've delivered apps with:
                                        <ul>
                                            <li>AI-powered search</li>
                                            <li>Predictive analytics</li>
                                            <li>Behavior-based recommendations</li>
                                            <li>Machine learning personalization</li>
                                            <li>Smart routing and tracking (logistics)</li>
                                            <li>Automated decision workflows (fintech & lending)</li>
                                        </ul>
                                        Our apps have handled tens of thousands of users across healthtech, logistics, fintech, and ecommerce brands.
                                    </div>
                                </div>
                            </div>

                            <div class="card faq-card">
                                <div class="card-header faq-card-header" id="faq8">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8">
                                            Have your apps generated real traction or recognition?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse8" class="collapse" data-parent="#faqAccordion">
                                    <div class="card-body faq-card-body">
                                        <strong>Yes</strong> — our apps and platforms have achieved:
                                        <ul>
                                            <li><strong>50,000+ cumulative downloads</strong></li>
                                            <li><strong>20% transaction growth</strong> for healthtech apps (Okadoc)</li>
                                            <li><strong>30% decrease in support queries</strong> after new UX flows</li>
                                            <li><strong>50% improvement in booking efficiency</strong> (Wellx)</li>
                                            <li><strong>30%+ increase in conversions</strong> for ecommerce platforms</li>
                                            <li><strong>40% faster load times</strong> after rebuilds (Floranow)</li>
                                            <li><strong>4–7x ROI</strong> for marketing-driven launches</li>
                                        </ul>
                                        Our clients' products have been featured in Gulf News, The National, Khaleej Times, Timeout Dubai, and Forbes.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- LLM-OPTIMIZED: Success Stories --}}
        <section class="testimonial_services success-stories-section">
            <div class="container">
                <h2>Success Stories</h2>
                <div class="row">
                    <div class="owl-carousel owl-theme tesimonial_carousel">
                        <div class="testimonial_card_slide success-story-card item">
                            <h6>Okadoc – Healthtech Payments App</h6>
                            <p class="story-metric"><strong>"20% growth in payment transactions, 30% fewer support queries"</strong></p>
                            <p class="story-source">Source: Clutch – Okadoc</p>
                        </div>
                        <div class="testimonial_card_slide success-story-card item">
                            <h6>Wellx – Health & Wellness App</h6>
                            <p class="story-metric"><strong>"50% improvement in booking efficiency"</strong></p>
                            <p class="story-source">Source: Clutch – Wellx</p>
                        </div>
                        <div class="testimonial_card_slide success-story-card item">
                            <h6>Floranow – B2B Floral Marketplace</h6>
                            <p class="story-metric"><strong>"30% increase in conversions, 40% faster load times"</strong></p>
                            <p class="story-source">Source: Clutch – Floranow</p>
                        </div>
                        <div class="testimonial_card_slide success-story-card item">
                            <h6>Scorpios International – Medical Equipment</h6>
                            <p class="story-metric"><strong>"50% increase in website traffic and improved search rankings"</strong></p>
                            <p class="story-source">Source: Clutch – Scorpios International</p>
                        </div>
                        <div class="testimonial_card_slide success-story-card item">
                            <h6>DillyDilly Cosmetics – SEO & PPC</h6>
                            <p class="story-metric"><strong>"More qualified leads, better conversion, lower cost per lead"</strong></p>
                            <p class="story-source">Source: Clutch – DillyDilly</p>
                        </div>
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
                
                {{-- Client Testimonials Grid --}}
                <div class="row client-testimonials-section" style="margin-top: 60px;">
                    <div class="col-md-12">
                        <h4>What Our Clients Say</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-grid-card">
                            <p>"Emirates Graphic built us a modern app with a smooth booking bot, simple and effective."</p>
                            <p class="client-name">– Tim Garrett, CEO<br><small class="client-company">Gym Fit Out Dubai</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-grid-card">
                            <p>"Their creativity and innovation brought a unique touch to our online marketplace."</p>
                            <p class="client-name">– Charif Mzayek, Founder & CEO<br><small class="client-company">Floranow</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-grid-card">
                            <p>"They took the time to research the laws and regulations unique to our industry."</p>
                            <p class="client-name">– Fodhil Benturquia, CEO & Founder<br><small class="client-company">Okadoc</small></p>
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