@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('command.create') }}" class="btn btn-primary btn-xm mb-2">
                         Add on command</a>
                    <table class="table table-striped">
                       <thead>
                        <tr>
                            <th>Name</th>
                            <th>Rank</th>
                            <th>Action</th>
                        </tr>
                       </thead>
                       <tbody>
                        @if ($command->count() > 0)
                          @foreach ($command as $comma)
                            <tr>
                                <td>{{ $comma->name }}</td>
                                <td>{{ $comma->rank }}</td>
                                <td>
                                  <a href="{{ route('command.edit',$comma->id) }}" class="btn btn-primary btn-xs mb-1">
                                  <i class="fa fa-edit"></i>  Edit</a>
                                  <a href="{{ route('command.delete', $comma->id) }}" class="btn btn-danger btn-xs mb-1">
                                    <i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>

                          @endforeach

                        @else
                            <tr>
                                <td colspan="5" class="text text-danger text-center">No command structure available!</td>
                            </tr>
                        @endif


                       </tbody>

                    </table>
                </div>
                {!! $command->links() !!}
            </div>
        </div>

    </div>
</div>

@endsection
