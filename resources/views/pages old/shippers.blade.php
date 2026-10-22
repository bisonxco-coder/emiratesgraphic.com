    @extends('index')
    @section('title_and_meta')

    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral shippers_elements_all">

            <div class="shippers_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">SHIPPERS</h5>
                    <h2>Connecting Travelers with Shippers.</h2>
                </div>

                <section class="portfolio_top_parallax_section">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/Live Videosshipp.png" alt="" data-aos="fade-up" data-aos-delay="200">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/shippers_cover.png" alt="">
                    </div>
                </section>
            </div>

            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['shippers-story']['collections']['description']['en']!!}
            </section>

            <section class="three_devices_holder_shippers">
                <div data-aos="fade-up" data-aos-delay="400">
                    <img src="img/portfolio/shippers (1).png" alt="" alt="" class="side_open" >
                    <img src="img/portfolio/shippers (2).png" alt="" alt="" style="z-index: 1;">
                    <img src="img/portfolio/shippers (3).png" alt="" alt="" class="side_open">
                    <div class="moving_shape1" data-rellax-speed="2" data-rellax-zindex="1" data-rellax-percentage="0.3"></div>
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
                            <div class="scope_portfolios" ng-repeat="scope_portfolios in includes.global.many[20]['scope_shippers']">
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
                            <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and development of a mobile application</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Complex verification process to very the identities of the travelers</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Easy tracking of items shipped</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Seamless integration of payments to facilitate transactions for the service</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Mobile  Application<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We developed an app that allows users to create their profiles, browse through hundreds of destinations with items that can be carried by the travelers, as well as a separate interface for individuals to organize and plan their shipments with the travelers.</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="mocups_6ix">
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (9).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (1).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (2).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (3).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (4).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (5).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (6).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (7).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/shippers (8).png" alt="">
                </div>
            </div>

            <section class="testimonial_genereal_portfolio_">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up" data-aos-delay="400">{!!$one['sh-testimonial']['collections']['sh-text']['en']!!}</span>
                    </div>
                </div>
            </section>


            <div class="parallax-container">
                <div class="overlay_parallax_12"></div>
                <section class="portfolio_services3122" style="background-image: url('/img/nxe_modastella.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>{{$one['portfolio-shippers']['collections']['name']['en']}}</h5>
                                <h3>{{$one['portfolio-shippers']['collections']['title']['en']}}</h3>
                                <p>{!!$one['portfolio-shippers']['collections']['description']['en']!!}</p>
                                <a href="{{$one['portfolio-shippers']['collections']['special_url']['en']}}" data-animsition-out-class="overlay-slide-out-top" class="animsition-link">VIEW PROJECT</a>
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Shippers has seen significant growth in many different aspects of their business, especially in the number of users that signed up, the number of items that have been carried by travelers, and the number of trips listed on the platform.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">4000</span><span>+</span>
                            <h6>Users in the first month</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">1500</span><span>+</span>
                            <h6>Items carried</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">500</span><span>+</span>
                            <h6>Destinations listed</h6>
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