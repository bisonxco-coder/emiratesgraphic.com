
@extends('index')
@section('title_and_meta')

@endsection
@section('content')


<div class="animsition-overlay">


<section class="top_cover_page services_cover_top_12 services_innerpage_1" style="background:#F5F5F5;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3>{{ $entity[0]['collections']['title']['en'] }}</h3>
                <p>{!! $entity[0]['collections']['description']['en'] !!}</p>
                <a href="/contact" class="_morp_h_a">Start Building
                <i class="fas fa-angle-right _morph_icon"></i></a>
            </div>
            <div class="col-md-5">
                <div class="morph_negative_container _for_general_morph_top">
                    <div class="moving_shape1"></div>
                </div>
                <div class="morphing_container">
                    <div class="moving_shape inc_image" style="background-image: url({{ URL::to('/img/manjakos/' . $entity[0]['collections']['Image_cover'])}})"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.awards_icons')

<div class="container_services_inner_a_body">
        <div class="container">
            {!! $entity[0]['collections']['main_body']['en'] !!}
            <div class="morph_negative_container _for_general_morph_top mobile-d-n">
                <div class="moving_shape1 moving_shape2por"></div>
            </div>
            <div class="morph_negative_container _for_general_morph_top mobile-d-n">
                <div class="moving_shape1 moving_shape3por"></div>
            </div>
            <div class="morph_negative_container _for_general_morph_top mobile-d-n">
                <div class="moving_shape1"></div>
            </div>
        </div>
    </div>

@include('includes.portfolioslider')

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
            <div class="services_many222" ng-repeat="services_many_repeat in includes.global.many[7]['more_what_app']">
                <a ng-href="/app-services/<%services_many_repeat.id%>/<%services_many_repeat.slugable.en%>"><h5><%services_many_repeat['collections']['title']['en']%></h5>
                <p ng-bind-html="services_many_repeat['collections']['description']['en']"></p></a>
            </div>
            <div class="services_many222">
            <a href="/contact" class="_morp_h_a" style="">Boost Your Business<i class="fas fa-angle-right _morph_icon"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
 