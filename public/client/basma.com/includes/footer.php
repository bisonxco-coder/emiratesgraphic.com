    <!-- ===== Footer ===== -->
    <footer id="contact" class="basma-footer bg-white py-5 border-top">
        <div class="container-fluid">
            <div class="row g-6">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <!-- TODO: Replace with Basma logo -->
                        <img src="img/Basma Logo.svg" alt="Basma Logo" class="me-2" style="height: 32px;">
                        <span class="fw-bold text-dark fs-4">Basma</span>
                    </div>
                    <p class="text-muted mb-3">
                        Basma makes apartment rentals simple - find the best 
                        apartment deals in your city today.
                    </p>
                    <p class="text-muted small mb-0">
                        Email: hello@basma.com
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="fw-bold text-dark mb-3">Company</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="/" class="text-muted text-decoration-none">Home</a></li>
                                <li class="mb-2"><a href="/" class="text-muted text-decoration-none">404</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <h6 class="fw-bold text-dark mb-3">App</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Download For IOS</a></li>
                                <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Download For Android</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <h6 class="fw-bold text-dark mb-3">Legal</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="privacy-policy.php" class="text-muted text-decoration-none">Privacy Policy</a></li>
                                <li class="mb-2"><a href="terms-of-service.php" class="text-muted text-decoration-none">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted small mb-0">
                        © 2025 Basma Services. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-md-end gap-2">
                        <a href="#" class="text-muted"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-muted"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-muted"><i class="bi bi-instagram fs-5"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if Swiper is loaded
            if (typeof Swiper !== 'undefined') {
                const featuresSwiper = new Swiper('.featuresSwiper', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    centeredSlides: false,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        1200: {
                            slidesPerView: 4,
                            spaceBetween: 30,
                        }
                    },
                    navigation: {
                        nextEl: '.swiper-button-next-custom',
                        prevEl: '.swiper-button-prev-custom',
                    },
                    // Prevent overflow
                    watchOverflow: true,
                    // Ensure proper initialization
                    init: true,
                    observer: true,
                    observeParents: true,
                });
                
                // Debug: Check if buttons exist
                console.log('Next button:', document.querySelector('.swiper-button-next-custom'));
                console.log('Prev button:', document.querySelector('.swiper-button-prev-custom'));
                
                // Initialize Logo Swiper
                const logoSwiper = new Swiper('.logoSwiper', {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 40,
                        },
                        992: {
                            slidesPerView: 5,
                            spaceBetween: 50,
                        },
                        1200: {
                            slidesPerView: 6,
                            spaceBetween: 60,
                        }
                    },
                });
                
                // Initialize Testimonial Swiper
                const testimonialSwiper = new Swiper('.testimonialSwiper', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    centeredSlides: true,
                    autoplay: {
                        delay: 6000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.testimonial-next',
                        prevEl: '.testimonial-prev',
                    },
                });
            } else {
                console.error('Swiper library not loaded');
            }
            
            // Initialize AOS - Disable on mobile
            function initAOS() {
                if (window.innerWidth > 768) {
                    AOS.init({
                        duration: 800,
                        once: true,
                        offset: 100,
                        easing: 'ease-out-cubic'
                    });
                } else {
                    // Disable AOS on mobile
                    AOS.init({
                        disable: true
                    });
                }
            }
            
            // Initialize on load
            initAOS();
            
            // Re-initialize on window resize
            window.addEventListener('resize', function() {
                AOS.refresh();
                initAOS();
            });
        });
    </script>
</body>
</html>