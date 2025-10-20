<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>System Access - {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 0;
        }

        .login-form-container {
            max-width: 420px;
            width: 100%;
        }

        .login-card {
            background: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #1e3a5f;
            color: #ffffff;
            padding: 2rem;
            text-align: center;
            border-bottom: 1px solid #1e3a5f;
        }

        .organization-branding {
            margin-bottom: 1rem;
        }

        .organization-logo {
            height: 60px;
            margin-bottom: 0.75rem;
        }

        .organization-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: #ffffff;
        }

        .system-name {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-bottom: 0;
            color: #e5e7eb;
        }

        .login-title {
            font-size: 1.25rem;
            font-weight: 500;
            margin-bottom: 0;
            color: #ffffff;
        }

        .card-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .input-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            color: #6b7280;
            font-size: 1rem;
            z-index: 2;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 0.75rem 0.75rem 2.5rem;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 0.95rem;
            background: #ffffff;
            transition: border-color 0.2s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .error-message {
            display: flex;
            align-items: center;
            color: #dc2626;
            font-size: 0.85rem;
            margin-top: 0.5rem;
        }

        .error-message i {
            margin-right: 0.5rem;
            font-size: 0.8rem;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 0.9rem;
            color: #4b5563;
        }

        .checkbox-label input {
            display: none;
        }

        .checkmark {
            width: 18px;
            height: 18px;
            border: 2px solid #d1d5db;
            border-radius: 3px;
            margin-right: 8px;
            position: relative;
            transition: all 0.2s ease;
        }

        .checkbox-label input:checked+.checkmark {
            background: #1e3a5f;
            border-color: #1e3a5f;
        }

        .checkbox-label input:checked+.checkmark::after {
            content: '✓';
            position: absolute;
            color: white;
            font-size: 12px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .forgot-password {
            color: #1e3a5f;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .forgot-password:hover {
            color: #152642;
            text-decoration: underline;
        }

        .form-action {
            margin-top: 1.5rem;
        }

        .btn-login {
            background: #1e3a5f;
            border: 1px solid #1e3a5f;
            color: #ffffff;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-login:hover {
            background: #152642;
            border-color: #152642;
        }

        .btn-icon {
            margin-right: 0.5rem;
            font-size: 0.9rem;
        }

        .card-footer {
            padding: 1rem 2rem;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            text-align: center;
        }

        .security-notice {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-size: 0.85rem;
            margin: 0;
        }

        .security-notice i {
            margin-right: 0.5rem;
            color: #059669;
        }

        /* Alert Styles */
        .alert {
            border-radius: 4px;
            border: 1px solid transparent;
            margin-bottom: 1.5rem;
        }

        .alert-danger {
            background-color: #fef2f2;
            border-color: #fecaca;
            color: #dc2626;
        }

        .alert-success {
            background-color: #f0fdf4;
            border-color: #bbf7d0;
            color: #059669;
        }

        /* Responsive */
        @media (max-width: 480px) {

            .card-header,
            .card-body {
                padding: 1.5rem;
            }

            .form-options {
                flex-direction: column;
                align-items: flex-start;
            }

            .forgot-password {
                margin-top: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-form-container">
        @if (Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
