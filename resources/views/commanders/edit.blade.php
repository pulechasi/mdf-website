@extends('layouts.app')

@section('page-title', 'Edit Commander')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Edit Commander</h2>
                                <p class="text-muted mb-0">Update commander information</p>
                            </div>
                            <div>
                                <a href="{{ route('commanders') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Commanders
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Commander Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Edit Commander Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('commanders.update', $commander->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- Current Picture Preview -->
                                    @if ($commander->picture)
                                        <div class="row mb-4">
                                            <div class="col-md-3">
                                                <label class="form-label fw-semibold">Current Picture</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="current-image-preview">
                                                    <img src="{{ asset($commander->picture) }}"
                                                        alt="Current commander picture" class="img-thumbnail"
                                                        style="max-height: 200px;">
                                                    <div class="mt-2">
                                                        <small class="text-muted">Current commander picture</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Rank Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="title" class="form-label fw-semibold">Military Rank <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" value="{{ old('title', $commander->title) }}"
                                                placeholder="Enter military rank" required>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Name Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label fw-semibold">Full Name <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name', $commander->name) }}"
                                                placeholder="Enter commander's full name" required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Commander Roles Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="summernote" class="form-label fw-semibold">Commander Roles <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="commander_roles" id="summernote" class="form-control @error('commander_roles') is-invalid @enderror"
                                                rows="6" placeholder="Describe the commander's roles and responsibilities...">{{ old('commander_roles', $commander->commander_roles) }}</textarea>
                                            @error('commander_roles')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Appointed Date Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="appointed_date" class="form-label fw-semibold">Appointed Date <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            @php
                                                $currentTerm = $commander->terms()->where('status', true)->first();
                                                $appointedDate = old(
                                                    'appointed_date',
                                                    $currentTerm->appointed_date ?? '',
                                                );
                                            @endphp
                                            <input type="date"
                                                class="form-control @error('appointed_date') is-invalid @enderror"
                                                id="appointed_date" name="appointed_date" value="{{ $appointedDate }}"
                                                max="{{ date('Y-m-d') }}" required>
                                            @error('appointed_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Commander Type Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="commander_type" class="form-label fw-semibold">Commander Type <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="commander_type" id="commander_type"
                                                class="form-select @error('commander_type') is-invalid @enderror" required>
                                                <option value="">Select commander type</option>
                                                <option value="Chief Of Defence Forces"
                                                    {{ old('commander_type', $commander->commander_type) == 'Chief Of Defence Forces' ? 'selected' : '' }}>
                                                    Chief Of Defence Forces</option>
                                                <option value="MDF Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'MDF Commander' ? 'selected' : '' }}>
                                                    MDF Commander</option>
                                                <option value="Army Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Army Commander' ? 'selected' : '' }}>
                                                    Army Commander</option>
                                                <option value="Commander In Chief"
                                                    {{ old('commander_type', $commander->commander_type) == 'Commander In Chief' ? 'selected' : '' }}>
                                                    Commander In Chief</option>
                                                <option value="Air Force Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Air Force Commander' ? 'selected' : '' }}>
                                                    Air Force Commander</option>
                                                <option value="Navy Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Navy Commander' ? 'selected' : '' }}>
                                                    Navy Commander</option>
                                                <option value="Malawi National Service Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Malawi National Service Commander' ? 'selected' : '' }}>
                                                    Malawi National Service Commander</option>
                                                <option value="Acting Land Forces Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Acting Land Forces Commander' ? 'selected' : '' }}>
                                                    Acting Land Forces Commander</option>
                                                <option value="Acting Air Force Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Acting Air Force Commander' ? 'selected' : '' }}>
                                                    Acting Air Force Commander</option>
                                                <option value="Acting Navy Force Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Acting Navy Force Commander' ? 'selected' : '' }}>
                                                    Acting Navy Force Commander</option>
                                                <option value="Acting Malawi National Service Commander"
                                                    {{ old('commander_type', $commander->commander_type) == 'Acting Malawi National Service Commander' ? 'selected' : '' }}>
                                                    Acting Malawi National Service Commander</option>
                                            </select>
                                            @error('commander_type')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Picture Upload Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="picture" class="form-label fw-semibold">Update Picture</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file"
                                                class="form-control @error('picture') is-invalid @enderror" id="picture"
                                                name="picture" accept="image/*">
                                            <div class="form-text">
                                                Leave empty to keep current picture. Recommended: Professional portrait, max
                                                2MB. Supported formats: JPG, PNG
                                            </div>
                                            @error('picture')
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
                                                    <i class="fas fa-save me-2"></i>Update Commander
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset Changes
                                                </button>
                                                <a href="{{ route('commanders') }}" class="btn btn-outline-danger">
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

                <!-- Commander Information -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-info-circle me-2"></i>Commander Details
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar-plus text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Created</h6>
                                                <p class="text-muted mb-0 small">
                                                    {{ $commander->created_at->format('M j, Y g:i A') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar-check text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Last Updated</h6>
                                                <p class="text-muted mb-0 small">
                                                    {{ $commander->updated_at->format('M j, Y g:i A') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-user-shield text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Status</h6>
                                                <span class="badge bg-success">Active</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Notice -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-warning">
                            <div class="card-header bg-warning text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-exclamation-circle me-2"></i>Important Notice
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-user-clock text-danger me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Retirement Eligibility</h6>
                                                <p class="text-muted mb-0 small">Only "MDF Commander" type can be retired
                                                    through the system.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-history text-info me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Term History</h6>
                                                <p class="text-muted mb-0 small">Appointed date reflects the current active
                                                    term.</p>
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
            border-radius: 0.375rem;
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
            // Summernote initialization for commander roles
            $('#summernote').summernote({
                placeholder: 'Describe the commander\'s roles and responsibilities...',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // Set max date for appointed date to today
            const appointedDateInput = document.getElementById('appointed_date');
            if (appointedDateInput) {
                appointedDateInput.max = new Date().toISOString().split('T')[0];
            }
        });
    </script>
@endsection
