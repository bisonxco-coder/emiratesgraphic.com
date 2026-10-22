@extends('index')
@section('title_and_meta')

@include('includes.google_scripts')
@endsection
@section('content')

<div class="animsition-overlay">
    <div class="portfolio_gen_eral xxsim_all maison_des">

        <div class="xxsim_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name">MAISON DES FLEURS</h5>
                <h2>Find your ideal flower arrangement, <br>and make someone feel special </h2>
            </div>
            <section class="portfolio_top_parallax_section" style="background: #EDE8E2;">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/M4ask Group 50.png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/Mask Group 48.png" alt="">
                </div>
            </section>
        </div>

        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Maison Des Fleurs is a company that was looking to digitalize <br>their processes by building a
                user-friendly eCommerce that allows <br>clients to browse through a vast selection of flower
                arrangements, customize their <br>orders with various gift sets, select time slots for delivery, and
                have <br>their order delivered to their desired address within hours.

            </p>
        </section>

        <section class="device_holder_one_portfolio">
            <img src="img/portfolio/Group 7385.png" alt="" style="margin-right: 0px; margin-top: 1%;">
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
                        <div class="scope_portfolios"
                            ng-repeat="scope_portfolios in includes.global.many[18]['scope_xxsim']">
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
                        <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and
                            development of a user-friendly eCommerce</p>
                        <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Implementation of AI to
                            showcase relevant products based on previous selection</p>
                        <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Simple checkout process
                            to increase conversions</p>
                        <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Loyalty system to
                            increase fidelity</p>
                        <p data-aos="fade-up" data-aos-delay="500"><i class="fas fa-circle"></i>Ability to duplicate the
                            store and its inventory for expansion purposes</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="arabic_section_yell al_ra_4mxps xxi_ra_4mx">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Mobile <br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>We have developed a mobile-friendly eCommerce to enhance the user experience, as well as
                            facilitating the check-out process for its customers.</p>
                    </div>
                </div>
                <div class="_phone_holders">
                    <img src="img/portfolio/31mod (1).png" alt="" data-aos="fade-up" data-aos-delay="400"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/31mod (2).png" alt="" data-aos="fade-up" data-aos-delay="300"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/31mod (3).png" alt="" data-aos="fade-up" data-aos-delay="200"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/31mod (4).png" alt="" data-aos="fade-up" data-aos-delay="500"
                        class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                </div>
            </div>
        </section>

        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Desktop<br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>The website was designed and developed using AI to showcase selected products based on a
                            previous search, as well as trending items based on specific occasions.</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/mod11 (1).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/mod11 (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/mod11 (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
                    <img src="img/portfolio/mod11 (4).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3"
                        data-rellax-zindex="1">
                    <div class="moving_shape1"></div>
                </div>
                <!-- <div class="quotes_bay_ mobile-d-n">
                        <div class="pikpresja_morphing">
                            <div class="moving_shape1"></div>
                            <img src="img/portfolio/Live Videos2.png" alt="">
                        </div>
                        <h4>It isn't finished<br>
                            until somebody<br>
                            is using it.</h4>
                    </div> -->
            </div>
        </section>

        <section class="testimonial_genereal_portfolio_">
            <div class="container">
                <div class="row">
                    <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                    <p data-aos="fade-up" data-aos-delay="500">Our website had tremendous success and was well received
                        from our existing customers, we are excited to continue our marketing initiatives to further
                        grow our business in the region</p>
                </div>
            </div>
        </section>

        <div class="parallax-container">
            <div class="overlay_parallax_12"></div>
            <section class="portfolio_services3122" style="background-image: url('/img/shippers_a.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h5>Smartship</h5>
                            <h3>Innovating the way businesses sell their goods</h3>
                            <p>SmartShip is a platform that aims to facilitate the shipping and delivery process for
                                merchants in the MENA region</p>
                            <a href="/smartship" data-animsition-out-class="overlay-slide-out-top"
                                class="animsition-link">VIEW PROJECT</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <section class="the_result_all_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Maison Des Fleurs has seen
                            significant growth in many different aspects of their business, especially in the increase
                            in conversions, the number of daily traffic, as well as the increase of repeating customers.
                        </p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">180</span><span>%</span>
                        <h6>Increase in conversion</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">3000</span><span>+</span>
                        <h6>Daily Traffic</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">40</span><span>%</span>
                        <h6>Increase in retention</h6>
                    </div>
                    <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build
                        something
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
                        <p>Progressively optimize bleeding-edge results for inexpensive synergy. Authoritatively engage client-focused infomediaries and cross-unit applications.</p>
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