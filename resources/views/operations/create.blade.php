@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6>NEW OPERATION</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('operations.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Operation Name:</label>
                            </div>

                            <div class="col-md-8">

                                <input type="text" id="name" name="name" class="form-control">
                                <span class="text-danger"><strong>@error('name')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="description">Description:</label>
                            </div>

                            <div class="col-md-8">
                                <textarea name="description" id="summernote" cols="5" rows="6" class="form-control">
                                </textarea>
                                <span class="text-danger"><strong>@error('description')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="operation_type">Select Operation Type:</label>
                            </div>

                            <div class="col-md-8">
                                <select name="operation_type" id="operation_type" class="form-control">
                                   <option value=""></option>
                                   <option value="Internal">Internal</option>
                                   <option value="External">External</option>

                                </select>
                                <span class="text-danger"><strong>@error('operation_type')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="image">Upload Image:</label>
                            </div>

                            <div class="col-md-8">
                                <input type="file" name="image" id="image" class="form-control">
                                <span class="text-danger"><strong>@error('image')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-8 text-center">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
