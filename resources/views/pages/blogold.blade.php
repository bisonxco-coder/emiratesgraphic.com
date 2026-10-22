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
                        <h3>{{$one['blog-cover']['collections']['title']['en']}}</h3>
                        <p>{!!$one['blog-cover']['collections']['description']['en']!!}</p>
                        <a href="/contact" class="_morp_h_a">Grow Online
                            <i class="fas fa-angle-right _morph_icon"></i></a>
                    </div>
                    <div class="col-md-5">
                        <div class="morph_negative_container">
                            <div class="moving_shape1"></div>
                        </div>
                        <div class="morphing_container">
                            <div class="moving_shape" style="background-image: url({{ URL::to('/img/manjakos/' . $one['blog-cover']['collections']['image'])}})"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.awards_icons')

        <section class="blog_card_holder">
            <div class="container">
                <div class="row">
                    <div class="blog_card" ng-repeat="services_benefits in includes.global.many[22]['blog_api']">
                        <a href="/blog/<%services_benefits.id%>/<%services_benefits.slugable.en%>">
                            <div class="" style="width: 100%;height: 330px; overflow: hidden;">
                                <img alt="" srcset="" ng-src="/img/manjakos/<%services_benefits['collections']['image']%>">
                            </div>
                        </a>
                        <div class="blog_text_holder">

                            <a href="/blog/<%services_benefits.id%>/<%services_benefits.slugable.en%>">
                                <h3><%services_benefits['collections']['title']['en']%></h3>
                            </a>
                            <!-- <img alt="" srcset="" ng-src="/img/manjakos/<%services_benefits['collections']['author_image']%>" class="author_image_cards"> -->
                            <a href="/blog/<%services_benefits.id%>/<%services_benefits.slugable.en%>">
                                <p ng-bind-html="services_benefits['collections']['description_sm']['en']"></p>
                            </a>
                            <a href="/blog/<%services_benefits.id%>/<%services_benefits.slugable.en%>" class="_morp_h_a">Read Article
                                <i class="fas fa-angle-right _morph_icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endsection