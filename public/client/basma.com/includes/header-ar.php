<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بصمة - تطبيقك الشامل لحجز الشقق</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="img/Basma Logo.svg">
    
    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet">
    
    <!-- Arabic Font - Tajawal -->
    <style>
        @font-face {
            font-family: 'Tajawal';
            src: url('Tajawal/Tajawal-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Tajawal';
            src: url('Tajawal/Tajawal-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'Tajawal';
            src: url('Tajawal/Tajawal-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Tajawal';
            src: url('Tajawal/Tajawal-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
        @font-face {
            font-family: 'Tajawal';
            src: url('Tajawal/Tajawal-ExtraBold.ttf') format('truetype');
            font-weight: 800;
            font-style: normal;
        }
        @font-face {
            font-family: 'Tajawal';
            src: url('Tajawal/Tajawal-Black.ttf') format('truetype');
            font-weight: 900;
            font-style: normal;
        }
        @font-face {
            font-family: 'Tajawal';
            src: url('Tajawal/Tajawal-ExtraLight.ttf') format('truetype');
            font-weight: 200;
            font-style: normal;
        }
        
        /* Apply Tajawal font to Arabic page */
        body {
            font-family: 'Tajawal', sans-serif !important;
        }
        
        h1, h2, h3, h4, h5, h6,
        .display-1, .display-2, .display-3, .display-4, .display-5, .display-6 {
            font-family: 'Tajawal', sans-serif !important;
            font-weight: 800 !important;
        }
        
        p, .lead, .text-muted {
            font-family: 'Tajawal', sans-serif !important;
        }
    </style>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- ===== Header / Navigation ===== -->
    <header class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="ar.php">
                <!-- Basma Logo with Fingerprint Design -->
                <div class="logo-container me-2">
                    <img src="img/Basma Logo.svg" alt="شعار بصمة">
                </div>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium px-4" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium px-4" href="#features">تحميل التطبيق</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium px-4" href="#testimonials">الميزات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium px-4" href="#faq">الأسئلة الشائعة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium px-4" href="#download">تعمل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium px-4" href="index.php">EN</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </header>