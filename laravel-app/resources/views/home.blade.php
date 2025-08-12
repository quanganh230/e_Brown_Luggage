<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Laravel Demo</title>
    <style>
        :root {
            --bg: #0f172a;
            --card: #111827;
            --text: #e5e7eb;
            --muted: #9ca3af;
            --primary: #10b981;
            --accent: #22d3ee;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
            background: radial-gradient(1200px 800px at 80% -10%, rgba(34,211,238,0.15), transparent),
                        radial-gradient(1000px 600px at -10% 20%, rgba(16,185,129,0.15), transparent),
                        var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: grid;
            grid-template-rows: auto 1fr auto;
        }
        header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 18px 28px; backdrop-filter: blur(6px);
        }
        .brand { display: flex; align-items: center; gap: 10px; font-weight: 700; letter-spacing: .3px; }
        .logo {
            width: 36px; height: 36px; border-radius: 10px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            box-shadow: 0 10px 25px rgba(34,211,238,.25), inset 0 0 30px rgba(255,255,255,.08);
        }
        nav a { color: var(--muted); text-decoration: none; margin: 0 10px; font-weight: 600; }
        nav a:hover { color: var(--text); }
        .btn {
            padding: 10px 14px; border-radius: 10px; text-decoration: none; font-weight: 700;
            color: #07131a; background: linear-gradient(135deg, var(--accent), var(--primary));
            box-shadow: 0 12px 30px rgba(16,185,129,.25); display: inline-block;
        }
        .hero {
            display: grid; place-items: center; padding: 60px 20px; text-align: center;
        }
        .card {
            max-width: 900px; width: 100%; padding: 36px; border-radius: 18px;
            background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));
            border: 1px solid rgba(255,255,255,0.09);
            box-shadow: 0 15px 50px rgba(0,0,0,.35);
        }
        h1 { font-size: clamp(30px, 4.5vw, 48px); margin: 0 0 12px; }
        p.lead { color: var(--muted); font-size: clamp(14px, 2vw, 18px); margin: 0 0 24px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 26px; }
        .feature {
            padding: 16px; border-radius: 14px; background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
        }
        .feature h3 { margin: 0 0 6px; font-size: 16px; }
        .feature p { margin: 0; color: var(--muted); font-size: 13px; line-height: 1.6; }
        footer { color: var(--muted); text-align: center; font-size: 13px; padding: 26px; }
        code { background: rgba(255,255,255,0.06); padding: 4px 6px; border-radius: 6px; }
    </style>
</head>
<body>
    <header>
        <div class="brand">
            <div class="logo"></div>
            <span>Laravel Demo</span>
        </div>
        <nav>
            <a href="#">Trang chủ</a>
            <a href="#">Tính năng</a>
            <a href="#">Liên hệ</a>
        </nav>
        <a class="btn" href="https://laravel.com/docs" target="_blank" rel="noopener">Tài liệu</a>
    </header>

    <main class="hero">
        <div class="card">
            <h1>Xây dựng trang web với HTML + CSS + PHP (Laravel)</h1>
            <p class="lead">Đây là trang mẫu được tạo bằng Laravel. Bạn có thể chỉnh sửa file <code>resources/views/home.blade.php</code> để thay đổi giao diện.</p>
            <div class="grid">
                <div class="feature">
                    <h3>Laravel</h3>
                    <p>Framework PHP hiện đại giúp phát triển nhanh với routing, controller, migration, queue,...</p>
                </div>
                <div class="feature">
                    <h3>Blade</h3>
                    <p>Template engine đơn giản, viết HTML/CSS trực quan và có thể nhúng biến từ PHP.</p>
                </div>
                <div class="feature">
                    <h3>Vận hành</h3>
                    <p>Chạy server phát triển: <code>php artisan serve</code>. Triển khai dễ dàng lên nhiều nền tảng.</p>
                </div>
                <div class="feature">
                    <h3>Cấu trúc</h3>
                    <p>Route: <code>routes/web.php</code>. View: <code>resources/views</code>. Public assets: <code>public/</code>.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <span>© 2025 Laravel Demo • HTML • CSS • PHP</span>
    </footer>
</body>
</html>