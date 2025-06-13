<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Choco Lux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #8B4513;
            --primary-light: #A0522D;
            --primary-dark: #654321;
            --secondary-color: #D2691E;
            --accent-color: #F4A460;
            --background-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --card-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--background-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            padding: 20px 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="10" cy="50" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="90" cy="30" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }

        .register-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .register-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            color: white;
            text-align: center;
            padding: 40px 30px;
            position: relative;
        }

        .register-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="%23ffffff" opacity="0.1"/><circle cx="80" cy="80" r="2" fill="%23ffffff" opacity="0.1"/><circle cx="40" cy="70" r="1" fill="%23ffffff" opacity="0.1"/></svg>');
        }

        .brand-logo {
            font-size: 3rem;
            margin-bottom: 10px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .brand-name {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .brand-tagline {
            opacity: 0.9;
            font-size: 0.9rem;
        }

        .register-body {
            padding: 40px 30px;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group .form-control {
            border: 2px solid #e9ecef;
            border-radius: 15px;
            padding: 15px 20px 15px 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
            height: 55px;
        }

        .input-group .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
            background-color: white;
            outline: none;
        }

        .input-group .form-control::placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            z-index: 10;
            font-size: 1.1rem;
            pointer-events: none;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6c757d;
            cursor: pointer;
            z-index: 10;
            padding: 5px;
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .password-strength {
            margin-top: 10px;
            font-size: 0.85rem;
        }

        .strength-bar {
            height: 4px;
            border-radius: 2px;
            background-color: #e9ecef;
            margin-top: 5px;
            overflow: hidden;
        }

        .strength-fill {
            height: 100%;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .strength-weak { background-color: #dc3545; width: 25%; }
        .strength-fair { background-color: #ffc107; width: 50%; }
        .strength-good { background-color: #17a2b8; width: 75%; }
        .strength-strong { background-color: #28a745; width: 100%; }

        .btn-register {
            background: linear-gradient(45deg, var(--primary-color), var(--primary-light));
            border: none;
            color: white;
            padding: 15px;
            border-radius: 15px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn-register:hover::before {
            left: 100%;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(139, 69, 19, 0.3);
        }

        .login-link {
            text-align: center;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #e9ecef;
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-link a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .alert {
            border: none;
            border-radius: 15px;
            padding: 15px 20px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-success {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
        }

        .alert-danger {
            background: linear-gradient(45deg, #dc3545, #e74c3c);
            color: white;
        }

        .text-danger {
            color: #dc3545 !important;
            font-size: 0.85rem;
            margin-top: 5px;
            display: block;
        }

        .btn-loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @media (max-width: 576px) {
            .register-container {
                padding: 10px;
            }

            .register-header {
                padding: 30px 20px;
            }

            .register-body {
                padding: 30px 20px;
            }

            .brand-name {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <div class="brand-logo">
                    <i class="fas fa-gem"></i>
                </div>
                <h1 class="brand-name">Choco Lux</h1>
                <p class="brand-tagline">Join Our Premium Community</p>
            </div>

            <div class="register-body">
                <form action="{{ route('register.post') }}" method="POST" id="registerForm">
                    @csrf

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i>{{ $error }}
                            </div>
                        @endforeach
                    @endif

                    <div class="input-group">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text"
                               class="form-control"
                               id="fullname"
                               name="fullname"
                               placeholder="Full Name"
                               value="{{ old('fullname') }}"
                               required>
                        @error('fullname')
                            <span class="text-danger">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="Email Address"
                               value="{{ old('email') }}"
                               required>
                        @error('email')
                            <span class="text-danger">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password"
                               placeholder="Password"
                               required>
                        <button type="button" class="password-toggle" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>

                        <div class="password-strength" id="passwordStrength" style="display: none;">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="strength-text">Password Strength:</span>
                                <span class="strength-label">Weak</span>
                            </div>
                            <div class="strength-bar">
                                <div class="strength-fill"></div>
                            </div>
                        </div>

                        @error('password')
                            <span class="text-danger">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password"
                               class="form-control"
                               id="password_confirmation"
                               name="password_confirmation"
                               placeholder="Confirm Password"
                               required>
                        <button type="button" class="password-toggle" id="togglePasswordConfirm">
                            <i class="fas fa-eye"></i>
                        </button>

                        <div class="password-match mt-2" id="passwordMatch" style="display: none;">
                            <small class="match-text"></small>
                        </div>

                        @error('password_confirmation')
                            <span class="text-danger">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-register" id="registerBtn">
                        <i class="fas fa-user-plus me-2"></i>
                        <span class="btn-text">Create Account</span>
                    </button>

                    <div class="login-link">
                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');
            const passwordConfirmInput = document.getElementById('password_confirmation');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });

            togglePasswordConfirm.addEventListener('click', function() {
                const type = passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordConfirmInput.setAttribute('type', type);

                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });

            const passwordStrength = document.getElementById('passwordStrength');
            const strengthFill = document.querySelector('.strength-fill');
            const strengthLabel = document.querySelector('.strength-label');

            passwordInput.addEventListener('input', function() {
                const password = this.value;

                if (password.length > 0) {
                    passwordStrength.style.display = 'block';

                    let strength = 0;
                    let label = 'Weak';
                    let className = 'strength-weak';

                    if (password.length >= 8) strength++;
                    if (/[a-z]/.test(password)) strength++;
                    if (/[A-Z]/.test(password)) strength++;
                    if (/[0-9]/.test(password)) strength++;
                    if (/[^A-Za-z0-9]/.test(password)) strength++;

                    switch (strength) {
                        case 0:
                        case 1:
                            label = 'Weak';
                            className = 'strength-weak';
                            break;
                        case 2:
                        case 3:
                            label = 'Fair';
                            className = 'strength-fair';
                            break;
                        case 4:
                            label = 'Good';
                            className = 'strength-good';
                            break;
                        case 5:
                            label = 'Strong';
                            className = 'strength-strong';
                            break;
                    }

                    strengthFill.className = `strength-fill ${className}`;
                    strengthLabel.textContent = label;
                } else {
                    passwordStrength.style.display = 'none';
                }
            });

            const passwordMatch = document.getElementById('passwordMatch');
            const matchText = document.querySelector('.match-text');

            function checkPasswordMatch() {
                const password = passwordInput.value;
                const confirmPassword = passwordConfirmInput.value;

                if (confirmPassword.length > 0) {
                    passwordMatch.style.display = 'block';

                    if (password === confirmPassword) {
                        matchText.innerHTML = '<i class="fas fa-check-circle text-success me-1"></i>Passwords match';
                        matchText.className = 'match-text text-success';
                    } else {
                        matchText.innerHTML = '<i class="fas fa-times-circle text-danger me-1"></i>Passwords do not match';
                        matchText.className = 'match-text text-danger';
                    </div>
                } else {
                    passwordMatch.style.display = 'none';
                }
            }

            passwordInput.addEventListener('input', checkPasswordMatch);
            passwordConfirmInput.addEventListener('input', checkPasswordMatch);

            const registerForm = document.getElementById('registerForm');
            const registerBtn = document.getElementById('registerBtn');
            const btnText = registerBtn.querySelector('.btn-text');

            registerForm.addEventListener('submit', function() {
                registerBtn.classList.add('btn-loading');
                btnText.innerHTML = '<span class="spinner me-2"></span>Creating Account...';
            });

            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 500);
                }, 5000);
            });
        });
    </script>
</body>
</html>
