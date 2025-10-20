@extends('layouts.app')

@section('page-title', 'Commanders Management')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Commanders Management</h2>
                        <p class="text-muted mb-0">Manage active military commanders</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('commanders.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add Commander
                        </a>
                        @if (Auth::user()->role)
                            <a href="{{ route('commanders.retired') }}" class="btn btn-warning">
                                <i class="fas fa-user-clock me-2"></i>Retired Commanders
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
                        <div class="row g-3 align-items-end">
                            <div class="col-md-8">
                                <label for="searchInput" class="form-label">Search Commanders</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name, rank..."
                                        id="searchInput">
                                    <button class="btn btn-outline-primary" type="button" id="searchButton">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-outline-secondary" type="button" id="clearSearch"
                                        style="display: none;">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <a href="{{ route('commanders.create') }}" class="btn btn-success">
                                        <i class="fas fa-plus-circle me-2"></i>Add New Commander
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Commanders Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Active Commanders ({{ $commanders->total() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($commanders->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="commandersTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">#</th>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Rank/Title</th>
                                            <th>Type</th>
                                            <th class="text-end pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($commanders as $index => $term)
                                            <tr>
                                                <td class="ps-4">
                                                    {{ $index + 1 + ($commanders->currentPage() - 1) * $commanders->perPage() }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset($term->commander->picture) }}"
                                                        alt="{{ $term->commander->name }}" class="rounded-circle"
                                                        width="50" height="50" style="object-fit: cover;">
                                                </td>
                                                <td>
                                                    <div>
                                                        <h6 class="mb-1">{{ $term->commander->name }}</h6>
                                                        {{-- <small class="text-muted">Active Commander</small> --}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $term->commander->title }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge bg-secondary">{{ $term->commander->commander_type }}</span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    @if (Auth::user()->role)
                                                        <div class="btn-group" role="group">
                                                            <a href="{{ route('commanders.edit', $term->commander->id) }}"
                                                                class="btn btn-outline-primary btn-sm"
                                                                title="Edit Commander">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('commanders.delete', $term->commander->id) }}"
                                                                class="btn btn-outline-danger btn-sm"
                                                                title="Delete Commander"
                                                                onclick="return confirm('Are you sure you want to delete this commander?')">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            @if ($term->commander->commander_type === 'MDF Commander')
                                                                <button type="button"
                                                                    class="btn btn-outline-warning btn-sm"
                                                                    title="Retire Commander" data-bs-toggle="modal"
                                                                    data-bs-target="#retireModal{{ $term->commander->id }}">
                                                                    <i class="fas fa-user-clock"></i>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>

                                            <!-- Retire Modal -->
                                            @if ($term->commander->commander_type === 'MDF Commander')
                                                <div class="modal fade" id="retireModal{{ $term->commander->id }}"
                                                    tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Retire Commander</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <form
                                                                action="{{ route('commanders.retire', $term->commander->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to retire
                                                                        <strong>{{ $term->commander->name }}</strong>?
                                                                    </p>
                                                                    <div class="mb-3">
                                                                        <label for="retirement_date"
                                                                            class="form-label">Retirement Date</label>
                                                                        <input type="date" class="form-control"
                                                                            name="retirement_date" required>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-warning">
                                                                        <i class="fas fa-user-clock me-1"></i>Confirm
                                                                        Retirement
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-user-shield fa-3x text-muted"></i>
                                </div>
                                <h5 class="text-muted">No commanders found</h5>
                                <p class="text-muted mb-4">Get started by adding commanders to the system.</p>
                                <a href="{{ route('commanders.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Add First Commander
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Pagination -->
                    @if ($commanders->hasPages())
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-muted">
                                    Showing {{ $commanders->firstItem() }} to {{ $commanders->lastItem() }} of
                                    {{ $commanders->total() }} entries
                                </div>
                                <div>
                                    {!! $commanders->links() !!}
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
                                <h4 class="mb-0">{{ $commanders->total() }}</h4>
                                <small>Total Commanders</small>
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
                                <h4 class="mb-0">
                                    {{ $commanders->where('commander.commander_type', 'MDF Commander')->count() }}</h4>
                                <small>MDF Commanders</small>
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
                                <h4 class="mb-0">
                                    {{ $commanders->where('commander.commander_type', '!=', 'MDF Commander')->count() }}
                                </h4>
                                <small>Other Commanders</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-users fa-2x opacity-50"></i>
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
                                <small>Retired</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-user-clock fa-2x opacity-50"></i>
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

        .modal-header {
            border-bottom: 1px solid #e9ecef;
        }

        .modal-footer {
            border-top: 1px solid #e9ecef;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const clearSearch = document.getElementById('clearSearch');
            const searchButton = document.getElementById('searchButton');

            function performSearch() {
                const searchText = searchInput.value.toLowerCase().trim();
                const rows = document.querySelectorAll('#commandersTable tbody tr');
                let visibleCount = 0;

                rows.forEach(function(row) {
                    if (row.classList.contains('modal')) return; // Skip modal rows

                    const rowData = row.textContent.toLowerCase();
                    if (searchText === '' || rowData.includes(searchText)) {
                        row.style.display = '';
                        visibleCount++;
                    } else {
                        row.style.display = 'none';
                    }
                });

                // Show/hide clear button
                clearSearch.style.display = searchText ? 'block' : 'none';

                // Show no results message if needed
                const noResultsRow = document.getElementById('noResults');
                if (visibleCount === 0 && searchText) {
                    if (!noResultsRow) {
                        const tbody = document.querySelector('#commandersTable tbody');
                        const tr = document.createElement('tr');
                        tr.id = 'noResults';
                        tr.innerHTML =
                            `<td colspan="6" class="text-center py-4 text-muted"><i class="fas fa-search me-2"></i>No commanders found matching your search</td>`;
                        tbody.appendChild(tr);
                    }
                } else if (noResultsRow) {
                    noResultsRow.remove();
                }
            }

            searchInput.addEventListener('input', performSearch);
            searchButton.addEventListener('click', performSearch);

            clearSearch.addEventListener('click', function() {
                searchInput.value = '';
                performSearch();
                searchInput.focus();
            });

            // Enable Enter key to search
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });
        });
    </script>
@endsection
