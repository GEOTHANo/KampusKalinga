<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KampusKalinga — Create Account</title>
    <meta name="description" content="Create your KampusKalinga account and start managing campus safety incidents.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
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
        }

        /* ===== LEFT PANEL ===== */
        .left-panel {
            width: 42%;
            min-height: 100vh;
            background: linear-gradient(160deg, #0a1f1a 0%, #0d2e26 50%, #0a1a15 100%);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 40px 48px;
            overflow: hidden;
        }
        @media (max-width: 1024px) { .left-panel { display: none; } }

        .orb {
            position: absolute; border-radius: 50%;
            filter: blur(90px); pointer-events: none;
        }
        .orb-1 {
            width: 450px; height: 450px;
            background: radial-gradient(circle, rgba(31,140,114,0.3) 0%, transparent 70%);
            top: -150px; left: -80px;
            animation: orb-move 10s ease-in-out infinite alternate;
        }
        .orb-2 {
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(52,209,167,0.15) 0%, transparent 70%);
            bottom: 80px; right: -60px;
            animation: orb-move 14s ease-in-out 3s infinite alternate;
        }
        @keyframes orb-move {
            from { transform: translate(0,0); }
            to { transform: translate(20px,-30px); }
        }
        .grid-bg {
            position: absolute; inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 50px 50px;
            mask-image: radial-gradient(ellipse 80% 90% at 30% 50%, black 20%, transparent 100%);
        }

        .left-top { position: relative; z-index: 10; }
        .logo-wrap { display: flex; align-items: center; gap: 12px; margin-bottom: 60px; }
        .logo-icon {
            width: 42px; height: 42px;
            background: linear-gradient(135deg, var(--teal-600), var(--teal-400));
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 0 28px rgba(52,209,167,0.3);
        }
        .logo-name { font-size: 18px; font-weight: 700; color: #fff; letter-spacing: -0.3px; }
        .logo-tag { font-size: 11px; color: rgba(255,255,255,0.4); font-weight: 500; margin-top: 1px; }

        .panel-title {
            font-size: clamp(28px, 3vw, 46px);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: -1.2px;
            color: #fff;
            margin-bottom: 16px;
        }
        .panel-title-accent {
            background: linear-gradient(135deg, var(--teal-300), var(--teal-400));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .panel-desc {
            font-size: 15px;
            color: rgba(255,255,255,0.4);
            line-height: 1.75;
            max-width: 340px;
            margin-bottom: 40px;
        }
        .feature-list { list-style: none; display: flex; flex-direction: column; gap: 14px; }
        .feature-item { display: flex; align-items: flex-start; gap: 12px; }
        .feature-check {
            width: 22px; height: 22px; border-radius: 6px;
            background: rgba(52,209,167,0.12);
            border: 1px solid rgba(52,209,167,0.2);
            display: flex; align-items: center; justify-content: center;
            color: var(--teal-400); flex-shrink: 0; margin-top: 1px;
        }
        .feature-item-text { font-size: 14px; font-weight: 500; color: rgba(255,255,255,0.55); }
        .feature-item-text strong { color: rgba(255,255,255,0.85); display: block; font-weight: 600; margin-bottom: 2px; }

        .left-bottom { position: relative; z-index: 10; }
        .trial-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(52,209,167,0.1);
            border: 1px solid rgba(52,209,167,0.2);
            border-radius: 10px;
            padding: 14px 18px;
        }
        .trial-badge-icon {
            width: 36px; height: 36px; border-radius: 8px;
            background: rgba(52,209,167,0.15);
            color: var(--teal-400);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .trial-title { font-size: 14px; font-weight: 700; color: #fff; margin-bottom: 2px; }
        .trial-desc { font-size: 12px; color: rgba(255,255,255,0.35); }

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
            top: -150px; right: -150px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(31,140,114,0.07) 0%, transparent 70%);
            pointer-events: none;
        }

        .form-container {
            width: 100%; max-width: 440px;
            position: relative; z-index: 1;
        }
        .mobile-logo-row {
            display: none; align-items: center; gap: 10px; margin-bottom: 36px;
        }
        @media (max-width: 1024px) { .mobile-logo-row { display: flex; } }

        .form-title { font-size: 26px; font-weight: 800; color: #fff; letter-spacing: -0.5px; margin-bottom: 6px; }
        .form-subtitle { font-size: 13px; color: rgba(255,255,255,0.35); margin-bottom: 32px; }
        .form-subtitle a { color: var(--teal-400); font-weight: 600; text-decoration: none; }
        .form-subtitle a:hover { text-decoration: underline; }

        /* Step indicator */
        .progress-bar {
            width: 100%; height: 3px;
            background: rgba(255,255,255,0.07);
            border-radius: 2px;
            margin-bottom: 28px;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%; width: 50%;
            background: linear-gradient(90deg, var(--teal-700), var(--teal-400));
            border-radius: 2px;
            transition: width 0.4s ease;
        }

        /* Photo upload */
        .photo-area {
            display: flex; align-items: center; gap: 16px;
            margin-bottom: 24px;
        }
        .photo-circle {
            width: 64px; height: 64px; border-radius: 50%;
            background: rgba(255,255,255,0.04);
            border: 2px dashed rgba(255,255,255,0.15);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.2);
            cursor: pointer; transition: all 0.2s;
            flex-shrink: 0; position: relative; overflow: hidden;
        }
        .photo-circle:hover { border-color: var(--teal-600); color: var(--teal-400); }
        .photo-preview {
            width: 100%; height: 100%;
            object-fit: cover;
            display: none;
        }
        .photo-btn-text { display: flex; flex-direction: column; gap: 2px; }
        .photo-btn {
            font-size: 13px; font-weight: 600;
            color: rgba(255,255,255,0.55);
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            padding: 7px 14px;
            cursor: pointer; transition: all 0.2s;
            font-family: inherit;
        }
        .photo-btn:hover { background: rgba(255,255,255,0.09); color: #fff; border-color: rgba(255,255,255,0.2); }
        .photo-hint { font-size: 11px; color: rgba(255,255,255,0.2); }

        /* Field */
        .field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .field-group { margin-bottom: 16px; }
        .field-label {
            font-size: 12px; font-weight: 600; letter-spacing: 0.5px; text-transform: uppercase;
            color: rgba(255,255,255,0.4); margin-bottom: 8px; display: block;
        }
        .field-wrap { position: relative; }
        .field-icon {
            position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
            color: rgba(255,255,255,0.22); pointer-events: none;
        }
        .field-icon-right {
            position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
            color: rgba(255,255,255,0.22); background: none; border: none;
            cursor: pointer; padding: 0; transition: color 0.2s; font-family: inherit;
        }
        .field-icon-right:hover { color: rgba(255,255,255,0.6); }
        .field-input {
            width: 100%;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 12px 14px 12px 44px;
            font-size: 14px; font-weight: 500; color: #fff;
            outline: none; transition: all 0.2s;
            font-family: inherit;
        }
        .field-input::placeholder { color: rgba(255,255,255,0.18); }
        .field-input:focus {
            border-color: var(--teal-600);
            background: rgba(31,140,114,0.06);
            box-shadow: 0 0 0 3px rgba(31,140,114,0.1);
        }
        .field-input-pr { padding-right: 44px; }

        /* Terms */
        .terms-row {
            display: flex; align-items: flex-start; gap: 10px;
            margin-bottom: 24px;
        }
        .terms-row input[type="checkbox"] {
            width: 16px; height: 16px; margin-top: 1px;
            accent-color: var(--teal-500); cursor: pointer; flex-shrink: 0;
        }
        .terms-row label { font-size: 12px; color: rgba(255,255,255,0.35); line-height: 1.6; cursor: pointer; }
        .terms-row a { color: var(--teal-400); text-decoration: none; font-weight: 600; }
        .terms-row a:hover { text-decoration: underline; }

        /* Submit */
        .btn-submit {
            width: 100%;
            background: linear-gradient(135deg, var(--teal-700), var(--teal-500));
            color: #fff; font-size: 15px; font-weight: 700;
            padding: 14px; border-radius: 12px;
            border: none; cursor: pointer;
            box-shadow: 0 0 30px rgba(31,140,114,0.4);
            transition: all 0.2s; font-family: inherit;
            margin-bottom: 24px; position: relative; overflow: hidden;
        }
        .btn-submit::before {
            content: ''; position: absolute; inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.1), transparent);
            opacity: 0; transition: opacity 0.2s;
        }
        .btn-submit:hover { transform: translateY(-1px); box-shadow: 0 0 44px rgba(31,140,114,0.55); }
        .btn-submit:hover::before { opacity: 1; }
        .btn-submit:active { transform: translateY(0); }

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
        <div class="grid-bg"></div>

        <div class="left-top">
            <div class="logo-wrap">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <div class="logo-name">KampusKalinga</div>
                    <div class="logo-tag">Campus Safety Management</div>
                </div>
            </div>

            <h1 class="panel-title">
                Join your<br>
                <span class="panel-title-accent">safe campus</span><br>
                network.
            </h1>
            <p class="panel-desc">Create your account in seconds to start reporting incidents and keeping your school community safe.</p>

            <ul class="feature-list">
                <li class="feature-item">
                    <div class="feature-check">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="feature-item-text">
                        <strong>AI-powered triage</strong>
                        Incidents auto-classified by severity in milliseconds
                    </div>
                </li>
                <li class="feature-item">
                    <div class="feature-check">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="feature-item-text">
                        <strong>Real-time monitoring</strong>
                        Live dashboard with instant admin notifications
                    </div>
                </li>
                <li class="feature-item">
                    <div class="feature-check">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="feature-item-text">
                        <strong>Secure role-based access</strong>
                        Granular permissions for admins, security, and staff
                    </div>
                </li>
                <li class="feature-item">
                    <div class="feature-check">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="feature-item-text">
                        <strong>Analytics & reporting</strong>
                        DepEd-ready monthly reports with one click
                    </div>
                </li>
            </ul>
        </div>

        <div class="left-bottom">
            <div class="trial-badge">
                <div class="trial-badge-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div>
                    <div class="trial-title">14-day free trial included</div>
                    <div class="trial-desc">No credit card required. Cancel anytime.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================== RIGHT PANEL ======================== -->
    <div class="right-panel">
        <div class="form-container">

            <div class="mobile-logo-row">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div class="logo-name">KampusKalinga</div>
            </div>

            <h2 class="form-title">Create your account</h2>
            <p class="form-subtitle">
                Already have an account? <a href="{{ route('login') }}">Sign in instead →</a>
            </p>

            <div class="progress-bar">
                <div class="progress-fill" id="progressFill"></div>
            </div>

            <form action="{{ route('dashboard') }}" method="GET">
                @csrf

                <!-- Profile photo -->
                <div class="photo-area">
                    <div class="photo-circle" id="photoCircle" onclick="document.getElementById('photoInput').click()">
                        <img src="" alt="" class="photo-preview" id="photoPreview">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" id="photoPlaceholder"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <div class="photo-btn-text">
                        <input type="file" id="photoInput" class="field-input" accept="image/*" style="display:none;" onchange="previewPhoto(event)">
                        <button type="button" class="photo-btn" onclick="document.getElementById('photoInput').click()">Upload photo</button>
                        <span class="photo-hint">JPG, PNG or GIF · Max 2MB · Optional</span>
                    </div>
                </div>

                <!-- Name row -->
                <div class="field-row">
                    <div class="field-group">
                        <label class="field-label" for="first_name">First Name</label>
                        <div class="field-wrap">
                            <span class="field-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </span>
                            <input type="text" id="first_name" name="first_name" class="field-input" placeholder="Juan" required>
                        </div>
                    </div>
                    <div class="field-group">
                        <label class="field-label" for="last_name">Last Name</label>
                        <div class="field-wrap">
                            <span class="field-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </span>
                            <input type="text" id="last_name" name="last_name" class="field-input" placeholder="Dela Cruz" required>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="field-group">
                    <label class="field-label" for="email">Email Address</label>
                    <div class="field-wrap">
                        <span class="field-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </span>
                        <input type="email" id="email" name="email" class="field-input" placeholder="juan@kampus.edu.ph" required>
                    </div>
                </div>

                <!-- Password row -->
                <div class="field-row">
                    <div class="field-group">
                        <label class="field-label" for="password">Password</label>
                        <div class="field-wrap">
                            <span class="field-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            </span>
                            <input type="password" id="password" name="password" class="field-input field-input-pr" placeholder="••••••••" required>
                            <button type="button" class="field-icon-right" onclick="togglePass('password')">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            </button>
                        </div>
                    </div>
                    <div class="field-group">
                        <label class="field-label" for="password_confirmation">Confirm</label>
                        <div class="field-wrap">
                            <span class="field-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            </span>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="field-input field-input-pr" placeholder="••••••••" required>
                            <button type="button" class="field-icon-right" onclick="togglePass('password_confirmation')">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Terms -->
                <div class="terms-row">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">
                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>. I understand my data will be used to manage campus safety incidents.
                    </label>
                </div>

                <button type="button" class="btn-submit" onclick="window.location.href='{{ route('dashboard') }}'">
                    Create my account →
                </button>
            </form>

            <div class="form-footer">
                <p>By creating an account you agree to our <a href="#">terms</a>.</p>
            </div>
        </div>
    </div>

    <script>
        function togglePass(id) {
            const input = document.getElementById(id);
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        function previewPhoto(event) {
            const file = event.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('photoPreview');
                const placeholder = document.getElementById('photoPlaceholder');
                preview.src = e.target.result;
                preview.style.display = 'block';
                placeholder.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }

        // Update progress bar based on form fill
        const fields = document.querySelectorAll('input[required]');
        const progressFill = document.getElementById('progressFill');
        function updateProgress() {
            const filled = Array.from(fields).filter(f => f.value && (f.type !== 'checkbox' || f.checked)).length;
            const pct = Math.round((filled / fields.length) * 100);
            progressFill.style.width = Math.max(8, pct) + '%';
        }
        fields.forEach(f => f.addEventListener('input', updateProgress));
        fields.forEach(f => f.addEventListener('change', updateProgress));
        updateProgress();
    </script>
</body>
</html>
