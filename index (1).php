<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNDRY Group | منظومة المستقبل الرقمي</title>
    <meta name="description" content="SNDRY Group - حلول برمجية متكاملة (ERP, POS, Freelance) لإدارة أعمالك بذكاء.">

    <link href="public/images/sndryg.png" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />


    <style>
        /* =========================================
           1. CORE SETTINGS & BRAND COLORS
           ========================================= */
        :root {
            --bg-body: #f8fafc;
            --bg-card: #ffffff;
            --primary-glow: #ff7e67;
            --accent-glow: #38bdf8;
            --gold-accent: #fbbf24;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --font-main: 'Cairo', sans-serif;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--bg-body);
            color: var(--text-main);
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        /* --- NEW: Dynamic Mesh Background --- */
        .mesh-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -2;
            background-color: #f8fafc;
            background-image: 
                radial-gradient(at 0% 0%, hsla(253,16%,7%,0) 0, hsla(253,16%,7%,0) 50%), 
                radial-gradient(at 50% 0%, hsla(225,39%,30%,0) 0, hsla(225,39%,30%,0) 50%), 
                radial-gradient(at 100% 0%, hsla(339,49%,30%,0) 0, hsla(339,49%,30%,0) 50%);
        }

        .mesh-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.6;
            animation: floatMesh 20s infinite alternate cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mesh-1 { top: -10%; left: -10%; width: 50vw; height: 50vw; background: rgba(56, 189, 248, 0.15); }
        .mesh-2 { bottom: -10%; right: -10%; width: 60vw; height: 60vw; background: rgba(255, 126, 103, 0.1); animation-delay: -5s; }
        .mesh-3 { top: 40%; left: 40%; width: 40vw; height: 40vw; background: rgba(251, 191, 36, 0.1); animation-delay: -10s; }

        @keyframes floatMesh {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(50px, -50px) scale(1.1); }
        }

        /* --- Scrollbar --- */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

        /* Typography */
        h1, h2, h3, h4, h5, h6 { font-weight: 800; letter-spacing: -0.01em; color: #0f172a !important; }
        p { line-height: 1.8; color: var(--text-muted) !important; font-weight: 400; font-size: 1.05rem; }
        
        .display-1 {
            font-size: clamp(2.5rem, 6vw, 5rem); /* Increased size */
            font-weight: 900;
            line-height: 1.3; /* Fix for eaten text */
        }

        /* Text Gradients */
        .text-gradient-primary {
            background: linear-gradient(135deg, #076299 0%, #ff7e67 50%, #236d9a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: shine 5s linear infinite;
            padding-bottom: 10px; /* Important fix for clipping */
        }
        .text-gradient-gold {
            background: linear-gradient(to right, #d97706, #fbbf24);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }

        /* --- Buttons --- */
        .btn-primary-glow {
            background: linear-gradient(135deg, var(--primary-glow) 0%, #f43f5e 100%);
            border: none; color: white !important; padding: 12px 35px; border-radius: 50px; font-weight: 700;
            box-shadow: 0 5px 20px rgba(255, 126, 103, 0.3); transition: 0.4s; position: relative; overflow: hidden;
        }
        .btn-primary-glow:hover {
            box-shadow: 0 15px 40px rgba(255, 126, 103, 0.5); transform: translateY(-3px);
        }
        .btn-luxe {
            background: rgba(255, 255, 255, 0.8); 
            border: 1px solid rgba(15, 23, 42, 0.1);
            color: #0f172a !important; 
            padding: 12px 30px; 
            border-radius: 50px; 
            font-weight: 700; transition: 0.4s;
        }
        .btn-luxe:hover { 
            background: #0f172a; color: white !important; border-color: #0f172a; 
        }

        /* =========================================
           2. NEW HERO SECTION & WAVES
           ========================================= */
        #hero {
            position: relative;
            overflow: hidden;
            /* Dynamic subtle grid */
            background-image: 
                linear-gradient(rgba(15, 23, 42, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(15, 23, 42, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        /* --- تحسينات قسم الخدمات (Services Vibrant Cards) --- */
.service-card-vibrant {
    background: #ffffff;
    border-radius: 24px;
    padding: 40px 30px;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* حركة نطاطة خفيفة */
    border: 1px solid rgba(0,0,0,0.05);
    box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    z-index: 1;
}

/* تأثير التلوين عند الهوفر */
.service-card-vibrant::before {
    content: "";
    position: absolute; top: 0; left: 0; width: 100%; height: 6px;
    background: var(--card-color); /* سيأخذ اللون من الـ HTML */
    transform: scaleX(0); 
    transform-origin: left;
    transition: 0.4s ease;
}

.service-card-vibrant:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
}

.service-card-vibrant:hover::before {
    transform: scaleX(1);
}

/* الأيقونة الكبيرة الملونة */
.vibrant-icon-box {
    width: 80px; height: 80px;
    border-radius: 20px;
    display: flex; align-items: center; justify-content: center;
    font-size: 2.5rem;
    margin-bottom: 25px;
    background: var(--icon-bg); /* خلفية فاتحة للون */
    color: var(--card-color); /* لون الأيقونة */
    transition: 0.4s;
}

.service-card-vibrant:hover .vibrant-icon-box {
    background: var(--card-color);
    color: #ffffff;
    transform: rotate(5deg) scale(1.1);
    box-shadow: 0 10px 20px var(--shadow-color);
}

/* زر الرابط */
.service-link {
    margin-top: 20px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-weight: 700;
    color: var(--text-muted);
    text-decoration: none;
    transition: 0.3s;
}
.service-card-vibrant:hover .service-link {
    color: var(--card-color);
    transform: translateX(-5px);
}

/* --- تحسينات قسم المميزات (Features Depth) --- */
.feature-blob-bg {
    position: absolute;
    width: 350px; height: 350px;
    border-radius: 50%;
    filter: blur(80px);
    z-index: -1;
    opacity: 0.5;
}
        /* Moving Waves Container */
        .hero-waves-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            overflow: hidden;
            line-height: 0;
            z-index: 1;
        }
        
        .wave-svg {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 100%;
            background-repeat: repeat-x;
            background-position: 0 bottom;
            transform-origin: center bottom;
        }

        /* Wave Animations */
        .wave-layer-1 {
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="%23f8fafc" opacity="0.6"/></svg>');
            z-index: 3;
            opacity: 1;
            animation: waveMove 10s linear infinite;
        }
        .wave-layer-2 {
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="%2338bdf8" opacity="0.1"/></svg>');
            z-index: 2;
            height: 180px;
            animation: waveMove 15s linear infinite reverse;
        }
        .wave-layer-3 {
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%23ff7e67" opacity="0.05"/></svg>');
            z-index: 1;
            height: 200px;
            animation: waveMove 20s linear infinite;
        }

        @keyframes waveMove {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* =========================================
           3. TAILWIND STYLE PARTNERS SECTION
           ========================================= */
        .partners-section-tailwind {
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
            padding: 40px 0;
            position: relative;
            z-index: 5;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        
        .marquee-wrapper {
            overflow: hidden; position: relative; width: 100%;
            mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
        }
        .marquee-content { display: flex; width: max-content; animation: scroll 40s linear infinite; gap: 60px; }
        
        .partner-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #94a3b8; /* Slate-400 */
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            filter: grayscale(100%);
            opacity: 0.7;
        }
        
        .partner-logo:hover {
            color: var(--primary-glow);
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.05);
        }

        @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(calc(-50% - 30px)); } }


        /* =========================================
           4. COMPONENTS (Cards, Nav)
           ========================================= */
        .navbar { padding: 20px 0; transition: 0.4s; z-index: 1000; }
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0,0,0,0.05); padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }
        .nav-link { color: #475569 !important; margin: 0 10px; font-weight: 600; opacity: 0.8; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { opacity: 1; color: var(--primary-glow) !important; }

        .glass-card {
            background: #ffffff; 
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 24px; padding: 35px; height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            transition: 0.4s; position: relative; overflow: hidden;
        }
        .glass-card:hover {
            transform: translateY(-5px); 
            background: #ffffff;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08); 
            border-color: var(--primary-glow);
        }
        .icon-box {
            width: 65px; height: 65px; border-radius: 16px; 
            background: rgba(15, 23, 42, 0.05); 
            display: flex; align-items: center; justify-content: center;
            font-size: 1.6rem; color: #0f172a; margin-bottom: 25px; transition: 0.4s;
        }
        .glass-card:hover .icon-box {
            background: linear-gradient(135deg, var(--primary-glow), var(--gold-accent));
            color: white; transform: scale(1.1) rotate(5deg);
        }

        /* --- 1. إعدادات الفوتر الجديد مع الموجة --- */
.footer-modern {
    position: relative;
    background-color: #0f172a; /* لون داكن فخم */
    color: #fff;
    padding-top: 100px; /* مسافة لتعويض ارتفاع الموجة */
    margin-top: 100px; /* مسافة لفصل الفوتر عن المحتوى */
}

/* تنسيق الموجة العلوية للفوتر */
.footer-wave-top {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: translateY(-99%); /* يرفع الموجة لتجلس "فوق" الفوتر */
}

.footer-wave-top svg {
    position: relative;
    display: block;
    width: calc(150% + 1.3px); /* عرض أكبر لحركة انسيابية */
    height: 80px; /* ارتفاع الموجة */
}

.footer-wave-top .shape-fill {
    fill: #0f172a; /* يجب أن يكون نفس لون خلفية الفوتر */
}

/* --- 2. فاصل موجة للأقسام الوسطى (Section Separator) --- */
/* سنضعه مثلاً بين قسم الخدمات وقسم المميزات */
.section-wave-divider {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg); /* نقلب الموجة لتكون في الأسفل */
}

.section-wave-divider svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 100px;
}

.section-wave-divider .shape-fill {
    fill: #f8fafc; /* لون القسم التالي (الخلفية الرمادية الفاتحة) */
}

/* --- 3. تأثيرات بصرية داخل الفوتر --- */
.footer-glow {
    position: absolute;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.15) 0%, transparent 70%);
    border-radius: 50%;
    top: -100px;
    right: -100px;
    pointer-events: none;
}
        .custom-shape-divider-top {
            position: absolute; top: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: translateY(-99%);
        }
        .custom-shape-divider-top svg { position: relative; display: block; width: calc(130% + 1.3px); height: 80px; }
        .custom-shape-divider-top .shape-fill { fill: #0f172a; }

        /* Animations */
        @keyframes shine { to { background-position: 200% center; } }

        /* Responsive */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: #ffffff; padding: 20px; border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-top: 15px;
            }
        }
    </style>
