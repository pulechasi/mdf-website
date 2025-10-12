@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Add new User</a>
                        </div>
                        <div class="float-right">
                            <div class="mx-auto pull-right">
                                <form action="{{ route('users') }}" method="GET" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="term"
                                            placeholder="Search users..." id="term">
                                        <span class="input-group-btn mb-1">
                                            <button class="btn btn-primary" type="submit" title="Search users">
                                                <span class="fas fa-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive"> <!-- Wrap the table in a responsive div -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->count() > 0)
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->role)
                                                        <a href="#" class="btn btn-info btn-xs">Admin</a>
                                                    @else
                                                        <a href="#" class="btn btn-info btn-xs">Author</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->id !== Auth::user()->id)
                                                        @if ($user->role)
                                                            <a href="{{ route('users.remove.admin', $user->id) }}"
                                                                class="btn btn-warning btn-xs">Remove admin</a>
                                                        @else
                                                            <a href="{{ route('users.make.admin', $user->id) }}"
                                                                class="btn btn-primary btn-xm">Make Admin</a>
                                                        @endif
                                                        <a href="{{ route('users.delete', $user->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    @else
                                                        <a href="#" class="btn btn-primary btn-xs">You're the current
                                                            admin</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <th colspan="5" class="text text-danger text-center">No available users!</th>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
