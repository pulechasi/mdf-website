@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
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

                                        <a href="{{ route('adverts.publish', $advert->id) }}" class="btn btn-info btn-xs"><i class="fa fa-parking"></i> publish</a>
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
