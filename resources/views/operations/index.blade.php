@extends('layouts.app')

@section('page-title', 'Operations Management')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Operations Management</h2>
                        <p class="text-muted mb-0">Manage and monitor military operations</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('operations.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add Operation
                        </a>
                        @if (Auth::user()->role)
                            <a href="{{ route('operation.deactivated') }}" class="btn btn-warning">
                                <i class="fas fa-archive me-2"></i>Archive
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
                        <form action="{{ route('operations') }}" method="GET" class="row g-3 align-items-end">
                            <div class="col-md-8">
                                <label for="search" class="form-label">Search Operations</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="term"
                                        placeholder="Search by name, operation type..." id="term"
                                        value="{{ request('term') }}">
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    @if (request('term'))
                                        <a href="{{ route('operations') }}" class="btn btn-outline-secondary">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <a href="{{ route('operations.create') }}" class="btn btn-success">
                                        <i class="fas fa-plus-circle me-2"></i>Create New
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Operations Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Active Operations ({{ $operations->total() }})</h5>
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
                                                        <h6 class="mb-1">{{ $operation->name }}</h6>
                                                        <small class="text-muted">Created:
                                                            {{ $operation->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $operation->operation_type }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success">Active</span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('operations.edit', $operation->id) }}"
                                                            class="btn btn-outline-primary btn-sm" title="Edit Operation">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        @if (Auth::user()->role)
                                                            <a href="{{ route('operations.delete', $operation->id) }}"
                                                                class="btn btn-outline-danger btn-sm"
                                                                title="Delete Operation"
                                                                onclick="return confirm('Are you sure you want to delete this operation?')">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            <a href="{{ route('operation.deactivate', $operation->id) }}"
                                                                class="btn btn-outline-warning btn-sm"
                                                                title="Deactivate Operation"
                                                                onclick="return confirm('Are you sure you want to deactivate this operation?')">
                                                                <i class="fas fa-archive"></i>
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
                                    <i class="fas fa-project-diagram fa-3x text-muted"></i>
                                </div>
                                <h5 class="text-muted">No operations found</h5>
                                <p class="text-muted mb-4">Get started by creating your first operation.</p>
                                <a href="{{ route('operations.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Create First Operation
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Pagination -->
                    @if ($operations->hasPages())
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-muted">
                                    Showing {{ $operations->firstItem() }} to {{ $operations->lastItem() }} of
                                    {{ $operations->total() }} entries
                                </div>
                                <div>
                                    {!! $operations->links() !!}
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
                                <h4 class="mb-0">{{ $operations->total() }}</h4>
                                <small>Total Operations</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-project-diagram fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">{{ $operations->total() }}</h4>
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
                                <h4 class="mb-0">0</h4>
                                <small>Archived</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-pause-circle fa-2x opacity-50"></i>
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
