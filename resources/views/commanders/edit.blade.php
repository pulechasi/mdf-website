@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6>EDIT COMMANDER</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('commanders.update',$commander->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="name">Rank:</label>
                            </div>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $commander->title }}">
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
                                <input type="text" id="name" name="name" class="form-control" value="{{ $commander->name }}">
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
                                    {{ $commander->commander_roles }}
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

                                <input type="date" id="appointed_date" name="appointed_date" class="form-control" value="{{ old('appointed_date', $commander->terms()->where('status', true)->first()->appointed_date ?? '') }}">
                                <span class="text-danger"><strong>@error('appointed_date')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="commander_type">Commander Type:</label>
                            </div>

                            <div class="col-md-8">
                                <select name="commander_type" id="commander_type" class="form-control"
                                   <option value="MDF Commander"
                                   {{ ($commander->commander_type === 'MDF Commander')? 'Selected': '' }}>MDF Commander</option>
                                  <option value="Chief Of Defence Forces"
                                  {{ ($commander->commander_type === 'Chief Of Defence Forces')? 'Selected': '' }}>Chief Of Defence Forces </option>
                                   <option value="Commander In Chief"
                                   {{ ($commander->commander_type === 'Commander In Chief')? 'Selected': '' }}>Commander In Chief</option>
                                   <option value="Army Commander"
                                   {{ ($commander->commander_type ==='Army Commander')? 'Selected': '' }}>Army Commander</option>
                                   <option value="Air Force Commander"
                                   {{ ($commander->commander_type === 'Air Force Commander')? 'Selected': '' }}>Air Force Commander</option>

                                   <option value="Navy Commander"
                                   {{ ($commander->commander_type === 'Navy Force Commander')? 'Selected': '' }}>Navy Force Commander</option>
                                   <option value="Malawi National Service"
                                   {{ ($commander->commander_type === 'Malawi National Service Commander')? 'Selected': '' }}>Malawi National Service Commander</option>


                                   <option value="Acting Land Forces Commander"
                                   {{ ($commander->commander_type ==='Acting Land Forces Commander')? 'Selected': '' }}>Acting Land Forces Commander</option>
                                   <option value="Acting Air Force Commander"
                                   {{ ($commander->commander_type === 'Acting Air Force Commander')? 'Selected': '' }}>Acting Air Force Commander</option>
                                   <option value="Acting Maritime Force Commander"
                                   {{ ($commander->commander_type === 'Acting Navy Force Commander')? 'Selected': '' }}>Acting Navy Force Commander</option>
                                   <option value="Acting Malawi National Service"
                                   {{ ($commander->commander_type === 'Acting Malawi National Service Commander')? 'Selected': '' }}>Acting Malawi National Service Commander</option>


                                </select>

                                <span class="text-danger"><strong>@error('commander_type')
                                {{ $message }}
                                @enderror</strong></span>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="picture">Upload Image:</label>
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