</head>

<body>

    <div class="mesh-background">
        <div class="mesh-blob mesh-1"></div>
        <div class="mesh-blob mesh-2"></div>
        <div class="mesh-blob mesh-3"></div>
    </div>

    <div style="position: fixed; inset: 0; opacity: 0.03; pointer-events: none; z-index: -1; background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center gap-2">
                <img src="public/images/sndryg.png" alt="SNDRY" style="height: 40px;"> 
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-1 text-dark"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <div class="navbar-nav bg-white bg-opacity-80 backdrop-blur rounded-pill px-4 py-2 border border-secondary border-opacity-10 mt-3 mt-lg-0 mx-auto shadow-sm">
                    <a href="#hero" class="nav-link active">الرئيسية</a>
                    <a href="#services" class="nav-link">المنصات</a>
                    <a href="#features" class="nav-link">المميزات</a>
                    <a href="#testimonials" class="nav-link">العملاء</a>
                    <a href="#faq" class="nav-link">الأسئلة</a>
                </div>

                <div class="d-flex flex-column flex-lg-row gap-3 mt-3 mt-lg-0 align-items-center">
                    <a href="#contact" class="btn-luxe btn-sm w-100 w-lg-auto text-center px-4">تواصل معنا</a>
                    <a href="https://sndry.net" class="btn-primary-glow btn-sm w-100 w-lg-auto text-center">دخول</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero" class="d-flex align-items-center min-vh-100 pt-5 position-relative">
        <div class="container pt-5 position-relative" style="z-index: 10;">
            <div class="text-center mb-5 gs-reveal">
                <h1 class="display-1 fw-black text-dark mb-3">
                    بوابتك نحو <br class="d-md-none">
                    <span class="text-gradient-primary">المستقبل الرقمي</span>
                </h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="d-inline-flex align-items-center gap-2 px-4 py-2 rounded-pill bg-white border border-primary border-opacity-10 shadow-sm mb-4 gs-reveal">
                        <span class="badge bg-primary bg-gradient rounded-pill px-3">جديد</span>
                        <small class="text-dark fw-bold">إصدار Mobile APP متاح الآن</small>
                    </div>
                    
                    <p class="fs-4 text-secondary mb-5 gs-reveal fw-medium lh-lg mx-auto" style="max-width: 800px;">
                        نحن لا نبني مجرد برمجيات، نحن نصمم منظومة عمل متكاملة (Ecosystem) تجمع بين الإدارة، المدفوعات، والعمل الحر في واجهة واحدة ساحرة.
                    </p>
                    
                    <div class="d-flex gap-3 justify-content-center flex-wrap gs-reveal pb-5">
                        <a href="#services" class="btn-primary-glow px-5 py-3 btn-lg">استكشف الحلول</a>
                        <a href="#" class="btn-luxe glightbox d-flex align-items-center gap-2 px-4 py-3 btn-lg shadow-sm">
                            <i class="bi bi-play-circle-fill fs-5 text-primary"></i> <span>شاهد العرض</span>
                        </a>
                    </div>

                    <div class="row justify-content-center mt-4 gs-reveal">
                        <div class="col-auto px-4 border-start border-dark border-opacity-10">
                            <h5 class="fw-black m-0">+500</h5>
                            <small class="text-muted">شريك نجاح</small>
                        </div>
                        <div class="col-auto px-4 border-start border-dark border-opacity-10">
                            <h5 class="fw-black m-0">99.9%</h5>
                            <small class="text-muted">وقت تشغيل</small>
                        </div>
                        <div class="col-auto px-4">
                            <h5 class="fw-black m-0">24/7</h5>
                            <small class="text-muted">دعم فني</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-waves-container">
            <div class="wave-svg wave-layer-1"></div> <div class="wave-svg wave-layer-2"></div> <div class="wave-svg wave-layer-3"></div> </div>
    </section>

    <section class="partners-section-tailwind">
        <div class="container-fluid p-0">
            <div class="marquee-wrapper">
                <div class="marquee-content">
                    <div class="partner-logo"><i class="bi bi-microsoft fs-3"></i> MICROSOFT</div>
                    <div class="partner-logo"><i class="bi bi-google fs-3"></i> GOOGLE CLOUD</div>
                    <div class="partner-logo"><i class="bi bi-amazon fs-3"></i> AMAZON AWS</div>
                    <div class="partner-logo"><i class="bi bi-stripe fs-3"></i> STRIPE</div>
                    <div class="partner-logo"><i class="bi bi-slack fs-3"></i> SLACK</div>
                    <div class="partner-logo"><i class="bi bi-spotify fs-3"></i> SPOTIFY</div>
                    <div class="partner-logo"><i class="bi bi-apple fs-3"></i> APPLE</div>
                    <div class="partner-logo"><i class="bi bi-meta fs-3"></i> META</div>
                    <div class="partner-logo"><i class="bi bi-microsoft fs-3"></i> MICROSOFT</div>
                    <div class="partner-logo"><i class="bi bi-google fs-3"></i> GOOGLE CLOUD</div>
                    <div class="partner-logo"><i class="bi bi-amazon fs-3"></i> AMAZON AWS</div>
                    <div class="partner-logo"><i class="bi bi-stripe fs-3"></i> STRIPE</div>
                </div>
            </div>
        </div>
    </section>

  <section id="services" class="py-5 bg-light position-relative">
    <div style="position: absolute; inset: 0; background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 30px 30px; opacity: 0.3;"></div>

    <div class="container py-5 position-relative z-1">
        <div class="text-center mb-5 gs-reveal">
            <span class="badge bg-white border border-secondary border-opacity-25 text-secondary px-3 py-2 rounded-pill shadow-sm mb-3">منظومة SNDRY</span>
            <h2 class="display-4 fw-black text-dark">حلول تقنية <span class="text-gradient-primary">بألوان الحياة</span></h2>
            <p class="text-muted lead">اختر المنصة المناسبة لنمو أعمالك</p>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6 gs-reveal">
                <div class="service-card-vibrant" style="--card-color: #10b981; --icon-bg: #ecfdf5; --shadow-color: rgba(16, 185, 129, 0.4);">
                    <div class="vibrant-icon-box">
                        <i class="bi bi-pie-chart-fill"></i>
                    </div>
                    <h4 class="fw-bold text-dark">SNDRY ERP</h4>
                    <p class="text-muted">نظام سحابي شامل. إدارة المخزون، الحسابات، والموارد البشرية في لوحة قيادة واحدة.</p>
                    <a href="https://erp.sndry.net" class="service-link stretched-link">جرب النظام <i class="bi bi-arrow-left"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gs-reveal">
                <div class="service-card-vibrant" style="--card-color: #0ea5e9; --icon-bg: #e0f2fe; --shadow-color: rgba(14, 165, 233, 0.4);">
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-white text-info border border-info border-opacity-25 shadow-sm">الأكثر مبيعاً</span>
                    </div>
                    <div class="vibrant-icon-box">
                        <i class="bi bi-shop"></i>
                    </div>
                    <h4 class="fw-bold text-dark">SNDRY POS</h4>
                    <p class="text-muted">نقاط بيع سريعة للمتاجر والمطاعم. تدعم الفوترة الإلكترونية وتعمل دون انترنت.</p>
                    <a href="https://pos.sndry.net" class="service-link stretched-link">ابدأ البيع <i class="bi bi-arrow-left"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gs-reveal">
                <div class="service-card-vibrant" style="--card-color: #f97316; --icon-bg: #fff7ed; --shadow-color: rgba(249, 115, 22, 0.4);">
                    <div class="vibrant-icon-box">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Freelance Platform</h4>
                    <p class="text-muted">منصة العمل الحر. توظيف نخبة المستقلين مع ضمان مالي كامل للطرفين.</p>
                    <a href="https://freelancer.sndry.net" class="service-link stretched-link">تصفح المشاريع <i class="bi bi-arrow-left"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gs-reveal">
                <div class="service-card-vibrant" style="--card-color: #ef4444; --icon-bg: #fef2f2; --shadow-color: rgba(239, 68, 68, 0.4);">
                    <div class="vibrant-icon-box">
                        <i class="bi bi-qr-code"></i>
                    </div>
                    <h4 class="fw-bold text-dark">SNDRY Forms</h4>
                    <p class="text-muted">بطاقات عمل ذكية (NFC) ونماذج تفاعلية. شارك هويتك الرقمية بلمسة واحدة.</p>
                    <a href="https://typeform.sndry.net" class="service-link stretched-link">صمم بطاقتك <i class="bi bi-arrow-left"></i></a>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 gs-reveal">
                <div class="service-card-vibrant d-flex flex-column flex-md-row align-items-center gap-4 text-center text-md-end" style="--card-color: #076299; --icon-bg: #f0f9ff; --shadow-color: rgba(7, 98, 153, 0.4);">
                    <div class="vibrant-icon-box mb-0 flex-shrink-0" style="width: 100px; height: 100px;">
                        <i class="bi bi-code-slash fs-1"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark">SNDRY Coding Solutions</h4>
                        <p class="text-muted mb-0">لديك فكرة مشروع خاصة؟ فريقنا من مهندسي البرمجيات جاهز لتحويل فكرتك إلى واقع باستخدام أحدث التقنيات (Laravel, Flutter, React).</p>
                        <a href="https://coding.sndry.net" class="service-link mt-3 stretched-link">اطلب استشارة مجانية <i class="bi bi-arrow-left"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    
    <section id="features" class="py-5 position-relative overflow-hidden bg-white">
    
    <div class="container py-5">
        
        <div class="row align-items-center mb-5 pb-5">
            <div class="col-lg-6 position-relative gs-reveal">
                <div class="feature-blob-bg bg-warning" style="top: -20%; right: -20%; opacity: 0.15;"></div>
                
                <div class="ps-lg-5">
                    <h6 class="text-warning fw-bold text-uppercase ls-2 mb-3">// الذكاء الاصطناعي</h6>
                    <h3 class="display-5 fw-black text-dark mb-4">بياناتك تتحدث.<br>نحن نجعلها <span class="text-warning">تتنبأ.</span></h3>
                    <p class="lead text-muted mb-4">لا تكتفِ بتسجيل ما حدث بالأمس. خوارزمياتنا تحلل الأنماط لتخبرك بما سيحدث غداً، مما يمنحك القوة لاتخاذ قرارات استباقية.</p>
                    
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-warning border-opacity-10">
                            <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px;"><i class="bi bi-graph-up-arrow"></i></div>
                            <div>
                                <h6 class="fw-bold m-0 text-dark">تحليل تنبؤي (Predictive)</h6>
                                <small class="text-muted">توقع المبيعات وحركة المخزون.</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-warning border-opacity-10">
                            <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px;"><i class="bi bi-lightning-charge"></i></div>
                            <div>
                                <h6 class="fw-bold m-0 text-dark">أتمتة ذكية (Automation)</h6>
                                <small class="text-muted">تقليل العمل اليدوي بنسبة 70%.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mt-5 mt-lg-0 gs-reveal">
                <div class="glass-card p-5 text-center position-relative border-0 shadow-lg" style="background: linear-gradient(135deg, #fffbeb 0%, #fff 100%);">
                    <div style="position: absolute; top: -50px; left: -50px; width: 150px; height: 150px; background: #fbbf24; filter: blur(60px); opacity: 0.2;"></div>
                    <img src="https://cdn-icons-png.flaticon.com/512/8654/8654238.png" alt="AI Icon" style="width: 150px; filter: drop-shadow(0 10px 20px rgba(251, 191, 36, 0.3));" class="mb-4">
                    <h4 class="fw-bold text-dark">معالجة فورية</h4>
                    <p class="text-muted">تحليل البيانات لحظة بلحظة</p>
                    <div class="progress mt-3" style="height: 6px;">
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-5">
            <div class="col-lg-6 order-2 order-lg-1 mt-5 mt-lg-0 gs-reveal">
                <div class="glass-card p-5 text-center position-relative border-0 shadow-lg" style="background: linear-gradient(135deg, #f0f9ff 0%, #fff 100%);">
                    <div style="position: absolute; bottom: -50px; right: -50px; width: 150px; height: 150px; background: #3b82f6; filter: blur(60px); opacity: 0.2;"></div>
                    <img src="https://cdn-icons-png.flaticon.com/512/2830/2830159.png" alt="Security Icon" style="width: 150px; filter: drop-shadow(0 10px 20px rgba(59, 130, 246, 0.3));" class="mb-4">
                    <h4 class="fw-bold text-dark">حماية بنكية</h4>
                    <p class="text-muted">تشفير AES-256 لكافة البيانات</p>
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-white rounded-pill shadow-sm border border-primary border-opacity-10 mt-2">
                        <i class="bi bi-shield-check text-success"></i> <span class="small fw-bold text-dark">آمن 100%</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 position-relative gs-reveal">
                <div class="feature-blob-bg bg-primary" style="bottom: -20%; left: -20%; opacity: 0.1;"></div>

                <div class="pe-lg-5">
                    <h6 class="text-primary fw-bold text-uppercase ls-2 mb-3">// الأمان والسيادة</h6>
                    <h3 class="display-5 fw-black text-dark mb-4">بنية تحتية صلبة.<br>حماية <span class="text-primary">بلا حدود.</span></h3>
                    <p class="lead text-muted mb-4">نحن ندرك أن بياناتك هي أغلى أصولك. لذلك بنينا أنظمتنا وفقاً لأعلى معايير الأمن السيبراني العالمية.</p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-3">
                         <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                            <span class="text-dark fw-medium">نسخ احتياطي يومي تلقائي (Daily Backup).</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                            <span class="text-dark fw-medium">حماية ضد هجمات DDoS.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                            <span class="text-dark fw-medium">امتثال كامل لتشريعات حماية البيانات.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    
    <div class="section-wave-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: #f8fafc;"></path>
        </svg>
    </div>
