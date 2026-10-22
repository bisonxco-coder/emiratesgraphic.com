<title>Internet Marketing Dubai - Digital Marketing Companies in UAE | Emirates Graphic</title>
<meta name="description" content="Emirates Graphic is the best Internet marketing agency in Dubai offering online marketing services,  and search engine optimization." />
<meta name="keywords" content="Digital marketing agency Dubai,Marketing company Dubai, Marketing agency Dubai, Best marketing agency Dubai, Online Marketing Dubai">
@extends('index')
@section('title_and_meta')

@include('includes.google_scripts')
@endsection
@section('content')

<div class="animsition-overlay">
    <div class="web_dev_dev_class marketing_dev_dev_class">
        <section class="top_cover_page web_dev_top" style="background:#F5F5F5;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3>{{$one['marketing_header']['collections']['title']['en']}}</h3>
                        <p>{!!$one['marketing_header']['collections']['description']['en']!!}</p>
                        <a href="/contact" class="_morp_h_a">Grow Online
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-5">
                        <div class="morph_negative_container">
                            <div class="moving_shape1"></div>
                        </div>
                        <div class="morphing_container">
                            <div class="moving_shape" style="background-image: url({{ URL::to('/img/manjakos/' . $one['marketing_header']['collections']['morphing-image'])}})"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.awards_icons')


        <section class="we_craft_a">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Leading <br>marketing agency</h2>
                    </div>
                    <div class="col-md-6">
                        <p>Marketing in the Gulf region, and particularly online marketing, is evolving and rapidly catching up with the latest global trends. Emirates Graphic, through its use of innovative digital marketing strategies, has already established itself as one of the best marketing agencies in Dubai.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="we_general_a">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <h2> An Absolute <br>
                            Online Marketing <br>
                            Solution</h2>
                        <a href="#" class="_morp_h_a">Have an Idea?
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-6">
                        <div class="morph_negative_container">
                            <div class="moving_shape1"></div>
                        </div>
                        <div class="morphing_container">
                            <div class="moving_shape" style="background-image: url('img/Annotation 2019-06-02 144733.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="third_parts_3 a21_ds">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/puzell.svg" alt="">
                        <h5>Design</h5>
                        <p>Our digital marketing services start by making your company and brand attractive and robust in its online presence. By creating original content with the right keywords and proper targeting, we will boost your SEO and elevate your online marketing strategy to the next level.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="img/gazeta.svg" alt="">
                        <h5>Content</h5>
                        <p>Imagine not having to employ any high-pressure sales tactics or harass potential customers and leads until they accept to work with you, but instead, simply letting them find you and be practically converted before you even speak to them for the first time!</p>
                    </div>
                    <div class="col-md-3">
                        <img src="img/llupa.svg" alt="">
                        <h5>SEO</h5>
                        <p>With online content marketing, this is not just possible, it is the goal. Emirates Graphic has a dedicated team of designers and content creators that will provide your target audience with valuable and engaging content and promote your brand in the most organic and effective way.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="img/rraketa.svg" alt="">
                        <h5>Result</h5>
                        <p>Our marketing team delivers beautiful infographics, engaging and informative blog posts, and designs your web pages in the most search-engine friendly way, putting you right where your target customers are bound to look.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="we_general_a marketing_ndda">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <h2>We create ads <br>that <span class="we_shape2">sell</span></h2>
                        <p>You might be the best at what you do, but your target market needs to know this. Emirates Graphic will help you to reach just the right people with the most effective content. Generate buzz and desire for your products or services by letting us manage your online marketing.</p>

                        <a href="#" class="_morp_h_a">Have an Idea?
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-6">
                        <div class="morph_negative_container">
                            <div class="moving_shape1"></div>
                        </div>
                        <img src="img/mark1eting_mobile-01.png" class="rellax" data-rellax-speed="2" data-rellax-percentage="0.6" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits_many">
            <div class="container">
                <h6>Our <br>Specialization</h6>
                <div class="row scrollbar_all_mob_red">
                    <div class="many_services_cards" ng-repeat="services_benefits in includes.global.many[10]['marketing_benefits']" data-aos="zoom-in-up" data-aos-delay="150">
                        <img ng-src="/img/manjakos/<%services_benefits['collections']['icon']%>">
                        <h5><%services_benefits['collections']['title']['en']%></h5>
                        <p ng-bind-html="services_benefits['collections']['description']['en']"></p>
                        <!-- <a href="/services/<%services_benefits.id%>/<%services_benefits.slugable.en%>">VIEW MORE</a> -->
                    </div>
                </div>
            </div>
        </section>


        <section class="why_us_f_all">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>So why<br>trust us anyway?</h4>
                    </div>
                    <div class="col-md-8">
                        <p>We assist our clients with online marketing services through different channels. Our marketing campaigns are extensively researched and tested to ensure they run perfectly and reach out to the right target audience. Clients choose us for our expertise and our ability to handle their online presence the best way possible. </p>
                    </div>
                </div>

                <div class="row">
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/eibfs-logo-hres-med.png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (2).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (3).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (4).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (5).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (6).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (7).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (8).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy (9).png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath - Copy.png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/NoPath.png" alt="">
                    </div>
                    <div class="img_holder_why_" data-aos="zoom-in-up" data-aos-delay="150">
                        <img src="img/clients/swisscanonica-logo.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="have_idea_gen">
            <div class="container">
                <div class="row">
                    <h6>Have an Idea?</h6>
                    <p>Bring your next project to life! At Emirates Graphic, we assist our clients with their vision to make it a reality</p>
                    <a href="/contact" class="_morp_h_a" style="">Work with Us <i class="fas fa-angle-right _morph_icon"></i></a>
                </div>
            </div>
        </section>

        <section class="more_w_wdo">
            <div class="container">
                <div class="row _one1ss">
                    <div class="col-md-4">
                        <h4>More of<br>what we do</h4>
                    </div>
                    <div class="col-md-8">
                        <p>Progressively optimize bleeding-edge results for inexpensive synergy. Authoritatively engage client-focused infomediaries and cross-unit applications. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="services_many222" ng-repeat="services_many_repeat in includes.global.many[11]['more_what_marketing']">
                        <a href="/marketing-services/<%services_many_repeat.id%>/<%services_many_repeat.slugable.en%>">
                            <h5><%services_many_repeat['collections']['title']['en']%></h5>
                            <p ng-bind-html="services_many_repeat['collections']['description']['en']"></p>
                        </a>
                    </div>
                    <div class="services_many222">
                        <a href="/contact" class="_morp_h_a" style="">Boost Your Business<i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.portfolioslider')
	<!-- Contact_section_everywhere MARKETING-->
	<section class="special_contact_all_p">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<img src="https://emiratesgraphic.com/general_all_pages_inc/img/pexels-karolina-grabowska-4195501.png"
						alt="" srcset="">
				</div>
				<div class="col-md-6">
					<h4>Bring your next<br>
						project in life</h4>
					<h6>Contact us now. Really. Right now.</h6>
                    <form name="sentMessage" action="" id="form_contact_main">
					<!-- <form
						action="https://emiratesgraphic.us16.list-manage.com/subscribe/post?u=4d5bf31cd0d012031c3af0d1d&amp;id=cbd0f44ebf"
						method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"> -->
						<div class="form_holder">
							<input type="text" placeholder="Name" name="FNAME" class="" id="mce-FNAME">
							<input type="text" placeholder="Email" name="EMAIL" class="" id="mce-FNAME">
							<input type="text" placeholder="Phone" name="MMERGE4" class="" id="mce-FNAME">
							<input type="text" placeholder="Website" name="MMERGE3" class="" id="mce-FNAME">
							<select name="interested_in" id="">
								<option value="" selected disabled>Interested In </option>
								<option value="B2B Marketing">B2B Marketing</option>
								<option value="Mobile App Marketing">Mobile App Marketing</option>
								<option value="E-commerce Marketing">E-commerce Marketing</option>
								<option value="Lead Generation">Lead Generation</option>
								<option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)
								</option>
								<option value="PPC Management">PPC Management</option>
								<option value="Social Media Ads Management">Social Media Ads Management</option>
								<option value="Social Media Management">Social Media Management</option>
								<option value="Email Marketing">Email Marketing</option>
                                <option value="Prototype">Prototype</option>
								<option value="Other">Other</option>
							</select>
							<select name="market_budget" id="">
								<option value="" selected disabled>MARKETING BUDGET </option>
								<option value="Below AED 5,000">Below AED 5,000</option>
								<option value="5,001 – 10,000 AED">5,001 – 10,000 AED</option>
								<option value="10,001 and Above+">10,001 and Above+</option>
							</select>
							<input type="text" placeholder="MESSAGE" name="MMERGE2" id="mce-MMERGE2" class="full_width">
							<!-- <button type="submit">Let's do this</button> -->
							
                            <div class="row" style="padding: 5px;">
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_4d5bf31cd0d012031c3af0d1d_cbd0f44ebf" tabindex="-1"
                                        value="">
                                </div>

                                <div class="clear">
                                    <input type="submit" class="submit_all_p_button" value="Let's do this" name="subscribe" id="mc-embedded-subscribe">
                                </div>
                            </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact_section_everywhere end-->
    </div>
</div>
@endsection