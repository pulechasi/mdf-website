@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           <div class="card">
                <div class="card-header">
                    <h6>EDIT COMMAND</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('command.update', $command->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="rank">Select rank:</label>
                            </div>

                            <div class="col-md-8">
                                <select name="rank" id="rank" class="form-control">
                                   <option value="Chief Of Defence Forces"
                                   {{ ($command->rank === 'Chief Of Defence Forces')? 'Selected': ''}}>Chief Of Defence Forces</option>
                                   <option value="Commander"
                                   {{ ($command->rank === 'Commander')? 'Selected': ''}}>Commander</option>
                                   <option value="Deputy commander"
                                   {{ ($command->rank === 'Deputy commander')? 'Selected': '' }}>Deputy commander</option>
                                   <option value="Chief of staff"
                                   {{ ($command->rank === 'Chief of staff')? 'Selected': '' }}>Chief of staff</option>
                                   <option value="Chief of staff"
                                   {{ ($command->rank === 'Deputy Chief of staff')? 'Selected': '' }}>Deputy Chief of staff</option>
                                   <option value="Sergeant major"
                                   {{ ($command->rank === 'Sergeant major')? 'Selected': ''}}>Sergeant major</option>

                                </select>
                                <span class="text-danger"><strong>@error('rank')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Name :</label>
                            </div>

                            <div class="col-md-8">
                                <input type="text" name="name" id="name" class="form-control" value="{{ $command->name }}">

                                <span class="text-danger"><strong>@error('name')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                         </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Biology:</label>
                            </div>

                            <div class="col-md-8">
                                <textarea name="description"  cols="5" rows="6" class="form-control">
                                    {{ $command->description }}
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
