  @extends('index')
  @section('title_and_meta')
    <title>Best Web Design Agency in the UAE</title>
    <meta name="description" content="Every year, Clutch awards the highest-performing B2B companies by industry and location. Emirates Graphic is honored to be nominated the best performer as part of their 2019 review.">
  @include('includes.google_scripts')
  @endsection
  @section('content')
  <div class="animsition-overlay">
    <div style="height: 100%;width: 100%;background: #141320; z-index: -1;">
    <section class="main_portfolio media_press_a" data-0="transform: translateX(80px;)" data-3000="transform: translateX(-2690px)">

      <section ng-repeat="slider_media in includes.global.many[4]['media_cards']" class="media_cards_slide  <%slider_media['collections']['class_edition']['en']%>">
        <div class="imageS_grid_a_medi">
          <img ng-src="/img/manjakos/<%slider_media['collections']['project_icon']%>" class="image_project"><br>
          <img ng-src="/img/manjakos/<%slider_media['collections']['press_logo']%>" class="image_press">
        </div>
        <div class="portfolio_item">
          <h3><%slider_media['collections']['title']['en']%></h3>
          <div ng-bind-html="slider_media['collections']['description']['en']"></div>
          <a ng-href="<%slider_media['collections']['press_url_redirect']['en']%>" class="_morp_h_a" target="_blank"><%slider_media['collections']['press_url_name']['en']%>
            <i class="fas fa-angle-right _morph_icon"></i></a>
        </div>
      </section>
    </section>
    </div>
  </div>
<style>
    .no_foot_spec {
        display: none !important;
        visibility: hidden !important;
    }
</style>
  @endsection