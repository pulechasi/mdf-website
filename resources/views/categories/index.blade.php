@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-xm mb-2">
                        <i class="fa fa-plus-circle"></i> Add Category</a>
                    <table class="table table-striped">
                       <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                       </thead>
                       <tbody>
                        @if ($category->count() > 0)
                          @foreach ($category as $cate)
                            <tr>
                                <td>{{ $cate->name }}</td>
                                <td>
                                  <a href="{{ route('categories.edit',$cate->id) }}" class="btn btn-primary btn-xs">
                                  <i class="fa fa-edit"></i>  Edit</a>
                                  <a href="{{ route('categories.delete', $cate->id) }}" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>

                          @endforeach

                        @else
                            <tr>
                                <td colspan="5" class="text text-danger text-center">No categories available!</td>
                            </tr>
                        @endif


                       </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
