@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <div class="mx-auto pull-right mb-2">
                        {{--
                            <form action="{{ route('commanders.retired') }}" method="GET" role="search">

                                <div class="input-group">

                                    <input type="text" class="form-control" name="term" placeholder="Search commanders" id="term">
                                    <a href="{{ route('commanders.retired') }}">
                                        <span class="input-group-btn mb-1">
                                            <button class="btn btn-primary" type="submit" title="Search commanders">
                                                <span class="fas fa-search"></span>
                                            </button>
                                        </span>
                                    </a>

                                </div>
                            </form> --}}
                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Search commanders" id="searchInput">

                            </div>
                        </div>
                    </div>
                    {{-- <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                  Name
                                </th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($commanders->count() > 0)
                                @foreach ($commanders as $comma)
                                    <tr>
                                        <td>{{ $comma->name }}</td>
                                        <td>
                                            <img src="{{ asset($comma->picture) }}" alt="{{ $comma->name }}" height="50" width="50"
                                        style="border-radius:70%">
                                        </td>

                                        <td>
                                            <a href="{{ route('commanders.active',$comma->id) }}" class="btn btn-info btn-xs">
                                                <i class="fa fa-door-open"></i> Activate
                                            </a>
                                        </td>


                                    </tr>

                                @endforeach

                            @else
                            <tr>
                                <th colspan="5" class="text text-danger text-center">No retired Commander available!</th>
                            </tr>

                            @endif

                        </tbody>


                    </table> --}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Rank</th>
                                <th>Retirement Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($commanders->count())
                                @foreach ($commanders as $index => $term)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset($term->commander->picture) }}" alt="{{ $term->commander->name }}" height="50" width="50"
                                            style="border-radius:70%">
                                        </td>
                                        <td>{{ $term->commander->name }}</td>
                                        <td>{{ $term->commander->title }}</td>
                                        <td>{{ $term->retirement_date }}</td>

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center text-danger">No retired commanders available!</td>
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
