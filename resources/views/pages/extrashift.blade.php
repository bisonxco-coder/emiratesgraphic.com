    @extends('index')
    @section('title_and_meta')

    <title>Extrashift - Seamlessly
Finding Shifts And Shifters</title>
    <meta name="description" content="Extrashift is a company in United Kingdom that is looking
to revolutionize the hospitality industry by developing a mobile
application that connects part-time workers with shifts in
thousands of venues worldwide using an Uber-type model. Made By Emirates Graphic">

    @include('includes.google_scripts')
    @endsection
    @section('content')
    <div class="animsition-overlay">
        <div class="portfolio_gen_eral extrashift_all">

            <div class="extrashift_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">EXTRASHIFT</h5>
                    <h2>Seamlessly<br> finding shifts and shifters</h2>
                </div>

                <section class="portfolio_top_parallax_section" style="background: #CE455C;">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/L4311ive Videos.png" alt="" data-aos="fade-up" data-aos-delay="200">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/Mas1233k Group 42.png" alt="">
                    </div>
                </section>
            </div>

            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['extra_story']['collections']['description']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/extrand1 (2).png" alt="">
                <img src="img/portfolio/extrand1 (1).png" class="rellax" data-rellax-speed="1.5" data-rellax-zindex="1" alt="">
                <div class="moving_shape1"></div>
            </section>

            <section class="scope_of_work_general mobile_app_edition">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/portfolio/smartphone.png" alt="">
                            <h3>Scope<br>of Work</h3>
                        </div>
                        <div class="col-md-9">
                            <div class="scope_portfolios" ng-repeat="scope_portfolios in includes.global.many[17]['extra_scope']">
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
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Separate intuitive interfaces for shifters and venues</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Uber-type model to connect both interfaces using specific algorithms</p>
                            <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Seamless payment integration and rating system to build a strong community</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="arabic_section_yell al_ra_4mxps ext_ra_4mx">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Shifters<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We developed an app that allows shifters to create their profiles, access countless opportunities, keep track of their earnings, and get their strong reputation among the hospitality industry.</p>
                        </div>
                    </div>
                    <div class="_phone_holders">
                        <img src="img/portfolio/extrashift_4xd (1).png" alt="" data-aos="fade-up" data-aos-delay="400" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/extrashift_4xd (2).png" alt="" data-aos="fade-up" data-aos-delay="300" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/extrashift_4xd (3).png" alt="" data-aos="fade-up" data-aos-delay="200" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/extrashift_4xd (4).png" alt="" data-aos="fade-up" data-aos-delay="500" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    </div>
                </div>
            </section>

            <section class="arabic_section_yell al_ra_4mxps ext_ra_4mx2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Venues<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We developed a separate interface for the venues that allows them to create their profiles, improve their services by hiring the right part-time workers for specific occasions, and have tangible proof of the shifters experience through previous ratings.</p>
                        </div>
                    </div>
                    <div class="_phone_holders">
                        <img src="img/portfolio/extrashift_4xd2 (1).png" alt="" data-aos="fade-up" data-aos-delay="400" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/extrashift_4xd2 (2).png" alt="" data-aos="fade-up" data-aos-delay="300" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/extrashift_4xd2 (3).png" alt="" data-aos="fade-up" data-aos-delay="200" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/extrashift_4xd2 (4).png" alt="" data-aos="fade-up" data-aos-delay="500" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    </div>
                </div>
            </section>

            <section class="live_icons_extra">
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
                            <img src="/img/portfolio/314488i (3).png" alt="">
                            <h4>Seamlessly<br> Find Shifters</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/portfolio/314488i (2).png" alt="">
                            <h4>Select<br>and Hire</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/portfolio/314488i (1).png" alt="">
                            <h4>get response<br>in 24 hours</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/portfolio/314488i (4).png" alt="">
                            <h4>Seamlessly<br>Find Shifts</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/portfolio/314488i (5).png" alt="">
                            <h4>have your own<br>profile</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/portfolio/314488i (6).png" alt="">
                            <h4>choose when<br>you want to work</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonial_genereal_portfolio_">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up" data-aos-delay="400">{!!$one['testimonial_extra']['collections']['description']['en']!!}</span>
                    </div>
                </div>
            </section>

            <!-- <div class="parallax-container"><div class="overlay_parallax_12"></div>
                <section class="portfolio_services3122" style="background-image: url('/img/Gro12aaup 810.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>{{$one['extra_portfolio']['collections']['name']['en']}}</h5>
                                <h3>{{$one['extra_portfolio']['collections']['title']['en']}}</h3>
                                <p>{!!$one['extra_portfolio']['collections']['description']['en']!!}</p>
                                <a href="{{$one['extra_portfolio']['collections']['special_url']['en']}}" data-animsition-out-class="overlay-slide-out-top" class="animsition-link">VIEW PROJECT</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div> -->
            
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Extrashift has seen significant growth in many different aspects of their business, especially in the number of venues that signed up, the number of shifters that created their profiles, and the number of transactions that happened through the platform.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">3000</span><span>+</span>
                            <h6>Restaurant owners</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">10</span><span>k+</span>
                            <h6>Shifters </h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">300</span><span>k+</span>
                            <h6>Transactions to date</h6>
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