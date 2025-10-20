@extends('layouts.app')

@section('page-title', 'Edit Profile')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Edit Your Profile</h2>
                                <p class="text-muted mb-0">Update your personal information and preferences</p>
                            </div>
                            <div>
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Edit Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('profiles.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Current Profile Picture -->
                                    @if ($user->profile && $user->profile->picture)
                                        <div class="row mb-4">
                                            <div class="col-md-3">
                                                <label class="form-label fw-semibold">Current Picture</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="current-image-preview">
                                                    <img src="{{ asset($user->profile->picture) }}"
                                                        alt="Current profile picture" class="img-thumbnail rounded-circle"
                                                        style="max-height: 150px; width: 150px; object-fit: cover;">
                                                    <div class="mt-2">
                                                        <small class="text-muted">Your current profile picture</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Username Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label fw-semibold">Username <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name', $user->name) }}"
                                                placeholder="Enter your username" required>
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
                                                id="email" name="email" value="{{ old('email', $user->email) }}"
                                                placeholder="Enter your email address" required>
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
                                            <label for="password" class="form-label fw-semibold">New Password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                name="password"
                                                placeholder="Enter new password (leave blank to keep current)">
                                            <div class="form-text">Minimum 8 characters. Leave empty if you don't want to
                                                change your password.</div>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Profile Picture Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="picture" class="form-label fw-semibold">Profile Picture</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file"
                                                class="form-control @error('picture') is-invalid @enderror" id="picture"
                                                name="picture" accept="image/*">
                                            <div class="form-text">Recommended: Square image, max 2MB. Supported formats:
                                                JPG, PNG, GIF</div>
                                            @error('picture')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- About Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="summernote" class="form-label fw-semibold">About Yourself</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="about" id="summernote" class="form-control @error('about') is-invalid @enderror" rows="6"
                                                placeholder="Tell us about yourself...">{{ old('about', $user->profile->about ?? '') }}</textarea>
                                            @error('about')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Form Actions -->
                                    <div class="row mt-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex gap-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save me-2"></i>Update Profile
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset Changes
                                                </button>
                                                <a href="{{ url()->previous() }}" class="btn btn-outline-danger">
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

                <!-- Account Information -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-info-circle me-2"></i>Account Information
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar-plus text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Member Since</h6>
                                                <p class="text-muted mb-0 small">{{ $user->created_at->format('M j, Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar-check text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Last Updated</h6>
                                                <p class="text-muted mb-0 small">
                                                    {{ $user->updated_at->format('M j, Y g:i A') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-user-shield text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Account Role</h6>
                                                <span class="badge {{ $user->role ? 'bg-danger' : 'bg-primary' }}">
                                                    {{ $user->role ? 'Administrator' : 'Author' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security Tips -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-warning">
                            <div class="card-header bg-warning text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-shield-alt me-2"></i>Security Tips
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-key text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Strong Passwords</h6>
                                                <p class="text-muted mb-0 small">Use a unique password with letters,
                                                    numbers, and symbols.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-envelope text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Secure Email</h6>
                                                <p class="text-muted mb-0 small">Keep your email account secure as it's
                                                    used for account recovery.</p>
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

        .current-image-preview img {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 50%;
            max-width: 100%;
            height: auto;
        }

        .badge {
            font-size: 0.75rem;
            font-weight: 500;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Summernote initialization for about section
            $('#summernote').summernote({
                placeholder: 'Tell us about yourself...',
                tabsize: 2,
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // Password strength indicator
            const passwordInput = document.getElementById('password');
            if (passwordInput) {
                const passwordFeedback = document.createElement('div');
                passwordFeedback.className = 'form-text';
                passwordInput.parentNode.appendChild(passwordFeedback);

                passwordInput.addEventListener('input', function() {
                    const password = this.value;
                    if (password.length === 0) {
                        passwordFeedback.textContent = 'Leave empty to keep current password';
                        passwordFeedback.className = 'form-text text-muted';
                    } else if (password.length < 8) {
                        passwordFeedback.textContent = 'Password too short (minimum 8 characters)';
                        passwordFeedback.className = 'form-text text-danger';
                    } else {
                        passwordFeedback.textContent = 'Password meets minimum requirements';
                        passwordFeedback.className = 'form-text text-success';
                    }
                });
            }
        });
    </script>
@endsection
