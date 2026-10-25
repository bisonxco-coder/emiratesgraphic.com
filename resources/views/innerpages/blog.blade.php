    @extends('index')
    @section('title_and_meta')

    <title>{{ strip_tags($entity[0]['collections']['title']['en']) }} - Emirates Graphic</title>
    @php
        $egMetaDesc = '';
        if (!empty($entity[0]['collections']['description_sm']['en']) && is_string($entity[0]['collections']['description_sm']['en'])) {
            $egMetaDesc = trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($entity[0]['collections']['description_sm']['en']), ENT_QUOTES, 'UTF-8')));
            $egMetaDesc = str_limit($egMetaDesc, 157, '...');
        }
        // 2026-10-23: fallback excerpt (~155 chars) from post body when there is no short description
        if ($egMetaDesc === '' && !empty($entity[0]['collections']['description_lg']['en']) && is_string($entity[0]['collections']['description_lg']['en'])) {
            $egMetaDesc = trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags(preg_replace('/<(script|style)\b[^>]*>.*?<\/\1>/is', ' ', $entity[0]['collections']['description_lg']['en'])), ENT_QUOTES, 'UTF-8')));
            $egMetaDesc = str_limit($egMetaDesc, 155, '...');
        }
        $egCanonical = url('/blog/'.$entity[0]['id'].'/'.(is_array($entity[0]['slugable']) && !empty($entity[0]['slugable']['en']) ? $entity[0]['slugable']['en'] : ''));
    @endphp
    @if($egMetaDesc !== '')
    <meta name="description" content="{{ $egMetaDesc }}">
    @endif
    <link rel="canonical" href="{{ $egCanonical }}">
    <style>
        .blog_newcover22 h1.eg_post_title{font-size:50px;color:#fff;text-align:center;text-transform:uppercase;line-height:65px}
        @media only screen and (max-width:1000px){.blog_newcover22 h1.eg_post_title{font-size:33px;line-height:30px}}
    </style>


   @if(!empty($entity[0]['collections']['schema']['en']))
    <script type="application/ld+json">
        {!! strip_tags(html_entity_decode($entity[0]['collections']['schema']['en'])) !!}
    </script>
@endif
    @endsection
    @section('content')

<div class="animsition-overlay">

    <section class="blog_newcover22"
        style="background-image: url({{ URL::to(file_exists(public_path('img/manjakos/webp/'.$entity[0]['collections']['image'].'.webp')) ? '/img/manjakos/webp/'.$entity[0]['collections']['image'].'.webp' : '/img/manjakos/'.$entity[0]['collections']['image'])}})">
        <div class="text_holder">
            <h6>{{ $entity[0]['collections']['quote']['en'] }}</h6>
            <h1 class="eg_post_title" style="font-family: Poppins-bold !important;">{!! $entity[0]['collections']['title']['en'] !!}</h1>
        </div>
    </section>

    <section class="blog_innerpage_ services_cover_top_12 blog_texta_holder tomel" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-family: Poppins-bold;">{!! $entity[0]['collections']['title']['en'] !!}</h3>
                    <p>{!! $entity[0]['collections']['description_sm']['en'] !!}</p>
                </div>
                <!-- <div class="blog_cover_imagetop"
                    style="background-image: url({{ URL::to(file_exists(public_path('img/manjakos/webp/'.$entity[0]['collections']['image'].'.webp')) ? '/img/manjakos/webp/'.$entity[0]['collections']['image'].'.webp' : '/img/manjakos/'.$entity[0]['collections']['image'])}})">
                </div> -->
            </div>
        </div>
    </section>

    <div class="blog_texta_holder plan container_services_inner_a_body black">
        <div class="container">
            {!! is_string($entity[0]['collections']['description_lg']['en']) ? preg_replace('/<(\/?)h1(\s|>)/i', '<$1h2$2', $entity[0]['collections']['description_lg']['en']) : $entity[0]['collections']['description_lg']['en'] !!}
            <div class="author_holder">
                <div class="imgauth"
                    style="background-image: url({{ URL::to(file_exists(public_path('img/manjakos/webp/'.$entity[0]['collections']['author_image'].'.webp')) ? '/img/manjakos/webp/'.$entity[0]['collections']['author_image'].'.webp' : '/img/manjakos/'.$entity[0]['collections']['author_image'])}})">
                </div>
                <h5>{{ $entity[0]['collections']['author-name']['en'] }}</h5>
            </div>
        </div>

    </div>

    <section class="blog_innerslimsection">
        <div class="container">
            <h4>{{ $entity[0]['collections']['form-title']['en'] }}</h4>
            <div class="row">
                <div class="form_cont">
                    <p>Let's talk about your Project</p>
                    <div class="form_holder">
                        <form id="form_blog_contact" method="POST">
                            <input type="text" placeholder="Name" name="FNAME" required>
                            <input type="text" placeholder="Phone" name="MMERGE4" required>
                            <input type="email" placeholder="Email" name="EMAIL" required>
                            <input type="hidden" name="MMERGE3" value="{{ Request::url() }}">
                            <input type="hidden" name="interested_in" value="Blog Contact">
                            <input type="hidden" name="MMERGE2" value="">
                            <button type="submit" id="submitBlogContactBtn" class="button_submit_a">Call Me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="blog_subscribe">
        <div class="container">
            <h3>Blog subscribtion</h3>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="First Name" name="">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Last name" name="">
                </div>
                
                <div class="col-md-6">
                    <input type="text" placeholder="Company name" name="">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="email" name="">
                </div>
                <div class="col-md-12">
                    <select name="" id="">
                        <option value="your job function" selected disabled>your job function</option>
                        <option value="Programmer">Programmer</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <a href="/contact" class="_morp_h_a" style="color: white;">Sent Me Updates
                        <i class="fas fa-angle-right _morph_icon"></i></a>
                </div>
            </div>
        </div>
    </section> -->
    @include('includes.articles_carousel')
    <!-- !@include('includes.go_services') -->
    @endsection