    @extends('index')
    @section('title_and_meta')

    <title>Defining The Future Of Digital Payments In Saudi Arabia.</title>
    <meta name="description" content="BayanPay is a company in Saudi Arabia that is
looking to revolutionize how people pay for products
and transfer money. Made By Emirates Graphic">

    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral bayan_elements_all">

            <div class="bayanpay_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">BAYANPAY</h5>
                    <h2>Defining the future of digital payments in Saudi Arabia.</h2>
                </div>

                <section class="portfolio_top_parallax_section">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/Liv2e Videos.png" alt="" data-aos="fade-up" data-aos-delay="200">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/12312.png" alt="">
                    </div>
                </section>
            </div>

            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['bayan-story']['collections']['description']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/bayan_wallet_screen_pages.png" alt="" alt="">
                <div class="moving_shape1" data-rellax-speed="2" data-rellax-zindex="1" data-rellax-percentage="0.9">
                </div>
            </section>

            <section class="scope_of_work_general mobile_app_edition">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/portfolio/smartphone.png" alt="">
                            <h3>Scope<br>of Work</h3>
                        </div>
                        <div class="col-md-9">
                            <div class="scope_portfolios"
                                ng-repeat="scope_portfolios in includes.global.many[13]['scope_bayan']">
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
                            <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Make paying for
                                goods and services more intuitive and simple</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Eliminate the
                                possibility of fraudulent use</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Generate users for
                                the Bayan platform</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>User <br>Experience</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We developed a native Android and iOS mobile app for BayanPay. A core focus of
                                development was creating the ultimate user experience within the application. The
                                complicated and extensive KYC process might put-off some users so we took steps to split
                                it up into easily digestible pieces.</p>
                        </div>
                        <div class="col-md-12 clowchart_veron">
                            <img src="img/portfolio/veronsteps (3).png" alt="" srcset="">
                            <img src="img/portfolio/veronsteps (1).png" alt="" srcset="">
                            <img src="img/portfolio/veronsteps (2).png" alt="" srcset="">
                        </div>
                    </div>
                    <span class="mobile-d-n">
                        <div class="pikpresja_morphing">
                            <div class="moving_shape1"></div>
                            <img src="img/portfolio/Live Videos2.png" alt="">
                        </div>
                        <h4>It isn't finished<br>
                            until somebody<br>
                            is using it.</h4>
                    </span>
                </div>
            </section>

            <div class="bayan_big_tree">
                <img src="img/portfolio/Mask Group 44.png" alt="">
                <div class="text_block_three">
                    <h4>User <br>Interface</h4>
                    <p>The dashboard contains all the essential functions such as the most important statistics, and
                        buttons to take the most common actions. Users can send money and add payment links at the
                        simple touch of a button.</p>
                </div>
            </div>

            <div class="mocups_6ix">
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000"
                    data-tilt-max="20">
                    <img src="img/portfolio/6ix_mocup (1).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000"
                    data-tilt-max="20">
                    <img src="img/portfolio/6ix_mocup (2).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000"
                    data-tilt-max="20">
                    <img src="img/portfolio/6ix_mocup (3).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000"
                    data-tilt-max="20">
                    <img src="img/portfolio/6ix_mocup (4).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000"
                    data-tilt-max="20">
                    <img src="img/portfolio/6ix_mocup (5).png" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000"
                    data-tilt-max="20">
                    <img src="img/portfolio/6ix_mocup (6).png" alt="">
                </div>
            </div>

            <section class="testimonial_genereal_portfolio_">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up"
                            data-aos-delay="400">{!!$one['b-testimonial']['collections']['b-text']['en']!!}</span>
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, BayanPay has seen
                                significant growth in many different aspects of their business, especially in the number
                                of users the first month, the number of transactions made, and the numbers of merchants
                                that integrated the solution at their physical stores.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">10</span><span>k</span>
                            <h6>Increase in Sales</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">3500</span><span>+</span>
                            <h6>Downloads</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">2300</span><span>%</span>
                            <h6>Merchants integration</h6>
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