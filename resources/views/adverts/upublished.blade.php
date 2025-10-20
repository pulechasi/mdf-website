@extends('layouts.app')

@section('page-title', 'Unpublished Adverts')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Unpublished Adverts</h2>
                        <p class="text-muted mb-0">Manage draft and unpublished advertisements</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('adverts') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Published
                        </a>
                        <a href="{{ route('adverts.create') }}" class="btn btn-success">
                            <i class="fas fa-plus me-2"></i>Create New
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Card -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-warning">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="card-title text-warning mb-2">
                                    <i class="fas fa-eye-slash me-2"></i>Unpublished Adverts
                                </h5>
                                <p class="card-text mb-0">
                                    Adverts in draft status are not visible to the public. Review and publish when ready.
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="h3 text-warning mb-0">{{ $adverts->count() }}</div>
                                <small class="text-muted">Unpublished Adverts</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unpublished Adverts Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Unpublished Adverts ({{ $adverts->total() }})</h5>
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
                                                        <h6 class="mb-1 text-muted">{{ Str::limit($advert->title, 60) }}
                                                        </h6>
                                                        <small class="text-muted">Created:
                                                            {{ $advert->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary">{{ $advert->advert_type }}</span>
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
                                                    <span class="badge bg-warning">Unpublished</span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('adverts.publish', $advert->id) }}"
                                                            class="btn btn-success btn-sm" title="Publish Advert"
                                                            onclick="return confirm('Are you sure you want to publish this advert? It will become visible to the public.')">
                                                            <i class="fas fa-eye me-1"></i>Publish
                                                        </a>
                                                        <a href="{{ route('adverts.edit', $advert->id) }}"
                                                            class="btn btn-outline-primary btn-sm" title="Edit Advert">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        @if (Auth::user()->role)
                                                            <a href="{{ route('adverts.delete', $advert->id) }}"
                                                                class="btn btn-outline-danger btn-sm" title="Delete Advert"
                                                                onclick="return confirm('Are you sure you want to delete this advert? This action cannot be undone!')">
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
                                    <i class="fas fa-eye-slash fa-4x text-muted"></i>
                                </div>
                                <h4 class="text-muted">No Unpublished Adverts</h4>
                                <p class="text-muted mb-4">There are no adverts in the unpublished section.</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('adverts.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus me-2"></i>Create New Advert
                                    </a>
                                    <a href="{{ route('adverts') }}" class="btn btn-outline-secondary">
                                        <i class="fas fa-eye me-2"></i>View Published
                                    </a>
                                </div>
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
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">{{ $adverts->total() }}</h4>
                                <small>Total Unpublished</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-eye-slash fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">
                                    @php
                                        $vacancyCount = $adverts->where('advert_type', 'vacancy')->count();
                                    @endphp
                                    {{ $vacancyCount }}
                                </h4>
                                <small>Vacancies</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-briefcase fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">
                                    @php
                                        $tenderCount = $adverts->where('advert_type', 'tender')->count();
                                    @endphp
                                    {{ $tenderCount }}
                                </h4>
                                <small>Tenders</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-file-contract fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">
                                    @php
                                        $expiredCount = $adverts
                                            ->filter(function ($advert) {
                                                return \Carbon\Carbon::parse($advert->due_date)->isPast();
                                            })
                                            ->count();
                                    @endphp
                                    {{ $expiredCount }}
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
        </div>

        <!-- Publication Guidelines -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-info">
                    <div class="card-header bg-info text-white">
                        <h6 class="card-title mb-0">
                            <i class="fas fa-info-circle me-2"></i>Publication Guidelines
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-eye text-success me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Publish Adverts</h6>
                                        <p class="text-muted mb-0 small">Published adverts become visible to the public on
                                            the website.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-edit text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Review Content</h6>
                                        <p class="text-muted mb-0 small">Edit adverts before publishing to ensure accuracy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-clock text-warning me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Check Dates</h6>
                                        <p class="text-muted mb-0 small">Ensure due dates are valid before publishing.</p>
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

        .text-muted {
            opacity: 0.8;
        }
    </style>
@endsection
