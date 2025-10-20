@extends('layouts.app')

@section('page-title', 'Slides Management')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Slides Management</h2>
                        <p class="text-muted mb-0">Manage homepage slides and their content</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('slides.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Create New Slide
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="row mb-4">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Slides Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Homepage Slides ({{ $slides->count() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($slides->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">Slide</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Link Details</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slides as $slide)
                                            <tr>
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('storage/slider_image/' . $slide->image) }}"
                                                            alt="{{ $slide->title }}" class="rounded me-3" width="80"
                                                            height="60" style="object-fit: cover;">
                                                        <div>
                                                            <small class="text-muted">Created:
                                                                {{ $slide->created_at->format('M j, Y') }}</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1">{{ $slide->title }}</h6>
                                                </td>
                                                <td>
                                                    <p class="text-muted mb-0 small">
                                                        {{ Str::limit($slide->description, 50) }}</p>
                                                </td>
                                                <td>
                                                    @if ($slide->link_url)
                                                        <div class="d-flex flex-column">
                                                            <span
                                                                class="badge bg-info mb-1">{{ $slide->button_text ?: 'Link' }}</span>
                                                            <small
                                                                class="text-muted">{{ Str::limit($slide->link_url, 30) }}</small>
                                                        </div>
                                                    @else
                                                        <span class="badge bg-secondary">No Link</span>
                                                    @endif
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('slides.edit', $slide) }}"
                                                            class="btn btn-outline-primary btn-sm" title="Edit Slide">
                                                            <i class="fas fa-edit me-1"></i>Edit
                                                        </a>
                                                        <form action="{{ route('slides.destroy', $slide) }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                                title="Delete Slide"
                                                                onclick="return confirm('Are you sure you want to delete this slide? This action cannot be undone!')">
                                                                <i class="fas fa-trash me-1"></i>Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-images fa-3x text-muted"></i>
                                </div>
                                <h5 class="text-muted">No slides found</h5>
                                <p class="text-muted mb-4">Get started by creating slides for your homepage.</p>
                                <a href="{{ route('slides.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Create First Slide
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">{{ $slides->count() }}</h4>
                                <small>Total Slides</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-images fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">{{ $slides->where('link_url', '!=', null)->count() }}</h4>
                                <small>With Links</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-link fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">{{ $slides->where('button_text', '!=', null)->count() }}</h4>
                                <small>With Button Text</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-mouse-pointer fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">{{ $slides->count() }}</h4>
                                <small>Active</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-eye fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Management Notice -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-info">
                    <div class="card-header bg-info text-white">
                        <h6 class="card-title mb-0">
                            <i class="fas fa-info-circle me-2"></i>Slides Management
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-edit text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Slide Editing</h6>
                                        <p class="text-muted mb-0 small">Edit slide content, images, and links to keep your
                                            homepage updated.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-trash text-danger me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Slide Deletion</h6>
                                        <p class="text-muted mb-0 small">Deleted slides are permanently removed from the
                                            system.</p>
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
        .table th {
            border-top: none;
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table td {
            vertical-align: middle;
        }

        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .card-header {
            border-bottom: 1px solid #e9ecef;
        }

        .btn-group .btn {
            border-radius: 0.375rem;
            margin-right: 0.25rem;
        }

        .btn-group .btn:last-child {
            margin-right: 0;
        }

        .badge {
            font-size: 0.75rem;
            font-weight: 500;
        }

        .table-responsive {
            border-radius: 0.375rem;
        }
    </style>
@endsection
