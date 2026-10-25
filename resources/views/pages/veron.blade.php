    @extends('index')
    @section('title_and_meta')
{{-- 2026-10-25: missing title/meta added --}}
<title>Veron Health &amp; Beauty Shopping App | Emirates Graphic</title>
<meta name="description" content="Case study: a mobile shopping app for UAE company Veron, letting fitness fans browse and buy health and beauty products online. By Emirates Graphic.">

    @include('includes.google_scripts')
    @endsection
    @section('content')
<h1 style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Veron – Health &amp; Beauty Shopping App</h1>{{-- 2026-10-25: SEO H1 added (visually hidden, layout unchanged) --}}

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral veron_general">

            <div class="navigation_portfolio_top">
                <h5 class="project_name">Veron</h5>
                <h2>From vitamins to gym supplements, <br>all in one shop.</h2>
            </div>

            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/Live Videos.png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/Group 806.png" alt="" style="z-index: 1;">
                    <div class="moving_shape1" data-rellax-speed="-4" data-rellax-zindex="-1"></div>
                </div>
            </section>


            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['veron-story']['collections']['paragraph']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/4.4.png" alt="">
                <img src="img/portfolio/4.png" class="rellax" data-rellax-speed="-0.5" alt="">
                <div class="moving_shape1"></div>
            </section>

            <section class="scope_of_work_general">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/portfolio/Gr1oup 806.png" alt="">
                            <h3>Scope<br>of Work</h3>
                        </div>
                        <div class="col-md-9">
                            <div class="scope_portfolios" ng-repeat="scope_portfolios in includes.global.many[12]['scope_veron']">
                                <h4><%scope_portfolios['collections']['title']['en']%></h4>
                                <p ng-bind-html="scope_portfolios['collections']['description']['en']"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="challenge_section_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2>The<br>Challenge</h2>
                        </div>
                        <div class="col-md-7">
                            <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and development of a mobile application and web platform</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Simple purchasing process to increase conversions</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Arabic interface to penetrate the GCC market</p>
                            <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Loyalty system to increase fidelity</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>User <br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have designed a wireframe for their project in order to simplify the buying process as much as possible.</p>
                        </div>

                        <section class="arabic_section_yell al_ra_4mxps ext_ra_4mx" style="padding: 5% 0px 0px; background: none;">
                                <div class="_phone_holders">
                                    <img src="img/Group 1740.png" alt="" data-aos="fade-up" data-aos-delay="400">
                                    <img src="img/Group 1741.png" alt="" data-aos="fade-up" data-aos-delay="300">
                                    <img src="img/Group 1742.png" alt="" data-aos="fade-up" data-aos-delay="200">
                                    <img src="img/Group 1740.png" alt="" data-aos="fade-up" data-aos-delay="500">
                                </div>
                        </section>

                        <div class="col-md-12 clowchart_veron mobile-d-n">
                            <div class="pikpresja_morphing">
                                <div class="moving_shape1"></div>
                                <img src="img/portfolio/Live Videos2.png" alt="">
                            </div>
                            <h4>Design creates culture. <br>
                                Culture shapes values. <br>
                                Values determine the future</h4>

                        </div>
                    </div>
                    <div class="moving_shape _njezit_aa" style="background-image: url('../img/portfolio/Image 37.png');"></div>
                </div>
            </section>


            <section class="design_section_veron">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>The<br>Design System</h3>
                        </div>
                        <div class="col-md-7">
                            <p>From the color selection, to the font chosen for the categories, everything matters when it comes to developing a platform that boosts sales.</p>
                        </div>
                        <div class="col-md-12">
                            <img src="img/portfolio/Group 804.png">
                            <img src="img/portfolio/Group 805.png" alt="">
                            <img src="img/portfolio/Group 8061.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="english_language_veron">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>English<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have developed a mobile application that has two separate interfaces in order to facilitate the expansion to GCC countries.</p>
                        </div>
                    </div>
                    <div class="image_holder_english">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <img src="img/portfolio/Group 807s (1).png" alt="">
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200">
                            <img src="img/portfolio/Group 807s (2).png" alt="">
                        </div>
                        <div data-aos="fade-up" data-aos-delay="500">
                            <img src="img/portfolio/Group 807s (3).png" alt="">
                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <img src="img/portfolio/Group 807s (4).png" alt="">
                        </div>
                    </div>
                </div>

                <img src="img/portfolio/Mask Group 4134.png" alt="" srcset="" class="big_mountain_over_mockups">
            </section>

            <section class="arabic_section_yell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Arabic<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>The application is seamlessly integrated with a delivery partner in order to speed up the ordering system.</p>
                        </div>
                    </div>
                    <div class="_phone_holders">
                        <img src="img/portfolio/Group 681.png" alt="" data-aos="fade-up" data-aos-delay="400">
                        <img src="img/portfolio/Group 680.png" alt="" data-aos="fade-up" data-aos-delay="300">
                        <img src="img/portfolio/Group 679.png" alt="" data-aos="fade-up" data-aos-delay="200">
                        <img src="img/portfolio/Group 5.png" alt="" data-aos="fade-up" data-aos-delay="500">
                    </div>
                </div>
            </section>

            <section class="testimonial_genereal_portfolio_ veron_testimonial__">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up" data-aos-delay="400">{!!$one['testimonial']['collections']['text']['en']!!}</span>
                    </div>
                </div>
            </section>

            <section class="device_holder_one_portfolio desktop_de12223">
                <img src="img/portfolio/3.3.png" alt="">
                <div class="moving_shape1"></div>
            </section>

    @include('includes.portfolioslider')
            <section class="the_result_all_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4>
                            <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us
                                <i class="fas fa-angle-right _morph_icon"></i></a>
                        </div>
                        <div class="col-md-9">
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Veron has seen significant growth in many different aspects of their business, especially in the number of users that downloaded the app, the number of products on the platform, and the growth in the number of sales.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">8000</span><span>+</span>
                            <h6>Increase in Sales</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">500</span><span>+</span>
                            <h6>Products</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">10</span><span>k+</span>
                            <h6>Sales</h6>
                        </div>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build something
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                        <div class="moving_shape1"></div>
                    </div>
                </div>
            </section>

            <!-- <section class="test_app_webapp">
                <div class="container">
                    <div class="row">
                        <div class="moving_shape1"><img src="img/3d.png" alt="" srcset=""></div>
                        <h3>Test it out</h3>
                        <p>Since its launch, Veron has seen significant growth in many different aspects of their business, especially in the number of users that downloaded the app, the number of products on the platform, and the growth in the number of sales.</p>
                        <a href="">
                            <div class="download_link_app_portfolio">
                                <img src="/img/portfolio/playstore (1).png" alt="" srcset="">
                            </div>
                        </a>
                        <a href="">
                            <div class="download_link_app_portfolio">
                                <img src="/img/portfolio/apple.png" alt="" srcset="">
                            </div>
                        </a>
                        <a href="">
                            <div class="download_link_app_portfolio">
                                <img src="/img/portfolio/monitor.png" alt="" srcset="">
                            </div>
                        </a>
                    </div>
                </div>
            </section> -->


            @include('includes.go_services')
        </div>
    </div>
    @endsection