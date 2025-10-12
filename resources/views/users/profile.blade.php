@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6>EDIT YOUR PROFILE</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profiles.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="name">Username:</label>
                                </div>
                                <div class="col-md-8">

                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ $user->name }}">
                                    <span class="text-danger"><strong>
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="email">Email:</label>
                                </div>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ $user->email }}">
                                    <span class="text-danger"><strong>
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="name">Set new Password:</label>
                                </div>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" name="password">
                                    <span class="text-danger"><strong>
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="picture">Profile Picture:</label>
                                </div>

                                <div class="col-md-8">
                                    <input type="file" name="picture" id="picture" class="form-control">
                                    <span class="text-danger"><strong>
                                            @error('picture')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="about">About yourself:</label>
                                </div>

                                <div class="col-md-8">
                                    <textarea name="about" id="summernote" cols="5" rows="5" class="form-control">
                                    {{ $user->profile->about }}
                                </textarea>
                                    <span class="text-danger"><strong>
                                            @error('about')
                                                {{ $message }}
                                            @enderror
                                        </strong></span>

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
