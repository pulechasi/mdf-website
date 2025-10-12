@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="float-left">
                        <a href="{{ route('adverts.create') }}" class="btn btn-primary btn-xs mb-2">Add advert</a>
                        <a href="{{ route('adverts.unpublished') }}" class="btn btn-info btn-xs mb-2">Unpublished</a>
                    </div>
                    <div class="float-right">
                        <div class="mx-auto pull-right">

                            <form action="{{ route('adverts') }}" method="GET" role="search">

                                <div class="input-group">

                                    <input type="text" class="form-control" name="term" placeholder="Search adverts" id="term">
                                    <a href="{{ route('adverts') }}">
                                        <span class="input-group-btn mb-1">
                                            <button class="btn btn-primary" type="submit" title="Search adverts">
                                                <span class="fas fa-search"></span>
                                            </button>
                                        </span>
                                    </a>

                                </div>
                            </form>

                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Due date</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @if ($adverts->count() > 0)
                              @foreach ($adverts as $advert )
                                <tr>
                                    <td>{{ $advert->title }}</td>
                                    <td>{{ $advert->advert_type }}</td>
                                    <td>{{ $advert->due_date }}</td>
                                    <td>
                                        <a href="{{ route('adverts.edit', $advert->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="{{ route('adverts.unpublish', $advert->id) }}" class="btn btn-info btn-xs"><i class="fa fa-ruble-sign"></i> unpublish</a>
                                        @if (Auth::user()->role)
                                            <a href="{{ route('adverts.delete', $advert->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>

                                        @endif
                                    </td>


                                </tr>

                              @endforeach

                            @else
                            <tr>
                                <th colspan="5" class="text text-center text-danger">No adverts available!</th>
                            </tr>

                            @endif


                        </tbody>

                    </table>
                </div>
                {!! $adverts->links() !!}
            </div>
        </div>

    </div>
</div>

@endsection
