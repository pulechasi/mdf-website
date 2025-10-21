@extends('layouts.app')

@section('page-title', 'Add Command Personnel')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Add Command Personnel</h2>
                                <p class="text-muted mb-0">Add new personnel to the military command structure</p>
                            </div>
                            <div>
                                <a href="{{ route('commands') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Command
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Command Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Command Personnel Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('command.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Rank Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="rank" class="form-label fw-semibold">Military Rank <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="rank" id="rank"
                                                class="form-select @error('rank') is-invalid @enderror" required>
                                                <option value="">Select military rank</option>
                                                <option value="Chief Of Defence Force"
                                                    {{ old('rank') == 'Chief Of Defence Force' ? 'selected' : '' }}>Chief
                                                    Of Defence Forces</option>
                                                <option value="Deputy Chief of Defence Force"
                                                    {{ old('rank') == 'Deputy Chief of Defence Force' ? 'selected' : '' }}>
                                                    Deputy
                                                    Chief of Defence Force</option>
                                                <option value="Commander"
                                                    {{ old('rank') == 'Commander' ? 'selected' : '' }}>Commander</option>
                                                <option value="Deputy Commander"
                                                    {{ old('rank') == 'Deputy Commander' ? 'selected' : '' }}>Deputy
                                                    Commander</option>
                                                <option value="Chief of staff"
                                                    {{ old('rank') == 'Chief of staff' ? 'selected' : '' }}>Chief of Staff
                                                </option>
                                                <option value="Deputy Chief of staff"
                                                    {{ old('rank') == 'Deputy Chief of staff' ? 'selected' : '' }}>Deputy
                                                    Chief of Staff</option>
                                                <option value="Sergeant major"
                                                    {{ old('rank') == 'Sergeant major' ? 'selected' : '' }}>Sergeant Major
                                                </option>
                                            </select>
                                            @error('rank')
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
                                                id="name" name="name" value="{{ old('name') }}"
                                                placeholder="Enter full name" required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Biography Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="summernote" class="form-label fw-semibold">Biography <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror"
                                                rows="8" placeholder="Enter personnel biography">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Picture Upload Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="picture" class="form-label fw-semibold">Official Picture</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file"
                                                class="form-control @error('picture') is-invalid @enderror" id="picture"
                                                name="picture" accept="image/*">
                                            <div class="form-text">Recommended size: 400x500px (portrait). Supported
                                                formats: JPG, PNG</div>
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
                                                    <i class="fas fa-save me-2"></i>Save Personnel
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset
                                                </button>
                                                <a href="{{ route('commands') }}" class="btn btn-outline-danger">
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
                                    <i class="fas fa-lightbulb me-2"></i>Command Guidelines
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-ranking-star text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Proper Ranking</h6>
                                                <p class="text-muted mb-0 small">Select the correct military rank and
                                                    hierarchy</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-id-card text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Complete Biography</h6>
                                                <p class="text-muted mb-0 small">Provide detailed professional background
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-camera text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Official Photos</h6>
                                                <p class="text-muted mb-0 small">Use professional portrait photographs</p>
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
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Summernote initialization for biography
            $('#summernote').summernote({
                placeholder: 'Enter personnel biography...',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection
