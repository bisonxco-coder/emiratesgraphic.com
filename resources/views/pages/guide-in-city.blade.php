@extends('index')
@section('title_and_meta')
<title>GUIDE IN THE CITY</title>
<meta name="description"
    content="Progressively optimize bleeding-edge results for inexpensive synergy. Authoritatively engage client-focused infomediaries and cross-unit applications.">

@include('includes.google_scripts')
@endsection
@section('content')
<h1 style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Guide in the City – Your Pocket City Guide</h1>{{-- 2026-10-25: SEO H1 added (visually hidden, layout unchanged) --}}

<div class="animsition-overlay">
    <div class="portfolio_gen_eral guide_all">

        <div class="guide_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name">GUIDE IN THE CITY</h5>
                <!-- <h2>Your best trip</h2> -->
            </div>

            <section class="portfolio_top_parallax_section" style="background: #FF9024;">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/guide/Live Videos.png" alt="" data-aos="fade-up" data-aos-delay="600">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/guide/valeria-andersson-0IGhARplNzY-unsplash-ai-brush-removebg-a2rdp2wj.png"
                        alt="">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Discover your city like never before. From exclusive offers to top-rated<br>services, our app helps you explore smarter and make<br>better choices—right at your fingertips.

</p>
        </section>

        <section class="device_holder_one_portfolio">
            <img src="img/portfolio/guide/Group 923.png" alt="">
            <!-- <img src="img/portfolio/jobadvisor (1).png" class="rellax mobile_shape_shadow" data-rellax-speed="0" alt=""> -->
            <div class="moving_shape1"></div>
        </section>

        <section class="scope_of_work_general" style="padding-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/portfolio/Gr1oup 806.png" alt="">
                        <h3>Scope<br>of Work</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="scope_portfolios"
                            ng-repeat="scope_portfolios in includes.global.many[20]['scope_shippers']">
                            <h4><%scope_portfolios['collections']['title']['en']%></h4>
                            <p ng-bind-html="scope_portfolios['collections']['description']['en']"></p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/portfolio/guide/Group 919.png" style="width: 100%; margin-bottom: 0px;" alt="" srcset="">
        </section>

        <section class="arabic_section_yell al_ra_4mxps guide_fxmobiles">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Mobile<br>App</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Our smart, user-friendly mobile app is your pocket guide to Dubai. Quickly find your favorite spots, explore new places, and enjoy curated experiences—all in one sleek platform.</p>
                    </div>
                </div>
                <div class="_phone_holders">
                    <img src="img/portfolio/guide/Group 706.png" alt="" data-aos="fade-up" data-aos-delay="400"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/guide/Group 707.png" alt="" data-aos="fade-up" data-aos-delay="300"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/guide/Group 708.png" alt="" data-aos="fade-up" data-aos-delay="200"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/guide/Group 709.png" alt="" data-aos="fade-up" data-aos-delay="500"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                </div>
            </div>
        </section>

        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Website <br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Our website is seamlessly synced with the mobile app to give you a smooth, consistent experience whether you're browsing on your phone, tablet, or desktop.</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/guide/Group 921.png" alt="" srcset="" class="rellax"
                        data-rellax-speed="-0.3">
                    <img src="img/portfolio/guide/Group 922.png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/guide/Group 704.png" alt="" srcset="" class="rellax"
                        data-rellax-speed="0.3">
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>
        <!-- <section class="challenge_section_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2>The<br>Challenge</h2>
                    </div>
                    <div class="col-md-7">
                        <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and
                            development of a user-friendly web platform</p>
                        <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>5 steps registration
                            process for job seekers with an in built CV preview</p>
                        <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Integration of AI to
                            help companies find their ideal candidates based on their recruitments needs</p>
                        <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>
                            Allowing companies to extract contact details, initiate online chat, and conduct interviews
                            with candidates</p>
                        <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Allowing candidates to
                            view the statistics of their profile, and have access to educational and industry updates
                        </p>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="arabic_section_yell al_ra_4mxps guide" style="background-color: #FF9024;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Vendor <br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Vendors have access to a powerful dashboard where they can manage profiles, update services and pricing, track availability, monitor subscriptions, and view key performance analytics.</p>
                    </div>
                </div>
                <div class="_desktop_holders">
                    <img src="img/portfolio/guide/Group 790.png" alt="" data-aos="fade-up" data-aos-delay="300">
                    <img src="img/portfolio/guide/Group 791.png" alt="" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/portfolio/guide/Group 789.png" alt="" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/portfolio/guide/Group 788.png" alt="" data-aos="fade-up" data-aos-delay="300">
                </div>
            </div>
        </section>

        <section class="top_cover_page on_white_t extra_video_section" style="background: #F5F5F5;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 data-aos="zoom-out-up">Launch<br>Event</h3>
                        <div class="tech-slideshow">
                            <div class="mover-1"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="morph_negative_container">
                            <div class="moving_shape1 moving_shape2"></div>
                        </div>
                        <div class="morphing_container">
                            <div class="moving_shape">
                                <button id="openModalBtn"><img src="img/portfolio/guide/Group 920.png" alt=""
                                        srcset=""></button></div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <p data-aos="zoom-in-up" data-aos-delay="350">Following a successful physical launch and a laser-focused digital campaign, Guide In City has hit the ground running:</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">15 </span><span>k</span>
                        <h6>vendors onboarded</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">20,000</span><span>+</span>
                        <h6>Downloads</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">9</span><span>th</span>
                        <h6>Ranked among trending apps</h6>
                    </div>
                    <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build
                        something
                        <i class="fas fa-angle-right _morph_icon"></i></a>
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>

        <!-- The Video Modal -->
        <div id="videoModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <video controls id="videoPlayer">
                    <source src="img/portfolio/guide/guide_video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>
        <section class="test_app_webapp">
            <div class="container">
                <div class="row">
                    <div class="moving_shape1"><img src="img/3d.png" alt="" srcset=""></div>
                    <h3>Test it out</h3>
                    <p>Feel free to explore the project and see how it works in action. Click the links below to test the website or mobile app and experience it for yourself.</p>
                    <a href="https://apps.apple.com/in/app/guide-in-city/id6472698082">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/playstore (1).png" alt="" srcset="">
                        </div>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.app.guideindubai">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/apple.png" alt="" srcset="">
                        </div>
                    </a>
                    <a href="https://www.guideincity.ae/">
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