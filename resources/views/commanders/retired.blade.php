@extends('layouts.app')

@section('page-title', 'Retired Commanders')

@section('content')
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-1">Retired Commanders</h2>
                        <p class="text-muted mb-0">View history of retired military commanders</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('commanders') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Active Commanders
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
                                    <i class="fas fa-user-clock me-2"></i>Retired Commanders
                                </h5>
                                <p class="card-text mb-0">
                                    Historical record of commanders who have completed their service.
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="h3 text-warning mb-0">{{ $commanders->count() }}</div>
                                <small class="text-muted">Retired Commanders</small>
                            </div>
                        </div>
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
                            <div class="col-md-12">
                                <label for="searchInput" class="form-label">Search Retired Commanders</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        placeholder="Search by name, rank, retirement date..." id="searchInput">
                                    <button class="btn btn-outline-primary" type="button" id="searchButton">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-outline-secondary" type="button" id="clearSearch"
                                        style="display: none;">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Retired Commanders Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Retired Commanders ({{ $commanders->total() }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @if ($commanders->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="retiredCommandersTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">#</th>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Rank</th>
                                            <th>Type</th>
                                            <th>Retirement Date</th>
                                            <th>Service Period</th>
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
                                                        width="50" height="50"
                                                        style="object-fit: cover; opacity: 0.7;">
                                                </td>
                                                <td>
                                                    <div>
                                                        <h6 class="mb-1 text-muted">{{ $term->commander->name }}</h6>
                                                        <small class="text-muted">Former Commander</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary">{{ $term->commander->title }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge bg-warning">{{ $term->commander->commander_type }}</span>
                                                </td>
                                                <td>
                                                    <small class="text-muted">
                                                        <i class="fas fa-calendar-day me-1"></i>
                                                        {{ \Carbon\Carbon::parse($term->retirement_date)->format('M j, Y') }}
                                                    </small>
                                                </td>
                                                <td>
                                                    @php
                                                        $appointedDate = \Carbon\Carbon::parse($term->appointed_date);
                                                        $retirementDate = \Carbon\Carbon::parse($term->retirement_date);
                                                        $serviceYears = $appointedDate->diffInYears($retirementDate);
                                                        $serviceMonths =
                                                            $appointedDate->diffInMonths($retirementDate) % 12;
                                                    @endphp
                                                    <small class="text-muted">
                                                        {{ $serviceYears }}y {{ $serviceMonths }}m
                                                    </small>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-user-clock fa-4x text-muted"></i>
                                </div>
                                <h4 class="text-muted">No Retired Commanders</h4>
                                <p class="text-muted mb-4">There are no retired commanders in the archive.</p>
                                <a href="{{ route('commanders') }}" class="btn btn-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Active Commanders
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

        <!-- Historical Information -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-info">
                    <div class="card-header bg-info text-white">
                        <h6 class="card-title mb-0">
                            <i class="fas fa-history me-2"></i>Historical Information
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas User-clock text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Service Records</h6>
                                        <p class="text-muted mb-0 small">Complete service history of retired commanders</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-calendar-alt text-success me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Service Period</h6>
                                        <p class="text-muted mb-0 small">Calculated from appointment to retirement</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-archive text-warning me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Historical Archive</h6>
                                        <p class="text-muted mb-0 small">Permanent record of commander service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <h4 class="mb-0">{{ $commanders->total() }}</h4>
                                <small>Total Retired</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-user-clock fa-2x opacity-50"></i>
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
                                        $currentYear = date('Y');
                                        $thisYearRetirements = $commanders
                                            ->filter(function ($term) use ($currentYear) {
                                                return \Carbon\Carbon::parse($term->retirement_date)->year ==
                                                    $currentYear;
                                            })
                                            ->count();
                                    @endphp
                                    {{ $thisYearRetirements }}
                                </h4>
                                <small>This Year</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-calendar fa-2x opacity-50"></i>
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
                                        $longestService = $commanders
                                            ->sortByDesc(function ($term) {
                                                $appointed = \Carbon\Carbon::parse($term->appointed_date);
                                                $retired = \Carbon\Carbon::parse($term->retirement_date);
                                                return $appointed->diffInYears($retired);
                                            })
                                            ->first();
                                        $longestYears = $longestService
                                            ? \Carbon\Carbon::parse($longestService->appointed_date)->diffInYears(
                                                \Carbon\Carbon::parse($longestService->retirement_date),
                                            )
                                            : 0;
                                    @endphp
                                    {{ $longestYears }}
                                </h4>
                                <small>Longest Service (years)</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-award fa-2x opacity-50"></i>
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
                                        $avgService = $commanders->avg(function ($term) {
                                            $appointed = \Carbon\Carbon::parse($term->appointed_date);
                                            $retired = \Carbon\Carbon::parse($term->retirement_date);
                                            return $appointed->diffInYears($retired);
                                        });
                                    @endphp
                                    {{ round($avgService, 1) }}
                                </h4>
                                <small>Avg Service (years)</small>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-chart-line fa-2x opacity-50"></i>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const clearSearch = document.getElementById('clearSearch');
            const searchButton = document.getElementById('searchButton');

            function performSearch() {
                const searchText = searchInput.value.toLowerCase().trim();
                const rows = document.querySelectorAll('#retiredCommandersTable tbody tr');
                let visibleCount = 0;

                rows.forEach(function(row) {
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
                        const tbody = document.querySelector('#retiredCommandersTable tbody');
                        const tr = document.createElement('tr');
                        tr.id = 'noResults';
                        tr.innerHTML =
                            `<td colspan="7" class="text-center py-4 text-muted"><i class="fas fa-search me-2"></i>No retired commanders found matching your search</td>`;
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
