@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Operation type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if ($operations->count() > 0)
                             @foreach ($operations as $ope )
                                 <td>{{ $ope->name }}</td>
                                 <td>{{ $ope->operation_type }}</td>
                                 <td>
                                    <a href="{{ route('operations.delete', $ope->id) }}" class="btn btn-danger btn-xs m-1"><i class="fa fa-trash"></i> Delete</a>
                                    <a href="{{ route('operation.activate', $ope->id) }}" class="btn btn-info btn-xs m-1"><i class="fa fa-eraser"></i> Activate</a>
                                 </td>
                             @endforeach

                          @else
                              <tr>
                                <td colspan="5" class="text text-danger text-center">No inactive operations available!</td>
                              </tr>
                          @endif

                        </tbody>

                    </table>
                </div>
                {!! $operations->links() !!}
            </div>
        </div>

    </div>
</div>

@endsection
