@extends('index') @section('title_and_meta')

<title>Aladdin - Earn Miles While Traveling Abroad</title>
    <meta name="description" content="Aladdin is a company in Saudi Arabia that is looking to
revolutionize the way people travel by developing a mobile
application that allows users to earn a countless amount of
miles while traveling. Made By Emirates Graphic">

@include('includes.google_scripts')
@endsection @section('content')
<div class="animsition-overlay">
    <div class="portfolio_gen_eral alrayan_all_elements">
        <div class="al_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name">Aladdin</h5>
                <h2> Earn miles while traveling abroad</h2>
            </div>
            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1"> <img
                        src="/img/portfolio/L12ive Videos.png" alt="" data-aos="fade-up" data-aos-delay="600"> </div>
                <div class="over_name_top_c_portfolio"> <img src="/img/portfolio/2121212.png" alt=""> </div>
            </section>
        </div>
        <section class="story_section_all_portfolios" style="z-index: 3;">
            <h3>Story</h3> <img src="img/portfolio/binoculars.png"
                alt="">{!!$one['al-story']['collections']['description']['en']!!}
        </section>
        <section class="four_mockups_al">
            <div class="container-fluid">
                <div class="row">
                    <div class="image_holder_4mcks rellax" data-rellax-speed="2.5" style="z-index: -1;">
                        <div class="moving_shape1"></div><img src="img/portfolio/alrayanfour (1).png" alt="" srcset="">
                    </div>
                    <div class="image_holder_4mcks rellax" data-rellax-speed="-0.3" style="z-index: -1;">
                        <div class="moving_shape1 mobile-d-n" style="width:35%;"></div><img
                            src="img/portfolio/alrayanfour (2).png" alt="" srcset="">
                    </div>
                    <div class="image_holder_4mcks rellax" data-rellax-speed="-0.5" style="z-index: -1;">
                        <img src="img/portfolio/alrayanfour (3).png" alt="" srcset=""> </div>
                    <div class="image_holder_4mcks rellax" data-rellax-speed="1.5" style="z-index: -1;">
                        <div class="moving_shape1"></div><img src="img/portfolio/alrayanfour (4).png" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>
        <section class="scope_of_work_general mobile_app_edition">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"> <img src="img/portfolio/smartphone.png" alt="">
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
                        <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and
                            development of a mobile application and web platform</p>
                        <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Separate intuitive
                            interfaces for users and merchants</p>
                        <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Payment through the app
                            with customized QR code</p>
                        <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Seamless integration
                            with airline providers</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="user_experience_portfolio user_ex_alrayan">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>User <br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>We developed an app that allows users to create their profiles, link their account with an
                            airline provider, browse through thousands of merchants across different industries, and use
                            the app to proceed with payments to earn miles.</p>
                    </div>
                </div><img src="img/portfolio/alrayan_chart.png" alt="" srcset="">
                <div class="quotes_alr_ mobile-d-n">
                    <div class="pikpresja_morphing">
                        <div class="moving_shape1"></div><img src="img/portfolio/Live Videos2.png" alt="">
                    </div>
                    <h4>It isn't finished<br>until somebody<br>is using it.</h4>
                </div>
            </div>
        </section>
        <div class="mocups_8ix">
            <div class="img_holder rellax" data-rellax-speed="-0.2"> <img src="img/portfolio/al_8ix (1).png" alt="">
            </div>
            <div class="img_holder rellax" data-rellax-speed="0.2"> <img src="img/portfolio/al_8ix (2).png" alt="">
            </div>
            <div class="img_holder rellax" data-rellax-speed="0.3"> <img src="img/portfolio/al_8ix (3).png" alt="">
            </div>
            <div class="img_holder rellax" data-rellax-speed="-0.3"> <img src="img/portfolio/al_8ix (4).png" alt="">
            </div>
            <div class="img_holder rellax" data-rellax-speed="0"> <img src="img/portfolio/al_8ix (5).png" alt=""> </div>
            <div class="img_holder rellax" data-rellax-speed="0.2"> <img src="img/portfolio/al_8ix (6).png" alt="">
            </div>
            <div class="img_holder rellax" data-rellax-speed="0.5"> <img src="img/portfolio/al_8ix (7).png" alt="">
            </div>
            <div class="img_holder rellax" data-rellax-speed="-0.2"> <img src="img/portfolio/al_8ix (8).png" alt="">
            </div>
        </div>
        <section class="arabic_section_yell al_ra_4mxps">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Merchants<br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>We developed a separate interface for the merchants that allow them to generate customized QR
                            code to accept payments, withdraw their earnings, and view all the statistics in regards to
                            their venue.</p>
                    </div>
                </div>
                <div class="_phone_holders"> <img src="img/portfolio/alra_mocks4px (1).png" alt="" data-aos="fade-up"
                        data-aos-delay="400"> <img src="img/portfolio/alra_mocks4px (2).png" alt="" data-aos="fade-up"
                        data-aos-delay="300"> <img src="img/portfolio/alra_mocks4px (3).png" alt="" data-aos="fade-up"
                        data-aos-delay="200"> <img src="img/portfolio/alra_mocks4px (4).png" alt="" data-aos="fade-up"
                        data-aos-delay="500"> </div>
            </div>
        </section>
        <section class="user_experience_portfolio" style="margin-bottom: -5%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Web Application<br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>We have also developed a separate web platform for merchants to allow them to create and edit
                            their profiles on the app, store all the data related to their clients, as well as link
                            their earnings with their respective bank accounts to activate automatic transfers.</p>
                    </div>
                </div>
                <div class="three_screens_lg"> <img src="img/portfolio/web_aladdin_mockup (1).png" alt="" srcset=""
                        class="rellax" data-rellax-speed="-0.3"> <img src="img/portfolio/web_aladdin_mockup (2).png"
                        alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1"> <img
                        src="img/portfolio/web_aladdin_mockup (3).png" alt="" srcset="" class="rellax"
                        data-rellax-speed="0.3">
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>
        <!-- <section class="testimonial_genereal_portfolio_ veron_testimonial__">
                <div class="container">
                    <div class="row">
                        <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4> <span data-aos="fade-up" data-aos-delay="400">{!!$one['al_testimonial']['collections']['al-testimonial']['en']!!}</span>
                    </div>
                </div>
            </section> -->
 
    @include('includes.portfolioslider')
        <section class="the_result_all_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4> <a href="/contact"
                            class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us <i
                                class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Aladdin has seen significant
                            growth in many different aspects of their business, especially in the number of users that
                            signed up, the number of merchants that created their profiles, and the number of miles that
                            have been generated.</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div><span class="counter">3000</span><span>+</span>
                        <h6>Users in the first week</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450"> <span
                            class="counter">500</span><span>+</span>
                        <h6>Merchants</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350"> <span
                            class="counter">50</span><span>k+</span>
                        <h6>Miles generated</h6>
                    </div><a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build
                        something <i class="fas fa-angle-right _morph_icon"></i></a>
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>
        <!-- <section class="test_app_webapp">
                <div class="container">
                    <div class="row">
                        <div class="moving_shape1"><img src="img/3d.png" alt="" srcset=""></div>
                        <h3>Test it out</h3>
                        <p>Since its launch, Aladdin has seen significant growth in many different aspects of their business, especially in the number of users that signed up, the number of merchants that created their profiles, and the number of miles that have been generated.</p><a href="">
                            <div class="download_link_app_portfolio"> <img src="/img/portfolio/playstore (1).png" alt="" srcset=""> </div>
                        </a> <a href="">
                            <div class="download_link_app_portfolio"> <img src="/img/portfolio/apple.png" alt="" srcset=""> </div>
                        </a> <a href="">
                            <div class="download_link_app_portfolio"> <img src="/img/portfolio/monitor.png" alt="" srcset=""> </div>
                        </a>
                    </div>
                </div>
            </section> -->
        @include('includes.go_services')
    </div>
</div>@endsection</div>