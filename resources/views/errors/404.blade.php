@extends('index')
@section('title_and_meta')
    <title>Page not found (404) - Emirates Graphic</title>
    <meta name="description" content="The page you are looking for could not be found. Explore Emirates Graphic services, portfolio and blog.">
    <meta name="robots" content="noindex, follow">
@endsection
@section('content')
<style>
    .eg404_wrap { min-height: 70vh; display: flex; align-items: center; padding: 160px 0 100px; background: #F5F5F5; }
    .eg404_wrap .eg404_code { font-family: Poppins-bold, sans-serif; font-size: 120px; line-height: 1; color: #E82A2A; margin: 0 0 10px; }
    .eg404_wrap h1 { font-family: Poppins-bold, sans-serif; font-size: 40px; color: #272F34; margin: 0 0 20px; }
    .eg404_wrap p { font-size: 18px; color: #555; max-width: 640px; margin: 0 0 30px; }
    .eg404_links a { display: inline-block; margin: 0 12px 12px 0; padding: 12px 26px; border-radius: 30px; background: #272F34; color: #fff !important; text-decoration: none; font-size: 15px; font-family: sf-ui-display-semibold, SF-UI-Display-Regular, sans-serif; }
    .eg404_links a:first-child { background: #E82A2A; }
    .eg404_links a:hover { opacity: .85; }
</style>
<section class="eg404_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="eg404_code">404</p>
                <h1>Sorry, this page could not be found</h1>
                <p>The page may have been moved or no longer exists. Here are some helpful links instead:</p>
                <div class="eg404_links">
                    <a href="/">Home</a>
                    <a href="/services">Services</a>
                    <a href="/web-development">Web Development</a>
                    <a href="/app-development">App Development</a>
                    <a href="/digital-marketing-agency-uae">Digital Marketing</a>
                    <a href="/blog">Blog</a>
                    <a href="/contact">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
