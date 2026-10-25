@extends('index')
@section('title_and_meta')

<title>Fidali | Emiratesgraphic</title>
<meta name="description" content="Connecting Chefs And Food Lovers For A 
Personalized Culinary Experience">

@include('includes.google_scripts')
@endsection
@section('content')
<h1 style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Fidali – UAE Vacation Rental Platform</h1>{{-- 2026-10-25: SEO H1 added (visually hidden, layout unchanged) --}}
<div class="animsition-overlay fidalitheme">
    <div class="portfolio_gen_eral emoji_elements_all">
        <div class="emoji_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name" style="color: white;">FIDALI</h5>
                <h2 style="color: white;">Find your perfect getaway or start
                    hosting amazing stays</h2>
            </div>
            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/fidali (16).png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/fidali (17).png" alt="" style="object-position: top;">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Fidali is a UAE-based vacation rental platform connecting travelers with local hosts.<br>It offers a seamless experience for booking unique stays,<br>providing an alternative to traditional hotels.​</p>
        </section>
        <section class="device_holder_one_portfolio" style="padding: 2% 0px;">
            <img src="img/portfolio/fidali (1).png" alt="">
            <img src="img/portfolio/fidali (18).png" class="rellax mobile_shape_shadow" data-rellax-speed="-0.1" alt="">
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
        <section class="user_experience_portfolio half_corolerd">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Users Mobile<br>App Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Guests can browse listings, book accommodations, and communicate with hosts directly through the user-friendly mobile app. Features include secure payments and real-time booking confirmations.​</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="mocups_6ix nd">
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (19).png" class="mobile_shape_shadow" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (20).png" class="mobile_shape_shadow" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (21).png" class="mobile_shape_shadow" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (22).png" class="mobile_shape_shadow" alt="">
            </div>
        </div>



        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Users Website</h3>
                    </div>
                    <div class="col-md-7">
                        <p>The Fidali website mirrors the app's functionality, allowing users to search for properties, make reservations, and manage bookings with ease from any device.​</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/fidali (7).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/fidali (6).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/fidali (8).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                    <img src="img/portfolio/fidali (9).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>

        <section class="user_experience_portfolio half_corolerd">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Host Mobile
                            <br> App Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Hosts can list properties, manage availability, and respond to inquiries on the go. The app simplifies hosting by providing tools for communication and booking management.​</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="mocups_6ix">
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (11).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (10).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (12).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (13).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (14).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/fidali (15).png" alt="">
            </div>
        </div>



        <section class="user_experience_portfolio down_before_effect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Host Dashboard
                            <br> Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Through the web dashboard, hosts access detailed analytics, track earnings, and update property information. It offers insights to optimize listings and enhance guest experiences.</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/fidali (4).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/fidali (5).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/fidali (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                    <img src="img/portfolio/fidali (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                </div>
            </div>
        </section>


        <section class="the_result_all_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Fidali has achieved impressive milestones:</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">1500</span><span>k</span>
                        <h6>Hosts registered</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">20</span><span>k+</span>
                        <h6>Downloads</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">6</span><span>th</span>
                        <h6>Ranked as trending travel apps in the UAE</h6>
                    </div>
                    <!-- <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Progressively optimize bleeding-edge results for inexpensive synergy. Authoritatively engage client-focused infomediaries and cross-unit applications. Monotonectally strategize long-term high-impact applications after economically.</p>
                    </div> -->
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
                    <a href="https://play.google.com/store/apps/details?id=com.fdli.fidali&hl=en">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/playstore (1).png" alt="" srcset="">
                        </div>
                    </a>
                    <a href="https://apps.apple.com/ae/app/fidali/id6737266483">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/apple.png" alt="" srcset="">
                        </div>
                    </a>
                    <a href="www.fidali.ae">
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