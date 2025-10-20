@extends('layouts.app')

@section('page-title', 'Trashed Posts')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Trashed Posts</h2>
                        <p class="text-muted mb-0">Manage deleted posts - restore or permanently delete</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('posts') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Message -->
        @if (session('status'))
            <div class="row mb-4">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Stats Card -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-warning">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="card-title text-warning mb-2">
                                    <i class="fas fa-exclamation-triangle me-2"></i>Trashed Posts
                                </h5>
                                <p class="card-text mb-0">
                                    Posts in trash can be restored or permanently deleted.
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="h3 text-warning mb-0">{{ $posts->count() }}</div>
                                <small class="text-muted">Posts in Trash</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trashed Posts Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Trashed Posts ({{ $posts->count() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($posts->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Deleted Date</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr class="align-middle">
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}"
                                                            class="rounded-circle me-3" width="50" height="50"
                                                            style="object-fit: cover; opacity: 0.7;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h6 class="mb-1 text-muted">{{ Str::limit($post->title, 60) }}</h6>
                                                        <small class="text-muted">Created:
                                                            {{ $post->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary">{{ $post->category }}</span>
                                                </td>
                                                <td>
                                                    <small class="text-muted">
                                                        <i class="fas fa-clock me-1"></i>
                                                        {{ $post->deleted_at->format('M j, Y g:i A') }}
                                                    </small>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('posts.restore', $post->id) }}"
                                                            class="btn btn-success btn-sm" title="Restore Post"
                                                            onclick="return confirm('Are you sure you want to restore this post?')">
                                                            <i class="fas fa-recycle me-1"></i>Restore
                                                        </a>
                                                        <a href="{{ route('posts.delete', $post->id) }}"
                                                            class="btn btn-danger btn-sm" title="Permanently Delete"
                                                            onclick="return confirm('Are you sure you want to PERMANENTLY delete this post? This action cannot be undone!')">
                                                            <i class="fas fa-trash me-1"></i>Delete
                                                        </a>
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
                                    <i class="fas fa-trash-alt fa-4x text-muted"></i>
                                </div>
                                <h4 class="text-muted">No Trashed Posts</h4>
                                <p class="text-muted mb-4">There are no posts in the trash bin.</p>
                                <a href="{{ route('posts') }}" class="btn btn-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to All Posts
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Warning Section -->
        @if ($posts->count() > 0)
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card border-danger">
                        <div class="card-header bg-danger text-white">
                            <h6 class="card-title mb-0">
                                <i class="fas fa-exclamation-circle me-2"></i>Important Notice
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-recycle text-success me-3 mt-1"></i>
                                        <div>
                                            <h6 class="mb-1">Restore Posts</h6>
                                            <p class="text-muted mb-0 small">Restored posts will return to your active posts
                                                list with all content intact.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-trash text-danger me-3 mt-1"></i>
                                        <div>
                                            <h6 class="mb-1">Permanent Deletion</h6>
                                            <p class="text-muted mb-0 small">Deleted posts are permanently removed from the
                                                system and cannot be recovered.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <style>
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .card-header {
            border-bottom: 1px solid #e9ecef;
        }

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

        .btn-group .btn {
            border-radius: 0.375rem;
            margin-right: 0.5rem;
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

        .text-muted {
            opacity: 0.8;
        }

        .alert {
            border: none;
            border-radius: 0.5rem;
        }
    </style>

    <script>
        // Auto-dismiss alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
@endsection
