@extends('index')
@section('title_and_meta')

<title>Summit | Emiratesgraphic </title>
<meta name="description" content="Connecting Chefs And Food Lovers For A 
Personalized Culinary Experience">

@include('includes.google_scripts')
@endsection
@section('content')
<div class="animsition-overlay summittheme">
    <div class="portfolio_gen_eral emoji_elements_all">
        <div class="emoji_cover">
            <div class="navigation_portfolio_top">
                <h5 class="project_name" style="color: white;">SUMMIT</h5>
                <h2 style="color: white;">Helping Founders Build Startups
                    That Achieve Targets.
                </h2>
            </div>
            <section class="portfolio_top_parallax_section">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/summit (15).png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/summit (16).png" alt="" style="object-position: top;">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>SummitOS empowers startup founders to set clear goals,<br>track performance, and access mentorship—all within a single<br>platform designed to accelerate growth.</p>

        </section>

        <section class="user_experience_portfolio">
            <div class="container">
                <div class="three_screens_lg">
                    <img src="img/portfolio/summit (2).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/summit (10).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
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
                        <h3>OKRs<br> Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Set and manage ambitious Objectives and Key Results with an intuitive builder that keeps your team aligned and focused on strategic priorities.​</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/summit (2).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/summit (5).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/summit (3).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                    <img src="img/portfolio/summit (4).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>



        <section class="user_experience_portfolio down_before_effect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>KPIs<br> Interface</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Monitor real-time performance through a customizable dashboard that highlights the metrics driving your startup's success.​</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/summit (9).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/summit (7).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/summit (8).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                    <img src="img/portfolio/summit (6).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <!-- <div class="moving_shape1"></div> -->
                </div>
            </div>
        </section>

        <section class="user_experience_portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Mentors<br> Module</h3>
                    </div>
                    <div class="col-md-7">
                        <p>Connect with seasoned entrepreneurs and industry experts for personalized guidance, ensuring informed decisions at every growth stage.​</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/summit (12).png" alt="" srcset="" class="rellax" data-rellax-speed="-0.3">
                    <img src="img/portfolio/summit (13).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/summit (14).png" alt="" srcset="" class="rellax" data-rellax-speed="0.2">
                    <img src="img/portfolio/summit (11).png" alt="" srcset="" class="rellax" data-rellax-speed="0.1">
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>

        <!-- <section class="the_result_all_portfolio ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 data-aos="zoom-in-up" data-aos-delay="150">The <br>Result</h4>
                        <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="250">Chat with Us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-9">
                        <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Summit has rapidly gained traction in the start-ups community:</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">500</span><span>+</span>
                        <h6>Founders joined during early access</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">4</span><span></span>
                        <h6>Tools launched</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">15</span><span>+</span>
                        <h6>Press Coverage</h6>
                    </div>
                    <a href="/contact" class="_morp_h_a" data-aos="zoom-in-up" data-aos-delay="350">Let's build
                        something
                        <i class="fas fa-angle-right _morph_icon"></i></a>
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section> -->

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
                    <a href="https://summitos.com">
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