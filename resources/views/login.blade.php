<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KampusKalinga — Sign In</title>
    <meta name="description" content="Sign in to your KampusKalinga administrator account.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
            --dark: #050e0b;
        }
        html { height: 100%; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            display: flex;
            background: var(--dark);
            color: #fff;
            -webkit-font-smoothing: antialiased;
            overflow: hidden;
        }

        /* ===== LEFT PANEL ===== */
        .left-panel {
            width: 52%;
            min-height: 100vh;
            background: linear-gradient(160deg, #0a1f1a 0%, #0d2e26 50%, #0a1a15 100%);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 40px 52px;
            overflow: hidden;
        }
        @media (max-width: 1024px) { .left-panel { display: none; } }

        /* Animated gradient orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
        }
        .orb-1 {
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(31, 140, 114, 0.35) 0%, transparent 70%);
            top: -150px; left: -100px;
            animation: orb-drift 10s ease-in-out infinite alternate;
        }
        .orb-2 {
            width: 350px; height: 350px;
            background: radial-gradient(circle, rgba(52, 209, 167, 0.2) 0%, transparent 70%);
            bottom: 100px; right: -100px;
            animation: orb-drift 12s ease-in-out 2s infinite alternate;
        }
        .orb-3 {
            width: 250px; height: 250px;
            background: radial-gradient(circle, rgba(16, 107, 90, 0.3) 0%, transparent 70%);
            top: 50%; left: 40%;
            animation: orb-drift 8s ease-in-out 4s infinite alternate;
        }
        @keyframes orb-drift {
            from { transform: translate(0, 0) scale(1); }
            to { transform: translate(30px, -40px) scale(1.15); }
        }

        /* Grid pattern */
        .grid-overlay {
            position: absolute; inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
            background-size: 50px 50px;
            mask-image: radial-gradient(ellipse 80% 90% at 30% 50%, black 30%, transparent 100%);
        }

        .left-top { position: relative; z-index: 10; }
        .left-logo { display: flex; align-items: center; gap: 12px; margin-bottom: 72px; }
        .logo-icon {
            width: 42px; height: 42px;
            background: linear-gradient(135deg, var(--teal-600), var(--teal-400));
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 0 30px rgba(52, 209, 167, 0.3);
        }
        .logo-text { font-size: 18px; font-weight: 700; color: #fff; letter-spacing: -0.3px; }
        .logo-sub { font-size: 11px; color: rgba(255,255,255,0.4); font-weight: 500; margin-top: 1px; }

        .left-headline {
            font-size: clamp(32px, 3.5vw, 52px);
            font-weight: 900;
            line-height: 1.07;
            letter-spacing: -1.5px;
            color: #fff;
            margin-bottom: 20px;
        }
        .left-headline-accent {
            background: linear-gradient(135deg, var(--teal-300), var(--teal-400));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .left-desc {
            font-size: 16px;
            color: rgba(255,255,255,0.45);
            line-height: 1.7;
            max-width: 380px;
            margin-bottom: 48px;
        }

        .left-stats { display: flex; gap: 32px; margin-bottom: 64px; }
        .stat-item {}
        .stat-val { font-size: 32px; font-weight: 800; color: #fff; letter-spacing: -1px; }
        .stat-val span { color: var(--teal-400); }
        .stat-lbl { font-size: 12px; color: rgba(255,255,255,0.35); font-weight: 500; margin-top: 2px; }

        .left-testimonial {
            position: relative; z-index: 10;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 16px;
            padding: 24px 28px;
        }
        .testimonial-stars { display: flex; gap: 3px; margin-bottom: 14px; }
        .testimonial-quote-text {
            font-size: 15px;
            color: rgba(255,255,255,0.6);
            line-height: 1.7;
            font-style: italic;
            margin-bottom: 18px;
        }
        .testimonial-author-row { display: flex; align-items: center; gap: 12px; }
        .author-avatar {
            width: 40px; height: 40px; border-radius: 10px;
            background: linear-gradient(135deg, var(--teal-700), var(--teal-500));
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; font-weight: 700; color: #fff;
            flex-shrink: 0;
        }
        .author-name { font-size: 14px; font-weight: 600; color: #fff; }
        .author-role { font-size: 12px; color: rgba(255,255,255,0.35); }

        /* ===== RIGHT PANEL ===== */
        .right-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 32px;
            background: #080f0d;
            position: relative;
            overflow-y: auto;
        }
        .right-panel::before {
            content: '';
            position: absolute;
            top: -200px; right: -200px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(31, 140, 114, 0.08) 0%, transparent 70%);
            pointer-events: none;
        }

        .form-container {
            width: 100%;
            max-width: 420px;
            position: relative; z-index: 1;
        }

        /* Mobile logo */
        .mobile-logo {
            display: none;
            align-items: center;
            gap: 10px;
            margin-bottom: 40px;
        }
        @media (max-width: 1024px) { .mobile-logo { display: flex; } }

        .form-title {
            font-size: 28px;
            font-weight: 800;
            color: #fff;
            letter-spacing: -0.5px;
            margin-bottom: 8px;
        }
        .form-subtitle {
            font-size: 14px;
            color: rgba(255,255,255,0.35);
            margin-bottom: 36px;
            line-height: 1.6;
        }
        .form-subtitle a { color: var(--teal-400); text-decoration: none; font-weight: 600; }
        .form-subtitle a:hover { text-decoration: underline; }

        /* Form fields */
        .field-group { margin-bottom: 20px; }
        .field-label {
            display: flex; justify-content: space-between; align-items: center;
            font-size: 12px; font-weight: 600;
            color: rgba(255,255,255,0.5);
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }
        .field-label a { color: var(--teal-400); text-decoration: none; text-transform: none; letter-spacing: 0; font-size: 12px; font-weight: 600; }
        .field-label a:hover { text-decoration: underline; }
        .field-wrap { position: relative; }
        .field-icon {
            position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
            color: rgba(255,255,255,0.25); pointer-events: none;
            display: flex; align-items: center;
        }
        .field-input {
            width: 100%;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 13px 44px;
            font-size: 14px;
            font-weight: 500;
            color: #fff;
            outline: none;
            transition: all 0.2s;
            font-family: inherit;
        }
        .field-input::placeholder { color: rgba(255,255,255,0.2); }
        .field-input:focus {
            border-color: var(--teal-600);
            background: rgba(31, 140, 114, 0.07);
            box-shadow: 0 0 0 3px rgba(31, 140, 114, 0.12);
        }
        .field-input-right { padding-right: 44px; }
        .field-icon-right {
            position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
            color: rgba(255,255,255,0.25);
            background: none; border: none; cursor: pointer; padding: 0;
            display: flex; align-items: center;
            transition: color 0.2s;
        }
        .field-icon-right:hover { color: rgba(255,255,255,0.6); }

        /* Remember me */
        .remember-row { display: flex; align-items: center; gap: 10px; margin-bottom: 24px; }
        .remember-row input[type="checkbox"] {
            width: 16px; height: 16px;
            accent-color: var(--teal-500);
            cursor: pointer;
        }
        .remember-row label { font-size: 13px; color: rgba(255,255,255,0.45); cursor: pointer; font-weight: 500; }

        /* Submit button */
        .btn-submit {
            width: 100%;
            background: linear-gradient(135deg, var(--teal-700), var(--teal-500));
            color: #fff;
            font-size: 15px; font-weight: 700;
            padding: 14px;
            border-radius: 12px;
            border: none; cursor: pointer;
            box-shadow: 0 0 30px rgba(31, 140, 114, 0.4);
            transition: all 0.2s;
            font-family: inherit;
            margin-bottom: 24px;
            position: relative; overflow: hidden;
        }
        .btn-submit::before {
            content: '';
            position: absolute; inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.1), transparent);
            opacity: 0; transition: opacity 0.2s;
        }
        .btn-submit:hover { transform: translateY(-1px); box-shadow: 0 0 44px rgba(31, 140, 114, 0.55); }
        .btn-submit:hover::before { opacity: 1; }
        .btn-submit:active { transform: translateY(0); }

        /* Divider */
        .divider {
            display: flex; align-items: center; gap: 16px;
            margin-bottom: 20px;
        }
        .divider-line { flex: 1; height: 1px; background: rgba(255,255,255,0.08); }
        .divider-text { font-size: 12px; color: rgba(255,255,255,0.25); font-weight: 500; white-space: nowrap; }

        /* SSO button */
        .btn-sso {
            width: 100%;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.65);
            font-size: 14px; font-weight: 600;
            padding: 13px;
            border-radius: 12px;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 10px;
            transition: all 0.2s;
            font-family: inherit;
            margin-bottom: 32px;
        }
        .btn-sso:hover { background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.18); color: #fff; }

        .form-footer { text-align: center; }
        .form-footer p { font-size: 13px; color: rgba(255,255,255,0.3); font-weight: 500; }
        .form-footer a { color: var(--teal-400); font-weight: 600; text-decoration: none; }
        .form-footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <!-- ======================== LEFT PANEL ======================== -->
    <div class="left-panel">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="grid-overlay"></div>

        <div class="left-top">
            <div class="left-logo">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <div class="logo-text">KampusKalinga</div>
                    <div class="logo-sub">Campus Safety Management</div>
                </div>
            </div>

            <h1 class="left-headline">
                Keeping every<br>campus <span class="left-headline-accent">safe,</span><br>every day.
            </h1>
            <p class="left-desc">AI-powered incident reporting and management for Philippine public schools. Faster response. Smarter decisions.</p>

            <div class="left-stats">
                <div class="stat-item">
                    <div class="stat-val">128<span>+</span></div>
                    <div class="stat-lbl">Incidents tracked</div>
                </div>
                <div class="stat-item">
                    <div class="stat-val">94<span>%</span></div>
                    <div class="stat-lbl">AI accuracy</div>
                </div>
                <div class="stat-item">
                    <div class="stat-val">1.9<span>h</span></div>
                    <div class="stat-lbl">Avg. response</div>
                </div>
            </div>
        </div>

        <div class="left-testimonial">
            <div class="testimonial-stars">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <p class="testimonial-quote-text">"KampusKalinga has transformed how we manage safety incidents on campus. Response times dropped from hours to minutes."</p>
            <div class="testimonial-author-row">
                <div class="author-avatar">RD</div>
                <div>
                    <div class="author-name">Dr. Ramon Dela Cruz</div>
                    <div class="author-role">Principal, Rizal National High School</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================== RIGHT PANEL ======================== -->
    <div class="right-panel">
        <div class="form-container">

            <!-- Mobile logo -->
            <div class="mobile-logo">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <div class="logo-text">KampusKalinga</div>
                </div>
            </div>

            <h2 class="form-title">Welcome back</h2>
            <p class="form-subtitle">
                Don't have an account? <a href="{{ route('register') }}">Create one free →</a>
            </p>

            <form action="{{ route('dashboard') }}" method="GET">

                <div class="field-group">
                    <div class="field-label">Email Address</div>
                    <div class="field-wrap">
                        <span class="field-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </span>
                        <input type="email" class="field-input" id="email" value="admin@kampus.edu.ph" placeholder="your@school.edu.ph" required>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field-label">
                        Password
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field-wrap">
                        <span class="field-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </span>
                        <input type="password" class="field-input field-input-right" id="password" value="password123" placeholder="••••••••" required>
                        <button type="button" class="field-icon-right" id="togglePassword">
                            <svg id="eyeIcon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                    </div>
                </div>

                <div class="remember-row">
                    <input type="checkbox" id="remember" checked>
                    <label for="remember">Keep me signed in for 30 days</label>
                </div>

                <button type="button" class="btn-submit" onclick="window.location.href='{{ route('dashboard') }}'">
                    Sign in to your account
                </button>
            </form>

            <div class="divider">
                <div class="divider-line"></div>
                <div class="divider-text">or continue with</div>
                <div class="divider-line"></div>
            </div>

            <button type="button" class="btn-sso" onclick="window.location.href='{{ route('dashboard') }}'">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                Sign in with school email (SSO)
            </button>

            <div class="form-footer">
                <p>Having trouble? Contact your <a href="#">system administrator</a>.</p>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function () {
            const input = document.getElementById('password');
            const icon = document.getElementById('eyeIcon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>';
            } else {
                input.type = 'password';
                icon.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>';
            }
        });
    </script>
</body>
</html>
