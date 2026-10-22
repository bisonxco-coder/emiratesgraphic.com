    @extends('index')
    @section('title_and_meta')

    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <div class="portfolio_gen_eral modastelle_elements_all">

            <div class="modastelle_cover">
                <div class="navigation_portfolio_top">
                    <h5 class="project_name">MODASTELLE</h5>
                    <h2>Connecting you with Fashion Brands.</h2>
                </div>

                <section class="portfolio_top_parallax_section">
                    <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                        <img src="/img/portfolio/modastelle_name.png" alt="" data-aos="fade-up" data-aos-delay="200">
                    </div>
                    <div class="over_name_top_c_portfolio">
                        <img src="/img/portfolio/modastelle_cover.png" alt="">
                    </div>
                </section>
            </div>

            <section class="story_section_all_portfolios">
                <h3>Story</h3>
                <img src="img/portfolio/binoculars.png" alt="">
                {!!$one['modastelle-story']['collections']['description']['en']!!}
            </section>

            <section class="device_holder_one_portfolio">
                <img src="img/portfolio/desktop1_moda.png" alt="">
                <img src="img/portfolio/modastelle6x (4).png" class="rellax mobile_shape_shadow" data-rellax-speed="1"  alt="">
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
                            <div class="scope_portfolios" ng-repeat="scope_portfolios in includes.global.many[21]['scope_modastelle']">
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
                            <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and development of a mobile application and web platform</p>
                            <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Integration of 5 Apis, for a total of 60'000 products</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Seamless synchronisation of the inventory</p>
                            <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Creation of a loyalty program to increase engagement</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Web Application<br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We developed an app that allows users to create their profiles, browse through thousands of luxury items across different international fashion brands, and have the products delivered to their house within a few days.</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="mocups_6ix">
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/modastelle6x (3).png" class="mobile_shape_shadow" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/modastelle6x (1).png" class="mobile_shape_shadow" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/modastelle6x (2).png" class="mobile_shape_shadow" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/modastelle6x (6).png" class="mobile_shape_shadow" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/modastelle6x (4).png" class="mobile_shape_shadow" alt="">
                </div>
                <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                    <img src="img/portfolio/modastelle6x (5).png" class="mobile_shape_shadow" alt="">
                </div>
            </div>
            
            <section class="user_experience_portfolio user_experience_portfolio_modastelle" style="background: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Website <br>Interface</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have also developed a separate web platform for users to store all the data related to their purchases, track their existing shipments, as well as checking the status of their loyalty points.</p>
                        </div>
                    </div>
                    <div class="three_screens_lg">
                        <img src="img/portfolio/modastell_mebgmor (1).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                        <img src="img/portfolio/modastell_mebgmor (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1">
                        <img src="img/portfolio/modastell_mebgmor (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
                        <div class="moving_shape1"></div>
                    </div>
                </div>
            </section>

            <section class="testimonial_genereal_portfolio_">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                        <span data-aos="fade-up" data-aos-delay="400">{!!$one['mod-testimonial']['collections']['mod-text']['en']!!}</span>
                    </div>
                </div>
            </section>


            <div class="parallax-container">
                <div class="overlay_parallax_12"></div>
                <section class="portfolio_services3122" style="background-image: url('/img/shippers_a.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>{{$one['portfolio-modastelle']['collections']['name']['en']}}</h5>
                                <h3>{{$one['portfolio-modastelle']['collections']['title']['en']}}</h3>
                                <p>{!!$one['portfolio-modastelle']['collections']['description']['en']!!}</p>
                                <a href="{{$one['portfolio-modastelle']['collections']['special_url']['en']}}" data-animsition-out-class="overlay-slide-out-top" class="animsition-link">VIEW PROJECT</a>
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
                            <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Modastelle has seen significant growth in many different aspects of their business, especially in the number of users that signed up, the number of items that have been purchased, and the number of items listed on the platform.</p>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                            <div class="moving_shape1"></div>
                            <span class="counter">7</span><span>k+</span>
                            <h6>Users in the first month</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                            <span class="counter">45000</span><span>+</span>
                            <h6>Items sold</h6>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                            <span class="counter">60</span><span>k+</span>
                            <h6>Items listed</h6>
                        </div>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build something
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                        <div class="moving_shape1"></div>
                    </div>
                </div>
            </section>

            @include('includes.go_services')
        </div>
    </div>
@endsection