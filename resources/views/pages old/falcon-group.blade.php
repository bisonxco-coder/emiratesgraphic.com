@extends('index')
@section('title_and_meta')

@include('includes.google_scripts')
@endsection
@section('content')
<div class="animsition-overlay">
    <div class="portfolio_gen_eral dwisi_elements_all">
        <div class="dwisi_cover falcon_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name" style="color: white;"> Falcon Group</h5>
                <h2 style="color: white;">Falcon Group has carefully selected domestic business sectors that capitalize on infrastructure growth. The Group now has 16 companies operating under its umbrella.</h2>
            </div>
            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/empire cover (2).png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/empire cover (1).png" alt="" style="object-position: top;">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Falcon group aimed to redesign their website in a much more attractive <br>way in order to increase conversion and establish its place in <br>the market as one of the most established group of companies.</p>
        </section>

        <section class="device_holder_one_portfolio">
            <img src="img/portfolio/Groupsss 882.png" alt="">
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
                            ng-repeat="scope_portfolios in includes.global.many[29]['scope_falcon']">
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
                        <p data-aos="fade-up" data-aos-delay="100"><i class="fas fa-circle"></i>Complete design and development of a user-friendly website</p>
                        <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>Develop a self-sustaining admin panel</p>
                        <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Craft an appealing UI/UX design in order to increase conversions</p>
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
                    <img src="img/portfolio/falcon2shi (1).png" alt="" srcset="" class="rellax"
                        data-rellax-speed="-0.3">
                    <img src="img/portfolio/falcon2shi (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1">
                    <img src="img/portfolio/falcon2shi (4).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <img src="img/portfolio/falcon2shi (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
                    <img src="img/portfolio/falcon2shi (6).png" alt="" srcset="" class="rellax" data-rellax-speed="0.4">
                    <img src="img/portfolio/falcon2shi (5).png" alt="" srcset="" class="rellax" data-rellax-speed="0.4">
                    <div class="moving_shape1" style="background: #931867;"></div>
                </div>
            </div>
        </section>

        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Falcon Group <br>Website Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>We have developed a website where users can browse through the different categories of
                            restaurants, check the timings and discounts available, and book their tables
                            accordingly.</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/falcon3shi (1).png" alt="" srcset="" class="rellax"
                        data-rellax-speed="-0.3">
                    <img src="img/portfolio/falcon3shi (2).png" alt="" srcset="" class="rellax" data-rellax-speed="0" data-rellax-zindex="1">
                    <img src="img/portfolio/falcon3shi (4).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <img src="img/portfolio/falcon3shi (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
                    <img src="img/portfolio/falcon3shi (6).png" alt="" srcset="" class="rellax" data-rellax-speed="0.4">
                    <img src="img/portfolio/falcon3shi (5).png" alt="" srcset="" class="rellax" data-rellax-speed="0.4">
                    <div class="moving_shape1"></div>
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
                        <p data-aos="zoom-in-up" data-aos-delay="350"> Since its launch, Falcon group has seen significant growth in many different aspects of their business, especially in the number of users that signed up, the number of help requests created, as well as the number of interactions happening on the mobile application.</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">18 </span><span>K+</span>
                        <h6>Visitors in the first 60 days</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">25</span><span>%</span>
                        <h6>Increase of loading speed</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">70</span><span>%</span>
                        <h6>Increase in SEO visibility</h6>
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