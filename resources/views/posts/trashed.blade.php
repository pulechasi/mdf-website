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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                           @if ($posts->count() > 0)
                             @foreach ($posts as $post )
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category }}</td>
                                    <td>
                                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" height="50" width="50"
                                        style="border-radius: 70%">
                                    </td>
                                    <td>
                                        <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-info btn-xm"><i class="fa fa-recycle"></i> Restore</a>
                                        <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger btn-xm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                             @endforeach

                           @else
                             <tr>
                                <td colspan="5" class="text text-danger text-center">No trashed posts available!</td>
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

