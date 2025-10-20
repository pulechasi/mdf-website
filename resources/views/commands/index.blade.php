@extends('layouts.app')

@section('page-title', 'Command Structure')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Command Structure</h2>
                        <p class="text-muted mb-0">Manage military command hierarchy and personnel</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('command.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add Command
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
                        <form action="{{ route('commands') }}" method="GET" class="row g-3 align-items-end">
                            <div class="col-md-8">
                                <label for="search" class="form-label">Search Command</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="term"
                                        placeholder="Search by name, rank..." id="term" value="{{ request('term') }}">
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    @if (request('term'))
                                        <a href="{{ route('commands') }}" class="btn btn-outline-secondary">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <a href="{{ route('command.create') }}" class="btn btn-success">
                                        <i class="fas fa-plus-circle me-2"></i>Add New
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Command Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Command Personnel ({{ $command->total() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($command->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">Name</th>
                                            <th>Rank</th>
                                            <th>Position</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($command as $comma)
                                            <tr>
                                                <td class="ps-4">
                                                    <div>
                                                        <h6 class="mb-1">{{ $comma->name }}</h6>
                                                        <small class="text-muted">Added:
                                                            {{ $comma->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $comma->rank }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge bg-secondary">{{ $comma->position ?? 'Not specified' }}</span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('command.edit', $comma->id) }}"
                                                            class="btn btn-outline-primary btn-sm" title="Edit Command">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('command.delete', $comma->id) }}"
                                                            class="btn btn-outline-danger btn-sm" title="Delete Command"
                                                            onclick="return confirm('Are you sure you want to delete this command personnel?')">
                                                            <i class="fas fa-trash"></i>
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
                                    <i class="fas fa-user-shield fa-3x text-muted"></i>
                                </div>
                                <h5 class="text-muted">No command personnel found</h5>
                                <p class="text-muted mb-4">Get started by adding command personnel to the structure.</p>
                                <a href="{{ route('command.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Add First Command
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Pagination -->
                    @if ($command->hasPages())
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-muted">
                                    Showing {{ $command->firstItem() }} to {{ $command->lastItem() }} of
                                    {{ $command->total() }} entries
                                </div>
                                <div>
                                    {!! $command->links() !!}
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
                                <h4 class="mb-0">{{ $command->total() }}</h4>
                                <small>Total Command</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-user-shield fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">{{ $command->total() }}</h4>
                                <small>Active</small>
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
                                <small>Senior Officers</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-star fa-2x opacity-50"></i>
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
