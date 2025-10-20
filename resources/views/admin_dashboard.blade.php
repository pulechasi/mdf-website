@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('content')
    <div class="dashboard-container">
        <!-- Welcome Section -->
        <div class="welcome-section mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-card bg-primary text-white p-4 rounded">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="mb-2">Welcome back, {{ Auth::user()->name }}!</h2>
                                <p class="mb-0 opacity-75">Here's what's happening with your system today.</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="date-display">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    {{ now()->format('l, F j, Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-section mb-4">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="card-title text-muted mb-2">TOTAL POSTS</h6>
                                    <h3 class="mb-0">156</h3>
                                    <small class="text-success">
                                        <i class="fas fa-arrow-up me-1"></i>12% increase
                                    </small>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-ticket-alt text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="card-title text-muted mb-2">ACTIVE OPERATIONS</h6>
                                    <h3 class="mb-0">8</h3>
                                    <small class="text-warning">
                                        <i class="fas fa-clock me-1"></i>3 ongoing
                                    </small>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-project-diagram text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="card-title text-muted mb-2">SYSTEM USERS</h6>
                                    <h3 class="mb-0">42</h3>
                                    <small class="text-info">
                                        <i class="fas fa-user me-1"></i>5 online
                                    </small>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-users text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6 class="card-title text-muted mb-2">PENDING TASKS</h6>
                                    <h3 class="mb-0">15</h3>
                                    <small class="text-danger">
                                        <i class="fas fa-exclamation me-1"></i>3 urgent
                                    </small>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas fa-tasks text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="main-content-section">
            <div class="row">
                <!-- Recent Activity -->
                <div class="col-lg-8 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Recent Activity</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                        </div>
                        <div class="card-body">
                            <div class="activity-list">
                                <div class="activity-item d-flex align-items-start mb-3">
                                    <div class="activity-icon me-3">
                                        <i class="fas fa-user-plus text-success"></i>
                                    </div>
                                    <div class="activity-content flex-grow-1">
                                        <h6 class="mb-1">New user registered</h6>
                                        <p class="mb-1 text-muted">John Doe joined the system</p>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </div>

                                <div class="activity-item d-flex align-items-start mb-3">
                                    <div class="activity-icon me-3">
                                        <i class="fas fa-file-alt text-primary"></i>
                                    </div>
                                    <div class="activity-content flex-grow-1">
                                        <h6 class="mb-1">New post created</h6>
                                        <p class="mb-1 text-muted">"Monthly Operations Report" was published</p>
                                        <small class="text-muted">4 hours ago</small>
                                    </div>
                                </div>

                                <div class="activity-item d-flex align-items-start mb-3">
                                    <div class="activity-icon me-3">
                                        <i class="fas fa-cog text-warning"></i>
                                    </div>
                                    <div class="activity-content flex-grow-1">
                                        <h6 class="mb-1">System update</h6>
                                        <p class="mb-1 text-muted">Security patches applied successfully</p>
                                        <small class="text-muted">Yesterday</small>
                                    </div>
                                </div>

                                <div class="activity-item d-flex align-items-start mb-3">
                                    <div class="activity-icon me-3">
                                        <i class="fas fa-shield-alt text-info"></i>
                                    </div>
                                    <div class="activity-content flex-grow-1">
                                        <h6 class="mb-1">Security alert</h6>
                                        <p class="mb-1 text-muted">Multiple failed login attempts detected</p>
                                        <small class="text-muted">2 days ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="mb-0">Quick Actions</h5>
                        </div>
                        <div class="card-body">
                            <div class="quick-actions">
                                <a href="{{ route('posts') }}"
                                    class="quick-action-item d-flex align-items-center p-3 mb-3 rounded">
                                    <div class="action-icon me-3">
                                        <i class="fas fa-ticket-alt text-primary"></i>
                                    </div>
                                    <div class="action-content">
                                        <h6 class="mb-1">Manage Posts</h6>
                                        <small class="text-muted">Create and edit posts</small>
                                    </div>
                                </a>

                                <a href="{{ route('operations') }}"
                                    class="quick-action-item d-flex align-items-center p-3 mb-3 rounded">
                                    <div class="action-icon me-3">
                                        <i class="fas fa-project-diagram text-success"></i>
                                    </div>
                                    <div class="action-content">
                                        <h6 class="mb-1">View Operations</h6>
                                        <small class="text-muted">Monitor ongoing operations</small>
                                    </div>
                                </a>

                                @if (Auth::user()->role)
                                    <a href="{{ route('users') }}"
                                        class="quick-action-item d-flex align-items-center p-3 mb-3 rounded">
                                        <div class="action-icon me-3">
                                            <i class="fas fa-users text-warning"></i>
                                        </div>
                                        <div class="action-content">
                                            <h6 class="mb-1">User Management</h6>
                                            <small class="text-muted">Manage system users</small>
                                        </div>
                                    </a>
                                @endif

                                <a href="{{ route('adverts') }}"
                                    class="quick-action-item d-flex align-items-center p-3 mb-3 rounded">
                                    <div class="action-icon me-3">
                                        <i class="fas fa-bullhorn text-info"></i>
                                    </div>
                                    <div class="action-content">
                                        <h6 class="mb-1">Advertisements</h6>
                                        <small class="text-muted">Manage ads and announcements</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Status -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">System Status</h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-3 mb-3">
                                    <div class="system-status-item">
                                        <i class="fas fa-database fa-2x text-primary mb-2"></i>
                                        <h6>Database</h6>
                                        <span class="badge bg-success">Online</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="system-status-item">
                                        <i class="fas fa-server fa-2x text-primary mb-2"></i>
                                        <h6>Server</h6>
                                        <span class="badge bg-success">Stable</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="system-status-item">
                                        <i class="fas fa-shield-alt fa-2x text-primary mb-2"></i>
                                        <h6>Security</h6>
                                        <span class="badge bg-success">Active</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="system-status-item">
                                        <i class="fas fa-network-wired fa-2x text-primary mb-2"></i>
                                        <h6>Network</h6>
                                        <span class="badge bg-success">Connected</span>
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
        .dashboard-container {
            padding: 0;
        }

        .welcome-card {
            background: linear-gradient(135deg, #1e3a5f 0%, #2c5282 100%);
        }

        .date-display {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 16px;
            border-radius: 20px;
            display: inline-block;
        }

        .stat-card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .activity-list .activity-item {
            padding: 8px 0;
            border-bottom: 1px solid #f8f9fa;
        }

        .activity-list .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }

        .quick-action-item {
            text-decoration: none;
            color: inherit;
            transition: all 0.2s ease;
            border: 1px solid transparent;
        }

        .quick-action-item:hover {
            background: #f8f9fa;
            border-color: #e9ecef;
            text-decoration: none;
            color: inherit;
        }

        .action-icon {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }

        .system-status-item {
            padding: 20px 0;
        }

        .system-status-item h6 {
            margin: 10px 0 5px 0;
            color: #6c757d;
        }

        /* Alert styling */
        .alert-success {
            border: none;
            border-left: 4px solid #198754;
        }

        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #fff;
            border-bottom: 1px solid #e9ecef;
            padding: 1rem 1.25rem;
            font-weight: 600;
        }
    </style>
@endsection
