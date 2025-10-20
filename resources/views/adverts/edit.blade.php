@extends('layouts.app')

@section('page-title', 'Edit Advert')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Edit Advert</h2>
                                <p class="text-muted mb-0">Update advertisement information</p>
                            </div>
                            <div>
                                <a href="{{ route('adverts') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Adverts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Advert Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Edit Advert Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('adverts.update', $advert->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- Current File Preview -->
                                    @if ($advert->file)
                                        <div class="row mb-4">
                                            <div class="col-md-3">
                                                <label class="form-label fw-semibold">Current File</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="current-file-preview">
                                                    <div class="d-flex align-items-center p-3 border rounded bg-light">
                                                        <i class="fas fa-file-pdf text-danger me-3 fa-2x"></i>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">{{ basename($advert->file) }}</h6>
                                                            <small class="text-muted">Current attached file</small>
                                                        </div>
                                                        <a href="{{ asset($advert->file) }}" target="_blank"
                                                            class="btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-download me-1"></i>Download
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Title Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="title" class="form-label fw-semibold">Advert Title <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" value="{{ old('title', $advert->title) }}"
                                                placeholder="Enter advert title" required>
                                            @error('title')
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
                                                rows="8" placeholder="Enter advert description...">{{ old('description', $advert->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Due Date Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="due_date" class="form-label fw-semibold">Due Date <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="date"
                                                class="form-control @error('due_date') is-invalid @enderror" id="due_date"
                                                name="due_date" value="{{ old('due_date', $advert->due_date) }}"
                                                min="{{ date('Y-m-d') }}">
                                            <div class="form-text">Select the deadline or expiration date for this advert
                                            </div>
                                            @error('due_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Advert Type Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="advert_type" class="form-label fw-semibold">Advert Type <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="advert_type" id="advert_type"
                                                class="form-select @error('advert_type') is-invalid @enderror" required>
                                                <option value="">Select advert type</option>
                                                <option value="vacancy"
                                                    {{ old('advert_type', $advert->advert_type) == 'vacancy' ? 'selected' : '' }}>
                                                    Vacancies</option>
                                                <option value="tender"
                                                    {{ old('advert_type', $advert->advert_type) == 'tender' ? 'selected' : '' }}>
                                                    Tenders</option>
                                            </select>
                                            @error('advert_type')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- File Upload Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="file" class="form-label fw-semibold">Update File</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control @error('file') is-invalid @enderror"
                                                id="file" name="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                                            <div class="form-text">
                                                Leave empty to keep current file. Supported formats: PDF, DOC, DOCX, JPG,
                                                PNG. Maximum file size: 10MB
                                            </div>
                                            @error('file')
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
                                                    <i class="fas fa-save me-2"></i>Update Advert
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset Changes
                                                </button>
                                                <a href="{{ route('adverts') }}" class="btn btn-outline-danger">
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

                <!-- Advert Information -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-info-circle me-2"></i>Advert Details
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
                                                    {{ $advert->created_at->format('M j, Y g:i A') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar-check text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Last Updated</h6>
                                                <p class="text-muted mb-0 small">
                                                    {{ $advert->updated_at->format('M j, Y g:i A') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-eye text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Status</h6>
                                                <span class="badge bg-success">Published</span>
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
                                            <i class="fas fa-calendar-day text-danger me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Due Date Updates</h6>
                                                <p class="text-muted mb-0 small">Ensure due dates remain valid and
                                                    realistic.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-file-alt text-info me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">File Management</h6>
                                                <p class="text-muted mb-0 small">Uploading a new file will replace the
                                                    current one.</p>
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

        .current-file-preview .border {
            border: 1px solid #dee2e6 !important;
            border-radius: 0.375rem;
        }

        .badge {
            font-size: 0.75rem;
            font-weight: 500;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Summernote initialization for description
            $('#summernote').summernote({
                placeholder: 'Enter advert description...',
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

            // Set min date for due date to today
            const dueDateInput = document.getElementById('due_date');
            if (dueDateInput) {
                dueDateInput.min = new Date().toISOString().split('T')[0];
            }

            // File type validation
            const fileInput = document.getElementById('file');
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const validTypes = ['application/pdf', 'application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                            'image/jpeg', 'image/jpg', 'image/png'
                        ];
                        const maxSize = 10 * 1024 * 1024; // 10MB

                        if (!validTypes.includes(file.type)) {
                            alert('Please select a valid file type (PDF, DOC, DOCX, JPG, PNG).');
                            this.value = '';
                            return;
                        }

                        if (file.size > maxSize) {
                            alert('File size must be less than 10MB.');
                            this.value = '';
                            return;
                        }
                    }
                });
            }
        });
    </script>
@endsection
