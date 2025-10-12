@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2>Edit Slide</h2>
                    <form action="{{ route('slides.update', $slide) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $slide->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="1" required>{{ $slide->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="link_url">Link URL</label>
                            <input type="text" class="form-control" id="link_url" name="link_url"
                                value="{{ $slide->link_url }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="button_text">Button Text</label>
                            <input type="text" class="form-control" id="button_text" name="button_text"
                                value="{{ $slide->button_text }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Slide</button>
                        <a href="{{ route('slides.index') }}" class="btn btn-info">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
