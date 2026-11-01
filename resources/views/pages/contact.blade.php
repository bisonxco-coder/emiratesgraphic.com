    @extends('index')
    @section('title_and_meta')
    <title>Cutting Edge Digital Marketing Agency Dubai - Emirates Graphic</title>
    <meta name="description"
        content="Emirates Graphic is one of the leading Digital Agency delivering all types of Digital Marketing, Branding & Development services in Dubai." />
    @include('includes.google_scripts')
    @endsection
    @section('content')

    <div class="animsition-overlay">
        <section class="contact_holder2">
            <div class="contact_dark_section">
                <div class="row">
                    <h1 style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Contact Emirates Graphic</h1>{{-- 2026-11-01: SEO H1 added (visually hidden, layout unchanged) --}}
                    <h2>Have an idea?</h2>
                    <p>Bring your next project to life. Please fill in the information below and one of our consultants
                        will reach out to you today!</p>
                </div>
                <div id="mc_embed_signup">
                    <!-- <form
                        action="https://emiratesgraphic.us16.list-manage.com/subscribe/post?u=4d5bf31cd0d012031c3af0d1d&amp;id=cbd0f44ebf"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                        class="validate"> -->
                        <form name="sentMessage" action="" id="form_contact_main">
                        <div class="row input_row">
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Full Name"
                                required>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email"
                                required>
                            <input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4" placeholder="Phone"
                                required>
                            <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3" placeholder="Website">
                                <select name="interested_in" id="" class="full_width">
                                    <option value="" selected disabled>Interested In </option>
                                    <option value="Mobile App development">Mobile App development</option>
                                    <option value="Web development">Web development</option>
                                    <option value="E-commerce Marketing">E-commerce Marketing</option>
                                    <option value="Mobile App Marketing">Mobile App Marketing</option>
                                    <option value="B2B Marketing">B2B Marketing</option>
                                    <option value="Lead Generation">Lead Generation</option>
                                    <option value="Prototype">Prototype</option>
                                    <option value="Other">Other</option>
                                </select>
                            <textarea name="MMERGE2" id="mce-MMERGE2" placeholder="Message" id="" cols="30"
                                rows="10"></textarea>

                            <!-- <input type="text" name="email" placeholder="Your email" id="email">
                            <input type="hidden" name="submitted" value="submit">
                            <input type="submit" name="submit" value="Subscribe" id="submit"> -->
                        </div>
                        <div class="row" style="padding: 5px;">
                            <!-- <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_4d5bf31cd0d012031c3af0d1d_cbd0f44ebf" tabindex="-1" value="">
                            </div> -->

                            <div class="clear">
                                <input type="submit" value="Let's Go" name="subscribe" id="mc-embedded-subscribe"
                                    class="button_submit_a">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row footer_row_contact_">
                    <ul>
                        <li><a href="tel:+971 50 912 45 67">Tel: +971 50 912 45 67</a></li>
                        <li><a href="mailto:info@emiratesgraphic.com">info@emiratesgraphic.com</a></li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#">35th Floor, Swiss Tower <br>
                            Cluster Y, Jumeirah Lakes Towers
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="https://web.facebook.com/EmiratesGraphic/">Facebook</a></li>
                        <li><a href="https://twitter.com/designxemirates">Twitter</a></li>
                        <li><a href="https://www.instagram.com/EMIRATESGRAPHIC/">Instagram</a></li>
                        <li><a href="https://www.linkedin.com/company/5203570/">LinkedIn</a></li>
                        <li><a href="https://www.youtube.com/channel/UC5LT8GrHp8QaLEcw8V1MRbg">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <div class="contact_dark_section_maps">
                <div id="map"></div>
            </div>
        </section>
    </div>
<style>
    .no_foot_spec {
        display: none !important;
        visibility: hidden !important;
    }
</style>
    <script>
        function initMap() {
            var e = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                scrollwheel: !1,
                center: {
                    lat: 25.0771753,
                    lng: 55.1496346
                },
                styles: [{
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{
                        color: "#e9e9e9"
                    }, {
                        lightness: 17
                    }]
                }, {
                    featureType: "landscape",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f5f5f5"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 17
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 29
                    }, {
                        weight: .2
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 18
                    }]
                }, {
                    featureType: "road.local",
                    elementType: "geometry",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 16
                    }]
                }, {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f5f5f5"
                    }, {
                        lightness: 21
                    }]
                }, {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{
                        color: "#dedede"
                    }, {
                        lightness: 21
                    }]
                }, {
                    elementType: "labels.text.stroke",
                    stylers: [{
                        visibility: "on"
                    }, {
                        color: "#ffffff"
                    }, {
                        lightness: 16
                    }]
                }, {
                    elementType: "labels.text.fill",
                    stylers: [{
                        saturation: 36
                    }, {
                        color: "#333333"
                    }, {
                        lightness: 40
                    }]
                }, {
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f2f2f2"
                    }, {
                        lightness: 19
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#fefefe"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#fefefe"
                    }, {
                        lightness: 17
                    }, {
                        weight: 1.2
                    }]
                }]
            });
            new google.maps.Marker({
                position: {
                    lat: 25.0771753,
                    lng: 55.1496346
                },
                map: e,
                icon: "img/Group 703.png"
            })
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6V1PFtdP3xYfm9KQuKR618IS28g50FNY&callback=initMap">
    </script>
    <script>
        $("#subscribe-form").submit(function () {
            $.when(
                $.ajax({
                    url: 'mailchimp.php',
                    type: 'POST',
                    data: $('#subscribe-form').serialize() + '&ajax=post',
                    success: function (msg) {
                        $('#message').html("It works!");
                    }
                })).then(function () {
                setTimeout(function () {
                    $.ajax({
                        url: 'js/mailchimp.php',
                        type: 'POST',
                        data: $('#subscribe-form').serialize() + '&ajax=put'
                    });
                }, 1000);
            });
            return false;
        });
    </script>
    @endsection