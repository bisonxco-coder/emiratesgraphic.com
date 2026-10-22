<div class="dark_navigationbar">
    @extends('index')
    @section('title_and_meta')

    @endsection
    @section('content')
</div>

<div class="animsition-overlay"></div>


<section class="blog_innerpage_ services_cover_top_12 blog_texta_holder" style="padding-bottom: 0px !important">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="font-family: Poppins-bold;">{{ $entity[0]['collections']['title']['en'] }}</h3>
                <p>{!! $entity[0]['collections']['description_sm']['en'] !!}</p>
            </div>
            <div class="blog_cover_imagetop" style="background-image: url({{ URL::to('/img/manjakos/' . $entity[0]['collections']['image'])}})"></div>
        </div>
    </div>
</section>


<div class="blog_texta_holder container_services_inner_a_body">
    <div class="container">
        {!! $entity[0]['collections']['description_lg']['en'] !!}
        <div class="morph_negative_container _for_general_morph_top mobile-d-n">
            <div class="moving_shape1 moving_shape2por"></div>
        </div>
        <div class="morph_negative_container _for_general_morph_top mobile-d-n">
            <div class="moving_shape1 moving_shape3por"></div>
        </div>
        <div class="morph_negative_container _for_general_morph_top mobile-d-n">
            <div class="moving_shape1"></div>
        </div>
        <div class="author_holder">
            <h5>{{ $entity[0]['collections']['author-name']['en'] }}</h5>
            <div class="imgauth" style="background-image: url({{ URL::to('/img/manjakos/' . $entity[0]['collections']['author_image'])}})"></div>
        </div>
        <div class="quotes_bay_">
            <div class="pikpresja_morphing">
                <div class="moving_shape1"></div>
                <img src="/img/portfolio/Live Videos2.png" alt="">
            </div>
            <h4>{{ $entity[0]['collections']['quote']['en'] }}</h4>
        </div>
    </div>
</div>

@include('includes.go_services')
@endsection