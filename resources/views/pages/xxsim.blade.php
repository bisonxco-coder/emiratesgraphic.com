    @extends('index')
    @section('title_and_meta')

    <title>Helping Travelers Avoid Roaming Charges - Xxsim</title>
    <meta name="description" content="XXSIM is a company in Switzerland that is looking to digitalize their online processes with Emirates Graphic.">

    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral xxsim_all">

            <div class="xxsim_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">XXSIM</h5>
                    <h2>Helping travelers avoid roaming charges</h2>
                </div>

                <section class="portfolio_top_parallax_section" style="background: #FCCD23;">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/xxsimg_1231 (19).png" alt="" data-aos="fade-up" data-aos-delay="200">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/xxsimg_1231 (20).png" alt="">
                    </div>
                </section>
            </div>

            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['story']['collections']['description']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/xxsimg_1231 (6).png" alt="">
                <img src="img/portfolio/xxsimg_1231 (3).png" class="rellax" data-rellax-speed="2.5" data-rellax-zindex="1" data-rellax-percentage="1" alt="">
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
                            <div class="scope_portfolios" ng-repeat="scope_portfolios in includes.global.many[18]['scope_xxsim']">
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
                            <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete redesign of an outdated website</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Increase the load speed of the platform</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Data migration of more than 30’000 users</p>
                            <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Development of a mobile application while keeping all features</p>
                            <p data-aos="fade-up" data-aos-delay="500"><i class="fas fa-circle"></i>Development of a mobile application while keeping all features</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="arabic_section_yell al_ra_4mxps xxi_ra_4mx">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Mobile Application <br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We developed an app that captured the main features of the website and remaining easy to use when on the move.</p>
                        </div>
                    </div>
                    <div class="_phone_holders">
                        <img src="img/portfolio/xxsimg_1231 (2).png" alt="" data-aos="fade-up" data-aos-delay="400" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/xxsimg_1231 (3).png" alt="" data-aos="fade-up" data-aos-delay="300" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/xxsimg_1231 (4).png" alt="" data-aos="fade-up" data-aos-delay="200" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/xxsimg_1231 (5).png" alt="" data-aos="fade-up" data-aos-delay="500" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    </div>
                </div>
            </section>

            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Web platform<br> Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We streamlined the user experience by splitting the dashboard into a simple and advanced feature variant and by updating the design to be more pleasing and modern. We also got rid of old functions that were not working or adding value.</p>
                        </div>
                    </div>
                    <div class="three_screens_lg">
                        <img src="img/portfolio/xxsimaa (1).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                        <img src="img/portfolio/xxsimaa (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1">
                        <img src="img/portfolio/xxsimaa (4).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
                        <div class="moving_shape1"></div>
                    </div>
                    <div class="quotes_bay_ mobile-d-n">
                        <div class="pikpresja_morphing">
                            <div class="moving_shape1"></div>
                            <img src="img/portfolio/Live Videos2.png" alt="">
                        </div>
                        <h4>It isn't finished<br>
                            until somebody<br>
                            is using it.</h4>
                    </div>
                </div>
            </section>

            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Website<br> Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>Finally, we developed an all-new website, admin panel and migrated the data from the old website to fit into the new architecture.</p>
                        </div>
                    </div>
                    <div class="three_screens_lg">
                        <img src="img/portfolio/xxsimg_1231 (11).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                        <img src="img/portfolio/xxsimg_1231 (12).png" alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1">
                        <img src="img/portfolio/xxsimg_1231 (13).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                        <img src="img/portfolio/xxsimg_1231 (14).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                        <div class="moving_shape1"></div>
                    </div>
                    <!-- <div class="quotes_bay_">            
            <div class="pikpresja_morphing">
                <div class="moving_shape1"></div>
                <img src="img/portfolio/Live Videos2.png" alt="">
            </div>
            <h4>It isn't fini shed<br>
            until somebody<br>
            is using it.</h4>
        </div> -->
                </div>
            </section>


            <section class="live_icons_extra illustration_xxsim">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Illustrations</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have created different types of illustrations to bond users and align it to its existing branding. </p>
                        </div>
                    </div>
                    <div class="row animated_icons">
                        <div class="col-md-4">
                            <img src="/img/1.svg" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="/img/5.svg" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="/img/6.svg" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="/img/2.svg" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="/img/3.svg" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="/img/4.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonial_genereal_portfolio_">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up" data-aos-delay="400">{!!$one['xx_testimonial']['collections']['description']['en']!!}</span>
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, XXSIM has seen significant growth in many different aspects of their business, especially in the number of reloads happening through the platform, the number of SIM cards sold per month, and the increase of conversation on their website.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">500</span><span>+</span>
                            <h6>Reloads per month</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">300</span><span>+</span>
                            <h6>New clients per month</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">40</span><span>%</span>
                            <h6>Increase in conversion</h6>
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