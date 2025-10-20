@extends('layouts.app')

@section('page-title', 'Create New Operation')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Create New Operation</h2>
                                <p class="text-muted mb-0">Add a new military operation to the system</p>
                            </div>
                            <div>
                                <a href="{{ route('operations') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Operations
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Operation Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Operation Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('operations.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Operation Name Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label fw-semibold">Operation Name <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}"
                                                placeholder="Enter operation name" required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Description Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="summernote" class="form-label fw-semibold">Description <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror"
                                                rows="8" placeholder="Enter operation description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Operation Type Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="operation_type" class="form-label fw-semibold">Operation Type <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="operation_type" id="operation_type"
                                                class="form-select @error('operation_type') is-invalid @enderror" required>
                                                <option value="">Select operation type</option>
                                                <option value="Internal"
                                                    {{ old('operation_type') == 'Internal' ? 'selected' : '' }}>Internal
                                                </option>
                                                <option value="External"
                                                    {{ old('operation_type') == 'External' ? 'selected' : '' }}>External
                                                </option>
                                            </select>
                                            @error('operation_type')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Image Upload Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="image" class="form-label fw-semibold">Operation Image</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                id="image" name="image" accept="image/*">
                                            <div class="form-text">Recommended size: 800x400px. Supported formats: JPG, PNG,
                                                GIF</div>
                                            @error('image')
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
                                                    <i class="fas fa-save me-2"></i>Save Operation
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset
                                                </button>
                                                <a href="{{ route('operations') }}" class="btn btn-outline-danger">
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
                                    <i class="fas fa-lightbulb me-2"></i>Operation Guidelines
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-tag text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Clear Naming</h6>
                                                <p class="text-muted mb-0 small">Use descriptive and concise operation names
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-info-circle text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Detailed Description</h6>
                                                <p class="text-muted mb-0 small">Provide comprehensive operation details</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-shield-alt text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Proper Classification</h6>
                                                <p class="text-muted mb-0 small">Correctly classify operation type</p>
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
            // Summernote initialization for description
            $('#summernote').summernote({
                placeholder: 'Enter operation description...',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection
