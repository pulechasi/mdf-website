@extends('layouts.app')

@section('page-title', 'Add New User')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Add New User</h2>
                                <p class="text-muted mb-0">Create a new system user account</p>
                            </div>
                            <div>
                                <a href="{{ route('users') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Users
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create User Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">User Account Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('users.store') }}" method="post">
                                    @csrf

                                    <!-- Username Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label fw-semibold">Username <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}"
                                                placeholder="Enter username" required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="email" class="form-label fw-semibold">Email Address <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}"
                                                placeholder="Enter email address" required>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Password Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="password" class="form-label fw-semibold">Password <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                name="password" placeholder="Enter password" required>
                                            <div class="form-text">Password must be at least 8 characters long</div>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Confirm Password Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="password_confirmation" class="form-label fw-semibold">Confirm
                                                Password <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                name="password_confirmation" placeholder="Confirm password" required>
                                        </div>
                                    </div>

                                    <!-- Role Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="role" class="form-label fw-semibold">User Role</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="role"
                                                    id="role" value="1" {{ old('role') ? 'checked' : '' }}>
                                                <label class="form-check-label fw-semibold" for="role">
                                                    Grant Administrator Privileges
                                                </label>
                                            </div>
                                            <div class="form-text">
                                                Administrators have full system access and can manage all content and users.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form Actions -->
                                    <div class="row mt-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex gap-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save me-2"></i>Create User
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset
                                                </button>
                                                <a href="{{ route('users') }}" class="btn btn-outline-danger">
                                                    <i class="fas fa-times me-2"></i>Cancel
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Tips -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-lightbulb me-2"></i>User Creation Guidelines
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-user text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Unique Username</h6>
                                                <p class="text-muted mb-0 small">Choose a unique and identifiable username
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-envelope text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Valid Email</h6>
                                                <p class="text-muted mb-0 small">Use a valid and accessible email address
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-shield-alt text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Secure Password</h6>
                                                <p class="text-muted mb-0 small">Create a strong, secure password</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security Notice -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-warning">
                            <div class="card-header bg-warning text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-exclamation-triangle me-2"></i>Security Notice
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-user-shield text-danger me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Admin Privileges</h6>
                                                <p class="text-muted mb-0 small">Only grant administrator access to trusted
                                                    personnel who require full system control.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-key text-info me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Password Security</h6>
                                                <p class="text-muted mb-0 small">Users will be required to reset their
                                                    password on first login for security.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .card-header {
            border-bottom: 1px solid #e9ecef;
            padding: 1rem 1.25rem;
        }

        .form-label {
            margin-bottom: 0.5rem;
        }

        .btn {
            border-radius: 0.375rem;
        }

        .invalid-feedback {
            display: block;
        }

        .form-text {
            font-size: 0.875rem;
            color: #6c757d;
            margin-top: 0.25rem;
        }

        .form-check-input:checked {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .form-check-label {
            font-weight: 500;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password strength indicator (optional enhancement)
            const passwordInput = document.getElementById('password');
            const passwordFeedback = document.createElement('div');
            passwordFeedback.className = 'form-text';
            passwordInput.parentNode.appendChild(passwordFeedback);

            passwordInput.addEventListener('input', function() {
                const password = this.value;
                if (password.length === 0) {
                    passwordFeedback.textContent = '';
                } else if (password.length < 8) {
                    passwordFeedback.textContent = 'Password too short (minimum 8 characters)';
                    passwordFeedback.className = 'form-text text-danger';
                } else {
                    passwordFeedback.textContent = 'Password meets minimum requirements';
                    passwordFeedback.className = 'form-text text-success';
                }
            });
        });
    </script>
@endsection
