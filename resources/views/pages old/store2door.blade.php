    @extends('index')
    @section('title_and_meta')

    <title>Store2door - Facilitating The Buying Processes In Restricted Countries.</title>
    <meta name="description" content="Store2Door is a courier company in Saudi Arabia.
They provide a shipping service that delivers products from countries
that usually do not ship to KSA by giving users a physical address in the
store’s country that they can use to order. Made By Emirates Graphic">

    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral store2dore_all">

            <div class="store_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">STORE2DOOR</h5>
                    <h2>Facilitating the buying processes in restricted countries.</h2>
                </div>

                <section class="portfolio_top_parallax_section" style="background: #8D0E3A;">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/Live 1243Videos.png" alt="" data-aos="fade-up" data-aos-delay="600">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/frees33tocks-org-187367-unsplash.png" alt="">
                    </div>
                </section>
            </div>

            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['store_story']['collections']['description']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/Gr4122oup 785.png" alt="">
                <img src="img/portfolio/Gqwe1roup 703.png" class="rellax" data-rellax-speed="2.5" data-rellax-zindex="1" data-rellax-percentage="1" alt="">
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
                            <div class="scope_portfolios" ng-repeat="scope_portfolios in includes.global.many[16]['store_scope']">
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
                            <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Allowing for new origin and destination countries to be added</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Shift away from expensive third-party service providers</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Improving the user experience on the platform</p>
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
                            <p>We have redesigned and redeveloped the web application to improve UX. We have also added an assisted purchase module that allows users to check-out almost instantly by automatically processing the products at their chosen eCommerce URL.</p>
                        </div>
                    </div>
                    <div class="three_screens_lg">
                        <img src="img/portfolio/three_stores (1).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                        <img src="img/portfolio/three_stores (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1">
                        <img src="img/portfolio/three_stores (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
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

            <section class="arabic_section_yell al_ra_4mxps">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Web Application<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have completely redeveloped the back-end of the system to allow the administrator to add and remove countries with a few clicks. We also replaced third party web-services with SMSA proprietary APIs.</p>
                        </div>
                    </div>
                    <div class="_desktop_holders">
                        <img src="img/portfolio/1233abGroup 788 (1).png" alt="" data-aos="fade-up" data-aos-delay="300">
                        <img src="img/portfolio/1233abGroup 788 (2).png" alt="" data-aos="fade-up" data-aos-delay="200">
                        <img src="img/portfolio/1233abGroup 788 (3).png" alt="" data-aos="fade-up" data-aos-delay="200">
                        <img src="img/portfolio/1233abGroup 788 (4).png" alt="" data-aos="fade-up" data-aos-delay="300">
                    </div>
                </div>
            </section>

            <section class="arabic_section_yell al_ra_4mxps">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Mobile Application<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have developed a mobile application for users to be able to manage their shipments on the go. We have made the application as intuitive as possible while preserving all the functions of the web app.</p>
                        </div>
                    </div>
                    <div class="_phone_holders">
                        <img src="img/portfolio/mob_storeto (1).png" alt="" data-aos="fade-up" data-aos-delay="400" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/mob_storeto (2).png" alt="" data-aos="fade-up" data-aos-delay="300" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/mob_storeto (3).png" alt="" data-aos="fade-up" data-aos-delay="200" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                        <img src="img/portfolio/mob_storeto (4).png" alt="" data-aos="fade-up" data-aos-delay="500" class="js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    </div>
                </div>
            </section>

            <section class="testimonial_genereal_portfolio_">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up" data-aos-delay="500">{!!$one['store_testimonial']['collections']['description']['en']!!}</span>
                        <img ng-src="/img/131568030916.jpg" data-aos="fade-up" data-aos-delay="600">
                    </div>
                </div>
            </section>

            <!-- <div class="parallax-container"><div class="overlay_parallax_12"></div>
                <section class="portfolio_services3122" style="background-image: url('/img/Mask Group 499994.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>{{$one['store_portfolio']['collections']['name']['en']}}</h5>
                                <h3>{{$one['store_portfolio']['collections']['title']['en']}}</h3>
                                <p>{!!$one['store_portfolio']['collections']['description']['en']!!}</p>
                                <a href="{{$one['store_portfolio']['collections']['special_url']['en']}}" data-animsition-out-class="overlay-slide-out-top" class="animsition-link">VIEW PROJECT</a>
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Store2Door has seen significant growth in many different aspects of their business, especially in the number of cities it serves, the number of retail outlets it operates, and the numbers or orders being placed.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">325 </span><span></span>
                            <h6>Cities served</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">300</span><span>+</span>
                            <h6>Retail outlets</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">500</span><span>k+</span>
                            <h6>Orders fulfilled</h6>
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