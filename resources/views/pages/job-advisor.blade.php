@extends('index')
@section('title_and_meta')
<title>JOB ADVISOR - Be Seen, Be Heard, Be Hired</title>
<meta name="description" content="Job Advisor is a free search engine enabling companies to recruit talent<br> easier, faster and more efficiently. Job Seeker can showcase their<br> strengths, skills and personality via a personal resume and one-minute video.">

@include('includes.google_scripts')
@endsection
@section('content')
<h1 style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Job Advisor – Be Seen, Be Heard, Be Hired</h1>{{-- 2026-10-25: SEO H1 added (visually hidden, layout unchanged) --}}

<div class="animsition-overlay">
    <div class="portfolio_gen_eral job_b_all">

        <div class="job_cover_">
            <div class="navigation_portfolio_top">
                <h5 class="project_name">JOB ADVISOR</h5>
                <h2>Be Seen, Be Heard, Be Hired</h2>
            </div>

            <section class="portfolio_top_parallax_section" style="background: #5067EB;">
                <div class="name_holdert_top rellax" data-rellax-speed="1.5" data-rellax-zindex="1">
                    <img src="/img/portfolio/Live Videosjob.png" alt="" data-aos="fade-up" data-aos-delay="600">
                </div>
                <div class="over_name_top_c_portfolio">
                    <img src="/img/portfolio/jobadvisor (14).png" alt="">
                </div>
            </section>
        </div>
        <section class="story_section_all_portfolios">
            <h3>Story</h3>
            <img src="img/portfolio/binoculars.png" alt="">
            <p>Job Advisor is a free search engine enabling companies to recruit talent<br> easier, faster and more
                efficiently. Job Seeker can showcase their<br> strengths, skills and personality via a personal resume
                and one-minute video.</p>
        </section>

        <section class="device_holder_one_portfolio">
            <img src="img/portfolio/jobadvisor (2).png" alt="">
            <img src="img/portfolio/jobadvisor (1).png" class="rellax mobile_shape_shadow" data-rellax-speed="0" alt="">
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
                            ng-repeat="scope_portfolios in includes.global.many[25]['jobad_scope']">
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
                            development of a user-friendly web platform</p>
                        <p data-aos="fade-up" data-aos-delay="200"><i class="fas fa-circle"></i>5 steps registration
                            process for job seekers with an in built CV preview</p>
                        <p data-aos="fade-up" data-aos-delay="300"><i class="fas fa-circle"></i>Integration of AI to
                            help companies find their ideal candidates based on their recruitments needs</p>
                        <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>
                            Allowing companies to extract contact details, initiate online chat, and conduct interviews
                            with candidates</p>
                        <p data-aos="fade-up" data-aos-delay="400"><i class="fas fa-circle"></i>Allowing candidates to
                            view the statistics of their profile, and have access to educational and industry updates
                        </p>
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
                        <p>We have developed a website where users get to see how our recruitment platform works, the name of companies that are hiring, as well as educational content to guide them through their hiring journey.</p>
                    </div>
                </div>
                <div class="three_screens_lg">
                    <img src="img/portfolio/jobadvisor (12).png" alt="" srcset="" class="rellax"
                        data-rellax-speed="-0.3">
                    <img src="img/portfolio/jobadvisor (4).png" alt="" srcset="" class="rellax" data-rellax-speed="0"
                        data-rellax-zindex="1">
                    <img src="img/portfolio/jobadvisor (5).png" alt="" srcset="" class="rellax" data-rellax-speed="0.3">
                    <div class="moving_shape1"></div>
                </div>
            </div>
        </section>

        <section class="arabic_section_yell al_ra_4mxps">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Job Seeker<br>Web Platform</h3>
                    </div>
                    <div class="col-md-7">
                        <p>We have developed a separate interface for the job seekers to create their profile using our 5 step registration process, view their live statistics and companies looking at their profile, as well as getting access to educational and industry updates that are of interests to them.</p>
                    </div>
                </div>
                <div class="_desktop_holders">
                    <img src="img/portfolio/jobadvisor (9).png" alt="" data-aos="fade-up" data-aos-delay="300">
                    <img src="img/portfolio/jobadvisor (8).png" alt="" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/portfolio/jobadvisor (6).png" alt="" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/portfolio/jobadvisor (7).png" alt="" data-aos="fade-up" data-aos-delay="300">
                </div>
            </div>
        </section>

        <section class="arabic_section_yell al_ra_4mxps">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Company<br>Web Platform</h3>
                    </div>
                    <div class="col-md-7">
                        <p>We have developed a separate interface for the companies to register themselves on the platform, access the candidates’ database, view their profiles and save their search of ideal candidates using the various filtering tools, and export their contact details to organize interviews.</p>
                    </div>
                </div>
                <div class="_desktop_holders">
                    <img src="img/portfolio/jobadvisor (10).png" alt="" data-aos="fade-up" data-aos-delay="300">
                    <img src="img/portfolio/jobadvisor (11).png" alt="" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/portfolio/jobadvisor (13).png" alt="" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/portfolio/jobadvisor (12).png" alt="" data-aos="fade-up" data-aos-delay="300">
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
                        <p data-aos="zoom-in-up" data-aos-delay="350">Since its launch, Job Advisor has seen significant growth in many different aspects of their business, especially in the number of candidates that created their profiles, the number of companies that signed up, as well as the number of job roles available.</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="250">
                        <div class="moving_shape1"></div>
                        <span class="counter">4000 </span><span>+</span>
                        <h6>Candidates in the first 30 days</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="450">
                        <span class="counter">300</span><span>+</span>
                        <h6>Companies hiring</h6>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="350">
                        <span class="counter">2000</span><span>+</span>
                        <h6>Job roles available</h6>
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