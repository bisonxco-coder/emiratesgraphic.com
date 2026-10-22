    <!-- ===== Footer ===== -->
    <footer id="contact" class="basma-footer bg-white py-5 border-top" dir="rtl">
        <div class="container-fluid">
            <div class="row g-6">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <img src="img/Basma Logo.svg" alt="شعار بصمة" class="me-2" style="height: 32px;">
                        <span class="fw-bold text-dark fs-4">بصمة</span>
                    </div>
                    <p class="text-muted mb-3">
                        بصمة تجعل تأجير الشقق أمراً بسيطاً - ابحث عن أفضل
                        عروض الشقق في مدينتك اليوم.
                    </p>
                    <p class="text-muted small mb-0">
                        البريد الإلكتروني: hello@basma.com
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="fw-bold text-dark mb-3">الشركة</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="ar.php" class="text-muted text-decoration-none">الرئيسية</a></li>
                                <li class="mb-2"><a href="#" class="text-muted text-decoration-none">من نحن</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <h6 class="fw-bold text-dark mb-3">التطبيق</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-muted text-decoration-none">تحميل لآيفون</a></li>
                                <li class="mb-2"><a href="#" class="text-muted text-decoration-none">تحميل لأندرويد</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <h6 class="fw-bold text-dark mb-3">قانوني</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="privacy-policy.php" class="text-muted text-decoration-none">سياسة الخصوصية</a></li>
                                <li class="mb-2"><a href="terms-of-service.php" class="text-muted text-decoration-none">شروط الخدمة</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted small mb-0">
                        © 2025 بصمة. جميع الحقوق محفوظة.
                    </p>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end gap-3">
                        <a href="#" class="text-muted">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="#" class="text-muted">
                            <i class="bi bi-twitter fs-5"></i>
                        </a>
                        <a href="#" class="text-muted">
                            <i class="bi bi-instagram fs-5"></i>
                        </a>
                        <a href="#" class="text-muted">
                            <i class="bi bi-linkedin fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS - Disable on mobile
        function initAOS() {
            if (window.innerWidth > 768) {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true,
                    mirror: false
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

        // Logo Swiper
        const logoSwiper = new Swiper('.logoSwiper', {
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            slidesPerView: 2,
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 60,
                },
            },
        });
    </script>
</body>
</html>