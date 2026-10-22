@extends('index')
@section('title_and_meta')
<title>Website Development Dubai - Blog Page</title>
<meta name="description" content="What Media say about Emirates Graphic">

@include('includes.google_scripts')
@endsection
@section('content')
<div class="animsition-overlay">
    <div class="web_dev_dev_class marketing_dev_dev_class">
        <section class="top_cover_page web_dev_top" style="background:#F5F5F5;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3>{{$one['blog-cover']['collections']['title']['en']}}</h3>
                        {!!$one['blog-cover']['collections']['description']['en']!!}
                        <a href="/contact" class="_morp_h_a">Contact us
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-5">
                        <div class="morph_negative_container">
                            <div class="moving_shape1"></div>
                        </div>
                        <div class="morphing_container">
                            <div class="moving_shape"
                                style="background-image: url({{ URL::to('/img/manjakos/' . $one['blog-cover']['collections']['image'])}})">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.articles_carousel')
        <section class="general_title_text">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>What Media say about
                            Emirates Graphic</h3>
                    </div>
                    <div class="col-md-6">
                        <p>We are committed to creating apps that generate buzz, get featured in the app store,
                            and
                            win awards. We accomplish this by focusing on the users’ needs and making apps that
                            are
                            easy.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="media_section_newholder">
            <section ng-repeat="slider_media in includes.global.many[4]['media_cards']"
                class="media_cards_slide  media_cards_slide_different <%slider_media['collections']['class_edition']['en']%>">
                <div class="imageS_grid_a_medi">
                    <!-- <img ng-src="/img/manjakos/<%slider_media['collections']['project_icon']%>"
                                class="image_project"><br> -->
                    <img ng-src="/img/manjakos/<%slider_media['collections']['press_logo']%>" class="image_press">
                </div>
                <div class="portfolio_item">
                    <h3><%slider_media['collections']['title']['en']%></h3>
                    <!-- <div ng-bind-html="slider_media['collections']['description']['en']"></div> -->
                </div>
                <a href="<%slider_media['collections']['press_url_redirect']['en']%>" class="_morp_h_a"
                    target="_blank"><%slider_media['collections']['press_url_name']['en']%>
                    <i class="fas fa-angle-right _morph_icon"></i></a>
            </section>
        </section>
    </div>

    <section class="media_clients">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>What Media say<br>
                        about Our Clients</h2>
                </div>
                <div class="col-md-6">
                    <p>We are committed to creating apps that generate buzz, get featured in the app store,
                        and
                        win awards. We accomplish this by focusing on the users’ needs and making apps that
                        are
                        easy.
                    </p>
                </div>
            </div>
        </div>
        <div class="media_clients_card">
            <div class="slide__container owl-carousel">
                @foreach($global['many'][1]['media_clients_many'] as $loop_repeat)
                <div class="item itemmain media_section_newholder">
                    <section class="media_cards_slide media_cards_slide_different">
                        <div class="imageS_grid_a_medi">
                            <img src="{{URL::to('/img/manjakos/'.$loop_repeat['collections']['media_logo'])}}"
                                class="image_press">
                        </div>
                        <div class="portfolio_item">
                            <h3>{{$loop_repeat['collections']['title']['en']}}</h3>
                            <img src="{{URL::to('/img/manjakos/'.$loop_repeat['collections']['client_logo'])}}"
                                class="image_project clientimage">
                        </div>
                        <a href="{{$loop_repeat['collections']['media_link']['en']}}" class="_morp_h_a"
                            target="_blank">Learn More
                            <i class="fas fa-angle-right _morph_icon"></i>
                        </a>
                    </section>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- @include('includes.go_services') -->
    <!-- Contact_section_everywhere MOBILE APPS-->
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
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                        class="validate"> -->
                        <div class="form_holder">
                            <input type="text" placeholder="Name" name="FNAME" class="" id="mce-FNAME">
                            <input type="text" placeholder="Email" name="EMAIL" class="" id="mce-FNAME">
                            <input type="text" placeholder="Phone" name="MMERGE4" class="" id="mce-FNAME">
                            <input type="text" placeholder="Website" name="MMERGE3" class="" id="mce-FNAME">
                            <select name="interested_in" id="" class="full_width">
                                <option value="" selected disabled>INTERESTED IN </option>
                                <option value="Mobile App development">Mobile App development</option>
                                <option value="Web development">Web development</option>
                                <option value="E-commerce Marketing">E-commerce Marketing</option>
                                <option value="Mobile App Marketing">Mobile App Marketing</option>
                                <option value="B2B Marketing">B2B Marketing</option>
                                <option value="Lead Generation">Lead Generation</option>
                                <option value="Prototype">Prototype</option>
                                <option value="Other">Other</option>
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
                                    <input type="submit" class="submit_all_p_button" value="Let's do this"
                                        name="subscribe" id="mc-embedded-subscribe">
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
@endsection