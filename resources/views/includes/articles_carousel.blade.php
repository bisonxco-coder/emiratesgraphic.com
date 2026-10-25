<section class="article_container">
    <div class="container-fluid article_container">
        <div class="row">
            <h3>Articles</h3>
        </div>
        <div class="slide__container owl-carousel">

            @foreach($global['many'][0]['blog_api'] as $loop_repeat)
            <div class="item itemmain">
                <a href="{!!URL::to('/blog/'.$loop_repeat['id'].'/'.$loop_repeat['slugable']['en'].'/')!!}">
                    <div class="box_article"
                        style="background-image: url('{{URL::to(file_exists(public_path('img/manjakos/webp/'.$loop_repeat['collections']['image'].'.webp')) ? '/img/manjakos/webp/'.$loop_repeat['collections']['image'].'.webp' : '/img/manjakos/'.$loop_repeat['collections']['image'])}}');">
                        <div>
                            <p>{{$loop_repeat['collections']['author-name']['en']}}</p>
                            <h4>{!!$loop_repeat['collections']['title']['en']!!}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>