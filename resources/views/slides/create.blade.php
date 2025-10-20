@extends('layouts.app')

@section('page-title', 'Create New Slide')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Create New Slide</h2>
                                <p class="text-muted mb-0">Add a new slide to the homepage carousel</p>
                            </div>
                            <div>
                                <a href="{{ route('slides.index') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Slides
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Slide Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Slide Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Title Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="title" class="form-label fw-semibold">Slide Title <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" value="{{ old('title') }}"
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
                                                rows="3" placeholder="Enter slide description" required>{{ old('description') }}</textarea>
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
                                                id="button_text" name="button_text" value="{{ old('button_text') }}"
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
                                                name="link_url" value="{{ old('link_url') }}"
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

                                    <!-- Image Upload Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="image" class="form-label fw-semibold">Slide Image <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                id="image" name="image" accept="image/*" required>
                                            <div class="form-text">Recommended size: 1920x800px. Supported formats: JPG,
                                                PNG, WebP. Max size: 2MB</div>
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Image Preview -->
                                    <div class="row mb-4" id="image-preview-container" style="display: none;">
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold">Image Preview</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="border rounded p-3 bg-light">
                                                <img id="image-preview" src="#" alt="Image preview"
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
                                                    <i class="fas fa-save me-2"></i>Create Slide
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset
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

                <!-- Quick Tips -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-info">
                            <div class="card-header bg-info text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-lightbulb me-2"></i>Slide Creation Tips
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-image text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">High-Quality Images</h6>
                                                <p class="text-muted mb-0 small">Use high-resolution images for better
                                                    visual appeal</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-text-height text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Concise Content</h6>
                                                <p class="text-muted mb-0 small">Keep titles and descriptions brief and
                                                    impactful</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-mouse-pointer text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Clear Call-to-Action</h6>
                                                <p class="text-muted mb-0 small">Use descriptive button text to guide users
                                                </p>
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

        #image-preview-container {
            transition: all 0.3s ease;
        }

        #image-preview {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
