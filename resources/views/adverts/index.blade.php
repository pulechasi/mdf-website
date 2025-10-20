@extends('layouts.app')

@section('page-title', 'Adverts Management')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Adverts Management</h2>
                        <p class="text-muted mb-0">Manage and publish advertisements and announcements</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('adverts.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add Advert
                        </a>
                        <a href="{{ route('adverts.unpublished') }}" class="btn btn-warning">
                            <i class="fas fa-eye-slash me-2"></i>Unpublished
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('adverts') }}" method="GET" class="row g-3 align-items-end">
                            <div class="col-md-8">
                                <label for="search" class="form-label">Search Adverts</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="term"
                                        placeholder="Search by title, type..." id="term" value="{{ request('term') }}">
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    @if (request('term'))
                                        <a href="{{ route('adverts') }}" class="btn btn-outline-secondary">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <a href="{{ route('adverts.create') }}" class="btn btn-success">
                                        <i class="fas fa-plus-circle me-2"></i>Create New
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Adverts Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Published Adverts ({{ $adverts->total() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($adverts->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">Title</th>
                                            <th>Type</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($adverts as $advert)
                                            <tr>
                                                <td class="ps-4">
                                                    <div>
                                                        <h6 class="mb-1">{{ Str::limit($advert->title, 60) }}</h6>
                                                        <small class="text-muted">Created:
                                                            {{ $advert->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $advert->advert_type }}</span>
                                                </td>
                                                <td>
                                                    @php
                                                        $dueDate = \Carbon\Carbon::parse($advert->due_date);
                                                        $isOverdue = $dueDate->isPast();
                                                    @endphp
                                                    <small class="{{ $isOverdue ? 'text-danger' : 'text-muted' }}">
                                                        <i class="fas fa-calendar-day me-1"></i>
                                                        {{ $dueDate->format('M j, Y') }}
                                                        @if ($isOverdue)
                                                            <span class="badge bg-danger ms-1">Expired</span>
                                                        @endif
                                                    </small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success">Published</span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('adverts.edit', $advert->id) }}"
                                                            class="btn btn-outline-primary btn-sm" title="Edit Advert">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('adverts.unpublish', $advert->id) }}"
                                                            class="btn btn-outline-warning btn-sm" title="Unpublish Advert"
                                                            onclick="return confirm('Are you sure you want to unpublish this advert?')">
                                                            <i class="fas fa-eye-slash"></i>
                                                        </a>
                                                        @if (Auth::user()->role)
                                                            <a href="{{ route('adverts.delete', $advert->id) }}"
                                                                class="btn btn-outline-danger btn-sm" title="Delete Advert"
                                                                onclick="return confirm('Are you sure you want to delete this advert?')">
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
                                    <i class="fas fa-bullhorn fa-3x text-muted"></i>
                                </div>
                                <h5 class="text-muted">No adverts found</h5>
                                <p class="text-muted mb-4">Get started by creating your first advert.</p>
                                <a href="{{ route('adverts.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Create First Advert
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Pagination -->
                    @if ($adverts->hasPages())
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-muted">
                                    Showing {{ $adverts->firstItem() }} to {{ $adverts->lastItem() }} of
                                    {{ $adverts->total() }} entries
                                </div>
                                <div>
                                    {!! $adverts->links() !!}
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
                                <h4 class="mb-0">{{ $adverts->total() }}</h4>
                                <small>Total Published</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-bullhorn fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">
                                    @php
                                        $activeAdverts = $adverts
                                            ->filter(function ($advert) {
                                                return !\Carbon\Carbon::parse($advert->due_date)->isPast();
                                            })
                                            ->count();
                                    @endphp
                                    {{ $activeAdverts }}
                                </h4>
                                <small>Active</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-play-circle fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">
                                    @php
                                        $expiredAdverts = $adverts
                                            ->filter(function ($advert) {
                                                return \Carbon\Carbon::parse($advert->due_date)->isPast();
                                            })
                                            ->count();
                                    @endphp
                                    {{ $expiredAdverts }}
                                </h4>
                                <small>Expired</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-clock fa-2x opacity-50"></i>
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

        <!-- Status Information -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-info">
                    <div class="card-header bg-info text-white">
                        <h6 class="card-title mb-0">
                            <i class="fas fa-info-circle me-2"></i>Advert Status Information
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Published</h6>
                                        <p class="text-muted mb-0 small">Adverts visible to the public on the website</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-clock text-warning me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Due Dates</h6>
                                        <p class="text-muted mb-0 small">Expired adverts are automatically marked</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-eye-slash text-secondary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Unpublishing</h6>
                                        <p class="text-muted mb-0 small">Move adverts to draft/unpublished status</p>
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
