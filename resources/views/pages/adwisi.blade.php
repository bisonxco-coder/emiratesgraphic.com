@extends('index')
@section('title_and_meta')

@include('includes.google_scripts')
@endsection
@section('content')
<div class="animsition-overlay">
    <div class="portfolio_gen_eral dwisi_elements_all">
        <div class="dwisi_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name" style="color: white;">Dwisi</h5>
                <h2 style="color: white;">Buy and sell used items by<br> creating your own virtual shop</h2>
            </div>
            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/dwisicover (1).png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/dwisicover (2).png" alt="" style="object-position: top;">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Dwisi allows users to set up their own virtual <br>shop and buy/sell products through the platform.</p>
        </section>
        <section class="three_devices_holder_shippers">
            <div data-aos="fade-up" data-aos-delay="400">
                <img src="img/portfolio/dwisi1shat (1).png" alt="" alt="" class="side_open">
                <img src="img/portfolio/dwisi1shat (3).png" alt="" alt="" style="z-index: 1;">
                <img src="img/portfolio/dwisi1shat (2).png" alt="" alt="" class="side_open">
                <div class="moving_shape1" data-rellax-speed="2" data-rellax-zindex="1" data-rellax-percentage="0.3">
                </div>
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
                        <div class="scope_portfolios"
                            ng-repeat="scope_portfolios in includes.global.many[28]['scope_dwisi']">
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
                        <h2>Our<br>Involvement</h2>
                    </div>
                    <div class="col-md-7">
                        <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and
                            development of a user-friendly mobile application</p>
                        <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Integration with a
                            payment gateway that facilitates buyer experience</p>
                        <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Integration of delivery
                            service within the mobile application</p>
                        <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Develop the ability for
                            the users to customize their own shop on the application</p>
                        <p data-aos="fade-up" data-aos-delay="500"><i class="fas fa-circle"></i>Develop the ability for
                            users to favor items and purchase directly</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Mobile Application<br>Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>The interface of the mobile application allows users to buy and sell their products as well
                            as search for specific items</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="mocups_6ix">
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (5).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (4).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (3).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (2).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (8).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (7).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (9).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (6).png" alt="">
            </div>
            <div class="img_holder js-tilt" data-tilt data-tilt-scale="1.08" data-tilt-speed="1000" data-tilt-max="20">
                <img src="img/portfolio/dwisi2shat (1).png" alt="">
            </div>
        </div>
        <!-- <section class="testimonial_genereal_portfolio_">
            <div class="container">
                <div class="row">
                    <h4 data-aos="fade-up" data-aos-delay="400">testimonial</h4>
                    <span data-aos="fade-up" data-aos-delay="400">
                        <p>Sacha and his team have worked on several projects for me over the past 2 years. They have
                            managed to exceed my expectations, as well as helping me along the way to grow my
                            businesses. I look forward to continuing our business relationship in the years to come.</p>
                    </span>
                </div>
            </div>
        </section> -->
        <div style="background: rgb(245 245 245 / 62%); padding: 1% 0px 3%;">
            <section class="user_experience_portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Landing
                                Page</h3>
                        </div>
                        <div class="col-md-7">
                            <p>We have developed a landing page to increase mobile application conversions, and showcase
                                it’s main features.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="device_holder_one_portfolio" style="padding: 2% 0px;">
                <img src="img/portfolio/dwisipc2 (2).png" alt="">
                <img src="img/portfolio/dwisipc2 (1).png" class="rellax mobile_shape_shadow" data-rellax-speed="-0.1"
                    alt="">
            </section>
        </div>

        <!-- <div class="parallax-container">
            <div class="overlay_parallax_12"></div>
            <section class="portfolio_services3122" style="background-image: url('/img/Mask G22roup 51.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h5>Maison des Fleurs</h5>
                            <h3>Flowers At <br>Your Doorstep</h3>
                            <p>Maison Des Fleurs offers a wide range of beautiful flower arrangements for all types of
                                celebration.</p>
                            <a href="/maison-des-fleurs" data-animsition-out-class="overlay-slide-out-top"
                                class="animsition-link">VIEW PROJECT</a>
                        </div>
                    </div>
                </div>
            </section>
        </div> -->

        <section class="the_result_all_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Dwisi has seen significant
                            growth in many different aspects of their business, especially in the number of users that
                            signed up, the number of help requests created, as well as the number of interactions
                            happening on the mobile application.</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">200</span><span>+</span>
                        <h6>Shops created in the first 60 days</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">2</span><span>k+</span>
                        <h6>product relevant searches</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">1</span><span>K+</span>
                        <h6>items sold</h6>
                    </div>
                    <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build
                        something
                        <i class="fas fa-angle-right _morph_icon"></i></a>
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>

        <section class="test_app_webapp">
            <div class="container">
                <div class="row">
                    <div class="moving_shape1"><img src="img/3d.png" alt="" srcset=""></div>
                    <h3>Test it out</h3>
                    <p>Feel free to explore the project and see how it works in action. Click the links below to test the website or mobile app and experience it for yourself.</p>
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
        </section>
        @include('includes.go_services')
    </div>
</div>
@endsection