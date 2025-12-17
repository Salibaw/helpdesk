<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Violet Network</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            padding: 2rem 0;
        }

        body::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveBackground 20s linear infinite;
        }

        @keyframes moveBackground {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .register-container {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 500px;
            z-index: 1;
            animation: fadeInUp 0.6s ease;
            margin: 1rem;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: bold;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.3rem;
        }

        .subtitle {
            color: #666;
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
            font-size: 0.9rem;
        }

        label .required {
            color: #e74c3c;
        }

        input, select {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            color: #666;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #667eea;
        }

        .password-strength {
            margin-top: 0.5rem;
            font-size: 0.85rem;
        }

        .strength-bar {
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            margin-top: 0.3rem;
            overflow: hidden;
        }

        .strength-fill {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .strength-weak { 
            width: 33%; 
            background: #e74c3c; 
        }

        .strength-medium { 
            width: 66%; 
            background: #f39c12; 
        }

        .strength-strong { 
            width: 100%; 
            background: #27ae60; 
        }

        .terms {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            margin: 1.5rem 0;
            font-size: 0.9rem;
        }

        .terms input[type="checkbox"] {
            width: auto;
            margin-top: 0.2rem;
            cursor: pointer;
            flex-shrink: 0;
        }

        .terms a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        .btn-register {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-register:active {
            transform: translateY(0);
        }

        .btn-register:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background: #e0e0e0;
        }

        .divider span {
            background: white;
            padding: 0 1rem;
            position: relative;
            color: #666;
            font-size: 0.9rem;
        }

        .login-link {
            text-align: center;
            color: #666;
            font-size: 0.95rem;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #764ba2;
        }

        .back-home {
            text-align: center;
            margin-top: 1.5rem;
        }

        .back-home a {
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: color 0.3s ease;
        }

        .back-home a:hover {
            color: #667eea;
        }

        .alert {
            padding: 0.8rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            display: none;
        }

        .alert-error {
            background: #fee;
            color: #c33;
            border: 1px solid #fcc;
        }

        .alert-success {
            background: #efe;
            color: #3c3;
            border: 1px solid #cfc;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .input-hint {
            font-size: 0.8rem;
            color: #999;
            margin-top: 0.3rem;
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 2rem 1.5rem;
            }

            .logo-text {
                font-size: 1.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo-section">
            <div class="logo">🎫</div>
            <div class="logo-text">Violet Network</div>
            <p class="subtitle">Buat Akun Baru</p>
        </div>

        <div id="alert" class="alert"></div>

        <form id="registerForm">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">Nama Depan <span class="required">*</span></label>
                    <input type="text" id="firstName" name="firstName" placeholder="Nama depan" required>
                </div>

                <div class="form-group">
                    <label for="lastName">Nama Belakang <span class="required">*</span></label>
                    <input type="text" id="lastName" name="lastName" placeholder="Nama belakang" required>
                </div>
            </div>

            <div class="form-group">
                <label for="username">Username <span class="required">*</span></label>
                <input type="text" id="username" name="username" placeholder="Pilih username unik" required>
                <div class="input-hint">Username harus terdiri dari 4-20 karakter</div>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="email@example.com" required>
            </div>

            <div class="form-group">
                <label for="phone">Nomor Telepon <span class="required">*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="08xx-xxxx-xxxx" required>
            </div>

            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" placeholder="Alamat lengkap">
            </div>

            <div class="form-group">
                <label for="password">Password <span class="required">*</span></label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Buat password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword('password')">👁️</button>
                </div>
                <div class="password-strength">
                    <div class="strength-bar">
                        <div id="strengthFill" class="strength-fill"></div>
                    </div>
                    <small id="strengthText"></small>
                </div>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Konfirmasi Password <span class="required">*</span></label>
                <div class="password-wrapper">
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Ulangi password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword('confirmPassword')">👁️</button>
                </div>
            </div>

            <div class="terms">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms" style="margin: 0; font-weight: normal;">
                    Saya menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>
                </label>
            </div>

            <button type="submit" class="btn-register">Daftar Sekarang</button>
        </form>

        <div class="divider">
            <span>atau</span>
        </div>

        <div class="login-link">
            Sudah punya akun? <a href="{{ 'login' }}">Masuk di sini</a>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleBtn = passwordInput.nextElementSibling;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleBtn.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleBtn.textContent = '👁️';
            }
        }

        function checkPasswordStrength(password) {
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');
            
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/\d/)) strength++;
            if (password.match(/[^a-zA-Z\d]/)) strength++;
            
            strengthFill.className = 'strength-fill';
            
            if (strength === 0) {
                strengthText.textContent = '';
            } else if (strength <= 2) {
                strengthFill.classList.add('strength-weak');
                strengthText.textContent = 'Password lemah';
                strengthText.style.color = '#e74c3c';
            } else if (strength === 3) {
                strengthFill.classList.add('strength-medium');
                strengthText.textContent = 'Password sedang';
                strengthText.style.color = '#f39c12';
            } else {
                strengthFill.classList.add('strength-strong');
                strengthText.textContent = 'Password kuat';
                strengthText.style.color = '#27ae60';
            }
        }

        function showAlert(message, type) {
            const alert = document.getElementById('alert');
            alert.textContent = message;
            alert.className = `alert alert-${type}`;
            alert.style.display = 'block';
            
            setTimeout(() => {
                alert.style.display = 'none';
            }, 3000);
        }

        document.getElementById('password').addEventListener('input', function() {
            checkPasswordStrength(this.value);
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;
            const username = document.getElementById('username').value;
            
            // Validasi username
            if (username.length < 4 || username.length > 20) {
                showAlert('Username harus terdiri dari 4-20 karakter!', 'error');
                return;
            }
            
            // Validasi password
            if (password.length < 8) {
                showAlert('Password minimal 8 karakter!', 'error');
                return;
            }
            
            // Validasi konfirmasi password
            if (password !== confirmPassword) {
                showAlert('Password tidak cocok!', 'error');
                return;
            }
            
            // Validasi terms
            if (!terms) {
                showAlert('Anda harus menyetujui syarat & ketentuan!', 'error');
                return;
            }
            
            // Simulasi registrasi berhasil
            showAlert('Pendaftaran berhasil! Mengalihkan ke halaman login...', 'success');
            
            setTimeout(() => {
                // window.location.href = 'login.html';
                console.log('Redirect ke halaman login');
            }, 2000);
        });

        // Animasi input focus
        const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.01)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>