    @extends('index')
    @section('title_and_meta')

    <title>Innovating the way businesses sell their goods. - Emirates Graphic</title>
    <meta name="description" content="SmartShip is an established shipping company located in Saudi Arabia. They help small businesses deliver their goods to customers around the Kingdom using a large and intricate network.">

    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral smart_ship_all">
            <div class="smart_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">SmartShip</h5>
                    <h2>Innovating the way businesses sell their goods.</h2>
                </div>

                <section class="portfolio_top_parallax_section">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/12Live Videos.png" alt="" data-aos="fade-up" data-aos-delay="600">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/G12311roup 808.png" alt="">
                    </div>
                </section>
            </div>

            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['smartship-story']['collections']['sm-description']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/Group 851d08.png" alt="">
                <img src="img/portfolio/Group 71234sd03.png" class="rellax" data-rellax-speed="2.5" data-rellax-zindex="1" alt="">
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
                            <div class="scope_portfolios" ng-repeat="scope_portfolios in includes.global.many[15]['smart_sh_scope']">
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
                            <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Improving user experience on the SmartShip platform</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Adding value to SmartShip users</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Vertical integration into the eCommerce</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="algoritmi_smart">
                <h3>User <br>Experience</h3>
                <div class="container-fluid" style="text-align: center;">
                    <img src="img/portfolio/Grou123p 7.svg" alt="" srcset="" class="algor_s">
                </div>

                <div class="quotes_bay_ desktop-d-n">
                    <div class="pikpresja_morphing">
                        <div class="moving_shape1"></div>
                        <img src="img/portfolio/Live Videos2.png" alt="">
                    </div>
                    <h4>Design adds <br>
                        value faster <br>
                        than it adds <br>
                        costs.</h4>
                </div>
            </div>

            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Web Application<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have added a marketplace function onto the SmartShip platform. The marketplace would allow merchants to sell their products on the SmartShip platform before fulfilling their shipments using SmartShip.</p>
                        </div>
                    </div>
                    <div class="three_screens_lg">
                        <img src="img/portfolio/smart_sh3xp (1).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                        <img src="img/portfolio/smart_sh3xp (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1">
                        <img src="img/portfolio/smart_sh3xp (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
                        <div class="moving_shape1"></div>
                    </div>
                    <div class="quotes_bay_ mobile-d-n">
                        <div class="pikpresja_morphing">
                            <div class="moving_shape1"></div>
                            <img src="img/portfolio/Live Videos2.png" alt="">
                        </div>
                        <h4>Design adds <br>
                            value faster <br>
                            than it adds <br>
                            costs.</h4>
                    </div>
                </div>
            </section>

            <section class="arabic_section_yell al_ra_4mxps">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Sellers<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>SmartShip accomplishes their goals by giving merchants a user-friendly and feature-filled mobile application that allows them to get a product from their home or store to the customer’s doorstep with just a few button clicks.</p>
                        </div>
                    </div>
                    <div class="_phone_holders">
                        <img src="img/portfolio/smsh (1).png" alt="" data-aos="fade-up" data-aos-delay="400" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/smsh (2).png" alt="" data-aos="fade-up" data-aos-delay="300" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/smsh (3).png" alt="" data-aos="fade-up" data-aos-delay="200" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/smsh (4).png" alt="" data-aos="fade-up" data-aos-delay="500" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    </div>
                </div>
            </section>
            <section class="arabic_section_yell al_ra_4mxps">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Buyers<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>The buyer application allows them to purchase products on the SmartShip platform, similar to any e-commerce platform.</p>
                        </div>
                    </div>
                    <div class="_phone_holders">
                        <img src="img/portfolio/buy_inter (1).png" alt="" data-aos="fade-up" data-aos-delay="400" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/buy_inter (2).png" alt="" data-aos="fade-up" data-aos-delay="300" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/buy_inter (3).png" alt="" data-aos="fade-up" data-aos-delay="200" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/buy_inter (4).png" alt="" data-aos="fade-up" data-aos-delay="500" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    </div>
                </div>
            </section>

            <section class="testimonial_genereal_portfolio_">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up" data-aos-delay="500">{!!$one['sm_testimonial']['collections']['description']['en']!!}</span>
                        <img ng-src="/img/131568030916.jpg" data-aos="fade-up" data-aos-delay="600">
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, SmartShip has seen significant growth in many different aspects of their business, especially in the number of orders fulfilled, the number of downloads from users, and the average revenue per shipment.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">300</span><span>%</span>
                            <h6>Increase in orders fullfiled</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">4000 </span><span>+</span>
                            <h6>New users the first week</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">23</span><span>%</span>
                            <h6>Increase in average revenue</h6>
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