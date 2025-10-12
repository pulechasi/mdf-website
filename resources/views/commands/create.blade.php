@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">
                <div class="card-header">
                    <h6>MDF COMMAND </h6>
                </div>
                <div class="card-body">

                   <form action="{{ route('command.store') }}" method="post" enctype="multipart/form-data">
                     @csrf

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="rank">Select rank:</label>
                        </div>

                        <div class="col-md-8">
                            <select name="rank" id="rank" class="form-control">
                               <option value=""></option>
                               <option value="Chief Of Defence Forces">Chief Of Defence Forces</option>
                               <option value="Commander">Commander</option>
                               <option value="Deputy Commander">Deputy commander</option>
                               <option value="Chief of staff">Chief of staff</option>
                               <option value="Deputy Chief of staff">Deputy Chief of staff</option>
                               <option value="Sergeant major">Sergeant major </option>

                            </select>
                            <span class="text-danger"><strong>@error('rank')
                            {{ $message }}
                            @enderror</strong></span>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="name">Name:</label>
                        </div>

                        <div class="col-md-8">
                            <input type="text" name="name" id="name" class="form-control">

                            <span class="text-danger"><strong>@error('name')
                            {{ $message }}
                            @enderror</strong></span>

                        </div>
                     </div>
                    <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Biography:</label>
                            </div>

                            <div class="col-md-8">
                                <textarea name="description"  cols="5" rows="6" class="form-control">
                                </textarea>
                                <span class="text-danger"><strong>@error('description')
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
