@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="col-md-10">
            <div class="pb-3 ">
                <a href="{{ route('slides.create') }}" class="btn btn-success">Create New Slide</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Link URL</th>
                                    <th>Button Text</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slides as $slide)
                                    <tr>
                                        <td><img src="{{ asset('storage/slider_image/' . $slide->image) }}"
                                                alt="{{ $slide->title }}" width="100"></td>
                                        <td>{{ $slide->title }}</td>
                                        <td>{{ $slide->description }}</td>
                                        <td>{{ $slide->link_url }}</td>
                                        <td>{{ $slide->button_text }}</td>
                                        <td>
                                            <a href="{{ route('slides.edit', $slide) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('slides.destroy', $slide) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this slide?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
