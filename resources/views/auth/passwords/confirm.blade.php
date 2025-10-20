@extends('layouts.auth')

@section('content')
    <div class="login-form-container">
        <div class="login-card">
            <div class="card-header">
                <div class="organization-branding">
                    <img src="{{ asset('app/img/mdf1.png') }}" alt="MDF" class="organization-logo">
                    <h3 class="organization-name">MALAWI DEFENCE FORCE</h3>
                    <p class="system-name">{{ config('app.name', 'Laravel') }}</p>
                </div>
                <h4 class="login-title">Confirm Password</h4>
            </div>

            <div class="card-body">
                <div class="security-message">
                    <i class="fas fa-shield-check"></i>
                    <p>Please confirm your password before continuing.</p>
                </div>

                <form method="POST" action="{{ route('password.confirm') }}" class="login-form">
                    @csrf

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-container">
                            <i class="fas fa-lock input-icon"></i>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Enter your password">
                        </div>
                        @error('password')
                            <div class="error-message">
                                <i class="fas fa-exclamation-triangle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-action">
                        <button type="submit" class="btn btn-primary btn-login">
                            <i class="fas fa-check-circle btn-icon"></i>
                            Confirm Password
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-center mt-3">
                            <a class="forgot-password" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>

            <div class="card-footer">
                <p class="security-notice">
                    <i class="fas fa-shield-alt"></i>
                    Security Verification Required
                </p>
            </div>
        </div>
    </div>
@endsection
