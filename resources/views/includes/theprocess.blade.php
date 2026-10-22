<section class="the_process_inc">
    <div class="container">
        <div class="row">  
            <div class="rellax lili_a mobile-d-n" data-rellax-speed="0.5"> <img src="img/Line 13.png" alt=""> 
            <div class="liluzivert">process</div></div> 
            <div class="col-md-10 offset-md-2 scrollbar_all_mob_red">
                <div class="process_card" ng-repeat="prod_one in includes.global.many[2]['proccess_a']"  data-aos="fade-up">
                <h6><span><%prod_one['collections']['number']['en']%></span><%prod_one['collections']['title']['en']%></h6>
                    <p ng-bind-html="prod_one['collections']['description']['en']"></p>
                </div>
                <div class="col-md-12 no_padding mobile-d-n">
                    <a href="/contact" class="_morp_h_a" style="color: white;">Let's build something
                    <i class="fas fa-angle-right _morph_icon"></i></a>
                </div>
            </div>
                <div class="col-md-12 desktop-d-n">                
                    <a href="/contact" class="_morp_h_a" style="color: white;">Let's build something
                    <i class="fas fa-angle-right _morph_icon"></i></a>
                </div>
        </div>
    </div>
</section>