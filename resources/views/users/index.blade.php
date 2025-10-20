@extends('layouts.app')

@section('page-title', 'Users Management')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Users Management</h2>
                        <p class="text-muted mb-0">Manage system users and their permissions</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add New User
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
                        <form action="{{ route('users') }}" method="GET" class="row g-3 align-items-end">
                            <div class="col-md-8">
                                <label for="search" class="form-label">Search Users</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="term"
                                        placeholder="Search by name, email..." id="term" value="{{ request('term') }}">
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    @if (request('term'))
                                        <a href="{{ route('users') }}" class="btn btn-outline-secondary">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <a href="{{ route('users.create') }}" class="btn btn-success">
                                        <i class="fas fa-user-plus me-2"></i>Add User
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">System Users ({{ $users->total() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($users->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">User</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="ps-4">
                                                    <div>
                                                        <h6 class="mb-1">{{ $user->name }}</h6>
                                                        <small class="text-muted">Joined:
                                                            {{ $user->created_at->format('M j, Y') }}</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted">{{ $user->email }}</small>
                                                </td>
                                                <td>
                                                    @if ($user->role)
                                                        <span class="badge bg-danger">Administrator</span>
                                                    @else
                                                        <span class="badge bg-primary">Author</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->id === Auth::user()->id)
                                                        <span class="badge bg-success">Current User</span>
                                                    @else
                                                        <span class="badge bg-secondary">Active</span>
                                                    @endif
                                                </td>
                                                <td class="text-end pe-4">
                                                    @if ($user->id !== Auth::user()->id)
                                                        <div class="btn-group" role="group">
                                                            @if ($user->role)
                                                                <a href="{{ route('users.remove.admin', $user->id) }}"
                                                                    class="btn btn-outline-warning btn-sm"
                                                                    title="Remove Admin"
                                                                    onclick="return confirm('Are you sure you want to remove admin privileges from this user?')">
                                                                    <i class="fas fa-user-minus me-1"></i>Remove Admin
                                                                </a>
                                                            @else
                                                                <a href="{{ route('users.make.admin', $user->id) }}"
                                                                    class="btn btn-outline-primary btn-sm"
                                                                    title="Make Admin"
                                                                    onclick="return confirm('Are you sure you want to make this user an administrator?')">
                                                                    <i class="fas fa-user-shield me-1"></i>Make Admin
                                                                </a>
                                                            @endif
                                                            <a href="{{ route('users.delete', $user->id) }}"
                                                                class="btn btn-outline-danger btn-sm" title="Delete User"
                                                                onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone!')">
                                                                <i class="fas fa-trash me-1"></i>Delete
                                                            </a>
                                                        </div>
                                                    @else
                                                        <span class="text-muted small">
                                                            <i class="fas fa-info-circle me-1"></i>Current session
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-users fa-3x text-muted"></i>
                                </div>
                                <h5 class="text-muted">No users found</h5>
                                <p class="text-muted mb-4">Get started by adding users to the system.</p>
                                <a href="{{ route('users.create') }}" class="btn btn-primary">
                                    <i class="fas fa-user-plus me-2"></i>Add First User
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Pagination -->
                    @if ($users->hasPages())
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-muted">
                                    Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of
                                    {{ $users->total() }} entries
                                </div>
                                <div>
                                    {!! $users->links() !!}
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
                                <h4 class="mb-0">{{ $users->total() }}</h4>
                                <small>Total Users</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-users fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">{{ $users->where('role', true)->count() }}</h4>
                                <small>Administrators</small>
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
                                <h4 class="mb-0">{{ $users->where('role', false)->count() }}</h4>
                                <small>Authors</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-user-edit fa-2x opacity-50"></i>
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
                                <h4 class="mb-0">1</h4>
                                <small>Online</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-circle fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Notice -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-warning">
                    <div class="card-header bg-warning text-white">
                        <h6 class="card-title mb-0">
                            <i class="fas fa-exclamation-triangle me-2"></i>Security Notice
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-user-shield text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Admin Privileges</h6>
                                        <p class="text-muted mb-0 small">Administrators have full system access and can
                                            manage all content and users.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-trash text-danger me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">User Deletion</h6>
                                        <p class="text-muted mb-0 small">Deleted users are permanently removed from the
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
