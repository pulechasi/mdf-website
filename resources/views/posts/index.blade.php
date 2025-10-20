@extends('layouts.app')

@section('page-title', 'Posts Management')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Posts Management</h2>
                        <p class="text-muted mb-0">Manage and organize your posts efficiently</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add New Post
                        </a>
                        @if (Auth::user()->role)
                            <a href="{{ route('posts.trashed') }}" class="btn btn-warning">
                                <i class="fas fa-trash-restore me-2"></i>Trashed Posts
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts') }}" method="GET" class="row g-3 align-items-end">
                            <div class="col-md-8">
                                <label for="search" class="form-label">Search Posts</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="term"
                                        placeholder="Search by title, category..." id="term"
                                        value="{{ request('term') }}">
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    @if (request('term'))
                                        <a href="{{ route('posts') }}" class="btn btn-outline-secondary">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <a href="{{ route('posts.create') }}" class="btn btn-success">
                                        <i class="fas fa-plus-circle me-2"></i>Create New
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Posts Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">All Posts ({{ $posts->total() }})</h5>
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
                                            <th>Status</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}"
                                                            class="rounded-circle me-3" width="50" height="50"
                                                            style="object-fit: cover;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h6 class="mb-1">{{ Str::limit($post->title, 50) }}</h6>
                                                        <small class="text-muted">Created:
                                                            {{ $post->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $post->category }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success">Published</span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('posts.edit', $post->id) }}"
                                                            class="btn btn-outline-primary btn-sm" title="Edit Post">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        @if (Auth::user()->role)
                                                            <a href="{{ route('posts.destroy', $post->id) }}"
                                                                class="btn btn-outline-warning btn-sm" title="Move to Trash"
                                                                onclick="return confirm('Are you sure you want to move this post to trash?')">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        @endif
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
                                    <i class="fas fa-file-alt fa-3x text-muted"></i>
                                </div>
                                <h5 class="text-muted">No posts found</h5>
                                <p class="text-muted mb-4">Get started by creating your first post.</p>
                                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Create First Post
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Pagination -->
                    @if ($posts->hasPages())
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-muted">
                                    Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of
                                    {{ $posts->total() }} entries
                                </div>
                                <div>
                                    {!! $posts->links() !!}
                                </div>
                            </div>
                        </div>
                    @endif
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
                                <h4 class="mb-0">{{ $posts->total() }}</h4>
                                <small>Total Posts</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-file-alt fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">{{ $posts->total() }}</h4>
                                <small>Published</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-check-circle fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">0</h4>
                                <small>Drafts</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-edit fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">0</h4>
                                <small>This Month</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-calendar fa-2x opacity-50"></i>
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
