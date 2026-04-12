<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNDRY Group | منظومة المستقبل الرقمي</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --bg-body: #f8fafc;
            --primary-glow: #ff7e67;
            --accent-glow: #38bdf8;
            --card-bg: rgba(255, 255, 255, 0.7);
            --font-main: 'Cairo', sans-serif;
        }

        body {
            font-family: var(--font-main);
            background: var(--bg-body);
            margin: 0;
            overflow: hidden; /* لمنع التمرير وضمان فخامة العرض */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* خلفية ديناميكية متحركة */
        .mesh-bg {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            background-color: #f8fafc;
            background-image: 
                radial-gradient(at 0% 0%, rgba(255,126,103,0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(56,189,248,0.15) 0px, transparent 50%);
            animation: pulseBg 10s ease-in-out infinite alternate;
        }

        @keyframes pulseBg {
            0% { opacity: 0.8; }
            100% { opacity: 1; }
        }

        .container {
            width: 90%;
            max-width: 1200px;
            text-align: center;
        }

        .main-logo {
            width: 180px;
            margin-bottom: 50px;
            filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));
            animation: fadeInDown 1s ease-out;
        }

        .grid-platforms {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .platform-card {
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 30px;
            padding: 40px 20px;
            text-decoration: none;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        }

        .platform-card:hover {
            transform: translateY(-15px) scale(1.02);
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border-color: var(--primary-glow);
        }

        .platform-card img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 20px;
            transition: transform 0.5s ease;
        }

        .platform-card:hover img {
            transform: rotate(5deg) scale(1.1);
        }

        .platform-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .platform-desc {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.6;
        }

        /* تأثير الـ Glow عند الهوفر */
        .platform-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,126,103,0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s;
        }

        .platform-card:hover::before {
            opacity: 1;
        }

        /* لغات */
        .lang-switcher {
            position: fixed;
            top: 30px;
            right: 30px;
            background: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        /* الأنيمشن */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .grid-platforms { grid-template-columns: 1fr; }
            body { overflow-y: auto; padding: 50px 0; }
        }
    </style>
</head>
<body>

    <div class="mesh-bg"></div>

    <div class="lang-switcher" onclick="toggleLang()">
        <span id="lang-text">English</span>
    </div>

    <div class="container">
        <img src="images/main.png" alt="SNDRY" class="main-logo">

        <div class="grid-platforms">
            <a href="https://erp.sndry.net" class="platform-card">
                <img src="images/erp.png" alt="ERP">
                <div class="platform-title" data-en="ERP System" data-ar="نظام ERP">نظام ERP</div>
                <div class="platform-desc" data-en="Integrated management for your business assets." data-ar="إدارة متكاملة لأصول أعمالك ومواردك.">إدارة متكاملة لأصول أعمالك ومواردك.</div>
            </a>

            <a href="https://pos.sndry.net" class="platform-card">
                <img src="images/pos.png" alt="POS">
                <div class="platform-title" data-en="POS System" data-ar="نظام POS">نظام POS</div>
                <div class="platform-desc" data-en="Point of sale solutions for retail and shops." data-ar="حلول نقاط البيع المتطورة للمتاجر والشركات.">حلول نقاط البيع المتطورة للمتاجر والشركات.</div>
            </a>

            <a href="https://sami.sndry.net" class="platform-card">
                <img src="images/sami.png" alt="SAMI">
                <div class="platform-title" data-en="SAMI Assistant" data-ar="مساعد سامي">مساعد سامي</div>
                <div class="platform-desc" data-en="Your intelligent AI marketing partner." data-ar="شريكك الذكي في التسويق وإدارة المحتوى.">شريكك الذكي في التسويق وإدارة المحتوى.</div>
            </a>
        </div>
    </div>

    <script>
        function toggleLang() {
            const body = document.body;
            const isAr = body.dir === 'rtl';
            body.dir = isAr ? 'ltr' : 'rtl';
            document.getElementById('lang-text').innerText = isAr ? 'العربية' : 'English';
            
            document.querySelectorAll('[data-en]').forEach(el => {
                el.innerText = isAr ? el.getAttribute('data-en') : el.getAttribute('data-ar');
            });
        }
    </script>
</body>
</html>