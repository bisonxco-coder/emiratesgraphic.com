    @extends('index')
    @section('title_and_meta')

    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral dinesouq_all">

            <div class="dinesouq_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">DINESOUQ</h5>
                    <h2>Connecting Restaurants with Customers</h2>
                </div>

                <section class="portfolio_top_parallax_section" style="background: #FF9494;">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/Live Videosdines.png" alt="" data-aos="fade-up" data-aos-delay="600">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/dinesouq1 (2).png" alt="">
                    </div>
                </section>
            </div>


            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['dinesouq-story']['collections']['description']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/d_mok_desk (6).png" alt="">
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
                                ng-repeat="scope_portfolios in includes.global.many[16]['store_scope']">
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
                                development of a user-friendly web platform</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Integration with
                                Google to showcase restaurants in your area</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Seamless
                                synchronization with the restaurants and their booking systems</p>
                            <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Creation of a smart
                                loyalty program to increase engagement</p>
                        </div>
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
                            <p>We have developed a website where users can browse through the different categories of
                                restaurants, check the timings and discounts available, and book their tables
                                accordingly.</p>
                        </div>
                    </div>
                    <div class="three_screens_lg">
                        <img src="img/portfolio/d_mok_desk (2).png" alt="" srcset="" class="rellax"
                            data-rellax-speed="-0.3">
                        <img src="img/portfolio/d_mok_desk (4).png" alt="" srcset="" class="rellax"
                            data-rellax-speed="0" data-rellax-zindex="1">
                        <img src="img/portfolio/d_mok_desk (5).png" alt="" srcset="" class="rellax"
                            data-rellax-speed="0.3">
                        <img src="img/portfolio/d_mok_desk (3).png" alt="" srcset="" class="rellax"
                            data-rellax-speed="0.3">
                        <div class="moving_shape1"></div>
                    </div>
                </div>
            </section>

            <section class="arabic_section_yell al_ra_4mxps">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>User<br> Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have developed a web application where users can keep track of their reservations,
                                have access to their promo codes, and collect loyalty points.</p>
                        </div>
                    </div>
                    <div class="_desktop_holders">
                        <img src="img/portfolio/d_mok_desk (8).png" alt="" data-aos="fade-up" data-aos-delay="300">
                        <img src="img/portfolio/d_mok_desk (7).png" alt="" data-aos="fade-up" data-aos-delay="200">
                        <img src="img/portfolio/d_mok_desk (9).png" alt="" data-aos="fade-up" data-aos-delay="200">
                        <img src="img/portfolio/d_mok_desk (10).png" alt="" data-aos="fade-up" data-aos-delay="300">
                        <img src="img/portfolio/d_mok_desk (1).png" alt="" data-aos="fade-up" data-aos-delay="200">
                        <img src="img/portfolio/d_mok_desk (11).png" alt="" data-aos="fade-up" data-aos-delay="300">
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, DineSouq has seen
                                significant growth in many different aspects of their business, especially in the number
                                of users that signed up, the number of reservations that have been placed, and the
                                number of restaurants listed on the platform.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">5000 </span><span>%</span>
                            <h6>Users in the first month</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">18</span><span>k+</span>
                            <h6>Reservations</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">250</span><span>+</span>
                            <h6>Restaurants</h6>
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