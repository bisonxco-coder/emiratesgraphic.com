@extends('index')
@section('title_and_meta')

<title>Make New Friends With Common Interests, Chat With Them And Invite Them</title>
<meta name="description"
    content="Emoji Zone allows users to invite friends, family and co-workers to restaurants, events, sport events, cinema and anywhere else">

@include('includes.google_scripts')
@endsection
@section('content')
<h1 style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Emoji Zone – Invite Friends to Places &amp; Events</h1>{{-- 2026-10-25: SEO H1 added (visually hidden, layout unchanged) --}}
<div class="animsition-overlay">
    <div class="portfolio_gen_eral emoji_elements_all">
        <div class="emoji_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name" style="color: white;">Emoji zone</h5>
                <h2 style="color: white;">Make New Friends With Common Interests, Chat With Them And Invite Them</h2>
            </div>
            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/emoji-big-cover.png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/duy-pham-Cecb0_8Hx-o-unsplash-removebg.png" alt=""
                        style="object-position: top;">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Emoji Zone allows users to invite friends, family and co-<br>workers to restaurants, events, sport
                events, cinema and<br>anywhere else</p>
        </section>
        <section class="three_devices_holder_shippers">
            <div data-aos="fade-up" data-aos-delay="400">
                <img src="img/portfolio/emojizone  (11).png" alt="" alt="" class="side_open">
                <img src="img/portfolio/emojizone  (10).png" alt="" alt="" style="z-index: 1;">
                <img src="img/portfolio/emojizone  (12).png" alt="" alt="" class="side_open">
                <div class="moving_shape1" data-rellax-speed="2" data-rellax-zindex="1" data-rellax-percentage="0.3">
                </div>
            </div>
        </section>

        <section class="scope_of_work_general">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/portfolio/Gr1oup 806.png" alt="">
                        <h3>Scope<br>of Work</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="scope_portfolios"
                            ng-repeat="scope_portfolios in includes.global.many[32]['emoji-scope']">
                            <h4><%scope_portfolios['collections']['title']['en']%></h4>
                            <p ng-bind-html="scope_portfolios['collections']['description']['en']"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Mobile Application<br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>The interface of the mobile application allows users search for people, places, events and
                            businesses, check in to favorite places and make new friends with common interests, chat
                            with them and invite them.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="mocups_6ix">
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (1).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (2).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (3).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (4).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (5).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (6).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (7).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (8).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/emojizone  (9).png" alt="">
            </div>
        </div>
        <!-- <section class="testimonial_genereal_portfolio_">
            <div class="container">
                <div class="row">
                    <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                    <span data-aos="fade-up" data-aos-delay="400">
                        <p>Sacha and his team have worked on several projects for me over the past 2 years. They have
                            managed to exceed my expectations, as well as helping me along the way to grow my
                            businesses. I look forward to continuing our business relationship in the years to come.</p>
                    </span>
                </div>
            </div>
        </section> -->
        <div style="background: rgb(245 245 245 / 62%); padding: 1% 0px 3%;">
            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Landing
                                Page</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have developed a landing page to increase mobile application conversions, and showcase
                                it’s main features.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="device_holder_one_portfolio" style="padding: 2% 0px;">
                <img src="img/portfolio/emoji-desktop.png" alt="">
                <!-- <img src="img/portfolio/dwisipc2 (1).png" class="rellax mobile_shape_shadow" data-rellax-speed="-0.1"
                    alt=""> -->
            </section>
        </div>

        <!-- <div class="parallax-container">
            <div class="overlay_parallax_12"></div>
            <section class="portfolio_services3122" style="background-image: url('/img/Mask G22roup 51.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h5>Maison des Fleurs</h5>
                            <h3>Flowers At <br>Your Doorstep</h3>
                            <p>Maison Des Fleurs offers a wide range of beautiful flower arrangements for all types of
                                celebration.</p>
                            <a href="/maison-des-fleurs" data-animsition-out-class="overlay-slide-out-top"
                                class="animsition-link">VIEW PROJECT</a>
                        </div>
                    </div>
                </div>
            </section>
        </div> -->

        <section class="the_result_all_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Progressively optimize bleeding-edge results for
                            inexpensive synergy. Authoritatively engage client-focused infomediaries and cross-unit
                            applications. Monotonectally strategize long-term high-impact applications after
                            economically.</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">200</span><span>+</span>
                        <h6>Shops created in the first 60 days</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">2</span><span>k+</span>
                        <h6>product relevant searches</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">1</span><span>K+</span>
                        <h6>items sold</h6>
                    </div>
                    <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build
                        something
                        <i class="fas fa-angle-right _morph_icon"></i></a>
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>

    @include('includes.portfolioslider')
        <section class="test_app_webapp">
            <div class="container">
                <div class="row">
                    <div class="moving_shape1"><img src="img/3d.png" alt="" srcset=""></div>
                    <h3>Test it out</h3>
                    <p>Feel free to explore the project and see how it works in action. Click the links below to test the website or mobile app and experience it for yourself.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.app.dwisi">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/playstore (1).png" alt="" srcset="">
                        </div>
                    </a>
                    <a href="https://apps.apple.com/ae/app/dwisi/id6443699204">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/apple.png" alt="" srcset="">
                        </div>
                    </a>
                    <a href="https://www.dwisi.ae/">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/monitor.png" alt="" srcset="">
                        </div>
                    </a>
                </div>
            </div>
        </section>
        @include('includes.go_services')
    </div>
</div>
@endsection