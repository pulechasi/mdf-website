@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6>ADD NEW USER</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Username:</label>
                            </div>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name">
                                <span class="text-danger"><strong>@error('name')
                                  {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3">
                               <label for="name">Email:</label>
                           </div>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email">
                                <span class="text-danger"><strong>@error('email')
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
