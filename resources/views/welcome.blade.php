<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KampusKalinga — AI-Powered Campus Safety for Philippine Schools</title>
    <meta name="description" content="KampusKalinga helps Philippine schools report, track, prioritize, and resolve campus incidents faster — powered by AI and real-time monitoring.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,300;0,14..32,400;0,14..32,500;0,14..32,600;0,14..32,700;0,14..32,800;0,14..32,900;1,14..32,400&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --teal-900: #0d4a3d;
            --teal-800: #145a46;
            --teal-700: #1a6b5a;
            --teal-600: #1f8c72;
            --teal-500: #25a988;
            --teal-400: #34d1a7;
            --teal-300: #6ee7ca;
            --teal-200: #a7f3e0;
            --accent: #34d1a7;
            --dark: #050e0b;
            --dark-card: rgba(255,255,255,0.04);
        }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--dark);
            color: #f0fdf9;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: var(--dark); }
        ::-webkit-scrollbar-thumb { background: var(--teal-700); border-radius: 3px; }

        /* ===== NOISE TEXTURE ===== */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='200' height='200' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
        }

        /* ===== NAV ===== */
        .nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 100;
            padding: 0 32px;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            background: rgba(5, 14, 11, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            transition: background 0.3s ease;
        }
        .nav.scrolled { background: rgba(5, 14, 11, 0.95); }
        .nav-logo { display: flex; align-items: center; gap: 10px; text-decoration: none; }
        .nav-logo-icon {
            width: 36px; height: 36px;
            background: linear-gradient(135deg, var(--teal-600), var(--teal-400));
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            color: #fff;
            box-shadow: 0 0 20px rgba(52, 209, 167, 0.3);
            flex-shrink: 0;
        }
        .nav-logo-text { font-weight: 700; font-size: 17px; letter-spacing: -0.3px; color: #fff; }
        .nav-links { display: flex; align-items: center; gap: 32px; }
        .nav-link {
            font-size: 14px; font-weight: 500;
            color: rgba(255,255,255,0.65);
            text-decoration: none;
            transition: color 0.2s;
        }
        .nav-link:hover { color: #fff; }
        .nav-actions { display: flex; align-items: center; gap: 12px; }
        .btn-nav-ghost {
            font-size: 14px; font-weight: 500;
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .btn-nav-ghost:hover { color: #fff; background: rgba(255,255,255,0.06); }
        .btn-primary {
            display: inline-flex; align-items: center; gap: 6px;
            background: linear-gradient(135deg, var(--teal-600), var(--teal-500));
            color: #fff;
            font-size: 14px; font-weight: 600;
            padding: 9px 20px;
            border-radius: 10px;
            text-decoration: none;
            border: none; cursor: pointer;
            box-shadow: 0 0 24px rgba(31, 140, 114, 0.4), 0 1px 2px rgba(0,0,0,0.4);
            transition: all 0.2s;
            position: relative;
            overflow: hidden;
        }
        .btn-primary::before {
            content: '';
            position: absolute; inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.15), transparent);
            opacity: 0;
            transition: opacity 0.2s;
        }
        .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 0 36px rgba(31, 140, 114, 0.55), 0 4px 12px rgba(0,0,0,0.4); }
        .btn-primary:hover::before { opacity: 1; }
        .btn-primary:active { transform: translateY(0); }

        /* ===== HERO ===== */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 100px 32px 60px;
            overflow: hidden;
        }
        /* Ambient glow */
        .hero-glow {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            filter: blur(120px);
            opacity: 0.35;
        }
        .hero-glow-1 {
            width: 700px; height: 700px;
            background: radial-gradient(circle, var(--teal-600) 0%, transparent 70%);
            top: -200px; left: -200px;
            animation: glow-pulse 6s ease-in-out infinite alternate;
        }
        .hero-glow-2 {
            width: 500px; height: 500px;
            background: radial-gradient(circle, #1a6b9a 0%, transparent 70%);
            bottom: -100px; right: 100px;
            animation: glow-pulse 8s ease-in-out 1s infinite alternate;
        }
        .hero-glow-3 {
            width: 300px; height: 300px;
            background: radial-gradient(circle, var(--teal-400) 0%, transparent 70%);
            top: 50%; left: 40%;
            opacity: 0.12;
            animation: glow-pulse 5s ease-in-out 2s infinite alternate;
        }
        @keyframes glow-pulse {
            from { opacity: 0.25; transform: scale(1); }
            to { opacity: 0.45; transform: scale(1.1); }
        }
        /* Grid lines */
        .hero-grid {
            position: absolute; inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none;
            mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 100%);
        }

        .hero-inner {
            position: relative; z-index: 10;
            max-width: 1200px; width: 100%; margin: 0 auto;
            display: flex; align-items: center; gap: 80px;
        }
        .hero-content { flex: 1; max-width: 580px; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(52, 209, 167, 0.1);
            border: 1px solid rgba(52, 209, 167, 0.25);
            border-radius: 999px;
            padding: 6px 14px;
            font-size: 12px; font-weight: 600;
            color: var(--teal-300);
            letter-spacing: 0.3px;
            margin-bottom: 28px;
        }
        .hero-badge-dot {
            width: 6px; height: 6px;
            border-radius: 50%;
            background: var(--teal-400);
            animation: pulse-dot 2s ease-in-out infinite;
        }
        @keyframes pulse-dot {
            0%, 100% { box-shadow: 0 0 0 0 rgba(52, 209, 167, 0.5); }
            50% { box-shadow: 0 0 0 5px rgba(52, 209, 167, 0); }
        }
        .hero-title {
            font-size: clamp(42px, 5vw, 68px);
            font-weight: 900;
            line-height: 1.05;
            letter-spacing: -2px;
            margin-bottom: 24px;
            color: #fff;
        }
        .hero-title-accent {
            background: linear-gradient(135deg, var(--teal-300), var(--teal-400) 50%, #7dd3c8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-desc {
            font-size: 18px;
            color: rgba(255,255,255,0.55);
            line-height: 1.7;
            max-width: 480px;
            margin-bottom: 40px;
        }
        .hero-actions { display: flex; flex-wrap: wrap; align-items: center; gap: 16px; margin-bottom: 56px; }
        .btn-ghost-hero {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 15px; font-weight: 500;
            color: rgba(255,255,255,0.65);
            text-decoration: none;
            padding: 10px 4px;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .btn-ghost-hero:hover { color: #fff; gap: 12px; }
        .btn-ghost-hero svg { transition: transform 0.2s; }
        .btn-ghost-hero:hover svg { transform: translateX(3px); }
        .hero-stats { display: flex; gap: 36px; }
        .hero-stat-val { font-size: 28px; font-weight: 800; color: #fff; letter-spacing: -0.5px; }
        .hero-stat-val span { color: var(--teal-400); }
        .hero-stat-lbl { font-size: 12px; font-weight: 500; color: rgba(255,255,255,0.4); margin-top: 2px; }

        /* ===== DASHBOARD MOCKUP ===== */
        .hero-mockup { flex: 1; position: relative; display: none; }
        @media (min-width: 1100px) { .hero-mockup { display: block; } }
        .mockup-window {
            background: rgba(13, 22, 19, 0.8);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 40px 120px rgba(0,0,0,0.7), 0 0 0 1px rgba(52,209,167,0.08), inset 0 1px 0 rgba(255,255,255,0.08);
            position: relative;
            backdrop-filter: blur(10px);
        }
        .mockup-titlebar {
            background: rgba(255,255,255,0.04);
            border-bottom: 1px solid rgba(255,255,255,0.07);
            padding: 12px 16px;
            display: flex; align-items: center; justify-content: space-between;
        }
        .mockup-dots { display: flex; gap: 6px; }
        .mockup-dot {
            width: 10px; height: 10px; border-radius: 50%;
        }
        .mockup-dot-r { background: #ff5f57; }
        .mockup-dot-y { background: #febc2e; }
        .mockup-dot-g { background: #28c840; }
        .mockup-url {
            background: rgba(255,255,255,0.06);
            border-radius: 6px;
            padding: 4px 14px;
            font-size: 11px; color: rgba(255,255,255,0.4);
            display: flex; align-items: center; gap: 6px;
        }
        .mockup-url::before {
            content: '';
            display: block; width: 8px; height: 8px;
            border-radius: 50%;
            background: #28c840;
        }
        .mockup-body {
            display: flex;
        }
        .mockup-sidebar {
            width: 120px;
            background: rgba(255,255,255,0.02);
            border-right: 1px solid rgba(255,255,255,0.06);
            padding: 12px 8px;
        }
        .mockup-sidenav-item {
            display: flex; align-items: center; gap: 8px;
            padding: 8px 10px; border-radius: 8px;
            font-size: 10px; color: rgba(255,255,255,0.4);
            cursor: pointer; margin-bottom: 2px;
        }
        .mockup-sidenav-item.active {
            background: rgba(52, 209, 167, 0.12);
            color: var(--teal-300);
        }
        .mockup-sidenav-dot {
            width: 6px; height: 6px; border-radius: 50%;
            background: currentColor; flex-shrink: 0;
        }
        .mockup-content { flex: 1; padding: 14px; }
        .mockup-stat-row {
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px;
            margin-bottom: 12px;
        }
        .mockup-stat {
            border-radius: 10px;
            padding: 10px;
        }
        .mockup-stat-num { font-size: 18px; font-weight: 700; }
        .mockup-stat-lbl { font-size: 9px; opacity: 0.7; margin-top: 2px; }
        .mockup-stat-1 { background: linear-gradient(135deg, var(--teal-700), var(--teal-600)); }
        .mockup-stat-2 { background: rgba(239,68,68,0.12); border: 1px solid rgba(239,68,68,0.2); color: #fca5a5; }
        .mockup-stat-3 { background: rgba(251,191,36,0.12); border: 1px solid rgba(251,191,36,0.2); color: #fde68a; }
        .mockup-stat-4 { background: rgba(34,197,94,0.12); border: 1px solid rgba(34,197,94,0.2); color: #86efac; }
        .mockup-chart {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
            height: 90px;
        }
        .mockup-chart-title { font-size: 9px; font-weight: 600; color: rgba(255,255,255,0.6); margin-bottom: 8px; }
        .mockup-bars { display: flex; align-items: flex-end; gap: 5px; height: 55px; }
        .mockup-bar { flex: 1; border-radius: 3px 3px 0 0; }
        .mockup-table {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 10px;
            overflow: hidden;
        }
        .mockup-table-head {
            display: grid; grid-template-columns: 60px 1fr 70px;
            font-size: 8px; font-weight: 600;
            color: rgba(255,255,255,0.35);
            padding: 8px 10px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            gap: 8px;
        }
        .mockup-table-row {
            display: grid; grid-template-columns: 60px 1fr 70px;
            font-size: 9px; padding: 7px 10px;
            border-bottom: 1px solid rgba(255,255,255,0.04);
            align-items: center; gap: 8px;
            color: rgba(255,255,255,0.7);
        }
        .mockup-priority-high { color: #f87171; display: flex; align-items: center; gap: 4px; }
        .mockup-priority-med { color: #fbbf24; display: flex; align-items: center; gap: 4px; }
        .mockup-priority-dot { width: 5px; height: 5px; border-radius: 50%; background: currentColor; }

        /* Floating badges */
        .mockup-badge {
            position: absolute;
            background: rgba(13, 22, 19, 0.9);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 10px 14px;
            backdrop-filter: blur(12px);
            display: flex; align-items: center; gap: 10px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.5);
        }
        .mockup-badge-1 {
            top: -18px; right: 20px;
            background: rgba(239, 68, 68, 0.9);
            color: #fff; font-size: 11px; font-weight: 700;
            animation: badge-float 3s ease-in-out infinite;
        }
        .mockup-badge-2 {
            bottom: -18px; left: -10px;
            font-size: 11px;
            animation: badge-float 3s ease-in-out 1.5s infinite;
        }
        @keyframes badge-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
        .mockup-badge-icon {
            width: 26px; height: 26px; border-radius: 8px;
            background: rgba(34, 197, 94, 0.15);
            color: #4ade80;
            display: flex; align-items: center; justify-content: center;
        }
        .mockup-badge-text { display: flex; flex-direction: column; }
        .mockup-badge-title { font-size: 11px; font-weight: 600; color: #fff; }
        .mockup-badge-sub { font-size: 9px; color: rgba(255,255,255,0.4); }

        /* ===== SECTION COMMON ===== */
        .section { padding: 100px 32px; position: relative; }
        .section-inner { max-width: 1200px; margin: 0 auto; }
        .section-badge {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 12px; font-weight: 600; letter-spacing: 0.5px;
            text-transform: uppercase;
            color: var(--teal-400);
            margin-bottom: 16px;
        }
        .section-badge-line {
            width: 24px; height: 2px;
            background: var(--teal-400);
            border-radius: 1px;
        }
        .section-title {
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 800;
            letter-spacing: -1.5px;
            color: #fff;
            line-height: 1.1;
            margin-bottom: 16px;
        }
        .section-desc {
            font-size: 17px;
            color: rgba(255,255,255,0.45);
            max-width: 600px;
            line-height: 1.7;
        }
        .section-header { text-align: center; margin-bottom: 72px; }
        .section-header .section-badge { justify-content: center; }
        .section-header .section-desc { margin: 0 auto; }

        /* ===== FEATURES ===== */
        .features-bg {
            background: rgba(255,255,255,0.015);
            border-top: 1px solid rgba(255,255,255,0.06);
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 20px;
        }
        .feature-card {
            background: rgba(255,255,255,0.035);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 32px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        .feature-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(52, 209, 167, 0.04) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.3s;
        }
        .feature-card:hover { border-color: rgba(52, 209, 167, 0.25); transform: translateY(-4px); }
        .feature-card:hover::before { opacity: 1; }
        .feature-icon {
            width: 52px; height: 52px;
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 24px;
            position: relative;
        }
        .feature-icon-1 { background: rgba(52, 209, 167, 0.12); color: var(--teal-400); }
        .feature-icon-2 { background: rgba(99, 102, 241, 0.12); color: #a5b4fc; }
        .feature-icon-3 { background: rgba(251, 191, 36, 0.12); color: #fcd34d; }
        .feature-icon-4 { background: rgba(236, 72, 153, 0.12); color: #f9a8d4; }
        .feature-icon-5 { background: rgba(59, 130, 246, 0.12); color: #93c5fd; }
        .feature-icon-6 { background: rgba(34, 197, 94, 0.12); color: #86efac; }
        .feature-title {
            font-size: 18px; font-weight: 700; color: #fff;
            letter-spacing: -0.3px; margin-bottom: 10px;
        }
        .feature-desc { font-size: 14px; color: rgba(255,255,255,0.45); line-height: 1.7; margin-bottom: 20px; }
        .feature-list { list-style: none; display: flex; flex-direction: column; gap: 8px; }
        .feature-list li {
            display: flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 500; color: rgba(255,255,255,0.6);
        }
        .feature-list-check {
            width: 16px; height: 16px; border-radius: 50%;
            background: rgba(52, 209, 167, 0.15);
            color: var(--teal-400);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        /* ===== HOW IT WORKS ===== */
        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 0;
            position: relative;
        }
        .steps-grid::before {
            content: '';
            position: absolute;
            top: 34px; left: 15%; right: 15%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(52, 209, 167, 0.3), transparent);
        }
        .step-card {
            padding: 32px 28px;
            text-align: center;
        }
        .step-num {
            width: 68px; height: 68px;
            border-radius: 50%;
            border: 2px solid rgba(52, 209, 167, 0.3);
            background: rgba(52, 209, 167, 0.06);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 24px;
            font-size: 22px; font-weight: 800; color: var(--teal-400);
            position: relative; z-index: 1;
            transition: all 0.3s;
        }
        .step-card:hover .step-num {
            background: rgba(52, 209, 167, 0.15);
            border-color: rgba(52, 209, 167, 0.6);
            box-shadow: 0 0 24px rgba(52, 209, 167, 0.2);
        }
        .step-title { font-size: 17px; font-weight: 700; color: #fff; margin-bottom: 10px; }
        .step-desc { font-size: 14px; color: rgba(255,255,255,0.4); line-height: 1.7; }

        /* ===== PRICING ===== */
        .pricing-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            align-items: stretch;
        }
        .pricing-card {
            background: rgba(255,255,255,0.035);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 24px;
            padding: 36px 32px;
            width: 320px;
            display: flex; flex-direction: column;
            position: relative;
            transition: all 0.3s;
        }
        .pricing-card:hover { transform: translateY(-4px); border-color: rgba(255,255,255,0.14); }
        .pricing-card-featured {
            background: linear-gradient(160deg, rgba(31, 140, 114, 0.25) 0%, rgba(26, 107, 90, 0.15) 100%);
            border-color: rgba(52, 209, 167, 0.3);
            box-shadow: 0 0 60px rgba(52, 209, 167, 0.1);
        }
        .pricing-card-featured:hover { border-color: rgba(52, 209, 167, 0.5); }
        .pricing-badge {
            position: absolute; top: -13px; left: 50%; transform: translateX(-50%);
            background: linear-gradient(135deg, var(--teal-600), var(--teal-500));
            color: #fff; font-size: 11px; font-weight: 700;
            padding: 4px 14px; border-radius: 999px;
            white-space: nowrap;
            box-shadow: 0 4px 12px rgba(31, 140, 114, 0.4);
        }
        .pricing-name { font-size: 16px; font-weight: 600; color: rgba(255,255,255,0.7); margin-bottom: 8px; }
        .pricing-price { font-size: 42px; font-weight: 800; color: #fff; letter-spacing: -1.5px; margin-bottom: 4px; }
        .pricing-price small { font-size: 16px; font-weight: 500; color: rgba(255,255,255,0.4); }
        .pricing-desc { font-size: 13px; color: rgba(255,255,255,0.35); margin-bottom: 28px; line-height: 1.6; }
        .pricing-cta {
            display: block; width: 100%;
            padding: 12px;
            border-radius: 12px;
            font-size: 14px; font-weight: 600;
            text-align: center; text-decoration: none;
            margin-bottom: 28px;
            transition: all 0.2s;
        }
        .pricing-cta-outline {
            border: 1px solid rgba(255,255,255,0.15);
            color: #fff;
        }
        .pricing-cta-outline:hover { background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.25); }
        .pricing-cta-solid {
            background: linear-gradient(135deg, var(--teal-600), var(--teal-500));
            color: #fff;
            box-shadow: 0 0 28px rgba(31, 140, 114, 0.4);
        }
        .pricing-cta-solid:hover { box-shadow: 0 0 40px rgba(31, 140, 114, 0.6); transform: translateY(-1px); }
        .pricing-divider { border: none; border-top: 1px solid rgba(255,255,255,0.07); margin-bottom: 20px; }
        .pricing-features { list-style: none; display: flex; flex-direction: column; gap: 12px; margin-top: auto; }
        .pricing-features li {
            display: flex; align-items: center; gap: 10px;
            font-size: 13px; font-weight: 500; color: rgba(255,255,255,0.6);
        }
        .pricing-features li.muted { color: rgba(255,255,255,0.25); }
        .pricing-check { color: var(--teal-400); flex-shrink: 0; }
        .pricing-x { color: rgba(255,255,255,0.2); flex-shrink: 0; }

        /* ===== TESTIMONIAL ===== */
        .testimonial-section {
            background: linear-gradient(135deg, rgba(26, 107, 90, 0.08) 0%, rgba(13, 74, 61, 0.05) 100%);
            border-top: 1px solid rgba(255,255,255,0.06);
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .testimonial-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 32px;
            transition: all 0.3s;
        }
        .testimonial-card:hover { border-color: rgba(52, 209, 167, 0.2); transform: translateY(-3px); }
        .testimonial-quote {
            font-size: 16px; line-height: 1.7;
            color: rgba(255,255,255,0.6);
            margin-bottom: 24px;
            font-style: italic;
        }
        .testimonial-author { display: flex; align-items: center; gap: 12px; }
        .testimonial-avatar {
            width: 42px; height: 42px; border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 16px; font-weight: 700; color: #fff;
        }
        .testimonial-name { font-size: 14px; font-weight: 600; color: #fff; }
        .testimonial-role { font-size: 12px; color: rgba(255,255,255,0.35); }
        .testimonial-stars { display: flex; gap: 2px; margin-bottom: 16px; }

        /* ===== CTA ===== */
        .cta-section { text-align: center; padding: 120px 32px; position: relative; overflow: hidden; }
        .cta-glow {
            position: absolute; bottom: -100px; left: 50%; transform: translateX(-50%);
            width: 600px; height: 300px;
            background: radial-gradient(ellipse, rgba(52, 209, 167, 0.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .cta-title {
            font-size: clamp(32px, 5vw, 60px);
            font-weight: 900;
            letter-spacing: -2px;
            color: #fff;
            max-width: 700px;
            margin: 0 auto 20px;
            line-height: 1.08;
        }
        .cta-desc {
            font-size: 17px; color: rgba(255,255,255,0.4);
            max-width: 500px; margin: 0 auto 40px; line-height: 1.7;
        }
        .cta-actions { display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; }
        .btn-cta-outline {
            display: inline-flex; align-items: center; gap: 6px;
            border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.7);
            font-size: 15px; font-weight: 600;
            padding: 12px 28px;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.2s;
        }
        .btn-cta-outline:hover { border-color: rgba(255,255,255,0.3); color: #fff; }
        .btn-cta-primary {
            display: inline-flex; align-items: center; gap: 6px;
            background: linear-gradient(135deg, var(--teal-600), var(--teal-500));
            color: #fff; font-size: 15px; font-weight: 700;
            padding: 12px 32px; border-radius: 12px;
            text-decoration: none;
            box-shadow: 0 0 40px rgba(31, 140, 114, 0.45);
            transition: all 0.2s;
        }
        .btn-cta-primary:hover { box-shadow: 0 0 60px rgba(31, 140, 114, 0.6); transform: translateY(-2px); }

        /* ===== FOOTER ===== */
        footer {
            border-top: 1px solid rgba(255,255,255,0.07);
            padding: 64px 32px 32px;
        }
        .footer-inner { max-width: 1200px; margin: 0 auto; }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 48px;
            margin-bottom: 64px;
        }
        @media (max-width: 768px) {
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }
        .footer-brand-name { font-size: 17px; font-weight: 700; color: #fff; margin-bottom: 8px; }
        .footer-brand-desc { font-size: 13px; color: rgba(255,255,255,0.35); line-height: 1.7; max-width: 260px; margin-bottom: 24px; }
        .footer-socials { display: flex; gap: 8px; }
        .footer-social {
            width: 34px; height: 34px; border-radius: 8px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.4);
            text-decoration: none;
            transition: all 0.2s;
        }
        .footer-social:hover { background: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.15); }
        .footer-col-title { font-size: 12px; font-weight: 600; letter-spacing: 0.8px; text-transform: uppercase; color: rgba(255,255,255,0.35); margin-bottom: 20px; }
        .footer-links { list-style: none; display: flex; flex-direction: column; gap: 12px; }
        .footer-links a { font-size: 14px; color: rgba(255,255,255,0.45); text-decoration: none; transition: color 0.2s; }
        .footer-links a:hover { color: #fff; }
        .footer-bottom {
            display: flex; align-items: center; justify-content: space-between;
            border-top: 1px solid rgba(255,255,255,0.06);
            padding-top: 28px;
            flex-wrap: wrap; gap: 16px;
        }
        .footer-copy { font-size: 13px; color: rgba(255,255,255,0.25); }
        .footer-bottom-links { display: flex; gap: 24px; }
        .footer-bottom-links a { font-size: 13px; color: rgba(255,255,255,0.25); text-decoration: none; transition: color 0.2s; }
        .footer-bottom-links a:hover { color: rgba(255,255,255,0.6); }

        /* ===== DIVIDERS ===== */
        .divider-line {
            max-width: 1200px; margin: 0 auto;
            border: none; border-top: 1px solid rgba(255,255,255,0.05);
        }

        /* ===== FADE IN ANIMATION ===== */
        .fade-in { opacity: 0; transform: translateY(24px); transition: opacity 0.65s ease, transform 0.65s ease; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .nav { padding: 0 16px; }
            .nav-links { display: none; }
            .hero { padding: 80px 16px 60px; }
            .hero-stats { flex-wrap: wrap; gap: 24px; }
            .section { padding: 72px 16px; }
            .steps-grid::before { display: none; }
            .pricing-card { width: 100%; max-width: 360px; }
            .footer-grid { grid-template-columns: 1fr; gap: 32px; }
            .footer-bottom { flex-direction: column; align-items: flex-start; }
        }
        @media (max-width: 480px) {
            .hero-title { font-size: 36px; letter-spacing: -1px; }
        }
    </style>
</head>
<body>

    <!-- ======================== NAV ======================== -->
    <nav class="nav" id="mainNav">
        <a href="#" class="nav-logo">
            <div class="nav-logo-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <span class="nav-logo-text">KampusKalinga</span>
        </a>
        <div class="nav-links">
            <a href="#features" class="nav-link">Features</a>
            <a href="#how-it-works" class="nav-link">How It Works</a>
            <a href="#pricing" class="nav-link">Pricing</a>
        </div>
        <div class="nav-actions">
            <a href="{{ route('login') }}" class="btn-nav-ghost">Sign in</a>
            <a href="{{ route('register') }}" class="btn-primary">
                Get Started
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </nav>

    <!-- ======================== HERO ======================== -->
    <section class="hero" id="hero">
        <div class="hero-glow hero-glow-1"></div>
        <div class="hero-glow hero-glow-2"></div>
        <div class="hero-glow hero-glow-3"></div>
        <div class="hero-grid"></div>

        <div class="hero-inner">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="hero-badge-dot"></span>
                    AI-Powered Campus Safety Platform
                </div>
                <h1 class="hero-title">
                    Safer campuses,<br>
                    <span class="hero-title-accent">smarter response.</span>
                </h1>
                <p class="hero-desc">
                    KampusKalinga helps Philippine schools report, track, prioritize, and resolve campus incidents faster — powered by AI and real-time monitoring.
                </p>
                <div class="hero-actions">
                    <a href="{{ route('register') }}" class="btn-primary" style="font-size:15px;padding:12px 28px;border-radius:12px;">
                        Start for free
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="#features" class="btn-ghost-hero">
                        See how it works
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <div class="hero-stats">
                    <div>
                        <div class="hero-stat-val">128<span>+</span></div>
                        <div class="hero-stat-lbl">Incidents tracked</div>
                    </div>
                    <div>
                        <div class="hero-stat-val">94<span>%</span></div>
                        <div class="hero-stat-lbl">AI accuracy rate</div>
                    </div>
                    <div>
                        <div class="hero-stat-val">1.9<span>h</span></div>
                        <div class="hero-stat-lbl">Avg. response time</div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Mockup -->
            <div class="hero-mockup">
                <!-- Alert Badge -->
                <div class="mockup-badge mockup-badge-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    AI: High Priority Detected
                </div>
                <!-- Resolved Badge -->
                <div class="mockup-badge mockup-badge-2">
                    <div class="mockup-badge-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="mockup-badge-text">
                        <span class="mockup-badge-title">Incident Resolved</span>
                        <span class="mockup-badge-sub">INC-058 · just now</span>
                    </div>
                </div>

                <div class="mockup-window">
                    <div class="mockup-titlebar">
                        <div class="mockup-dots">
                            <div class="mockup-dot mockup-dot-r"></div>
                            <div class="mockup-dot mockup-dot-y"></div>
                            <div class="mockup-dot mockup-dot-g"></div>
                        </div>
                        <div class="mockup-url">kampuskalinga.ph/dashboard</div>
                        <div style="width:60px;"></div>
                    </div>
                    <div class="mockup-body">
                        <div class="mockup-sidebar">
                            <div class="mockup-sidenav-item active">
                                <div class="mockup-sidenav-dot"></div> Dashboard
                            </div>
                            <div class="mockup-sidenav-item">
                                <div class="mockup-sidenav-dot"></div> Incidents
                            </div>
                            <div class="mockup-sidenav-item">
                                <div class="mockup-sidenav-dot"></div> Campus Map
                            </div>
                            <div class="mockup-sidenav-item">
                                <div class="mockup-sidenav-dot"></div> Analytics
                            </div>
                            <div class="mockup-sidenav-item">
                                <div class="mockup-sidenav-dot"></div> Users
                            </div>
                        </div>
                        <div class="mockup-content">
                            <div class="mockup-stat-row">
                                <div class="mockup-stat mockup-stat-1" style="color:#fff;">
                                    <div class="mockup-stat-num">128</div>
                                    <div class="mockup-stat-lbl">Total</div>
                                </div>
                                <div class="mockup-stat mockup-stat-2">
                                    <div class="mockup-stat-num">23</div>
                                    <div class="mockup-stat-lbl">Open</div>
                                </div>
                                <div class="mockup-stat mockup-stat-3">
                                    <div class="mockup-stat-num">41</div>
                                    <div class="mockup-stat-lbl">Active</div>
                                </div>
                                <div class="mockup-stat mockup-stat-4">
                                    <div class="mockup-stat-num">64</div>
                                    <div class="mockup-stat-lbl">Done</div>
                                </div>
                            </div>
                            <div class="mockup-chart">
                                <div class="mockup-chart-title">Monthly Incidents</div>
                                <div class="mockup-bars">
                                    <div class="mockup-bar" style="height:32%;background:rgba(52,209,167,0.4);"></div>
                                    <div class="mockup-bar" style="height:50%;background:rgba(251,191,36,0.5);"></div>
                                    <div class="mockup-bar" style="height:85%;background:rgba(239,68,68,0.5);"></div>
                                    <div class="mockup-bar" style="height:62%;background:rgba(251,191,36,0.5);"></div>
                                    <div class="mockup-bar" style="height:40%;background:rgba(52,209,167,0.4);"></div>
                                    <div class="mockup-bar" style="height:20%;background:rgba(52,209,167,0.4);"></div>
                                </div>
                            </div>
                            <div class="mockup-table">
                                <div class="mockup-table-head">
                                    <div>ID</div><div>Incident</div><div>Priority</div>
                                </div>
                                <div class="mockup-table-row">
                                    <div style="color:rgba(255,255,255,0.35);">INC-058</div>
                                    <div>Physical altercation</div>
                                    <div class="mockup-priority-high"><div class="mockup-priority-dot"></div>High</div>
                                </div>
                                <div class="mockup-table-row">
                                    <div style="color:rgba(255,255,255,0.35);">INC-057</div>
                                    <div>Theft in Science Lab</div>
                                    <div class="mockup-priority-med"><div class="mockup-priority-dot"></div>Medium</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== LOGO STRIP ======================== -->
    <div style="border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05);padding:28px 32px;text-align:center;">
        <p style="font-size:12px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,0.2);margin-bottom:24px;">Trusted by schools across the Philippines</p>
        <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:48px;align-items:center;">
            <div style="font-size:14px;font-weight:600;color:rgba(255,255,255,0.2);">DepEd Manila</div>
            <div style="font-size:14px;font-weight:600;color:rgba(255,255,255,0.2);">Ateneo de Manila</div>
            <div style="font-size:14px;font-weight:600;color:rgba(255,255,255,0.2);">De La Salle University</div>
            <div style="font-size:14px;font-weight:600;color:rgba(255,255,255,0.2);">UP Diliman</div>
            <div style="font-size:14px;font-weight:600;color:rgba(255,255,255,0.2);">DLSU-D</div>
        </div>
    </div>

    <!-- ======================== FEATURES ======================== -->
    <section class="section features-bg" id="features">
        <div class="section-inner">
            <div class="section-header fade-in">
                <div class="section-badge">
                    <div class="section-badge-line"></div>
                    Features
                    <div class="section-badge-line"></div>
                </div>
                <h2 class="section-title">Everything your campus needs</h2>
                <p class="section-desc">From incident submission to resolution — KampusKalinga handles every step with AI precision and real-time visibility.</p>
            </div>
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card fade-in">
                    <div class="feature-icon feature-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="9" height="9"/><rect x="13" y="2" width="9" height="9"/><rect x="13" y="13" width="9" height="9"/><rect x="2" y="13" width="9" height="9"/></svg>
                    </div>
                    <div class="feature-title">AI Priority Detection</div>
                    <div class="feature-desc">Our ML model auto-classifies every incident as High, Medium, or Low priority so your team acts on what matters most first.</div>
                    <ul class="feature-list">
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Instant auto-classification on submission</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> 94%+ accuracy rate</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Manual override by administrators</li>
                    </ul>
                </div>
                <!-- Feature 2 -->
                <div class="feature-card fade-in">
                    <div class="feature-icon feature-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div class="feature-title">Interactive Campus Map</div>
                    <div class="feature-desc">Visualize all incidents on a live map. Color-coded pins reveal priority hotspots across buildings, parking lots, and grounds at a glance.</div>
                    <ul class="feature-list">
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Color-coded priority pins</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Hotspot area identification</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Filter by date and priority level</li>
                    </ul>
                </div>
                <!-- Feature 3 -->
                <div class="feature-card fade-in">
                    <div class="feature-icon feature-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                    </div>
                    <div class="feature-title">Analytics & Reporting</div>
                    <div class="feature-desc">Track monthly trends, category breakdowns, and response time improvements through rich, exportable charts.</div>
                    <ul class="feature-list">
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Monthly trend bar charts</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Category & response time charts</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> One-click report export</li>
                    </ul>
                </div>
                <!-- Feature 4 -->
                <div class="feature-card fade-in">
                    <div class="feature-icon feature-icon-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    </div>
                    <div class="feature-title">Instant Notifications</div>
                    <div class="feature-desc">The moment an incident is reported, admins and security staff are instantly alerted with full context and priority classification.</div>
                    <ul class="feature-list">
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Real-time push alerts</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Role-based notification routing</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Email & in-app alerts</li>
                    </ul>
                </div>
                <!-- Feature 5 -->
                <div class="feature-card fade-in">
                    <div class="feature-icon feature-icon-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="feature-title">Role-Based Access</div>
                    <div class="feature-desc">Assign students, faculty, security officers, and administrators with granular permission levels to ensure the right people see the right data.</div>
                    <ul class="feature-list">
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Multi-role user management</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Granular permissions</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Audit trail logging</li>
                    </ul>
                </div>
                <!-- Feature 6 -->
                <div class="feature-card fade-in">
                    <div class="feature-icon feature-icon-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div class="feature-title">Incident Management</div>
                    <div class="feature-desc">A full lifecycle tracker — from submission and triage to escalation, resolution, and archiving — all in one clean dashboard.</div>
                    <ul class="feature-list">
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Status tracking pipeline</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Photo & file attachments</li>
                        <li><div class="feature-list-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div> Searchable incident archive</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== HOW IT WORKS ======================== -->
    <section class="section" id="how-it-works">
        <div class="section-inner">
            <div class="section-header fade-in">
                <div class="section-badge">
                    <div class="section-badge-line"></div>
                    How It Works
                    <div class="section-badge-line"></div>
                </div>
                <h2 class="section-title">From report to resolution in minutes</h2>
                <p class="section-desc">A seamless four-step process that keeps everyone informed and every incident managed.</p>
            </div>
            <div class="steps-grid fade-in">
                <div class="step-card">
                    <div class="step-num">01</div>
                    <div class="step-title">Report Submitted</div>
                    <div class="step-desc">Student, faculty, or staff files an incident through the web portal — instantly timestamped and logged.</div>
                </div>
                <div class="step-card">
                    <div class="step-num">02</div>
                    <div class="step-title">AI Classifies Priority</div>
                    <div class="step-desc">The AI model analyzes report content and automatically assigns a High, Medium, or Low priority level.</div>
                </div>
                <div class="step-card">
                    <div class="step-num">03</div>
                    <div class="step-title">Admin Notified</div>
                    <div class="step-desc">The responsible administrator receives an instant notification with full incident details and priority context.</div>
                </div>
                <div class="step-card">
                    <div class="step-num">04</div>
                    <div class="step-title">Resolved & Logged</div>
                    <div class="step-desc">Security staff acts, updates incident status, and the record is archived for analytics and compliance.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== TESTIMONIALS ======================== -->
    <section class="section testimonial-section">
        <div class="section-inner">
            <div class="section-header fade-in">
                <div class="section-badge">
                    <div class="section-badge-line"></div>
                    Testimonials
                    <div class="section-badge-line"></div>
                </div>
                <h2 class="section-title">Loved by campus administrators</h2>
            </div>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;">
                <div class="testimonial-card fade-in">
                    <div class="testimonial-stars">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <div class="testimonial-quote">"KampusKalinga transformed how we handle safety incidents. Our response times dropped from hours to minutes — the AI classification alone is worth every peso."</div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:linear-gradient(135deg,#1a6b5a,#34d1a7);">RD</div>
                        <div>
                            <div class="testimonial-name">Dr. Ramon Dela Cruz</div>
                            <div class="testimonial-role">Principal, Rizal National High School</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="testimonial-stars">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <div class="testimonial-quote">"The campus map feature is a game-changer. We can see exactly where incidents cluster and deploy our security staff proactively. Highly recommended."</div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:linear-gradient(135deg,#6366f1,#a78bfa);">MS</div>
                        <div>
                            <div class="testimonial-name">Maria Santos</div>
                            <div class="testimonial-role">Security Director, De La Salle College</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="testimonial-stars">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <div class="testimonial-quote">"Finally a system built for Philippine school environments. The analytics dashboards help us report to DepEd with actual data. Excellent product."</div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:linear-gradient(135deg,#ea580c,#fb923c);">JR</div>
                        <div>
                            <div class="testimonial-name">Jose Reyes</div>
                            <div class="testimonial-role">Division Supervisor, DepEd Manila</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== PRICING ======================== -->
    <section class="section" id="pricing">
        <div class="section-inner">
            <div class="section-header fade-in">
                <div class="section-badge">
                    <div class="section-badge-line"></div>
                    Pricing
                    <div class="section-badge-line"></div>
                </div>
                <h2 class="section-title">Simple, transparent pricing</h2>
                <p class="section-desc">No hidden fees. Cancel anytime. All plans include a 14-day free trial — no credit card required.</p>
            </div>
            <div class="pricing-grid fade-in">
                <!-- Basic -->
                <div class="pricing-card">
                    <div class="pricing-name">Basic</div>
                    <div class="pricing-price">₱999 <small>/mo</small></div>
                    <div class="pricing-desc">For small campuses getting started with digital incident reporting.</div>
                    <a href="{{ route('register') }}" class="pricing-cta pricing-cta-outline">Get Started</a>
                    <hr class="pricing-divider">
                    <ul class="pricing-features">
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Up to 50 incidents / month</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> 1 administrator account</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Basic dashboard</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Campus location access</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Email support</li>
                        <li class="muted"><svg class="pricing-x" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> AI Priority Detection</li>
                        <li class="muted"><svg class="pricing-x" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Advanced analytics</li>
                    </ul>
                </div>
                <!-- Professional (Featured) -->
                <div class="pricing-card pricing-card-featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-name">Professional</div>
                    <div class="pricing-price">₱2,499 <small>/mo</small></div>
                    <div class="pricing-desc">The complete safety management toolkit for growing schools.</div>
                    <a href="{{ route('register') }}" class="pricing-cta pricing-cta-solid">Get Started</a>
                    <hr class="pricing-divider">
                    <ul class="pricing-features">
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Unlimited incident reports</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> <strong style="color:#fff;">AI Priority Detection</strong></li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Advanced analytics & export</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Up to 10 administrator accounts</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Priority support</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Upload school logo</li>
                        <li class="muted"><svg class="pricing-x" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Multi-campus management</li>
                    </ul>
                </div>
                <!-- Enterprise -->
                <div class="pricing-card">
                    <div class="pricing-name">Enterprise</div>
                    <div class="pricing-price">₱4,999 <small>/mo</small></div>
                    <div class="pricing-desc">Full white-label deployment for large school systems and networks.</div>
                    <a href="{{ route('register') }}" class="pricing-cta pricing-cta-outline">Get Started</a>
                    <hr class="pricing-divider">
                    <ul class="pricing-features">
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Everything in Professional</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Unlimited administrators</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> <strong style="color:#fff;">Multi-campus management</strong></li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> API integration</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Dedicated account manager</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> White-label deployment</li>
                        <li><svg class="pricing-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> On-site training</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== CTA ======================== -->
    <section class="cta-section">
        <div class="cta-glow"></div>
        <div style="position:relative;z-index:1;">
            <div class="section-badge" style="justify-content:center;margin-bottom:20px;">
                <div class="section-badge-line"></div>
                Get Started Today
                <div class="section-badge-line"></div>
            </div>
            <h2 class="cta-title fade-in">Start protecting your campus today.</h2>
            <p class="cta-desc fade-in">Join schools across the Philippines using KampusKalinga to manage safety incidents smarter, faster, and with AI precision.</p>
            <div class="cta-actions fade-in">
                <a href="{{ route('register') }}" class="btn-cta-primary">
                    Get Started Free
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#" class="btn-cta-outline">Request a Demo</a>
            </div>
            <p style="margin-top:20px;font-size:13px;color:rgba(255,255,255,0.25);">No credit card required · 14-day free trial · Cancel anytime</p>
        </div>
    </section>

    <!-- ======================== FOOTER ======================== -->
    <footer>
        <div class="footer-inner">
            <div class="footer-grid">
                <!-- Brand -->
                <div>
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px;">
                        <div class="nav-logo-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                        </div>
                        <span class="footer-brand-name">KampusKalinga</span>
                    </div>
                    <p class="footer-brand-desc">AI-powered campus safety and incident management for Philippine schools. Built to protect every student, every day.</p>
                    <div class="footer-socials">
                        <a href="#" class="footer-social">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/></svg>
                        </a>
                        <a href="#" class="footer-social">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                        </a>
                        <a href="#" class="footer-social">
                            <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Product -->
                <div>
                    <div class="footer-col-title">Product</div>
                    <ul class="footer-links">
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#">Changelog</a></li>
                        <li><a href="#">Roadmap</a></li>
                        <li><a href="#">API Docs</a></li>
                    </ul>
                </div>
                <!-- Company -->
                <div>
                    <div class="footer-col-title">Company</div>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press Kit</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <div class="footer-col-title">Contact</div>
                    <ul class="footer-links">
                        <li><a href="mailto:hello@kampuskalinga.ph">hello@kampuskalinga.ph</a></li>
                        <li><a href="tel:028888SAFE">(02) 8888-SAFE</a></li>
                        <li><a href="#">Makati City, Metro Manila</a></li>
                        <li style="margin-top:8px;"><a href="#">Support Center →</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span class="footer-copy">&copy; {{ date('Y') }} KampusKalinga. All rights reserved.</span>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Settings</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Scroll-based nav effect
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 20);
        });

        // Intersection Observer for fade-in animations
        const observerOptions = { threshold: 0.12, rootMargin: '0px 0px -40px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    // Stagger children
                    const delay = entry.target.dataset.delay || 0;
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Add staggered delays to feature cards, pricing cards, etc.
        document.querySelectorAll('.feature-card, .pricing-card, .testimonial-card, .step-card').forEach((el, i) => {
            el.classList.add('fade-in');
            el.dataset.delay = (i % 3) * 100;
        });

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    </script>

</body>
</html>
