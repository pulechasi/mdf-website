@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="float-left">
                        <a href="{{ route('commanders.create') }}" class="btn btn-primary btn-xm mb-2">Add Commander</a>
                        @if (Auth::user()->role)
                        <a href="{{ route('commanders.retired') }}" class="btn btn-warning btn-xm mb-2">Retired commanders</a>

                        @endif
                    </div>
                    <div class="float-right">
                        <div class="mx-auto pull-right">

                            {{-- <form action="{{ route('commanders') }}" method="GET" role="search"> --}}

                                <div class="input-group">

                                    <input type="text" class="form-control" placeholder="Search commanders" id="searchInput">
                                    {{-- <a href="{{ route('commanders') }}"> --}}
                                        {{-- <span class="input-group-btn mb-1">
                                            <button class="btn btn-primary" type="button" title="Search commanders">
                                                <span class="fas fa-search"></span>
                                            </button>
                                        </span> --}}
                                    {{-- </a> --}}

                                </div>
                            {{-- </form> --}}

                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Rank</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($commanders->count() > 0)
                               {{-- @foreach ($commanders as $comma)
                                  <tr>
                                    <td>{{ $comma->name }}</td>
                                    <td>
                                        <img src="{{ asset($comma->picture) }}" alt="{{ $comma->name }}" height="50" width="50"
                                        style="border-radius:70%">
                                    </td>
                                    <td>
                                       <a href="{{ route('commanders.edit',$comma->id) }}" class="btn btn-primary btn-xs mb-1"><i class="fa fa-edit"></i> Edit</a>
                                       @if (Auth::user()->role)
                                         <a href="{{ route('commanders.delete',$comma->id) }}" class="btn btn-danger btn-xs mb-1"><i class="fa fa-trash"></i> Delete</a>
                                         <a href="{{ route('commanders.retire', $comma->id) }}" class="btn btn-warning btn-xs mb-1"><i class="fa fa-door-closed"></i> Retire</a>

                                       @endif
                                    </td>
                                  </tr>

                               @endforeach --}}
                               @foreach ($commanders as $index => $term)
                                <tr>
                                    <td>{{ $index + 1 + (request()->input('page', 1) - 1) * 5 }}</td>
                                    <td>
                                        <img src="{{ asset($term->commander->picture) }}" alt="{{ $term->commander->name }}" height="50" width="50"
                                        style="border-radius:70%">
                                    </td>
                                    <td>{{ $term->commander->name }}</td>
                                    <td>{{ $term->commander->title }}</td>
                                    <td>
                                        <!-- Actions like Edit or Retire -->
                                       @if (Auth::user()->role)
                                        <a href="{{ route('commanders.edit', $term->commander->id) }}" class="btn btn-info btn-sm mb-1"><i class="fa fa-edit"></i> Edit</a>

                                        <a href="{{ route('commanders.delete',$term->commander->id) }}" class="btn btn-danger btn-sm mb-2 ml-2"><i class="fa fa-trash"></i> Delete</a>
                                          @if ($term->commander->commander_type === 'MDF Commander')
                                            <form action="{{ route('commanders.retire', $term->commander->id) }}" method="POST" class="form-inline">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group mb-2">
                                                    <input class="form-control" type="date" name="retirement_date" required>
                                                </div>
                                                <button class="btn btn-warning mb-2 ml-2" type="submit"><i class="fa fa-check-circle"></i> Retire</button>
                                            </form>
                                          @endif

                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                            @else

                            <tr>
                                <th colspan="5" class="text text-danger text-center">No commanders available!</th>
                            </tr>

                            @endif

                        </tbody>

                    </table>
                </div>
                {!! $commanders->links() !!}
            </div>
        </div>

    </div>
</div>

@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', function() {
            var searchText = this.value.toLowerCase();
            var rows = document.querySelectorAll('table tbody tr');
            rows.forEach(function(row) {
                var rowData = row.textContent.trim().toLowerCase(); // Trim whitespace and convert to lowercase
                if (searchText === '' || rowData.includes(searchText)) {
                    row.style.display = ''; // Show row if searchText is empty or matches rowData
                } else {
                    row.style.display = 'none'; // Hide row otherwise
                }
            });
        });
    });
</script>
