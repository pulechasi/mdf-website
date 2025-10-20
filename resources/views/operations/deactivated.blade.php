@extends('layouts.app')

@section('page-title', 'Archived Operations')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Archived Operations</h2>
                        <p class="text-muted mb-0">Manage deactivated operations - restore or permanently delete</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('operations') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Active Operations
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
                                    <i class="fas fa-archive me-2"></i>Archived Operations
                                </h5>
                                <p class="card-text mb-0">
                                    Operations that have been deactivated and moved to archive.
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="h3 text-warning mb-0">{{ $operations->count() }}</div>
                                <small class="text-muted">Operations in Archive</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Archived Operations Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Archived Operations ({{ $operations->count() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($operations->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">Operation Name</th>
                                            <th>Operation Type</th>
                                            <th>Status</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($operations as $operation)
                                            <tr>
                                                <td class="ps-4">
                                                    <div>
                                                        <h6 class="mb-1 text-muted">{{ $operation->name }}</h6>
                                                        <small class="text-muted">Created:
                                                            {{ $operation->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary">{{ $operation->operation_type }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning">Archived</span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('operation.activate', $operation->id) }}"
                                                            class="btn btn-success btn-sm" title="Activate Operation"
                                                            onclick="return confirm('Are you sure you want to activate this operation?')">
                                                            <i class="fas fa-play-circle me-1"></i>Activate
                                                        </a>
                                                        <a href="{{ route('operations.delete', $operation->id) }}"
                                                            class="btn btn-danger btn-sm" title="Permanently Delete"
                                                            onclick="return confirm('Are you sure you want to PERMANENTLY delete this operation? This action cannot be undone!')">
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
                                    <i class="fas fa-archive fa-4x text-muted"></i>
                                </div>
                                <h4 class="text-muted">No Archived Operations</h4>
                                <p class="text-muted mb-4">There are no operations in the archive.</p>
                                <a href="{{ route('operations') }}" class="btn btn-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Active Operations
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Warning Section -->
        @if ($operations->count() > 0)
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card border-info">
                        <div class="card-header bg-info text-white">
                            <h6 class="card-title mb-0">
                                <i class="fas fa-exclamation-circle me-2"></i>Important Notice
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-play-circle text-success me-3 mt-1"></i>
                                        <div>
                                            <h6 class="mb-1">Activate Operations</h6>
                                            <p class="text-muted mb-0 small">Activated operations will return to your active
                                                operations list.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-trash text-danger me-3 mt-1"></i>
                                        <div>
                                            <h6 class="mb-1">Permanent Deletion</h6>
                                            <p class="text-muted mb-0 small">Deleted operations are permanently removed from
                                                the system.</p>
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
    </style>
@endsection
