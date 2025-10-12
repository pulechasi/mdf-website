@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6>NEW COMMANDER</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('commanders.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="title">Rank:</label>
                            </div>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title">
                                <span class="text-danger"><strong>@error('title')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Name:</label>
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
                                <label for="name">Commander roles:</label>
                            </div>

                            <div class="col-md-8">
                                <textarea name="commander_roles" id="summernote" cols="5" rows="6" class="form-control">
                                </textarea>
                                <span class="text-danger"><strong>@error('commander_roles')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Appointed Date:</label>
                            </div>

                            <div class="col-md-8">

                                <input type="date" id="appointed_date" name="appointed_date" class="form-control">
                                <span class="text-danger"><strong>@error('appointed_date')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="commander_type">Select Commander Type:</label>
                            </div>

                            <div class="col-md-8">
                                <select name="commander_type" id="commander_type" class="form-control">
                                   <option value=""></option>
                                  <option value="Chief Of Defence Forces">Chief Of Defence Forces</option>
                                   <option value="MDF Commander">MDF Commander</option>
                                   <option value="Army Commander">Army Commander</option>
                                   <option value="Commander In Chief">Commander In Chief</option>
                                   <option value="Air Force Commander">Air Force Commander</option>
                                   <option value="Navy Commander">Navy Commander</option>
                                   <option value="Malawi National Service Commander">Malawi National Service Commander</option>
                                   <option value="Acting Land Forces Commander"> Acting Land Forces Commander</option>
                                   <option value="Acting Air Force Commander">Acting Air Force Commander</option>
                                   <option value="Acting Navy Force Commander">Acting Navy Force Commander</option>
                                   <option value="Acting Malawi National Service Commander">Acting Malawi National Service Commander</option>



                                </select>
                                <span class="text-danger"><strong>@error('commander_type')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="image">Upload Picture:</label>
                            </div>

                            <div class="col-md-8">
                                <input type="file" name="picture" id="picture" class="form-control">
                                <span class="text-danger"><strong>@error('picture')
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
