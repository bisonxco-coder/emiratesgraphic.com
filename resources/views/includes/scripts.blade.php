<!-- Script ZONE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="{{url('/js/script_home.min.js')}}"></script>
<script>
    var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
        cookieExpire: 10,
        timer: 10,
        callback: function () {
            console.log('ouibounce fired!');
        }
    });

    $('body').on('click', function () {
        $('#ouibounce-modal').hide();
        _ouiBounce.disable({
            cookieExpire: 8,
            sitewide: true
        });
    });

    $('#ouibounce-modal .close_btn1').on('click', function () {
        $('#ouibounce-modal').hide();
        _ouiBounce.disable({
            cookieExpire: 8,
            sitewide: true
        });
    });

    $('#ouibounce-modal .modal_me').on('click', function (e) {
        e.stopPropagation();
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.2
    });
</script>
<script>
    // ======================
    // Chat Scriot
    // ======================
    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
                z._.push(c)
            },
            $ = z.s =
            d.createElement(s),
            e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set.
            _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute('charset', 'utf-8');
        $.src = 'https://v2.zopim.com/?4l91RRwGUZLoqzBgW8xVkSd6LLRBCM87';
        z.t = +new Date;
        $.
        type = 'text/javascript';
        e.parentNode.insertBefore($, e)
    })(document, 'script');
    // ======================
    // Chat Scriot
    // ======================

    $(document).on("scroll", function () {
        var pixels = $(document).scrollTop();
        var pageHeight = $(document).height() - $(window).height();
        var progress = 100 * pixels / pageHeight;

        $("div.progress").css("width", progress + "%");
    })
</script>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3333064.js"></script>


<script>
    window.addEventListener("DOMContentLoaded", function (e) {

        var stage = document.getElementById("stage");
        var fadeComplete = function (e) {
            stage.appendChild(arr[0]);
        };
        var arr = stage.getElementsByTagName("span");
        for (var i = 0; i < arr.length; i++) {
            arr[i].addEventListener("animationend", fadeComplete, false);
        }

    }, false);
</script>

<!-- Linkedin Tag -->
<script type="text/javascript">
    _linkedin_partner_id = "171051";

    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
    (function (l) {
        if (!l) {
            window.lintrk = function (a, b) {
                window.lintrk.q.push([a, b])
            };
            window.lintrk.q = []
        }
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })(window.lintrk);
</script>
<noscript>
    <img height="1" width="1" style="display:none;" alt=""
        src="https://px.ads.linkedin.com/collect/?pid=171051&fmt=gif" />
</noscript>