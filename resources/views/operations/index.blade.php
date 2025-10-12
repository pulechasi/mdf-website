@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="float-left">
                        <a href="{{ route('operations.create') }}" class="btn btn-primary btn-xs mb-2">Add Operation</a>
                        @if (Auth::user()->role)
                          <a href="{{ route('operation.deactivated') }}" class="btn btn-info btn-xs mb-2">Archive</a>
                        @endif
                    </div>
                    <div class="float-right">
                        <div class="mx-auto pull-right">

                            <form action="{{ route('operations') }}" method="GET" role="search">

                                <div class="input-group">

                                    <input type="text" class="form-control" name="term" placeholder="Search operations" id="term">
                                    <a href="{{ route('operations') }}">
                                        <span class="input-group-btn mb-1">
                                            <button class="btn btn-primary" type="submit" title="Search operations">
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
                            <tr>
                                <th>Name</th>
                                <th>Operation type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if ($operations->count() > 0)

                           @foreach ($operations as $ope )
                            <tr>
                                <td>{{ $ope->name }}</td>

                                <td>{{ $ope->operation_type }}</td>
                                <td>
                                    <a href="{{ route('operations.edit', $ope->id) }}" class="btn btn-primary btn-xs m-1"><i class="fa fa-edit"></i> Edit</a>

                                    @if (Auth::user()->role)
                                      <a href="{{ route('operations.delete', $ope->id) }}" class="btn btn-danger btn-xs m-1"><i class="fa fa-trash"></i> Delete</a>
                                      <a href="{{ route('operation.deactivate', $ope->id) }}" class="btn btn-info btn-xs m-1"><i class="fa fa-eraser"></i> Deactivate</a>
                                    @endif
                                </td>
                            </tr>

                           @endforeach

                          @else
                              <tr>
                                <td colspan="5" class="text text-danger text-center">No Operations available!</td>
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
