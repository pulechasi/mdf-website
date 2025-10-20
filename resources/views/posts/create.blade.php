@extends('layouts.app')

@section('page-title', 'Create New Post')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h4 mb-1">Create New Post</h2>
                                <p class="text-muted mb-0">Add a new post to the system</p>
                            </div>
                            <div>
                                <a href="{{ route('posts') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Posts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Post Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Post Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Title Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="title" class="form-label fw-semibold">Post Title <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" value="{{ old('title') }}"
                                                placeholder="Enter post title" required>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Content Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="summernote" class="form-label fw-semibold">Content <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="content" id="summernote" class="form-control @error('content') is-invalid @enderror" rows="8"
                                                placeholder="Enter post content">{{ old('content') }}</textarea>
                                            @error('content')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Category Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="category" class="form-label fw-semibold">Category <span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="category" id="category"
                                                class="form-select @error('category') is-invalid @enderror" required
                                                onchange="categoryType()">
                                                <option value="">Select a category</option>
                                                <option value="News" {{ old('category') == 'News' ? 'selected' : '' }}>
                                                    News</option>
                                                <option value="Events" {{ old('category') == 'Events' ? 'selected' : '' }}>
                                                    Events</option>
                                                <option value="Press release"
                                                    {{ old('category') == 'Press release' ? 'selected' : '' }}>Press release
                                                </option>
                                            </select>
                                            @error('category')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Image Upload Field -->
                                    <div class="row mb-4">
                                        <div class="col-md-3">
                                            <label for="image" class="form-label fw-semibold">Featured Image</label>
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

                                    <!-- Event Date Field (Conditional) -->
                                    <div class="row mb-4" id="toshow" style="display: none;">
                                        <div class="col-md-3">
                                            <label for="event_date" class="form-label fw-semibold">Event Date</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="date"
                                                class="form-control @error('event_date') is-invalid @enderror"
                                                id="event_date" name="event_date" value="{{ old('event_date') }}">
                                            @error('event_date')
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
                                                    <i class="fas fa-save me-2"></i>Save Post
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary">
                                                    <i class="fas fa-undo me-2"></i>Reset
                                                </button>
                                                <a href="{{ route('posts') }}" class="btn btn-outline-danger">
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
                                    <i class="fas fa-lightbulb me-2"></i>Quick Tips
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-heading text-primary me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Clear Titles</h6>
                                                <p class="text-muted mb-0 small">Use descriptive and concise titles</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-image text-success me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Quality Images</h6>
                                                <p class="text-muted mb-0 small">Use high-quality, relevant images</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-start">
                                            <i class="fas fa-calendar text-warning me-3 mt-1"></i>
                                            <div>
                                                <h6 class="mb-1">Event Dates</h6>
                                                <p class="text-muted mb-0 small">Set dates only for event posts</p>
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
            // Initialize category type on page load
            categoryType();

            // Set minimum date for event date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('event_date').min = today;
        });

        function categoryType() {
            var category = document.getElementById("category").value;
            var toshow = document.getElementById("toshow");

            if (category === 'Events') {
                toshow.style.display = 'flex';
            } else {
                toshow.style.display = 'none';
                // Clear event date when hiding
                document.getElementById('event_date').value = '';
            }
        }
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
    </style>
@endsection