</section>

    <section id="unified-expertise" class="py-5 position-relative" style="background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(251, 191, 36, 0.05) 100%);">
        <div class="container py-5">
            <div class="text-center mb-5 gs-reveal">
                 <span class="badge bg-warning bg-opacity-10 text-dark border border-warning border-opacity-25 px-4 py-2 rounded-pill mb-4 fw-bold ls-2">
                    <i class="bi bi-gear-wide-connected me-2"></i> منظومة التطوير الشاملة
                </span>
                <h2 class="display-4 fw-black text-dark mb-4">
                    نحن لا نكتب كوداً، <br>
                    <span class="text-gradient-gold">نحن نبني أصولاً رقمية.</span>
                </h2>
                <p class="text-muted lead mx-auto" style="max-width: 800px;">
                    معايير هندسية صارمة تضمن استدامة مشروعك لسنوات قادمة.
                </p>
            </div>

            <div class="row g-4 mb-5 gs-reveal">
                <div class="col-md-6">
                    <div class="glass-card d-flex align-items-start gap-3 h-100 border-warning border-opacity-25">
                        <div class="icon-box mb-0 text-warning bg-warning bg-opacity-10"><i class="bi bi-infinity"></i></div>
                        <div>
                            <h4 class="fw-bold text-dark">CI/CD & DevOps Automation</h4>
                            <p class="text-muted m-0">نظام نشر آلي يضمن وصول التحديثات للمستخدمين في دقائق بدلاً من أيام.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="glass-card d-flex align-items-start gap-3 h-100 border-warning border-opacity-25">
                        <div class="icon-box mb-0 text-warning bg-warning bg-opacity-10"><i class="bi bi-layers"></i></div>
                        <div>
                            <h4 class="fw-bold text-dark">Clean Architecture & DDD</h4>
                            <p class="text-muted m-0">بناء طبقي منفصل يضمن سهولة التطوير والصيانة المستقبلية.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 gs-reveal">
                <div class="col-lg-3 col-6">
                    <div class="p-4 rounded-4 bg-white text-center shadow-sm h-100">
                        <i class="bi bi-cloud-check fs-1 text-warning mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark">Scalable Cloud</h6>
                        <small class="text-muted">AWS Infrastructure</small>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="p-4 rounded-4 bg-white text-center shadow-sm h-100">
                        <i class="bi bi-robot fs-1 text-primary mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark">Advanced AI</h6>
                        <small class="text-muted">OpenAI Integration</small>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="p-4 rounded-4 bg-white text-center shadow-sm h-100">
                        <i class="bi bi-phone fs-1 text-dark mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark">Native Perf.</h6>
                        <small class="text-muted">Flutter & Dart</small>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="p-4 rounded-4 bg-white text-center shadow-sm h-100">
                        <i class="bi bi-shield-lock fs-1 text-danger mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark">Enterprise Sec.</h6>
                        <small class="text-muted">AES-256 Encryption</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 stats-section position-relative">
    <div style="position: absolute; top: -5px; left: 0; width: 100%; height: 20px; background: #f8fafc;"></div>
    
    <div class="container pt-4"> <div class="row g-4">
            <div class="col-6 col-lg-3 gs-reveal">
                <div class="stat-card">
                    <i class="bi bi-emoji-smile stat-icon-bg"></i>
                    <h2 class="stat-number">
                        <span class="purecounter" data-purecounter-start="0" data-purecounter-end="500">0</span>+
                    </h2>
                    <p class="stat-label">عميل سعيد</p>
                </div>
            </div>
            <div class="col-6 col-lg-3 gs-reveal">
                <div class="stat-card">
                    <i class="bi bi-rocket-takeoff stat-icon-bg"></i>
                    <h2 class="stat-number" style="background: linear-gradient(135deg, #0f172a 0%, #6366f1 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        <span class="purecounter" data-purecounter-start="0" data-purecounter-end="2000">0</span>+
                    </h2>
                    <p class="stat-label">مشروع ناجح</p>
                </div>
            </div>
            <div class="col-6 col-lg-3 gs-reveal">
                <div class="stat-card">
                    <i class="bi bi-globe-americas stat-icon-bg"></i>
                    <h2 class="stat-number">
                        <span class="purecounter" data-purecounter-start="0" data-purecounter-end="15">0</span>
                    </h2>
                    <p class="stat-label">دولة حول العالم</p>
                </div>
            </div>
            <div class="col-6 col-lg-3 gs-reveal">
                <div class="stat-card">
                    <i class="bi bi-layers stat-icon-bg"></i>
                    <h2 class="stat-number" style="background: linear-gradient(135deg, #0f172a 0%, #ec4899 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        <span class="purecounter" data-purecounter-start="0" data-purecounter-end="5">0</span>
                    </h2>
                    <p class="stat-label">منصات متكاملة</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="testimonials" class="py-5 position-relative">
        <div class="container py-5">
            <div class="text-center mb-5 gs-reveal">
                <span class="text-muted text-uppercase small ls-2 border border-dark border-opacity-10 px-3 py-1 rounded-pill bg-white">قصص نجاح حقيقية</span>
                <h2 class="display-4 text-dark mt-4 fw-bold">شركاء المسيرة <span class="text-gradient-primary">والطموح</span></h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 gs-reveal">
                    <div class="glass-card h-100 d-flex flex-column">
                        <div class="text-warning mb-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="lead flex-grow-1 text-dark fs-6">
                            "نظام ERP من SNDRY لم يكن مجرد برنامج، بل كان <strong>نقلة نوعية</strong> في طريقة إدارتنا للمخزون. التقارير اللحظية وفرت علينا 30% من التكاليف."
                        </p>
                        <div class="d-flex align-items-center gap-3 mt-4 pt-4 border-top border-light">
                            <img src="https://placehold.co/100x100/f1f5f9/333?text=AH" alt="Client" class="rounded-circle" width="50">
                            <div>
                                <h6 class="text-dark m-0 fw-bold">أحمد حسن</h6>
                                <small class="text-muted">الرئيس التنفيذي - شركة أفاق</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 gs-reveal">
                    <div class="glass-card h-100 d-flex flex-column">
                        <div class="text-warning mb-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="lead flex-grow-1 text-dark fs-6">
                            "أبحث دائماً عن تجربة المستخدم السلسة، وهذا ما وجدته هنا. فريق الدعم الفني متواجد 24/7 وكأنهم جزء من فريقي الداخلي."
                        </p>
                        <div class="d-flex align-items-center gap-3 mt-4 pt-4 border-top border-light">
                            <img src="https://placehold.co/100x100/e2e8f0/333?text=SM" alt="Client" class="rounded-circle" width="50">
                            <div>
                                <h6 class="text-dark m-0 fw-bold">سارة محمد</h6>
                                <small class="text-muted">مالكة سلسلة متاجر</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 gs-reveal">
                    <div class="glass-card h-100 d-flex flex-column">
                         <div class="text-warning mb-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
                        <p class="lead flex-grow-1 text-dark fs-6">
                            "بطاقات TypeForm الذكية كانت حديث الجميع في المؤتمر الأخير. تصميم أنيق، وسرعة في نقل البيانات."
                        </p>
                        <div class="d-flex align-items-center gap-3 mt-4 pt-4 border-top border-light">
                            <img src="https://placehold.co/100x100/cbd5e1/333?text=MK" alt="Client" class="rounded-circle" width="50">
                            <div>
                                <h6 class="text-dark m-0 fw-bold">محمد كامل</h6>
                                <small class="text-muted">خبير تسويق رقمي</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-5 bg-white bg-opacity-50">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 gs-reveal">
                    <div class="text-center mb-5">
                        <h2 class="display-5 text-dark">الأسئلة <span class="text-gradient-gold">الشائعة</span></h2>
                    </div>
                    
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <div class="accordion-item bg-transparent border-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-4 shadow-sm fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    هل يمكنني تجربة النظام قبل الشراء؟
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    نعم، بالتأكيد! نوفر فترة تجربة مجانية لمدة 14 يوماً لجميع أنظمتنا (ERP, POS) حتى تتأكد من ملاءمتها لاحتياجاتك.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent border-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-4 shadow-sm fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    هل تدعمون الفاتورة الإلكترونية والضرائب؟
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    نعم، جميع أنظمتنا متوافقة 100% مع متطلبات هيئة الزكاة والضريبة والجمارك (ZATCA) وتدعم الفوترة الإلكترونية (المرحلة الثانية).
                                </div>
                            </div>
                        </div>
                         <div class="accordion-item bg-transparent border-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-4 shadow-sm fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                   كيف يتم تأمين بياناتي؟
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    نستخدم أحدث بروتوكولات التشفير (SSL/TLS) وتخزين سحابي آمن مع نسخ احتياطية يومية آلية لضمان عدم فقدان أي بيانات.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent border-0 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-4 shadow-sm fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
هل يمكننا طلب بناء مشروع رقمي خاص فيني ؟
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                  نعم تمتلك سندري فريق برمجة متكامل لتنفيذ أي مشروع برمجي
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="glass-card p-5 text-center position-relative overflow-hidden" style="border: 1px solid rgba(249, 115, 22, 0.2);">
                        <div style="position: absolute; top: -50%; left: -50%; width: 100%; height: 200%; background: radial-gradient(circle, rgba(249, 115, 22, 0.05) 0%, transparent 70%); pointer-events: none;"></div>

                        <h2 class="display-5 fw-bold text-dark mb-3 position-relative z-1">ابدأ رحلتك الرقمية</h2>
                        <p class="text-muted mb-5 position-relative z-1">املأ النموذج أدناه وسيقوم فريقنا بالتواصل معك في أقرب وقت.</p>

                        <form action="send-mail.php" method="POST" class="text-start position-relative z-1 mx-auto" style="max-width: 700px;">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control bg-light border-0 py-3 rounded-3" required placeholder="الاسم الكامل">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control bg-light border-0 py-3 rounded-3" required placeholder="البريد الإلكتروني">
                                </div>
                                <div class="col-12">
                                    <input type="tel" name="phone" class="form-control bg-light border-0 py-3 rounded-3" placeholder="رقم الهاتف">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="4" class="form-control bg-light border-0 rounded-3" required placeholder="تفاصيل المشروع..."></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn-primary-glow w-100 w-lg-auto">
                                        <i class="bi bi-send-fill me-2"></i> إرسال الطلب
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-modern">
    <div class="footer-wave-top">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="footer-glow"></div>

    <div class="container position-relative z-2">
        <div class="row gy-5">
            <div class="col-lg-4 col-md-12">
                <a href="#" class="d-flex align-items-center gap-2 mb-4 text-decoration-none">
                    <img src="public/images/sndryg.png" width="50" alt="SNDRY" style="filter: brightness(0) invert(1);"> 
                    <span class="fs-3 fw-bold text-white">SNDRY</span>
                </a>
                <p class="text-white opacity-75 lh-lg">
                    مجموعة تقنية رائدة، نعيد تعريف كيفية إدارة الأعمال في العصر الرقمي من خلال حلول برمجية ذكية، آمنة، وقابلة للتوسع.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="btn btn-outline-light rounded-circle p-2 lh-1"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="btn btn-outline-light rounded-circle p-2 lh-1"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-light rounded-circle p-2 lh-1"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6">
                <h5 class="text-white fw-bold mb-4 position-relative d-inline-block">الشركة
                    <span style="position: absolute; bottom: -8px; right: 0; width: 40%; height: 2px; background: var(--primary-glow);"></span>
                </h5>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">عن المجموعة</a></li>
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">قصص النجاح</a></li>
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">الوظائف</a></li>
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">المدونة</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6">
                <h5 class="text-white fw-bold mb-4 position-relative d-inline-block">المنتجات
                     <span style="position: absolute; bottom: -8px; right: 0; width: 40%; height: 2px; background: var(--gold-accent);"></span>
                </h5>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">SNDRY ERP</a></li>
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">POS Cloud</a></li>
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">Freelance</a></li>
                    <li><a href="#" class="text-white text-decoration-none opacity-75 hover-opacity-100">Coding</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h5 class="text-white fw-bold mb-4">تواصل معنا</h5>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="bg-white bg-opacity-10 rounded p-2 text-warning"><i class="bi bi-envelope-at fs-5"></i></div>
                    <div>
                        <span class="d-block text-white opacity-50 small">البريد الإلكتروني</span>
                        <span class="text-white fw-medium">info@sndry.net</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-white bg-opacity-10 rounded p-2 text-warning"><i class="bi bi-geo-alt fs-5"></i></div>
                    <div>
                        <span class="d-block text-white opacity-50 small">المقر الرئيسي</span>
                        <span class="text-white fw-medium">المملكة العربية السعودية، جدة</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top border-white border-opacity-10 mt-5 py-4 text-center d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="text-white opacity-50 small m-0">© 2025 SNDRY Group. جميع الحقوق محفوظة.</p>
            <div class="d-flex gap-3 mt-3 mt-md-0">
                <a href="#" class="text-white opacity-50 small text-decoration-none">سياسة الخصوصية</a>
                <a href="#" class="text-white opacity-50 small text-decoration-none">الشروط والأحكام</a>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>

    <script>
        // Init Libraries
        const lenis = new Lenis({ duration: 1.2 });
        function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
        requestAnimationFrame(raf);

        GLightbox({ selector: '.glightbox' });
        new PureCounter();
        VanillaTilt.init(document.querySelectorAll(".glass-card"), { max: 5, speed: 400, glare: true, "max-glare": 0.1 });

        // Scroll Reveal
        gsap.registerPlugin(ScrollTrigger);
        document.querySelectorAll('.gs-reveal').forEach((el) => {
            gsap.fromTo(el, 
                { y: 50, opacity: 0 },
                { y: 0, opacity: 1, duration: 1, ease: 'power3.out', scrollTrigger: { trigger: el, start: 'top 85%' } }
            );
        });

        // Navbar Scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('.navbar');
            if (window.scrollY > 50) nav.classList.add('scrolled');
            else nav.classList.remove('scrolled');
        });
    </script>
</body>
</html>