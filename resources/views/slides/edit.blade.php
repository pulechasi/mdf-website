@extends('layouts.app')

@section('page-title', 'Edit Slide')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Edit Slide</h2>
                                <p class="text-muted mb-0">Update slide information</p>
                            </div>
                            <div>
                                <a href="{{ route('slides.index') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Slides
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Slide Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Edit Slide Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('slides.update', $slide) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Title Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="title" class="form-label fw-semibold">Slide Title <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" value="{{ old('title', $slide->title) }}"
                                                placeholder="Enter slide title" required>
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
                                            <label for="description" class="form-label fw-semibold">Description <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                                rows="3" placeholder="Enter slide description" required>{{ old('description', $slide->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Button Text Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="button_text" class="form-label fw-semibold">Button Text <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text"
                                                class="form-control @error('button_text') is-invalid @enderror"
                                                id="button_text" name="button_text"
                                                value="{{ old('button_text', $slide->button_text) }}"
                                                placeholder="Enter button text (e.g., Learn More, Read More)" required>
                                            @error('button_text')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Link URL Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="link_url" class="form-label fw-semibold">Link URL</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text"
                                                class="form-control @error('link_url') is-invalid @enderror" id="link_url"
                                                name="link_url" value="{{ old('link_url', $slide->link_url) }}"
                                                placeholder="Enter destination URL (e.g., /about, https://example.com)">
                                            <div class="form-text">Leave empty if you don't want the slide to be clickable
                                            </div>
                                            @error('link_url')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Current Image Preview -->
                                    @if ($slide->image)
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <label class="form-label fw-semibold">Current Image</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="current-image-preview">
                                                    <img src="{{ asset('storage/slider_image/' . $slide->image) }}"
                                                        alt="Current slide image" class="img-thumbnail"
                                                        style="max-height: 200px;">
                                                    <div class="mt-2">
                                                        <small class="text-muted">Current slide image</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Image Upload Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="image" class="form-label fw-semibold">Update Image</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                id="image" name="image" accept="image/*">
                                            <div class="form-text">
                                                Leave empty to keep current image. Recommended size: 1920x800px. Supported
                                                formats: JPG, PNG, WebP. Max size: 2MB
                                            </div>
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- New Image Preview -->
                                    <div class="row mb-4" id="image-preview-container" style="display: none;">
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold">New Image Preview</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="border rounded p-3 bg-light">
                                                <img id="image-preview" src="#" alt="New image preview"
                                                    class="img-fluid rounded" style="max-height: 200px;">
                                                <div class="mt-2">
                                                    <small class="text-muted" id="image-dimensions"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form Actions -->
                                    <div class="row mt-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex gap-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save me-2"></i>Update Slide
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset Changes
                                                </button>
                                                <a href="{{ route('slides.index') }}" class="btn btn-outline-danger">
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

                <!-- Slide Information -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-info-circle me-2"></i>Slide Details
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar-plus text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Created</h6>
                                                <p class="text-muted mb-0 small">
                                                    {{ $slide->created_at->format('M j, Y g:i A') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar-check text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Last Updated</h6>
                                                <p class="text-muted mb-0 small">
                                                    {{ $slide->updated_at->format('M j, Y g:i A') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-sort-numeric-up text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Slide Order</h6>
                                                <p class="text-muted mb-0 small">Auto-generated</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-eye text-info me-3 mt-1"></i>
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
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Image preview functionality
            const imageInput = document.getElementById('image');
            const imagePreview = document.getElementById('image-preview');
            const imagePreviewContainer = document.getElementById('image-preview-container');
            const imageDimensions = document.getElementById('image-dimensions');

            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreviewContainer.style.display = 'flex';

                        // Get image dimensions
                        const img = new Image();
                        img.onload = function() {
                            imageDimensions.textContent =
                                `Dimensions: ${this.width} × ${this.height}px | Size: ${(file.size / 1024 / 1024).toFixed(2)}MB`;
                        };
                        img.src = e.target.result;
                    };

                    reader.readAsDataURL(file);
                } else {
                    imagePreviewContainer.style.display = 'none';
                }
            });

            // Validate image dimensions on form submit
            document.querySelector('form').addEventListener('submit', function(e) {
                const file = imageInput.files[0];
                if (file) {
                    // Check file size (2MB limit)
                    if (file.size > 2 * 1024 * 1024) {
                        e.preventDefault();
                        alert('Image size must be less than 2MB');
                        return false;
                    }
                }
            });
        });
    </script>

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

        #image-preview-container {
            transition: all 0.3s ease;
        }

        #image-preview {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
