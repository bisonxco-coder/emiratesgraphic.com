@extends('index')
@section('title_and_meta')

<title>Daska | Emiratesgraphic </title>
<meta name="description" content="Connecting Chefs And Food Lovers For A 
Personalized Culinary Experience">

@include('includes.google_scripts')
@endsection
@section('content')
<div class="animsition-overlay daskatheme">
    <div class="portfolio_gen_eral emoji_elements_all">
        <div class="emoji_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name" style="color: white;">DASKA</h5>
                <h2 style="color: white;">Daska brings together
                    Dog Masters and Trainers</h2>
            </div>
            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/daska (11).png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/daska (12).png" alt="" style="object-position: top;">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Daska bridges the gap between dog owners and professional trainers. Whether you're<br>looking to improve
                your dog's behavior or manage training schedules,<br>Daska offers a seamless platform to connect,
                communicate, and collaborate.​</p>

        </section>

        <section class="user_experience_portfolio">
            <div class="container">
                <div class="three_screens_lg">
                    <img src="img/portfolio/daska (1).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/daska (10).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
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
                            ng-repeat="scope_portfolios in includes.global.many[32]['emoji-scope']">
                            <h4><%scope_portfolios['collections']['title']['en']%></h4>
                            <p ng-bind-html="scope_portfolios['collections']['description']['en']"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Dog Master<br> Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>As a dog owner, easily find and book certified trainers near you. Create a profile for your
                            dog, receive tailored training plans, and manage appointments—all from one intuitive
                            dashboard.​</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/daska (2).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/daska (5).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/daska (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                    <img src="img/portfolio/daska (4).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>



        <section class="user_experience_portfolio down_before_effect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Dog Trainer
                            <br> Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Trainers can streamline their business with Daska's comprehensive tools. Manage client
                            schedules, automate billing, track session progress, and showcase client testimonials to
                            attract new customers.​
                        </p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/daska (9).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/daska (7).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/daska (8).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                    <img src="img/portfolio/daska (6).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <!-- <div class="moving_shape1"></div> -->
                </div>
            </div>
        </section>


        <section class="the_result_all_portfolio ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Daska has rapidly gained
                            traction in the canine community:

                        </p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">1.5</span><span>k+</span>
                        <h6>Trainers registered</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">30</span><span>k+</span>
                        <h6>website visits</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">1</span><span>st</span>
                        <h6>in France</h6>
                    </div>
                    <!-- <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Progressively optimize bleeding-edge results for inexpensive synergy. Authoritatively engage client-focused infomediaries and cross-unit applications. Monotonectally strategize long-term high-impact applications after economically.</p>
                    </div> -->
                    <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build
                        something
                        <i class="fas fa-angle-right _morph_icon"></i></a>
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>

    @include('includes.portfolioslider')
        <section class="test_app_webapp">
            <div class="container">
                <div class="row">
                    <div class="moving_shape1"><img src="img/3d.png" alt="" srcset=""></div>
                    <h3>Test it out</h3>
                    <p>Feel free to explore the project and see how it works in action. Click the links below to test the website or mobile app and experience it for yourself.</p>
                    <!-- <a href="#">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/playstore (1).png" alt="" srcset="">
                        </div>
                    </a>
                    <a href="#">
                        <div class="download_link_app_portfolio">
                            <img src="/img/portfolio/apple.png" alt="" srcset="">
                        </div>
                    </a> -->
                    <a href="https://daska.com">
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