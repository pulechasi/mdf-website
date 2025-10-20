@extends('layouts.auth')

@section('content')
    <div class="login-form-container">
        <div class="login-card">
            <div class="card-header">
                <div class="organization-branding">
                    <img src="{{ asset('app/img/mdf1.png') }}" alt="MDF" class="organization-logo">
                    <h3 class="organization-name">MALAWI DEFENCE FORCE</h3>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-container">
                            <i class="fas fa-user input-icon"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                            <div class="error-message">
                                <i class="fas fa-exclamation-triangle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-container">
                            <i class="fas fa-lock input-icon"></i>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                        </div>
                        @error('password')
                            <div class="error-message">
                                <i class="fas fa-exclamation-triangle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-options">
                        <div class="remember-me">
                            <label class="checkbox-label">
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                                Remember Credentials
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="forgot-password" href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    <div class="form-action">
                        <button type="submit" class="btn btn-primary btn-login">
                            <i class="fas fa-sign-in-alt btn-icon"></i>
                            LOGIN
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
